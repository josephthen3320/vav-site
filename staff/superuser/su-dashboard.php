<?php

include ('su-auth.php');
include ('../php/config.php');

?>

<!DOCTYPE html>
<html>
<title>V-RED: <?php echo "</$username>"; ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://static.josephthenara.com/vav-media/css/w3.css">
<link rel="stylesheet" href="http://static.josephthenara.com/vav-media/css/su-theme.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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


<body class="su-theme-l5" onload="detectFrameSize()">
<Navigation>
<!-- Sidenav -->
    <div class="w3-hide-small" id="sideNav">
        <div class="w3-sidebar su-theme-d5 w3-bar-block w3-padding-32 w3-animate-left w3-display-container" style="width: 15%;">
            <div class="w3-display-container w3-center w3-bar-item">
                <a href="../../index.php">
                    <img class="w3-image" style="width: 120px;" src="http://static.josephthenara.com/vav-media/img/attribute/vav_web_logo.svg">
                </a>

                <h6>Vis-à-Vis Organisation</h6>
                <h5 class="w3-center w3-bar-item su-theme"><b>RED Dashboard</b></h5>
            </div>
            <hr />
            <a href="../dashboard.php" class="w3-bar-item w3-button w3-hover-pale-blue"><i class="fa fa-fw fa-dove w3-text-blue"></i> BLUE Dashboard</a>
            <hr />
            <a href="#" class="w3-bar-item w3-button su-hover-theme"><i class="fa fa-fw fa-dragon"></i> Dashboard</a>
            <a href="account-control" class="w3-bar-item w3-button su-hover-theme"><i class="fa fa-fw fa-user"></i> Account</a>
            <a href="site-setting.php" class="w3-bar-item w3-button su-hover-theme"><i class="fa fa-fw fa-plug"></i> Site</a>
            <a href="content-setting.php" class="w3-bar-item w3-button su-hover-theme"><i class="fa fa-fw fa-edit"></i> Content</a>
            <hr />
            <a href="php/logout.php" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-fw fa-sign-out-alt"></i> Logout</a>

            <hr />
            <div class="w3-bar-item w3-center">
                <p class="w3-small">VAV RED Dashboard System v.1.0.0</p>
            </div>

        </div>
    </div>

<!-- Top Navbar on small screens -->
    <div class="w3-top w3-hide-large w3-hide-medium w3-bar w3-display-container su-theme-d5" id="myNavbar">
        <a href="#" class="w3-bar-item w3-button su-theme"><i class="fa fa-fw fa-dragon"></i> RED Dashboard</a>
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>
        <div class="w3-bar-block w3-hide w3-hide-large w3-hide-medium" id="navDemo">
            <a href="../dashboard.php" class="w3-bar-item w3-button w3-hover-light-blue"><i class="fa fa-fw fa-dove w3-text-blue"></i> BLUE Dashboard</a>
            <a href="account-control" class="w3-bar-item w3-button su-hover-theme"><i class="fa fa-fw fa-user"></i> Account</a>
            <a href="site-setting.php" class="w3-bar-item w3-button su-hover-theme"><i class="fa fa-fw fa-plug"></i> Site</a>
            <a href="content-setting.php" class="w3-bar-item w3-button su-hover-theme"><i class="fa fa-fw fa-edit"></i> Content</a>
            <a href="php/logout.php" class="w3-bar-item w3-button w3-hover-red"><i class="fa fa-fw fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>
</Navigation>

<!-- Site Content -->
    <div class="" style="margin-left: 15%;" id="mainContent">
        <!-- Top Navbar -->
        <div class="w3-bar-block su-theme-d5 w3-animate-right w3-hide-small">
            <div class="w3-bar-item">
                <a href="#" class="w3-text-white w3-hover-text-pink"><i class="fa fa-dragon"></i></a>
                ::
                <a href="#" style="text-decoration: none" class="w3-text-white w3-hover-text-pink"><b>RED Dashboard</b></a>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
                <i class="fa fa-angle-right w3-small"></i>
            <i class="fa fa-angle-right w3-small"></i>
        </div>
    </div>

    <!-- Header -->
    <div class="w3-bar su-theme w3-animate-right">
        <div class="w3-bar-item">
            <h3>RED Dashboard</h3>
        </div>
    </div>
    </div>

    <!-- Content -->


    <div class="w3-quarter w3-hide-small w3-hide-medium w3-padding-64"></div>
    <div class="w3-half w3-container su-theme-l4 w3-center w3-padding-64">
        <h3 class="w3-center su-text-theme w3-bar"><b>Superuser Dashboard</b></h3>

        <div>
            <h6 class="w3-center w3-bar"><span class="su-theme-d3 w3-wide w3-tag">Account Control Panel</span></h6>

            <table class="w3-table-all w3-centered" style="width: 100%;">
                <tr>
                    <td colspan="4" class="su-theme"><b>Account Information</b></td>
                </tr>
                <tr>
                    <th>UID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Operations</th>
                </tr>
                <?php include ('php/mod_account.php'); ?>
            </table>

        </div>
     </div>
    <div class="w3-quarter w3-hide-small w3-hide-medium w3-padding-64"></div>

    <!-- Account Control Edit Modal -->
    <div id="accControlModal" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('accControlModal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
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
    
    function openAccModal() {
        document.getElementById('accControlModal').style.display='block';
    }
    
    
</script>