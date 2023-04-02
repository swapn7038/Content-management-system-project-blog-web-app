<?php
require 'config/database.php';

// get signup form data after clicking on the submit button.

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
        $_SESSION['signup'] = "Please enter your first name";
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
            // hash password
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
            echo $createpassword . "<br>";
            echo $hashed_password;
        }
    }
} else {
    // if button wasn't clicked then bounce back to signup page
    header('location:signup.php');
    die();
}

?>