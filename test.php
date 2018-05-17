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
      <a class="navbar-brand" style="font-size: 150%" href="http://iia02.ci.unt.edu/5717/group6/Home.php">Datascience Inventory</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a  href="">Search</a></li>
        <li><a  href="Login.php">Login</a></li>
        <li><a  href="AtoZ.php">A - Z</a></li>
        <li><a  href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="output" style="color:Tomato;">

 <form action="" method="get" name="search" onlick="submit">
      <ul class="pagination">
	    <li><a href="test.php?letter=A">A</a></li> 
		<li><a href="test.php?letter=B">B</a></li> 
		<li><a href="test.php?letter=C">C</a></li> 
		<li><a href="test.php?letter=D">D</a></li> 
		<li><a href="test.php?letter=E">E</a></li>
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

</body>
</html>


