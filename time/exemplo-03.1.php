<?php 

echo date("d-m-y"); 


$dia = date("d"); 

echo "<br/>.$dia";


echo "<br/>"; 

#retorna o timestamp de uma data. No caso abaixo, retorna o timestamp da data atual do servidor.
# - 4 hour retira a diferença de 4 hrs data data do servidor. 
$data =  strtotime("-4 hour");

#echo $data;

echo strftime("%d %m %G %H %M %S",$data); 


echo "<br/>";
$data =  strtotime("now");


echo strftime("%d %m %G %H %M %S",$data); 
 ?>