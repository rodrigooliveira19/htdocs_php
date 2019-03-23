<?php
namespace Entidades; 

	class Estoque
	{

		private $codigo; 
		private $valorMinimo; 
		private $valorAtual; 
		private $valorMaximo; 
		private $produtoCodigo; 

		function __construct(int $valorMinimo=0,int $valorAtual=0,int $valorMaximo=0)
		{
			$this->valorMinimo = $valorMinimo; 
			$this->valorAtual = $valorAtual; 
			$this->valorMaximo = $valorMaximo; 
		}

		public function setCodigo($codigo){
			$this->codigo = $codigo; 
		}

		public function getCodigo(){
			return $this->codigo; 
		}

		public function setProdutoCodigo($produtoCodigo){
			$this->produtoCodigo = $produtoCodigo; 
		}

		public function getProdutoCodigo(){
			return $this->produtoCodigo; 
		}

		public function setValorMinimo($valorMinimo)
		{
			$this->valorMinimo = $valorMinimo; 
		}

		public function getValorMinimo()
		{
			return $this->valorMinimo; 
		}

		public function setValorAtual($valorAtual){
			$this->valorAtual = $valorAtual; 
		}

		public function getValorAtual()
		{
			return $this->valorAtual; 
		}

		public function setValorMaximo($valorMaximo)
		{
			$this->valorMaximo = $valorMaximo; 
		}

		public function getValorMaximo(){
			return $this->valorMaximo; 
		}

		public function addQuantidade($quantidade)
		{
			$this->valorAtual+=$quantidade; 
		}

		public function subQuantidade($quantidade)
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