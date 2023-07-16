<?php

// require 'config/constants.php';
include 'constants.php';

// connectiong to db
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (mysqli_error($connection)){
    die(mysqli_error($connection));
}