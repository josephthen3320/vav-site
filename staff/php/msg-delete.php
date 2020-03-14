<?php
    include ("config.php");

    $msgID  =   $_GET['msgID'];

    echo "$msgID";

    $msgSelectRecord = "SELECT * FROM messages WHERE msg_id=$msgID";
    $msgSelectQuery = $conn->query($msgSelectRecord);
    $msgSelectRow = $msgSelectQuery->fetch_array();

    echo "$msgSelectRow[msg_name]";

    $delErr = "";

    $delSql =   "DELETE FROM messages WHERE msg_id = $msgID";

    if (mysqli_query($conn, $delSql)) {
        mysqli_close($conn);
        header('Location: ../inbox.php');
        exit;
    } else {
        $delErr = "Error deleting message record.";
    }
?>