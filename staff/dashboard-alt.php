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
</style>

<body class="w3-theme-l5">

<!-- Side Navbar -->
    <div>
        <div class="w3-sidebar w3-theme-d5 s3-bar-block w3-padding-32">
            <div class="w3-display-container w3-center">
                <img class="w3-image" style="width: 75%;" src="http://static.josephthenara.com/vav-media/img/attribute/vav_web_logo.svg">
                <h6>Vis-a-Vis Organisation</h6>
                <h5>Dashboard</h5>
            </div><hr/>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
        </div>
    </div>

<!-- Site Content -->
    <div>

    </div>


<!-- Footer -->
    <div class="w3-display-container w3-bar w3-theme-d5 w3-center">
        <p>VAV Website Dashboard System v.1.0.0</p>
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