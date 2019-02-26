<?php 

	
	// Funcionou para classes no mesmo diretório. 
	function __autoload($nomeClass){
		require_once("$nomeClass.php"); 

	}
/*
	function incluirclass($nomeClass){
		if(file_exists($nomeClass."php") == true){
			require_once($nomeClass."php"); 


		}
	}

	spl_autoload_register("incluirclass"); 
	spl_autoload_register(function($nomeClass){

		if(file_exists("abstract".DIRECTORY_SEPARATOR.$nomeClass."php") == true){
			require_once("abstract".DIRECTORY_SEPARATOR.$nomeClass."php"); 

		}

	}); 

	*/

	function my_autoload($nomeClass){
		include("a". DIRECTORY_SEPARATOR.$nomeClass."php"); 
	}

	spl_autoload_register("my_autoload");
    
 


	$carro = new DelRey(); 
	$carro->acelera(200);  

	echo "<br/>";

	$produto = new Produto(1,"Acerola",2.90); 
	var_dump($produto); 

 ?>