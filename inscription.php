<?php include 'ressources/templates/header.php'?>
<?php
require 'config.php';
?>
<h2 class="text-center mt-5 mb-5">Page inscription</h2>
  <div class="container">
    <h1 class="text-center mb-3 mt-3">Inscription</h1>
    <?= $content; ?>
    <form action="" method="post">
      <div class="mb-3">
        <label for="mail" class="form-label">Votre E-mail</label>
        <input type="text" class="form-control" id="mail" placeholder="Votre E-mail" name="mail" value="<?= $champEmail; ?>">
      </div>
      <div class="mb-3">
        <label for="mdp" class="form-label">Votre mot de passe </label>
        <input type="text" class="form-control" id="mdp" placeholder="Votre mdp" name="mdp" value="<?= $champMdp; ?>">
      </div>
      <div class="mb-3">
        <label for="nom" class="form-label">Votre Nom</label>
        <input type="text" class="form-control" id="nom" placeholder="Votre Nom" name="nom" value="<?= $champNom; ?>">
      </div>
      <div class="mb-3">
        <label for="prenom" class="form-label">Votre Prénom</label>
        <input type="text" class="form-control" id="nom" placeholder="Votre Prénom" name="prenom" value="<?= $champPrenom; ?>">
      </div>
      <div class="mb-3">
        <label for="adresse" class="form-label">Votre Adresse</label>
        <input type="text" class="form-control" id="adresse" placeholder="Votre Adresse" name="adresse" value="<?= $champAdresse; ?>">
      </div>
      <div class="mb-3">
        <label for="num_tel" class="form-label">Votre Numéro de téléphone</label>
        <input type="text" class="form-control" id="num_tel" placeholder="06 01 23 45 67" name="num_tel" value="<?= $champNumTel; ?>">
      </div>
      <input type="submit" value="Envoyer les données" name="envoyer" class="btn btn-lg btn-block btn-dark">
    </form>
  </div>
</body>
<hr>
<?php include 'ressources/templates/footer.php'?>