<?php 
require("../connect.php"); 
?>
<html>
<head>
<title> Change Admin Password </title> 
<meta name="viewport" content="width=device-width, initial-scale=1">



<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet"/>
    
<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css"/>  

<!--Slideshow--> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<link rel="stylesheet" href="../css/main.css"/>   

<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 

<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />  


</head>

<body style="font-family: 'Open Sans Condensed', sans-serif;font-size:30px;"> 
<div class="navpdiv"> 

<div class="pull-left">
<a class="navbarlnkimg" href="index.php"><img src="../img/logo.JPG"/><strong>CARREPAIR</strong></a>
</div> 

<div class="rightdiv">   
<b>Support</b>:admin@carrepair.com   
</div>

</div> 
<br> 
<div>
<br>
</div>
<section class="menu-section"> 
<div class="menu"> 

<a class="disp" href="index.php">Home</a>
<a class="disp" href="">Gallery</a>
<a class="disp" href="">Services</a>
<a class="disp" href="">Contact</a>
<a href="../logout.php" class="button disp"><span></span>Logout</a>

</div>
</section> 
  <br />
  <br /> 
  
<script>
var check = function() {
  if (document.getElementById('confirm_password').value == document.getElementById('password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Correct';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Wrong Match';
  }
}
</script>

  <center>
  <div style="border-radius:7px; border:2px solid teal; width:650px;"> 
<h1><b>Password Change</b></h1> 
<form action="../submit1.php" method="post">  
<label >Current Password</label> &nbsp;<input name="curr_pass" type="password" /><br />
<label >New Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="new_pass" id="password"  type="password" /><br />
<label >Confirm Password</label>&nbsp;<input name="conf_pass" id="confirm_password" onblur='check();' type="password" /><span id='message'></span><br /> 
<br />
<button name="change_password"> Submit </button>
</form>
 

</div></center>
  </body>
  </html>
