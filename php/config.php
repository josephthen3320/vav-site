<?php

    $db_host        =   "localhost";
    $db_username    =   "nara";
    $db_password    =   "tr1mul1aH!TS";
    $db_name        =   "vis-a-vis";

    // Create connection
    $conn   =   new mysqli($db_host, $db_username, $db_password, $db_name);
    mysqli_set_charset($conn, "utf8");


    // Check Connection
    if ($conn->connect_error) {
        die ("Connection failed: " . $conn->connect_error);
    }

    // echo "Connected succesfully";
?>