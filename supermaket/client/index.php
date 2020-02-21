<?php
require_once '../inc/header.php';
       require_once '../inc/connexion.php';

          // affichage de la table client
             $reponse = $bdd -> query ('SELECT* FROM client');

                 var_dump($bdd);
       require_once './formulaire.php';
?>

              <table id="tab" class="table table-hover table-fixed" border="2">
				<tr>
                    <th>Nom</th>
					 <th>Prenom</th>
					<th>Adresse</th>
                    <th>Contact</th>
                    <th>Sexe</th>
                    <th>E-mail</th>
                    <th>supprimer</th>
                    <th>modifier</th>
				</tr>
        <?php

          foreach ($reponse as $row) {
        ?>
                <tr>
					          <td><?php echo $row ['nom']; ?></td>
					          <td><?php echo $row ['prenom']; ?></td>
                    <td><?php echo $row ['adresse'];  ?></td>
                    <td><?php echo $row ['contact']; ?></td>
                    <td><?php echo $row ['sexe']; ?></td>
                    <td><?php echo $row ['email']; ?></td>
                    <td><a href="supprimer.php/?id=<?php echo $row ['Id_client']; ?>"onClick="return confirm('Are you sure you want to delete this ?');">Supprimer</a></td>
                    <td><a href="recupInfo.php/?id=<?php echo $row ['Id_client']; ?>">Modifier</a></td>
                </tr>
        <?php

          }
?>
            </table>
<?php require_once '../inc/footer.php'; ?>
