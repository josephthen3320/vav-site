<?php
    require ('php/config.php');
    require ('php/auth.php');
    include ('php/fetch-info.php');
    include ('php/fetch-inbox.php');
?>

<!DOCTYPE html>
<html>
<title><?php echo "$username"; ?> | V-Inbox</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2019.css">
<link rel="stylesheet" href="http://static.josephthenara.com/vav-media/css/w3.css">
<link rel="stylesheet" href="http://static.josephthenara.com/vav-media/css/color-theme.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
    body, html {
        height: 100%;
        font-family: "Inconsolata", "Hiragino Sans GB", "Microsoft Yahei UI","微软雅黑", sans-serif;
    }
    .w3-2019-fiesta
    {color:#fff;background-color:#DD4132}
    .w3-2019-jester-red
    {color:#fff;background-color:#9E1030}
    .w3-2019-turmeric
    {color:#fff;background-color:#FE840E}
    .w3-2019-living-coral
    {color:#fff;background-color:#FF6F61}
    .w3-2019-pink-peacock
    {color:#fff;background-color:#C62168}
    .w3-2019-pepper-stem
    {color:#fff;background-color:#8D9440}
    .w3-2019-aspen-gold
    {color:#000;background-color:#FFD662}
    .w3-2019-princess-blue
    {color:#fff;background-color:#00539C}
    .w3-2019-toffee
    {color:#fff;background-color:#755139}
    .w3-2019-mango-mojito
    {color:#000;background-color:#D69C2F}
    .w3-2019-terrarium-moss
    {color:#fff;background-color:#616247}
    .w3-2019-sweet-lilac
    {color:#000;background-color:#E8B5CE}
    .w3-2019-soybean
    {color:#000;background-color:#D2C29D}
    .w3-2019-eclipse
    {color:#fff;background-color:#343148}
    .w3-2019-sweet-corn
    {color:#000;background-color:#F0EAD6}
    .w3-2019-brown-granite
    {color:#fff;background-color:#615550}
    .w3-2019-chili-pepper
    {color:#fff;background-color:#9B1B30}
    .w3-2019-biking-red
    {color:#fff;background-color:#77212E}
    .w3-2019-creme-de-peche
    {color:#000;background-color:#F5D6C6}
    .w3-2019-peach-pink
    {color:#fff;background-color:#FA9A85}
    .w3-2019-rocky-road
    {color:#fff;background-color:#5A3E36}
    .w3-2019-fruit-dove
    {color:#fff;background-color:#CE5B78}
    .w3-2019-sugar-almond
    {color:#fff;background-color:#935529}
    .w3-2019-dark-cheddar
    {color:#fff;background-color:#E08119}
    .w3-2019-galaxy-blue
    {color:#fff;background-color:#2A4B7C}
    .w3-2019-bluestone
    {color:#fff;background-color:#577284}
    .w3-2019-orange-tiger
    {color:#fff;background-color:#F96714}
    .w3-2019-eden
    {color:#fff;background-color:#264E36}
    .w3-2019-vanilla-custard
    {color:#000;background-color:#F3E0BE}
    .w3-2019-evening-blue
    {color:#fff;background-color:#2A293E}
    .w3-2019-paloma
    {color:#fff;background-color:#9F9C99}
    .w3-2019-guacamole
    {color:#fff;background-color:#797B3A}
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
    <div class="w3-hide-small">
        <div class="w3-sidebar w3-theme-d5 w3-bar-block w3-padding-32 w3-animate-left w3-display-container w3-container" style="z-index:3; width: 15%;">
            <div class="w3-display-container w3-center w3-bar-item">
                <a href="../index.php">
                    <img class="w3-image" style="width: 120px;" src="http://static.josephthenara.com/vav-media/img/attribute/vav_web_logo.svg">
                </a>
                <h6>Vis-a-Vis Organisation</h6>
                <h5 class="w3-center w3-bar-item w3-theme"><b>Mailbox</b></h5>
            </div>
            <hr />
            <a href="dashboard.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a>
            <a href="calendar.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-calendar"></i> Calendar</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-envelope w3-align-left"></i> Mailbox</a>
            <a href="toolbox.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-tools"></i> Toolbox</a>

            <hr />
            <a href="" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-user"></i> Profile</a>
            <a href="php/logout.php" class="w3-bar-item w3-button w3-right w3-hover-red"><i class="fa fa-fw fa-sign-out-alt"></i> Logout</a>

            <hr />
            <div class="w3-bar-item">
                <p class="w3-small">VAV Mailbox System v.2.0.0</p>
            </div>

        </div>
    </div>

<!-- Top Navbar on small screens -->
<div class="w3-top w3-hide-large w3-hide-medium w3-bar w3-display-container w3-theme-d5 w3-large" id="myNavbar">
    <a href="dashboard.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-home"></i> Dashboard</a>
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
    </a>
    <div class="w3-bar-block w3-hide w3-hide-large w3-hide-medium" id="navDemo">
        <a href="calendar.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-calendar"></i> Calendar</a>
        <a href="#" class="w3-bar-item w3-button w3-theme w3-hover-theme"><i class="fa fa-fw fa-envelope"></i> Mailbox</a>
        <a href="toolbox.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-tools"></i> Toolbox</a>
        <a href="php/logout.php" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-fw fa-sign-out-alt"></i> Logout</a>
    </div>
</div>

<!-- Content -->
    <div style="margin-left: 15%;" class="w3-animate-right" id="mainContent">
    <!-- Top Navbar -->
        <div class="w3-bar w3-theme-d5">
            <div class="w3-bar-item">
                <a href="dashboard.php" class="w3-text-white w3-hover-text-light-blue"><i class="fa fa-home"></i></a>
                <i class="fa fa-angle-right w3-small"></i>
                <b><?php echo "$staff_en_name"; ?></b>
                <i class="fa fa-angle-right w3-small"></i>
                <a href="#" style="text-decoration: none;" class="w3-text-light-blue"><b>Mailbox</b></a>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
            </div>
        </div>
    <!-- Header -->
        <div class="w3-bar w3-theme">
            <div class="w3-bar-item">
            <h3>Mailbox</h3>
            </div>
        </div>
    <!-- Main Content -->
        <div class="w3-quarter w3-bar-block w3-theme-l4">
        <!-- Compose Button -->
            <div class="w3-bar-item w3-center">
                <div class="w3-button w3-panel w3-2019-eden w3-round w3-hover-green" style="width: 75%;">
                    <h6>Compose Message | <i class="fa fa-fw fa-edit"></i> </h6>
                </div>
            </div>
        <!-- Other Buttons -->
            <div class="w3-bar-item w3-button w3-theme-l1">
                <h6><i class="fa fa-fw fa-inbox"></i> <b>Inbox </b>[<?php echo "$msg_total_count"; ?>]</h6>
            </div>
            <div class="w3-bar-item w3-button w3-theme">
                <h6><i class="fa fa-fw fa-envelope"></i> <b>Unread </b>[<?php echo "$msg_total_unread"; ?>]</h6>
            </div>
            <div class="w3-bar-item w3-button w3-theme-l1">
                <h6><i class="fa fa-fw fa-envelope-open"></i> <b>Read </b>[<?php echo "$msg_total_read"; ?>]</h6>
            </div>
            <div class="w3-bar-item w3-button w3-theme">
                <h6><i class="fa fa-fw fa-trash"></i> <b>Trash </b>[<?php echo "$msg_total_trash"; ?>]</h6>
            </div>

        </div>
        <div class="w3-threequarter w3-theme-l5">
            <table class="w3-table-all  w3-centered" style="width: 100%;">
                <tr class="w3-theme-d1">
                    <th class="w3-center" style="width: 10%;">
                        <h6><b>#</b></h6>
                    </th>
                    <th class="w3-center" style="width: 25%;">
                        <h6><b>Name</b></h6>
                    </th>
                    <th class="w3-center" style="width: 50%;">
                        <h6><b>Message Content</b></h6>
                    </th>
                    <th class="w3-center" style="width: 15%;">
                        <h6><b>Operations</b></h6>
                    </th>
                </tr>
                <?php include ('php/load-inbox.php'); ?>
            </table>
        </div>
    </div>

        <!--div class="w3-half w3-container w3-theme-l4 w3-center w3-padding-64" style="margin-left: 15%;">
            <h3 class="w3-center w3-text-theme w3-bar"><b>V-Dashboard</b></h3>

            <div>
                <h6 class="w3-center w3-bar"><span class="w3-theme-d3 w3-wide w3-tag">Website Inbox</span></h6>

                <table class="w3-table-all w3-centered" style="width: 100%;">
                    <tr>
                        <td colspan="4" class="w3-theme"><b>Message List</b></td>
                    </tr>
                    <tr>
                        <th class="w3-center" style="width: 10%;">
                            <h6><b>#</b></h6>
                        </th>
                        <th class="w3-center" style="width: 25%;">
                            <h6><b>Name</b></h6>
                        </th>
                        <th class="w3-center" style="width: 50%;">
                            <h6><b>Message Content</b></h6>
                        </th>
                        <th class="w3-center" style="width: 15%;">
                            <h6><b>Operations</b></h6>
                        </th>
                    </tr>
                    <?php include ('php/load-inbox.php'); ?>
                </table>
            </div>
        </div-->

    <!-- div class="w3-display-container w3-bar w3-theme-d5 w3-center">
        <p>VAV Website Inbox System v.1.1.0</p>
    </div -->

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