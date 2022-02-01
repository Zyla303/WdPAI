<?php 

        require_once('header.php');

	?>
<main>

<div class="container mt-24">
    <div class="row">
        <div class="col-sm-6">
        <img class="col-sm-12 radius" src="../public/images/sale-boots.png">
      		</div>
        <div class="col-sm-6">
            <h2>Login</h2>
            <hr> 
                <form action="login" method="POST">
                <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                    ?>
                    <div class="container">
                        <label for="login"><b>Login:</b></label><br>
                        <input type="text" placeholder="Enter Username" name="email" required><br><br>

                        <label for="password"><b>Password:</b></label><br>
                        <input type="password" placeholder="Enter Password" name="password" required><br><br>

                        <button class="myButtonOne">Login</button>
                        <a class="myButtonOne" href="register">Register</a><br><br>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                </form>
		</div>
    </div>
</div>

<div class="container-fluid mt-24 banner-sale">
    <div class="col-sm-12">
      <div class="container">
      <div class="row vertical-center-2">
        <div class="col-sm-10">
          <h2> Sneakers Never Run Out Of Style <br> Get 50% Off Sitewide </h2>
        </div>
        <div class="col-sm-2"><a class="button-footer" href="?page=shop">Start Shopping</a></div>
      </div>
    </div>
</div>

</main>
	<?php

		require_once('footer.php');

	?>

</body>