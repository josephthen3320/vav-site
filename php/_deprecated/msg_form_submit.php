<?php

    include 'config.php';

    // Fetch form input
    $name       =   testInput($_POST["msg_name"]);
    $email      =   testInput($_POST["msg_email"]);
    $content    =   testInput($_POST["msg_content"]);

    // Create new message record in db
    $msg_sql = "INSERT INTO messages (msg_name, msg_email, msg_content) VALUES ('$name', '$email', '$content')";

    if (mysqli_query($conn, $msg_sql)) {
        $name = $email = $content = "";
    } else {
        echo "Error: " . $msg_sql . "<br>" . mysqli_error($conn);
    }

    function testInput($data) {
        $data   =   trim($data);
        $data   =   stripslashes($data);
        $data   =   htmlspecialchars($data);
        return $data;
    }

    mysqli_close($conn); // Closing Connection with Server
?>