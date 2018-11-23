<?php 
require("../connect.php"); 
?>
<html>
<head>
<title> Delete Technician </title> 
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
  
  <center>
<div style="border-radius:7px; border:2px solid teal; width:600px;"> 
<center><h1><b>Technicians</b></h1>
<div>  

<?php  

$sql ="SELECT * from `technician_list`";
$q=mysqli_query($conn,$sql) or die("can't do");

while($list=mysqli_fetch_assoc($q)){ ?> 
    <?php  
     echo '<li>' . $list['tech_name']; ?> 
     <form method="POST" action="../submit1.php?id=<?php echo $list['tech_id']; ?>"> <button name="deletetech">Delete</button> </li></form>

  <?php  
}
?>
</div>
</center>
</div>
</center>
  
  </body>
  </html>