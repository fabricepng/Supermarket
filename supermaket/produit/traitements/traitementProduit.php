<?php

include_once('../controllers/controlProduit.php');
include_once('../model/Produit.php');


$controlProduit = new controlProduit();
$produit = new Produit();

//var_dump($_POST);
$nomProduit = $_POST['nom_produit'];


	if($nomProduit){

	 	$produit->setNomProduit($nomProduit);


	 	$ins = $controlProduit->insertProduit($produit);
	}


	if($ins){
		$succes;

		header("Location: http://localhost/projetSI/views/view_produit.php?succes");

	}
	else{
		echo "oups";
	}


$prixProduit = $_POST['prix_produit'];


	if($prixProduit){

	 	$produit->setPrixProduit($prixProduit);


	 	$ins = $controlProduit->insertProduit($produit);
	}


	if($ins){
		$succes;

		header("Location: http://localhost/projetSI/views/view_produit.php?succes");

	}
	else{
		echo "oups";
	}


$quantiteProduit = $_POST['quantite_produit'];


	if($quantiteProduit){

	 	$produit->setQuantiteProduit($quantiteProduit);


	 	$ins = $controlProduit->insertProduit($produit);
	}


	if($ins){
		$succes;

		header("Location: http://localhost/projetSI/views/view_produit.php?succes");

	}
	else{
		echo "oups";
	}


?>