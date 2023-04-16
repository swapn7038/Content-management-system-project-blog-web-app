<?php
require 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modern Blogging Web App</title>

    <!-- ============== CSS Linked ==============  -->
    <link rel="stylesheet" href="./CSS/style.css" />

    <!-- ============== ICONSSCOUT CDN ==============  -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
  </head>
  <body>
    <section class="form__section">
      <div class="container form__section-container">
        <h2>Sign In</h2>

        <!-- success -->
        <?php if(isset($_SESSION['signup-success'])) : ?>
 
          <div class="alert__message success">
            <p>
              <?=   $_SESSION['signup-success'];
                    unset($_SESSION['signup-success']);
              ?>
            </p>
          </div>


          <!-- failure -->
          <?php elseif(isset($_SESSION['signin'])) : ?>
          <div class="alert__message error">
            <p>
              <?=   $_SESSION['signup'];
                    unset($_SESSION['signup']);
              ?>
            </p>
          </div>

          <?php endif ?>


        <form action="signin-login.php"  method="post">
          <input type="text" name="username_email" value="<?= $username_email ?>" placeholder="first username or email" />
          <input type="password" name="password" value="<?= $password ?>" placeholder="Password" />
          <button class="btn" name="submit" type="submit">Sign In</button>
          <small>
            Don't have an account? <a href="signup.php">Sign Up</a>
          </small>
        </form>
      </div>
    </section>
  </body>
</html>
