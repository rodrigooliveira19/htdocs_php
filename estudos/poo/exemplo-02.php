<?php 

	class Carro{

		private $modelo; 
		private $motor; 
		private $ano; 

		public function getModelo(){
			return $this->modelo; 
		} 

		public function setModelo($modelo){
			$this->modelo = $modelo; 
		}

		public function getMotor(){
			return $this->motor; 
		} 

		public function setMotor($motor){
			$this->motor = $motor; 
		}

		public function getAno(){
			return $this->ano; 
		} 

		public function setAno($ano){
			$this->ano = $ano; 
		}

		#Metodos

		public function toString(){
			return array(
				"modelo"=>$this->getModelo(), 
				"motor"=>$this->getMotor(),
				"ano"=>$this->getAno()
			);
		}		
	}



	$gol = new Carro(); 
	$gol->setModelo("Gol GT");
	$gol->setMotor("1.6"); 
	$gol->setAno("2017");  

	print_r($gol); 
	echo "<br/>"; 
	print_r($gol->toString());
	echo "<br/>"; 
	var_dump($gol->toString()); 
 ?>