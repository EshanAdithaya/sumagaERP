

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Student Details</title>
	<center><font size='10'color="red">Sumaga Batagama</font><br> <u><font color="black" size="10">Data Retriving page(payments)</u></br></font></center><br><br>
	
	<style>
	
	body{
  margin: 0;
  padding: 0;
  font-family: "Open Sans",sans-serif;
}

footer{
  padding: 10px 0;
}

.footer-container{
  max-width: 1300px;
  margin: auto;
  padding: 0 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap-reverse;
}

.logo{
  width: 250px;
}




.

.txtb{
  flex: 1;
  padding: 18px 40px;
  font-size: 16px;
  color: #293043;
  background: #ddd;
  border: none;
  font-weight: 700;
  outline: none;
  border-radius: 30px;
  min-width: 260px;
}

.btn{
  padding: 18px 40px;
  font-size: 16px;
  color: #f1f1f1;
  background: #fc5c65;
  border: none;
  font-weight: 700;
  outline: none;
  border-radius: 30px;
  margin-left: 20px;
  cursor: pointer;
  transition: opacity .3s linear;
}

.btn:hover{
  opacity: .7;
}

.page-content{
  min-height: 100vh;
  font-size: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
}

@media screen and (max-width:960px) {
  .footer-container{
    max-width: 100px;
  }
  .right-col{
    width: 80%;
    margin-bottom: 60px;
  }

  .left-col{
    width: 80%;
    text-align: center;
  }
}


@media screen and (max-width:700px){
  .btn{
    margin: 0;
    width: 100%;
    margin-top: 20px;
    }
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
} 
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 80%;
		}

		td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color: #dddddd;
		}
		
		.button {
  background-color: #a4a4d5;
  border: none;
  color: white;
  width: 200px;
  height: 60px;
  margin: 40px 0;
  font-size:16px;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
    text-transform: uppercase;
  cursor: pointer;
  
}

.button:hover {opacity: 1}

.button1 {
  background-color: #a4a4d5;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-transform: uppercase;
  cursor: pointer;
}

.button1:hover {opacity: 1

<?php
$connection = mysqli_connect("localhost","root","");
$query_run = mysqli_query($connection,$query);
$db = mysqli_select_db($connection,'sumaga batagama(payments)');

if(isset($_POST['submit']))
	
$query="select * form payments";
$result=mysql_query($query);
?>

	
		
		</style>
		</head>
		
			<body>
			
			<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="student dtails/studentdtails.php">Student Registration</a></li>
  <li><a href="C:\xampp\htdocs\sumaga\billing form/billing.php">Billing section</a></li>
  <li><a class="active" href="retrive.php">Student Details</a></li>
  <li><a href="#about">Payment Details</a></li>
  
</ul>
			<center>
			<table id="table" align="center"><caption>student dtails(old)</caption>
			 <t>
			 <th> database id:-</th>
			
			<th> student ID:-</th>
			
			<th> amount:-</th>
			
			<th> month of paid:-</th>
			
			<th> grade:-</th>
			
			<th> paymented date:-</th>
			</t>
			
			<?php
			while($rows=mysql_fetch_assoc($result))
			{
			?>
				<tr>
				<td><?php echo $rows[ID]; ?></td>
				<td><?php echo $rows[student_name]; ?></td>
				<td><?php echo $rows[student_ID]; ?></td>
				<td><?php echo $rows[amount]; ?></td>
				<td><?php echo $rows[month]; ?></td>
				<td><?php echo $rows[grade]; ?></td>
				<td><?php echo $rows[payment_date]; ?></td>
				</tr>
			</table></center>
			
			</font><br>
			<a href='student dtails home page.html'><center><button class="button">back</button></center><br></a>
			<center><button class="button">print</button></center>
			
			<footer>
      <div class="footer-container">
        <div class="left-col">
          <img src="logo.jpg" alt="" class="logo">
          <p class="rights-text">© 2020 Created by Eshan Adithya .</p>
		  <style>
      body {
        background-image: url('5.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
      }
        </div>
		
       
    </footer>
	</style>
			
			</body>

</html>