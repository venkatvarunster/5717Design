<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Data and Text Mining Inventory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
 

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="Madarapu-ProjectOne.php">DTMI (Data and Text Mining Inventory)</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">A - Z</a></li>
        <li><a href="#query">Query Search</a></li>
        <li><a href="entry.php">Entry Form</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Search Books By Title</h1> 
  <p>Type datamining and textmining keywords in below box</p> 
  
    <div class="input-group">
	<form action="output.php" method="post">
     <input type="text" class="form-control" size="200" id= "search">
     </div>
      <br>
	  <input type="submit">
       
      
	   </form >
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About this Inventory</h2><br>
      <h4>This page is a catalog of resources related to DATA MINING and TEXT MINING. Resources like articles, journals, magazines, textbooks, blogs related to Data mining and Text Mining are listed in the site. </h4><br>
      <p>The web application provides list of resources by entering keyword related to DATA MINING and TEXT MINING and all otehr information of the resources. User can also retrieve information like list from database based on his input. </p><br>
	  <p> This page has been designed and controlled by Vster</p>
      <br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
    </div>
    <div class="col-sm-4">
      <img src="socialShareImage.img_-204x210.png" alt="data mining">
	  <img src="img1.png" alt="text mining">
    </div>
  </div>
</div>

<script>
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
</script>
<div id = "services">
<div class="container-fluid bg-grey">
  <div class="row">
    
    <div>
      <ul class="pagination">
	    <li><a href='javascript:Startswith("A");'>A</a></li> 
		<li><a href='javascript:Startswith("B");'>B</a></li> 
		<li><a href='javascript:Startswith("C");'>C</a></li> 
		<li><a href='javascript:Startswith("D");'>D</a></li> 
		<li><a href='javascript:Startswith("E");'>E</a></li>
		<li><a href='javascript:Startswith("F");'>F</a></li>
		<li><a href='javascript:Startswith("G");'>G</a></li>
		<li><a href='javascript:Startswith("H");'>H</a></li>
		<li><a href='javascript:Startswith("I");'>I</a></li>
		<li><a href='javascript:Startswith("J");'>J</a></li>
		<li><a href='javascript:Startswith("K");'>K</a></li>
		<li><a href='javascript:Startswith("L");'>L</a></li>
		<li><a href='javascript:Startswith("M");'>M</a></li>
		<li><a href='javascript:Startswith("N");'>N</a></li>
		<li><a href='javascript:Startswith("O");'>O</a></li>
		<li><a href='javascript:Startswith("P");'>P</a></li>
		<li><a href='javascript:Startswith("Q");'>Q</a></li>
		<li><a href='javascript:Startswith("R");'>R</a></li>
		<li><a href='javascript:Startswith("S");'>S</a></li>
		<li><a href='javascript:Startswith("T");'>T</a></li>
		<li><a href='javascript:Startswith("U");'>U</a></li>
		<li><a href='javascript:Startswith("V");'>V</a></li>
		<li><a href='javascript:Startswith("W");'>W</a></li>
		<li><a href='javascript:Startswith("X");'>X</a></li>
		<li><a href='javascript:Startswith("Y");'>Y</a></li>
		<li><a href='javascript:Startswith("Z");'>Z</a></li>
 </ul>
    </div>
  </div>
</div>
</div>
<br>
<br>
<br>

<div id="StartswithA" class="hidethis  col-md-offset-2" style="display:none;">

<?php $servername = "localhost";
$username = "vm0240";
$password = "password";
$dbname = "vm0240";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//else { echo "Succesfully Connected"; }

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'A%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}
else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithB" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'B%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}
else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithC" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'C%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithD" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'D%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithE" class="hidethis  col-md-offset-2" style="display:none;">

<?php 
$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'E%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>



<div id="StartswithF" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'F%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>


<div id="StartswithG" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'G%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div> 



<div id="StartswithH" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'H%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithI" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'I%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithJ" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'J%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithK" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'K%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithL" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'L%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithM" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'M%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithN" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'N%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithO" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'O%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithP" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'P%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithQ" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'Q%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithR" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'R%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}
else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<div id="StartswithS" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'S%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>
<div id="StartswithT" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'T%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>
<div id="StartswithU" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'U%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>
<div id="StartswithV" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'V%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>
<div id="StartswithW" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'W%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}
else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>
<div id="StartswithX" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'X%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>
<div id="StartswithY" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'Y%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>
<div id="StartswithZ" class="hidethis  col-md-offset-2" style="display:none;">

<?php 

$sql = "SELECT TITLE FROM DTMI_RESOURCE WHERE TITLE LIKE 'Z%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo $row['TITLE']."<br>";
}
}

else
echo "No records found";

?> 
<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>
</div>

<script type="text/javascript">

function Startswith(xyz){

	var a="Startswith"+xyz;

	var divid = document.getElementById(a);
    var divs = document.getElementsByClassName("hidethis col-md-offset-2");
    for(var i=0;i<divs.length;i++) {
      divs[i].style.display = "none";
    }
    divid.style.display = "block";
	
	//var secondDivContent = document.getElementById(a);
	

	//secondDivContent.style.display="block";
	
}



</script>


<!-- Container (About Section) -->
<div id="query" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Search by query</h2><br><br>
	  <form action="output.php" method="post">
	  Select : <select name="query" required>
  <option value="query1">Books with publisher name</option>
  <option value="query2">Books under price</option>  
 </select> <input type="text" name="inputquery" ><br>
<input type="submit" >
  
</div>

  </form>      
	  
	  

	<br><button class="btn btn-default btn-lg" onclick="topFunction()" title="go to top">Go to Main Page</button>  
         
  </div>
</div>
