<?php 

	namespace Entidades; 

	require_once("Estoque.php"); 

	abstract class AProduto{

		private $cod; 
		private $nome; 
		private $formulaQuimica; 
		private $numeroToxico; 

		private $estoque; 

		function __construct($nome,$formulaQuimica,$numeroToxico)
		{
			$this->nome = $nome; 
			$this->formulaQuimica = $formulaQuimica; 
			$this->numeroToxico = $numeroToxico; 
			$this->estoque = new Estoque(); 
		}

		public function setCod($cod){
			$this->cod = $cod; 
		}

		public function getCod(){
			return $this->cod; 
		}

		public function setNome($nome){
			$this->nome = $nome; 
		}

		public function getNome(){
			return $this->nome; 
		}

		public function setFormulaQuimica($formulaQuimica){
			$this->formulaQuimica = $formulaQuimica; 
		}

		public function getFormulaQuimica(){
			return $this->formulaQuimica; 
		}

		public function setNumeroToxico($numeroToxico){
			$this->numeroToxico = $numeroToxico; 
		}

		public function getNumeroToxico(){
			return $this->numeroToxico; 
		}

		public function getEstoque()
		{
			return $this->estoque; 
		}

		public function __toString(){
			return json_encode(array("cod"=>$this->cod, 
		                  "nome"=>$this->nome, 
		                  "formulaQuimica"=>$this->formulaQuimica, 
		                  "numeroToxico"=>$this->numeroToxico)); 
		}


	}
 ?>