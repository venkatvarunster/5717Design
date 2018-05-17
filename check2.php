<!DOCTYPE html>
<html lang="en">
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
</body>
</html>
    
    <?php
    
    if(isset($_POST['submit']))  {
	
	$db = mysqli_connect("localhost","5717G6","group6","5717G6");
if (!$db) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
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
						echo "<td>".$row['Title']."</td><br>";
						echo "<td>".$row['Pub_Name']."</td><br>";
						echo "<td>".$row['Pub_Year']."</td><br>";
						echo "<td>".$row['author_names']."</td><br>";
						echo "<td>".$row['Sub_Term']."</td><br>";
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
						echo "<td>".$row['Title']."</td><br>";
						echo "<td>".$row['Pub_Name']."</td><br>";
						echo "<td>".$row['Pub_Year']."</td><br>";
						echo "<td>".$row['author_names']."</td><br>";
						echo "<td>".$row['Sub_Term']."</td><br>";
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

