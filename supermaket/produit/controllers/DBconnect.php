<?php

/**
 * 
 */
class DBconnect 
{
	
	public function connection()
	{
		try {
		    $bdd = new PDO("mysql:host=localhost;dbname=supermaket;charset=utf8", "root", 
		        "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));   
		}
		catch (Exception $e) {
		    die('Erreur fatale : ' . $e->getMessage());
		}

		return $bdd;
				
	}
}




?>