<?php 

namespace Dao; 

require_once ("ConexaoDB.php"); 

use Entidades\AProduto; 

class EstoqueDao
{
	private $db; 

	public function __construct()
	{
		try {
			$this->db = ConexaoDB::getInstance();
		} catch (Exception $e) {
		}
	}

	public function insertEstoque(AProduto &$produto)
	{
		$stmt = $this->db->prepare("INSERT INTO estoque (valor_minimo,valor_atual,valor_maximo)
								 VALUES (:VALOR_MINIMO,:VALOR_ATUAL,:VALOR_MAXIMO) WHERE produto_id = :PRODUTO_ID ");

		$estoque = $produto->getEstoque(); 
		$valor_minimo = $estoque->getValorMinimo(); 
		$valor_atual = $estoque->getValorAtual();
		$valor_maximo = $estoque->getValorMaximo();
		$produto_id = $produto->getCodigo(); 


		$stmt->bindParam(":VALOR_MINIMO",$valor_minimo); 
		$stmt->bindParam(":VALOR_ATUAL",$valor_atual); 
		$stmt->bindParam(":VALOR_MAXIMO",$valor_maximo); 
		$stmt->bindParam(":PRODUTO_ID",$produto_id);
		
		return $stmt->execute(); 

	}
}