<?php 

 /*
   Este informa o caminho para carregamento
   das Classe de de negocio. Pacote Entidades. 
 */

   spl_autoload_register(function($nomeClass){ 
   		$dirClass = "src";
   		$fileName = $dirClass.DIRECTORY_SEPARATOR.$nomeClass.".php"; 

   		if(file_exists($fileName))
   			require_once($fileName); 
   }); 

 ?>