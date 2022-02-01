<?php
require_once('header.php');

?>
<main>

    <div class="container mt-24">
        <div class="row">
            <div class="col-sm-6">
                <h2>Choose payment method:</h2><br>
                <form action="buyOrder?userid=<?php echo $_SESSION['user']; ?>" method="POST">
                <?php foreach ($payments as $payment): ?>
                    <h3><input name="payment" type="radio" value='<?= $payment->getId(); ?>'> <?= $payment->getNamePaymentMetod(); ?> </h3><br>
                <?php endforeach; ?>
            </div>
            <div class="col-sm-6">

            </div>
        <div class="col-sm-12 txt-algin-right mt-24">
            <hr class="gold">
            <button class="myButtonCart">Buy</button>
            </form>
        </div>
        </div>
    </div>


</main>
<?php

require_once('footer.php');

?>

</body>