<?php 
namespace Entidades; 

require_once("Componente.php");
  

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


	public registrarProducao(String $descricao, float $quantidade)
	{ 
		$produto = $this->produtoDao->getProduto($descricao); #criar metodo em produtoDao

		if ($produto) {
			$produto->getEstoque()->addQuantidade($quantidade);
			array_push($this->estoques, $produto->getEstoque()); 

			Componente $componentes = $this->produto->getComponentes(); 

			if ($componentes) {
				$this->buscarInsumo($componentes); 

				if ($this->produtos) {
					foreach ($this->produtos as $insumo) {
						foreach ($componentes as $componente) {
							if ($insumo->getNome() === $componente->getDescInsumo()) {
								$insumo->getEstoque()->subQuantidade( $quantidade * $Componente->getQuantidade()); 
								array_push($this->estoques, $insumo->getEstoque());
								break; 
							} 
						}	
					}

					$this->estoqueDao->atualizarEstoques($this->estoques); #criar estoqueDao. 
				}
			}

		} 

	}

	private function buscarInsumo($componentes)
	{
		$this->produtos = $this->produtoDao->getInsumos($componentes); #criar metodo em produtoDao

	}
}

 