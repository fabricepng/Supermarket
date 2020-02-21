<?php 

include_once('DBconnect.php');



/**
 * 
 */
class ControlProduit 
{
	
	function __construct()
	{
		$this->db = new DBconnect();
	}

	//pour l'insertion

	public function insertProduit(Produit $produit)
	{
		$state = false;

		$request = "insert into produit (nom_produit) values(?);";

		$conn = $this->db->connection();
		$ins = $conn->prepare($request);

		$ins->execute(array(


			$produit->getNomProduit()

		));

		if($ins){
			$state = true;
		}

		$conn = null;
		return state;

		

	}


	{
		$state = false;

		$request = "insert into produit (prix_produit) values(?);";

		$conn = $this->db->connection();
		$ins = $conn->prepare($request);

		$ins->execute(array(


			$produit->getPrixProduit()

		));

		if($ins){
			$state = true;
		}

		$conn = null;
		return state;

		

	}


	{
		$state = false;

		$request = "insert into produit (quantite_produit) values(?);";

		$conn = $this->db->connection();
		$ins = $conn->prepare($request);

		$ins->execute(array(


			$produit->getQuantiteProduit()

		));

		if($ins){
			$state = true;
		}

		$conn = null;
		return state;

		

	}
}




 ?>