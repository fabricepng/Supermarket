<?php

    require 'inc/header.php';
    require 'inc/connexion.php';

?>

<form action="" method="post">
    <input type="tel" placeholder="votre immaticule" name="matricule">
    <input type="password" name="password" placeholder="votre mot de passe">
    <button  type="submit" name="ok" required>Connexion</button>
    <button  type="reset" name="retour" required>Annuler</button>              
</form>

<?php
// les traitemment et redirection

if ( isset ($_POST['ok']) ) {
    if (!empty($_POST['matricule']) and !empty($_POST['password'])) {
        $matricule=$_POST['matricule'];
        $password=$_POST['password'];
        require 'inc/connexion.php';
        $requete=$bdd->prepare('SELECT* INTO employe WhERE immatricule=$matricule AND  password=$password ');
        return true ;
    }


}
?>


<?php
require 'inc/footer.php';

?>

