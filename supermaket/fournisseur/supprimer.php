<?php
    $fournisseur = $_GET["id"];
   
   echo $fournisseur ;
   
   require '../inc/connexion.php';
      
     
   $req = $bdd->prepare('DELETE FROM  fournisseurs 
           WHERE id_fournisseurs=:fournisseur');
   //print_r($req);
   $ad=$req->execute(array('fournisseur'=>$fournisseur));
   
   header('Location: listeFournisseur.php');

?>