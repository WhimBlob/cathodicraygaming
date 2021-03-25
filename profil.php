<?php include 'ressources/templates/header.php'; ?>
<header>
    <title> CRG: Connexion </title>
</header>

<h2 class="text-center mt-5 mb-5">Bienvenue sur votre espace client, [CLIENT]</h2>
<hr>
<button class="profil_button"> Deconnexion </button>
<div class="profil">
    <h2>MON PROFIL</h2>
    <button class="profil_button">MODIFIER</button>
    <div class="profil_content">
        <label for="">Adresse e-mail</label>
        <p class="customer_mail">adresse.mail@test.fr</p>
    </div>

    <div class="profil_content">
        <label for="">Mot de passe</label>
        <p class="customer_passwrd">m0t2p4ssM3g4S3cr3t</p>
    </div>

    <div class="profil_content">
        <label for="">Nom</label>
        <p class="customer_name">Marcel Petibonhom</p>
    </div>

    <div class="profil_content">
        <label for="">Numéro de téléphone</label>
        <p class="customer_phone">0621304125</p>
    </div>
</div>

<div class="order">
    <h2>MES COMMANDES</h2>

</div>

<?php include 'ressources/templates/footer.php'; ?>