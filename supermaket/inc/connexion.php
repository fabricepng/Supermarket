<?php

        try{
          //connexion avec PDO
            $bdd = new PDO('mysql:host=localhost; dbname=supermaket', 'root', '');

        }
        catch(Exception $e){// recupération d'erreur
            die('Erreur de connexion à la base : '.$e->getMessage());

        }
?>