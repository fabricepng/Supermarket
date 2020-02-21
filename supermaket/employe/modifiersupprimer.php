<?php include './inc/footer.php';
include './inc/connexion';?>
 <table>

 	<?php


 		 function selection()
	{
		$sql = "SELECT id,immatricule,nom,prenom,adresse,departement FROM employe";
		$select = connection()->query($sql);
        $data=$select -> fetchAll(PDO::FETCH_OBJ);
        return $data;

	}

 	?>

 	<thead>
 		<th>immatricule</th>
 		<th>nom</th>
 		<th>prenom</th>
 		<th>adresse</th>
 		<th>departement</th>
 		<th>actions</th>
 	</thead>
 	<tbody>
 		<?php
 			foreach (selection() as $employe) {

 						?>
 					<tr>
 						<td><?php echo $employe->immatricule ?> </td>
 						<td><?php echo $employe->nom ?> </td>
 						<td><?php echo $employe->prenom ?> </td>
 						<td><?php echo $employe->adresse ?> </td>
 						<td><?php echo $employe->departement ?> </td>
 						<td>
 							<a href="modification.php?id=<?= $employe->id ?>">modifier</a>
 							<a href="suppression.php?id=<?= $employe->id ?>">supprimer</a>
 						</td>
 					</tr>


 		<?php
 			}
 		?>

 	</tbody>
 </table>
<?php include './inc/footer.php'; ?>
