<?php 

	
	class Produto extends AbstractProduto{

		private $desc; 
		private $valor; 

		public function __construct($cod,$desc,$valor){
			$this->desc = $desc; 
			$this->valor = $valor; 
			parent::__construct($cod); 
		}


		public function setDesc($desc){
			$this->desc = $desc; 
		}

		public function getDesc(){
			return $this->desc;  
		}

		public function setValor(float $valor){
			$this->valor = $valor; 
		}

		public function getValor(){
			return $this->valor; 
		}
	}

 ?>