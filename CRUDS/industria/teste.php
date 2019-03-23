<?php 

require_once("config_model.php"); 

#use name\Componente as ComponenteName;  
#require_once("name\Componente.php"); 

use Dao\ProdutoDao; 
use Dao\EstoqueDao; 
use Entidades\AProduto;
use Entidades\Insumo;
use Entidades\Manufaturado; 
use Entidades\Componente;
use Entidades\Estoque;
use Entidades\ControladorProdutos; 

$produtoDao = new ProdutoDao(); 
$estoqueDao = new EstoqueDao(); 
  

$Componente1 = new Componente("Pasta de Dente",2);
$Componente2 = new Componente("pasta",3); 

$sabao = $produtoDao->selectProdutoDescricao("Sabão"); 
$sabao->addComponente($Componente1); 
$sabao->addComponente($Componente2); 

$controladorProdutos = new ControladorProdutos(); 
$controladorProdutos->registrarProducao($sabao,"Sabão",2); 





