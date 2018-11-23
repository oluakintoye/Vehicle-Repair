
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
<body>  
 

<center> <h1> Messages</h1></center>

<div class="pull-left">
<h3 >Send Message </h3>
<!--<form action="submit1.php?id=<?php echo $cust_id= $_REQUEST['id']; ?>" method="post" class="customer_email">
<label>Subject</label>	<input name="subject" type="text" width="1000px" /><br />
<label>Message</label><br />   
				&nbsp; <textarea name="message" cols="50" rows="7" placeholder="Compose email"></textarea> <br />
                &nbsp;&nbsp;<input name="submit_cust_msg" type="button" value="Send"/>
</form> -->
</div> 
<br />  

<div class="">
<?php 
include("index-chat.php"); 
?> 
</div> 
</body>
</html>