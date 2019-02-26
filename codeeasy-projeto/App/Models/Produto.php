<?php 

namespace App\Models;


class Produto
{
	private $id; 
	private $nome; 
	private $preco; 
	private $quantidade; 

	private $loja_id; 
   
    public function __construct($loja_id)
    {
    	#$this->id = $id;
    	$this->loja_id = $loja_id; 
    }
    

    public function setId($id)
	{
		$this->id = $id; 
	}

	public function getId()
	{
		return $this->id; 
	}

	public function getIdLoja()
	{
		return $this->loja_id; 
	}

	public function setNome($nome)
	{
		$this->nome = $nome; 
	}

	public function getNome()
	{
		return $this->nome; 
	}

	public function setPreco($preco)
	{
		$this->preco = $preco; 
	}

	public function getPreco()
	{
		return $this->preco; 
	}

	public function setQuantidade($quantidade)
	{
		$this->quantidade = $quantidade; 
	}

	public function getQuantidade()
	{
		return $this->quantidade; 
	}
}

 ?>