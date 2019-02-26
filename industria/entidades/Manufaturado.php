<?php 

#namespace Entidades; 

	class Manufaturado{

		private $tipo= "PM"; 
		private $componentes; 

		function __construct($nome,$formulaQuimica,$numeroToxico){
			parent::__construct($nome,$formulaQuimica,$numeroToxico); 
			$this->componentes = array(); 
		}


		public function getTipo(){
			return $this->tipo; 
		}
	}
 ?>