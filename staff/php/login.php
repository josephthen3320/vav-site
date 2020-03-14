<?php

    $username = $login_err = "";
    // If form submitted, insert values into the database.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //if (isset($_POST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);

        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

        //Checking is user existing in the database or not
        $query = "SELECT * FROM `staff_login` WHERE username='$username' and password='$password'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            session_start();
            $_SESSION['username'] = $username;
            // Redirect user to dashboard
            header("Location: dashboard.php");
        } else {
            $login_err = "Invalid username and/or password.";
        }
    }

?>