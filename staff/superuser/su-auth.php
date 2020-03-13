<?php

session_start();
include ('../php/config.php');

    // Session check
    if(!isset($_SESSION["username"])){
        print('no_session');
        header("Location: staff-login.php");
    } else {
        $username = $_SESSION['username'];

        if($username != 'nara') {
            print('access_denied_not_superuser');
            header("Location: ../dashboard.php");
        }
    }



?>