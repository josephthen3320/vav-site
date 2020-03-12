<?php

    include ('php/auth.php');
    include ('php/config.php');

?>

<!DOCTYPE html>
<html>
<title><?php echo "$username"; ?> | V-Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/color-theme.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
    body, html {
        height: 100%;
        font-family: "Inconsolata", sans-serif;
    }

    .bgimg {
        background-position: center;
        background-size: cover;
        background-image: url("/img/bg01.jpg");
        min-height: 75%;
    }

    .menu {
        display: none;
    }

    #login-form {
        width: 30%;           /* Set this to your convenience */
        height: 60%;          /* Set this to your convenience */
        position: absolute;
        top: 30%;
        left: 42.5%;
        margin-top: -100px;     /* Half of height */
        margin-left: -150px;     /* Half of width */
    }
</style>

<body class="w3-theme-l5">

    <div class="w3-theme-d5">
        <!-- Navbar on large screens -->
        <div class="w3-bar w3-display-container" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>

            <a href="#" class="w3-bar-item w3-button w3-left w3-theme"><i class="fa fa-home"></i> DASHBOARD</a>
            <a href="inbox.php" class="w3-bar-item w3-button w3-hover-theme w3-hide-small w3-hide-medium"><i class="fa fa-envelope"></i> INBOX</a>
            <a href="toolbox.php" class="w3-bar-item w3-button w3-hover-theme w3-hide-small w3-hide-medium"><i class="fa fa-archive"></i> TOOL BOX</a>
            <div class="w3-bar-item w3-display-middle">VAV Dashboard | <?php echo "$username"; ?></div>
            <div class="w3-right w3-hide-small w3-hide-medium">
                <a href="php/logout.php" class="w3-bar-item w3-button w3-hover-red w3-hide-small w3-hide-medium">Log Out <i class="fa fa-sign-out"></i></a>
            </div>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d1 w3-hide w3-hide-large w3-hide-medium">
            <a href="inbox.php" class="w3-bar-item w3-button" onclick="toggleFunction()"><i class="fa fa-envelope"></i> INBOX</a>
            <a href="toolbox.php" class="w3-bar-item w3-button" onclick="toggleFunction()"><i class="fa fa-archive"></i> TOOL BOX</a>
            <a href="php/logout.php" class="w3-bar-item w3-button w3-hover-red" onclick="toggleFunction()"><i class="fa fa-sign-out"></i> LOG OUT</a>
        </div>

    </div>

</body>
</html>

<script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>