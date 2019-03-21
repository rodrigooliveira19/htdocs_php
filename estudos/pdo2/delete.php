<?php

	#Realizar a conexão. 
    $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","rodrigoso"); 

    #Preparar a query de forma segura, utilizando identificadores. 
    $stmt = $conn->prepare("delete from tab_usuario where idusuario= :ID"); 

    #Pegar os valores.  
    $id = $_GET["id"]; 

    #Ligar o identificador ao valor e executar.  
    $stmt->bindParam(":ID",$id); 

    if($stmt->execute())
    	echo "Usuário excluido com sucesso !!!";
    else
    	echo "Erro ao excluir usuário";


?>