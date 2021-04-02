<?php include 'ressources/templates/header.php'; ?>


<head>
  <title>Sign up - Progressus Bootstrap template</title>
</head>

<!-- container -->
<main class="container" id="inscription">

  <ol class="breadcrumb">
    <li><a href="index.html">Accueil</a></li>
    <li class="active">S'inscrire</li>
  </ol>

  <div class="row">

    <!-- Article main content -->
    <article class="col-xs-12 maincontent">
      <header class="page-header">
        <h1 class="page-title">Registration</h1>
      </header>

      <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <h3 class="thin text-center">Register a new account</h3>
            <p class="text-center text-muted"><a href="signin.php">Log in</a></p>
            <hr>

            <form action="profil.php" method="POST">

              <div class="top-margin">
                <label for="prenom" class="form-label">Votre Prénom</label>
                <input type="text" class="form-control" id="prenom" placeholder="Votre Prénom" name="prenom" value="<?= $champPrenom; ?>">
              </div>
              <div class="top-margin">
                <label for="nom" class="form-label">Votre Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Votre Nom" name="nom" value="<?= $champNom; ?>">
              </div>
              <div class="top-margin">
                <label for="email" class="form-label">Votre E-mail</label>
                <input type="text" class="form-control" id="email" placeholder="Votre E-mail" name="email" value="<?= $champEmail; ?>">
              </div>
              <div class="row top-margin">
                <div class="col-sm-6">
                  <label for="mdp">Votre mot de passe <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="mdp" placeholder="Votre mdp" name="mdp" value="<?= $champMdp; ?>">
                </div>
                <div class="col-sm-6">
                  <label>Confirm Password <span class="text-danger">*</span></label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="top-margin">
                <label for="adresse" class="form-label">Votre Adresse</label>
                <input type="text" class="form-control" id="adresse" placeholder="Votre Adresse" name="adresse" value="<?= $champAdresse; ?>">
              </div>
              <div class="top-margin">
                <label for="num_tel" class="form-label">Votre Numéro de téléphone</label>
                <input type="text" class="form-control" id="num_tel" placeholder="06 01 23 45 67" name="num_tel" value="<?= $champNumTel; ?>">
              </div>

              <hr>

              <div class="row">
                <div class="col-lg-8">
                  <label class="checkbox">
                    <input type="checkbox">
                    I've read the <a href="page_terms.html">Terms and Conditions</a>
                  </label>
                </div>
                <div class="col-lg-4 text-right">
                 <input type="submit" value="S'inscrire" name="envoyer" id="envoyer" class="btn btn-action">
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>

    </article>
    <!-- /Article -->

  </div>
</main> <!-- /container -->
<?php include 'ressources/templates/footer.php'; ?>