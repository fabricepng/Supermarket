
        <?php require '../inc/header.php'; ?>
        <title>ListClient</title>
<div class="text-center"><br><br>
        <h1 class="text-center"> Données de la table Client </h1>
        <hr>
        </div><br><br>

<div class="wrapper-editor">

<div class="row d-flex justify-content-center modalWrapper">
  <div class="modal fade addNewInputs" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold text-primary ml-5">Add new client</h4>
          <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
        <div class="container" align='center'><br><br>
            <form  method="post" action=" insert.php ">
                  <div class="col">
                    <!-- le nom de l'utilisateur-->
                        <label for="nom">Nom  </label>
                        <input type="text" class="form-control" name="nom" placeholder="Votre nom"  required>
                    <!-- Prénom de l'utilisateur-->
                        <label for="prenom">Prénom  </label>
                        <input type="text" class="form-control" name="prenom"  placeholder="Votre prénom" required>
                  </div><br><br>
                  <div class="col">
                    <!-- Adresse de l'utilisateur-->
                        <label for="adresse">Adresse  </label>
                        <input type="text" class="form-control" name="adresse"  placeholder="Votre adresse" required>
                    <!-- Numéro de téléphone de l'utilisateur-->
                        <label for="tel">Contact  </label>
                        <input type="tel" class="form-control" name="tel"  placeholder="numéro de Téléphone" required>
                  </div><br><br>
                  <div class="col">
                    <!-- E-mail de l'utilisateur-->
                        <label for="e_mail">E_mail  </label>
                        <input type="email" class="form-control" name="email" placeholder="Votre adresse mail" autofocus ><br><br>
                    <!-- Sexe de l'utilisateur-->
                        <label for="sexe">Sexe   </label>
                        <select name="sexe" id="sexe">
                            <option>Homme</option>
                            <option>Femme</option>
                        </select>
                  </div><br><br>
                    <!-- validation du formulaire-->
                    <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
                        <button  type="submit" class="btn btn-outline-primary btn-block buttonAdd">Envoyer <i class="fas fa-paper-plane-o ml-1"></i></button>
                    </div>
            </form>
        </div>

        </div>
      </div>
    </div>
  </div>

  <div class="col-1 text-right">
    <a href="" class="btn btn-info btn-rounded btn-sm-1" data-toggle="modal" data-target="#modalAdd">Ajouter<i
        class="fas fa-plus-square ml-5 col-1"></i></a>

  </div>
  <hr>
<?php require '../inc/footer.php'; ?>
