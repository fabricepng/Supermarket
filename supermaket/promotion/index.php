<?php
require '../inc/header.php';
require '../inc/connexion.php';
?>

<form action="" method="post">
    <input type="text" name="nompromo" placeholder="Nom promo" id="nompromo" pattern="[A-Za-z]{6}" required>
    <input type="float" name="taux" placeholder="le taux de promotion" id="taux" min="1" max="2" pattern="[0-9]{2}" required>
    <input type="date" name="debut" placeholder="Début du promo" id="debut" required>
    <input type="date" name="fin" placeholder="fin du promo" id="fin" required>
    <input type="submit" name='ok' value="VALIDER">


</form>


<?php
if (isset($_POST['ok'])) {
    // recuperation de donnée
    $nompromo = strip_tags($_POST['nompromo']);

    $taux = strip_tags($_POST['taux']);
    $debut = strip_tags($_POST['debut']);
    $fin = strip_tags($_POST['fin']);
    //preparation de l'insertion
    $pdostat = $bdd->prepare('INSERT INTO promotion VALUES (NULL,:nompromo,:taux,:debut,:fin)');

    //liaison de valeurs et marqueurs
    $pdostat->bindValue(':nompromo', $nompromo, PDO::PARAM_STR);
    $pdostat->bindValue(':taux', $taux, PDO::PARAM_STR);
    $pdostat->bindValue(':debut', $debut);
    $pdostat->bindValue(':fin', $fin);

    // lancer de la requete
    $insertIsOk = $pdostat->execute();
    if (!$insertIsOk) {
        echo "echec de connection";
    } else { ?>

        <p class=" text-success"> Success!!! </p>
<?php
    }
} else {
    echo "hummmmmmmmmmmmmm";
}
?>
<!-- Affichage de promo  -->
<?php
//preparation de la requete
$requete = "SELECT * from promotion;";
// execution
$result =$bdd->query($requete);
?>
<h2 class="text-center">les Promotions</h2>
<div class="text-center">
    <?php
    if (!$result) {
        echo "lecture impossible";
    } else {
        $promo = $result->fetchAll(MYSQLI_NUM);
        echo "<table border=\"1\" width=\"100%\" >
        <thead>
            <tr>
                <th> N° </th>
                <th> Nom promotion </th>
                <th> Taux </th>
                <th> Début </th>
                <th>Fin</th>
                </tr>

        </thead>
    <tbody>";
        foreach ($promo as $cle => $tab) {
            $ref = $tab['id_promotion'];
            foreach ($tab as $key => $valeur) {
                echo "<td> $valeur </td>";
            }
            echo '<td><a href="suprimer.php?id=' . $ref . ' "><button class=btn-danger :focus >Suprimer</button></a> <a href="update.php?idm=' . $ref . ' "><button>Modifier</button></a></td>';
            echo "</tr>";
        }
    }

    ?>
</div>
<?php
require('../inc/footer.php');
?>
