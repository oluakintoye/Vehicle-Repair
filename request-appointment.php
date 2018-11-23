
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/css.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/calendar.css">

     <script src="js/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("appointment").submit();
       }
     </script>

</head>

<body style = "background: #FFFFFF;min-width:0;">

<form method="POST"  action="submit1.php?id=<?php echo $cust_id= $_REQUEST['id'];?>" id = "appointment">

 <script type="text/javascript">
// var RecaptchaOptions = {
//    theme : "white"
// };
// </script>


	<div class="fancy-wrapper">
    	<div class="one_whole" style="max-width:900px; padding:20px 0px; background-color:#FFFFFF;" 
id="appointment">


        	<div class="first_half">
                <div class="form_1 form_1_format">
                    <div class="form_1_top"></div>
                    <div class="one_whole" style="padding:1px; max-width:374px; padding:20px 0px;">
                    	<h2>Personal Information</h2>
                        <input type="text" placeholder="Name (Required)"  name="name" value="" maxlength = 
40/>
                        <input type="text" placeholder="Phone (Required)"  name="phone" value = ""  
maxlength = 16/>
                        <input type="text" placeholder="Email (Required)" name="email" value = "" 
maxlength = 40/>



                        <table cellpadding="0" cellspacing="0" border="0" id="type_of_appointment_tbl">
                        	<tr>
                       	  <td>
                                	<p>Preferred Method of Contact</p>
                                </td>
                                
                                <td>
                                <p>
                                  <label>
                                    <input type="radio" name="method" value="email" id="RadioGroup1_0">
                                    Email</label>
                                  <br>
                                  <label>
                                    <input type="radio" name="method" value="text" id="RadioGroup1_1">
                                    Text</label>
                                  <br>
                                  <label>
                                    <input type="radio" name="method" value="phone" id="RadioGroup1_2">
                                    Phone Call</label>
                                  <br>
                              </td>
                                
                           </tr>
                               
                        </table>

                    </div>
                </div>
                <div class="clear"></div>
                
                <div class="form_1 form_1_format" style="margin-top:20px;">
                    <div class="form_1_top"></div>
                    <div class="one_whole" style="padding:1px; max-width:374px; padding:20px 0px;">
                    	<h2>Appointment Information</h2>

<input type = "hidden" name = "location" value = "">

                        <table cellpadding="0" cellspacing="0" border="0" id="type_of_appointment_tbl">
                        	<tr>
                            	<td>
                                	Type of Appointment
                                </td>
                                <td>
                                    <label>
                                      <input type="radio" name="appointment" value="drop off" id="RadioGroup1_3">
                                      Drop Off</label>
                                  
                                  
                                    <label>
                                      <input type="radio" name="appointment" value="waiting" id="RadioGroup1_4">
                                      Waiting</label></td>
                                  
                                
                            </tr>
                        </table>
                        <h2 style="font-family:gothic;">Preferred Appointment</h2>
                        <p class="small_notes">(Please give a 24 hour minimum notice)</p>
                        
                        <div style="height:20px;"></div>
                        <script language="javascript" src="js/dhtmlgoodies_calendar.js"></script>
                        
                        <div class="first_half">
                            <input type="text" placeholder="yyyy/mm/dd (Required)" class="field" 
name="date" value="" style="width:80%; display:inline-block; vertical-align:top;">
                     
                            	<img src="img/fancybox-calendar_icon.png" style="margin:5px 0px; 
width:auto;">
                            
                            
                        </div>
                        <div class="last_half">
                            <input type="time" placeholder="Option 1 Time"  name = "time" value = "" 
maxlength = 20/>
                        </div>
                        <div class="clear" style="border-bottom:1px dotted #687A95; height:1px; margin:15px 
0px;"></div>
                        <!--<div class="first_half">
                        	<input type="date" placeholder="Option 2 Date" class="field" name="date2" 
value="" style="width:80%; display:inline-block; vertical-align:top;" readonly="">
                            <a href="#" 
onclick="displayCalendar(document.forms[0].date2,'yyyy/mm/dd',this);return false;" style="width:15%; 
display:inline-block;">
                            	<img src="img/fancybox-calendar_icon.png" style="margin:5px 0px; 
width:auto;">
                            </a>
                        </div>-->
                        <!--<div class="last_half">
                        	<input type="time" placeholder="Option 2 Time"  name = "time2"  value = 
"" maxlength = 20/>
                        </div>
                        <div class="clear" style="border-bottom:1px dotted #687A95; height:1px; margin:15px 
0px;"></div>-->
                        
 <script src="js/placeholders.min.js"></script>
                        
                        <div class="small_notes" style="font-size:13px; font-family:gothic;">
                        	<p>
                                <span style="font-family:gothic_bold;">Please Note:</span> These dates and 
times are not scheduling an actual appointment. Someone will contact you with a 
confirmed date and time.
                            </p>
                            
                        </div>

                        
                        
                    </div>
                </div>
            </div>
            <div class="last_half">
            	<div class="form_1 form_1_format">
                    <div class="form_1_top"></div>
                    <div class="one_whole" style="padding:1px; max-width:374px; padding:20px 0px;">
                    	<h2>Vehicle Information</h2>
                        <input type="text" placeholder="Year (Required)" name="year" value = "" maxlength 
= 40/>
                        <input type="text" placeholder="Make (Required)" name="make" value = "" maxlength 
= 40/>
                        <input type="text" placeholder="Model (Required)" name="model" value = "" 
maxlength = 40/>
                        


                 
                    </div>
                </div>
                
                <div class="form_1 form_1_format" style="margin-top:20px;">
                    <div class="form_1_top"></div>
                    <div class="one_whole" style="padding:1px; max-width:374px; padding:20px 0px;">
                    	<h2>Services Requested/Comments</h2>
                        <textarea style="height:190px;" name="comments"></textarea>
                    </div>
                </div>
<br>


            </div>



            <div class="clear"></div>
            <div style="text-align:center; margin-top:20px;">
            	<button name="submit_schedule">Submit</button>
            </div>
        </div>
    </div>




	<input type="text" name="my_url" class="my-url" value="">
								</form>
 <script src="js/placeholders.min.js"></script>
 
</body>
</html>