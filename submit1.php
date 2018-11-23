<?php
 session_start();  
require("connect.php"); 

if(isset($_POST['submitreg']))
  {  

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    $pic="img_folder/";
     $picture=$_FILES['picture'];
    $pics = $pic . $picture;

    move_uploaded_file($picture['temp_name'], $pic);
    
  

    $sqle = "SELECT * FROM `customer` where `email`='$email'";
    $dete= mysqli_query($conn,$sqle) or die("couldn't perform". mysql_error()); 
    $re = mysqli_fetch_assoc($dete); 

    $count = mysqli_num_rows($dete);
 
    if($count==1){  
    echo "<script>alert('This Email/Username already exists, Please Use another Email')</script>";
     echo" <script>setTimeout('window.location.href =\"register.php\"',300)</script>";
                }  
    else { 

    $sql = "INSERT INTO `customer`(`firstname`, `lastname`, `email`, `password`, `confirm_password`, `picture`) values('$firstname','$lastname','$email','$password','$confirm_password','$pics')";
    $result = mysqli_query($conn,$sql) or die("cant execute".mysql_error()); 

    $sqlt = "SELECT * From `customer` where `email`='$email' and `password`='$password'";
    $q = mysqli_query($conn,$sqlt);

    $rows=mysqli_fetch_assoc($q);
    while($rows){ 
     echo $_SESSION['firstname'] = $rows['firstname'];
     echo $_SESSION['lastname'] = $rows['lastname'];

    header("location:index.php#loginScreen");
    }
    }
  }   //registration

if(isset($_POST['submitclogin']))
{  
  $email = $_POST['cust_email'];  
  $password=$_POST['cust_password'];   

 $sqlt = "SELECT * From `customer` where `email`='$email' and `password`='$password'";
  $q = mysqli_query($conn,$sqlt);
  $rows=mysqli_fetch_assoc($q);    
  $count = mysqli_num_rows($q);
  
  $sqly = "SELECT * From `technician_list` where `tech_user`='$email' and `tech_pass`='$password'";
  $qy = mysqli_query($conn,$sqly);
  $row =mysqli_fetch_assoc($qy);     
    $counts = mysqli_num_rows($qy);


      $_SESSION['firstname'] = $rows['firstname'];
      $_SESSION['lastname'] = $rows['lastname'];  
         
       $id = $rows['customer_id'];
echo $counts;
  
  if($counts == 1){ 
	 $ids=$row['tech_id'];
  $_SESSION['tech_name'] = $row['tech_name'];
  	header("location:tech_page.php?id=$ids");
	  	} 

  else if($count==1){ 
    if($rows['access'] == 1){  
      header("location:adminpg.php");
   }
  else if($rows['access']== 0){ 
   header("location:custpg.php?id=$id"); }
  }      
  else{
     /*?>echo "<script>alert('invalid username / or password')</script>";
     echo "<script>setTimeout('window.location.href =\"custlogin.php\"',300)</script>";<?php  */
    header("location:index.php#loginScreen");
      $_SESSION['failedlogin']="Failed Login,Wrong Username or Password"; 

  } 
}  //Login

if(isset($_POST['change_password']))
{ 
      $pass=$_POST['curr_pass'];
      $newpass=$_POST['new_pass'];  

      $sql="SELECT * FROM `customer` where `access`='1'";
      $q=mysqli_query($conn,$sql) or die("Cant"); 
      $rows=mysqli_fetch_assoc($q);

      if($rows['password']==$pass){
      $sqlt="UPDATE `customer` SET `password`='$newpass' WHERE `access`='1'";
      $qt=mysqli_query($conn,$sqlt) or die("cant do"); 

      echo "<script>alert('Password has been Changed')</script>";
      echo"<script>setTimeout('window.location.href=\"adminpg.php\"',500)</script>";
        }  
        
      else{ 
      echo "<script>alert('Incorrect Password Details')</script>";
      echo"<script>setTimeout('window.location.href=\"admin/change-adpass.php\"',500)</script>";
      }
	
}	//`change Admin Password   

if(isset($_POST['completed'])){  
$id=$_REQUEST['id'];
$idt=$_REQUEST['idt'];




$sql="UPDATE `schedule_list` SET `completion_status`='1' WHERE `sch_id`='$id'";
$q=mysqli_query($conn,$sql); 

$sqli="SELECT * FROM `schedule_list` WHERE `sch_id`='$id'";
$qi=mysqli_query($conn,$sqli); 
$rowq=mysqli_fetch_assoc($qi);

$name=$rowq['name'];
$phone=$rowq['phone_no'];
$email=$rowq['email'];
$make=$rowq['make'];
$year=$rowq['year'];
$model=$rowq['model']; 


$trans_id= uniqid();
$sqlt="INSERT INTO `vehicle_info`(`transaction_id`, `name`, `phone_no`, `email`, `make`, `model`, `year`) VALUES ('$trans_id','$name','$phone','$email','$make','$year','$model')";
$qt=mysqli_query($conn,$sqlt); 

$sqlz="INSERT INTO `repaired_cars`(`trans_id`, `make`, `model`, `year`) VALUES ('$trans_id','$make','$model','$year')";
$qz=mysqli_query($conn,$sqlz);

$sqlu="UPDATE `schedule_list` SET `completion_status`='1' WHERE `sch_id`='$id'";
$qu=mysqli_query($conn,$sqlu); 

$sqlv="UPDATE `technician_list` SET `assignment_status`='0' WHERE `tech_id`='$idt'";
$qv=mysqli_query($conn,$sqlv); 

echo "<script>alert('Repair of this Car has been Completed')</script>";
    echo"<script>setTimeout('window.location.href=\"tech/completed-task.php\"',300)</script>"; 
}  // Completion of Repair

if(isset($_POST['submit_schedule'])){   

//personal information
  $name=$_POST['name']; 
  $phoneno=$_POST['phone'];
  $email=$_POST['email'];   
  

  $meth_of_cnt=$_POST['method']; 
  
 
  $appointment_type=$_POST['appointment'];
  
//Preferred appointment
  $date=$_POST['date'];
  $time=$_POST['time'];
  

  $year=$_POST['year'];   
  $make=$_POST['make'];
  $model=$_POST['model'];  
  
 
 $service_requested=$_POST['comments'];

$cust_id= $_REQUEST['id'];


$sql="INSERT INTO `schedule_list`(`cust_id`,`name`, `phone_no`, `email`, `preferred_contact`, `year`, `make`, `model`, `type_of_appointment`, `pref_appoint_date`,`pref_appoint_time`, `service_requested`) VALUES ('$cust_id','$name','$phoneno','$email','$meth_of_cnt','$year','$make','$model','$appointment_type','$date','$time','$service_requested')";

$q=mysqli_query($conn,$sql) or die("cant perfeorm");  

echo "<script>alert('Your Request has been Successfully submitted, We'll get back to you on the diagnosis and repair cost')</script>";
 echo "<script>setTimeout('window.location.href=\"custpg.php?id=$cust_id\"',3000)</script>";
}   //schedule

if(isset($_POST['submittn'])){ 

$techname=$_POST['techname'];
$techuser=$_POST['techuser'];
$techpass=$_POST['techpass'];

$sql="INSERT INTO `technician_list`(`tech_name`,`tech_user`,`tech_pass`) VALUES ('$techname','$techuser','$techpass')";
$q = mysqli_query($conn,$sql);
 
 echo "<script>alert('Technician added')</script>";
 echo "<script>setTimeout('window.location.href=\"adminpg.php\"',300)</script>";
}    //reg technician

if(isset($_POST['delete_schedule'])){ 
$id=$_REQUEST['id'];
echo "<script>alert('Are you sure you want to delete this customer's Schedule')</script>";

$deleteb = $_REQUEST['id']; 
$sql="DELETE FROM `schedule_list` WHERE `sch_id` = $id";
$q=mysqli_query($conn,$sql);

header("location:admin/view_del_completed_schedules.php");
}  //delete schedule

if(isset($_POST['subcarep'])){ 
    
 $repdet = $_POST['repdet'];

 $contactb = $_REQUEST['id'];

$sql="UPDATE `carrepair` SET `repaircost`='$repdet' WHERE `id`='$contactb'";
$q=mysqli_query($conn,$sql);  

header("location:adminpg.php");

 } 

if(isset($_POST['view'])){  
$repid=$_REQUEST['id']; 

$sql="SELECT * from `carrepair` where `cust_id`='$repid'";
$q = mysqli_query($conn,$sql);
//$view=mysqli_fetch_assoc($q);
 while($view=mysqli_fetch_assoc($q)){ 
    echo $view['repaircost'].'<br>';
}

}  

if(isset($_REQUEST['asstech'])){  
  $techassign=$_POST['techass'];
  $contactb = $_REQUEST['id'];

  $sqlc="SELECT * from `technician_list` where `tech_name`='$techassign'";
  $qc= mysqli_query($conn,$sqlc);
  $ch=mysqli_fetch_assoc($qc);

  if($ch['assignment_status']!=1){ 

  $sql="UPDATE `schedule_list` SET `technician_assigned`='$techassign' WHERE `sch_id`='$contactb'";
  $q= mysqli_query($conn,$sql); 

   $sqlq="UPDATE `schedule_list` SET  `assigned_status`='1' WHERE `sch_id`='$contactb'";
  $qq= mysqli_query($conn,$sqlq); 

  $sqly="SELECT * FROM `technician_list` where `tech_name`='$techassign'";
  $qy=mysqli_query($conn,$sqly);
  $row=mysqli_fetch_assoc($qy);

  $ident=$row['tech_id'];

  $sqln="UPDATE `technician_list` SET `assignment_status`='1' WHERE `tech_id`='$ident'";
  $dn=mysqli_query($conn,$sqln);


echo"<script>alert('Technician has been assigned to the Selected Schedule')</script>";   
      echo "<script>setTimeout('window.location.href=\"admin/tech-assignment.php\"',1000)</script>";
}  
else{ echo"<script>alert('This Technician is not available and has be assigned to an Automobile')</script>";   
      echo "<script>setTimeout('window.location.href=\"admin/tech-assignment.php\"',1000)</script>";   }
}	//assign Technician

if(isset($_POST['deletetech'])){?> 
  <script>
  var r=confirm("Are You Sure You Want to Delete this Technician");
  if(r==true){  
  <?php
  $ids=$_REQUEST['id']; 
  $sql="DELETE FROM `technician_list` where `tech_id`='$ids'";
  $q=mysqli_query($conn,$sql);
  header("location:adminpg.php");
  ?>
  }
  </script>
 <?php
}    //delete Technician

if(isset($_POST['carcomp'])){  
  $ids=$_REQUEST['id'];

  $sql="UPDATE `carrepair` SET `repairstatus`='1' WHERE `id`='$ids'";
  $qs=mysqli_query($conn,$sql);

 $sqly="SELECT * FROM `technicianlist` where `techname`='$techassign'";
  $qy=mysqli_query($conn,$sqly);
  $row=mysqli_fetch_assoc($qy);

  $ident=$row['name'];
  // $nam=$_SESSION['techname'];
  $sqlr="UPDATE `technicianlist` SET `assignment_status`='0' WHERE `techname`='$ident'";
  $qs=mysqli_query($conn,$sqlr);

} //unused



?>











