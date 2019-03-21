<?php

	#Realizar a conexão. 
    $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","rodrigoso"); 

    #Preparar a query de forma segura, utilizando identificadores. 
    $stmt = $conn->prepare("update tab_usuario set deslogin = :LOGIN, dessenha = :SENHA where idusuario= :ID"); 

    #Pegar os valores.  
    $login = $_GET["login"]; 
    $senha = $_GET["senha"]; 
    $id = $_GET["id"]; 

    #Ligar o identificador ao valor e executar. 
    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":SENHA",$senha); 
    $stmt->bindParam(":ID",$id); 

    if($stmt->execute())
    	echo "Usuário atualizado com sucesso !!!";
    else
    	echo "Erro ao atualizar usuário";


?>