<?php
// Establish a connection to the MySQL server
$con = mysqli_connect('Localhost', 'root');

if (!$con) {
    die('Connection error: ' . mysqli_connect_error());
}

// Only select the database if the connection is successful
if (!mysqli_select_db($con, 'sumaga_batagam')) {
    die('Database selection error: ' . mysqli_error($con));
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
    die('Insertion error: ' . mysqli_error($con));
} else {
    echo '<h1>Inserted</h1>';
}

// Close the database connection when done
mysqli_close($con);
?>
