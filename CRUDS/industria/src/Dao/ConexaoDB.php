<?php 
namespace Dao; 

use PDO; 

class ConexaoDB
{
	private static $instance; 

	private function __construct()
	{

	}

	public static function getInstance()
	{
		if (!isset(self::$instance)) {
			try {
				
				self::$instance = new PDO("mysql:dbname=industria_farmaceutica;host=localhost;port=3306","root","rodrigoso"); 
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				return "Error: " . $e->getMessage();
				
			}
		}

		return self::$instance; 
	}
}