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
	
	@import url(https://fonts.googleapis.com/css?family=Cabin:400);



.webdesigntuts-workshop {
	background: #151515;
	height: 100%;
	position: absolute;
	text-align: center;
	width: 100%;
}

.webdesigntuts-workshop:before,
.webdesigntuts-workshop:after {
	content: '';
	display: block;	
	height: 1px;
	left: 50%;
	margin: 0 0 0 -400px;
	position: absolute;
	width: 800px;
}

.webdesigntuts-workshop:before {
	background: #444;
	background: linear-gradient(left, #151515, #444, #151515);
	top: 192px;
}

.webdesigntuts-workshop:after {
	background: #000;
	background: linear-gradient(left, #151515, #000, #151515);	
	top: 191px;
}

.webdesigntuts-workshop form {
	background: #111;
	background: linear-gradient(#1b1b1b, #111);
	border: 1px solid #000;
	border-radius: 5px;
	box-shadow: inset 0 0 0 1px #272727;
	display: inline-block;
	font-size: 10px;
	margin: 150px auto 0;
	padding: 20px;
	position: relative;
	z-index: 1;
}

.webdesigntuts-workshop input {
	background: #222;	
	background: linear-gradient(#333, #222);	
	border: 1px solid #444;
	border-radius: 5px 0 0 5px;
	box-shadow: 0 2px 0 #000;
	color: #888;
	display: block;
	float: left;
	font-family: 'Cabin', helvetica, arial, sans-serif;
	font-size: 13px;
	font-weight: 400;
	height: 40px;
	margin: 0;
	padding: 0 10px;
	text-shadow: 0 -1px 0 #000;
	width: 200px;
}

.ie .webdesigntuts-workshop input {
	line-height: 40px;
}

.webdesigntuts-workshop input::-webkit-input-placeholder {
   color: #888;
}

.webdesigntuts-workshop input:-moz-placeholder {
   color: #888;
}

.webdesigntuts-workshop input:focus {
	animation: glow 800ms ease-out infinite alternate;
	background: #222922;
	background: linear-gradient(#333933, #222922);
	border-color: #393;
	box-shadow: 0 0 5px rgba(0,255,0,.2), inset 0 0 5px rgba(0,255,0,.1), 0 2px 0 #000;
	color: #efe;
	outline: none;
}

.webdesigntuts-workshop input:focus::-webkit-input-placeholder { 
	color: #efe;
}

.webdesigntuts-workshop input:focus:-moz-placeholder {
	color: #efe;
}

.webdesigntuts-workshop button {
	background: #222;
	background: linear-gradient(#333, #222);
	box-sizing: border-box;
	border: 1px solid #444;
	border-left-color: #000;
	border-radius: 0 5px 5px 0;
	box-shadow: 0 2px 0 #000;
	color: #fff;
	display: block;
	float: left;
	font-family: 'Cabin', helvetica, arial, sans-serif;
	font-size: 13px;
	font-weight: 400;
	height: 40px;
	line-height: 40px;
	margin: 0;
	padding: 0;
	position: relative;
	text-shadow: 0 -1px 0 #000;
	width: 80px;
}	

.webdesigntuts-workshop button:hover,
.webdesigntuts-workshop button:focus {
	background: #292929;
	background: linear-gradient(#393939, #292929);
	color: #5f5;
	outline: none;
}

.webdesigntuts-workshop button:active {
	background: #292929;
	background: linear-gradient(#393939, #292929);
	box-shadow: 0 1px 0 #000, inset 1px 0 1px #222;
	top: 1px;
}

.webdesigntuts-workshop output{

    display: block;
	float: left;
	font-family: 'Cabin', helvetica, arial, sans-serif;
	font-size: 13px;
	}

@keyframes glow {
    0% {
		border-color: #393;
		box-shadow: 0 0 5px rgba(0,255,0,.2), inset 0 0 5px rgba(0,255,0,.1), 0 2px 0 #000;
    }	
    100% {
		border-color: #6f6;
		box-shadow: 0 0 20px rgba(0,255,0,.6), inset 0 0 10px rgba(0,255,0,.4), 0 2px 0 #000;
    }
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

<!-- search Bar -->
<div class = "Search">
<section class="webdesigntuts-workshop">
	<form action="" method="">		    
		<input type="search" placeholder="Enter the Title of the Book">		    	
		<button>Search</button>
	</form>
	<br>
	<br>
	<div class="container-fluid bg-grey">
		<div>
    <form action="" method="get" name="search" onlick="submit">
      <ul class="pagination">
	    <li><a href="AtoZ.php?letter=A">A</a></li> 
		<li><a href="AtoZ.php?letter=B">B</a></li> 
		<li><a href="AtoZ.php?letter=C">C</a></li> 
		<li><a href="AtoZ.php?letter=D">D</a></li> 
		<li><a href="AtoZ.php?letter=E">E</a></li>
		<li><a href="AtoZ.php?letter=F">F</a></li>
		<li><a href="AtoZ.php?letter=G">G</a></li>
		<li><a href="AtoZ.php?letter=H">H</a></li>
		<li><a href="AtoZ.php?letter=I">I</a></li>
		<li><a href="AtoZ.php?letter=J">J</a></li>
		<li><a href="AtoZ.php?letter=K">K</a></li>
		<li><a href="AtoZ.php?letter=L">L</a></li>
		<li><a href="AtoZ.php?letter=M">M</a></li>
		<li><a href="AtoZ.php?letter=N">N</a></li>
		<li><a href="AtoZ.php?letter=O">O</a></li>
		<li><a href="AtoZ.php?letter=P">P</a></li>
		<li><a href="AtoZ.php?letter=Q">Q</a></li>
		<li><a href="AtoZ.php?letter=R">R</a></li>
		<li><a href="AtoZ.php?letter=S">S</a></li>
		<li><a href="AtoZ.php?letter=T">T</a></li>
		<li><a href="AtoZ.php?letter=U">U</a></li>
		<li><a href="AtoZ.php?letter=V">V</a></li>
		<li><a href="AtoZ.php?letter=W">W</a></li>
		<li><a href="AtoZ.php?letter=X">X</a></li>
		<li><a href="AtoZ.php?letter=Y">Y</a></li>
		<li><a href="AtoZ.php?letter=Z">Z</a></li>
	</ul>
	</form>
    </div>
	</div>
</section>
</div>

<div class="output" style="color:Tomato;">
<?php
if(isset($_GET['letter']))  {
	echo "in php<br>";
	echo "character is:".$_GET["letter"];
	echo "before connection";
	$db = mysqli_connect("localhost","5717G6","group6","5717G6");
	if (mysqli_connect_errno()) {
		echo 'Error:Could not connect to database.Please check and try again';
		exit;
	}
	$char=$_GET['letter'];
	
	if($char)	{
		$result = mysqli_query($db,"SELECT Title FROM DSI_Books WHERE Title LIKE '".$char."%'");
		if (mysqli_num_rows($result) > 0) { 
			echo "<br>"."List of Books found:"."<br>";
			while($row = mysqli_fetch_array($result)){
				echo $row['Title']."<br>";
			}
		}
		else {
			echo "No records found";
		}
	}
	mysqli_close($db);
}	
?>
</div>
</body>
</html>


