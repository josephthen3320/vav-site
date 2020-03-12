<?php

require ('config.php');

    // Session check
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: staff-login.php");
        exit();
    }

?>