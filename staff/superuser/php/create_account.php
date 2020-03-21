<?php
    include ($_SERVER["DOCUMENT_ROOT"]."/php/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Fetch Account Credential
        // To be fed into staff_login table
        $acc_username   =   testInput($_POST["username"]);
        $acc_password   =   testInput($_POST["password"]);

        // Fetch User Information and VAV Information
        // To be fed into staff_info table
        $user_firstname =   testInput($_POST["name-first"]);
        $user_lastname  =   testInput($_POST["name-last"]);
        $user_chname    =   testInput($_POST["name-ch"]);
        $user_enname    =   testInput($_POST["name-en"]);
        $user_email     =   testInput($_POST["email"]);
        $user_phone     =   testInput($_POST["phoneNo"]);
        $user_gender    =   testInput($_POST["gender"]);
        $user_dob       =   testInput($_POST["dob"]);
        $user_uniyear   =   testInput($_POST["uniyear"]);
        $user_unimajor  =   testInput($_POST["unimajor"]);

        if (testinput($_POST["isOffCampus"]) === "yes") {
            $user_roomno    =   "Off Campus";
        } else if ($_POST["bed"] === "0") {
            $user_roomno    =   testInput($_POST["building"])."#".testInput($_POST["room"]);
        } else {
            $user_roomno    =   testInput($_POST["building"])."#".testInput($_POST["room"])."-".testInput($_POST["bed"]);
        }

        $user_vav_dept_1    =   testInput($_POST["dept01"]);
        if (testInput($_POST["twoDeptChk"]) === "yes") {
            $user_vav_dept_2    =   testInput($_POST["dept02"]);
        } else {
            $user_vav_dept_2    =   "";
        }

        $user_vav_prog_1    =   testInput($_POST["prog01"]);
        if (testInput($_POST["twoProgChk"]) === "yes") {
            $user_vav_prog_2    =   testInput($_POST["prog02"]);
        } else {
            $user_vav_prog_2    =   "";
        }

        $acc_query  =   "INSERT INTO staff_login (username, password) VALUES ('$acc_username', '$acc_password')";
        $user_query =   "INSERT INTO staff_info (
                              staff_username, staff_firstname, staff_lastname, staff_en_name, staff_ch_name, staff_dob, staff_email, 
                              staff_gender, staff_uniyear, staff_unimajor, staff_phone, staff_roomno,
                              staff_dept01, staff_dept02, staff_prog01, staff_prog02
                          ) 
                          VALUES (
                              '$acc_username', '$user_firstname', '$user_lastname', '$user_enname', '$user_chname', '$user_dob', '$user_email', 
                              '$user_gender', '$user_uniyear', '$user_unimajor', '$user_phone', '$user_roomno',
                              '$user_vav_dept_1', '$user_vav_dept_2', '$user_vav_prog_1', '$user_vav_prog_2'
                           )";

        if (mysqli_query($conn, $acc_query)) {
            if (mysqli_query($conn, $user_query)) {
                header("Location:" . $_SERVER['REQUEST_URI']);
                exit();
            } else {
                die('Error: '.$conn->query($user_query));
            }
        } else {
            die('Error: '.$conn->query($acc_query));
        }

            //echo "2DEPT:$_POST[twoDeptChk]; 2PROG;$_POST[twoProgChk]";
        //echo "$acc_username $user_chname $user_unimajor $user_dob $user_uniyear $user_roomno $user_gender $user_vav_dept_1 $user_vav_dept_2 $user_vav_prog_1 $user_vav_prog_2";


    }

    function testInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>