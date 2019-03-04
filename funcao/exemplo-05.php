<?php 

$nome = "rodrigo"; 
$pessoa = array("nome"=>"rodrigo","idade"=>25); 


function trocaValor(&$nome){

	$nome = "marcos"; 
}

foreach ($pessoa as &$value) {
	
	if(gettype($value) === "string") $value = 30; 
	echo $value;

}

#trocaValor($nome); 
#echo $nome;

?>