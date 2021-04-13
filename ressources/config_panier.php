<?php

$product = $dataProduct['nom_produit'];
$_SESSION['panier' . $dataProduct['nom_produit']] = $_SESSION['panier' . $product];
$prixtotal = $prixtotal + $_SESSION['panier' . $dataProduct['nom_produit']]*$dataProduct['prix'];

// Gestion des retraits paniers
if(isset($_POST['retraitpanier']) && $_POST['retraitpanier'] == "Retirer du panier") {

  extract($_POST); //convertir les indices sous la forme de variable
  $_SESSION['panier' . $dataProduct['nom_produit']]= ($_SESSION['panier' . $dataProduct['nom_produit']] - $_POST['nbretrait' . $product]); 
}

?>