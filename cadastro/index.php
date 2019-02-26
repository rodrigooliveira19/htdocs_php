<?php 

require_once("vendor/autoload.php"); 

	try {
		$conn = new PDO("mysql:dbname=cursorest;host=localhost","root","123456");

	} catch (Exception $e) {
		
	}

	$app = new Slim\Slim(); 

	$app->get("/produtos",function() use($conn){

		$stmt = $conn->prepare("select *from produto order by 2"); 
		$stmt->execute(); 
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
		echo json_encode($results,true); 
		#return json_encode($results,true);
	}); 

	$app->post("/produtos",function() use ($app,$conn){

		$stmt = $conn->prepare("insert into produto(nome,descricao,valor) 
						values(:NOME,:DESC,:VALOR)"); 
		
		#var_dump($app->request->params()); 
		
		try {

			/*
			$nome = $app->request->post('nome'); 
			$descricao = $app->request->post('descricao');
			$valor = (float)$app->request->post('valor');
			*/
			$nome = $_POST['nome'];
			$descricao = $_POST['descricao'];
			$valor = (float)$_POST['valor'];

			$stmt->bindParam(":NOME",$nome); 
			$stmt->bindParam(":DESC",$descricao);
			$stmt->bindParam(":VALOR",$valor);

			$stmt->execute();
			echo "Cadastrado com Sucesso"; 

		} catch (Exception $e) {
			echo "Erro <br/>".$e; 
		}

		
		/*
		try {
			$nome = $_POST['nome'];
			$descricao = $_POST['descricao'];
			$valor = (float)$_POST['valor'];
			#var_dump($app->request->params('valor'));
			#$var_dump($_POST); 
			#echo "$nome $descricao $valor"; 

			$stmt->bindParam(":NOME",$nome); 
			$stmt->bindParam(":DESC",$descricao);
			$stmt->bindParam(":VALOR",$valor);

			$stmt->execute();

		} catch (Exception $e) {
			echo "Erro ao pegar dados"."<br/>".$e;
			
		}

		*/
	}); 

	$app->put("/produtos/:id",function($id) use ($conn,$app){

		$stmt = $conn->prepare("update produto set nome =:NOME,descricao =:DESC, valor =:VALOR
									where id = :ID"); 
		try {
			$nome = $app->request->post('nome'); 
			#$nome = $_POST['nome'];
			$descricao = $_POST['descricao'];
			$valor = (float)$_POST['valor'];
			$cod = (int)$_POST['cod'];

			$stmt->bindParam(":NOME",$nome); 
			$stmt->bindParam(":DESC",$descricao); 
			$stmt->bindParam(":VALOR",$valor); 
			$stmt->bindParam(":ID",$cod); 

			$stmt->execute(); 
			
		} catch (Exception $e) {
			echo "Erro <br/>".$e;
		}

	}); 

	
	$app->delete("/produtos/:id",function($id) use ($conn,$app){

		$stmt = $conn->prepare("delete from produto where id = $id");
		$stmt->execute();

	});


	$app->run(); 

 ?>