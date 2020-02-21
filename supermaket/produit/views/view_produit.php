<!DOCTYPE html>
<html>
<head>
	<title>Les produits</title>
</head>
<body>

	<?php  
		//var_dump($_GET);
		if (isset($_GET['succes'])) {
			
			$succes = $_GET['succes'];
		?>

		<strong>Enregistrement effectué avec succes!</strong>


	<?php  
	}
	?>

	<form action="../traitements/traitementProduit.php?" method="POST">
		
		Nom du produit <input type="text" name="nom_produit"><br>

		

		Prix du produit <input type="number" name="prix_produit"><br>

		

		Quantité du produit <input type="text" name="quantite_produit"><br>

		 
	
	<?php 

	try
	{
		$bdd = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", "root",'');
	}

		$categorie = $POST["nom_categorie"];
		// connexion a la base de données

		$reponse = $bdd -> query('select nom_categorie from categorie');
		
		while ($nom_categorie = $reponse -> fetch()) 
	
	?>		
		<label>Catégorie du produit : </label>

		<select>
			<option><?php echo $categrie['nom_categorie']; ?></option>
		</select>
		<br/>

	
	

		<button>Enregistrer</button><br>
	</form>

</body>
</html>