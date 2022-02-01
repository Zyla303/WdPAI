<?php 

        require_once('header.php');

	?>
<main>

<div class="container-fluid mt-24">
    <div class="row">
        <div class="col-sm-2">
			<div class="col-sm-12 border-wh">
			<a class="button-creator" href="">BACK</a> 
			<a class="button-creator" href="?page=creator">CART</a>
			</div>
			<div class="col-sm-12 border-wh">
			<form> 
				<select  name="categories" id="categories" class="col-sm-8 options">
					<option>Opcja 1</option>
					<option>Opcja 2</option>
					<option>Opcja 3</option>
				</select>
			</form>
			<form> 
				<select  name="categories" id="categories" class="col-sm-8 options">
					<option>Opcja 1</option>
					<option>Opcja 2</option>
					<option>Opcja 3</option>
				</select>
			</form>
			<a class="button-creator" href="">Add Text</a> <br>
			<a class="button-creator" href="?page=creator">Add Image</a>
			</div>
			<div class="col-sm-12 border-wh">
			Product Color
			</div>
			<div class="col-sm-12 border-wh">
			Text Color
			</div>

		</div>
        <div class="col-sm-7 bg-white border-wh"><img class="col-sm-8 radius" src="images/hoodie.jpg"></div>


        <div class="col-sm-3">
			<div class="col-sm-12 border-wh">
				<a class="button-creator" href="">Undo</a>
				<a class="button-creator" href="?page=creator">Preview</a>
				<a class="button-creator" href="?page=creator">Save</a>
			</div>
			<div class="col-sm-12 border-wh">
				<img class="col-sm-11 radius" src="images/hoodie.jpg">
			</div>
			<div class="col-sm-12 border-wh">
				Size<br>
				XS ...<br>
				L
			</div>
			<div class="col-sm-12 border-wh">
			<form action="">
				<label for="order">Comment to order</label><br>
				<input type="text" id="order" name="firstname" placeholder="Comment" class="col-sm-10">
			</form>
			</div>
		</div>
		<div class="col-sm-2">

		</div>
        <div class="col-sm-7 bg-white mt-8 border-wh">
		<img class="col-sm-1 radius" src="images/hoodie.jpg">
		<img class="col-sm-1 radius" src="images/hoodie.jpg">
		<img class="col-sm-1 radius" src="images/hoodie.jpg">
		<img class="col-sm-1 radius" src="images/hoodie.jpg">	
		<img class="col-sm-1 radius" src="images/hoodie.jpg">
		<img class="col-sm-1 radius" src="images/hoodie.jpg">
		<img class="col-sm-1 radius" src="images/hoodie.jpg">
		<img class="col-sm-1 radius" src="images/hoodie.jpg">	

		</div>
        <div class="col-sm-3 border-wh">Price:
			<br>123.23$<br><br>
			<a class="button-creator" href="">To cart</a>
		</div>

    </div>
</div>

</main>
	<?php

		require_once('footer.php');

	?>

</body>