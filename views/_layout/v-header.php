<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./public/theme/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./public/theme/css/index-page.css" />
    <link rel="stylesheet" href="./public/theme/css/about-us.css" />
    <link rel="stylesheet" href="./public/theme/css/contact-us.css" />
    <link rel="stylesheet" href="./public/theme/css/shop.css" />
    <link rel="stylesheet" href="./public/theme/css/single-product.css" />
    <link rel="stylesheet" href="./public/theme/css/checkout-page.css" />
    <link rel="stylesheet" href="./public/theme/css/shopping-cart.css" />
    <link rel="stylesheet" href="./public/theme/css/register.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container-fluid position-relative">
          <a class="navbar-brand" href="index-page-controler.php"><img src="./public/theme/img/watch-outline.svg" alt="" width="50px" height="45px">Best Watches</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link <?php if($page == 'index') {
                                echo htmlspecialchars('active');
                                } ?>
                                " aria-current="page" href="index-page-controler.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($page == 'shop') {
                                echo htmlspecialchars('active');
                                } ?>" href="shop-controler.php">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($page == 'about') {
                                echo htmlspecialchars('active');
                                } ?>" href="about-us-controler.php">About</a>
              </li>
              <li class="nav-item hot">
              <a class="nav-link <?php if($page == 'latest') {
                                echo htmlspecialchars('active');
                                } ?>" href="latest-controler.php">Latest</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link <?php if($page == 'contact') {
                                echo htmlspecialchars('active');
                                } ?>" href="contact-us-controler.php">Contact Us</a>
              </li>
            </ul>
          </div>

          <div class="header-right">
            <ul>
              <li class="search <?php if($page !== 'shop') echo htmlspecialchars('hidden')?>">
                <img src="./public/theme/img/search-outline.svg" alt="" />
              </li>
              <li class="login">
                <a class="dropbtn" href="./register-controler.php"><?php if($loggedIn) echo $_SESSION['email']?>
              </a>
              <?php if(!$loggedIn) : ?>
                <a href="./register-controler.php">Log in</a>
              <?php else : ?>
                <a href="./logout-controler.php">Log out</a>
              <?php endif;?>
              <a href="#" class=""><img src="./public/theme/img/person-outline.svg" alt="" /></a>
              </li>
              <li class="cart position-relative">
                <a href="./shopping-cart-page-controler.php">
                  <img src="./public/theme/img/shopping-cart.svg" alt="" />
                </a>
                <span
                  class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-warning"
                >
                  <?php 
                  if(!empty($_SESSION['cart'])) {
                      echo count($_SESSION['cart']);
                      } else {
                        echo 0;
                      }
                  ?>
                </span>
              </li>
            </ul>
        </div>
      </nav>
    </header>