<?php 
namespace Entidades; 


	class Insumo extends AProduto{

		private $tipo = "PI"; 
		private $fornecedor; 

		function __construct($nome,$formulaQuimica,$numeroToxico)
		{
			parent::__construct($nome,$formulaQuimica,$numeroToxico); 
		}

		public function setFornecedor($fornecedor)
		{
			if ($fornecedor instanceof Fornecedor) {
				$this->fornecedor = $fornecedor; 
			}
				
		}

		public function getFornecedor()
		{
			return $this->fornecedor; 
		}

		public function getTipo()
		{
			return $this->tipo; 
		}

		

		public function twoJson()
		{
			$body = array(); 
			$body = json_decode($this->__toString(),true); 
			$fornecedor = json_decode($this->fornecedor->__toString(),true); 

			array_push($body,$fornecedor);
			return json_encode($body); 
		}
		               
	}

 