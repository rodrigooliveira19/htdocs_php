<?php

#array_sun consegue somar todos os valores passados em um  array. 
#int ...$valor ,armazena todos os valores passados em um array do tipo informado. 
function soma(int ...$valor){

	#var_dump($valor); 
	return array_sum($valor); 

}

echo soma(1,2,3,1.9);

?>