<?php 

        require_once('header-user.php');
	?>
<main>
<div class="container mt-24">
    <div class="row">
        <div class="col-sm-4">
            <?php
            if(!isset($users)){ ?>
                <div class='text-center'><h2><a href="seeUser?user=<?php echo $_GET['user']?>">Odśwież stronę</a></h2>
                <?php if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                echo "</div>";
            }else{
            foreach ($users as $user): ?>
        Postal Code: <?= $user->getPostalcode(); ?><br><br>
        Town: <?= $user->getTown(); ?><br><br>
        Street: <?= $user->getStreet(); ?><br><br>
        House Number: <?= $user->getHouseNumber(); ?> <br><br>
        Flat Number: <?= $user->getFlatNumber(); ?> <br><br>
        E-mail: <?= $user->getEmail(); ?>
            <?php endforeach; } ?>
        </div>

        <div class="col-sm-4">
            <form action="settingsuser?user=<?php echo $_GET['user']?>" method="POST">

                <?php
                if(!isset($users)){

                }else
                 foreach ($users as $user): ?>
                <label for="postalcode"><b>Postal Code:</b></label><br>
                <label>
                    <input type="text" class="input-gold col-sm-10" value="<?= $user->getPostalcode(); ?>" placeholder="Enter postal code..." name="postalcode">
                </label><br><br>

                <label for="town"><b>Town:</b></label><br>
                <label>
                    <input type="text" class="input-gold col-sm-10" value="<?= $user->getTown(); ?>" placeholder="Enter town..." name="town">
                </label><br><br>
                
                <label for="street"><b>Street:</b></label><br>
                <label>
                    <input type="text" class="input-gold col-sm-10" value="<?= $user->getStreet(); ?>" placeholder="Enter street..." name="street">
                </label><br><br>

                <label for="housenumber"><b>House Number:</b></label><br>
                <label>
                    <input type="text" class="input-gold col-sm-10" value="<?= $user->getHouseNumber(); ?>" placeholder="Enter house number..." name="housenumber">
                </label><br><br>

                <label for="flatnumber"><b>Flat Number:</b></label><br>
                <label>
                    <input type="text" class="input-gold col-sm-10" value="<?= $user->getFlatNumber(); ?>" placeholder="Enter flat number..." name="flatnumber">
                </label><br><br>

        </div>
        <div class="col-sm-4">
                <label for="email"><b>New E-mail:</b></label><br>
            <label>
                <input type="text"  value = "<?= $user->getEmail(); ?>" class="input-gold col-sm-10" placeholder="Enter new e-mail..." name="email">
            </label><br><br>

                <label for="oldpassword"><b>Old Password:</b></label><br>
            <label>
                <input type="text" class="input-gold col-sm-10" placeholder="Enter old password..." name="oldpassword">
            </label><br><br>
                
                <label for="newpassword"><b>New Password:</b></label><br>
            <label>
                <input type="text" class="input-gold col-sm-10" placeholder="Enter new password..." name="newpassword">
            </label><br><br>

                <label for="repeatpassword"><b>Repeat Password:</b></label><br>
            <label>
                <input type="text" class="input-gold col-sm-10" placeholder="Repeat password..." name="repeatpassword">
            </label><br><br>

            <?php endforeach; ?>
        </div>
        <div class="col-sm-12 txt-algin-right mt-24">
            <hr class="gold">
            <button class="myButtonCart">Change</button>
        </div>
    </div>
</div>

</main>
	<?php

		require_once('footer.php');

	?>

