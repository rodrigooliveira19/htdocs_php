<?php 

	/*
		Comentário de bloco 
	*/ 

	$nome = "<b>Rodrigo Silva de </b>"; 
	$sob = "<b>Oliveira</b>"; 
	$nomeC = $nome. " ".$sob; 
	echo $nomeC;

	exit; 


	echo  $nome;

	echo "<br>";
	unset($nome); 

	if(isset($nome)) 
		echo  $nome;
	else
		echo "Aspas em branco é definido como valor"; 
 

 ?>