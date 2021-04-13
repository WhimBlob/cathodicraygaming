<?php

// On récupère le formulaire des modifications
if(isset($_POST['modifications']) && $_POST['modifications'] == "Accepter modifications") {

  extract($_POST); //convertir les indices sous la forme de variable
  if (is_numeric($prixProduit)) 
  {
    $stockProduit = intval($stockProduit);
    if (is_int($stockProduit)) 
    {
      // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
      if (isset($_FILES['imgProduit']) AND $_FILES['imgProduit']['error'] == 0)
      {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['imgProduit']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'png');
        if (in_array($extension_upload, $extensions_autorisees))
        {
        // On peut valider le fichier et le stocker définitivement
        move_uploaded_file($_FILES['imgProduit']['tmp_name'], 'ressources/imgs/' . $nomProduit);
        }
      }

      $modifNomPrep = $pdo->prepare("UPDATE produits SET 
        description_produit = :desc_produit, 
        prix = :prix,
        stock = :stock,
        url_img_produit = :img_produit
      WHERE nom_produit = :nom_produit");

      $modifNomPrep->execute(array(
        'nom_produit'=> $nomProduit,
        'stock' => $stockProduit,
        'desc_produit' => $descProduit,
        'prix' => $prixProduit,
        'img_produit' => $nomProduit
      ));
    }
    else {
      echo 'Veuillez entrer un stock correct';
    }
  }
  else{
    echo 'Veuillez entrer un prix correct';
  }
}

// On récupère le formulaire de la suppression
if(isset($_POST['nuke']) && $_POST['nuke'] == "Nuke") {
  extract($_POST); //convertir les indices sous la forme de variable
  $suppProduit = $pdo->prepare('DELETE FROM produits WHERE nom_produit = :nomProduit');
  $suppProduit->execute(array(
    'nomProduit' => $nomProduit
  ));
}

// On récupère le formulaire des ajouts
if(isset($_POST['creation']) && $_POST['creation'] == "Créer nouveau produit") 
{
  extract($_POST); //convertir les indices sous la forme de variable
  if (isset($nomAddProduit) && isset($descAddProduit) && isset($_FILES['imgAddProduit']))
  {
    if (is_numeric($prixAddProduit)) 
    {
      $stockAddProduit = intval($stockAddProduit);
      if (is_int($stockAddProduit)) 
      {
        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
        if ($_FILES['imgAddProduit']['error'] == 0)
        {
           // Testons si l'extension est autorisée
          $infosfichier = pathinfo($_FILES['imgAddProduit']['name']);
          $extension_upload = $infosfichier['extension'];
          $extensions_autorisees = array('jpg', 'jpeg', 'png');
          if (in_array($extension_upload, $extensions_autorisees))
          {
          // On peut valider le fichier et le stocker définitivement
          move_uploaded_file($_FILES['imgAddProduit']['tmp_name'], 'ressources/imgs/' . $nomAddProduit);
          }
        }

        $queryInsert = "INSERT INTO
        produits (id_produit, nom_produit, stock, description_produit, prix, url_img_produit) 
        VALUES (:id_produit, :nom_produit, :stock, :desc_produit, :prix, :img_produit)";
      
        $ajoutPrep = $pdo->prepare($queryInsert);
        $ajoutPrep->execute(
          [
            'id_produit' => NULL,
            'nom_produit'=> $nomAddProduit,
            'stock' => $stockAddProduit,
            'desc_produit' => $descAddProduit,
            'prix' => $prixAddProduit,
            'img_produit' => $nomAddProduit
          ]
        );
      }
      else {
        echo 'Veuillez entrer un stock correct';
      }
    }
    else {
      echo 'Veuillez entrer un prix correct';
    }
  }
}
?>

<?php
$champNomProduit = $_POST['nomAddProduit'] ?? null;
$champDescProduit = $_POST['descAddProduit'] ?? null;
$champPrixProduit = $_POST['prixAddProduit'] ?? null;
$champStockProduit = $_POST['stockAddProduit'] ?? null;
?>