<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>efraim</title>
	<link rel="stylesheet" type="text/css" href="Fournisseur.css">
</head>
<body>
<?php
//declation de variables servant à l'insertion des informations vers la bqse de données
 $nom = $_POST['nom'];
 $prenoms= $_POST['prenoms'];
 $adresse= $_POST['adresse'];
 $contact= $_POST['contact'];
 $email= $_POST['email'];

echo $nom ."<br/>" ;
echo $prenoms ."<br/>";
echo $adresse ."<br/>";
echo $contact ."<br/>";
echo $email ."<br/>";

require '../inc/connexion.php';
   

$req = $bdd->prepare('INSERT INTO fournisseurs(nom,prenoms,adresse,contact,email) 
        VALUES(:nom,:prenoms,:adresse,:contact,:email)');
//print_r($req);
$ad=$req->execute(array('nom'=>$nom,'prenoms'=>$prenoms,'adresse'=>$adresse,'contact'=>$contact,'email'=>$email));
print_r($ad);
header('Location: listeFournisseur.php');

/*echo '<ul>';
while ($donnees = $req->fetch())
{
 echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . '
EUR)</li>';
}
echo '</ul>';
$req->closeCursor();*/
?>
</body>
</html>