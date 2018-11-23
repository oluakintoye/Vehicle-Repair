<?php 
require("connect.php");

  if(isset($_POST['submitreg'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $picture=$_POST['picture'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname']; 

    // $confpass = $_POST['repassword'];

    /*if($confpass!=$password) {?>
        <script>window.alert("Wrong password inputed, Re-Enter Correct Password");</script> 
        <!--header("location:Register.php");-->
        <?php 
    }    
    else{  */ 

    $sqle = "SELECT * FROM `login` where `email`='$email' and `password`='$password'";
   $dete= mysqli_query($conn,$sqle) or die("couldn't perform". mysql_error()); 
   $re = mysqli_fetch_assoc($dete); 
   

   $count = mysql_num_rows($dete);
   echo $count;
   echo "kjhgvfdfgh";

   /*if($count==1){ ?>
   <script> window.alert("This email/user exists already");</script>
<?php 
header("location:register.php");}

   else{
   $sql = "INSERT INTO `login`(`email`,`password`,`picture`,`firstname`,`lastname`) values ('$email','$password','$picture','$firstname','$lastname')";
   $details = mysqli_query($conn,$sql) or die("couldn't submit details to the database". mysql_error()); 
   $result = mysql_fetch_assoc($details,MYSQLI_ASSOC);
//    foreach($res as $result){ echo $res['email'] }
   header("location:custlogin.php");
   }
}   


if(isset($_POST['submitclogin'])){  
    $email=$_POST['email'];
    $password=$_POST['password'];


   $sql = "SELECT * FROM `login` where `email`='$email' and `password`='$password'";
   $details = mysqli_query($conn,$sql) or die("couldn't get details from the database". mysql_error()); 
   $result = mysql_fetch_assoc($details,MYSQLI_ASSOC);

   $count = mysql_num_rows($details);

   if($count==1){
       header("location:custprofile.php");
   } 

  else{ ?>
   <script>Window.alert("Invalid UserName or Password");</script>;
       
<?php
}  ?> 
<?php
}*/}
?>