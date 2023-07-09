<?php
$query_run = mysqli_query($connection,$query);
					
if($query_run)
{
	echo ' <script type="text/javascript"> alert("data saved successfully") </script>';
}					
	else
{
	echo ' <script type="text/javascript"> alert("data not saved") </script>';
}	



$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'sumaga batagama(payments)');

if(isset($_POST['submit']))
?>