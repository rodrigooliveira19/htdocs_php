<?php 

	require_once("config.php");

	session_unset($_SESSION); 

	session_destroy($_SESSION); 

	echo $_SESSION['nome'];
 ?>