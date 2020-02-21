  <?
    // recuperation de données
    $idm = $_GET['idm'];
    // connexion à la base de donnée
    require 'inc/connexion.php';
    // preparation de la requete
    $pdostat = $bdd->prepare("SELECT * from promotion WHERE id_promotion = :refm LIMIT 1");
    //liaison des valeurs
    $pdostat->bindValue(':refm', $idm, PDO::PARAM_INT);
    //executioin de la requete
    $executeIsOk = $pdostat->execute();
    //recuperation des données du tableau de donnée
    $promotion = $pdostat->fetchAll(MYSQLI_NUM);

    foreach ($promotion as $key => $value) {
        $nom = $value['nom_promo'];
        $taux = $value['taux'];
        $debut = $value['debut'];
        $fin = $value['fin'];
    }

    ?>


  <body>
      <form action="" method="post">
          <input type="text" name="nompromo" placeholder="Nom promo" id="nompromo" value=<?php echo $nom ?> required>
          <input type="floot" name="taux" placeholder="le taux de promotion" id="taux" value=<?php echo $taux ?> required>
          <input type="date" name="debut" placeholder="Début du promo" id="debut" value=<?php echo $debut ?> required>
          <input type="date" name="fin" placeholder="fin du promo" id="fin" value=<?php echo $fin ?> required>
          <input type="submit" name='ok' value="modifier" id='Validation'>

      </form>
  </body>

  </html>
<?
  if (isset($_POST['ok'])) {

  // recuperation de donnée
  $nompromo = strip_tags($_POST['nompromo']);
  $taux = strip_tags($_POST['taux']);
  $debut = strip_tags($_POST['debut']);
  $fin = strip_tags($_POST['fin']);
  //preparation de de modification
  $pdostat = $bdd->prepare('UPDATE promotion set id_promotion=:num,nom_promo=:nompromo,taux=:taux,debut=:debut,fin=:fin WHERE id_promotion=:num LIMIT 1');
  //liaison de valeurs et marqueurs
  $pdostat->bindValue(':nompromo', $nompromo, PDO::PARAM_STR);
  $pdostat->bindValue(':num',$idm);
  $pdostat->bindValue(':taux', $taux);
  $pdostat->bindValue(':debut', $debut);
  $pdostat->bindValue(':fin', $fin);

  // lancer de la requete
  $executeIsOk = $pdostat->execute();
  if ($executeIsOk) {
        header("Location:index.php ");

  }else {
        var_dump($executeIsOk);
  }

  }

  ?>
