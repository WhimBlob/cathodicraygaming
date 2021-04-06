<?php include 'ressources/templates/header.php'; ?>
<?php include 'ressources/config_produit.php'; ?>
<main class="container" id="panier">
  <ul class="breadcrumb">
    <li><a href="index.html">Accueil</a></li>
    <li class="active">Tous les produits</li>
    <li class="active"><?php echo $product ?></li>
  </ul>
  <section class="col-xs-12 maincontent row" id="cartarticles">
    <h1 class="page-title"><?php echo $product ?></h1>
    <!-- Product -->
    <article class="col-md-6 col-sm-8 cartarticle">
    <!-- Product Picture -->
      <img class = "productimg" src="ressources/imgs/<?php echo $productImg ?>" alt="<?php echo "$product . 'img'"?>">
      <div class = "productoutext">
      <!-- Product Name -->
        <h2><?php echo $product ?></h2>
      <!-- Availability -->
        <p><?php echo $availability ?></p>
      <!-- Ajout Panier -->
      <form id="ajoutpanier" method="post">
        <select id="nbajout" name="nbajout">
          <option class="dropdown-item" value="1">1</option>
          <option class="dropdown-item" value="2">2</option>
          <option class="dropdown-item" value="3">3</option>
          <option class="dropdown-item" value="4">4</option>
        </select>
        <input class="btn btn-secondary" id="butajout" type="submit" value="Ajouter au panier"></input>
      </form>
      <!-- Prix -->
        <p class="price"><?php echo $productPrice ?>€</p>
      </div> 
    </article>
    <div class="greybar"></div>
  </section>
</main>
<?php include 'ressources/templates/footer.php'; ?>