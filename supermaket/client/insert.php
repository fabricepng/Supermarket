<?php
        require '../inc/connexion.php';

           // insertion des données dans la BD
           $req = $bdd->prepare('INSERT INTO client(nom, prenom, adresse, Contact, sexe, email) VALUES(?, ?,?,?,?,? )');
           $req->execute(array
               (
                 $_POST['nom'],
                 $_POST['prenom'],
                 $_POST['adresse'],
                 $_POST['tel'],
                 $_POST['sexe'],
                 $_POST['email']
               ));
   
        header('Location: index.php');




?>
