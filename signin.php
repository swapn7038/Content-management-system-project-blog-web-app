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
        <div class="alert__message success">
          <p>This is an error message</p>
        </div>
        <form action="">
          <input type="text" placeholder="first username or email" />
          <input type="password" placeholder="Password" />
          <div class="form__control">
            <label for="avatar">
              <input type="file" id="avatar" />
            </label>
          </div>
          <button class="btn" type="submit">Sign In</button>
          <small>
            Don't have an account? <a href="signin.html">Sign In</a>
          </small>
        </form>
      </div>
    </section>
  </body>
</html>
