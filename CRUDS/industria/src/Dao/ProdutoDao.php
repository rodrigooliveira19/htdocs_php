<?php 

namespace Dao; 

require_once("EstoqueDao.php");
require_once("ConexaoDB.php");

#use PDO; 
use Entidades\AProduto; 

class ProdutoDao
{
	private $db; 
	private $estoqueDao; 

	function __construct()
	{
		try {
			$this->db = ConexaoDB::getInstance(); 
			$this->estoqueDao = new EstoqueDao(); 
		} catch (Exception $e) {
			throw new Exception("Erro de conexão", 1);# Por mais que dê erro nesta conecção, está esceção não está sendo lançada. 
		}
	}


	public function insert(AProduto &$produto)
	{
		$stmt = $this->db->prepare("INSERT INTO produto (produto_id,tipo,nome,formula_quimica,grau_toxico)
										VALUES (:PRODUTO_ID,:TIPO,:NOME,:FORMULA_QUIMICA,:NUMERO_TOXICO)"); 

		$produto_id = $produto->getCodigo(); 
		$produto_tipo = $produto->getTipo();
		$produto_nome = $produto->getNome();
		$produto_formulaQuimica = $produto->getFormulaQuimica();
		$produto_numeroToxico = $produto->getNumeroToxico();

		$stmt->bindParam(":PRODUTO_ID",$produto_id); 
		$stmt->bindParam(":TIPO",$produto_tipo); 
		$stmt->bindParam(":NOME",$produto_nome); 
		$stmt->bindParam(":FORMULA_QUIMICA",$produto_formulaQuimica); 
		$stmt->bindParam(":NUMERO_TOXICO",$produto_numeroToxico); 

		if ($stmt->execute()) {
			$this->estoqueDao->insertEstoque($produto);
		}
	}

	/*public function selectProdutoId(int id)
	{

	}*/


}