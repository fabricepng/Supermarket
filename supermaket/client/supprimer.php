
<?php
  if (isset ($_GET["id"]))
   {
      $id = $_GET["id"];

        require '../inc/connexion.php';
        $supprime = $bdd->query(" DELETE FROM `client` WHERE `client`.`Id_client` = $id");

       
   }
   header('Location: ../index.php');

        ?>
