<html>
<head>
<title> Car Repair </title> 
<meta name="viewport" content="width=device-width, initial-scale=1">



<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet"/>
    
<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css"/>  

<!--Slideshow--> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<link rel="stylesheet" href="css/main.css"/>   

<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 

<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />  



 

</head>
<body style="font-family: 'Open Sans Condensed', sans-serif;"> 
<div class="navpdiv"> 

<div class="pull-left">
<a class="navbarlnkimg" href="index.php"><img src="img/logo.JPG"/><strong>CARREPAIR</strong></a>
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
<a href="logout.php" class="button disp"><span></span>Logout</a>

</div>
</section> 
   <!--pop-up login-->
 <div id="loginScreen"> 
     
 <a href="#" class="cancel">&times;</a> 
 <center>
<form>
<table class="table1">  
    
    <h2 class="fnt" style=" font-size:50px;">Login</h2>
    <tr>
        <td><label>Username</label></td>
        <td><input class="input1" type="text" name="uname" ></td>
    </tr>
<tr>
        <td><label>Password</label></td>
        <td><input class="input1" type="password" name="pwd"></td>
    </tr>  
<tr>  
    <td></td>
    <td><button style="width:70px">Login</button></td>  
</tr>
</table>  

<div style="position:absolute; top:340px; left:80px; ">Not Yet a Member? <a style="text-decoration:none;" href="register.php" >Register</a></div>
</form> 

</center>

</div> 
    

<div id="cover">

</div>  
    
<body style="font-family:'Open Sans Condensed', sans-serif;">

    <!--end of pop-->    

    <!--pop-up schedule-->
 <div id="AppScreen"> 
     
<a href="#" class="cancels">&times;</a>
 <center>

<?php 
 
include("request-appointment.php");
?>

</center>

</div>  

<div id="covers">

</div>
    

    <!--end of schedule--> 

