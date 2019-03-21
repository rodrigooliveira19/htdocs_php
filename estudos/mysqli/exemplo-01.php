<?php 

	$conn = new mysqli("localhost","root","rodrigoso","dbphp7"); 

	if($conn->connect_error){

		echo "Erro".$conn->connect_error;
	}
 ?>