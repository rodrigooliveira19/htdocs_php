<?php 


function teste($callback){

	$callback(); 
}

teste(function(){

	echo "Terminou"; 
}); 


#ou 


$fn = function($a){

	var_dump($a); 

};


echo "<br/>";
$fn("Ola"); 


?>