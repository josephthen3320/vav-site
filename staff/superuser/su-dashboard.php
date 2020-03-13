<?php

include ('su-auth.php');
include ('../php/config.php');

?>

<!DOCTYPE html>
<html>
<title><?php echo "V-SU | </$username>"; ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/w3.css">
<link rel="stylesheet" href="css/su-theme.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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

<body class="su-theme-l5">

    <div class="su-theme-d5">
        <!-- Navbar on large screens -->
        <div class="w3-bar w3-display-container" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>

            <a href="#" class="w3-bar-item w3-button w3-left su-theme su-hover-theme"><i class="fas fa-dragon"></i> SU DASHBOARD</a>
            <a href="../dashboard.php" class="w3-bar-item w3-button w3-left su-hover-theme w3-hide-small w3-hide-medium"><i class="fa fa-dove"></i> BLUE DASHBOARD</a>
            <div class="w3-bar-item w3-display-middle"><?php echo "<./$username::SUDB>"; ?></div>
            <div class="w3-right w3-hide-small w3-hide-medium">
                <a href="../php/logout.php" class="w3-bar-item w3-button w3-hover-red w3-hide-small w3-hide-medium">Log Out <i class="fa fa-sign-out-alt"></i></a>
            </div>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block su-theme-d1 w3-hide w3-hide-large w3-hide-medium">
            <a href="../dashboard.php" class="w3-bar-item w3-button w3-left su-hover-theme" onclick="toggleFunction()"><i class="fa fa-dove"></i> BLUE DASHBOARD</a>
            <a href="../php/logout.php" class="w3-bar-item w3-button w3-hover-red" onclick="toggleFunction()"><i class="fa fa-sign-out-alt"></i> LOG OUT</a>
        </div>

    </div>

    <div class="w3-bar w3-display-container su-theme" style="width: 100%;">
        <div class="w3-bar-item w3-hide-small w3-hide-medium">Management Options <i class="fa fa-angle-double-right"></i></div>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Account</a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-plug"></i> Site</a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-edit"></i> Content</a>
    </div>

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