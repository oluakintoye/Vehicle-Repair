<?php
 session_start();  
require("connect.php"); ?> 

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

<a class="disp" href="">Home</a>
<a class="disp" href="">Gallery</a>
<a class="disp" href="">Services</a>
<a class="disp" href="">Contact</a>
<a href="#loginScreen" class="button disp"><span></span>Login</a>

</div>
</section> 

   <!--pop-up login-->
 <div id="loginScreen"> 
     
 <a href="#" class="cancel">&times;</a> 
 <center>
<form action="submit1.php" method="POST" >
<table class="table1">  
    
    <h2 class="fnt" style=" font-size:50px;">Login</h2>
    <tr>
        <td><label>Email</label></td>
        <td><input class="input1" type="text" name="cust_email" ></td>
    </tr>
<tr>
        <td><label>Password</label></td>
        <td><input class="input1" type="password" name="cust_password"></td>
    </tr>  
<tr>  
    <td></td>
    <td><button  href="submit1.php" name="submitclogin"  style="width:70px">Login</button></td>  
</tr>
</table>  
<?php
    if(isset($_SESSION['failedlogin'])){ ?>
        <div style="color:red;"> <?php
            echo $_SESSION['failedlogin']; 
            unset($_SESSION['failedlogin']);?>
            </div> 
   <?php }  ?>

<div style="position:absolute; top:340px; left:80px; ">Not Yet a Member? <a style="text-decoration:none;" href="register.php" >Register</a></div>
</form> 

</center>

</div> 
    

<div id="cover">

</div> 
    

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

 

<div id="myCarousel" class="carousel-slide" data-ride="carousel">

<!--indicators--> 
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" ></li>
<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
</ol>   

<!--wrappers--> 
<div class="carousel-inner"> 

<div class="item-active"> 
    <img  class="displayed" src="img/hc1.JPG"/> 
        <div class="carousel-caption">
        <!--<p><a href="#AppScreen" style=" width:300px; height:50px;  text-decoration:none;
         font-size: 25px; margin-left:-150px; background:gray; font-weight:strong;">Request Appointment...</a></p>-->
        <br>
        <br>
        <!--<a href="request-appointment.php" target="popup" onclick="window.open('request-appointment.php','jbnWindow','width=700,height=400')"><button style=" width:300px; height:50px; position:absolute; .button:hover{background:teal;}; bottom:-27px; font-size: 25px; margin-left:-150px; background:gray; font-weight:strong;">Request Appointment</button></a>-->
        </div> 
        
</div> 

<div class="item">
    <img class="displayed" src="img/hc2.JPG"/> 
    <div class="carousel-caption">
        <p></p>
    </div>
</div>

<div class="item"> 
    <img class="displayed" src="img/hc3.JPG"/>
    <div class="carousel-caption">
        <p></p>
    </div>
</div> 


<!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
</div>  



<div class="container">
    <div class="row"> 
        <div class="col-md-3"> 
            <div class="sect">
            <div class="thumbnail">
	      <img src="img/s2.JPG"/>
	        </div>
        <h3 class="fnt">Schedule Services</h3>
        <p> </p>
        <button href="">Read More</button>
        </div>
        </div>
        
        <div class="col-md-3"> 
            <div class="sect">
            <div class="thumbnail">
	      <img src="img/s3.JPG"/>
	        </div>
        <h3 class="fnt">Preventive Maintenance</h3>
        <p></p>
        <button href="">Read More</button>
        </div>
        </div>

        <div class="col-md-3">
            <div class="sect">
            <div class="thumbnail">
	    <img class="" src="img/s1.PNG"/>
	        </div>
       <h3 class="fnt">Repair Services</h3>
        <p></p>
        <button href="">Read More</button>
        </div>
        </div>

        <div class="col-md-3">
            <div class="sect">
            <div class="thumbnail">
	    <img src="img/s4.JPG"/>
	        </div>
        <h3 class="fnt">Tire & Wheel Services</h3>
        <p></p> 
        <button href="">Read More</button>
        </div>
        </div>

        

    </div>
</div>  

<div class="container" style=" width:90%; height:120%">
<div class="pull-left">
    <h1 style="text-weight:bold;">Welcome!</h1>
                      <p class="pull-right"><strong>Olumide's Car Repair,</strong> 
                    has been providing top quality auto repair and maintenance services in, Nigeria<br> since 2017. Weve built our reputation on top quality
                    customer service and outstanding auto services. For decades, our team has faithfully<br> served VI Area by keeping its customers on the road.
                    We treat our customers like family and their vehicles like our own. And we always fix our<br> cars right the first time! That’s exactly what
                    you can expect from Olumides Automotive. We are locally owned and operated and dedicated to<br> providing reliable, professional quality automotive services.
                    Our service expertise makes Olumide’s Automotive the go-to auto repair facility for the<br> surrounding local communities! Whether you need a 
                    quick lube service center, brake repair, or check engine light diagnostics our team is here to help.<br> 
                             Additionally, we work on all makes and models and specialize in engine and transmission repair.<br>We have an experienced team of
                    ASE Certified technicians who utilize state-of-the-art technology to provide fast and accurate diagnosis of <br>problems and repair them 
                    so you can get back to your life. Call (234) 81-774-706-88 or stop by ______ for service. </p>  

                  
</div>  
<br>
<br>


<div style="margin:30px" class="pull-right">
                             
                          
    <img src="img/page1-img4.png"><strong> Our Hours </strong>
                               
            
    <p ><strong>24 Hour Emergency Towing</strong></p>
    <p>Monday - Friday: 7:30 am - 6:00pm</p>
    <p>Saturday: 7:30 am - Noon</p>
    Night Drop Available 
    </div>  
<br>
<br>                   
<br> 
<div>
    
</div>  
<br><br><br>
<div class="pull-right">       
    <img  style=" width:70%; height:35%" class="pull-right" src="img/map.JPG"/> 
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br>

    <div style="margin-right:425px;" class="pull-right"> 
    <p><strong>
    VI Road,Adeyemo Alakija<br>
    Telephone: +234 81 7747 0688;<br>
    FAX: +2314<br>
    E-mail:<a href="#">carsupport@carrepair.com</a></strong>
    </p>  
    
</div>  <div style="position:absolute; top:1400px;" class="">
    <h1 class="">Our Services</h1>
                            <ul class="">
                              <li>Complete Computer Diagnostics</li>
                              <li>Complete Safety Analysis</li>
                              <li>Drivability Problems</li>
                              <li>Oil Changes</li>
                              <li>Emission Repair Facility</li>
                              <li>Air Conditioning Service</li>
                              <li>Electrical Systems</li>
                              <li>Fleet Maintenance</li>
                            </ul>
    </div> 

                     
</div>


                
</div>

 <center><footer>
      <div class="main"> <span>Copyright &copy; <a href="#">CarRepair</a> All Rights Reserved</span><br>
       Design by <a target="_blank" href="">Olumide Akintoye</a> </div>
    </footer></center>


<!--<a href="adminlogin.php">Click here for Admin/Technician Login</a> &nbsp <a href="custlogin.php"> Click here for Customer Login</a>-->
</body>
</html>
