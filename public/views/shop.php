<?php 

        require_once('header.php');

	?>
<main>

<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center mt-24">
      <h6> EXPLORE AWENSOME PRODUCTS </h6>
        <?php
        if(isset($messages)){
            foreach($messages as $message) {
                echo $message;
            }
        }
        ?>
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
        <div class="col-sm-2"><a class="button-footer" href="?page=shop">Start Shopping</a></div>
      </div>
    </div>
</div>


</main>
	<?php

		require_once('footer.php');

	?>

</body>