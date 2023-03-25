<?php  
 include 'partials/header.php';
?>


    <section class="form__section">
      <div class="container form__section-container">
        <h2>Edit User</h2>
        <form action="" enctype="multipart/form-data">
          <input type="text" placeholder="first name" />
          <input type="text" placeholder="last name" />
          <select>
            <option value="0">Author</option>
            <option value="1">Admin</option>
          </select>
          <button class="btn" type="submit">Update User</button>
        </form>

        <!-- <button class="btn" type="submit">Sign In</button> -->
      </div>
    </section>
  </body>
</html>



<?php  
 include '../partials/footer.php';
?>
