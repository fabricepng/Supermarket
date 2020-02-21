<?php
include './inc/connexion.php';
$id = $_GET['id'];
function delete($id)
{
        $delete = connection()->prepare("DELETE FROM employe WHERE id = $id ");
        $stmt = $delete->execute();
        return $stmt;


   }
   if (isset($_GET['id'])) {
   	delete($id);
}

   header('location:modifiersupprimer.php');
?>
