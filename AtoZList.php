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
	
	<style>
	table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
	
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
    <a href="AtoZList.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-eye fa-fw"></i>  Tabular View</a>
    <a href="Form.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Record Entry</a>
    <a href="adminsearch.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-search fa-fw"></i>  Search</a>
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
			//process form
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
			//process form
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
			//process form
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
			//process form
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
		  ?>
		  </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Subjects</h4>
      </div>
    </div>
  </div>

<!-- table content-->
<div class="w3-container">
    <h5>Records in Database</h5>
  <br>
  
  <?php


$conn = mysqli_connect("localhost","5717G6","group6","5717G6");
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = "SELECT Boo.Title, Boo.Price, Pub.Pub_Name, I.ISBN_10, I.ISBN_13,
						GROUP_CONCAT(Aut.Auth_Name) AS author_names
						FROM DSI_Books Boo 
						JOIN DSI_ISBN I ON I.Book_ID=Boo.Book_ID 
						JOIN DSI_Publishers Pub ON Pub.Pub_ID=Boo.Pub_ID
						JOIN DSI_Books_Authors BA ON BA.Book_ID = Boo.Book_ID
						JOIN DSI_Authors Aut ON Aut.Auth_ID = BA.Auth_ID
						GROUP BY Boo.Title";
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<table class="data-table">
		
		<thead>
			<tr>
				<th>S No </th>
				<th>Title</th>
				<th>Price</th>
				<th>Publisher</th>
				<th>ISBN-10</th>
				<th>ISBN-13</th>
				<th>Authors</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['Title'].'</td>
					<td>'.$row['Price'].'</td>
					<td>'.$row['Pub_Name'].'</td>
					<td>'.$row['ISBN_10'].'</td>
					<td>'.$row['ISBN_13'].'</td>
					<td>'.$row['author_names'].'</td>
				</tr>';
			
			$no++;
		}?>
		</tbody>
		
	</table>

  
  </div>
  <hr>
  
  </body>
</html>
