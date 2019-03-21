<?php 

	/**
	 * 
	 */
	abstract class AbstractProduto
	{
		private $cod; 
		
		function __construct($cod)
		{
			$this->cod = $cod; 
		}

		public function setId($cod){
			$this->cod = $cod; 
		}

		public function getId(){
			return $this->cod; 
		}
	}
 ?>