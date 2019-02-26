<?php 

namespace App\Controllers; 

use Psr\Http\Message\ServerRequestInterface as Request; 
use Psr\Http\Message\ResponseInterface as Response; 
use App\Dao\MySQL\CodeeasyGerenciadorDeLojas\ProdutosDao; 
use App\Models\Produto; 


#final, porque nenhuma classe Herdará
#ProductController.  
final class ProdutosController
{ 
	

    #Metodo que retorna os dados do produto, adicionando o id e nome da loja a 
    #qual pertence. 
	public function getProdutos(Request $request, Response $response,array $args)
	{
		#$response->getBody()->write("Olá, estou estudando Slim Framework"); 
        
		#$response = $response->withJson([ "message"=>"Olá, estou estudando Slim Framework"]); 
        /*
		$produtoDao = new ProdutosDao(); 
		$result = $produtoDao->selectAll(); 
		$dados = json_encode($result); 
		return $dados; 
        */
        #OU

        $produtoDao = new ProdutosDao(); 
		$result = $produtoDao->selectAll(); 
		$response = $response->withJson($result); #Transforma a matriz que vem do banco em um json. Simplimente podemos retornar o json através do return response. 
		return $response;  
	}

    #Metodo para inserir um produto no Banco. 
    #Considero que o id da loja vinrá no json. 
	public function insertProduto(Request $request, Response $response, array $args)
	{
		$produto = $this->validarProduto($request); 

		if($produto)
		{   
			$produtoDao = new ProdutosDao(); 

			$result = $produtoDao->insertProduto($produto); 
			
			if($result)
				$response->getBody()->write("Produto inserido com sucesso....."); 
			else
				$response->getBody()->write("Não foi possivel inserir o produto."); 
		}else
		{
			$response->getBody()->write("Não foi possivel inserir o produto."); 
		}

	}

    #Metodo para atualizar um produto. 
    #Permite mudar a qual loja pertence. 
	public function updateProduto(Request $request, Response $response, array $args)
	{
		$produto_id = $request->getParsedBody()['produto_id']; 
		
		$produto = $this->validarProduto($request); 

		if($produto)
		{
			$produto->setId($produto_id); 

			$produtoDao = new ProdutosDao();
			$result = $produtoDao->updateProduto($produto); 

			if($result)
				$response->getBody()->write("Atualização realizada com sucesso.."); 
			else
				$response->getBody()->write("Não foi possivel atualizar o produto"); 
		}else
		{
			$response->getBody()->write("Ação não realizada. Verificar dados do produto"); 
		}

	}

    
    #Metodo que apaga um produto no banco.
	public function deleteProduto(Request $request, Response $response, array  $args)
	{
		$produto_id = $request->getParsedBody()['produto_id'];

		if(isset($produto_id))
		{
			$produtoDao = new ProdutosDao(); 
			$result = $produtoDao->deleteProduto($produto_id); 

			if($result)
				$response->getBody()->write("Produto excluido com sucesso.."); 
			else
				$response->getBody()->write("Não foi possivel excluido o produto"); 
		}else
		{
			$response->getBody()->write("Ação não realizada. Verificar dados do produto"); 
		}

	}



    #Valida o json da solicitação antes de inserir o produto no banco. 
	private function validarProduto(Request $request)
	{
		$dados = $request->getParsedBody(); 

		#O id do produto é auto_incremente, o banco irá criar na inserção.  
		$loja_id= (int)$dados['loja_id']; 
		$nome= (String)$dados['produto_nome']; 
		$preco= (float)$dados['produto_preco']; 
		$quantidade= (int)$dados['produto_quantidade'];

		if(isset($loja_id) && isset($nome) && isset($preco) && isset($quantidade))
		{
			$produto = new Produto($loja_id); 
			$produto->setNome($nome);
			$produto->setPreco($preco);
			$produto->setQuantidade($quantidade);

			return $produto; 
		}else
		{
			return null; 
		}

	}

}

?>