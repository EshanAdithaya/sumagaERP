<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
	<center><font size='10'color="red">Sumaga Batagama</font>
	<style>
	
	body{
  margin: 0;
  padding: 0;
  font-family: "Open Sans",sans-serif;
}

footer{
  padding: 1px 0;
}

.footer-container{
  max-width: 1300px;
  margin: auto;
  padding: 0 20px;
  display: flex;
  justify-content: space-between;
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
  min-height: 40vh;
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
}

li a {
  display: block;
  color: white;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
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


		
		</style>
  </head>


  <body>

  <h1><marquee>Welcome to sumaga Education Institute computerized Learning Management system.</marquee></h1>


    <div class="page-content">
      <div class="login-container">
        <form method="POST" action="login.php">
          
          <input type="text" class="txtb" name="username" placeholder="Username" required><br>
          <input type="password" class="txtb" name="password" placeholder="Password" required><br>
          <input type="submit" class="button" name="login" value="Login">
        </form>
      </div>
    </div>

     <footer>
      <div class="footer-container">
        <div class="left-col">
          <img src="logo.jpg" alt="" class="logo">
          <p class="rights-text">© 2020 Created by Eshan Adithya. Contact <a href="https://cryste.online/">Cryste </a>Fore Software Solutions  </p>
		  <style>
      body {
        background-image: url('5.gif');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
      }
        </div>
		
       
    </footer>
	</style>
  </body>
</html>
