<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Billing Section</title>
	<center><font size='10'color="red">Sumaga Batagama</font><br> <u><font color="black" size="10">Billing Section</u></br></font></center><br><br>
	
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
//problem in here
}

li {
  float: left;
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

.button1:hover {opacity: 1}

	
		
		</style>
		</head>

			<body>
			
			<ul>
 
  <li><a class="active" href="#home">Billing section</a></li>

</ul>
			
			<!conn building for db>

			<form action="2.php" method='post'>
			

			   <!data entry part>

			<ul type="disc"><center>
			<table align="center"><caption>Blilling Form</caption>
			<tr><th align="left"><li> Student Name:-<input type="text" name="name" id="name"></li></th></tr>
			<tr><th align="left"><li>Student I.D:-<input type="text" name='ID' id="ID" ></li></th></tr>
			<tr><th align="left"><li> Payment Amount:- Rs <input type="number" name='amount' id="amount"></li></th></tr>


			<tr><th align="left"><li>
			<label for="month">choose a month:<select name="month">
			<option value='january'>January</option>
			<option value='february'>February</option>
			<option value='march'>March</option>
			<option value='april'>April</option>
			<option value='may'>May</option>
			<option value='june'>June</option>
			<option value='july'>July</option>
			<option value='august'>August</option>
			<option value='september'>September</option>
			<option value='october'>October</option>
			<option value='november'>November</option>
			<option value='december'>December</option>
			</select></li></th></tr>



			<tr><th align="left"><li> <label for="grade">choose a Grade:<select name="grade">
			<option value='1'>1</option>
			<option value='2'>2</option>
			<option value='3'>3</option>
			<option value='4'>4</option>
			<option value='5'>5</option>
			<option value='6'>6</option>
			<option value='7'>7</option>
			<option value='8'>8</option>
			<option value='9'>9</option>
			<option value='10'>10</option>
			<option value='11'>11</option>
			<option value='12'>12</option>
			</select></li></th></tr>
			<tr><th align="left"><li> Payment Date:-<input type="date" name="date"></li></th></tr>
			</table></center>
			</font><br>
			<!button for home>
			<center><button input type='submit' class='button1' value='insert'>submit</button></center><br>
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
			
			</form>


			</body>
</html>