<?php 

#namespace Entidades; 

	class Fornecedor{

		private $cod; 
		private $nome; 
		private $cgc; 
		private $uri; 
		

		function __construct($nome,$cgc,$uri){
			$this->nome = $nome;
			$this->cgc = $cgc;
			$this->uri = $uri;
		}

		public function setCod($cod){
			$this->cod = $cod; 
		}

		public function getId(){
			return $this->$cod; 
		}

		public function setNome($nome){
			$this->nome = $nome; 
		}

		public function getNome(){
			return $this->$nome; 
		}

		public function setCgc($cgc){
			$this->cgc = $cgc; 
		}

		public function getCgc(){
			return $this->$cgc; 
		}

		public function __toString(){

			return json_encode(array("cod"=>$this->cod, 
			    					"nome"=>$this->nome, 
									"cgc"=>$this->cgc, 
								    "uri"=>$this->uri)); 
		}


	}
 ?>