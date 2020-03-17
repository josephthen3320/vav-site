<?php

    include ('php/auth.php');
    include ('php/config.php');
    include ('php/fetch-info.php');

?>

<!DOCTYPE html>
<html>
<title><?php echo "$username"; ?> | V-Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://static.josephthenara.com/vav-media/css/w3.css">
<link rel="stylesheet" href="http://static.josephthenara.com/vav-media/css/color-theme.css">
<!--link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/color-theme.css"-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="//db.onlinewebfonts.com/c/3f086dbc376893f56b4a9c4d3cac5df9?family=Hiragino+Sans+GB" type="text/css"/>
<style>
    body, html {
        height: 100%;
        font-family: "Inconsolata", "Hiragino Sans GB", "Microsoft Yahei UI","微软雅黑", sans-serif;
    }
    .fullscreen {
        height: 100%;
    }
</style>

<body class="w3-theme-l5">

<!-- Side Navbar -->
    <div>
        <div class="w3-sidebar w3-theme-d5 w3-bar-block w3-padding-32 w3-animate-left w3-display-container" style="width: 15%;">
            <hr />
            <div class="w3-display-container w3-center w3-bar-item">
                <a href="../index.php">
                    <img class="w3-image" style="width: 120px;" src="http://static.josephthenara.com/vav-media/img/attribute/vav_web_logo.svg">
                </a>

                <h6>Vis-a-Vis Organisation</h6>
                <h5 class="w3-center w3-bar-item w3-theme"><b>Dashboard</b></h5>
            </div>
            <hr />
            <a href="#" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a>
            <a href="calendar.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-calendar"></i> Calendar</a>
            <a href="inbox.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-envelope w3-align-left"></i> Mailbox</a>
            <a href="toolbox.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-tools"></i> Toolbox</a>

                <hr />
                <a href="" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-user"></i> Profile</a>
                <a href="php/logout.php" class="w3-bar-item w3-button w3-right w3-hover-red"><i class="fa fa-sign-out-alt"></i> Logout</a>

            <hr />
            <div class="w3-bar-item">
                <p class="w3-small">VAV Dashboard System v.2.0.0</p>
            </div>

        </div>
    </div>

<!-- Site Content -->
    <div class="" style="margin-left: 15%;">
    <!-- Top Navbar -->
        <div class="w3-bar w3-theme-d5 w3-animate-right">
            <div class="w3-bar-item">
                <a href="dashboard.php" class="w3-text-white w3-hover-text-light-blue"><i class="fa fa-home"></i></a>
                <i class="fa fa-angle-right w3-small"></i>
                <b><?php echo "$staff_en_name"; ?></b>
                <i class="fa fa-angle-right w3-small"></i>
                <a href="" style="text-decoration: none" class="w3-text-white w3-hover-text-light-blue"><b>Dashboard</b></a>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
            </div>

        </div>

    <!-- Content -->
        <div class="">
            <div class="w3-theme-l4">
                <h5><?php echo "$staff_firstname $staff_lastname" ?></h5>
            </div>
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