<?php 

namespace App\Models; 


class Loja
{
	private $id; 
	private $nome; 
	private $telefone; 
	private $endereco; 


	public function setId($id)
	{
		$this->id= $id; 
	}

	public function getId()
	{
		return $this->id; 
	}

	public function setNome($nome)
	{
		$this->nome= $nome; 
	}

	public function getNome()
	{
		return $this->nome; 
	}

	public function setTelefone($telefone)
	{
		$this->telefone= $telefone; 
	}

	public function getTelefone()
	{
		return $this->telefone; 
	}

	public function setEndereco($endereco)
	{
		$this->endereco= $endereco; 
	}

	public function getEndereco()
	{
		return $this->endereco; 
	}

}

?>