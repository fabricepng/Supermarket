  <?
    // recuperation de données
    $idm = $_GET['idm'];
    // connexion à la base de donnée
    require 'inc/bd.php';
    // preparation de la requete
    $pdostat = $pdo->prepare("SELECT * from promotion WHERE id_promotion = :refm LIMIT 1");
    //liaison des valeurs
    $pdostat->bindValue(':refm', $idm, PDO::PARAM_INT);
    //executioin de la requete
    $executeIsOk = $pdostat->execute();
    //recuperation des données du tableau de donnée
    $promotion = $pdostat->fetchAll(MYSQLI_NUM);

    foreach ($promotion as $key => $value) {
        $nom = $value['nom_promo'];
        $groupe = $value['produit_groupe'];
        $produit = $value['produit'];
        $taux = $value['taux'];
        $debut = $value['debut'];
        $fin = $value['fin'];
    }

    ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>modification</title>
      <script language="javascript">
      </script>
  </head>

  <body>
      <form action="" method="post">
          <input type="text" name="nompromo" placeholder="Nom promo" id="nompromo" value=<?php echo $nom ?> required>
          <input type="text" name="produitgroupe" placeholder="Cathegorie du produit" id="produitgroupe" value=<?php echo $groupe ?> required>
          <input type="text" name="produit" placeholder="Produit" id="produit" value=<?php echo $produit ?> required>
          <input type="floot" name="taux" placeholder="le taux de promotion" id="taux" value=<?php echo $taux ?> required>
          <input type="date" name="debut" placeholder="Début du promo" id="debut" value=<?php echo $debut ?> required>
          <input type="date" name="fin" placeholder="fin du promo" id="fin" value=<?php echo $fin ?> required>
          <input type="submit" name='ok' value="modifier">

      </form>
  </body>

  </html>
<?
  if (isset($_POST['ok'])) {

  // recuperation de donnée
  $nompromo = $_POST['nompromo'];
  $produitgroupe = $_POST['produitgroupe'];
  $produit = $_POST['produit'];
  $taux = $_POST['taux'];
  $debut = $_POST['debut'];
  $fin = $_POST['fin'];
  //preparation de l'insertion
  $pdostat = $pdo->prepare('UPDATE promotion set id_promotion=:num,nom_promo=:nompromo,produit_groupe=:produitgroupe,taux=:taux,debut=:debut,fin=:fin WHERE id_promotion=:num LIMIT 1');
  //liaison de valeurs et marqueurs
  $pdostat->bindValue(':nompromo', $nompromo, PDO::PARAM_STR);
  $pdostat->bindValue(':num',$idm);
  $pdostat->bindValue(':produitgroupe', $produitgroupe, PDO::PARAM_STR);
  $pdostat->bindValue(':produit', $produit, PDO::PARAM_STR);
  $pdostat->bindValue(':taux', $taux);
  $pdostat->bindValue(':debut', $debut);
  $pdostat->bindValue(':fin', $fin);

  // lancer de la # code...requete
  $executeIsOk = $pdostat->execute();
  if ($executeIsOk) {
        header("Location:index.php ");

  }else {
        var_dump($executeIsOk);
  }

  }