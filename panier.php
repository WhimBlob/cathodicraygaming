<?php include 'ressources/templates/header.php'; ?>
<main class="container" id="panier">
  <ul class="breadcrumb">
    <li><a href="index.html">Accueil</a></li>
    <li class="active">Panier</li>
  </ul>
  <section class="col-xs-12 maincontent row" id="cartarticles">
    <h1 class="page-title">Panier</h1>
    <!-- Product -->
    <?php while ($dataProduct = $queryProduct->fetch()) 
      {
        if (isset($_SESSION['panier' . $dataProduct['nom_produit']])) 
        {
          $nbajout = $_SESSION['panier' . $dataProduct['nom_produit']];
          $prixtotal = $prixtotal + $nbajout*$dataProduct['prix'];
    ?>
    <article id = "product<?php echo $i ?>" class = "product">
      <div class = productext>
        <h3 class = "productname" id = "productname1"><a href='fiche_produit.php?product=<?php echo $dataProduct['nom_produit']?>'><?php echo $dataProduct['nom_produit']?></a></h3>
        <p class = "description"><?php echo $dataProduct['description_produit']?></p>
        <p class = "prix"><?php echo $dataProduct['prix']?>€</p>
        <p class = "stock"><?php echo Availability($dataProduct['stock'])?></p>
        <p class = "nbpanier">Vous en avez <?php echo $nbajout ?> dans le panier pour un total de <?php echo $nbajout*$dataProduct['prix']?>€</p>
        <form action="#" id="retraitpanier" method="post">
          <select id="nbretrait<?php echo $dataProduct['nom_produit'] ?>" name="nbretrait<?php echo $dataProduct['nom_produit'] ?>">
            <?php
            for ($j=1; $j <= $nbajout; $j++) {
              ?>
            <option class="dropdown-item" value="<?php echo $j?>"><?php echo $j?></option>
            <?php
            }
            ?>
          </select>
          <input class="btn btn-secondary" id="retraitpanier" name="retraitpanier" type="submit" value="Retirer du panier"></input>
        </form>
      </div>
      <img id = "product1img" class = "productimg" src="ressources/imgs/<?php echo $dataProduct['url_img_produit']?>" alt="Cathodic-Ray TV">
    </article>
    <div class="greybar"></div>
    <?php
      }
    }
    ?>
    <article id ="total">
      <p>Total = <?php echo $prixtotal ?> €</p>
      <input class="btn btn-secondary" id="acheter" name="acheter" type="submit" value="Acheter"></input>
    </article>
  </section>
</main>
<?php include 'ressources/templates/footer.php'; ?>