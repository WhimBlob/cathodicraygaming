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
        <div class="profil">
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
                <p class="customer_passwrd"><?= $user['mdp']  ?></p>
            </div>


            <div class="profil_content">
                <label for="">Numéro de téléphone:</label>
                <p class="customer_phone"><?= '0' . $user['num_tel']  ?></p>
            </div>

            <div class="profil_content">
                <label for="">Adresse de livraison:</label>
                <p class="customer_phone"><?= $user['adresse']  ?></p>
            </div>
        </div>


        <div class="order">
            <h2 class="page-title">MES COMMANDES</h2>
        </div>
    </section>
    <section>


    </section>
</main>
<?php include 'ressources/templates/footer.php'; ?>