<?php  
 include 'partials/header.php';
?>

    <section class="form__section">
      <div class="container form__section-container">
        <h2>Add User</h2>
        <div class="alert__message error">
          <p>This is an error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
          <input type="text" placeholder="first name" />
          <input type="text" placeholder="last name" />
          <input type="text" placeholder="username" />
          <input type="email" placeholder="email" />
          <input type="password" placeholder="Password" />
          <input type="password" placeholder="Confirm Password" />

          <select>
            <option value="0">Author</option>
            <option value="1">Admin</option>
          </select>

          <div class="form__control">
            <label for="avatar">
              <input type="file" id="avatar" />
            </label>
          </div>

          <button class="btn" type="submit">Add User</button>
        </form>

        <!-- <button class="btn" type="submit">Sign In</button> -->
      </div>
    </section>
  </body>
</html>


<?php  
 include '../partials/footer.php';
?>