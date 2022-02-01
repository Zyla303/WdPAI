<?php 

		require_once('header-admin.php');

	?>
<main>

<div class="container mt-24">
    <div class="row">
        <div class="col-sm-4">
            <form>
                <label for="itemname"><b>Item name:</b></label><br>
                <input type="text" class="input-gold col-sm-10" placeholder="Enter item name..." name="itemname"><br><br>

                <label for="price"><b>Item price:</b></label><br>
                <input type="text" class="input-gold col-sm-10" placeholder="Enter item price..." name="price"><br><br>
        </div>
        <div class="col-sm-4">
                <label for="description"><b>Item description:</b></label><br>
                <input type="textarea" class="input-gold col-sm-10" rows="5" cols="33" placeholder="Enter item description..." name="description"><br><br>
        </div>
        <div class="col-sm-4">
                <label for="addimages"><b>Add images:</b></label><br>
                <input type="file" id="addimages" name="addimages" accept="image/*" multiple><br><br>

                <label for="partofclothes"><b>Add parts of clothes:</b></label><br>
                <input type="file" id="partofclothes" name="partofclothes" accept="image/*" multiple><br><br>
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