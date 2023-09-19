<?php
// Establish a connection to the MySQL server
$con = mysqli_connect('127.0.0.1', 'root', '', 'stu_mgt');

if (!$con) {
    echo '<script>alert("Not connected to the server: ' . mysqli_connect_error() . '");</script>';
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the POST request 
    $studentName = isset($_POST['studentName']) ? $_POST['studentName'] : '';
    $stid = isset($_POST['studentID']) ? $_POST['studentID'] : '';
    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
    $month = isset($_POST['month']) ? $_POST['month'] : '';
    $grade = isset($_POST['grade']) ? $_POST['grade'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $medium = isset($_POST['medium']) ? $_POST['medium'] : '';

    // Create the SQL query for insertion into payments table
    $sql2 = "INSERT INTO `payments` (`studentName`, `stid`, `amount`, `Month`, `Grade`, `subject`, `medium`)
             VALUES ('$studentName', '$stid', '$amount', '$month', '$grade', '$subject', '$medium')";

    // Execute the SQL query
    if (!mysqli_query($con, $sql2)) {
        echo '<script>alert("Failed to Insert Data: ' . mysqli_error($con) . '");</script>';
    } else {
        echo '<script>alert("Inserted");</script>';
    }
}

// Close the database connection when done
mysqli_close($con);
?>
