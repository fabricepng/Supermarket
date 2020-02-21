<?php

    // connexion a la BD
    require './inc/connexion.php';
    //reccuperation des infos du formulaire
     if (isset($_POST['ok']))
     {
      $hid = $_POST['h_id'];
      $nom = $_POST['nom'];
      $prenom  =$_POST['prenom'];
      $adresse = $_POST['adresse'];
      $tel = $_POST['tel'];
      $sexe = $_POST['sexe'];
      $email = $_POST['email'];

      //modification des infos reccuperer
$req = $bdd->prepare('UPDATE client SET nom= :nvnom, prenom = :nvprenom, adresse = :nvadresse, contact = :nvcontact, email = :nvemail, sexe = :nvsexe WHERE Id_client = :hid');

 $result = $req->execute(
array(
    'nvnom' => $nom,
    'nvprenom' => $prenom,
    'nvadresse' => $adresse,
    'nvcontact' => $tel,
    'nvemail' => $email,
    'nvsexe' => $sexe,
    'hid' => $hid
)
);



    }
    echo "salut";
?>
