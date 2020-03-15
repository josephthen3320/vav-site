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

    <!-- Navbar -->
    <div class="w3-theme-d5">
        <!-- Navbar on large screens -->
        <div class="w3-bar w3-display-container" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>

            <a href="#" class="w3-bar-item w3-button w3-left w3-theme w3-dropdown-hover"><i class="fa fa-home"></i> DASHBOARD</a>
            <a href="inbox.php" class="w3-bar-item w3-button w3-hover-theme w3-hide-small w3-hide-medium"><i class="fa fa-envelope"></i> INBOX</a>
            <a href="toolbox.php" class="w3-bar-item w3-button w3-hover-theme w3-hide-small w3-hide-medium"><i class="fa fa-archive"></i> TOOL BOX</a>
            <?php include ('modular/staff-su-header-auth.php'); ?>

            <div class="w3-bar-item w3-display-middle">VAV Dashboard | <?php echo "$username"; ?></div>
            <div class="w3-right w3-hide-small w3-hide-medium">
                <a href="php/logout.php" class="w3-bar-item w3-button w3-hover-red w3-hide-small w3-hide-medium">Log Out <i class="fa fa-sign-out-alt"></i></a>
            </div>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d1 w3-hide w3-hide-large w3-hide-medium">
            <?php
            if($username == 'nara') {
                echo '<a href="superuser/su-dashboard.php" class="w3-bar-item w3-button w3-hover-pale-red"><i class="fa fa-dragon w3-text-red"></i> RED DASHBOARD</a>';
            }

            ?>
            <a href="inbox.php" class="w3-bar-item w3-button w3-hover-theme" onclick="toggleFunction()"><i class="fa fa-envelope"></i> INBOX</a>
            <a href="toolbox.php" class="w3-bar-item w3-button w3-hover-theme" onclick="toggleFunction()"><i class="fa fa-archive"></i> TOOL BOX</a>
            <a href="php/logout.php" class="w3-bar-item w3-button w3-hover-red" onclick="toggleFunction()"><i class="fa fa-sign-out-alt"></i> LOG OUT</a>
        </div>

    </div>

    <!-- Content -->
    <div class="w3-content w3-margin-top w3-padding-16" style="max-width:1400px;">

        <div>
            <h3 class="w3-center w3-bar"><span class="w3-theme-d3 w3-wide w3-tag">V-Dashboard</span></h3>
        </div><br />

        <!-- The Grid -->
        <div class="w3-row-padding">

            <!-- Left Column -->
            <div class="w3-third">

                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                        <img src="<?php echo $username.'.jpg'; ?>" style="width:100%" alt="Avatar">
                        <div class="w3-display-bottomleft w3-container w3-text-white w3-bar w3-theme">
                            <h2><?php echo "$staff_firstname $staff_lastname $gender_icon"; ?></h2>
                        </div>
                    </div>
                    <div class="w3-container">
                        <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-large w3-text-theme"></i><?php echo "  $dob_convert"; ?></p>
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
                </div><br>

                <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-twothird">

                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Front End Developer / w3schools.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
                        <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
                        <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
                    </div>
                </div>

                <div class="w3-container w3-card w3-white">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>W3Schools.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
                        <p>Web Development! All I need to know in one place</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>London Business School</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
                        <p>Master Degree</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>School of Coding</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
                        <p>Bachelor Degree</p><br>
                    </div>
                </div>

                <!-- End Right Column -->
            </div>
        </div>
    </div>

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