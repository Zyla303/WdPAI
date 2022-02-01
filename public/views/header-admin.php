<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="Szymon Zylski">
    <title>One Piece</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/styles/main.css">
    <link rel="shortcut icon" href="public/images/icon.ico" type="image/x-icon">  
  </head>
<body>
<?php  session_start(); ?>
<header>
<div class="container-fluid">
      <div class="row">
          <div class="col-sm-2"><a href="../"><img class="col-sm-12 logo-mobile" src="public/images/logo1.png"></a></div>
          <div class="col-sm-2"></div>
          <div class="col-sm-4"><form>
            <input class="col-sm-10 mt-18 none" type="search" placeholder="Search for products">
          </form></div>
          <div class="col-sm-3"></div>
          <div class="col-sm-1 mt-18 mr-24">
            <a class="login-button none" href=login">
              <svg xmlns="http://www.w3.org/2000/svg" width="18.556" height="18.658" viewBox="0 0 18.556 18.658">
                <g id="_674aaa8a5939fb3fb007e77121fb1581" data-name="674aaa8a5939fb3fb007e77121fb1581" transform="translate(-9.995 -7.3)">
                  <path id="Path_2" data-name="Path 2" d="M688.437,572.377a9.4,9.4,0,0,0-4.393-6.917.933.933,0,1,0-.977,1.59,7.516,7.516,0,0,1,3.516,5.531.934.934,0,0,0,.926.831.959.959,0,0,0,.1-.006A.932.932,0,0,0,688.437,572.377Z" transform="translate(-659.891 -547.457)" fill="#fff"/>
                  <path id="Path_3" data-name="Path 3" d="M24.87,12.9a5.6,5.6,0,1,0-10.882,1.846.932.932,0,1,0,1.761-.613,3.733,3.733,0,1,1,3.524,2.5A9.312,9.312,0,0,0,10,24.922a.934.934,0,0,0,.826,1.03.96.96,0,0,0,.1.006.932.932,0,0,0,.926-.831,7.447,7.447,0,0,1,7.417-6.633A5.6,5.6,0,0,0,24.87,12.9Z" transform="translate(0)" fill="#fff"/>
                </g>
              </svg>
            </a>
            <span class="red">Hello, Admin!</span><br>
            
            <i class="fas fa-bars icon" onclick="myFunction()"></i>
          </div>
      </div>
  </div>
</header>
<nav class="sticky pt-16 mobile">
<div class="container-fluid">
    <div class="row" id="navig-mobile">
         <div class="col-sm-2"></div>
          <div class="col-sm-1"></div>
          <div class="col-sm-1 navig"><a href="getCategoryAdmin">Clothes</a></div>
          <div class="col-sm-1 navig"><a href="getCategory">Category</a></div>
          <div class="col-sm-1 navig"><a href="underconstruction">Creator</a></div> <!--addtocreatoradmin-->
          <div class="col-sm-1 navig"><a href="waitorderadmin">Waiting orders</a></div>
          <div class="col-sm-1 navig"><a href="sendOrderAdmin">Send orders</a></div>
          <div class="col-sm-1 navig"><a href="allOrderAdmin">All orders</a></div>
          <div class="col-sm-1 navig">Back to <a href="logout">home</a></div>
          <div class="col-sm-2"></div>
     </div>
</div>
</nav>
<script>
function myFunction() {
  var x = document.getElementById("navig-mobile");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>