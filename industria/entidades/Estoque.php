<?php

#namespace Entidades; 

	class Estoque{

		private $cod; 
		private $valorMinimo; 
		private $valorAtual; 
		private $valorMaximo; 

		function __construct($cod,$valorMinimo,$valorAtual,$valorMaximo){
			$this->cod = $cod;
			$this->valorMinimo = $valorMinimo; 
			$this->valorAtual = $valorAtual; 
			$this->valorMaximo = $valorMaximo; 
		}

		public function setCod($cod){
			$this->cod = $cod; 
		}

		public function getId(){
			return $this->$cod; 
		}

		public function setValorMinimo($valorMinimo){
			$this->valorMinimo = $valorMinimo; 
		}

		public function getValorMinimo(){
			return $this->$valorMinimo; 
		}

		public function setValorAtual($valorAtual){
			$this->valorAtual = $valorAtual; 
		}

		public function getValorAtual(){
			return $this->$valorAtual; 
		}

		public function setValorMaximo($valorMaximo){
			$this->valorMaximo = $valorMaximo; 
		}

		public function getValorMaximo(){
			return $this->$valorMaximo; 
		}


		public function __toString(){

			return json_encode(array("cod"=>$this->cod, 
			    					"valorMinimo"=>$this->valorMinimo, 
									"valorAtual"=>$this->valorAtual, 
								    "valorMaximo"=>$this->valorMaximo)); 
		} 


	}
 ?>