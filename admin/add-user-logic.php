<?php

require 'config/database.php';

if(isset($_POST['submit'])){
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];
    $is_admin = filter_var($_POST["userrole"], FILTER_SANITIZE_NUMBER_INT);

    // validate input
    if(!$firstname){
        $_SESSION['add-user'] = "Please enter your first name";
    } elseif(!$lastname){
        $_SESSION['add-user'] = "Please enter your Last name";

    } elseif(!$username){
        $_SESSION['add-user'] = "Please enter your User name";

    }  elseif(!$email){
        $_SESSION['add-user'] = "Please enter Valid Email";
    }
        elseif(!$is_admin){
            $_SESSION['add-user'] = "Please select user role";
        }
    elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8){
        $_SESSION['add-user'] = "Password should be 8+ characters";

    } elseif(!$avatar['name']){
        $_SESSION['add-user'] = "Please Select an Avatar";

    }  else {
        if($createpassword !== $confirmpassword) {
            $_SESSION['add-user'] = "Passwords do not match!";

        } else  {
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
            $user_check_query = "SELECT * from users WHERE username = '$username' OR email = '$email' ";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0) {
            $_SESSION['add-user'] = "Username or Email already exists";
            } else {
                $time = time();
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/' . $avatar_name;

                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extension = explode('.' , $avatar_name);
                $extension = end($extension);

                if(in_array($extension, $allowed_files)) {
                    if($avatar['size'] < 1000000) {
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    } else {
                        $_SESSION['add-user'] = 'File size is too big. Should be less than 1MB';
                    } 
                } else {
                    $_SESSION['add-user'] = "File should be png, jpg, jpeg";
                }
            }
        }
    } 

    if(isset($_SESSION['add-user'])) {
        $_SESSION['add-user-data'] = $_POST; 
        header('location:add-user.php');
        die();
    } else {
        $insert_user_query = "INSERT INTO users SET firstname = '$firstname', lastname = '$lastname', username = '$username', email = '$email', password = '$hashed_password', avatar = '$avatar_name', is_admin = 0 ";

        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if(!mysqli_errno($connection)) {
            $_SESSION['add-user-success'] = "Registration successful. Please log in";
            header('Location:manage-users.php');
            die();
        }
    }
} else {
    header('Location:admin/add-user.php');
    die();
}

?>