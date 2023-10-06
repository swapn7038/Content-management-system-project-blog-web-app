<?php  
 include 'partials/header.php';

// get back form data if there was a registration error
$firstname = $_SESSION['add-user-data']['firstname'] ?? null;
$lastname = $_SESSION['add-user-data']['lastname'] ?? null;
$username = $_SESSION['add-user-data']['username'] ?? null;
$email = $_SESSION['add-user-data']['email'] ?? null;
$createpassword = $_SESSION['add-user-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['add-user-data']['confirmpassword'] ?? null;
$userrole = $_SESSION['add-user-data']['userrole'] ?? null;

// delete session data
unset($_SESSION['add-user-data']);

?>

    <section class="form__section">
      <div class="container form__section-container">
        <h2>Add User</h2>
        <?php if(isset($_SESSION['add-user'])): ?>

          <div class="alert__message error">
          <p><?= $_SESSION['add-user'];
                  unset($_SESSION['add-user'])
          ?></p>
        </div>

          <?php endif ?>
        <form action="add-user-logic.php" method="post" enctype="multipart/form-data">
          <input type="text" name="firstname" <?php $firstname ?> placeholder="first name" />
          <input type="text" name="lastname" <?php $lastname ?>  placeholder="last name" />
          <input type="text" name="username" <?php $username?>  placeholder="username" />
          <input type="email" name="email" <?php $email ?>  placeholder="email" />
          <input type="password" name="createpassword" <?php $createpassword ?>  placeholder="Password" />
          <input type="password" name="confirmpassword"  <?php $confirmpassword ?> placeholder="Confirm Password" />

          <select name="userrole">
            <option value="0">Author</option>
            <option value="1">Admin</option>
          </select>

          <div class="form__control">
            <label for="avatar">
              <input type="file" name="avatar" id="avatar" />
            </label>
          </div>

          <button class="btn" name="submit" type="submit">Add User</button>
        </form>
      </div>
    </section>
  </body>
</html>


<?php  
//  include '../partials/footer.php';
?>