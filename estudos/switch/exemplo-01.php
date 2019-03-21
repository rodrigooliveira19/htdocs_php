<?php 

	#$idade = $_GET[""]
	$diaDaSemana = date("w");
	$date = date('d-m-Y H:i');

	switch ($diaDaSemana) {
	 	case 0:
	 		echo "Domingo ";
	 		break;
	 	case 1:
	 		echo "Segunda-Feira";
	 		break;
	 	case 2:
	 		echo "Terça-Feira $date";
	 		break;
	 	case 3:
	 		echo "Quarta-Feira";
	 		break;
	 	case 4:
	 		echo "Quinta-Feira";
	 		break;
	 	case 5:
	 		echo "Sexta-Feira";
	 		break;
	 	case 6:
	 		echo "Sábado";
	 		break;
	 } 

 ?>