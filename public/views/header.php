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
<?php  session_start();
?>
<header>
<div class="container-fluid">
      <div class="row">
          <div class="col-sm-2"><a href="../"><img class="col-sm-12 logo-mobile" src="public/images/logo1.png"></a></div>
          <div class="col-sm-2"></div>
          <div class="col-sm-4">
              <form action="showItemsBar" method="POST">
            <input class="col-sm-10 mt-18 none" type="search" name="search" placeholder="Search for products">
          </form>

          </div>
          <div class="col-sm-3"></div>
          <div class="col-sm-1 mt-18 mr-24">
<!-- logowanie -->
              <?php if(!$_SESSION['user']){?>
            <a class="login-button none" href="login">
              <svg xmlns="http://www.w3.org/2000/svg" width="18.556" height="18.658" viewBox="0 0 18.556 18.658">
                <g id="_674aaa8a5939fb3fb007e77121fb1581" data-name="674aaa8a5939fb3fb007e77121fb1581" transform="translate(-9.995 -7.3)">
                  <path id="Path_2" data-name="Path 2" d="M688.437,572.377a9.4,9.4,0,0,0-4.393-6.917.933.933,0,1,0-.977,1.59,7.516,7.516,0,0,1,3.516,5.531.934.934,0,0,0,.926.831.959.959,0,0,0,.1-.006A.932.932,0,0,0,688.437,572.377Z" transform="translate(-659.891 -547.457)" fill="#fff"/>
                  <path id="Path_3" data-name="Path 3" d="M24.87,12.9a5.6,5.6,0,1,0-10.882,1.846.932.932,0,1,0,1.761-.613,3.733,3.733,0,1,1,3.524,2.5A9.312,9.312,0,0,0,10,24.922a.934.934,0,0,0,.826,1.03.96.96,0,0,0,.1.006.932.932,0,0,0,.926-.831,7.447,7.447,0,0,1,7.417-6.633A5.6,5.6,0,0,0,24.87,12.9Z" transform="translate(0)" fill="#fff"/>
                </g>
              </svg>
            </a>
<!-- user -->
              <?php }else{

                  if($_SESSION['user'] >= 2){ ?>

                  <a class="login-button none" href="showWaitOrdersUser?userid=<?php echo $_SESSION['user']?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.556" height="18.658" viewBox="0 0 18.556 18.658">
                    <g id="_674aaa8a5939fb3fb007e77121fb1581" data-name="674aaa8a5939fb3fb007e77121fb1581" transform="translate(-9.995 -7.3)">
                  <path id="Path_2" data-name="Path 2" d="M688.437,572.377a9.4,9.4,0,0,0-4.393-6.917.933.933,0,1,0-.977,1.59,7.516,7.516,0,0,1,3.516,5.531.934.934,0,0,0,.926.831.959.959,0,0,0,.1-.006A.932.932,0,0,0,688.437,572.377Z" transform="translate(-659.891 -547.457)" fill="#fff"/>
                  <path id="Path_3" data-name="Path 3" d="M24.87,12.9a5.6,5.6,0,1,0-10.882,1.846.932.932,0,1,0,1.761-.613,3.733,3.733,0,1,1,3.524,2.5A9.312,9.312,0,0,0,10,24.922a.934.934,0,0,0,.826,1.03.96.96,0,0,0,.1.006.932.932,0,0,0,.926-.831,7.447,7.447,0,0,1,7.417-6.633A5.6,5.6,0,0,0,24.87,12.9Z" transform="translate(0)" fill="#fff"/>
                </g>
              </svg>
            </a>
<!-- admin -->
              <? }else{ ?>

                      <a class="login-button none" href="additems">
                          <svg xmlns="http://www.w3.org/2000/svg" width="18.556" height="18.658" viewBox="0 0 18.556 18.658">
                              <g id="_674aaa8a5939fb3fb007e77121fb1581" data-name="674aaa8a5939fb3fb007e77121fb1581" transform="translate(-9.995 -7.3)">
                                  <path id="Path_2" data-name="Path 2" d="M688.437,572.377a9.4,9.4,0,0,0-4.393-6.917.933.933,0,1,0-.977,1.59,7.516,7.516,0,0,1,3.516,5.531.934.934,0,0,0,.926.831.959.959,0,0,0,.1-.006A.932.932,0,0,0,688.437,572.377Z" transform="translate(-659.891 -547.457)" fill="#fff"/>
                                  <path id="Path_3" data-name="Path 3" d="M24.87,12.9a5.6,5.6,0,1,0-10.882,1.846.932.932,0,1,0,1.761-.613,3.733,3.733,0,1,1,3.524,2.5A9.312,9.312,0,0,0,10,24.922a.934.934,0,0,0,.826,1.03.96.96,0,0,0,.1.006.932.932,0,0,0,.926-.831,7.447,7.447,0,0,1,7.417-6.633A5.6,5.6,0,0,0,24.87,12.9Z" transform="translate(0)" fill="#fff"/>
                              </g>
                          </svg>
                      </a>
<!-- koszyk -->
              <?php } } if($_SESSION['user'] >= 2){ ?>

            <a class="none" href="showCart?userid=<?php echo $_SESSION['user']; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="20.968" height="21.347" viewBox="0 0 20.968 21.347">
                <g id="bdcb0c3f6d67999723518ef3c2ad5494" transform="translate(-10 -1.2)">
                  <path id="Path_4" data-name="Path 4" d="M30.829,6.1a.808.808,0,0,0-.67-.355h0l-15.946.036L12.884,1.756a.81.81,0,0,0-.77-.556H10.809a.81.81,0,1,0,0,1.62h.719l1.32,4.007.013.036L14.885,13,12.369,17.69a.81.81,0,0,0,.715,1.192H27.324a.809.809,0,1,0,0-1.618H14.435l1.81-3.374h11.3a.806.806,0,0,0,.751-.509l2.61-6.524A.815.815,0,0,0,30.829,6.1ZM27,12.268H16.344l-1.6-4.87,14.218-.032Z" fill="#fff"/>
                  <path id="Path_5" data-name="Path 5" d="M198.48,897.9a1.081,1.081,0,1,0,1.08,1.081A1.08,1.08,0,0,0,198.48,897.9Z" transform="translate(-183.39 -877.514)" fill="#fff"/>
                  <path id="Path_6" data-name="Path 6" d="M659.081,897.9a1.081,1.081,0,1,0,1.081,1.081A1.08,1.08,0,0,0,659.081,897.9Z" transform="translate(-634.136 -877.514)" fill="#fff"/>
                </g>
              </svg>
            </a>
            <?php } ?>




            <img src="public/images/burger.png" class="icon" onclick="mobilenav()">
          </div>
      </div>
  </div>
</header>
<nav class="sticky pt-16 mobile">
<div class="container-fluid">
    <div class="row" id="navig-mobile">
        <div class="col-sm-2">

            <form>
                <select  name="category" id="category" class="col-sm-9" onchange="location = this.value;">
                    <option disabled>Category</option>
              <?php foreach ($categories as $category): ?>
                    <option value="shop?category=<?= $category->getCategoryId(); ?>"> <?= $category->getCategoryName(); ?></option>
              <?php endforeach; ?>

                </select>
            </form>

            <script type="text/javascript">
                function handleSelect(elm)
                {
                    window.location = elm.value;
                }
            </script>

        </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-1 navig"><a href="../">Home</a></div>
          <div class="col-sm-1 navig"><a href="underconstruction">Create clothes</a></div> <!--creator-->
          <div class="col-sm-1 navig"><a href="shop?category=1">Shop</a></div>
          <div class="col-sm-1 navig"><a href="wholesale">Wholesale</a></div>
          <div class="col-sm-1 navig"><a href="discounts">Discounts</a></div>
          <div class="col-sm-1 navig"><a href="faq">FAQ</a></div>
          <div class="col-sm-1 navig"><a href="contact">Contact</a></div>
          <div class="col-sm-2"></div>
     </div>
</div>
</nav>
<script>
function mobilenav() {
  var x = document.getElementById("navig-mobile");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>