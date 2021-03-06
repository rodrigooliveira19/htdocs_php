<?php 

namespace Dao; 

require_once("EstoqueDao.php");
require_once("ConexaoDB.php");

use PDO; 
use Entidades\AProduto; 
use Entidades\Insumo; 
use Entidades\Manufaturado; 

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

	public function selectProdutoDescricao(String $nome)
	{
		$stmt = $this->db->prepare("SELECT * from produto WHERE nome= :NOME"); 

	    $stmt->bindParam(":NOME",$nome);
	    $stmt->execute(); 

	    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

	    if ($result) {
	    	$produto = $this->createProduto($result); 
	    	return $produto; 
	    }
	    return null; 
	}
	

    public function selectInsumos($componentes)
    {
    	$insumos = array(); 

    	foreach ($componentes as $componente) {
    		$insumo = $this->selectProdutoDescricao($componente->getDescInsumo()); 
    		array_push($insumos, $insumo); 
    	}
    	return $insumos; 

    }


	private function createProdutos($results)
	{
		if (count($result)===1){}
	}
    
    private function createProduto($result)
    {
    	$row = $result[0];

        $produto_id = (int)$row['produto_id']; 
    	$nome = $row['nome']; 
    	$formula_quimica = $row['formula_quimica']; 
    	$grau_toxico = (int)$row['grau_toxico']; 
    	$tipo = $row['tipo']; 
    	

    	if ($tipo === "PI") {
    		$produto = new Insumo($nome,$formula_quimica,$grau_toxico); 
    	}else {
    		$produto = new Manufaturado($nome,$formula_quimica,$grau_toxico); 
    	}

    	$produto->setCodigo($produto_id);  
    	$produto->setEstoque($this->estoqueDao->selectEstoqueProduto($produto_id)); 
        
    	return $produto; 
    	

    }






}