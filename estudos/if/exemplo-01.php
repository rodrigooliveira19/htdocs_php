<?php 

	
	$idade =(int) $_GET["idade"]; 

	echo "<b>Qual a sua idade ?<b/>"; 
	echo "<br/>"; 
	echo $idade; 
	echo "<br/>";

	if($idade < 18)
		echo "Menor de idade .";
	else if($idade == 18)
		echo "Maior de idade";
	else
		echo "Vc tem mais que dezoito anos e já é maior de idade"; 
 ?>