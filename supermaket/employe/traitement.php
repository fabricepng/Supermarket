<?php
include './inc/connexion.php';
    if ($_POST) {
        insertion($_POST);
    }




function insertion($data)
    {

        $insert= connection()->prepare("INSERT INTO employe (immatricule,nom,prenom,adresse,departement) VALUES (?,?,?,?,?)");
        $status = $insert->execute(
            [$data['immatricule'],$data['nom'],$data['prenom'],$data['adresse'],$data['departement']
            ]
        );
header('location:modifiersupprimer.php');
    }
