<?php 

		require_once('header-admin.php');

	?>
<main>

<div class="container mt-24">
    <div class="row">
        <div class="col-sm-4">
            <h3>Your categories:</h3><br>
            <?php
            $i = 1;
            if(!isset($categories)){ ?>
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
                <br> <a href="getCategory">Refreash</a>
            <?php }else{ ?>
            <?php foreach ($categories as $category): ?>
                <?php echo $i ?>. <?= $category->getCategoryName(); ?><br>
            <?php $i++;
                endforeach; } ?>
        </div>
        <div class="col-sm-4">
            <form action="addcategory" method="POST">
                <label for="category"><b>Add category in shop:</b></label><br>
                <input type="textarea" class="input-gold col-sm-10" rows="5" cols="33" placeholder="Enter categoty name..." name="category"><br><br>

        </div>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-12 txt-algin-right mt-24">
            <hr class="gold">
            <button class="myButtonCart">Add</button>
            </form>
        </div>
    </div>
</div>

</main>
	<?php

		require_once('footer.php');

	?>

</body>