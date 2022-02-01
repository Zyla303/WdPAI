<?php

		require_once('header.php');

	?>
<main>
<div class="container-fluid banner">
    <div class="col-sm-12 ">
      <div class="container">
        <div class="row vertical-center">
        <div class="col-sm-12">

        <h1 class="mt-r-18"> Menage your <br> wardrobe </h1>
      <br>
      <span>  A modern clothes creator that allow you to do anythink </span>
      <br><br>
      <a href="creator" class="myButtonOne">Create Now</a>
      <a href="shop?category=1" class="myButtonTwo">Browse the store</a>
    </div>

        </div>
        </div>
      </div>
    </div>
</div>





<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center mt-24">
      <h6> EXPLORE AWENSOME PRODUCTS </h6>
      <h3> RECOMENDED FOR YOU </h3>
    </div>

      <?php foreach ($items as $item): ?>
          <div class="col-sm-3 text-center mt-48 grow">
              <a href="product?id=<?= $item->getId(); ?>">
                  <img class="col-sm-12 radius img-mobile" src="../public/<?= $item->getImage(); ?>">
                  <h6 class="mt-8 color-white"><b> <?= $item->getName(); ?></b></h6>
                  <div class="price-recommended"><?= $item->getPrice(); ?>zł</div>
              </a>
          </div>
      <?php endforeach; ?>
      <div class="col-sm-5"></div><div class="col-sm-2 mt-24"><a class="button-others" href="shop?category=1">Explore Other Products</a></div><div class="col-sm-5">

     </div>

    </div>
</div>

<div class="container-fluid mt-24 banner-sale">
    <div class="col-sm-12">
      <div class="container">
      <div class="row vertical-center-2">
        <div class="col-sm-10">
          <h2> Sneakers Never Run Out Of Style <br> Get 50% Off Sitewide </h2>
        </div>
        <div class="col-sm-2"><a class="button-footer" href="shop?category=1">Start Shopping</a></div>
      </div>
    </div>
</div>

</main>
	<?php

		require_once('footer.php');

	?>

</body>