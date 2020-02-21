<!DOCTYPE html>
<html>
<head>
	<title>Categorie de produits</title>
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

	<form action="../traitements/traitementCategorie.php?" method="POST">
		
		Nom de la categorie du produit <input type="text" name="categorie"> 

		<button>Enregistrer</button><br>
	</form>

</body>
</html>