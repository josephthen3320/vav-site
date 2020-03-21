<?php

include ('su-auth.php');
include ('../php/config.php');
include ('php/create_account.php');

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
            <a href="su-dashboard.php" class="w3-bar-item w3-button su-hover-theme"><i class="fa fa-fw fa-dragon"></i> Dashboard</a>
            <a href="#" class="w3-bar-item w3-button su-hover-theme"><i class="fa fa-fw fa-user"></i> Account</a>
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
        <a href="su-dashboard.php" class="w3-bar-item w3-button su-theme"><i class="fa fa-fw fa-dragon"></i> RED Dashboard</a>
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>
        <div class="w3-bar-block w3-hide w3-hide-large w3-hide-medium" id="navDemo">
            <a href="../dashboard.php" class="w3-bar-item w3-button w3-hover-light-blue"><i class="fa fa-fw fa-dove w3-text-blue"></i> BLUE Dashboard</a>
            <a href="#" class="w3-bar-item w3-button su-hover-theme"><i class="fa fa-fw fa-user"></i> Account</a>
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
                    <a href="su-dashboard.php" style="text-decoration: none" class="w3-text-white w3-hover-text-pink"><b>RED</b></a>
                    <i class="fa fa-angle-right w3-small"></i>
                    <a href="#" style="text-decoration: none" class="w3-text-white w3-hover-text-pink"><b>Account Control</b></a>
                    <i class="fa fa-angle-right w3-small"></i>
                    <i class="fa fa-angle-right w3-small"></i>
                    <i class="fa fa-angle-right w3-small"></i>
                </div>
            </div>

        <!-- Header -->
            <div class="w3-bar su-theme w3-animate-right">
                <div class="w3-bar-item">
                    <h3>User Account Control</h3>
                </div>
            </div>


    <!-- Main Content -->
        <div class="w3-animate-right">
            <div class="w3-quarter w3-bar-block su-theme-l4">
            <!-- Compose Button -->
                <div class="w3-bar-item w3-center">
                    <h5><span class="su-theme w3-tag w3-wide">Control Panel</span></h5>
                </div>
            <!-- Other Buttons -->
                <!-- Current Users -->
                <div class="w3-bar-item w3-button su-theme-l1" onclick="accountNavigation('currentUsers')">
                    <h6><i class="fa fa-fw fa-users"></i> <b>Existing User </b></h6>
                </div>
                <!-- Create User -->
                <div class="w3-bar-item w3-button su-theme" onclick="accountNavigation('createUsers')">
                    <h6><i class="fa fa-fw fa-user-plus"></i> <b>User Creation</b></h6>
                </div>
            </div>
            <div class="w3-threequarter su-theme-l3">
            <!-- Default Tab -->
                <div class="account-content" id="defaultTab" style="display: block;">
                    <div class="w3-bar su-theme-d1">
                        <h3 class="w3-bar-item">Welcome to User Account Control Panel</h3>
                    </div>
                    <div class="w3-container w3-display-container su-theme-d3">
                        <div class="w3-padding-64 w3-center">
                            <h2><span class=""><i class="fa fa-fw fa-angle-double-left w3-hide-small"></i><i class="fa fa-fw fa-angle-double-up w3-hide-large w3-hide-medium"></i> <b>Select an option</b></span></h2>
                        </div>
                    </div>
                </div>

            <!-- Current Users -->
                <div class="account-content" id="currentUsers" style="display: none;">
                    <div class="w3-bar su-theme-d1">
                        <h3 class="w3-bar-item">Current Users Information</h3>
                    </div>
                    <table class="w3-table-all w3-centered" style="width: 100%;">
                        <tr>
                            <td colspan="4" class="su-theme-d1"><b>Account Information</b></td>
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

            <!-- Create User -->
                <div class="w3-display-container account-content" id="createUsers" style="display: none; height: 100%;">
                    <div class="w3-bar su-theme-d1">
                        <h3 class="w3-bar-item">User Account Creation System</h3>
                    </div>

                    <form class="w3-container w3-padding-32 w3-row-padding" method="post" action="">
                    <!-- Left Bar -->
                        <div class="w3-half">
                        <!-- Account Credential -->
                            <div class="w3-card su-theme w3-padding w3-round-large w3-margin-bottom">
                                <h5 class="su-theme w3-center"><i class="fa fa-fw fa-id-badge"></i> Account Credential</h5>
                                <input class="w3-input" type="text" placeholder="Username" id="username" name="username" required>
                                <label class="">Username</label><br><br>

                                <input class="w3-input" type="text" placeholder="Email Address" id="email" name="email" required>
                                <label for="email">Email</label><br><br>

                                <input class="w3-input w3-half w3-border" type="text" placeholder="Password" id="password" name="password" required onkeyup='check();'>
                                <input class="w3-input w3-half w3-border" type="text" placeholder="Confirm Password" id="confirmpass" name="confirmpass" required onkeyup='check();'>
                                <label>Password <b><span class="w3-tag w3-pale-red w3-wide" id="message"></span></b></label><br><br>

                                <input class="w3-input w3-quarter w3-border" value="+86" type="text" placeholder="Code" id="phoneCountry" name="phoneCountry" disabled>
                                <input class="w3-input w3-threequarter w3-border" type="number" placeholder="Phone Number" id="phoneNo" name="phoneNo" required>
                                <label for="phoneNo">Phone Number</label>

                            </div>

                        <!-- Vis-a-Vis Information -->
                            <div class="w3-card su-theme w3-padding w3-round-large w3-margin-bottom">
                                <h5 class="su-theme w3-center"><i class="fa fa-fw fa-id-badge"></i> Vis-a-Vis Info</h5>

                                <div class="w3-container">
                                    <div class="w3-half w3-container">
                                        <input type="hidden" value="no" id="twoDeptChk" name="twoDeptChk">
                                        <input class="w3-check w3-center" type="checkbox" id="deptCheck" name="deptCheck" value="1" onclick="twoDeptCheck(this)"><label for="deptCheck"> Two Departments</label><br>
                                        <div class="w3-half">
                                            <select class="w3-select w3-border" id="dept01" name="dept01" required>
                                                <option value="" disabled selected>First Department</option>
                                                <option value="MKT">Marketing</option>
                                                <option value="IT">Information Technology</option>
                                                <option value="HR">Human Resources</option>
                                                <option value="SEC">Secretary</option>
                                                <option value="FIN">Finance</option>
                                                <option value="PRES">President Team</option>
                                            </select>
                                        </div>
                                        <div class="w3-half">
                                            <select class="w3-select w3-border" id="dept02" name="dept02" disabled>
                                            <option value="" disabled selected>Second Department</option>
                                            <option value="MKT">Marketing</option>
                                            <option value="IT">Information Technology</option>
                                            <option value="HR">Human Resources</option>
                                            <option value="SEC">Secretary</option>
                                            <option value="FIN">Finance</option>
                                            <option value="PRES">President Team</option>
                                        </select>
                                        </div><br><br>
                                        <label>Departments</label>
                                    </div>

                                    <div class="w3-half w3-container">
                                        <input type="hidden" value="no" id="twoProgChk" name="twoProgChk">
                                        <input class="w3-check w3-center" type="checkbox" id="progCheck" name="progCheck" value="1" onclick="twoProgCheck(this)"><label for="progCheck"> Two Programmes</label><br>
                                        <div class="w3-half">
                                            <select class="w3-select w3-border" id="prog01" name="prog01" required>
                                                <option value="" disabled selected>First Programme</option>
                                                <option value="BF">Bonne Fête</option>
                                                <option value="OLLE">OLLE</option>
                                                <option value="SEEK">SEEK</option>
                                                <option value="PACT">PACT</option>
                                                <option value="TRA">Travelling</option>
                                                <option value="BS">Buddy System</option>
                                                <option value="GOUK">Go~UK!</option>
                                            </select>
                                        </div>
                                        <div class="w3-half">
                                            <select class="w3-select w3-border" id="prog02" name="prog02" disabled>
                                                <option value="" disabled selected>Second Programme</option>
                                                <option value="BF">Bonne Fête</option>
                                                <option value="OLLE">OLLE</option>
                                                <option value="SEEK">SEEK</option>
                                                <option value="PACT">PACT</option>
                                                <option value="TRA">Travelling</option>
                                                <option value="BS">Buddy System</option>
                                                <option value="GOUK">Go~UK!</option>
                                            </select>
                                        </div><br><br>
                                        <label>Programmes</label>
                                    </div>
                                </div><br><br>
                            </div>
                        </div>

                    <!-- Right Bar -->
                        <div class="w3-half">
                            <div class="w3-card su-theme w3-padding w3-round-large w3-margin-bottom">
                                <h5 class="su-theme w3-center"><i class="fa fa-fw fa-address-card"></i> User Information</h5>
                                <input class="w3-input w3-half w3-border" type="text" placeholder="First Name" id="name-first" name="name-first" required>
                                <input class="w3-input w3-half w3-border" type="text" placeholder="Last Name" id="name-last" name="name-last" required>
                                <label for="name-first" class="w3-hide">English Name</label>
                                <label for="name-last" class="w3-hide">Chinese Name</label>
                                <label>Full Name</label><br><br>

                                <input class="w3-input w3-half w3-border" type="text" placeholder="English Name" id="name-en" name="name-en" required>
                                <input class="w3-input w3-half w3-border" type="text" placeholder="Chinese Name" id="name-ch" name="name-ch">
                                <label for="name-en" class="w3-hide">English Name</label>
                                <label for="name-ch" class="w3-hide">Chinese Name</label>
                                <label>Bilingual Name</label><br><br>

                                <select class="w3-select" name="gender" id="gender" required>
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="X">Other</option>
                                </select>
                                <label for="gender">Gender</label><br><br>

                                <input class="w3-input" type="date" placeholder="Date of Birth" id="dob" name="dob" required>
                                <label>Date of Birth</label><br><br>

                                <input class="w3-input" type="text" placeholder="University Major" id="unimajor" name="unimajor" required>
                                <select class="w3-select" name="uniyear" id="uniyear" required>
                                    <option value="" disabled selected>Select Grade</option>
                                    <option value="1">UG | Year 1</option>
                                    <option value="2">UG | Year 2</option>
                                    <option value="3">UG | Year 3</option>
                                    <option value="4">UG | Year 4</option>
                                    <option value="PG">Masters / PG</option>
                                    <option value="EX">Exchange</option>
                                </select>
                                <label>University Details</label><br><Br>


                                <div>
                                    <div class="w3-quarter">
                                    <input class="w3-input w3-border" type="number" placeholder="Building" id="building" name="building" required>
                                    </div><div class="w3-quarter">
                                    <input class="w3-input w3-border" type="number" placeholder="Room" id="room" name="room" required>
                                    </div><div class="w3-quarter">
                                    <select class="w3-select w3-border" id="bed" name="bed">
                                        <option value="" disabled selected>Select bed</option>
                                        <option value="0">Not Applicable</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    </div><div class="w3-quarter w3-center">
                                        <input type="hidden" value="no" id="isOffCampus" name="isOffCampus">
                                        <input class="w3-check" type="checkbox" value="offcampus" id="offcampus" name="offcampus" onclick="offCampusCheck(this)"><label for="offcampus"> Off-Campus</label><br><Br>
                                    </div>
                                </div>
                                <label>Address</label>

                            </div>
                        </div>

                        <button class="w3-button su-theme-d3 w3-hover-blue w3-bar w3-large w3-round" type="submit"><h5>Submit</h5></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer only in small screens -->
    <div class="w3-hide-large w3-hide-medium su-theme-d5 w3-center w3-padding-64 w3-bar">
        <a href="../">
            <img src="http://static.josephthenara.com/vav-media/img/attribute/vav_web_logo.svg" height="50">
        </a>
        <p>Vis-à-Vis Organisation</p>
        <p class="w3-small w3-panel su-theme-l1">VAV Account Management System v.1.0.0</p>
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

    // Tabs
    function accountNavigation(deptData) {
        var i;
        var x = document.getElementsByClassName("account-content");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(deptData).style.display = "block";
        document.getElementById(deptData).style.width = "100%";
    }

    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('confirmpass').value) {
            document.getElementById('message').classList.add("w3-text-green");
            document.getElementById('message').classList.add("w3-pale-green");
            document.getElementById('message').classList.remove("w3-text-red");
            document.getElementById('message').classList.remove("w3-pale-red");
            document.getElementById('message').innerHTML = 'match';
        } else {

            document.getElementById('message').classList.add("w3-text-red");
            document.getElementById('message').classList.add("w3-pale-red");
            document.getElementById('message').classList.remove("w3-text-green");
            document.getElementById('message').classList.remove("w3-pale-green");
            document.getElementById('message').innerHTML = 'does not match';
        }
    }

    // isOffCampus
    function offCampusCheck(ocCheck) {
        if (ocCheck.checked) {
            document.getElementById("building").disabled    = true;
            document.getElementById("room").disabled        = true;
            document.getElementById("bed").disabled         = true;
            document.getElementById("isOffCampus").value    = "yes";
        } else {
            document.getElementById("building").disabled    = false;
            document.getElementById("room").disabled        = false;
            document.getElementById("bed").disabled         = false;
            document.getElementById("isOffCampus").value    = "no";
        }
    }

    // isTwoDepartments
    function twoDeptCheck(tdCheck) {
        if (tdCheck.checked) {
            document.getElementById("dept02").disabled      = false;
            document.getElementById("twoDeptChk").value   = "yes";
        } else {
            document.getElementById("dept02").disabled      = true;
            document.getElementById("twoDeptChk").value   = "no";

        }
    }

    // isTwoProgrammes
    function twoProgCheck(tpCheck) {
        if (tpCheck.checked) {
            document.getElementById("prog02").disabled      = false;
            document.getElementById("twoProgChk").value   = "yes";
        } else {
            document.getElementById("prog02").disabled      = true;
            document.getElementById("twoProgChk").value   = "no";

        }
    }
</script>