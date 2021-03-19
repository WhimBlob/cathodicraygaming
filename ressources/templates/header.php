<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">
  <title>Cathodic Ray Gaming</title>
  <style>
    <?php
    include 'ressources/css/bootstrap.min.css';
    include 'ressources/css/bootstrap.min.css';
    include 'ressources/css/font-awesome.min.css';
    include 'ressources/css/bootstrap-theme.css';
    include 'ressources/css/main.css';
    include 'ressources/css/crg.css'
    ?>
  </style>
</head>

<body onresize="adaptheight()">
  <header class="navbar navbar-inverse navbar-fixed-top headroom container">
    <!-- Fixed navbar -->
    <div class="navbar-header">
      <!-- Button for smallest screens -->
      <button type="button" class="navbar-toggle"  aria-label="burger" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html"><img src="ressources/images/logo.png" alt="Cathodic Ray Gaming"></a>
    </div>
    <nav class="navbar-collapse collapse nav navbar-nav pull-right">
      <li><a class="active" href="index.php">Accueil</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produits<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Premier produit</a></li>
          <li><a href="#">Deuxième produit</a></li>
          <li><a href="#">Troisième produit</a></li>
        </ul>
      </li>
      <!-- <li><a href="inscription.php">S'inscrire</a></li> -->
      <li><a href="profil.php">Mon Compte</a></li>
      <li><a href="panier.php">Panier</a></li>
    </nav>
    <!--/.nav-collapse -->
    <!-- /.navbar -->
  </header>