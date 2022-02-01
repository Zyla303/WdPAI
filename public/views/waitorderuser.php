<?php

require_once('header-user.php');
	?>

<main>

    <div class="container mt-24">
        <div class="row">
        <?php
        if(!isset($orders)){
            ?><meta http-equiv="Refresh" content="0.000001;url=showWaitOrdersUser?userid=<?php echo $_GET['userid']; ?>"><?php
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
                <div class="col-sm-4 border-gold padding-cart">
                            <a href="showOtherItems?payment_date=<?= $date[$step] ?>&user_id=<?= $order->getUserId()?>"><img src="../public/<?= $order->getImage(); ?>" class="col-sm-4 radius"></a>
                    <div class="col-sm-3 right more-txt">
                <?php if($imgCount == 0){}else{echo '+'.$imgCount." <a class='gold' href='showOtherItems?payment_date=$date[$step]&user_id=".$order->getUserId()."'> more</a>"; } ?> </div>
                    <div class="col-sm-12 mt-24">
                        <h6>Price: <?= round($priceA, 2); ?>zł</h6>
                        <h6>Payment method: <?= $order->getName()?></h6>
                        <h6>Payment status: Opłacone</h6>
                        <h6>Ordered: <?= $date[$step] ?></h6>
                    </div>
                    <div class="col-sm-12 mt-24 text-center">
                        <b>Recipt/invoice</b><br>
                        <button class=" button-creator mt-8"> Download </button>
                    </div>
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