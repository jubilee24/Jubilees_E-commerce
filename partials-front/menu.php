<?php include('admin/constants.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jubilee's Ecommerce Website</title>

    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />

    <link rel="stylesheet" href="style.css" />
    <!-- <link rel="stylesheet" href="admin/admin.css" /> -->
  </head>

  <body>
    <section id="header">
      <a href="#"><img src="img/logo.png" class="logo" alt="Logo here" /> </a>

      <div>
        <ul id="navbar">
          <li><a class="active" href="<?php echo SITEURL; ?>">Home</a></li>
          <li><a href="<?php echo SITEURL; ?>shop.php">Shop</a></li>
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <li><a href="<?php echo SITEURL; ?>about.php">About</a></li>
          <li><a href="<?php echo SITEURL; ?>contact.php">Contact</a></li>
          <li id="lg-bag">
            <a href="<?php echo SITEURL; ?>cart.php"><i class="far fa-shopping-bag"></i></a>
          </li>
          <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
      </div>

      <div id="mobile">
        <a href="<?php echo SITEURL; ?>cart.php"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>

      <!-- <div class="container1" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div> -->


</section>