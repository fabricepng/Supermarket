<?php

        try{
          //connexion avec PDO
            $bdd = new PDO('mysql:host=localhost; dbname=supermarket', 'root', '');

        }
        catch(Exception $e){// recupération d'erreur
            die('Erreur de connexion à la base : '.$e->getMessage());

        }

         // affichage de la table client
         $reponse = $bdd -> query ('SELECT* FROM client');

         var_dump($bdd);
?>
<h1 align='center'>facture client</h1>
<div align='center'>
        <form method="POST" action="">
            <label for="numero">numero</label>
            <input type="text" name="numero">
            <label for="date">Date</label>
            <input type="date" name="date">
            <label for="client">Client</label>
            <select name="client">
                <?php foreach ($reponse as $row) {?>
                    <option value="<?php echo $row ['id_client']; ?>"><?php echo $row ['nom']; ?></option>
               <?php } ?>
                
            </select>
        </form>
</div>

<div>
    <table border="1">
        <tr>
            <td>designation</td>
            <td>quantite</td>
            <td>prix</td>
            <td>montant</td>
        </tr>
        <tr>
            <td><input type="text" name="designation" value=""></td>
            <td><input type="text" name="quantite" value=""></td>
            <td><input type="text" name="prix" value=""></td>
            <td><input type="text" name="montant" value=""></td>
        </tr>
    </table>
</div>
