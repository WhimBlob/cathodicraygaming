<?php include 'ressources/config_admin.php'; ?>
  <article id="commentmodifier">
    <h2 class="page-title">Choisir un produit à modifier</h2>
    <form action="#" class="profil_content" id="modifProduit" method="post">
      <select id="choixProduit" name="choixProduit">
          <?php
            while ($dataProduct = $queryProduct->fetch())  {
              ?>
            <option class="dropdown-item" value="<?php echo $dataProduct['nom_produit']?>"><?php echo $dataProduct['nom_produit']?></option>
            <?php
            }
          ?>
      </select>
      <input class="btn btn-secondary" id="modifierProduit" name="modifierProduit" type="submit" value="Modifier"></input>
    </form>
    <?php if(isset($_POST['modifierProduit']) && $_POST['modifierProduit'] == "Modifier") {
            extract($_POST); //On obtient le choix de produit à modifier : $choixProduit
            // On sort le produit
            $queryProduct1 = $pdo->query("SELECT * FROM `produits` WHERE nom_produit = '$choixProduit'");
            $dataProduct = $queryProduct1->fetch();
             ?>
    <form action="#" enctype="multipart/form-data" class="profil_content" id="optionsModifProduit" method="post">
              <input type='hidden' name='nomProduit' value='<?php echo $choixProduit?>'>
              <div class="top-margin">
                <label for="descProduit" class="form-label">Description du Produit</label>
                <input type="textarea" class="form-control" id="nom" name="descProduit" value="<?php echo $dataProduct['description_produit']?>">
              </div>
              <div class="top-margin">
                <label for="prixProduit" class="form-label">Prix du Produit</label>
                <input type="text" class="form-control" id="prixProduit" name="prixProduit" value="<?php echo $dataProduct['prix']?>">
              </div>
              <div class="top-margin">
                <label for="stockProduit" class="form-label">Nombre de produits en stock</label>
                <input type="text" class="form-control" id="stockProduit" name="stockProduit" value="<?php echo $dataProduct['stock']?>">
              </div>
              <div class="top-margin">
                <label for="imgProduit" class="form-label">Photo du Produit</label>
                <input type="file" class="form-control" id="imgProduit" name="imgProduit">
              </div>
              <input type="submit" value="Accepter modifications" name="modifications" id="modifications" class="margin-top btn btn-action">
    </form>
    <form action="#" class="profil_content" id="suppProduit" method="post">
      <input type='hidden' name='nomProduit' value='<?php echo $choixProduit?>'>
      <input type="submit" value="Nuke" name="nuke" id="nuke" class="top-margin btn btn-action">
    </form>
    <?php } ?>
  </article>
  <article id="commentajouter">
  <h2 class="page-title">Ajouter un produit</h2>
  <form action="#" class="profil_content" id="ajoutProduit" method="post">
    <input class="btn btn-secondary" id="ajouterProduit" name="ajouterProduit" type="submit" value="Ajouter"></input>
  </form>
  <?php if(isset($_POST['ajouterProduit']) && $_POST['ajouterProduit'] == "Ajouter") 
    {  ?>
    <form action="#" enctype="multipart/form-data" class="profil_content" id="optionsAjoutProduit" method="post">
              <div class="top-margin">
                <label for="nomAddProduit" class="form-label">Nom du Produit</label>
                <input type="text" class="form-control" id="nomAddProduit" name="nomAddProduit" value="<?php echo $champNomProduit?>">
              </div>
              <div class="top-margin">
                <label for="descAddProduit" class="form-label">Description du Produit</label>
                <input type="textarea" class="form-control" id="descAddProduit" name="descAddProduit" value="<?php echo $champDescProduit?>">
              </div>
              <div class="top-margin">
                <label for="prixAddProduit" class="form-label">Prix du Produit</label>
                <input type="text" class="form-control" id="prixAddProduit" name="prixAddProduit" value="<?php echo $champPrixProduit?>">
              </div>
              <div class="top-margin">
                <label for="stockAddProduit" class="form-label">Nombre de produits en stock</label>
                <input type="text" class="form-control" id="stockAddProduit" name="stockAddProduit" value="<?php echo $champStockProduit?>">
              </div>
              <div class="top-margin">
                <label for="imgAddProduit" class="form-label">Photo du Produit</label>
                <input type="file" class="form-control" id="imgAddProduit" name="imgAddProduit">
              </div>
              <div class="top-margin col-lg-4 text-right">
                 <input type="submit" value="Créer nouveau produit" name="creation" id="creation" class="btn btn-action">
              </div>
    </form>
    <?php } ?>
  </article>



