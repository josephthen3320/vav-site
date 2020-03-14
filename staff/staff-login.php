<?php
    require ('php/config.php');
    require ('php/login.php');
?>

<!DOCTYPE html>
<html>
<title>Login &raquo; The Vis-à-Vis Organization</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://static.josephthenara.com/vav-media/css/w3.css">
<link rel="stylesheet" href="http://static.josephthenara.com/vav-media/css/color-theme.css">
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

<body class="w3-theme-d5 w3-display-container">

    <div class="w3-center w3-display-middle">
        <a href="../">
            <img src="img/vav_web_logo.svg" height="100">
        </a>
        <p class="w3-center">
            <em>Making connections, starting with the server</em><br />
            从服务器开始进行连接</p>
        <p class="w3-text-red">
            <?php echo "$login_err"; ?>
        </p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>">
            <div>
                <input class="w3-input w3-medium w3-round-medium" name="username" type="text" placeholder="username" maxlength="20" required>
                <input class="w3-input w3-medium w3-round-medium" name="password" type="password" placeholder="password" maxlength="20" required>
            </div>
            <br>
            <button class="w3-button w3-bar-block w3-red w3-round-medium w3-hover-pink" style="width: 100%;" type="submit"><i class="fa fa-sign-in"></i> <b>Login</b></button>
        </form>
        <p>Forgot your username/password?<br>Contact the site administrator.</p>



    </div>
    <div class="w3-bottom w3-panel w3-center">
        <p class="w3-small">VAV Secure Login System v.1.0.4</p>
    </div>



</body>
</html>