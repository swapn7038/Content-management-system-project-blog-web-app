<?php  
 include 'partials/header.php';
?>


    <div class="dashboard">
      <div class="container dashboard__container">
        <button id="show__sidebar-btn" class="sidebar__toggle">
          <i class="uil uil-angle-right-b">Show</i>
        </button>
        <button id="hide__sidebar-btn" class="sidebar__toggle">
          <i class="uil uil-angle-right-b">Hide</i>
        </button>
        <aside>
          <ul>
            <!-- 1 -->
            <li>
              <a href="add-post.php">
                <i>I</i>
                <h5>Add Post</h5>
              </a>
            </li>
            <!-- 2 -->
            <li>
              <a href="index.php">
                <i>I</i>
                <h5>Manage Post</h5>
              </a>
            </li>

            <?php if(isset($_SESSION['user_is_admin'])): ?>
            <!-- 3 -->
            <li>
              <a href="add-user.php">
                <i>I</i>
                <h5>Add User</h5>
              </a>
            </li>
            <!-- 4 -->
            <li>
              <a href="manage-users.php">
                <i>I</i>
                <h5>Manage Users</h5>
              </a>
            </li>
            <!-- 5 -->
            <li>
              <a href="add-category.php">
                <i>I</i>
                <h5>Add Category</h5>
              </a>
            </li>
            <!-- 6 -->
            <li>
              <a href="manage-categories.php" class="active">
                <i>I</i>
                <h5>Manage Category</h5>
              </a>
            </li>

            <?php endif ?>
          </ul>
        </aside>

        <main>
          <h2>Manage Categories</h2>
          <table>
            <thead>
              <tr>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Travel</td>
                <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.php" class="btn sm danger"
                    >Delete</a
                  >
                </td>
              </tr>
              <tr>
                <td>Wild Life</td>
                <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.php" class="btn sm danger"
                    >Delete</a
                  >
                </td>
              </tr>
              <tr>
                <td>Art</td>
                <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.php" class="btn sm danger"
                    >Delete</a
                  >
                </td>
              </tr>
              <tr>
                <td>Games</td>
                <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.php" class="btn sm danger"
                    >Delete</a
                  >
                </td>
              </tr>
            </tbody>
          </table>
        </main>
      </div>
    </div>


<?php  
 include '../partials/footer.php';
?>

</body>
</html>


