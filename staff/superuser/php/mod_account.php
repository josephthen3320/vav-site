<?php

    include ('../../php/config.php');

        $acc_sql    =   "SELECT * FROM staff_login";
        $acc_result =   $conn->query($acc_sql);
        while ($acc_row = $acc_result->fetch_array()) {
            echo "
                    <tr>
                        <td>
                            $acc_row[uid]
                        </td>
                        <td>
                            $acc_row[username]
                        </td>
                        <td>
                            $acc_row[password]
                        </td>
                        <td>
                            <div class='w3-button w3-small w3-round-medium su-theme-l1 su-hover-theme'><i class='fa fa-fw fa-user-times'></i></div>
                        </td>
                    </tr>
            ";
        }

?>