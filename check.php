<html>
<head>
	<title>Adding new resources form</title>
	<style> 
		.myform{
		padding-top: 20px;
		}
	</style>
	<script type="text/javascript">
		
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
<body background="img3.jpg" >
<?php
	if (isset($_POST["submit"])) {
		
		//process form
		$db = mysqli_connect("localhost","5717G6","group6","5717G6");
		if (mysqli_connect_errno()) {
			echo 'Error:Could not connect to database.Please check and try again';
			exit;
		}
		echo 'Database connection successful.<br>';
		
		$subname = $_POST["subname"];
		$newsubt = $_POST["newsubt"];
		$newsubd = $_POST["newsubd"];
		
		
		function authordatainsertion($inputsubterm) {
			//Selecting data from DSI_Subjects for insertion into DSI_Subjects_Books table
				$result = mysqli_query($db,"SELECT * FROM DSI_Subjects WHERE Sub_Term = '".$inputsubterm."'");
				$temp_subid ="";
				if (mysqli_num_rows($result) > 0) { 
					echo "Record found for sub term: ".$inputsubterm."<br>";
					foreach ($result as $row) {
						$temp_subid = $row['Sub_ID'];
						echo "Found Sub ID: ".$temp_subid."<br>";
					}
				
				}
				else {
					echo "No Record found for sub term: ".$inputsubterm."<br>";
					exit();
				}
		}
		
		//Inserting data into DSI_Subjects table
		echo 'Subject Terms are: ';
		if (!empty($subname)) {
			foreach($subname as $name)
			{
				echo $name.'<br>';
				authordatainsertion($name);
			}
		}
		
		
		mysqli_close($db); 
	}
?>
<h1 align="middle" style="color:red;"> Web Entry Form to add new information to Data Science Inventory database </h1>
<div class="myform">
<form method="post" action="" align="center" >
	
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
	<input type="text" name="newsubt" id="othersubt" placeholder="Add sub Term" style='display:none'><br>
	<input type="text" name="newsubd" id="othersubd" placeholder="Add sub Description" style='display:none'><br><br>
	
	<input type="submit" name="submit" style="color:white;background-color:green;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<input type="reset" value="reset" style="color:white;background-color:red;">
</form>
</div>
<a href="Home.php">Go back to home page</a>
</body>
</html>