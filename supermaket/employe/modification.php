<?php
$id=0;
include './inc/connexion.php'
	function getuser($id)
	{
	    $sql = "SELECT * FROM employe where id = ?";
		$select = connection()->prepare($sql);
		$select->execute([$id]);
        $data=$select -> fetch();
        return $data;
	}
		if (isset($_GET['id'])){
				$id = $_GET['id'];
	 		    $user =  getuser($id);

	 	}



	 function updateuser($id,$immatricule,$nom,$prenom,$adresse,$departement)
	 {

	 	$stmt = connection()->prepare('UPDATE employe set immatricule = :immatricule,nom = :nom,prenom = :prenom,adresse = :adresse,departement = :departement where id = :id limit 1');
	 	$stmt->bindvalue(':id',$id,PDO::PARAM_INT);
	 	$stmt->bindvalue(':immatricule',$immatricule,PDO::PARAM_INT);
	 	$stmt->bindvalue(':nom',$nom,PDO::PARAM_STR);
	 	$stmt->bindvalue(':prenom',$prenom,PDO::PARAM_STR);
	 	$stmt->bindvalue(':adresse',$adresse,PDO::PARAM_STR);
	 	$stmt->bindvalue(':departement',$departement,PDO::PARAM_STR);
	 	$update = $stmt -> execute();
	 	return $update;
	 }


	if (isset($_POST['submit'])) {
		updateuser($_POST['id'],$_POST['immatricule'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['departement']);
		header('location:modifiersupprimer.php');
	}else{
		echo "echec";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>formulaire</title>
	<meta charset="utf-8">
</head>
<body>


		<form method="POST" action="modification.php">
				<input type="text" name="immatricule" placeholder="immatricule" value="<?= $user['immatricule']?>"><br><br>
				<input type="hidden" name="id" value="<?= $user['id']?>">
				<input type="text" name="nom" placeholder="nom" value="<?= $user['nom']?>"><br><br>
				<input type="text" name="prenom" placeholder="prenom" value="<?= $user['prenom']?>"><br><br>
				<input type="text" name="adresse" placeholder="adresse" value="<?= $user['adresse']?>"><br><br>
				<input type="text" name="departement" placeholder="departement" value="<?= $user['departement']?>"><br><br><br>
				<input type="submit" name="submit" value="valider">
		</form>
</body>
</html>
