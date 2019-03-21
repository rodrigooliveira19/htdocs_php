<?php 

namespace App\Dao\MySQL\CodeeasyGerenciadorDeLojas; 

use PDO; 


abstract class Conexao
{
	
	protected $pdo;

	public function __construct()
	{
		$host = getenv('CODEEASY_GERENCIADOR_DE_LOJAS_HOST'); 
		$port = getenv('CODEEASY_GERENCIADOR_DE_LOJAS_PORTA'); 
		$user = getenv('CODEEASY_GERENCIADOR_DE_LOJAS_USER'); 
		$pass = getenv('CODEEASY_GERENCIADOR_DE_LOJAS_PASSWORD');
		$dbname = getenv('CODEEASY_GERENCIADOR_DE_LOJAS_DBNAME'); 


		$this->pdo = new PDO("mysql:dbname=$dbname;host=$host;port=$port","$user","$pass"); 

		#Adicionando atributos para lançamento de exceção. 
		//$this->pdo->setAttribute(\PDO::ATT_ERRMODE,\PDO::ERRMODE_EXCEPTION); 
	} 
}

?>