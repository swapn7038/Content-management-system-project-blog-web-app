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
        <div class="alert__message error">
          <p>This is an error message</p>
        </div>
        <form action="signup-logic.php" enctype="multipart/form-data" method="post">
          <input type="text" name="firstname" placeholder="first name" />
          <input type="text" name="lastname" placeholder="last name" />
          <input type="text" name="username" placeholder="username" />
          <input type="email" name="email" placeholder="email" />
          <input type="password" name="createpassword" placeholder="Create Password" />
          <input type="password" name="confirmpassword" placeholder="Confirm Password" />

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

?>