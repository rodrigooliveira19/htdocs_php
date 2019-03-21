<?php 

namespace App\Dao\MySQL\CodeeasyGerenciadorDeLojas; 

use PDO;

class LojasDao extends Conexao
{
	public function __construct()
	{
		parent::__construct(); 

	}

	public function selectAll()
	{
		$stmt = $this->pdo->prepare("select 
			                            id as loja_id, 
										nome as loja_nome, 
										telefone as loja_telefone, 
										endereco as loja_endereco
									from lojas  
									order by 2"); 
		$stmt->execute(); 
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
		if($result)
			return $result; 
		else
			return null;
	}

	public function insertLoja($loja)
	{
		$stmt = $this->pdo->prepare("insert into lojas(nome,telefone,endereco)
			                           values(:NOME, :TELEFONE, :ENDERECO)");

        $nome = $loja->getNome(); 
        $telefone = $loja->getTelefone();
        $endereco = $loja->getEndereco(); 
         
	    $stmt->bindParam(":NOME",$nome);
	    $stmt->bindParam(":TELEFONE",$telefone);
	    $stmt->bindParam(":ENDERECO",$endereco); 
	    $result = $stmt->execute();

	    if($result)
	    	return true; 
	    return false; 

	}

	public function getLojaIdProdutos($loja_id)
	{
		$stmt = $this->pdo->prepare("select 
										    l.id as loja_id, 
										    l.nome as loja_nome, 
										    l.telefone as loja_telefone, 
										    l.endereco as loja_endereco, 
										    p.id as produto_id, 
										    p.nome as produto_nome, 
										    p.preco as produto_preco, 
										    p.quantidade as produto_quantidade
									from lojas as l 
									inner join produtos as p on l.id = p.loja_id
									where l.id = :LOJA_ID
									order by p.nome");

		$stmt->bindParam("LOJA_ID",$loja_id); 
		$stmt->execute(); 
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

		if($result)
			return $result; 
		return null;

	}
}


?>