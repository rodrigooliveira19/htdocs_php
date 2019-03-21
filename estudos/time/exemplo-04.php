<?php 


#Classe DateTime

$dt = new DateTime("-4 hour"); 
#echo $dt->format("d/m/Y H:i:s");  

$dtAtual = $dt->format("d/m/Y H:i:s");

#Somando dias. 
echo "<br/>Adicionando dias<br/>"; 
$periodo = new DateInterval("P1D"); 
$dt->add($periodo); 
#echo $dt->format("d/m/Y H:i:s"); 

$dtPos = $dt->format("d/m/Y H:i:s"); 

if( $dtAtual === $dtPos )
	echo "As datas são iguais"; 
else if($dtAtual != $dtPos)
	echo "As datas são diferentes"; 

echo "<br/>";

if( $dtAtual > $dtPos )
	echo "A data atual é maior"; 
else if($dtAtual < $dtPos)
	echo "A data atual é menor"; 

 ?>