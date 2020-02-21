<?php


/**
 * 
 */
class Categorie 
{
	private $idCategorie; 
	private $nomCategorie;
	
	function __construct()
	{
		# code...
	}

	public function getIdCategorie()
	{
		return $this->idcategorie;
	}

	public function setIdCategorie()
	{
		$this->idCategorie = $idCategorie;
	}


	// pour nom categorie

	public function getNomCategorie()
	{
		return $this->nomCategorie;
	}

	public function setNomCategorie($nomCategorie)
	{
		$this->nomCategorie = $nomCategorie;
	}
}







  ?>