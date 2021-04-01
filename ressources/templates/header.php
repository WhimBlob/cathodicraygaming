<?php session_start() ?>
<?php include 'ressources/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">
  <title>Cathodic Ray Gaming</title>
  <link rel="stylesheet" type="text/css" href="ressources/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="ressources/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="ressources/css/main.css">
  <link rel="stylesheet" type="text/css" href="ressources/css/crg.css">
</head>

<body>
  <header class="navbar navbar-inverse navbar-fixed-top headroom">
    <!-- Fixed navbar -->
    <div class="navbar-header">
      <!-- Button for smallest screens -->
      <button type="button" class="navbar-toggle" aria-label="burger" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php"><img src="ressources/imgs/LOGOTROPBI1.svg" alt="Cathodic Ray Gaming"></a>
    </div>
    <ul class="navbar-collapse collapse nav navbar-nav pull-right">
      <li><a class="active" href="index.php">Accueil</a></li>
      <li class="dropdown">
        <a href="https://cathodicscreens.000webhostapp.com/fiche_produit.php" class="dropdown-toggle" data-toggle="dropdown">Produits<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Premier produit</a></li>
          <li><a href="#">Deuxième produit</a></li>
          <li><a href="#">Troisième produit</a></li>
        </ul>
      </li>
      <!-- <li><a href="inscription.php">S'inscrire</a></li> -->
      <li><a href="signin.php">Mon Compte</a></li>
      <li><a href="panier.php">Panier</a></li>
    </ul>
    <!--/.nav-collapse -->
    <!-- /.navbar -->
  </header>