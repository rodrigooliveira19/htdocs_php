<?php 



function ola($texto ,$periodo = "Bom dia"){
	return "Seja bem vindo $texto, $periodo"; 
}


function args(){

	$argumentos = func_get_args(); 

	if($argumentos[1] === "rodrigo")
		echo "<br/>Seja bem vindo $argumentos[1]<br/>";
	return $argumentos; 

}

#echo ola("Gizele")."<br/>"; 
#echo ola("rodrigo","boa tarde");

var_dump(args("ola","rodrigo","sonho","realizado")); 
?>