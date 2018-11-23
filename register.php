<?php 
session_start();
?> 
<?php
include("genpage.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

<script>
    var app = angular.module("regApp",[]);
    app.controller('regCtrl',function($scope){  
        $scope.reset=function(){
        $scope.fname="";
        $scope.lname="";
        $scope.email=""; 
        $scope.password="";
        $scope.repassword="";
    } 
    $scope.reset();

    });
</script>  

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
<div style="border:2px solid teal; height:330px; width:420px; margin-top:100px; padding-top:10px;  border-radius:15px;"> 
<h1><strong>Please Fill in your Details</strong></h1>
 
 
<div ng-app="regApp" ng-controller="regCtrl" >
<form name="formapp" method="POST" action="submit1.php" enctype="multipart/form-data" novalidate>
<table style="position:absolute; top:340px;">
<tr>
    <td><label for="firstname" data-icon="u" >First Name</label></td>
    <td><input id="firstname"   name="firstname" ng-model="fname" required="required" type="text" placeholder=""/>  
    <span style = "color:red" ng-show = "formapp.firstname.$dirty && formapp.firstname.$invalid">
                        <span ng-show = "formapp.firstname.$error.required">First Name is required.</span>
                     </span> </td>
</tr>                
<tr>
    <td><label for="lastname" class="" data-icon="u" > Last Name</label></td>
    <td><input id="lastname"   name="lastname" ng-model="lname" required="required" type="text" placeholder=""/>
    <span style="color:red" ng-show="formapp.lastname.$dirty && formapp.lastname.$invalid">
    <span ng-show="formapp.lastname.$error.required"> Last Name is Required</span>
    </span> </td>
</tr>
<tr>
    <td><label for="email" class="" data-icon="u" > Email</label></td>
    <td><input id="email"   name="email" ng-model="email" required type="email" placeholder=""/>
    <span style = "color:red" ng-show="formapp.email.$dirty && formapp.email.$invalid">
    <span ng-show="formapp.email.$error.required"> Email is Required </span> 
    <span ng-show="formapp.email.$error.email"> Invalid Email </span>
    </span></td>
</tr>
<tr>
   <td> <label for="password" class="" data-icon="u" > Password</label></td>
    <td><input id="password"  name="password" ng-model="password"  required="required" type="password" placeholder=""/> </td>
    <br> 
</tr>
<tr>
    <td><label for="repassword" class="" data-icon="u" > Confirm Password</label></td>
    <td><input id="confirm_password" onblur='check();' name="confirm_password" ng-model="repassword" required="required" type="password" placeholder=""/>  <span id='message'></span></td> 
    <br>
</tr>
<tr>
    <td><label for="picture" class="" data-icon="u" > Picture </label></td>
    <td><input id="picture"   name="picture" accept="image/*" required="required" type="file" placeholder=""/></td>
    
</tr> 
<tr>
    <center><td style="position:absolute;right:50%;"><button  name="submitreg" style="width:70px;decoration:none;" name="submitreg" ng-disabled= "formapp.firstname.$dirty &&
                        formapp.firstname.$invalid || formapp.lastname.$dirty &&
                        formapp.lastname.$invalid || formapp.email.$dirty &&
                        formapp.email.$invalid" ng-click="">Submit</button> </td> </center>
</tr>
    </form>  
    </table>
    </div> 
    </center>
</p>    
