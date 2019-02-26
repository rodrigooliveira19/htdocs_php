<?php 
	
	class Pessoa{

		public $nome; 

		public function falar(){
			return "Meu nome é ".$this->nome; 
		}
	}


	$p  = new Pessoa(); 
	$p->nome = "Larissa Silva";
	echo ($p->falar());
 ?>