<?php

include_once('../controllers/ControlCategorie.php');
include_once('../model/Categorie.php');


$controlCategorie = new ControlCategorie();
$categorie = new Categorie();

//var_dump($_POST);
$nomCategorie = $_POST['categorie'];


	if($nomCategorie){

	 	$categorie->setNomCategorie($nomCategorie);


	 	$ins = $controlCategorie->insertCategorie($categorie);
	}


	if($ins){
		$succes;

		header("Location: http://localhost/projetSI/views/view_categorie.php?succes");

	}
	else{
		echo "oups";
	}



?>