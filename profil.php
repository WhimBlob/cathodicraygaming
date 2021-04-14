<?php include 'ressources/templates/header.php'; ?>
<?php

//on interdit l'accès à cette page aux utilisateurs non-connectés. C'est-à-dire q'il n'y a pas eu de création de session user
if (!isset($_SESSION['user'])) {
    header('location:signin.php?access=forbidden');
    exit();
}

?>

<?php
//destruction de la session + redirection
if (isset($_GET['deconnexion']) && $_GET['deconnexion'] == 'deconnexion') {
    session_destroy(); //on détruit
    header('location:signin.php');
    exit();
}
?>

<main class="container" id='profil'>
    <?php
    if ($user['rights'] == 1) {
        echo '<h2 class="text-center mt-5 mb-5">Bienvenue sur votre espace administrateur</h2>';
    } else {
        echo '<h2 class="text-center mt-5 mb-5">Bienvenue sur votre espace client</h2>';
    }
    ?>
    <hr>

    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">Mon Compte</li>
    </ol>
    <section class="profil-content">
        <div class="profil">
            <h2 class="page-title">MON PROFIL</h2>

            <form action="?session=destroy">
                <button class="profil_button" name="deconnexion" value="deconnexion">DECONNEXION</button>
            </form>
            <br>
            <hr>
        </div>
        <form action="#" class="profil" method="POST">
        <?php if(!isset($_POST['modifierProfil'])) {     ?>
            <div class="profil_content">
                <label for="">Nom:</label>
                <p class="customer_name"><?= $user['nom'] ?></p>
            </div>

            <div class="profil_content">
                <label for="">Prénom:</label>
                <p class="customer_name"><?= $user['prenom']  ?></p>
            </div>
            <div class="profil_content">
                <label for="">Adresse e-mail:</label>
                <p class="customer_mail"><?= $user['email']  ?></p>

            </div>

            <div class="profil_content">
                <label for="">Mot de passe:</label>
            </div>


            <div class="profil_content">
                <label for="">Numéro de téléphone:</label>
                <p class="customer_phone"><?= '0' . $user['num_tel']  ?></p>
            </div>

            <div class="profil_content">
                <label for="">Adresse de livraison:</label>
                <p class="customer_phone"><?= $user['adresse']  ?></p>
            </div>
            <input class="btn btn-secondary" id="modifierProfil" name="modifierProfil" type="submit" value="Modifier le profil"></input>
        </form>
        <?php } if(isset($_POST['modifierProfil']) && $_POST['modifierProfil'] == "Modifier le profil") {     ?>
        <form action="#" class="profil" method="POST">
          <div class="profil_content">
                <label for="">Nom:</label>
                <p class="customer_name"><?= $user['nom'] ?></p>
            </div>

            <div class="profil_content">
                <label for="">Prénom:</label>
                <p class="customer_name"><?= $user['prenom']  ?></p>
            </div>
            <div class="profil_content">
                <label for="modifEmail">Adresse e-mail:</label>
                <input type="text" name="modifEmail" class="customer_mail" value = "<?= $user['email']  ?>">
            </div>
            <div class="profil_content">
                <label for="modifMdp">Mot de Passe:</label>
                <input type="password" name="modifMdp">
            </div>
            <div class="profil_content">
                <label for="modifNumTel">Numéro de téléphone:</label>
                <input type="text" name="modifNumTel" class="customer_phone" value = "<?= $user['num_tel']  ?>">
            </div>
            <div class="profil_content">
                <label for="modifAdresse">Adresse de livraison:</label>
                <input type="text" name="modifAdresse" class="customer_mail" value = "<?= $user['adresse']  ?>">
            </div>
            <input class="btn btn-secondary" id="validerProfil" name="validerProfil" type="submit" value="Valider le profil"></input>
          </form>
    <form action="#" class="profil_content" id="suppProfil" method="post">
      <input type="submit" value="Total Nuke" name="totalnuke" id="nuke" class="top-margin btn btn-action">
    </form>
    <?php } ?>
        <div class="order">
            <h2 class="page-title">MES COMMANDES</h2>
        </div>
        <?php while ($dataAchat = $queryAchat->fetch()) {
        ?>
        <article class = "product">
          <div class = productext>
            <h3 class = "productname" id = "productname1"><a href='fiche_produit.php?product=<?php echo $dataAchat['nom_produit']?>'><?php echo $dataAchat['nb_produit'] . ' ' . $dataAchat['nom_produit']?></a></h3>
            <p class = "prix">Pour un total de <?php echo $dataAchat['prix']*$dataAchat['nb_produit']?>€</p>
            <p>Achat réalisé le <?php echo $dataAchat['date_achat']?></p>
          </div>
          <img id = "product1img" class = "productimg" src="ressources/imgs/<?php echo $dataAchat['url_img_produit']?>" alt="Cathodic-Ray TV">
        </article>
          <?php
          }
          ?>
        <?php if ($user['rights'] == 1) {
          include 'admin.php';
        } ?>
    </section>
    <section>


    </section>
</main>
<?php include 'ressources/templates/footer.php'; ?>