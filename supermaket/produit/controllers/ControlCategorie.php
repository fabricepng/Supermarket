<?php 

include_once('DBconnect.php');



/**
 * 
 */
class ControlCategorie 
{
	
	function __construct()
	{
		$this->db = new DBconnect();
	}

	//pour l'insertion

	public function insertCategorie(Categorie $categorie)
	{
		$state = false;

		$request = "insert into categorie (nom_categorie) values(?);";

		$conn = $this->db->connection();
		$ins = $conn->prepare($request);

		$ins->execute(array(


			$categorie->getNomCategorie()

		));

		if($ins){
			$state = true;
		}

		$conn = null;
		return state;

		

	}
}






 ?>