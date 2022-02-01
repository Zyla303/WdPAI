<?php
        require_once('header.php');

	?>
<main>

<div class="container mt-24">
    <div class="row">
        <?php
        $promo = 0;
        $refund = 0;
        $i = 0;
        if(!isset($orders)){
            ?>
            <h2 class="text-center mt-24">Successful deleted!</h2>
            <meta http-equiv="Refresh" content="0.000001;url=showCart?userid=<?php echo $_SESSION['user']; ?>"> <?php
        }else{
        foreach ($orders as $order):
            $i++;
            $refund = $refund + $order->getPrice();
        endforeach;
        if ($i >= 100 || $refund >= 10000){
            $promo = 0.15;
        }elseif($i >= 50 || $refund >= 5000){
            $promo = 0.1;
        }elseif($i >= 10 || $refund >= 1000){
            $promo = 0.05;
        }
        }
        ?>
        <?php
        $endprice = 0;
        if(!isset($orders)){}else{
        foreach ($orders as $order):
            ?>
        <form action="deleteCart?delete=<?=$order->getIdOrder();?>" method="POST" class="col-sm-4 border-gold padding-cart">
            <a href="?page=product"><img src="../public/<?= $order->getImage(); ?>" class="col-sm-4 radius left"></a>
            <div class="col-sm-7 right">
            <h5><?= $order->getName(); ?></h5><br>
               <button class="right button-creator"> Delete </button>
               <h6>Regular price: <s><?= round($order->getPrice(), 2); ?>zł</s></h6> <br>
               <h5>Deal price: <?=round($price = $order->getPrice()-($order->getPrice()*$promo), 2); ?>zł</h5>
            </div>
        </form>

        <?php
        $endprice = $price + $endprice;
        endforeach; }
        ?>
        <div class="col-sm-1"></div>
        <div class="col-sm-12 txt-algin-right mt-24">
            <h2> <?php
                if(!isset($orders)){}else {
                    echo round($endprice, 2) . "zł";
                ?></h2>
            <hr class="gold">
            <a class="myButtonCart" href="getPaymentMethod">Buy</a><?php } ?>
        </div>
    </div>
</div>


</main>
	<?php

		require_once('footer.php');

	?>

</body>