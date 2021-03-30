<?php include 'ressources/templates/header.php'; ?>
<main class="container" id="panier">
  <ul class="breadcrumb">
    <li><a href="index.html">Accueil</a></li>
    <li class="active">Tous les produits</li>
    <li class="active">Produit 1</li>
  </ul>
  <section class="col-xs-12 maincontent row" id="cartarticles">
    <h1 class="page-title">Produit 1</h1>
    <!-- Product -->
    <article class="col-md-6 col-sm-8 cartarticle">
    <!-- Product Picture -->
      <img class = "productimg" src="ressources/imgs/157612182_259155989105775_9145309204689973689_n.png" alt="Cathodic-Ray TV">
      <div class = "productoutext">
      <!-- Product Name -->
        <h2>Produit 1 Lorem ipsum dolor sit amet</h2>
      <!-- Avalability -->
        <p>En stock</p>
      <!-- Ajout Panier -->
      <div id="ajoutpanier">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            1
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">2</a>
            <a class="dropdown-item" href="#">3</a>
            <a class="dropdown-item" href="#">4</a>
          </div>
        </div>
        <button class="btn btn-secondary" id="butajout">Ajouter au panier</button>
      </div>
      <!-- Prix -->
        <p class="price">€ 149,00</p>
      </div> 
    </article>
    <div class="greybar"></div>
  </section>
</main>
<?php include 'ressources/templates/footer.php'; ?>