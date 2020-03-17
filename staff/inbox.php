<?php
    require ('php/config.php');
    require ('php/auth.php');
?>

<!DOCTYPE html>
<html>
<title><?php echo "$username"; ?> | V-Inbox</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://static.josephthenara.com/vav-media/css/w3.css">
<link rel="stylesheet" href="http://static.josephthenara.com/vav-media/css/color-theme.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
    body, html {
        height: 100%;
        font-family: "Inconsolata", "Hiragino Sans GB", "Microsoft Yahei UI","微软雅黑", sans-serif;
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
                <h5 class="w3-center w3-bar-item w3-theme"><b>Mailbox</b></h5>
            </div>
            <hr />
            <a href="dashboard.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a>
            <a href="calendar.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-calendar"></i> Calendar</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-envelope w3-align-left"></i> Mailbox</a>
            <a href="toolbox.php" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-tools"></i> Toolbox</a>

            <hr />
            <a href="" class="w3-bar-item w3-button w3-hover-theme"><i class="fa fa-fw fa-user"></i> Profile</a>
            <a href="php/logout.php" class="w3-bar-item w3-button w3-right w3-hover-red"><i class="fa fa-sign-out-alt"></i> Logout</a>

            <hr />
            <div class="w3-bar-item">
                <p class="w3-small">VAV Dashboard System v.1.0.0</p>
            </div>

        </div>
    </div>

        <div class="w3-quarter w3-hide-small w3-hide-medium w3-padding-64"></div>
        <div class="w3-half w3-container w3-theme-l4 w3-center w3-padding-64">
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
        </div>
        <div class="w3-quarter w3-hide-small w3-hide-medium w3-padding-64"></div>

    </div>

    <div class="w3-display-container w3-bar w3-theme-d5 w3-center">
        <p>VAV Website Inbox System v.1.1.0</p>
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