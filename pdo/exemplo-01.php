<?php 

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","rodrigoso");

	$stmt = $conn->prepare("insert into tab_usuario(deslogin,dessenha) values(:LOGIN,:SENHA)"); 

	$login = 'jamile'; 
	$senha = '78998890'; 

	$stmt->bindParam(":LOGIN",$login); 
	$stmt->bindParam(":SENHA",$senha); 
	if($stmt->execute()){
		echo "Dados inseridos com sucesso";
	}
	else {
	 	echo "Erro na inserção"; 
	 } 


 ?>