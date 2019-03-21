<?php 

require_once("config_model.php"); 
#use name\Componente as ComponenteName;  
#require_once("name\Componente.php"); 

use Dao\ProdutoDao; 
use Entidades\AProduto;
use Entidades\Insumo;
use Entidades\Manufaturado; 
use Entidades\Componente;
use Entidades\Estoque;

$produtoDao = new ProdutoDao(); 
  
$sabao = new Insumo("Sabão","sab",0); 
$sabao->getEstoque()->setValorAtual(10);
$sabao->getEstoque()->setValorMaximo(20);  

$produtoDao->insert($sabao); 
