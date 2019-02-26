<?php 

require_once("config_entidades.php"); 
#use name\Componente as ComponenteName;  
#require_once("name\Componente.php"); 
  
  #Componente
  $componente = new Componente("Agua",10); 
  #echo (json_encode($componente,true)); Esta imprimindo falatando dado.  
  echo($componente->__toString()); 
  echo "<br/><br/>"; 
  var_dump($componente); 
  echo "<br/><br/>";

  #Fornecedor 
  $fornecedor  = new Fornecedor("Drográria Martins","077.2828.111.23.3-89","drogariamartins.dx.am"); 
  var_dump($fornecedor); 
  echo "<br><br/>";

  $estoque = new Estoque(1,10,29,50); 
  echo "$estoque<br><br/>";

  $insumo = new Insumo("Cetonazol","ctona",29,$fornecedor); 
  $insumo->setCod(1); 
  echo "$insumo<br><br/>";
  echo $insumo->twoJson();

 /*
 
  $compName = new ComponenteName("Sal",15);
  echo ($compName->info()."<br/>".$compName->__toString()); 
 */ 
 ?>