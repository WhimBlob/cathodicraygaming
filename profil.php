<?php include 'ressources/templates/header.php'; ?>
<?php $_SESSION['post_data'] = $_POST; ?>
<?php

//on interdit l'accès à cette page aux utilisateurs non-connectés. C'est-à-dire q'il n'y a pas eu de création de session user
if (!isset($_SESSION['user'])) {
    header('location:signin.php?access=forbidden');
    exit();
}

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


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
    <h2 class="text-center mt-5 mb-5">Bienvenue sur votre espace client</h2>
    <hr>
    <?php
    if ($_SESSION['user']['status'] == 0) {
        echo '<h2>Vous êtes simple membre</h2>';
    } else {
        echo '<h2>Vous êtes administrateur</h2>';
    }
    ?>
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
        </div>
        <div class="profil">
            <div class="profil_content">
                <label for="">Adresse e-mail:</label>
                <p class="customer_mail"><?php $email ?></p>
            </div>

            <div class="profil_content">
                <label for="">Mot de passe:</label>
                <p class="customer_passwrd">m0t2p4ssM3g4S3cr3t</p>
            </div>

            <div class="profil_content">
                <label for="">Nom:</label>
                <p class="customer_name"><?= $prenom ?></p>
            </div>

            <div class="profil_content">
                <label for="">Numéro de téléphone:</label>
                <p class="customer_phone">0621304125</p>
            </div>
        </div>

        <div class="order">
            <h2 class="page-title">MES COMMANDES</h2>
        </div>
    </section>
    <section>
        <?php if (isset($_SESSION['user'])) {
        }
        ?>

    </section>
</main>
<?php include 'ressources/templates/footer.php'; ?>