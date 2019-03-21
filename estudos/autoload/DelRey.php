<?php 
	
	interface Veiculo{

		public function acelera($velocidade); 
		public function freiar($velocidade); 
		public function trocarMarcha($marcha); 
	}

	abstract class Automovel implements Veiculo{

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


	class DelRey  extends Automovel{

		public function empurrar(){

		}

	}


	$carro = new DelRey(); 
	$carro->acelera(200); 

	if($carro instanceof Veiculo and 
		is_subclass_of($carro, 'Automovel')){
		echo "DelRey é um veículo  e subclasse de Automovel"; 
		echo get_class($carro);
	}

	 
		
 ?>