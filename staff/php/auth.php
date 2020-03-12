<?php

session_start();
include ('config.php');

    // Session check
    if(!isset($_SESSION["username"])){
        print('no_session');
        header("Location: staff-login.php");
    } else {
        $username = $_SESSION['username'];
    }



?>