<?php 

	$nome = "Rodrigo Silva de Oliveira"; 

	function teste1(){
		global $nome; 
		echo $nome; 
	}

	function teste2(){
		global $nome; 
		echo $nome. " na fuction 2"; 
	}

	teste1();
	teste2(); 
 ?>