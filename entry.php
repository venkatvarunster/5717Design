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
  
 form {

font-size: 100%;
    width: 50%;
	float: left;
	color: black;
	padding: 20px 24px;
	

}
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
}

input[type=submit] {
    width: 85%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
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
        <li><a href="Madarapu-ProjectOne.php">ABOUT</a></li>
        <li><a href="Madarapu-ProjectOne.php">A - Z</a></li>
        <li><a href="Madarapu-ProjectOne.php">Query Search</a></li>
        <li><a href="entry.php">Entry Form</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- Container (entry Section) -->
<div id="entry" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <button class="tablinks" onclick="opentab(event, 'Resource')">Resource Details</button>
  <button class="tablinks" onclick="opentab(event, 'Subject')">Subject Details</button>
 <button class="tablinks" onclick="opentab(event, 'Publisher')">Publisher Details</button>
   
</div>
<form action="welcome.php" method="post">

<div id="Resource" class="tabcontent">
  <h1> Resource Details </h1>


Title:
 <input type="text" name="title" required><br>
 
Author 1:
 <input type="text" name="author1"><br>
 
Author 2:
 <input type="text" name="author2"><br>
 
Author 3:
 <input type="text" name="author3"><br>
 
Edition:
 <input type="text" name="edition"><br>
 
Language:
 <input type="text" name="language"><br>
 
Product Type: 

 <input type="text" name="product"><br>
 
<h6> For example: Hardcover/Paperback/eBook</h6><br>
<br>

Resource Description: <br><br><textarea id="resdec" name="resdec" rows="4" cols="50"></textarea><br> 

ISBN 10: <input type="text" name="ISBN10" ><br>

ISBN 13: <input type="text" name="ISBN13" ><br>

Number of Pages: <input type="text" name="pagecount" ><br>

Publisher: <Select name="publisher" required>
<option></option>
<?php

$servername = "localhost";
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

$sql = "SELECT PUBLISHER FROM DTMI_PUBLISHER";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo '<option value="'.$row['PUBLISHER'].'">'.$row['PUBLISHER']."</option>";
}
}
?>

</select><br>

Price: <input type="text" name="price" ><br>

Publishing Date: <input type="text" name="pubdate" ><br>

Subject: <Select required name="subject">
<option></option>
<?php

$sql = "SELECT SUBJECT FROM DTMI_SUBJECT";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo '<option value="'.$row['SUBJECT'].'">'.$row['SUBJECT']."</option>";
}
}

$conn->close();
?>

</select><br><br><h6>Note: If the publisher or Subject is not in dropdown list. Please add the details in other tabs, save it and come back to add resource.<br><br>
<input type="submit" id="dtmi_res">


</div>
</form>
<form action="welcome.php" method="post">

<div id="Subject" class="tabcontent" style="display:none;">
  <h1> Subject Details </h1>
  
  Subject Name: <input type="text" name="subname" required><br>
  
  Subject Description: <input type="text" name="subdesc" ><br>
  <input type="submit" id="dtmi_sub">
</div>
</form>
<form action="welcome.php" method="post">

<div id="Publisher" class="tabcontent" style="display:none;">
  <h1> Publisher Details </h1>
  
  Publisher Name: <input type="text" name="pubname"  ><br>
  
  Publisher Place: <input type="text" name="pubplace" ><br>
  <input type="submit" id="dtmi_pub">
  
</div>

  </form>
</div>
 </div>

<script>
function opentab(evt, resname) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(resname).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
