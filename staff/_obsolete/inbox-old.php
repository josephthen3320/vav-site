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
        font-family: "Inconsolata", sans-serif;
    }
</style>

<body class="w3-theme-l5">
    <!-- Navbar -->
    <div class="w3-theme-d5">
        <!-- Navbar on large screens -->
        <div class="w3-bar w3-display-container" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>

            <a href="dashboard.php" class="w3-bar-item w3-button w3-left w3-hover-theme"><i class="fa fa-home"></i> DASHBOARD</a>
            <a href="#" class="w3-bar-item w3-button w3-theme w3-hide-small w3-hide-medium"><i class="fa fa-envelope"></i> INBOX</a>
            <a href="toolbox.php" class="w3-bar-item w3-button w3-hover-theme w3-hide-small w3-hide-medium"><i class="fa fa-archive"></i> TOOL BOX</a>
            <?php include ('modular/staff-su-header-auth.php'); ?>

            <div class="w3-bar-item w3-display-middle">VAV Dashboard | <?php echo "$username"; ?></div>
            <div class="w3-right w3-hide-small w3-hide-medium">
                <a href="php/logout.php" class="w3-bar-item w3-button w3-hover-red w3-hide-small w3-hide-medium">Log Out <i class="fa fa-sign-out-alt"></i></a>
            </div>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d1 w3-hide w3-hide-large w3-hide-medium">
            <a href="inbox.php" class="w3-bar-item w3-button" onclick="toggleFunction()"><i class="fa fa-envelope"></i> INBOX</a>
            <a href="toolbox.php" class="w3-bar-item w3-button" onclick="toggleFunction()"><i class="fa fa-archive"></i> TOOL BOX</a>
            <a href="php/logout.php" class="w3-bar-item w3-button w3-hover-red" onclick="toggleFunction()"><i class="fa fa-sign-out-alt"></i> LOG OUT</a>
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