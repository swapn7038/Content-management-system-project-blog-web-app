<?php  
 include 'partials/header.php';
?>


    <section class="form__section">
      <div class="container form__section-container">
        <h2>Edit Post</h2>
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
            <input type="checkbox" id="is_featured" />
            <label for="is_featured">Featured</label>
          </div>

          <div class="form__control">
            <label for="thumbnail">Change Thumbnail</label>
            <input type="file" id="thumbnail" />
          </div>
          <button class="btn" type="submit">Update Post</button>
        </form>
      </div>
    </section>
  </body>
</html>


<?php  
 include '../partials/footer.php';
?>