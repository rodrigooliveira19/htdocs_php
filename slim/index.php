<?php 
require_once("vendor/autoload.php"); 

	$app = new \Slim\Slim(); 
	
	$app->get('/',function() {
		echo "Olá, seja bem vindo !!!!!";
		
	});

	#Metod get
	$app->get("/metodos/:var",function($var) use($app) {
		echo "Olá, seja bem vindo !!!!!"."<br/><br/>";

		var_dump($app->request->params()); 
		$nome = $app->request->get("nome");
		$idade = $app->request->get("idade");  

		echo "<br/><br/>"; 
		echo "$nome"."<br/>";
		echo "$idade"; 
		
	});

	#Metódo Post
	$app->post("/post",function() use($app) {
		echo "Olá, seja bem vindo !!!!!"."<br/><br/>";

		var_dump($app->request->params()); 
		$nome = $app->request->post("nome");
		$dtNascimento = $app->request->post("dtNascimento");  
		$rg = $app->request->post("rg"); 
		$cpf = $app->request->post("cpf");  
		$telefone = $app->request->post("telefone"); 
		$email = $app->request->post("email");

		echo "<br/><br/>"; 
		echo "Nome: $nome"."<br/>";
		echo "Data de Nascimento: $dtNascimento"."<br/>"; 
		echo "RG: $rg"."<br/>";
		echo "CPF: $cpf"."<br/>";
		echo "Telefone: $telefone"."<br/>";
		echo "Email: $email"."<br/>";
		
	});

	#Middleware

	function middlewareOne($letra){
		echo "Eu sou o middlewareOne <br/>";
	}

	function middlewareTwo(){
		echo "Eu sou o middlewareTwo<br/>";
	}

	function __toString($nome){
		return json_encode(array("nome"=>$nome,
								"idade"=>26)); 
	}	

	$app->get("/hello/:name",function($nome){
		echo "<h1><strong>Seja Bem Vindo(a), ".$nome."</strong></h1>"; 
		#echo __toString($nome); 

		echo json_encode(array("nome"=>$nome,
								"idade"=>26)); 
		
	}); 


	$app->get("/hola/:nome",function($nome){
		echo "<h1><strong>Testando o hola sem urlFor, ".$nome."</strong></h1>";  
		
	}); 

	$app->get("/nomes(/:name1)(/:name2)",function($name1=null,$name2=null){

		echo"Olá ".$name1;
		echo "</br>"; 
		echo "Olá ".$name2; 
	}); 

	# Metódo get com condições e chamando Middleware. 
	$app->get("/condicoes(/:letra)(/:numero)",'middlewareOne','middlewareTwo',function($letra=null,$numero=null){

		echo "$letra"."<br/>"; 
		echo "$numero"; 

	})->conditions(array(
		"letra"=>"[a-zA-Z]*", 
		"numero"=>"[0-9]*"
	)); 

	#Grupo de rotas e redirecionamento. 
	$app->group("/api",function() use($app){

		$app->group("/exemplo",function() use($app){ #Um grupo com dois caminhos
			
			$app->get("/nometeste/:nome",function($n){
				echo "Olá, ".$n."<br/>";
			})->name("hola"); 

			$app->get("/apelido/:apelido",function($apelido){
				echo "Seu apelido é ",$apelido; 
			}); 

			$app->get("/redirecionamento/:nome",function($nome) use($app){

				#$app->redirect("/slim/api/exemplo/hola/Rodrigo Forte"); 
				#$app->redirect("/slim/hello/$nome"); 

				# redireciona para a rota renomeada como hola
				$app->redirect($app->urlFor("hola",array("nome"=>"Janete Silva de Oliveira"))); 
			}); 
		}); 

	}); 

	$app->run(); 

 ?>