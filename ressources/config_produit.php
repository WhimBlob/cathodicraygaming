<?php

// Check product
if(isset($_GET['product']))
{
    $product = htmlspecialchars($_GET['product']);
    $queryProduct = $pdo->prepare("SELECT * FROM `produits` WHERE nom_produit = ?");
    $queryProduct->execute(array($product));
    $dataProduct = $queryProduct->fetch();
    if ($queryProduct->rowCount() > 0) {
      $productStock = $dataProduct['stock'];
      $productPrice = $dataProduct['prix'];
      $productImg = $dataProduct['url_img_produit'];
      $productDesc = $dataProduct['description_produit'];
    }
    else {
      header('Location: 404.php');
    }
}
else {
  header('Location: 404.php');
}

// Declarer la session produit
if(!isset($_SESSION['panier' . $product])) {
  $_SESSION['panier' . $product] = 0;
}

// Gestion des ajouts paniers
if(isset($_POST['ajoutpanier']) && $_POST['ajoutpanier'] == "Ajouter au panier") {

  extract($_POST); //convertir les indices sous la forme de variable
  $_SESSION['panier' . $product]= ($_SESSION['panier' . $product] + $_POST['nbajout' . $product]);
}

// Gestion du texte des stocks
if($productStock > 10) {
  $availability = 'En Stock';
}
  else if($productStock > 0) {
    $availability = 'Il en reste ' . $productStock;
  }
  else {
    $availability = 'Non disponible';
  }

?>