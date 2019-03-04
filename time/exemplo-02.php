<?php 

 

#retorna o timestamp da data. 
$time = strtotime("04-03-2019"); 

echo "<br>"; 

echo strtotime("2019-03-04"); 

echo "<br>";

echo date("l, d/m/Y",$time);

$dia = date("d");
$dia +=10; 
echo "<br/>$dia"; 

echo "<br>"; 

#retorna a data atual. 
$time = strtotime("now");

#soma um dia na data atual. 
$time = strtotime("+1 day");
echo date("l, d/m/Y",$time);
 ?>