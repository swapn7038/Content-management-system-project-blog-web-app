<?php  
 include 'partials/header.php';
?>

    <section class="form__section">
      <div class="container form__section-container">
        <h2>Add post</h2>
        <div class="alert__message error">
          <p>This is an error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
          <input type="text" placeholder="Title" />
          <select>
            <option value="1">Travel</option>
            <option value="1">Travel</option>
            <option value="1">Travel</option>
            <option value="1">Travel</option>
            <option value="1">Travel</option>
            <option value="1">Travel</option>
          </select>

          <textarea
            cols="30"
            rows="4"
            placeholder="Description....."
          ></textarea>
          <div class="form__control inline">
            <input type="checkbox" name="" id="is_featured" />
            <label for="is_featured" checked>Featured</label>
          </div>

          <div class="form__control">
            <label for="thumbnail">Add Thumbnail</label>
            <input type="file" id="thumbnail" />
          </div>
          <button class="btn">Add Post</button>
        </form>
        <div class="form__control">
          <label for="avatar">
            <input type="file" id="avatar" />
          </label>
        </div>
        <!-- <button class="btn" type="submit">Sign In</button> -->
        <!-- <small>
          Don't have an account? <a href="signin.php">Sign In</a>
        </small> -->
      </div>
    </section>
  </body>
</html>


<?php  
 include '../partials/footer.php';
?>