<?php


/**
 * 
 */
class Produit 
{
	private $idproduit; 
	private $nomproduit;
	private $prixproduit;
	private $quantiteproduit;
	
	function __construct()
	{
		# code...
	}

	public function getIdProduit()
	{
		return $this->idproduit;
	}

	public function setIdProduit()
	{
		$this->idproduit = $idproduit;
	}


	// pour nom produit

	public function getNomProduit()
	{
		return $this->nomproduit;
	}

	public function setNomProduit($nomproduit)
	{
		$this->nomproduit = $nomproduit;
	}

	// pour prix produit

	public function getPrixProduit()
	{
		return $this->prixproduit;
	}

	public function setPrixProduit($prixproduit)
	{
		$this->prixproduit = $prixproduit;
	}

	// pour quantite produit

	public function getQuantiteProduit()
	{
		return $this->quantiteproduit;
	}

	public function setQuantiteProduit($quantiteproduit)
	{
		$this->quantiteproduit = $quantiteproduit;
	}

}



  ?>