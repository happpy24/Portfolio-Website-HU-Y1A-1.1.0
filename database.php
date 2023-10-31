<?php
    $db_server = "localhost";
    $db_user = "vivi";
    $db_pass = "supersafepassword";
    $db_name = "contactPage";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    } catch (mysqli_sql_exception $e) {
        echo "<script>console.log('Could not connect to Database');</script>";
    }

    if ($conn) {
        echo "<script>console.log('Database Connected!');</script>";
    } else {
        echo "<script>console.log('Could not connect to Database!');</script>";
    }
?>