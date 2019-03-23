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

$produtoDao = new ProdutoDao(); 
$estoqueDao = new EstoqueDao(); 
  
$sabao = new Insumo("Pasta de Dente","pat",0); 
$sabao->setCodigo(78); 
$sabao->getEstoque()->setValorAtual(23);
$sabao->getEstoque()->setValorMaximo(60);  

#$estoqueDao->insertEstoque($sabao); 


$estoque = new Estoque(10,15,20); 
$estoque->setCodigo(4); 
$estoque->setProdutoCodigo(78); 

$estoque2 = new Estoque(2,15,21); 
$estoque2->setCodigo(3); 
$estoque2->setProdutoCodigo(77); 
#$estoqueDao->updateEstoques($estoque); 

$arrayEstoque = array($estoque); 
array_push($arrayEstoque, $estoque2); 
$estoqueDao->updateEstoques($arrayEstoque);


#$sabao->setEstoque($estoque); 
#$produtoDao->insert($sabao); 

#echo "<br/>".$estoque->__toString();


