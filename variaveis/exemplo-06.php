<?php 

	/*	
	$tab = array("one","two","tree"); 
	$a = "tab";
	${$a}[] = "four"
	#echo ${$a}[]; 
	print_r($tab); 
	*/

	$letra = $_GET["letra"]; 
	$num = $_GET["num"]; 

	echo $letra + $num;

	if(file_exists("exemplo-01.php"))
		echo "true<br/>"; 
	else
		echo "false";

    class Foo{
    	public $numero = 20; 
    }

    $a = "numero"; 
	$foo = new Foo(); 
	print $foo->$a;
 ?>