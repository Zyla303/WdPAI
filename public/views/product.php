<?php 

        require_once('header.php');

	?>
<script>
function myFunction(imgs) {

var expandImg = document.getElementById("expandedImg");


expandImg.src = imgs.src;

imgText.innerHTML = imgs.alt;

expandImg.parentElement.style.display = "block";
}
</script>
<main>
<?php $id = $_GET['id']; ?>
    <?php
    if(!isset($items)){
        ?> <h2 class="text-center mt-24">
            <?php
            if(isset($messages)){
                foreach($messages as $message) {
                    echo $message;
                }
            }
            ?>
        </h2>
        <meta http-equiv="Refresh" content="1;url=product?id=<?php echo $_GET['product']; ?>"> <?php
    }else{
    foreach ($items as $item): ?>
<div class="container mt-24">
    <div class="row">
        <div class="col-sm-5">
        <img class="col-sm-12 radius" id="expandedImg" src="../public/<?= $item->getImage(); ?>">
		</div>
        <div class="col-sm-1 ml-shop">
            <?php
            $i = 0;
            $katalog = dirname(__DIR__) . '/../public/'.$item->getImagesFolder();
            $dir = opendir($katalog);
            while(false !== ($file = readdir($dir)))

                if($file != '.' && $file != '..' && $file){
                    if($i <= 5) {
                        echo '<img class="col-md-12 col-xs-12 radius shop-mini" alt="'.$id.'" onclick="myFunction(this);" src="../public/' . $item->getImagesFolder() . '/' . $file . '">';
                    }
                    $i++;
                }
            ?>
		</div>
        <div class="col-sm-6 col-xs-12">
		<h2 class="mobile-title"> <?= $item->getName(); ?> </h2>
        <br>
            <?= $item->getDescription(); ?>
            <br><br><br>
        <span class="price">Cena: <?= $item->getPrice(); ?>zł</span>

                <a class="button-shop ml-24" href="addorder?product=<?php echo $_GET['id'] ?>&userid=<?php echo $_SESSION['user']; ?>">ADD TO CART</a>

            <a class="button-shop ml-24" href="creator">CUSTOMIZE</a>

        </div>
    </div>
</div>
    <?php endforeach; }?>
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