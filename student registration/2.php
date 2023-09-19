<?php
// Establish a connection to the MySQL server
$con = mysqli_connect('127.0.0.1', 'root', 'Nishadi@1918');

if (!$con) {
    echo 'Not connected to the server';
}

// Select the database
if (!mysqli_select_db($con, 'u304157271_sumaga_batagam')) {
    echo 'Database not selected';
}

// Retrieve data from the POST request
$name = $_POST['Name'];
$address = $_POST['Address'];
$telephone_number = $_POST['Telephone'];
$school = $_POST['School'];
$gardean_name = $_POST['Garden'];
$gardean_tp_number = $_POST['GardenTelephoneNumber'];
$grade = $_POST['grade'];
$student_ID = $_POST['studentID'];
$email = $_POST['Email'];
$subject_or_subjects = $_POST['subject'];

// Create the SQL query for insertion
$sql = "INSERT INTO student_details(`name`, `address`, `telephone_number`, `school`, `gardean_name`, `gardean_tp_number`, `grade`, `student_ID`, `email`, `subject_or_subjects`) 
        VALUES ('$name', '$address', '$telephone_number', '$school', '$gardean_name', '$gardean_tp_number', '$grade', '$student_ID', '$email', '$subject_or_subjects')";

// Execute the SQL query
if (!mysqli_query($con, $sql)) {
    echo '<h1>Not inserted</h1>';
} else {
    echo '<h1>Inserted</h1>';
}

// Close the database connection when done
mysqli_close($con);
?>
