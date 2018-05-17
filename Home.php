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

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">DataScience Inventory</h3>
  <br>
  <br>
  <p class="margin"> The main objective of the website is as an online catalog which provides the information of books related field of data science. </p>
  <p class="margin">The website contains data science related books which includes data analytics, visualization, machine learning, data mining, text mining. </p>
  <br>
  <br>
  <h3>Team Members:</h3>
  <p class="margin"> (from left to right): Akhil Tammina; Venkatvarun Madarapu; Swathi Reddy </p>
  <p class="margin"> Venkata Santhosh Danduru</p>

  <img src="akhil.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="400">
  <img src="varun.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="400">
  <img src="swathi.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="450">
  <img src="santhosh.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="400">
  
</div>
<br>
<br>
<br>


<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">What is Data Science	?</h3>
  <br>

  <div style="text-align:center"> 
  
  <button onclick="makeBig()">Big</button>
  <button onclick="makeSmall()">Small</button>
  <button onclick="makeNormal()">Normal</button>
  <br><br>
  <video id="video1" width="500" controls>
    <source src="DataScience.mp4" type="video/mp4">
    
    Your browser does not support HTML5 video.
  </video>
</div> 

<script> 
var myVideo = document.getElementById("video1"); 

function makeBig() { 
    myVideo.width = 900; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 450; 
} 
</script> 
<p> This video has been referred from Youtube Channel : Simplilearn</p>
  
</div>



<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Where To Find Us?</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p>Akhil Tammina </p>
      <a href="mailto:Akhiltammina@my.unt.edu">Akhiltammina@my.unt.edu</a>
      
    </div>
    <div class="col-sm-3"> 
      <p>Swathi Kosuna</p>
      <a href="mailto:SwathiKosuna@my.unt.edu">SwathiKosuna@my.unt.edu</a>
      
    </div>
    <div class="col-sm-3"> 
      <p>Venkatvarun Madarapu</p>
      <a href="mailto:VenkatvarunMadarapu@my.unt.edu">VenkatvarunMadarapu@my.unt.edu</a>
      
    </div>
    
    <div class="col-sm-3"> 
      <p>Venkata Santhosh Danduru</p>
      <a href="mailto:VenkataSanthoshDanduru@my.unt.edu">VenkataSanthoshDanduru@my.unt.edu</a>
      
    </div>
  </div>
</div>
<br>
<br>
<br>		
		
		
		
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>This website has been designed by Group 6 of Course INFO 5717 as part of Final Project<p>
</footer>

</body>
</html>
