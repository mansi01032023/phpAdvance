<?php
    $conn = new mysqli("mysql-server", "root", "secret", "mydb");
    if ($conn) {
        date_default_timezone_set("Asia/Calcutta");
        error_log('[' . date("d/m/y h:i:sa") . ']' . "" . "\n", 3 , "dblog.log");
    } else {
        echo "Could not connect to the database";
    }
    ?>