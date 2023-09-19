<?php
$connection = mysqli_connect("localhost", "root", "Nishadi@1918");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$db = mysqli_select_db($connection, 'u304157271_sumaga_batagam');

// Define your SQL query here
$query = "INSERT INTO payments (student_name, student_ID, amount, month, grade, payment_date) 
          VALUES ('John Doe', '12345', 100.00, 'January', '12', NOW())";

$query_run = mysqli_query($connection, $query);

if ($query_run) {
    echo '<script type="text/javascript"> alert("Data saved successfully") </script>';
} else {
    echo '<script type="text/javascript"> alert("Data not saved") </script>';
}

mysqli_close($connection);
?>
