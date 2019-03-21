<?php 
namespace Entidades; 

require_once("Componente.php"); 

	class Manufaturado extends AProduto{

		private $tipo= "PM"; 
		private $componentes; 

		function __construct($nome,$formulaQuimica,$numeroToxico){
			parent::__construct($nome,$formulaQuimica,$numeroToxico); 
			$this->componentes = array(); 
		}

		public function getTipo(){
			return $this->tipo; 
		}

		public function addComponente(Componente $componente){
			array_push($this->componentes, $componente); 
		}

		public function getComponentes(){
			return $this->componentes; 
		}

		public function getComponente(int $index){
			return $this->componentes[$index]; 

		}
	}
 ?>