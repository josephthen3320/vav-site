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
        <div class="w3-sidebar w3-theme-d5 s3-bar-block w3-padding-32 w3-animate-left" style="width: 15%;">
            <div class="w3-display-container w3-center">
                <a href="../index.php">
                    <img class="w3-image" style="width: 120px;" src="http://static.josephthenara.com/vav-media/img/attribute/vav_web_logo.svg">
                </a>
                <h6>Vis-a-Vis Organisation</h6>
                <h5>Dashboard</h5>
            </div><hr/>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
        </div>
    </div>

<!-- Site Content -->
    <div class="w3-third w3-animate-right" style="margin-left: 15%;">
        <div class="w3-bar-block w3-theme-d5">
            <div class="w3-bar-item">
                <a href="dashboard-alt.php" class="w3-text-white w3-hover-text-light-blue"><i class="fa fa-home"></i></a>
                <i class="fa fa-angle-right w3-small"></i>
                <a href="" style="text-decoration: none" class="w3-text-white w3-hover-text-light-blue"><b>Dashboard</b></a>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
            </div>
        </div>


        <div class="w3-white w3-text-grey w3-card-4">
            <div class="w3-display-container">
                <img src="http://static.josephthenara.com/vav-media/img/profile-picture/<?php echo $username.'.jpg'; ?>" style="width:100%" alt="Avatar">
                <div class="w3-display-bottomleft w3-container w3-text-white w3-bar w3-theme">
                    <h2><?php echo "$staff_firstname $staff_lastname $gender_icon"; ?></h2>
                </div>
            </div>
            <div class="w3-container">
                <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-large w3-text-theme"></i><?php echo "$dob_convert"; ?></p>
                <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-theme"></i><?php echo "B$staff_roomno"; ?></p>
                <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-theme"></i><?php echo "$staff_email"; ?></p>
                <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-theme"></i><?php echo "$staff_phone"; ?></p>
                <hr>

                <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
                <p>Adobe Photoshop</p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                    <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
                </div>
                <p>Photography</p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                    <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                        <div class="w3-center w3-text-white">80%</div>
                    </div>
                </div>
                <p>Illustrator</p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                    <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
                </div>
                <p>Media</p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                    <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
                </div>
                <br>

                <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
                <p>English</p>
                <div class="w3-light-grey w3-round-xlarge">
                    <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
                </div>
                <p>Spanish</p>
                <div class="w3-light-grey w3-round-xlarge">
                    <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
                </div>
                <p>German</p>
                <div class="w3-light-grey w3-round-xlarge">
                    <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
                </div>
                <br>
            </div>
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