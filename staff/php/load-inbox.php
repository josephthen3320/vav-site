<?php
$msg_no         =   0;

$inbox_query    =   "SELECT * FROM messages";
$inbox_result   =   $conn->query($inbox_query);

while ($row = $inbox_result->fetch_array()) {
    $msg_no ++;
    echo "<tr>
                <td><p>$msg_no</p></td>
                <td><p>$row[msg_name]</p></td>
                <td><p>$row[msg_content]</p></td>";
   echo "       <td>
                    <a href='mailto:$row[msg_email]' class='w3-button w3-theme-l1 w3-small w3-round-large'><i class='fa fa-envelope-open'></i></a>
                    <a href='php/msg-delete.php?msgID=".$row['msg_id']."' class='w3-button w3-red w3-small w3-round-large'><i class='fa fa-trash'></i></a>
                 </td>
           </tr>";

}
?>