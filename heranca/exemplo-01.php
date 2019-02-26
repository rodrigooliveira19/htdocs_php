<?php 

	
	class Documento{

		private $numero; 
		private $nome; 

		function __construct($nome){
			$this->nome = $nome; 
		}

		public function getNumero(){
			return $this->numero; 
		}

		public function setNumero($numero){
			$this->numero = $numero; 
		}

		public function getNome(){
			return $this->nome; 
		}
	}


	class CPF extends Documento{

		function __construct($nome){
			parent::__construct($nome); 

		}

		public function validar(): bool{
			$numeroCPF =  $this->getNumero(); 
			return true; 
		}
	}


	$doc = new CPF("CPF"); 
	$doc->setNumero("111111111"); 
	var_dump($doc->validar()); 

	echo($doc->getNome()); 
 ?>