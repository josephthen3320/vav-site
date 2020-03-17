<?php
    $msg_no = $msg_total    =   0;

    $inbox_query        =   "SELECT * FROM messages";
    $inbox_result       =   $conn->query($inbox_query);

    $inbox_unread_query =   "SELECT * FROM messages WHERE msg_read = FALSE";
    $unread_result      =   $conn->query($inbox_unread_query);

    $inbox_read_query  =   "SELECT * FROM messages WHERE msg_read = TRUE";
    $read_result        =   $conn->query($inbox_read_query);

    $inbox_trash_query  =   "SELECT * FROM messages WHERE msg_trash = TRUE";
    $trash_result       =   $conn->query($inbox_trash_query);

    $msg_total_count    =   mysqli_num_rows($inbox_result);
    $msg_total_unread   =   mysqli_num_rows($unread_result);
    $msg_total_read     =   mysqli_num_rows($read_result);
    $msg_total_trash    =   mysqli_num_rows($trash_result);

?>