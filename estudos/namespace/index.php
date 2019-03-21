<?php 

   require_once("config.php"); # Carrega o arquivo que informa o caminho para acesso a Classes. Este caminho poderá conter Diretórios e subdiretório. 
   use Cliente\Cadastro; 
   use Cliente\Pessoa; 
  

   $cad = new Cadastro(); 
   $cad->setNome("Lia Maria De Ane"); 
   $cad->setEmail("lia@yahoo.com.br"); 
   $cad->setSenha("2229990129#");

   echo "$cad"; 
   echo "<br>";
   $cad->registrarVenda(); 
   echo "<br>";

   $novoCad = array(json_decode($cad,true)); #true transforma em array, caso contrário retorna objeto. 
   #print_r($novoCad[0]['nome']); 
   $nome = $novoCad[0]['senha'];
   echo "$nome";
   
   /*
   $pessoa = new Pessoa(); 
   $pessoa->info(); 
   */ 

 ?>