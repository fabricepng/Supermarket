<?php


$id = $_GET['id'];


function suprimer($id)
{
    require'bd.php';
    //preparation de la requête
    $pdostat= $pdo->prepare('DELETE FROM promotion WhERE id_promotion = :ref LIMIT 1');
    //liaison du parametre
    $pdostat->bindValue(':ref',$id,PDO::PARAM_INT);
    //execution de la requete
    $executeIsOk= $pdostat->execute();

    // verification
        if ($executeIsOk) {

        header("Location:../index.php ");
        }else{

            $message='echec';
            echo $message;
        }
    }
if ($id != 0) {
    suprimer($id);
}

  



?>
