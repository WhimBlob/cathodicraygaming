<?php include 'ressources/templates/header.php'; ?>

<main class="container" id='profil'>
    <h2 class="text-center mt-5 mb-5">Bienvenue sur votre espace client, <?php $fullname ?></h2>
    <hr>
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Mon Compte</li>
    </ol>
    <section class="profil-content">
        <div class="profil">
            <h2 class="page-title">MON PROFIL</h2>
            <button class="profil_button" id='2'>MODIFIER</button>
        </div>
        <div class="profil">

            <div class="profil_content">
                <label for="">Adresse e-mail:</label>
                <p class="customer_mail"><?php $_SESSION ?></p>
            </div>

            <div class="profil_content">
                <label for="">Mot de passe:</label>
                <p class="customer_passwrd">m0t2p4ssM3g4S3cr3t</p>
            </div>

            <div class="profil_content">
                <label for="">Nom:</label>
                <p class="customer_name">Marcel Petibonhom</p>
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
</main>
<?php include 'ressources/templates/footer.php'; ?>