<?php 


$json =  '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Rodrigo","idade":25},{"nome":"Marcos","idade":18}]'; 

$lojas = '[{"id": "1","nome": "codeeasy","telefone": "0000-0000","endereco": "rua codeeasy norte"},{"id": "3","nome": "spani","telefone": "1111-1111","endereco": "rua spani norte"},{"id": "4","nome": "bela vista","telefone": "2222-2222","endereco": "rua bela vista sul"},{"id": "5","nome": "nagem","telefone": "3333-33333","endereco": "rua nagem norte"},{"id": "6","nome": "uol","telefone": "4444-4444","endereco": "rua uol lete"}]'; 

	$data = json_decode($json,true); // true para array 

	$data2 = json_decode($lojas,true); // true para array //Por algum motivo está retornando null. 

	#var_dump($data[0]); 
	#var_dump($data2); 

    echo $data[0]["nome"]."<br/>";
	echo $data[0]['idade']."<br/>";
	
	
	echo $data2[0]["id"]."<br/>";
	echo $data2[0]['nome']."<br/>";
	echo $data2[0]['telefone']."<br/>";
	echo $data2[0]['endereco']."<br/>";

	


 ?>