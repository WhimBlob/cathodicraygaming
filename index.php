  <?php include 'ressources/templates/header.php'?>
  <main>

    	<!-- Hero -->
	<section id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">For a nice retro feel</h1>
				<p class="tagline">Check out our 4K 140 FPS gaming screens based on the design of old Cathodic Ray TVs.</p>
			</div>
		</div>
  </section>

    <!-- For Sale -->
    <section id = "forsale">
      <h2>Nos meilleures ventes sont ici</h2>
      <article id = "product1" class = "product">
        <div class = productext>
          <h3 class = "productname" id = "productname1"><?php echo $productName1?></h3>
          <p class = "description"><?php echo $productDesc1?></p>
          <p class = "prix"><?php echo $productPrice1?></p>
          <p class = "stock"><?php echo $availability1?></p>
        </div>
        <img id = "product1img" class = "productimg" src="ressources/imgs/<?php echo $productImg1?>" alt="Cathodic-Ray TV">
      </article>
      <article id = "product2" class = "product">
        <div class = productext>
          <h3 class = "productname" id = "productname2"><?php echo $productName2?></h3>
          <p class = "description"><?php echo $productDesc2?></p>
          <p class = "prix"><?php echo $productPrice2?></p>
          <p class = "stock"><?php echo $availability2?></p>
        </div>
        <img id = "productimg" class = "productimg" src="ressources/imgs/<?php echo $productImg2?>" alt = "Cathodic-Ray TV">
      </article>
      <article id = "product3" class = "product">
        <div class = productext>
          <h3 class = "productname" id = "productname3"><?php echo $productName3?></h3>
          <p class = "description"><?php echo $productDesc3?></p>
          <p class = "prix"><?php echo $productPrice3?></p>
          <p class = "stock"><?php echo $availability3?></p>
        </div>
        <img id = "product3img" class = "productimg" src="ressources/imgs/<?php echo $productImg3?>" alt = "Cathodic-Ray TV">
      </article>
    </section>
  </main>
  <?php include 'ressources/templates/footer.php'?>