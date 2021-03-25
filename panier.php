<?php include 'ressources/templates/header.php'; ?>
<main class="container" id="panier">
  <ul class="breadcrumb">
    <li><a href="index.html">Accueil</a></li>
    <li class="active">Panier</li>
  </ul>
  <section class="col-xs-12 maincontent row" id="cartarticles">
    <h1 class="page-title">Panier</h1>
    <!-- Product -->
    <article class="col-md-6 col-sm-8 cartarticle">
    <!-- Product Picture -->
      <img class = "productimg" src="ressources/imgs/157612182_259155989105775_9145309204689973689_n.png" alt="Cathodic-Ray TV">
    <!-- Product Name -->
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
    <!-- Avalability -->
      <p>En stock</p>
    <!-- Dropdown number -->
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
    <!-- Prix -->
      <p class="price">€ 149,00</p>
    </article>
    <div class="greybar"></div>
    <article class="col-md-6 col-sm-8 cartarticle">
    <!-- Product Picture -->
      <img class = "productimg" src="ressources/imgs/157612182_259155989105775_9145309204689973689_n.png" alt="Cathodic-Ray TV">
    <!-- Product Name -->
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
    <!-- Avalability -->
      <p>En stock</p>
    <!-- Dropdown number -->
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
    <!-- Prix -->
      <p class="price">€ 149,00</p>
    </article>
    <div class="greybar"></div>
    <article class="col-md-6 col-sm-8 cartarticle" id="checkout">
      <p id="total" class="checkoutparts">Total :</p>
      <input type="submit" value="Paiement" name="pay" id="pay" class="btn btn-action checkoutparts">
    </article>
    <div class="greybar"></div>
  </section>
</main>
<?php include 'ressources/templates/footer.php'; ?>