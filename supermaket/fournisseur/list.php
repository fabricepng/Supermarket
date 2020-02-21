<!DOCTYPE html>
<html>
<head>


	<meta charset="utf-8">
	<title>efraim</title>
    <style>
      table
        {
        border-collapse: collapse;
        }
        td, th /* Mettre une bordure sur les td ET les th */
        {
        border: 1px solid black;
        }
    </style>
	<link rel="stylesheet" type="text/css" href="Fournisseur.css">
</head>
<body>

<?php
require '../inc/connexion.php';
// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table jeux_video
$reponse = $bdd -> query ('SELECT* FROM fournisseur');
// On affiche chaque entrée une à une
?>
<table>
    <tr>
       <th>id</th>
       <th>nom</th>
       <th>prenoms</th>
       <th>adresse</th>
       <th>contact</th>
       <th>email</th>
       <th>actions</th>
       
    </tr>
    <?php
while ($donnees = $reponse->fetch())
{
  $src="localhost/supermarket/supprimer.php?".$donnees["id_fournisseurs"];
?>
  <tr>
     <td><?php echo $donnees["id_fournisseurs"] ?></td>
     <td><?php echo $donnees["nom"] ?></td>
     <td><?php echo $donnees["prenoms"] ?></td>
     <td><?php echo $donnees["adresse"] ?></td>
     <td><?php echo $donnees["contact"] ?></td>
     <td><?php echo $donnees["email"] ?></td>
     <td><a role="button" type="button" href="<?php echo $src="supprimer.php?id=".$donnees["id_fournisseurs"]?>"class="btn btn-success">Supprimer</a> 
    </td>
  </tr>

<?php
}
?>
</table>
<?php
$reponse->closeCursor(); // Termine le traitement de la requête
?>
 
 
 
</body>
</html>