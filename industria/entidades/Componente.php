<?php 

#namespace Entidades; 

	class Componente{

		private $descInsumo= ""; 
		private $quantidade = 0; 

		function __construct($descInsumo,$quantidade){
			$this->descInsumo = $descInsumo; 
			$this->$quantidade = $quantidade; 
		}


		public function setDescInsumo($descInsumo){
			$this->descInsumo = $descInsumo; 
		}

		public function getDescInsumo(){
			return $this->$descInsumo; 
		}

		public function setQuantidade($quantidade){
			$this->quantidade = $quantidade; 
		}

		public function getQuantidade(){
			return $this->$quantidade; 
		}



		public function __toString(){
			return json_encode(array("descInsumo"=>$this->descInsumo, 
		                             "quantidade"=>$this->quantidade)); 
		}
	}
 ?>