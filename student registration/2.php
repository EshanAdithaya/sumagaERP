<?php
// Establish a connection to the MySQL server
$con = mysqli_connect('127.0.0.1', 'root', '', 'stu_mgt');

if (!$con) {
   echo '<script>alert("Not connected to the server");</script>';
}

// Retrieve data from the POST request
$studentName = $_POST['Name'];
$address = $_POST['Address'];
$telephoneNo = $_POST['Telephone'];
$school = $_POST['School'];
$guardianName = $_POST['Garden'];
$guardianTP = $_POST['GardenTelephoneNumber'];
$grade = $_POST['grade'];
$studentID = $_POST['studentID'];
$email = $_POST['Email'];
$subject_or_subjects = $_POST['subject'];

// Create the SQL query for insertion into student_details table
$sql2 = "INSERT INTO `student_details` (`studentID`, `studentName`, `email`, `telephoneNo`, `cardNumber`, `expiryDate`)
         VALUES ('$studentID', '$studentName', '$email', '$telephoneNo', '', '')";

// Execute the SQL query
if (!mysqli_query($con, $sql2)) {

    echo '<script>alert("Failed to Insert Data. Contact Admin");</script>';

} else {

    echo '<script>alert("Inserted");</script>';

}

// Close the database connection when done
mysqli_close($con);
?>
