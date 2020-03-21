<?php
    require ("php/config.php");
?>

<!DOCTYPE html>
<html>
<title>The Vis-à-Vis Organization</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://static.josephthenara.com/vav-media/css/w3.css">
<link rel="stylesheet" href="http://static.josephthenara.com/vav-media/css/color-theme.css">
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
        background-image: url("http://static.josephthenara.com/vav-media/img/homepage/bg_01.jpg");
        min-height: 75%;
    }

    .menu {
        display: none;
    }

    .full-screen{
        height: 100%;
    }
</style>

<php>
    <?php
        // Form values initialization
        $nameErr = $emailErr = $contentErr = "";
        $name = $email = $content = "";

        // Fetch form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Name field validation
            if (empty($_POST["msg_name"])) {
                $nameErr    =   "Please fill in your name.";
            } else {
                $name       =   testInput($_POST["msg_name"]);
                // Validation routine for name
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr    =   "Only letters and white space allowed.";
                } else {
                    // Email field validation
                    if (empty($_POST["msg_email"])) {
                        $emailErr   =   "Please fill in your email.";
                    } else {
                        $email      =   testInput($_POST["msg_email"]);
                        // Check for valid email format
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $emailErr   =   "Invalid email format.";
                        } else {
                            // Validation for message content
                            if (empty($_POST["msg_content"])) {
                                $contentErr =   "Please fill in your message.";
                            } else {
                                $content    =   testInput($_POST["msg_content"]);

                                // Validation cleared, form will be submitted
                                $msg_sql = "INSERT INTO messages (msg_name, msg_email, msg_content) VALUES ('$name', '$email', '$content')";

                                // Check if mysql processing completed
                                if (mysqli_query($conn, $msg_sql)) {
                                    // No further action required. Form Submitted.
                                    header("Location: " . $_SERVER['REQUEST_URI']);
                                    exit();
                                } else {
                                    formAlert("It's not you - it's us. Form submission failed, please try again later.");
                                }
                            }
                        }
                    }
                }
            }

        }

        function testInput($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        function formAlert($alert_msg) {
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    ?>
</php>

<body class="w3-theme-l5">

<!-- Links (sit on top) -->

<div class="w3-top w3-medium">
    <div class="w3-bar w3-theme-d5 w3-card w3-animate-top" id="myNavbar">

        <a class="w3-bar-item w3-button w3-hover-theme w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>

        <a href="#" class="w3-bar-item w3-button w3-theme-d5 w3-hover-theme"><i class="fa fa-home"></i> HOME</a>
        <a href="#about" class="w3-bar-item w3-button w3-theme-d5 w3-hover-theme w3-hide-small"><i class="fa fa-users"></i> ABOUT</a>
        <a href="#dept" class="w3-bar-item w3-button w3-theme-d5 w3-hover-theme w3-hide-small"><i class="fa fa-heart"></i> DEPARTMENTS</a>
        <a href="#prog" class="w3-bar-item w3-button w3-theme-d5 w3-hover-theme w3-hide-small"><i class="fa fa-star"></i> PROGRAMMES</a>
        <a href="staff/dashboard.php" class="w3-bar-item w3-button w3-theme-d5 w3-hover-theme w3-right w3-hide-small">STAFF AREA <i class="fa fa-sign-in"></i></a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d3 w3-hide w3-hide-large w3-hide-medium w3-animate-top">
        <a href="#about" class="w3-bar-item w3-button w3-hover-theme" onclick="toggleFunction()">ABOUT</a>
        <a href="#dept" class="w3-bar-item w3-button w3-hover-theme" onclick="toggleFunction()">DEPARTMENTS</a>
        <a href="#prog" class="w3-bar-item w3-button w3-hover-theme" onclick="toggleFunction()">PROGRAMMES</a>
        <a href="staff/dashboard.php" class="w3-bar-item w3-button w3-hover-theme" onclick="toggleFunction()">STAFF AREA</a>

    </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min full-screen" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
        <span class="w3-tag">An organization of The University of Nottingham Ningbo China</span>
    </div>
    <div class="w3-display-middle w3-center">
        <span class="w3-text-white w3-hide-small w3-animate-bottom w3-animate-opacity" style="font-size:90px; text-shadow: 1px 1px 0 black"><b>vis-à-vis</b></span>
        <span class="w3-text-white w3-hide-medium w3-hide-large w3-animate-bottom w3-animate-opacity" style="font-size:35px; text-shadow: 1px 1px 0 black"><b>vis-à-vis</b></span>
        <h3 class="w3-text-white w3-hide-small w3-animate-top w3-animate-opacity" style="text-shadow: 1px 1px 0 black;"><em>Making Connections</em></h3>
        <h3 class="w3-text-white w3-hide-large w3-hide-medium w3-animate-top w3-animate-opacity" style="font-size:15px; shadow: 1px 1px 0 black;"><em>Making Connections</em></h3>

    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large w3-hide-small">
        <span class="w3-text-white">199 Taikang East Road, Ningbo, China</span>
    </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-large">

<!-- About Container -->
    <div class="w3-container" id="about">
        <div class="w3-content" style="max-width:700px">
        <br>
            <h4 class="w3-center w3-padding-64"><span class="w3-tag w3-wide w3-theme-l1">ABOUT VAV</span></h4>
            <h4><strong class="w3-text-theme">Vis-à-Vis</strong> -prep. /ˌvēzəˈvē/</h4><h6>- from French</h6>
            <h5>1  : (to be) face-to-face with</h5>
            <h5>2  : in relation to</h5>
            <hr>
            <p>
                <b>The Vis-à-Vis Organisation (VAV)</b>, established in 2004, aims to provide a variety of services to students
                in The University of Nottingham Ningbo China (UNNC).
            </p>
            <p>
                To support our goal of "making connections", VAV has adopted the <b>English language</b> as our official language
                for cross-cultural interactions between members and students.
            </p>
            <p>
                We are proud that nearly <b>a quarter</b> of our staffs are international students!
            </p>
            <p>
        </div>
    </div>

<!-- Department Section -->
    <div class="w3-container" style="padding:128px 16px;" id="dept">

        <h4 class="w3-center"><span class="w3-tag w3-wide w3-theme-l1">DEPARTMENTS</span></h4>
        <p class="w3-center w3-large">The people who manage VAV</p>

    <!-- Department buttons -->
        <div class="w3-row-padding" style="margin-top: 64px">

            <!-- Marketing -->
                <div class="w3-third w3-margin-bottom">
                    <div class="w3-display-container w3-card" style="width: 100%;">
                        <a href="v-departments/marketing.php" class="w3-hover-opacity">
                            <img class="w3-round" src="http://static.josephthenara.com/vav-media/img/department/Marketing_01.jpg" width="100%">
                            <h4 class="w3-display-bottommiddle w3-center w3-display-hover w3-theme w3-bar w3-panel w3-hide-small">MARKETING</h4>
                            <h5 class="w3-display-bottommiddle w3-center w3-theme w3-bar w3-panel w3-hide-large w3-hide-medium">MARKETING</h5>
                        </a>
                        
                    </div>
                </div>

            <!-- Infotech -->
                <div class="w3-third w3-margin-bottom">
                    <div class="w3-display-container w3-card" style="width: 100%;">
                        <a href="v-departments/marketing.php" class="w3-hover-opacity">
                            <img class="w3-round" src="http://static.josephthenara.com/vav-media/img/department/InfoTech_01.jpg" width="100%">
                            <h4 class="w3-display-bottommiddle w3-center w3-display-hover w3-theme w3-bar w3-panel w3-hide-small">INFORMATION TECHNOLOGY</h4>
                            <h5 class="w3-display-bottommiddle w3-center w3-theme w3-bar w3-panel w3-hide-large w3-hide-medium">INFORMATION TECHNOLOGY</h5>
                        </a>
                        
                    </div>
                </div>

            <!-- Human Resources -->
                <div class="w3-third w3-margin-bottom">
                    <div class="w3-display-container w3-card" style="width: 100%;">
                        <a href="v-departments/marketing.php" class="w3-hover-opacity">
                            <img class="w3-round" src="http://static.josephthenara.com/vav-media/img/department/HumanResources_01.jpg" width="100%">
                            <h4 class="w3-display-bottommiddle w3-center w3-display-hover w3-theme w3-bar w3-panel w3-hide-small">HUMAN RESOURCES</h4>
                            <h5 class="w3-display-bottommiddle w3-center w3-theme w3-bar w3-panel w3-hide-large w3-hide-medium">HUMAN RESOURCES</h5>
                        </a>
                        
                    </div>
                </div>

            <!-- Secretary -->
                <div class="w3-third w3-margin-bottom">
                    <div class="w3-display-container w3-card" style="width: 100%;">
                        <a href="v-departments/marketing.php" class="w3-hover-opacity">
                            <img class="w3-round" src="http://static.josephthenara.com/vav-media/img/department/Secretary_01.jpg" width="100%">
                            <h4 class="w3-display-bottommiddle w3-center w3-display-hover w3-theme w3-bar w3-panel w3-hide-small">SECRETARY</h4>
                            <h5 class="w3-display-bottommiddle w3-center w3-theme w3-bar w3-panel w3-hide-large w3-hide-medium">SECRETARY</h5>
                        </a>
                        
                    </div>
                </div>

            <!-- Finance -->
                <div class="w3-third w3-margin-bottom">
                    <div class="w3-display-container w3-card" style="width: 100%;">
                        <a href="v-departments/marketing.php" class="w3-hover-opacity">
                            <img class="w3-round" src="http://static.josephthenara.com/vav-media/img/department/Finance_01.jpg" width="100%">
                            <h4 class="w3-display-bottommiddle w3-center w3-display-hover w3-theme w3-bar w3-panel w3-hide-small">FINANCE</h4>
                            <h5 class="w3-display-bottommiddle w3-center w3-theme w3-bar w3-panel w3-hide-large w3-hide-medium">FINANCE</h5>
                        </a>
                        
                    </div>
                </div>

            <!-- President Team -->
                <div class="w3-third w3-margin-bottom">
                    <div class="w3-display-container w3-card" style="width: 100%;">
                        <a href="v-departments/marketing.php" class="w3-hover-opacity">
                            <img class="w3-round" src="http://static.josephthenara.com/vav-media/img/department/PresidentTeam_01.jpg" width="100%">
                            <h4 class="w3-display-bottommiddle w3-center w3-display-hover w3-theme w3-bar w3-panel w3-hide-small">PRESIDENT TEAM</h4>
                            <h5 class="w3-display-bottommiddle w3-center w3-theme w3-bar w3-panel w3-hide-large w3-hide-medium">PRESIDENT TEAM</h5>
                        </a>
                        
                    </div>
                </div>
                <!--div class="w3-card w3-theme-l1 w3-hover-theme w3-button w3-round-large" style="width: 100%;">
                    <h2 class="w3-hide-small w3-hide-medium">INFORMATION TECHNOLOGY</h2>
                    <h2 class="w3-hide-large">IT</h2>
                </div-->
            </div>

        <!-- Obsolete Department Cards
            <div class="w3-row-padding" style="margin-top:64px">
                <div class="w3-quarter l2 m6 w3-margin-bottom">
                    <div class="w3-card">
                        <img src="http://static.josephthenara.com/vav-media/img/department/Marketing_01.jpg" alt="marketing" style="width:100%">
                        <div class="w3-container">
                            <h3>Marketing (MKT)</h3>
                            <p class="w3-opacity">Monika & Sia</p>
                            <p>
                                Establishing an influential branding for VAV through effective marketing.<br><br>
                            </p>
                            <p><a href="v-departments/marketing.php" class="w3-button w3-light-grey w3-block"><i class="fa fa-share"></i> Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter l2 m6 w3-margin-bottom">
                    <div class="w3-card">
                        <img src="http://static.josephthenara.com/vav-media/img/department/InfoTech_01.jpg" alt="IT" style="width:100%">
                        <div class="w3-container">
                            <h3>Information Tech. (IT)</h3>
                            <p class="w3-opacity">Iris & Yuki</p>
                            <p>
                                Providing necessary technological assistance, quality graphic design and videos for promotion.
                            </p>
                            <p><a href="v-departments/information-technology.php" class="w3-button w3-light-grey w3-block"><i class="fa fa-share"></i> Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter l2 m6 w3-margin-bottom">
                    <div class="w3-card">
                        <img src="http://static.josephthenara.com/vav-media/img/department/HumanResources_01.jpg" alt="Human Resources" style="width:100%">
                        <div class="w3-container">
                            <h3>Human Resources (HR)</h3>
                            <p class="w3-opacity">Oscar</p>
                            <p>
                                Managing efficiency and internal cohesion by optimising human resources.<br><br>
                            </p>
                            <p><a href="v-departments/human-resources.php" class="w3-button w3-light-grey w3-block"><i class="fa fa-share"></i> Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter l2 m6 w3-margin-bottom">
                    <div class="w3-card">
                        <img src="http://static.josephthenara.com/vav-media/img/department/Secretary_01.jpg" alt="Secretary" style="width:100%">
                        <div class="w3-container">
                            <h3>Secretary (Sec)</h3>
                            <p class="w3-opacity">Antone</p>
                            <p>
                                Handling secretarial tasks, paperwork and internal communication.<br><br>
                            </p>
                            <p><a href="v-departments/secretary.php" class="w3-button w3-light-grey w3-block"><i class="fa fa-share"></i> Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter l2 m6 w3-margin-bottom">
                    <div class="w3-card">
                        <img src="http://static.josephthenara.com/vav-media/img/department/Finance_01.jpg" alt="Finance" style="width:100%">
                        <div class="w3-container">
                            <h3>Finance (Fin)</h3>
                            <p class="w3-opacity">Lydia</p>
                            <p>
                                Standardising and institutionalising financial and resources management.<br><br>
                            </p>
                            <p><a href="v-departments/finance.php" class="w3-button w3-light-grey w3-block"><i class="fa fa-share"></i> Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter l2 m6 w3-margin-bottom">
                    <div class="w3-card">
                        <img src="http://static.josephthenara.com/vav-media/img/department/PresidentTeam_01.jpg" alt="Presidents" style="width:100%">
                        <div class="w3-container">
                            <h3>President Team</h3>
                            <p class="w3-opacity">Henry, Lucie, Sam, Maggie</p>
                            <p>
                                Overseeing and advising the organisation in its regular activities.<br><br>
                            </p>
                            <p><a href="v-departments/president-team.php" class="w3-button w3-light-grey w3-block"><i class="fa fa-share"></i> Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
    -->
    </div>

    <!-- Programme Section -->
    <div class="w3-container" style="padding:128px 16px" id="prog">

        <h4 class="w3-center"><span class="w3-tag w3-wide w3-theme-l1">PROGRAMMES</span></h4>
        <p class="w3-center w3-large">Coloring your university life</p>

    <!-- Programme Buttons -->
        <div class="w3-row-padding" style="margin-top: 64px;">

            <!-- OLLE -->
            <div class="w3-third w3-margin-bottom">
                <div class="w3-display-container w3-card" style="width: 100%;">
                    <a href="v-programmes/olle.php" class="w3-hover-opacity">
                        <img class="w3-round" src="http://static.josephthenara.com/vav-media/img/programme/OLLE_01.jpg" width="100%">
                        <h4 class="w3-display-bottommiddle w3-center w3-display-hover w3-theme w3-bar w3-panel w3-hide-small">ONLINE LANGUAGE LEARNING EXCHANGE (OLLE)</h4>
                        <h5 class="w3-display-bottommiddle w3-center w3-theme w3-bar w3-panel w3-hide-large w3-hide-medium">OLLE</h5>
                    </a>
                </div>
            </div>

            <!-- SEEK -->
            <div class="w3-third w3-margin-bottom">
                <div class="w3-display-container w3-card" style="width: 100%;">
                    <a href="v-programmes/home-stay.php" class="w3-hover-opacity">
                        <img class="w3-round" src="http://static.josephthenara.com/vav-media/img/programme/HomeStay_01.jpg" width="100%">
                        <h4 class="w3-display-bottommiddle w3-center w3-display-hover w3-theme w3-bar w3-panel w3-hide-small">SEEK</h4>
                        <h5 class="w3-display-bottommiddle w3-center w3-theme w3-bar w3-panel w3-hide-large w3-hide-medium">SEEK</h5>
                    </a>
                </div>
            </div>

            <!-- Bonne Fete -->
            <div class="w3-third w3-margin-bottom">
                <div class="w3-display-container w3-card" style="width: 100%;">
                    <a href="v-programmes/olle.php" class="w3-hover-opacity">
                        <img class="w3-round" src="http://static.josephthenara.com/vav-media/img/programme/BonneFete_01.jpg" width="100%">
                        <h4 class="w3-display-bottommiddle w3-center w3-display-hover w3-theme w3-bar w3-panel w3-hide-small">BONNE FÊTE</h4>
                        <h5 class="w3-display-bottommiddle w3-center w3-theme w3-bar w3-panel w3-hide-large w3-hide-medium">BONNE FÊTE</h5>
                    </a>
                </div>
            </div>

            <!-- Buddy System -->
            <div class="w3-third w3-margin-bottom">
                <div class="w3-display-container w3-card" style="width: 100%;">
                    <a href="v-programmes/home-stay.php" class="w3-hover-opacity">
                        <img class="w3-round" src="http://static.josephthenara.com/vav-media/img/programme/BuddySystem_01.jpg" width="100%">
                        <h4 class="w3-display-bottommiddle w3-center w3-display-hover w3-theme w3-bar w3-panel w3-hide-small">BUDDY SYSTEM</h4>
                        <h5 class="w3-display-bottommiddle w3-center w3-theme w3-bar w3-panel w3-hide-large w3-hide-medium">BUDDY SYSTEM</h5>
                    </a>
                </div>
            </div>

            <!-- PACT -->
            <div class="w3-third w3-margin-bottom">
                <div class="w3-display-container w3-card" style="width: 100%;">
                    <a href="v-programmes/home-stay.php" class="w3-hover-opacity">
                        <img class="w3-round" src="http://static.josephthenara.com/vav-media/img/programme/PACT_01.jpg" width="100%">
                        <h4 class="w3-display-bottommiddle w3-center w3-display-hover w3-theme w3-bar w3-panel w3-hide-small">PACT</h4>
                        <h5 class="w3-display-bottommiddle w3-center w3-theme w3-bar w3-panel w3-hide-large w3-hide-medium">PACT</h5>
                    </a>
                </div>
            </div>

            <!-- Travelling -->
            <div class="w3-third w3-margin-bottom">
                <div class="w3-display-container w3-card" style="width: 100%;">
                    <a href="v-programmes/home-stay.php" class="w3-hover-opacity">
                        <img class="w3-round" src="http://static.josephthenara.com/vav-media/img/programme/Travelling_01.jpg" width="100%">
                        <h4 class="w3-display-bottommiddle w3-center w3-display-hover w3-theme w3-bar w3-panel w3-hide-small">TRAVELLING</h4>
                        <h5 class="w3-display-bottommiddle w3-center w3-theme w3-bar w3-panel w3-hide-large w3-hide-medium">TRAVELLING</h5>
                    </a>
                </div>
            </div>

            <!-- Go~UK! -->
            <div class="w3-third w3-margin-bottom">
                <div class="w3-display-container w3-card" style="width: 100%;">
                    <a href="v-programmes/home-stay.php" class="w3-hover-opacity">
                        <img class="w3-round" src="http://static.josephthenara.com/vav-media/img/programme/GoUK_01.jpg" width="100%">
                        <h4 class="w3-display-bottommiddle w3-center w3-display-hover w3-theme w3-bar w3-panel w3-hide-small">GO~UK!</h4>
                        <h5 class="w3-display-bottommiddle w3-center w3-theme w3-bar w3-panel w3-hide-large w3-hide-medium">GO~UK!</h5>
                    </a>
                </div>
            </div>



        </div>
        <!--div class="w3-row-padding" style="margin-top:64px">
            <div class="w3-quarter l2 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="http://static.josephthenara.com/vav-media/img/programme/BuddySystem_01.jpg" alt="Buddy System" style="width:100%">
                    <div class="w3-container">
                        <h3>Buddy System (BS)</h3>
                        <p class="w3-opacity">Smile</p>
                        <p>
                            Connecting international and domestic students through fun activities.<br><br>
                        </p>
                        <p><a href="v-programmes/buddy-system.php" class="w3-button w3-light-grey w3-block"><i class="fa fa-share"></i> Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="w3-quarter l2 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="http://static.josephthenara.com/vav-media/img/programme/OLLE_01.jpg" alt="Online Language Learning Exchange" style="width:100%">
                    <div class="w3-container">
                        <h3>OLLE</h3>
                        <p class="w3-opacity">Clara</p>
                        <p>
                            Providing platform for your language learning through peer supports.<br><br>
                        </p>
                        <p><a href="v-programmes/olle.php" class="w3-button w3-light-grey w3-block"><i class="fa fa-share"></i> Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="w3-quarter l2 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="http://static.josephthenara.com/vav-media/img/programme/BonneFete_01.jpg" alt="Bonne Fête" style="width:100%">
                    <div class="w3-container">
                        <h3>Bonne Fête (BF)</h3>
                        <p class="w3-opacity">Freya</p>
                        <p>
                            Celebrating multi-cultural festivals to encourage cross-border friendships.<br><br>
                        </p>
                        <p><a href="v-programmes/bonne-fete.php" class="w3-button w3-light-grey w3-block"><i class="fa fa-share"></i> Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="w3-quarter l2 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="http://static.josephthenara.com/vav-media/img/programme/HomeStay_01.jpg" alt="Home Stay" style="width:100%">
                    <div class="w3-container">
                        <h3>Home Stay (HS)</h3>
                        <p class="w3-opacity">Emiliana</p>
                        <p>
                            Experiencing authentic local lifestyles and cultures.<br><br>
                        </p>
                        <p><a href="v-programmes/home-stay.php" class="w3-button w3-light-grey w3-block"><i class="fa fa-share"></i> Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="w3-quarter l2 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="http://static.josephthenara.com/vav-media/img/programme/PACT_01.jpg" alt="PACT" style="width:100%">
                    <div class="w3-container">
                        <h3>PACT</h3>
                        <p class="w3-opacity">Mia</p>
                        <p>
                            Developing oral English skills through senior-freshman partnership.<br><br>
                        </p>
                        <p><a href="v-programmes/pact.php" class="w3-button w3-light-grey w3-block"><i class="fa fa-share"></i> Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="w3-quarter l2 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="http://static.josephthenara.com/vav-media/img/programme/GoUK_01.jpg" alt="Go UK!" style="width:100%">
                    <div class="w3-container">
                        <h3>Go~UK!</h3>
                        <p class="w3-opacity">Wendy</p>
                        <p>
                            Providing platforms for exchange-related information.<br><br>
                        </p>
                        <p><a href="v-programmes/go-uk.php" class="w3-button w3-light-grey w3-block"><i class="fa fa-share"></i> Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="w3-quarter l2 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="http://static.josephthenara.com/vav-media/img/programme/Travelling_01.jpg" alt="Travelling" style="width:100%">
                    <div class="w3-container">
                        <h3>Travelling (Tra)</h3>
                        <p class="w3-opacity">Lilian</p>
                        <p>
                            Creating opportunities to travel around China's most famous spots.<br><br>
                        </p>
                        <p><a href="v-programmes/travelling.php" class="w3-button w3-light-grey w3-block"><i class="fa fa-share"></i> Learn More</a></p>
                    </div>
                </div>
            </div>
        </div-->
    </div>

    <!-- Learn More/Area Container -->
    <div class="w3-container" id="where" style="padding-bottom:32px;">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide w3-theme-l1">WHERE TO FIND US</span></h5>
            <p>The one and only place to find us: </p>
            <img src="http://static.josephthenara.com/vav-media/img/homepage/unnc-trent.jpg" class="w3-image" style="width:100%">
            <p><span class="w3-tag">FYI!</span> The Vis-à-Vis Organization is only available in The University of Nottingham Ningbo China (UNNC) Campus!</p>
<hr />
            <p><strong>Inquire</strong> about us, our events or just swing by for a cup of <i class="fa fa-coffee"></i> : </p>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>">
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="msg_name"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email Address" required name="msg_email"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Your message / inquiry" required name="msg_content"></p>
                <span class="error w3-text-red"><?php echo $nameErr; echo $emailErr; echo $contentErr; ?></span>
                <p><button class="w3-button w3-black" type="submit" name="submitBtn">SEND MESSAGE</button></p>
            </form>

        </div>
    </div>

    <!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-padding-48 w3-large w3-theme">
    <div>
        <a href="https://weibo.com/unncavavorgnization" target="_blank"><i class="fa fa-weibo"></i></a>
        <a href="https://www.instagram.com/vav_unnc" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    </div>
    <p>© 2020 - The Vis-à-Vis Organization</p>
</footer>



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
</script>