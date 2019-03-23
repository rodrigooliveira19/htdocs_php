<?php 

namespace Dao; 

require_once ("ConexaoDB.php"); 

use PDO; 
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
		$count = 0 ; 
		foreach ($estoques as $estoque) {
			if ($this->updateEstoque($estoque)) {
				$count++; 
			}
		}

		echo $count." estoques foram atualizados";

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

		return $stmt->execute();

	}


	public function selectEstoqueProduto(int $produto_id)
	{
		$stmt = $this->db->prepare("SELECT * FROM estoque WHERE produto_id= :PRODUTO_ID"); 

		$stmt->bindParam(":PRODUTO_ID",$produto_id);
	    $stmt->execute(); 

	    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

	    if ($result){
	    	$estoque = $this->createEstoque($result); 
	    	return $estoque; 
	    }
	    return null; 
	}


	private function createEstoque($result)
	{
		$row = $result[0]; 

		$produto_id = $row['produto_id']; 
    	$estoque_id = $row['estoque_id']; 
    	$valor_minimo = $row['valor_minimo']; 
    	$valor_atual = $row['valor_atual']; 
    	$valor_maximo = $row['valor_maximo'];

    	$estoque = new Estoque($valor_minimo, $valor_atual, $valor_maximo);  
    	$estoque->setCodigo($estoque_id); 
    	$estoque->setProdutoCodigo($produto_id); 

    	return $estoque; 
	}

}