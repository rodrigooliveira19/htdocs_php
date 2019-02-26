<?php 

namespace App\Controllers; 


use Psr\Http\Message\ServerRequestInterface as Request; 
use Psr\Http\Message\ResponseInterface as Response; 
use App\Dao\MySQL\CodeeasyGerenciadorDeLojas\LojasDao; 
use App\Models\Loja; 



#final, porque nenhuma classe Herdará
#ProductController. 
final class LojasController 
{

    #Metodo para retornar todas as lojas do banco na forma de Json.
	public function getLojas(Request $request, Response $response, array $args)
	{
		$lojasDao = new LojasDao(); 
		$result = $lojasDao->selectAll(); 
		if($result)
		{
			$response = $response->withJson($result); # Segredo de retornar Json
			return $response;  
		}else
		{
			$response->getBody()->write("Não foi possivel retornar as lojas."); 
		}

	}


	#Metodo para inserir uma loja no banco. 
	public function insertLoja(Request $request, Response $response, array $args)
	{
		try {

			$loja = $this->validarLoja($request,$response); 

			if($loja)
			{
				$lojasDao = new LojasDao(); 
				$result = $lojasDao->insertLoja($loja);

				if($result) 
					$response->getBody()->write("Loja cadastrada com sucesso..");
				else
					$response->getBody()->write("Não foi possivel cadastrar a loja.");

			}else
			{
				$response->getBody()->write("Ação não realizada. Verificar dados da loja");
				#echo (json_encode(array("Message":"Ação não realizada. Verificar dados da loja")));

			}
			
		} catch (Exception $e) {

			#$response = $response->withJson("Message=>Erro");
			#return $response; 
			
		}

	}

	public function getLojaIdProdutos(Request $request, Response $response, array $args)
	{
		try {

			$loja_id = $request->getParsedBody()['loja_id']; 

			if(isset($loja_id))
			{
				$lojasDao = new LojasDao(); 
				$result = $lojasDao->getLojaIdProdutos($loja_id); 

				if($result)
				{
					$response = $response->withJson($result);
					return $response;  
				}else
				{
					$response->getBody()->write("Não foi possivel busca a loja e seus produtos"); 
				}

			}else
			{
				$response->getBody()->write("Ação não realizada. Verificar dados de entrada"); 
			}
			
		} catch (Exception $e) {
			echo $e->getMessage(); 
		}

	}


    #Metodo para validar uma loja. 
	private function validarLoja(Request $request,Response $response)
	{
		try {

			$dados = $request->getParsedBody(); 

			$loja_nome = $dados['loja_nome']; 
			$loja_telefone = $dados['loja_telefone']; 
			$loja_endereco= $dados['loja_endereco']; 
			
		} catch (Exception $e) {
			return null; 
			
			
		}

		if(isset($loja_nome) && isset($loja_telefone) && isset($loja_endereco))
			{
				$loja = new Loja(); 

				$loja->setNome($loja_nome);
				$loja->setTelefone($loja_telefone);
				$loja->setEndereco($loja_endereco); 

				return $loja; 
			}else
			{
				return null; 
			}
	}

}

?>