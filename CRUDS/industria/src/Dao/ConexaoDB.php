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
				self::$instance = new PDO("mysql:dbname=industria_farmaceutica;host=localhost","root","rodrigoso"); 
			} catch (Exception $e) {
				
			}
		}

		return self::$instance; 
	}
}