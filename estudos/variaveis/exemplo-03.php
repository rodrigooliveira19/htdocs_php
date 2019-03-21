<?php 
   
// Tipos de dados

$nome = "Oliveira";
$ano = 1990; 
$salario = 5575.68; 

$frutas = array("abacaxi","laranja","pera");
echo $frutas[1]; 
//////////////////////////////////////////
$obj = new DateTime(); 
var_dump($obj); 
/////////////////////////////////////////
echo "<br/>";
$arq = fopen("exemplo-03.php", "r"); 
var_dump($arq); 

/////////////////////////////////////////
$nulo = null; 


 ?>