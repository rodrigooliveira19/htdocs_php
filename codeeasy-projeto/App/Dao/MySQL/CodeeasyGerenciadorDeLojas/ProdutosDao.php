<?php 

namespace App\Dao\MySQL\CodeeasyGerenciadorDeLojas; 

use PDO; 
use App\Models\Produto; 


class ProdutosDao extends Conexao
{
	public function __construct()
	{
		parent::__construct(); 
		
	}

    #Seleciona todos os produtos do banco. 
	public function selectAll()
	{   
		$stmt = $this->pdo->prepare("select 
										    l.id as loja_id, 
										    l.nome as loja_nome, 
										    p.id as produto_id, 
										    p.nome as produto_nome, 
										    p.preco as produto_preco, 
										    p.quantidade as produto_quantidade
										from produtos as p
										left join lojas as l on p.loja_id = l.id
										order by l.id"); 
		$stmt->execute(); 
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
		if($result)
			return $result; 
		else
			return null;
	}

    #Inseri um produto no banco. 
	public function insertProduto($produto)
	{
		if($produto instanceof Produto)
		{

			$stmt = $this->pdo->prepare("insert into produtos(loja_id,nome,preco,quantidade) 
				                       values (:LOJA_ID,:NOME,:PRECO, :QUATIDADE)"); 

			$loja_id = $produto->getIdLoja(); 
			$nome = $produto->getNome(); 
			$preco = $produto->getPreco(); 
			$quantidade = $produto->getQuantidade(); 

			$stmt->bindParam(":LOJA_ID",$loja_id);
			$stmt->bindParam(":NOME",$nome);
			$stmt->bindParam(":PRECO",$preco);
			$stmt->bindParam(":QUANTIDADE",$quantidade); 
			$result = $stmt->execute(); 

			if($result)
				return true;
				 
		    return false; 
		}
		else
			return false;

	}


	#Atualiza um produto no banco. 
	public function updateProduto($produto)
	{
		if($produto instanceof Produto)
		{
			$stmt = $this->pdo->prepare("update produtos set loja_id = :LOJA_ID , nome = :NOME , 
										  preco = :PRECO , quantidade = :QUANTIDADE where id = :PRODUTO_ID"); 

			$loja_id = $produto->getIdLoja(); 
			$produto_id = $produto->getId(); 
			$nome = $produto->getNome(); 
			$preco = $produto->getPreco(); 
			$quantidade = $produto->getQuantidade(); 

			$stmt->bindParam(":LOJA_ID",$loja_id);
			$stmt->bindParam(":NOME",$nome);
			$stmt->bindParam(":PRECO",$preco);
			$stmt->bindParam(":QUANTIDADE",$quantidade); 
			$stmt->bindParam(":PRODUTO_ID",$produto_id); 
			$result = $stmt->execute(); 

			if($result)
				return true; 
			else
				return false; 
		}

	}


	public function deleteProduto($id)
	{
		$stmt = $this->pdo->prepare("delete from produtos where id = :PRODUTO_ID"); 

		$stmt->bindParam(":PRODUTO_ID",$id);

		$result = $stmt->execute(); 

		if($result)
			return true; 
		else
			return false; 
	}

}


?>