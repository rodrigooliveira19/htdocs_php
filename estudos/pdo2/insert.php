<?php

	#Realizar a conexão. 
    $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","rodrigoso"); 

    #Preparar a query de forma segura, utilizando identificadores. 
    $stmt = $conn->prepare("insert into tab_usuario(deslogin,dessenha) values (:LOGIN,:SENHA)"); 

    #Pegar os valores.  
    $login = $_GET["login"]; 
    $senha = $_GET["senha"]; 

    #Ligar o identificador ao valor e executar. 
    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":SENHA",$senha); 

    if($stmt->execute())
    	echo "Usuário cadastrado com sucesso !!!";
    else
    	echo "Erro ao cadastrar usuário";


?>