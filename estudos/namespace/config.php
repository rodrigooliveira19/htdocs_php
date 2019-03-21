<?php 
	
spl_autoload_register(function($nameClass){

	var_dump($nameClass); 
	echo "<br/>";
	$dirClass = "class"; 
	$fileName = $dirClass .DIRECTORY_SEPARATOR .$nameClass.".php"; 

	if(file_exists($fileName))
		require_once($fileName); 

}); 

 ?>