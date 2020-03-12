<?php
    require ('php/config.php');

    require ('php/login.php');

?>


<!DOCTYPE html>
<html>
<title>The Vis-à-Vis Organization</title>
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

<body>

<div class="w3-theme-d5">
    <div class="w3-bar w3-display-container" id="myNavbar">
        <a href="../index.php" class="w3-button"><i class="fa fa-reply"></i> BACK</a>
        <div class="w3-bar-item w3-display-middle">Vis-à-Vis</div>
        <div class="w3-bar-item w3-right">Staff Portal | </div>
    </div>


<div class="w3-theme-l5 w3-large">
<div>
    <!-- Login for Browser -->
    <div id="login-form" class="w3-theme-l4 w3-card w3-hide-small">
        <div class="w3-bar w3-theme">
            <h3 class="w3-center w3-bar">Staff Login</h3>
        </div><br />
        <div class="w3-container w3-center">
            <img src="img/user_placeholder.svg" class=" w3-circle" width="30%">
        </div><br>
        <div class="w3-container w3-quarter"></div>
        <div class="w3-container w3-half w3-center">
            <form class="w3-container" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>" method="post">

                <label class="w3-text-theme"><b>Username</b></label>
                <input class="w3-input w3-border" type="text" name="username" placeholder="Username">

                <label class="w3-text-theme"><b>Password</b></label>
                <input class="w3-input w3-border" type="password" id="password" name="password" placeholder="Password">
                <input type="checkbox" onclick="myFunction()" id="pwShowCheck01"><label class="w3-text-theme" for="pwShowCheck01"> Show Password</label>

                <h6 class="w3-text-red"><b><?php echo "$login_err"; ?></b></h6>
                <br><br>
                <button class="w3-btn w3-theme-d3">Login</button>

            </form>
        </div>
        <div class="w3-container w3-quarter"></div>
    </div>

    <!-- Login for mobile -->
    <div id="mobile-login" class="w3-theme-l4 w3-bar w3-hide-large w3-hide-medium">
        <div class="w3-bar w3-theme">
            <h3 class="w3-center w3-bar">Staff Login</h3>
        </div><br />
        <form class="w3-container" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>" method="post">

            <label class="w3-text-theme"><b>Username</b></label>
            <input class="w3-input w3-border" type="text" name="username">

            <label class="w3-text-theme"><b>Password</b></label>
            <input class="w3-input w3-border" type="password" id="password2" name="password">
            <input class="w3-check" type="checkbox" onclick="myFunction()" id="pwShowCheck02"><label class="w3-text-theme" for="pwShowCheck02"> Show Password</label>

            <h6 class="w3-text-red"><b><?php echo "$login_err"; ?></b></h6>
            <br><br>
            <button class="w3-btn w3-theme-d3 w3-bar">Login</button>

        </form>
        <br><br>
    </div>
</div>

<!--
    <div><br><Br>
        <img src="sunny.jpg" width="150px">
        <h1>Hello Sunny!</h1>
        <p>There's something here now, right?</p>
    </div>
-->

</body>
</html>

<script>
function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    var x = document.getElementById("password2");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

</script>