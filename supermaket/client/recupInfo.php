<?php
require '../inc/header.php';
  if (isset ($_GET["id"]))
   {
      $id = $_GET["id"];

        require ('../inc/connexion.php');
        $reponse = $bdd -> query ("SELECT* FROM `client` WHERE `Id_client` = $id");
        $result = $reponse->execute();

        foreach ($reponse as $row) {
            ?>

            <div class="container" align='center'><br><br>
                    <h2><u>EDIT FORM</u></h2><hr><br><br>
                        <form  method="post" action="">
                        <div class="col">
                    <!-- le nom de l'utilisateur-->
                        <label for="nom">Nom  </label>
                        <input type="hidden" name="h_id" value="<?php echo $row ['Id_client']; ?>"/>
                        <input type="text" name="nom"  value="<?php echo $row ['nom']; ?>" placeholder="Votre nom"  required>
                    <!-- Prénom de l'utilisateur-->
                        <label for="prenom">Prénom  </label>
                        <input type="text" name="prenom"  value="<?php echo $row ['prenom']; ?>" placeholder="Votre prénom" required>
                  </div><br><br>
                  <div class="col">
                    <!-- Adresse de l'utilisateur-->
                        <label for="adresse">Adresse  </label>
                        <input type="text" name="adresse"  value="<?php echo $row ['adresse']; ?>" placeholder="Votre adresse" required>
                    <!-- Numéro de téléphone de l'utilisateur-->
                        <label for="tel">Contact  </label>
                        <input type="tel" name="tel"  value="<?php echo $row ['contact']; ?>" placeholder="numéro de Téléphone" required>
                  </div><br><br>
                  <div class="col">
                    <!-- E-mail de l'utilisateur-->
                        <label for="e_mail">E_mail  </label>
                        <input type="email" name="email"  value="<?php echo $row ['email']; ?>" placeholder="Votre adresse mail" required>
                    <!-- Sexe de l'utilisateur-->
                        <label for="sexe">Sexe   </label>
                        <select name="sexe" id="sexe"  value="<?php echo $row ['sexe']; ?>" required>
                            <option>Homme</option>
                            <option>Femme</option>
                        </select>
                  </div><br><br>
                    <!-- annulation du formulaire-->
                    <button  type="reset" name="retour"><a href="../index.php">Annuler </a></button>
                     <!-- validation du formulaire-->
                    <button  type="submit" name="ok">Modifier</button>
                        </form>
                    </div>

            <?php
           require '../inc/footer.php';
               }
   }
?>

<?php

     //reccuperation des infos du formulaire
     if (isset($_POST['ok']))
     {
      $h_id = $_POST['h_id'];
      $nom = $_POST['nom'];
      $prenom  =$_POST['prenom'];
      $adresse = $_POST['adresse'];
      $tel = $_POST['tel'];
      $sexe = $_POST['sexe'];
      $email = $_POST['email'];

      //modification des infos reccuperer
$req = $bdd->prepare('UPDATE client SET nom= :nvnom, prenom = :nvprenom, adresse = :nvadresse, contact = :nvcontact, email = :nvemail, sexe = :nvsexe WHERE Id_client = :nvh_id');

 $result = $req->execute(
array(
    'nvnom' => $nom,
    'nvprenom' => $prenom,
    'nvadresse' => $adresse,
    'nvcontact' => $tel,
    'nvemail' => $email,
    'nvsexe' => $sexe,
    'nvh_id' => $h_id

)
);


 if ($result) {
       header('location : ../index.php');
   }

    }

require '../inc/footer.php';
?>
