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
  

<link rel="stylesheet" href="../css/main.css"/>   

<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 

<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />  


</head>

<body style="font-family: 'Open Sans Condensed', sans-serif;"> 
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
</br>
<section class="menu-section"> 
<div class="menu"> 

<a class="disp" href="index.php">Home</a>
<a class="disp" href="">Gallery</a>
<a class="disp" href="">Services</a>
<a class="disp" href="">Contact</a>
<a href="../logout.php" class="button disp"><span></span>Logout</a>

</div>
</section> 
  
<br><BR><BR>
<center>
<div style="border-radius:7px; border:2px solid teal;height:300px; width:400px;"> 
<form method="POST" action="../submit1.php">
<h1> <b style="color:teal">Register Technician</b></h1>
<br>
<label for="Add Technician" style="font-size:22px">Add Technician Name: </label> 
<input type="text" id="" value="Tech. " name="techname" style="width:200px "/> 
<br>
<br>
<label for="Add Technician" style="font-size:22px">Tech. Username: </label> 
<input type="text" id="" value="" name="techuser" style="width:200px "/> 
<br>
<br>
<label for="Add Technician" style="font-size:22px">Tech. Password: </label> 
<input type="password" id="" value="" name="techpass"style="width:200px " /> 
<br>
<br>
 <input type="submit" name="submittn" value="Submit" />  
</form>  

</div> 
</center>
</body>
</html>