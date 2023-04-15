<?php
session_start();
?>
<table>
    <thead>
        <tr>
            <th>User_id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Confirm Password</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $str = base64_decode($_SESSION['user']);
        $row = explode(".", $str);
        echo "<tr><td style='border: 1px solid brown; padding: 5px;'>" . $row[1] . "</td><td style='border: 1px solid brown; padding: 5px;'>" . $row[2] . "</td><td style='border: 1px solid brown; padding: 5px;'>" . $row[3] . "</td><td style='border: 1px solid brown; padding: 5px;'>" . $row[4] . "</td><td style='border: 1px solid brown; padding: 5px;'>" . $row[5] . "</td></tr>";
        ?>
    </tbody>
</table>

