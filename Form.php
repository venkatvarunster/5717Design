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
		.myform{
		padding-top: 20px;
		}
		
		form input[id="othersubt"]
		{
		display: inline-block;
        float: center;
         position:relative;
        }
        
        .input[id="othersubd""]
		{
		display: inline-block;
        float: center;
         position:relative;
        }
        
        
        .input[id="otherpub""]
		{
		display: inline-block;
        float: center;
         position:relative;
        }
        
        
        
	</style>
	<script type="text/javascript">
		function CheckPubs(val){
		 var element=document.getElementById('otherpub');
		 if(val=='others') {
		   element.style.display='block';
		   element.required="required";
		 }
		 else  
		   element.style.display='none';
		}
		
		function CheckSubs(val){
		 var element1=document.getElementById('othersubt');
		 var element2=document.getElementById('othersubd');
		 if(val=='others') {
		   element1.style.display='block';
	       element2.style.display='block';
		 }
		 else  {
		   element1.style.display='none';
	       element2.style.display='none';
		 }
		}
	
	</script> 
	
	
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
    <a href="Form.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Record Entry</a>
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
	
<!-- Page content -->
<?php

	if (isset($_POST["submit"])) {
		
		//process form
		$db = mysqli_connect("localhost","5717G6","group6","5717G6");
		if (mysqli_connect_errno()) {
			echo 'Error:Could not connect to database.Please check and try again';
			exit;
		}
		echo 'Database connection successful.<br>';
		$title = str_replace("'","\'",$_POST["title"]);
		if ($_POST["pubname"] != " ") {;
			if ($_POST["pubname"] == "others") 
				$pubname = str_replace("'","\'",$_POST["newpubn"]);
			else 
				$pubname = str_replace("'","\'",$_POST["pubname"]);
		}
		$year = $_POST["year"];
		$price = $_POST["price"];
		$author = str_replace("'","\'",$_POST["author"]);
		$abstract = str_replace("'","\'",$_POST["abstract"]);
		$pages = $_POST["pages"];
		$subname = str_replace("'","\'",$_POST["subname"]);
		$newsubt = str_replace("'","\'",$_POST["newsubt"]);
		$newsubd = str_replace("'","\'",$_POST["newsubd"]);
		$ISBN_10 =$_POST["ISBN_10"];
		$ISBN_13 =$_POST["ISBN_13"];
		
		echo 'Publisher name to insert: '.$pubname.'<br>';
		
		
		//Checking if data already exists in DSI_Publishers table
		$result = mysqli_query($db,"SELECT * FROM DSI_Publishers WHERE Pub_Name LIKE '".$pubname."'");
		if (mysqli_num_rows($result) > 0) {
			echo "Record already exists for pub name: ".$pubname."<br>";
		}
		else {
			//Inserting data into Publishers table
			$sql = "INSERT INTO DSI_Publishers(Pub_Name) VALUES ('".$pubname."')";
			if ($db->query($sql) === FALSE) {
				echo 'Error:Inserting record into DSI_Publishers table.<br>';
				exit;
			}
			else
				echo 'Record inserted successfully into table DSI_Publishers.<br>';
		}
		
		//Selecting data from DSI_Publishers for insertion into DSI_Books table
		$result = mysqli_query($db,"SELECT * FROM DSI_Publishers WHERE Pub_Name = '".$pubname."'");
		$temp_pubid ="";
		if (mysqli_num_rows($result) > 0) { 
			echo "Record found for pub name: ".$pubname."<br>";
			foreach ($result as $row) {
				$temp_pubid = $row['Pub_ID'];
			}
			echo "Found Pub ID: ".$temp_pubid."<br>";
		}
		else {	
			echo "No Record found for pub name: ".$pubname."<br>";
			exit();
		}
		
		//Inserting data into DSI_Books table
		$sql = "INSERT INTO DSI_Books(Title, Pub_ID, Pub_Year, Price, Abstract, No_of_Pages) 
				VALUES ('".$title."','".$temp_pubid."','".$year."','".$price."','".$abstract."','".$pages."')";
		if ($db->query($sql) === FALSE) {
			echo 'Error:Inserting record into Books table.<br>';
			echo 'Error: '.$mysqli->error.'<br>';
			exit;
		}
		else
			echo 'Record inserted successfully into table DSI_Books.<br>'; 
		
		
		//Selecting data from DSI_Books for insertion into DSI_ISBN, DSI_Books_Authors, DSI_Subject_Books table
		$result = mysqli_query($db,"SELECT * FROM DSI_Books WHERE Title = '".$title."'");
		$temp_bookid ="";
		if (mysqli_num_rows($result) > 0) { 
			echo "Record found for title: ".$title."<br>";
			foreach ($result as $row) {
				$temp_bookid = $row['Book_ID'];
			}
			echo "Found Book ID: ".$temp_bookid."<br>";
		}
		else {	
			echo "No Record found for title: ".$title."<br>";
			exit();
		}
		
		//Inserting data into DSI_ISBN table
		$sql = "INSERT INTO DSI_ISBN(Book_ID, ISBN_10, ISBN_13) VALUES('".$temp_bookid."','".$ISBN_10."','".$ISBN_13."')";
		if ($db->query($sql) === FALSE) {	
			echo 'Error:Inserting record into DSI_ISBN table.<br>';
			exit;
		}
		else
			echo 'Record inserted successfully into table DSI_ISBN.<br>';
		
		//Inserting data into DSI_Authors table
		$author_array = explode(';', $author);
		echo 'Count is: '.count($author_array).'<br>';
		
		for($i=0;$i<count($author_array);$i++)
			{
				echo $author_array[$i].'<br>';
				
				//Checking if data already exists in DSI_Authors table
				$result = mysqli_query($db,"SELECT Auth_ID FROM DSI_Authors WHERE Auth_Name = '".$author_array[$i]."'");
				if (mysqli_num_rows($result) > 0) { 
					echo "Record already exists for author name: ".$author_array[$i]."<br>";
				}
				else {
					$sql = "INSERT INTO DSI_Authors(Auth_Name) VALUES ('".$author_array[$i]."')";
					if ($db->query($sql) === FALSE) {
						echo 'Error:Inserting record into DSI_Authors table.<br>';
						exit;
					}
					else
						echo 'Record inserted successfully into table DSI_Authors.<br>';
				}
				
				//Selecting data from DSI_Authors for insertion into Book_Authors table
				$result = mysqli_query($db,"SELECT Auth_ID FROM DSI_Authors WHERE Auth_Name = '".$author_array[$i]."'");
				$temp_authid ="";
				if (mysqli_num_rows($result) > 0) { 
					echo "Record found for author name: ".$author_array[$i]."<br>";
					foreach ($result as $row) {
						$temp_authid = $row['Auth_ID'];
						echo "Found Auth ID: ".$temp_authid."<br>";
					}
					//Inserting data into DSI_Books_Authors table
					$sql = "INSERT INTO DSI_Books_Authors(Book_ID, Auth_ID) 
							VALUES ('".$temp_bookid."','".$temp_authid."')";
					if ($db->query($sql) === FALSE) {
						echo 'Error:Inserting record into DSI_Books_Authors table.<br>';
						exit;
					}
					else
						echo 'Record inserted successfully into table DSI_Books_Authors.<br>';
				}
				else {
					echo "No Record found for auth name: ".$author_array[$i]."<br>";
					exit();
				}
			}
		
		//Inserting data into DSI_Subjects table
		echo 'Subject Terms are: ';
		if (!empty($subname)) {
			foreach($subname as $name)
			{
				echo $name.'<br>';
				//Selecting data from DSI_Subjects for insertion into DSI_Subjects_Books table
				$result = mysqli_query($db,"SELECT Sub_ID FROM DSI_Subjects WHERE Sub_Term = '".$name."'");
				$temp_subid ="";
				if (mysqli_num_rows($result) > 0) { 
					echo "Record found for sub term: ".$name."<br>";
					foreach ($result as $row) {
						$temp_subid = $row['Sub_ID'];
						echo "Found Sub ID: ".$temp_subid."<br>";
					}
					//Inserting data into DSI_Subjects_Books table
					$sql = "INSERT INTO DSI_Subjects_Books(Book_ID, Sub_ID) 
							VALUES ('".$temp_bookid."','".$temp_subid."')";
					if ($db->query($sql) === FALSE) {
						echo 'Error:Inserting record into DSI_Subjects_Books table.<br>';
						exit;
					}
					else
						echo 'Record inserted successfully into table DSI_Subjects_Books.<br>';
				}
				else {
					echo "No Record found for sub term: ".$name."<br>";
					exit();
				}
			}
		}
		else {
			$newsubterm_array = explode(';', $newsubt);
			echo 'Count is: '.count($newsubterm_array).'<br>';
			$newsubdesc_array = explode(';', $newsubd);
			echo 'Count is: '.count($newsubdesc_array).'<br>';
			for($i=0;$i<count($newsubterm_array);$i++) {
				echo $newsubterm_array[$i].'<br>';
				//Checking if data already exists in DSI_Subjects table
				$result = mysqli_query($db,"SELECT * FROM DSI_Subjects WHERE Sub_Term = '".$newsubterm_array[$i]."'");
				if (mysqli_num_rows($result) > 0) { 
					echo "Record already exists for subject term: ".$newsubterm_array[$i]."<br>";
				}
				else {
					$sql = "INSERT INTO DSI_Subjects(Sub_Term, Description) VALUES ('".$newsubterm_array[$i]."','".$newsubdesc_array[$i]."')";
					if ($db->query($sql) === FALSE) {
						echo 'Error:Inserting record into DSI_Subjects table.<br>';
						exit;
					}
					else
						echo 'Record inserted successfully into table DSI_Subjects.<br>';
				}
				//Selecting data from DSI_Subjects for insertion into DSI_Subjects_Books table
				$result = mysqli_query($db,"SELECT Sub_ID FROM DSI_Subjects WHERE Sub_Term = '".$newsubterm_array[$i]."'");
				$temp_subid ="";
				if (mysqli_num_rows($result) > 0) { 
					echo "Record found for sub term: ".$newsubterm_array[$i]."<br>";
					foreach ($result as $row) {
						$temp_subid = $row['Sub_ID'];
						echo "Found Sub ID: ".$temp_subid."<br>";
					}
					//Inserting data into DSI_Subjects_Books table
					$sql = "INSERT INTO DSI_Subjects_Books(Book_ID, Sub_ID) 
							VALUES ('".$temp_bookid."','".$temp_subid."')";
					if ($db->query($sql) === FALSE) {
						echo 'Error:Inserting record into DSI_Subjects_Books table.<br>';
						exit;
					}
					else
						echo 'Record inserted successfully into table DSI_Subjects_Books.<br>';
				}
				else {
					echo "No Record found for sub term: ".$newsubterm_array[$i]."<br>";
					exit();
				}
			}
		}
		
		mysqli_close($db); 
	}
?>
<h1 align="middle" style="color:red;"> Web Entry Form to add new information to Data Science Inventory database </h1>
<div class="myform">
<form method="post" action="" align="center" >
	Title of Book:
	<input type="text" id="title" name="title" size="50" required><br><br>
	
	Publisher: <select name="pubname" onchange = 'CheckPubs(this.value);' required>
	<option value="" disabled selected>Please select a name...</option>
	<?php
	// Create connection
	$db = mysqli_connect("localhost","5717G6","group6","5717G6");
	// Check connection
	if (mysqli_connect_errno()) {
		echo 'Error:Could not connect to database.Please check and try again';
		exit;
	}
	$result = mysqli_query($db,"SELECT Pub_Name FROM DSI_Publishers");
	if (mysqli_num_rows($result) > 0) { 
		foreach ($result as $row) {
			echo '<option value="'.$row['Pub_Name'].'">'.$row['Pub_Name'].'</option>';
		}
	}
	?>
	<option value="others">Add new record...</option>
	</select><br>
	<input type="text" name="newpubn" id="otherpub" placeholder="Add pubname" style='display:none' align="center"><br><br>
	
	Year of Publication:
	<input type="number" name="year" required><br>
	
	<p style="font-size: 80%">(Price Example:$45)</p>
	Price:
	<input type="text" name="price" required>
	
	<p style="font-size: 80%">If more than one author, seperate them using <b>';'</b></p>
	Author Names:
	<input type="text" name="author" required><br><br>
	
	Abstract:<br>
	<textarea name="abstract" rows="10" cols = "60">
	 
	</textarea><br><br>
	
	Subject Terms: <Select name="subname[ ]" multiple onchange = 'CheckSubs(this.value);'>
	<option value="" disabled selected>Please select a name...</option>
	<?php
	// Create connection
	$db = mysqli_connect("localhost","5717G6","group6","5717G6");
	// Check connection
	if (mysqli_connect_errno()) {
		echo 'Error:Could not connect to database.Please check and try again';
		exit;
	}
	$result = mysqli_query($db,"SELECT Sub_Term FROM DSI_Subjects");
	if (mysqli_num_rows($result) > 0) { 
		foreach ($result as $row) {
			echo '<option value="'.$row['Sub_Term'].'">'.$row['Sub_Term']."</option>";
		}
	}
	?>
	<option value="others">Add new record...</option>
	</select><br>
	<input type="text" name="newsubt" id="othersubt" placeholder="Add sub Term" style='display:none' align="center"><br>
	<input type="text" name="newsubd" id="othersubd" placeholder="Add sub Description" style='display:none' align="center"><br><br>
	
	No of Pages:
	<input type="number" name="pages" required><br><br>
	
	ISBN-10:
	<input type="text" name="ISBN_10"><br><br>
	
	ISBN-13:
	<input type="text" name="ISBN_13"><br><br>
	
	<input type="submit" name="submit" style="color:white;background-color:green;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<input type="reset" value="reset" style="color:white;background-color:red;">
</form>
</div>
<a href="Home.php">Go back to home page</a>
</body>
</html>