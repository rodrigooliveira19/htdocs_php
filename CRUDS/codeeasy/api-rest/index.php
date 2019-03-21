<?php 

use Psr\Http\Message\ServerRequestInterface as Request; 
use Psr\Http\Message\ResponseInterface as Response; 

require_once("vendor/autoload.php"); 

#Habilitando as configurações de erro
#do  Slim Framework.
$configuration = [
	'settings'=>['displayErrorDetails'=>true,
	           ],
]; 

$configuration = new \Slim\Container($configuration); 
$app = new \Slim\App($configuration); 


#Middleware para validação de login
$validar = function(Request $request,Response  $response,$next){
   
	$data = $request->getParsedBody(); 
	$login = $data[0]['login']; 
	$senha = $data[0]['senha']; 
    

	if(isset($login) && isset($senha)){
		if($login==="rodrigo" && $senha==="123456"){
			$response->getBody()->write("Usuario Liberado<br/>");
			echo "Obj da posicao 1: ".$data[1]['login']." / ".$data[1]['senha']; 
			$response =  $next($request,$response); 
			return $response; 
		}
	}

	throw new \Exception("<br/>Usuario não autenticado", 404);
	
}; 


$app->get('/p',function(Request $request,Response  $response,array $args): Response{

	$response->getBody()->write("Olá, Slim Framework 3");
	return $response;  

}); 

$app->get('/cadastro[/{cor}]',function(Request $request, Response $response, array $args){

	$nome = $request->getQueryParams()['nome'];
	$idade = $request->getQueryParams()['idade'];
	$message = $_GET['message']; 
	#$cor = $_GET['cor'];
	$cor = $args['cor']; 

	return $response->getBody()->write("Olá $nome, você tem $idade anos.".
										"<br/>$message".
									     "<br/>$cor"); 
}); 

$app->post('/teste',function(Request $request,Response $response, array $args){
    #getParsedBody() retorna o corpo da solicitação em forma de matriz. 
	$data = $request->getParsedBody(); 
	echo "$data[nome]";
	echo "$data[idade]";
	echo "$data[sexo]";
	echo "$data[cpf]"."<br/>";
	echo "$data[post]"."<br/>";
	echo "Usando a rota post"; 
  
}); 

$app->put('/teste',function(Request $request,Response $response, array $args){
   
	$data = $request->getParsedBody(); 
	echo "$data[nome]";
	echo "$data[idade]";
	echo "$data[sexo]";
	echo "$data[cpf]"."<br/>";
	echo "Usando a rota put"; 
  
});

$app->delete('/teste',function(Request $request,Response $response, array $args){
   
	$data = $request->getParsedBody(); 
	echo "$data[nome]";
	echo "$data[idade]";
	echo "$data[sexo]";
	echo "$data[cpf]"."<br/>";
	echo "Usando a rota delete";
  
});


#rota login
$app->post('/login',function(Request $request,Response $response, array $args){
	$response->getBody()->write("Usuário Logado......."); 

})->add($validar); 




$app->run(); 

?>