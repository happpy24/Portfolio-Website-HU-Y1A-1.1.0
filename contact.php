<?php
include("database.php");
$title = 'Contact - VSpeijer';
$childView = '_contact.php';
include('layout.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($name) || empty($email) || empty($subject) || empty($message)){
        echo '<script>alert("Please fill in all fields!");</script>';
    }
    else{
        // Use prepared statement to prevent SQL injection
        $sql = "INSERT INTO contactResponse (NAME, EMAIL, SUBJECT, MESSAGE) 
                VALUES (?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            // Bind parameters and execute the query
            mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_close($stmt);
                echo '<script>alert("Your message has been sent!");</script>';
                header("Location: contact.php#scroller"); // Redirect to the same page to avoid resubmission
                exit();
            } else {
                echo '<script>console.log("Failed to insert data");</script>';
                mysqli_stmt_close($stmt);
            }
        } else {
            echo '<script>console.log("Failed to prepare the statement");</script>';
        }
    }
}

mysqli_close($conn);
?>
