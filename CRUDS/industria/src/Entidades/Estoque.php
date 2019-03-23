<?php
namespace Entidades; 

	class Estoque
	{

		private $codigo; 
		private $valorMinimo; 
		private $valorAtual; 
		private $valorMaximo; 
		private $produtoCodigo; 

		function __construct(float $valorMinimo=0,float $valorAtual=0,float $valorMaximo=0)
		{
			$this->valorMinimo = $valorMinimo; 
			$this->valorAtual = $valorAtual; 
			$this->valorMaximo = $valorMaximo; 
		}

		public function setCodigo(int $codigo){
			$this->codigo = $codigo; 
		}

		public function getCodigo(){
			return $this->codigo; 
		}

		public function setProdutoCodigo(int $produtoCodigo){
			$this->produtoCodigo = $produtoCodigo; 
		}

		public function getProdutoCodigo(){
			return $this->produtoCodigo; 
		}

		public function setValorMinimo(float $valorMinimo)
		{
			$this->valorMinimo = $valorMinimo; 
		}

		public function getValorMinimo()
		{
			return $this->valorMinimo; 
		}

		public function setValorAtual(float $valorAtual){
			$this->valorAtual = $valorAtual; 
		}

		public function getValorAtual()
		{
			return $this->valorAtual; 
		}

		public function setValorMaximo(float $valorMaximo)
		{
			$this->valorMaximo = $valorMaximo; 
		}

		public function getValorMaximo(){
			return $this->valorMaximo; 
		}

		public function addQuantidade(float $quantidade)
		{
			$this->valorAtual+=$quantidade; 
		}

		public function subQuantidade(float $quantidade)
		{
			$this->valorAtual-=$quantidade; 
		}


		public function __toString(){

			return json_encode(array("codigo"=>$this->codigo, 
				                    "produtoCodigo"=>$this->produtoCodigo, 
			    					"valorMinimo"=>$this->valorMinimo, 
									"valorAtual"=>$this->valorAtual, 
								    "valorMaximo"=>$this->valorMaximo)); 
		} 


	}
 ?>