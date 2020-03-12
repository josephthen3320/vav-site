<?php

    session_start();
    // Destroying All Sessions
    if(session_destroy()) {
        unset($_SESSION['username']);
        header("Location: ../staff-login.php");
    }
?>