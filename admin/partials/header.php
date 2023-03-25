<?php
require 'config/database.php';
// we require database.php here
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modern Blogging Web Application</title>

    <!-- ============== CSS Linked ==============  -->
    <link rel="stylesheet" href="../CSS/style.css"/>

    <!-- ============== ICONSSCOUT CDN ==============  -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
  </head>
  <body>
    <nav>
      <div class="container nav__container">
        <a href="<?= ROOT_URL ?> " class="nav__logo">Swapnil</a>
        <!-- this ROOT_URL will locate to the localhost -> index page directly -->
        <ul class="nav__items">
          <li><a href="<?=ROOT_URL?>blog.php">Blog</a></li>
          <li><a href="<?=ROOT_URL?>about.php">About</a></li>
          <li><a href="<?=ROOT_URL?>services.php">Services</a></li>
          <li><a href="<?=ROOT_URL?>contact.php">Contact</a></li>
          <!-- <li><a href=<?=ROOT_URL?>"signin.html">Sign In</a></li> -->
          <li class="nav__profile">
            <div class="avatar">
              <img
                src="data:image/jpeg;base64,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"
              />
            </div>
            <ul>
              <li><a href="<?=ROOT_URL?>admin/index.php">Dashboard</a></li>
              <li><a href="<?=ROOT_URL?>signout.php">Logout</a></li>
            </ul>
          </li>
        </ul>

        <button class="" id="open__nav-btn">
          <i class="uil uil-bars"></i>
        </button>
        <button class="" id="close__nav-btn">
          <i class="uil uil-multiply"></i>
        </button>
      </div>
    </nav>

    <!-- ================ End of Nav  ================ -->
