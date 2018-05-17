<?php 
if(!isset($_SERVER['HTTP_REFERER']))

{
header('Location: http://iia02.ci.unt.edu/5717/group6/Login.php');
exit;
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
    
	<title>Database of Data Analytics, Visualization Books</title>
	
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Data Science Inventory Admin Panel</span>
</div>


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="avataricon.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Admin</strong></span><br>
      
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="adminwelcome.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Home Page</a>
    <a href="AtoZList.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Tabular View</a>
    <a href="Form.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Record Entry</a>
    <a href="adminsearch.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-search fa-fw"></i>  Search</a>
    <a href="Login.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Log Out</a>
    
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-book w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
		  <?php
			$db = mysqli_connect("localhost","5717G6","group6","5717G6");
			if (mysqli_connect_errno()) {
				echo 'Error:Could not connect to database.Please check and try again';
				exit;
			}
			$sql = 'SELECT * FROM DSI_Books';
			$query = mysqli_query($db, $sql);
			if (!$query) {
				die ('SQL Error: ' . mysqli_error($db));
			}
			else
				echo "$query->num_rows";
			
			mysqli_close($db); 
		  ?>
		  </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Books</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
		  <?php
			$db = mysqli_connect("localhost","5717G6","group6","5717G6");
			if (mysqli_connect_errno()) {
				echo 'Error:Could not connect to database.Please check and try again';
				exit;
			}
			$sql = 'SELECT * FROM DSI_Authors';
			$query = mysqli_query($db, $sql);
			if (!$query) {
				die ('SQL Error: ' . mysqli_error($db));
			}
			else
				echo "$query->num_rows";
			
			mysqli_close($db); 
		  ?>
		  </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Authors</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
		  <?php
			$db = mysqli_connect("localhost","5717G6","group6","5717G6");
			if (mysqli_connect_errno()) {
				echo 'Error:Could not connect to database.Please check and try again';
				exit;
			}
			$sql = 'SELECT * FROM DSI_Publishers';
			$query = mysqli_query($db, $sql);
			if (!$query) {
				die ('SQL Error: ' . mysqli_error($db));
			}
			else
				echo "$query->num_rows";
			
			mysqli_close($db); 
		  ?>
		  </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Publishers</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-bookmark w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
		  <?php
			$db = mysqli_connect("localhost","5717G6","group6","5717G6");
			if (mysqli_connect_errno()) {
				echo 'Error:Could not connect to database.Please check and try again';
				exit;
			}
			$sql = 'SELECT * FROM DSI_Subjects';
			$query = mysqli_query($db, $sql);
			if (!$query) {
				die ('SQL Error: ' . mysqli_error($db));
			}
			else
				echo "$query->num_rows";
			
			mysqli_close($db); 
		  ?>
		  </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Subjects</h4>
      </div>
    </div>
  </div>
  
  
<div class="w3-container">
    <h2>Search Page</h2>
    <br>
    <br>
    <form action="" method="post" style="color:Tomato;" >		    
	<input type="search" placeholder="Enter the keyword" name="input">		
		<select name="selectinput">
			<option value="title">Title</option>
			<option value="author">Author</option>
			<option value="publisher">Publisher</option>
		</select>     	
	<button name="submit">Search</button>
</form>
  </div>
  <br>
  <br>
  <hr>

  <div class="w3-container">
    <h2>Output Table</h2>
    
    <?php
    
    if(isset($_POST['submit']))  {
	//echo "in php<br>";
	//echo "input is: ".$_POST["input"];
	//echo "select input is: ".$_POST["selectinput"];
	$db = mysqli_connect("localhost","5717G6","group6","5717G6");
	if (mysqli_connect_errno()) {
		echo 'Error:Could not connect to database.Please check and try again';
		exit;
	}
	$input=$_POST["input"];
	$selectinput=$_POST["selectinput"];
	
	if($selectinput == "title")	{
		$sql = "SELECT Boo.Title, Pub.Pub_Name, Boo.Pub_Year,
				GROUP_CONCAT(Aut.Auth_Name) AS author_names,
				Sub.Sub_Term
				FROM DSI_Books Boo 
				JOIN DSI_Publishers Pub ON Pub.Pub_ID = Boo.Pub_ID
				JOIN DSI_Books_Authors BA ON BA.Book_ID = Boo.Book_ID
				JOIN DSI_Authors Aut ON Aut.Auth_ID = BA.Auth_ID
				JOIN DSI_Subjects_Books SB ON SB.Book_ID = Boo.Book_ID
				JOIN DSI_Subjects Sub ON Sub.Sub_ID = SB.Sub_ID
				WHERE Boo.Title LIKE '%".$input."%' 
				GROUP BY Boo.Title";
		$result = mysqli_query($db,$sql);
		if (mysqli_num_rows($result) > 0) { 
			echo "<table>";
					echo "<tr>";
						echo "<th>Title</th>";
						echo "<th>Publisher</th>";
						echo "<th>Publication Year</th>";
						echo "<th>Authors</th>";
						echo "<th>Subject Terms</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($result)){
					echo "<tr>";
						echo "<td>".$row['Title']."</td>";
						echo "<td>".$row['Pub_Name']."</td>";
						echo "<td>".$row['Pub_Year']."</td>";
						echo "<td>".$row['author_names']."</td>";
						echo "<td>".$row['Sub_Term']."</td>";
					echo "</tr>";
				}
			echo "</table>";
		}
		else {
			echo "No records found";
		}
	}
	else if ($selectinput == "author")	{
		$sql = "SELECT Boo.Title, Pub.Pub_Name, Boo.Pub_Year,
				GROUP_CONCAT(Aut.Auth_Name) AS author_names,
				Sub.Sub_Term
				FROM DSI_Books Boo 
				JOIN DSI_Publishers Pub ON Pub.Pub_ID = Boo.Pub_ID
				JOIN DSI_Books_Authors BA ON BA.Book_ID = Boo.Book_ID
				JOIN DSI_Authors Aut ON Aut.Auth_ID = BA.Auth_ID
				JOIN DSI_Subjects_Books SB ON SB.Book_ID = Boo.Book_ID
				JOIN DSI_Subjects Sub ON Sub.Sub_ID = SB.Sub_ID
				WHERE Aut.Auth_Name LIKE '%".$input."%' 
				GROUP BY Boo.Title";
		$result = mysqli_query($db,$sql);
		if (mysqli_num_rows($result) > 0) { 
			echo "<table class='data-table'>";
					echo "<tr>";
						echo "<th>Title</th>";
						echo "<th>Publisher</th>";
						echo "<th>Publication Year</th>";
						echo "<th>Authors</th>";
						echo "<th>Subject Terms</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($result)){
					echo "<tr>";
						echo "<td>".$row['Title']."</td>";
						echo "<td>".$row['Pub_Name']."</td>";
						echo "<td>".$row['Pub_Year']."</td>";
						echo "<td>".$row['author_names']."</td>";
						echo "<td>".$row['Sub_Term']."</td>";
					echo "</tr>";
				}
			echo "</table>";
		}
		else {
			echo "No records found";
		}
	}
	else if ($selectinput == "publisher")	{
		$sql = "SELECT Boo.Title, Pub.Pub_Name, Boo.Pub_Year,
				GROUP_CONCAT(Aut.Auth_Name) AS author_names,
				Sub.Sub_Term
				FROM DSI_Books Boo 
				JOIN DSI_Publishers Pub ON Pub.Pub_ID = Boo.Pub_ID
				JOIN DSI_Books_Authors BA ON BA.Book_ID = Boo.Book_ID
				JOIN DSI_Authors Aut ON Aut.Auth_ID = BA.Auth_ID
				JOIN DSI_Subjects_Books SB ON SB.Book_ID = Boo.Book_ID
				JOIN DSI_Subjects Sub ON Sub.Sub_ID = SB.Sub_ID
				WHERE Pub.Pub_Name LIKE '%".$input."%' 
				GROUP BY Boo.Title";
		$result = mysqli_query($db,$sql);
		if (mysqli_num_rows($result) > 0) { 
			echo "<table class='data-table'>";
					echo "<tr>";
						echo "<th>Title</th>";
						echo "<th>Publisher</th>";
						echo "<th>Publication Year</th>";
						echo "<th>Authors</th>";
						echo "<th>Subject Terms</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($result)){
					echo "<tr>";
						echo "<td>".$row['Title']."</td>";
						echo "<td>".$row['Pub_Name']."</td>";
						echo "<td>".$row['Pub_Year']."</td>";
						echo "<td>".$row['author_names']."</td>";
						echo "<td>".$row['Sub_Term']."</td>";
					echo "</tr>";
				}
			echo "</table>";
		}
		else {
			echo "No records found";
		}
	}
	mysqli_close($db); 
}	
?>
  </div>
  

