<?php 

require_once("config.php"); 

#usa o namespace Cliente. 
#use Cliente\Cadastro; 
#use Cliente\Compra; 

$cad = new Cadastro();
$cad->setNome("Rodrigo");
$cad->setEmail("oliveirarodrigo19@yahoo.com.br");
$cad->setSenha("12345678");

echo $cad;

#echo $cad->registrarVenda();

#$compra = new Compra(); 

#$compra->info(); 



 ?>