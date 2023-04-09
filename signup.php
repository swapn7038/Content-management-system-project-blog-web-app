<?php

session_start();
require 'config/constants.php';

// get back form data if there was a registration error
$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
// $ = $_SESSION['signup-data'][''];

// delete signup data session
unset($_SESSION['signup-data']);

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
        <h2>Sign Up</h2>
       <?php if(isset($_SESSION['signup'])) : ?>
         <div class="alert__message error">
            <p>
              <?= 
              $_SESSION['signup'] ;
              unset($_SESSION['signup']);
              ?>
            </p>
            
         </div>
       <?php  endif  ?>

        ?>
        <form action="signup-logic.php" enctype="multipart/form-data" method="post">
          <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="first name" />
          <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="last name" />
          <input type="text" name="username" value="<?= $username ?>" placeholder="username" />
          <input type="email" name="email"  value="<?= $email ?>"placeholder="email" />
          <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Create Password" />
          <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm Password" />

          <div class="form__control">
            <label for="avatar">
              <input type="file" name="avatar" id="avatar" />
            </label>
          </div>

          <button class="btn" name="submit" type="submit">Submit</button>
          <small
            >Already have an account? <a href="signin.php">Sign In</a>
          </small>
        </form>
      </div>
    </section>
  </body>
</html>

<?php

// After adding ROOT_URL I am not able to see any thing.
// The whole page goes blank.
// When we add post method we don't see very-long URL

// we had enctype="multipart/form-data" attribute because we are going to upload files



// 2:40:00
?>


