<?php 

		require_once('header-admin.php');

	?>
<main>

<div class="container mt-24">
    <div class="row">
        <h2>Add items:</h2>
        <div class="col-sm-4">
            <form action="additems" method="POST" ENCTYPE="multipart/form-data">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
                <label for="name"><b>Item name:</b></label><br>
                <input type="text" class="input-gold col-sm-10" placeholder="Enter item name..." name="name"><br><br>

                <label for="price"><b>Item price:</b></label><br>
                <input type="float" class="input-gold col-sm-10" placeholder="Enter item price..." name="price"><br><br>

                <label for="category"><b>Choose category:</b></label><br>
                <select name="category" id="category" class="input-gold col-sm-10">
                    <option value="" disabled>Choose category</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category->getCategoryId(); ?>"> <?= $category->getCategoryName(); ?></option>
                    <?php endforeach; ?>
                </select>
        </div>
        <div class="col-sm-4">
                <label for="description"><b>Item description:</b></label><br>
            <textarea class="input-gold col-sm-10" rows="9"  placeholder="Enter item description..." name="description"></textarea><br><br>


        </div>
        <div class="col-sm-4">
                <label for="file"><b>Add images:</b></label><br>
                <input type="file" id="addimages" name="file[]" multiple><br><br>

               <!-- <label for="partofclothes"><b>Add parts of clothes:</b></label><br>
                <input type="file" id="partofclothes" name="partofclothes" accept="image/*" multiple><br><br> -->
        </div>
        <div class="col-sm-12 txt-algin-right mt-24">
            <hr class="gold">
            <button class="myButtonCart" type="submit" name="submit" value="Upload">Add</button>
            </form>
        </div>
    </div>
</div>

        </div>
    </div>
</main>
	<?php

		require_once('footer.php');

	?>

</body>