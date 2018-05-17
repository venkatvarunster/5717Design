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

.output{

    background: #DC143C;
	
	position: absolute;
	text-align: center;
	width: 100%;
	color: #fff;
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
			color:  #353535;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		
		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		




</style>
	
</head>
<body  style="Color: #353535" >

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
        <li><a  href="AtoZ.php">Search</a></li>
        <li><a  href="Login.php">Login</a></li>
       
        <li><a  href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- A to Z Section-->



<div class="output" style="color:White;" align="center">

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
	
	
<h1> Search by Alphabet</h1>
<br>
<br>	
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
<br>
<br>
<br>

</div>
<br>
<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>
<?php
if(isset($_GET['letter']))  {
	//echo "in php<br>";
	//echo "character is:".$_GET["letter"];
	//echo "Records pulled as below:<br>";
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
<br>
<br>
<br>
</div>


<br>
<br>
<br>

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
</table>

</body>
</html>


