<?php 

	Abstract class Animal{

		public function falar(){
			echo "Som"; 
		}

		public function mover(){
			echo "Andar"; 
		}
	}

	class Cachorro extends Animal{

		public function falar(){
			echo "Late"; 
		}

		public function mover(){
			echo "Andar com 4 patas"; 
		}
	}

	class Gato extends Animal{

		public function falar(){
			echo parent::falar()." de Miar"; 
		}
	}

	#$animal = new Animal(); 
	#$animal->falar(); 
	#$animal->mover();


	$animal = new Cachorro(); 
	$animal->falar(); 
	$animal->mover(); 

	echo "<br/>";

	$animal = new Gato(); 
	$animal->falar(); 
	

 ?>