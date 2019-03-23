<?php 
namespace Entidades; 

require_once("Componente.php");

use Dao\EstoqueDao;   
use Dao\ProdutoDao;

class ControladorProdutos
{

	private  $produto; 
	private  $produtos; 
	private  $estoques; 
    private  $estoqueDao; 
	private  $produtoDao; 

	function __construct()
	{
		$this->produtos = null; 
		$this->estoques = array(); 
		$this->estoqueDao = new EstoqueDao(); 
		$this->produtoDao = new ProdutoDao(); 
	}


	public function registrarProducao($produto, String $descricao, float $quantidade)
	{ 
		#$produto = $this->produtoDao->selectProdutoDescricao($descricao); 

		if ($produto) {
			$produto->getEstoque()->addQuantidade($quantidade);
			array_push($this->estoques, $produto->getEstoque()); 

		    #$componentes = $this->produto->getComponentes(); 
		    $componentes = $produto->getComponentes();

			if ($componentes) {
				$this->selectInsumos($componentes); 

				if ($this->produtos) {
					foreach ($this->produtos as $insumo) {
						foreach ($componentes as $componente) {
							if ($insumo->getNome() === $componente->getDescInsumo()) {
								$insumo->getEstoque()->subQuantidade( $quantidade * $componente->getQuantidade()); 
								array_push($this->estoques, $insumo->getEstoque());
								break; 
							} 
						}	
					}

					$this->estoqueDao->updateEstoques($this->estoques); 
				}
			}

		} 

	}

	private function selectInsumos($componentes)
	{
		$this->produtos = $this->produtoDao->selectInsumos($componentes);

	}
}

 