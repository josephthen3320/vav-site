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
    $staff_email        =   $staff_info_result['staff_email'];
    $staff_dept01       =   $staff_info_result['staff_dept01'];
    $staff_dept02       =   $staff_info_result['staff_dept02'];
    $staff_prog01       =   $staff_info_result['staff_prog01'];
    $staff_prog02       =   $staff_info_result['staff_prog02'];
    $staff_gender       =   $staff_info_result['staff_gender'];
    $staff_uniyear      =   $staff_info_result['staff_uniyear'];
    $staff_unimajor     =   $staff_info_result['staff_unimajor'];
    $staff_phone        =   $staff_info_result['staff_phone'];
    $staff_roomno       =   $staff_info_result['staff_roomno'];

?>