<?php
session_start();
if($_SESSION['user'] > 0){
    require_once('header-user.php');
}else{
    require_once('header-admin.php');
}
?>
<main>

    <div class="container mt-24">
        <div class="row">
            <?php
            foreach ($orders as $order):
                echo "<h2>".$order->getName()."</h2>";
            $i = 0;
            $katalog = dirname(__DIR__) . '/../public/'.$order->getImagesFolder();
            $dir = opendir($katalog);
            while(false !== ($file = readdir($dir)))

                if($file != '.' && $file != '..' && $file){
                    if($i <= 5) {
                        echo '<img class="col-md-2 col-xs-12 radius shop-mini"  src="../public/' . $order->getImagesFolder() . '/' . $file . '">';
                    }
                    $i++;
                }
                echo "<hr class=' mt-24 gold'>";
                endforeach;
            ?>
        </div>
    </div>

</main>
<?php

require_once('footer.php');

?>

</body>