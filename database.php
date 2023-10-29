<?php
    $db_server = "localhost";
    $db_user = "vivi";
    $db_pass = "supersafepassword";
    $db_name = "contactPage";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, 
                               $db_user, 
                               $db_pass, 
                               $db_name);
    }
    catch(mysqli_sql_exception){
        echo"Could not connect to Database!";
    }
    

    if ($conn){
        echo"Database Connected!";
    }
    else{
        echo"Could not connect to Database!";
    }
?>