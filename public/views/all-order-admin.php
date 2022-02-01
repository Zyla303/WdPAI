<?php 

		require_once('header-admin.php');
        session_start();
        $_SESSION['id'] = $_GET['id'];

	?>
<main>

<div class="container mt-24">
    <div class="row">
        <?php
        if(!isset($orders)){
            ?><meta http-equiv="Refresh" content="0.000001;url=allOrderAdmin"><?php
        } else{

        $d = 0;
        $step = 0;
        $i = 0;
        $j = 0;
        $imgCount = 0;
        $priceA = 0;
        foreach ($orders as $order):
            $date[$d] = $order->getPaymentDate();
            $payment[$d] = $order->getPaymentMethod();
            $price[$d] = $order->getPrice();
            $d++;
        endforeach;
        foreach ($orders as $order):
        $priceA = $price[$step]+$priceA;
        if ($step >= 100 || $priceA >= 10000){
            $promo = 0.15;
        }elseif($step >= 50 || $priceA >= 5000){
            $promo = 0.1;
        }elseif($step >= 10 || $priceA >= 1000){
            $promo = 0.05;
        }
        if($date[$step] != $date[$step+1] ){ ?>
        <div class="col-sm-3 border-gold ">
        <a href="?page=product">
            <a href="showOtherItems?payment_date=<?= $date[$step] ?>&user_id=<?= $order->getUserId()?>"><img src="../public/<?= $order->getImage(); ?>" class="col-sm-4 radius "></a>
            <div class="col-sm-3 right more-txt"> <?php if($imgCount == 0){}else{echo '+'.$imgCount." <a class='gold' href='showOtherItems?payment_date=$date[$step]&user_id=".$order->getUserId()."'> more</a>"; } ?> </div>

        </div>
        <div class="col-sm-5 border-gold">
            <div class="col-sm-4 left">
                <b>Price:</b> <?= round($priceA, 2); ?>zł<br>
                <b>Payment method:</b> <?= $order->getPaymentname(); ?> <br>
                <b>Payment status:</b> Opłacono <br>
                <b>Payment date:</b> <?= $date[$step] ?> <br>
            </div>
            <div class="col-sm-4 left">
            <b>First name:</b> <?= $order-> getUserName(); ?><br>
            <b>Last name:</b> <?= $order->getUserSurname(); ?> <br>
            <b>City:</b> <?= $order->getTown(); ?> <br>
            <b>Street:</b> <?= $order->getSteet(); ?> <br>
            </div>
            <div class="col-sm-4 right">
            <b>House number:</b> <?= $order->getHousenumber(); ?> <br>
            <b>Flat Number:</b> <?= $order->getFlatnumber(); ?> <br>
            <b>Postal Code:</b> <?= substr($order->getPostalcode(),0 ,  2) ?>-<?= substr($order->getPostalcode(), 2, 3) ?> <br>
            </div>
        </div>
        <div class="col-sm-2 border-gold text-center">
        <b>Customize items: <span class="red">yes</span></b><br>
               <button class=" button-creator mt-8"> Download </button>
        </div>
        <div class="col-sm-1 border-gold text-center">
        <b>Repeat<br>order</b><br>
            <form action="repeatOrder?payment_date=<?= $order->getPaymentDate(); ?>&user_id=<?= $order->getUserId(); ?>" method="POST">
                <button class=" button-creator mt-8"> Repeat </button>
            </form>
        </div>
        <div class="col-sm-1 border-gold text-center">
        <b>Delete order</b><br>
            <form action="deleteOrderAdmin?payment_date=<?= $order->getPaymentDate(); ?>&user_id=<?= $order->getUserId(); ?>" method="POST">
                <button class=" button-creator mt-8"> Delete </button>
            </form>
        </div>
            <?php
            $step++;
            $priceA = 0;
            $imgCount = 0;

        }else{
            $step++;
            $imgCount++;
        }

        endforeach;         }
        ?>
    </div>
</div>

</main>
	<?php

		require_once('footer.php');

	?>

</body>