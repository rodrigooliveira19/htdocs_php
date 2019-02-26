<?php 

	$nome = "rodrigo silva de Oliveira"; 


	function getNome(){
		global $nome; 
		return $nome; #Erro
	} 

	echo getNome()."<br>"; 

	class Nome{
		function getnome(){
			global $nome; 
			return $nome; 
		}
	}

	$name = new Nome(); 
	echo $name->getNome(); 
 ?>