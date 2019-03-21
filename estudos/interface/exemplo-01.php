<?php 

	interface Veiculo{

		public function acelera($velocidade); 
		public function freiar($velocidade); 
		public function trocarMarcha($marcha); 
	}

	class Civic implements Veiculo{

		public function acelera($velocidade){

			echo "O Veiculo acelerou até ".$velocidade." Km/h<br/>"; 
		}

		public function freiar($velocidade){

			echo "O Veiculo freiou até ".$velocidade. "km/h<br/>";
		}

		public function trocarMarcha($marcha){
			echo "O Veiculo engatou a marcha para ".$marcha."<br/>";
		} 
	}


	$carro = new Civic(); 
	$carro->acelera(89);
	$carro->freiar(50);
	$carro->trocarMarcha(8); 

 ?>