<?php 

        require_once('header.php');

	?>
<script type="text/javascript" src="./public/js/script.js"></script>
<main>

<div class="container mt-24">
    <div class="row">
        <div class="col-sm-4">
            <form class="register" action="register" method="POST">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
                <label for="name"><b>First Name:</b></label><br>
            <input type="text" class="input-gold col-sm-10" placeholder="Enter first name..." name="name"><br><br>

            <label for="surname"><b>Surname Name:</b></label><br>
            <input type="text" class="input-gold col-sm-10" placeholder="Enter surname name..." name="surname"><br><br>
        </div>
        <div class="col-sm-4">
                <label for="postalcode"><b>Postal Code:</b></label><br>
                <input type="text" class="input-gold col-sm-10" placeholder="Enter postal code..." name="postalcode"><br><br>

                <label for="town"><b>Town:</b></label><br>
                <input type="text" class="input-gold col-sm-10" placeholder="Enter town..." name="town"><br><br>
                
                <label for="street"><b>Street:</b></label><br>
                <input type="text" class="input-gold col-sm-10" placeholder="Enter street..." name="street"><br><br>

                <label for="housenumber"><b>House Number:</b></label><br>
                <input type="text" class="input-gold col-sm-10" placeholder="Enter house number..." name="housenumber"><br><br>

                <label for="flatnumber"><b>Flat Number:</b></label><br>
                <input type="text" class="input-gold col-sm-10" placeholder="Enter flat number..." name="flatnumber"><br><br>

        </div>
        <div class="col-sm-4">
                <label for="email"><b>E-mail:</b></label><br>
                <input type="text" class="input-gold col-sm-10" placeholder="Enter new e-mail..." name="email"><br><br>
          
                <label for="password"><b>Password:</b></label><br>
                <input type="text" class="input-gold col-sm-10" placeholder="Enter password..." name="password"><br><br>

                <label for="repeatpassword"><b>Repeat Password:</b></label><br>
                <input type="text" class="input-gold col-sm-10" placeholder="Repeat password..." name="repeatpassword"><br><br>


        </div>
        <div class="col-sm-12 txt-algin-right mt-24">
            <hr class="gold">
            <button class="myButtonCart" type="submit">Create</button>
            </form>
        </div>
    </div>
</div>

</main>
	<?php

		require_once('footer.php');

	?>

</body>