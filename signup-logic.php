<?php

require 'config/database.php';
// we require database files here
// get signup form data after clicking on the submit/signup button
// using post method

if(isset($_POST['submit'])){
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

    // validate input
    if(!$firstname){
        // if $firstname is false then we are going to create session
        $_SESSION['signup'] = "Please enter your first name";
        // we are passing this in a session, bcoz we need to access it in signup.php page
        // the message please enter blah blah is need to be shown in signup.php page
    } elseif(!$lastname){
        $_SESSION['signup'] = "Please enter your Last name";

    } elseif(!$username){
        $_SESSION['signup'] = "Please enter your User name";

    }  elseif(!$email){
        $_SESSION['signup'] = "Please enter Valid Email";

    } elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8){
        $_SESSION['signup'] = "Password should be 8+ characters";

    } elseif(!$avatar['name']){
        $_SESSION['signup'] = "Please Select an Avatar";

    }  else {
        // check if password match or not
        if($createpassword !== $confirmpassword) {
            $_SESSION['signup'] = "Passwords do not match!";

        } else  {
            // if passwords match then hash them // hash password
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
            // echo $createpassword . "<br>";
            // echo $hashed_password;
            // we printed them to test, is hashed password working or not

            // check if username or email already exist in database 
            $user_check_query = "SELECT * from users WHERE username = '$username' OR email = '$email' ";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['signup'] = "Username or Email already exists";
            } else {
                // work on avatar
                // rename avatar
                $time = time(); // make each image name unique using current timestamp
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/' . $avatar_name;

                // make sure file is an image
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extension = explode('.' , $avatar_name);
                $extension = end($extension);

                if(in_array($extension, $allowed_files)) {
                    // make sure image is not to large (1MB+)
                    if($avatar['size'] < 1000000) {
                        // upload avatar
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    } else {
                        $_SESSION['signup'] = 'File size is too big. Should be less than 1MB';
                    } 
                } else {
                    $_SESSION['signup'] = "File should be png, jpg, jpeg";
                }
            }
        }
    } 
    // echo($time);
    // var_dump($avatar);

    // redirect back to sign up page if there is any problem
    if(isset($_SESSION['signup'])) {
        // pass form data back to signup page
        $_SESSION['signup-data'] = $_POST;
        header('location:signup.php');
        die();
    } else {
        // insert new user into users table
        $insert_user_query = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) VALUES('$firstname', '$lastname', '$username', '$email', '$hashed_password', '$avatar_name', 0)";

        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if(!mysqli_errno($connection)) {
            // redirect to loginpage with success message
            $_SESSION['signup-success'] = "Registration successful. Please log in";
            header('Location:signin.php');
            die();
        }
    }
} else {
    // if button wasn't clicked then bounce back to signup page
    header('Location:signup.php'); // we need capital of L of Location
    die();
}

?>