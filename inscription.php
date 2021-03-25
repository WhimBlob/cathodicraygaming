<?php include 'ressources/templates/header.php'; ?>

<!-- container -->
<main class="container" id="inscription">
  <ul class="breadcrumb">
    <li><a href="index.html">Accueil</a></li>
    <li class="active">Inscription</li>
  </ul>
  <section class="col-xs-12 maincontent row">
    <header class="page-header">
      <h1 class="page-title">Registration</h1>
    </header>
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <h3 class="thin text-center">Register a new account</h3>
          <p class="text-center text-muted"><a href="signin.html">Login</a></p>
          <hr>
          <form action="" method="post">
            <div class="top-margin">
              <label for="prenom" class="form-label">Votre Prénom</label>
              <input type="text" class="form-control" id="prenom" placeholder="Votre Prénom" name="prenom" value="<?= $champPrenom; ?>">
            </div>
            <div class="top-margin">
              <label for="nom" class="form-label">Votre Nom</label>
              <input type="text" class="form-control" id="nom" placeholder="Votre Nom" name="nom" value="<?= $champNom; ?>">
            </div>
            <div class="top-margin">
              <label for="mail" class="form-label">Votre E-mail</label>
              <input type="text" class="form-control" id="mail" placeholder="Votre E-mail" name="mail" value="<?= $champEmail; ?>">
            </div>
            <div class="top-margin">
              <label for="mdp" class="form-label">Votre mot de passe </label>
              <input type="text" class="form-control" id="mdp" placeholder="Votre mdp" name="mdp" value="<?= $champMdp; ?>">
            </div>
            <div class="top-margin">
              <label for="adresse" class="form-label">Votre Adresse</label>
              <input type="text" class="form-control" id="adresse" placeholder="Votre Adresse" name="adresse" value="<?= $champAdresse; ?>">
            </div>
            <div class="top-margin">
              <label for="num_tel" class="form-label">Votre Numéro de téléphone</label>
              <input type="text" class="form-control" id="num_tel" placeholder="06 01 23 45 67" name="num_tel" value="<?= $champNumTel; ?>">
            </div>
            <input type="submit" value="Envoyer les données" name="envoyer" id="envoyer" class="btn btn-action">
          </form>
        </div>
      </div>
    </div>
  </section>
</main> <!-- /container -->
<?php include 'ressources/templates/footer.php'; ?>