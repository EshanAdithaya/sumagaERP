<?php
$con = mysqli_connect('127.0.0.1','root','Nishadi@1918');

if(!$con) {
    echo 'not connected to the server';
}

if(!mysqli_select_db($con,'u304157271_sumaga_batagam')) {
    echo 'database not selected';
}

$student_name = $_POST['name'];
$student_ID = $_POST['ID'];
$amount = $_POST['amount'];
$month = $_POST['month'];
$grade = $_POST['grade'];

$sql = "INSERT INTO payments(`student_name`, `student_ID`, `amount`, `month`, `grade`) 
        VALUES ('$student_name','$student_ID','$amount','$month','$grade')";

if(!mysqli_query($con,$sql)) {
    echo '<h1>not inserted</h1>';
} else {
    echo '<h1>inserted</h1>';
}
?>
