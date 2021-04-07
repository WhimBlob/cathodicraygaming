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
      <?php while ($dataProduct3 = $queryProduct3->fetch()) 
      { $i++
      ?>
      <article id = "product<?php echo $i ?>" class = "product">
        <div class = productext>
          <h3 class = "productname" id = "productname1"><?php echo $dataProduct3['nom_produit']?></h3>
          <p class = "description"><?php echo $dataProduct3['description_produit']?></p>
          <p class = "prix"><?php echo $dataProduct3['prix']?></p>
          <p class = "stock"><?php echo Availability($dataProduct3['stock'])?></p>
        </div>
        <img id = "product1img" class = "productimg" src="ressources/imgs/<?php echo $dataProduct3['url_img_produit']?>" alt="Cathodic-Ray TV">
      </article>
      <?php
      }
      ?>
    </section>
  </main>
  <?php include 'ressources/templates/footer.php'?>