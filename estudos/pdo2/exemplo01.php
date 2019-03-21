<?php 

	#conexão
	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","rodrigoso"); 

	#Preparando a query e executando. 
	$stmt = $conn->prepare("select *from tab_usuario order by 1"); 
	$stmt->execute(); 

	#$results = $stmt->fetchAll();  # Indices , chaves e valores
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);  #chaves e valores. 

	#var_dump($results);  


	#Exemplo de Tratamento dos dados. 

	foreach ($results as $row) {
		foreach ($row as $key => $value) {
			
			echo "<strong>".$key.":</strong>".$value."<br/>"; 
		}

		echo "==================================<br/>";
	}

 ?>