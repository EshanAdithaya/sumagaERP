<?php
$con = mysqli_connect('127.0.0.1','root','Nishadi@1918');

if(!$con)
{
echo 'not connected to the server';
}
if(!mysqli_select_db($con,'sumaga_batagama'))
{
echo 'database not selected';
}

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

$sql = "INSERT INTO student_details(`name`, `address`, `telephone_number`, `school`, `gardean_name`, `gardean_tp_number`, `grade`, `student_ID`, `email`, `subject_or_subjects`) VALUES ('$name','$address','$telephone_number','$school','$gardean_name','$gardean_tp_number','$grade','$student_ID','$email','$subject_or_subjects')";
if(!mysqli_query($con,$sql))
 {
 echo "<h1> not inserted </h1>";
 }
 else
 {
 echo "<h1> inserted </h1>";
 }
?>