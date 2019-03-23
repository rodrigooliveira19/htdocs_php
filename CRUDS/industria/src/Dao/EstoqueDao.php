<?php 

namespace Dao; 

require_once ("ConexaoDB.php"); 

use Entidades\AProduto; 
use Entidades\Estoque; 

class EstoqueDao
{
	private $db; 

	public function __construct()
	{
		try {
			$this->db = ConexaoDB::getInstance();
		} catch (Exception $e) {
			echo "Paseeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee";
		}
	}

	public function insertEstoque(AProduto &$produto)
	{
		$stmt = $this->db->prepare("INSERT INTO estoque (produto_id,valor_minimo,valor_atual,valor_maximo)
			                         VALUES (:PRODUTO_ID, :VALOR_MINIMO, :VALOR_ATUAL, :VALOR_MAXIMO)");

		$estoque = $produto->getEstoque(); 
		$valor_minimo = $estoque->getValorMinimo(); 
		$valor_atual = $estoque->getValorAtual();
		$valor_maximo = $estoque->getValorMaximo();
		$produto_id = $produto->getCodigo(); 

		echo $produto->__toString();
		$stmt->bindParam(":VALOR_MINIMO",$valor_minimo); 
		$stmt->bindParam(":VALOR_ATUAL",$valor_atual); 
		$stmt->bindParam(":VALOR_MAXIMO",$valor_maximo); 
		$stmt->bindParam(":PRODUTO_ID",$produto_id);
		
		return $stmt->execute(); 
	}


	public function updateEstoques(&$estoques)
	{
		foreach ($estoques as $estoque) {
			$this->updateEstoque($estoque); 
		}

	}



	public function updateEstoque(&$estoque)
	{
		$stmt = $this->db->prepare("UPDATE estoque SET valor_minimo= :VALOR_MINIMO, valor_atual =:VALOR_ATUAL, valor_maximo= :VALOR_MAXIMO
			                             WHERE estoque_id= :ESTOQUE_ID AND produto_id= :PRODUTO_ID"); 

		$valor_minimo = $estoque->getValorMinimo(); 
		$valor_atual = $estoque->getValorAtual();
		$valor_maximo = $estoque->getValorMaximo();
		$estoque_id = $estoque->getCodigo(); 
		$produto_id = $estoque->getProdutoCodigo(); 

		$stmt->bindParam(":VALOR_MINIMO",$valor_minimo); 
		$stmt->bindParam(":VALOR_ATUAL",$valor_atual); 
		$stmt->bindParam(":VALOR_MAXIMO",$valor_maximo); 
		$stmt->bindParam(":ESTOQUE_ID",$estoque_id);
		$stmt->bindParam(":PRODUTO_ID",$produto_id);

		#return $stmt->execute(); 
		$result = $stmt->execute(); 
		var_dump($estoque); 
		if ($result) {
			echo "Estoque atualizado com sucesso..";
		}
		else {
			echo "Não foi possivel atualizar o estoque";
		}

	}

}