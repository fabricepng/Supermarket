<?php 
session_start();

function connection(){
        try{
            $bdd = new PDO('mysql:host=localhost; dbname=supermarket', 'root', '');
            echo("connecté");
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 
       }
        catch(Exception $e){
            die('Erreur de connexion à la base : '.$e->getMessage());

        }
        return $bdd;

    }
?>

<?php
$msg = ""; 
if(isset($_POST['valider'])) {
  $immatricule = trim($_POST['imma']);
  $password = trim($_POST['mdp']);
  if($immatricule != "" && $password != "") {
    try {
      $query = ("SELECT * from employe where `immatricule`=:imma and `nom`=:password");
      $stmt = connection()->prepare($query);
      $stmt->bindParam('imma', $username, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      
      header('location:index.php');
      } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }

    } 
    //else {
        $msg = "identifiants invalides";
      } 
 ?>