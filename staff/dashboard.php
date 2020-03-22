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

<script>
    function detectFrameSize() {
        var fWidth  = window.innerWidth;
        var fHeight = window.innerHeight;
        var xx      = document.getElementById("mainContent");
        if (fWidth < 993) {
            xx.style.marginLeft =   "0%";
            xx.className        +=  "w3-padding-32";
        }
    }
</script>

<body class="w3-theme-l5" onload="detectFrameSize()">

<!-- Side Navbar -->
    <div class="w3-hide-small" id="sideNav">
        <div class="w3-sidebar w3-theme-d5 w3-bar-block w3-padding-32 w3-animate-left w3-display-container" style="width: 15%;">
            <div class="w3-display-container w3-center w3-bar-item">
                <a href="../index.php">
                    <img class="w3-image" style="width: 120px;" src="http://static.josephthenara.com/vav-media/img/attribute/vav_web_logo.svg">
                </a>

                <h6>Vis-à-Vis Organisation</h6>
                <h5 class="w3-center w3-bar-item w3-theme"><b>Dashboard</b></h5>
            </div>
            <?php if ($username == 'nara') {echo "<hr />";} include ('modular/staff-su-header-auth.php'); ?>
            <hr />
            <a href="#" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a>
            <a href="calendar.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-calendar"></i> Calendar</a>
            <a href="inbox.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-envelope w3-align-left"></i> Mailbox</a>
            <button href="toolbox.php" disabled class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-tools"></i> Toolbox</button>

            <hr />
            <button href="" disabled class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-user"></i> Profile</button>
            <a href="php/logout.php" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-fw fa-sign-out-alt"></i> Logout</a>

            <hr />
            <div class="w3-bar-item w3-center">
                <p class="w3-small">VAV Dashboard System v.2.2.1</p>
            </div>

        </div>
    </div>

<!-- Top Navbar on small screens -->
    <div class="w3-top w3-hide-large w3-hide-medium w3-bar w3-display-container w3-theme-d5" id="myNavbar">
        <a href="#" class="w3-bar-item w3-button w3-theme"><i class="fa fa-fw fa-home"></i> Dashboard</a>
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>
        <div class="w3-bar-block w3-hide w3-hide-large w3-hide-medium" id="navDemo">
            <?php include ('modular/staff-su-header-auth.php'); ?>
            <a href="calendar.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-calendar"></i> Calendar</a>
            <a href="inbox.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-envelope"></i> Mailbox</a>
            <button href="toolbox.php" disabled class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-tools"></i> Toolbox</button>
            <a href="php/logout.php" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-fw fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>

<!-- Site Content -->
    <div class="" style="margin-left: 15%;" id="mainContent">
    <!-- Links Navbar -->
        <div class="w3-bar-block w3-theme-d5 w3-animate-right w3-hide-small">
            <div class="w3-bar-item">
                <a href="dashboard.php" class="w3-text-white w3-hover-text-light-blue"><i class="fa fa-home"></i></a>
                <i class="fa fa-angle-right w3-small"></i>
                <b><?php echo "$staff_en_name"; ?></b>
                <i class="fa fa-angle-right w3-small"></i>
                <a href="#" style="text-decoration: none" class="w3-text-white w3-hover-text-light-blue"><b>Dashboard</b></a>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
            </div>
        </div>

    <!-- Header -->
        <div class="w3-bar w3-theme w3-animate-right">
            <div class="w3-bar-item">
                <h3>Dashboard</h3>
            </div>
        </div>

    <!-- Content -->
        <div class="w3-animate-right">
        <!-- Left Bar -->
            <div class="w3-quarter w3-center w3-bar-block">
                <div class="w3-padding-32 w3-bar-item w3-theme-d4 w3-container">
                        <img class="w3-circle w3-left" src="http://static.josephthenara.com/vav-media/img/profile-picture/<?php echo $username.'.jpg'; ?>" style="width: 25%" alt="<?php echo $staff_en_name.' Avatar'; ?>">
                    <div class="w3-container w3-right w3-center" style="width: 75%;">
                        <h3 class="w3-left-align">
                            <?php echo "$staff_en_name $staff_lastname $gender_icon"; ?><br>
                            (<?php echo "$staff_ch_name"; ?>)
                        </h3>
                    </div>

                </div>
                <div class="w3-bar-item w3-theme-l5 w3-left-align w3-border-right">
                    <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-large w3-text-theme"></i><?php echo "$dob_convert"; ?></p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-theme"></i><?php echo "B$staff_roomno"; ?></p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-theme"></i><?php echo "$staff_email"; ?></p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-theme"></i><?php echo "(+86) $staff_phone"; ?></p>
                </div>
            </div>

        <!-- Main Bar -->
            <div class="w3-half w3-theme-d2 w3-center w3-bar-block">
                <div class="w3-container w3-bar-item">
                    <h4>Content</h4>
                </div>
                <div class="w3-container w3-bar-item w3-display-container w3-theme-l5">
                    <div class="w3-container">
                        <h5 class="w3-text-red"><b>Empty Content!</b></h5>
                        <h6>Content system is being created!</h6>
                    </div>
                </div>
            </div>

        <!-- Right Bar -->
            <div class="w3-quarter w3-theme-l1 w3-center w3-bar-block">
                <div class="w3-bar-item w3-theme-d4">
                    <h4>Reminders</h4>
                </div>
                <div class="w3-bar-item w3-theme-l5 w3-border-left">
                    <div class="w3-theme-l4">
                        <div class="w3-card">
                            <div class="w3-panel w3-theme">
                                <h5 class=""><b>Reminder Title</b></h5>
                            </div>
                            <div class="w3-left-align w3-panel">
                                <h6>Programme: <?php echo "$staff_prog01";?></h6>
                            </div>
                            <div class="w3-red w3-span w3-panel">
                                <h6 class="w3-small">2020.03.30 | 16:00</h6>
                            </div>
                        </div>
                    </div>
                    <div class="w3-theme-l4">
                        <div class="w3-card">
                            <div class="w3-panel w3-theme">
                                <h5 class=""><b>Reminder Title</b></h5>
                            </div>
                            <div class="w3-left-align w3-panel">
                                <h6>Programme: <?php echo "$staff_prog02";?></h6>
                            </div>
                            <div class="w3-red w3-span w3-panel">
                                <h6 class="w3-small">2020.03.30 | 16:00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3-bar-item w3-theme-d4">
                    <h4>Recent Messages</h4>
                </div>
                <div class="w3-border-left w3-theme-l5 w3-bar-block">
                    <div class="w3-bar-item">
                        <div class="w3-leftbar w3-border-blue w3-panel w3-left-align ">
                            <h6><b>Sender:</b> <?php echo "$staff_en_name"; ?></h6>
                            <p>Message Content</p>
                        </div>
                    </div>
                    <div class="w3-bar-item">
                        <div class="w3-leftbar w3-border-blue w3-panel w3-left-align ">
                            <h6><b>Sender:</b> <?php echo "$staff_en_name"; ?></h6>
                            <p>Message Content</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer only in small screens -->
    <div class="w3-hide-large w3-hide-medium w3-theme-d5 w3-center w3-padding-64 w3-bar">
        <a href="../">
            <img src="http://static.josephthenara.com/vav-media/img/attribute/vav_web_logo.svg" height="50">
        </a>
        <p>Vis-à-Vis Organisation</p>
        <p class="w3-small w3-panel w3-theme-l1">VAV Dashboard System v.2.2.1</p>
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