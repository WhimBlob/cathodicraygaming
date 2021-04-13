<?php include 'ressources/templates/header.php'?>
<main>
  <section id = "forsale">
      <h2>Ci-dessous, tous nos produits</h2>
      <?php while ($dataProduct = $queryProduct->fetch()) 
      { $i++;
      ?>
      <article id = "product<?php echo $i ?>" class = "product">
        <div class = productext>
          <h3 class = "productname"><a href='fiche_produit.php?product=<?php echo $dataProduct['nom_produit']?>'><?php echo $dataProduct['nom_produit']?></a></h3>
          <p class = "description"><?php echo $dataProduct['description_produit']?></p>
          <p class = "prix"><?php echo $dataProduct['prix']?>€</p>
          <p class = "stock"><?php echo Availability($dataProduct['stock'])?></p>
        </div>
        <img id = "product1img" class = "productimg" src="ressources/imgs/<?php echo $dataProduct['url_img_produit']?>" alt="Cathodic-Ray TV">
      </article>
        <?php
        }
        ?>
    </section>
  </main>
  <?php include 'ressources/templates/footer.php'?>