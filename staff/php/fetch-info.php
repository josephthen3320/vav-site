<?php
    include ('config.php');

    // Load database
    $staff_info_fetch   =   "SELECT * FROM staff_info WHERE staff_username='$username'";
    $staff_info_query   =   $conn->query($staff_info_fetch);
    $staff_info_result  =   $staff_info_query->fetch_array();

    // Fetch Data from Database
    $staff_lastname     =   $staff_info_result['staff_lastname'];
    $staff_firstname    =   $staff_info_result['staff_firstname'];
    $staff_ch_name      =   $staff_info_result['staff_ch_name'];
    $staff_en_name      =   $staff_info_result['staff_en_name'];
    $staff_dob          =   $staff_info_result['staff_dob'];

    $dob_convert        =   date("d M Y", strtotime($staff_dob));


    $staff_email        =   $staff_info_result['staff_email'];
    $staff_dept01       =   $staff_info_result['staff_dept01'];
    $staff_dept02       =   $staff_info_result['staff_dept02'];
    $staff_prog01       =   $staff_info_result['staff_prog01'];
    $staff_prog02       =   $staff_info_result['staff_prog02'];

    $staff_gender       =   $staff_info_result['staff_gender'];

    if ($staff_gender == 'F') {
        $gender_text = "Female";
        $gender_icon = "<i class='fa fa-venus w3-text-pink'></i>";
    } else if ($staff_gender == 'M') {
        $gender_text = "Male";
        $gender_icon = "<i class='fa fa-mars w3-text-light-blue'></i>";
    } else {
        $gender_text = "Unknown";
        $gender_icon = "<i class='fa fa-neuter w3-text-orange'></i>";
    }

    $staff_uniyear      =   $staff_info_result['staff_uniyear'];
    $staff_unimajor     =   $staff_info_result['staff_unimajor'];
    $staff_phone        =   $staff_info_result['staff_phone'];
    $staff_roomno       =   $staff_info_result['staff_roomno'];

?>