<?php 

	class Endereco{

		private $logradouro; 
		private $numero; 
		private $cidade; 

		public function __construct($a,$b,$c){
			$this->logradouro = $a; 
			$this->numero = $b; 
			$this->cidade = $c; 

		}
		
		public function __destruct(){
			var_dump("Destruir"); 
		}

		public function __toString(){
			return "Log: ".$this->logradouro." | nº: ".$this->numero." | cidade: ".$this->cidade; 
		}
	}


	$endereco = new Endereco("Rua França Teixeira",19,"Salvador"); 

	//var_dump($endereco); 
	//unset($endereco); 
	echo $endereco; 
 ?>