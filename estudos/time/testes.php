<?php 


$data = new DateTime("-4 hour"); 

echo $data->format("d/m/y H:i:s");

#Salvando o timestamp da data antes de adicionar o intervalo. 
$dt1 = strtotime( $data->format("y-m-d H:i:s") ); 

echo "<br/><br/>";

#constantes
echo $data::ATOM;

echo "<br/>";

echo $data::COOKIE;

echo "<br/><br/>";


#Para realizar operações com Datas utiliza-se a classe DateInterval. 

$dateInterval = new DateInterval("P8D"); 
$data->add($dateInterval);

echo $data->format("d/m/y H:i:s"); 



/*Calculando a diferença entre datas. 
Retorna a diferença em dias. As datas devem estar no 
padrão americano e utilizar traço em vez de barras. 
*/
$dt2 = strtotime($data->format("y-m-d H:i:s")); 
$dataFinal = ( ($dt2 - $dt1) / 86400); 

echo "<br/><br/>";

echo $dataFinal;
 ?>