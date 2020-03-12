<!DOCTYPE html>
<html>
<title>V-Prog: SEEK (formerly Home Stay)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/color-theme.css">
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
        background-image: url("img/bg01.jpg");
        min-height: 75%;
    }

    .menu {
        display: none;
    }
</style>

<body class="w3-theme-l5">
<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-theme-d5 w3-card" id="myNavbar">

        <a class="w3-bar-item w3-button w3-hover-theme w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>

        <a href="../index.php" class="w3-bar-item w3-button w3-theme-d5 w3-hover-theme"><i class="fa fa-home"></i> HOME</a>
        <a href="../index.php#about" class="w3-bar-item w3-button w3-theme-d5 w3-hover-theme w3-hide-small"><i class="fa fa-users"></i> ABOUT</a>
        <a href="../index.php#dept" class="w3-bar-item w3-button w3-theme-d5 w3-hover-theme w3-hide-small"><i class="fa fa-heart"></i> DEPARTMENTS</a>
        <a href="../index.php#prog" class="w3-bar-item w3-button w3-theme-d5 w3-hover-theme w3-hide-small"><i class="fa fa-star"></i> PROGRAMMES</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="../index.php#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
        <a href="../index.php#dept" class="w3-bar-item w3-button" onclick="toggleFunction()">DEPARTMENTS</a>
        <a href="../index.php#prog" class="w3-bar-item w3-button" onclick="toggleFunction()">PROGRAMMES</a>
    </div>
</div>

<!-- Content -->
    <!-- Left Bar -->
    <div class="w3-container w3-quarter w3-padding-64">
        <div class="w3-bar-block w3-theme">
            <div class="w3-bar-item w3-button" onclick="deptNavigation('info')">
                <h6>Information</h6>
            </div>
            <div class="w3-bar-item w3-button" onclick="deptNavigation('struc')">
                <h6>Programme Structure</h6>
            </div>
            <div class="w3-bar-item w3-button" onclick="deptNavigation('members')">
                <h6>Members</h6>
            </div>
            <div class="w3-bar-item w3-button" onclick="deptNavigation('work')">
                <h6>Portfolio</h6>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="w3-container w3-half">
        <!-- Programme Label and Slogan -->
        <div class="w3-content w3-padding-64 w3-center v-prog-content" style="max-width:700px" id="info">
            <h4 class="w3-center"><span class="w3-tag w3-wide w3-theme-l1">HOME STAY</span></h4>
            <p class="w3-center w3-large">Authenticity in Cultural Experiences</p>
            <img class="w3-image" src="../img/progs/HS.jpg" width="75%">
            <br><br>
            <p class="w3-left-align">Home Stay programme provides opportunities for both international and domestic student
            to experience authentic Chinese lifestyle and cultures. We facilitate students to find home stay partners
            through our various, carefully designed activities. We also oversee the implementation of each home stay
            experience.</p>
            <br><br><br><br>
            <div class="w3-container w3-pale-red w3-card-2 w3-round-medium">
                <h5 class="w3-text-red"><span class="w3-tag">FYI!</span> <b>Home Stay programme is currently undergoing big changes!</b></h5>
                <p>We are redefining and rebranding the Home Stay Programme! <br>Stay tuned for major changes in the programme!</p>
            </div>
        </div>

        <!-- Programme Descriptions -->

        <div class="w3-content w3-padding-64 v-prog-content w3-center" id="struc" style="display:none">
            <h4 class="w3-center"><span class="w3-tag w3-wide w3-theme-l1">HOME STAY</span></h4>
            <h5>Programme Structure</h5><br>
            <h6 class="w3-left-align"><b>Managers:</b> Emiliana</h6>
        </div>

        <div class="w3-content w3-padding-64 v-prog-content w3-center" id="members" style="display:none">
            <h4 class="w3-center"><span class="w3-tag w3-wide w3-theme-l1">HOME STAY</span></h4>
            <h5>Programme Members</h5><br>
            <h6 class="w3-left-align"><b>Members:</b></h6>
        </div>

        <div class="w3-content w3-padding-64 v-prog-content w3-center" id="work" style="display:none">
            <h4 class="w3-center"><span class="w3-tag w3-wide w3-theme-l1">HOME STAY</span></h4>
            <h5>Portfolio</h5><br>
            <h6 class="w3-left-align">PLACHOLDER FOR PORTFOLIO DATA</h6>
        </div>
    </div>

    <!-- Right Bar -->
    <div class="w3-container w3-quarter w3-padding-64">
        <div class="w3-bar-block w3-theme">
            <a href="buddy-system.php" class="w3-bar-item w3-button">
                <h6>Buddy System | BS</h6>
            </a>
            <a href="olle.php" class="w3-bar-item w3-button">
                <h6>Online Language Learning Exchange | OLLE</h6>
            </a>
            <a href="bonne-fete.php" class="w3-bar-item w3-button">
                <h6>Bonne Fête | BF</h6>
            </a>
            <a href="home-stay.php" class="w3-bar-item w3-button w3-theme-l3">
                <h6>Home Stay | HS</h6>
            </a>
            <a href="pact.php" class="w3-bar-item w3-button">
                <h6>Project for Autonomy Communication and Teamwork | PACT</h6>
            </a>
            <a href="go-uk.php" class="w3-bar-item w3-button">
                <h6>Go~UK!</h6>
            </a>
            <a href="travelling.php" class="w3-bar-item w3-button">
                <h6>Travelling | Tra</h6>
            </a>

        </div>
    </div>


</body>
</html>

<script>
    // Tabbed Menu
    function openMenu(evt, menuName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("menu");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
        }
        document.getElementById(menuName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-dark-grey";
    }
    document.getElementById("myLink").click();

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
    function deptNavigation(deptData) {
        var i;
        var x = document.getElementsByClassName("v-prog-content");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(deptData).style.display = "block";
    }
</script>