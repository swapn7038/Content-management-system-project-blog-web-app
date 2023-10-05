<?php

require 'config/constants.php';
// destroy all session and receive user to home page

session_destroy();
header('location' . ' index.php');
die();


    echo "Session destroyed";


?>