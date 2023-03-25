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
            <!-- 3 -->
            <li>
              <a href="add-user.php">
                <i>I</i>
                <h5>Add User</h5>
              </a>
            </li>
            <!-- 4 -->
            <li>
              <a href="manage-users.php" class="active">
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
              <a href="manage-categories.php">
                <i>I</i>
                <h5>Manage Category</h5>
              </a>
            </li>
          </ul>
        </aside>

        <main>
          <h2>Manage Users</h2>
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Admin</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Ernest Achiever</td>
                <td>achiever</td>
                <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.php" class="btn sm danger"
                    >Delete</a
                  >
                </td>
                <td>Yes</td>
              </tr>
              <tr>
                <td>Daniel Vinyo</td>
                <td>Daniel</td>
                <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.php" class="btn sm danger"
                    >Delete</a
                  >
                </td>
                <td>Yes</td>
              </tr>
              <tr>
                <td>Jane Doe</td>
                <td>Jane</td>
                <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.php" class="btn sm danger"
                    >Delete</a
                  >
                </td>
                <td>Yes</td>
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
