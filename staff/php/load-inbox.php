<?php
    while ($row = $inbox_result->fetch_array()) {
        $msg_no ++;

        if ($row['msg_read'] == 0) {
            $msg_name = "<b>$row[msg_name]</b>";
        } else {
            $msg_name   =   $row['msg_name'];
        }

        $msg_email      =   $row['msg_email'];
        $msg_content    =   $row['msg_content'];

        echo "<tr>
                    <td><p>$msg_no</p></td>
                    <td><p>$msg_name</p></td>
                    <td><p>$msg_content</p></td>";
       echo "       <td>
                        <a href='mailto:$msg_email' class='w3-button w3-theme-l1 w3-small w3-round-large'><i class='fa fa-envelope-open'></i></a>
                        <a href='php/msg-delete.php?msgID=".$row['msg_id']."' class='w3-button w3-red w3-small w3-round-large'><i class='fa fa-trash'></i></a>
                     </td>
               </tr>";

    }

?>