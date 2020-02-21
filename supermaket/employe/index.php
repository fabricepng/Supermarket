<?php include '../inc/header.php'; ?>
		<form method="POST" action="traitement.php">
				<input type="text" name="immatricule" placeholder="immatricule"><br><br>
				<input type="text" name="nom" placeholder="nom"><br><br>
				<input type="text" name="prenom" placeholder="prenom"><br><br>
				<input type="text" name="adresse" placeholder="adresse"><br><br>
				<input type="text" name="departement" placeholder="departement"><br><br><br>
				<input type="submit" name="Valider" value="valider">
		</form>
<?php  include '../inc/footer.php'; ?>
