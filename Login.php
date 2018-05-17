<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
	<title>Database of Data Analytics, Visualization Books</title>
	
	<style>
	@import url(https://fonts.googleapis.com/css?family=Roboto:300);


body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}

.form label {
  display: block;
  padding-left: 15px;
  text-indent: -15px;
}

.form input [type="checkbox"] {
  width: 13px;
  height: 13px;
  padding: 0;
  margin:0;
  vertical-align: bottom;
  position: relative;
  top: -1px;
  *overflow: hidden;
}
</style>
</head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="font-size: 150%" href="Home.php">Datascience Inventory</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a  href="AtoZ.php">Search</a></li>
        <li><a  href="Login.php">Login</a></li>
         
        <li><a  href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="login-page">
  <div class="form">

	<form method="POST" action="Login.php" align="center" >
	Username:
	<input type="text" name="loginname"><br><br>
	Password:
	<input type="password" name="pw"><br><br>
	<input type="submit" name="submit" style="color:white;background-color:green;">
	<br>
	<label>
	<!--<input style="font-size:100%" type="checkbox">Remember me</label>-->
	</form>
	
	<?php
	if (isset($_POST["submit"])) {
		//process form
		$db = mysqli_connect("localhost","5717G6","group6","5717G6");
		if (mysqli_connect_errno()) {
			echo "Error:Could not connect to database.Please check and try again";
			exit;
		}
		$loginname=$_POST['loginname'];
		$pw=$_POST['pw'];
		
		//Verifying user credentials in USER table
		$result = mysqli_query($db,"SELECT * FROM USER WHERE LoginName = '".$loginname."' AND PasswordHash = '".$pw."'");
		if (mysqli_num_rows($result) > 0) { 
			foreach ($result as $row) {
				echo "Record found for username: ".$row['LoginName'];
				header("Location: adminwelcome.php"); /* Redirect browser */
				exit();
			}
		}
		else {	
			echo "User name or password mismatch";
		}
		mysqli_close($db);
	}
?>
</div>

</div>
</body>
</html>