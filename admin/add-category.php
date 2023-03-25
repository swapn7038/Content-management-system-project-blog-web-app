<?php  
// include "./partials/header.php";
 include 'partials/header.php';
?>

    <section class="form__section">
      <div class="container form__section-container">
        <h2>Add Category</h2>
        <div class="alert__message error">
          <p>This is an error message</p>
        </div>
        <form action="">
          <input type="text" placeholder="Title" />
          <textarea
            cols="30"
            rows="4"
            placeholder="Description....."
          ></textarea>

          <button class="btn">Add category</button>

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


<?php  
 include '../partials/footer.php';
?>