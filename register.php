<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Heroes</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="dist/css/style.css">
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
	  
	   function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
	  

      //-->
   </SCRIPT>
</head>

<body>


<?php

include "include/connection.php";
if(isset($_POST['submit']))
{
extract($_POST);
$encrypt_password=md5($password);

$query=mysqli_query($con,"select * from bb_info where bb_regno='$bb_regno'") or die(mysqli_error($con));
if(mysqli_num_rows($query)==1)
	{
		$qry=mysqli_query($con,"select * from bb_credentials where bb_regno='$bb_regno'") or die(mysqli_error($con));
		if(mysqli_num_rows($qry)==1)
			{
				$row=mysqli_fetch_array($qry);
	
					echo"<script>";
					echo 'alert("Already registered with this registration number...!!!")';
					echo"</script>";
			}
		else
			{
					$q=mysqli_query($con,"insert into bb_credentials (bb_regno,email_id,contact_no,password) values('$bb_regno','$email_id','$contact_no','$encrypt_password')") or die(mysqli_error($con));
			
				if($q)
				{ 
					echo"<script>";
					//echo"alert('Registered Sucessfully...!!!');";
					echo "window.location.href='registered.html'";
					echo"</script>";
				}
				else
				{
					echo"<script>";
					//echo"alert('Error While Inserting Record.....');";
					echo"</script>";
				}
			}
	}
	
	
else

		{
	
			$row=mysqli_fetch_array($query);
			
				echo"<script>";
				echo 'alert("Registration no '. $_POST['bb_regno'].' is wrong..!!")';
				//echo "alert('The email address '.'$student_name '.'is already registered');";
				//echo"window.location.href='hostel_dashboard.php'";
				echo"</script>";
			
		}
}
?>


<div class="container">
<div class="row">
<div class="col-md-6" align="center"><div class="col-md-12" align="center">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><img class="img-responsive heroes-logo" src="images/logo.png"  alt="logo_image"  ></div>



<div class="col-md-6" align="center">
<div class="col-md-12" align="center">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-7">

	<div class="row">
    <form method="post">
    
    	<div class="col-md-12" align="left"><p>Blood Bank Name</p></div>
        <div class="col-md-12">
        	  <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="bb_name" placeholder="Name" class="form-control"  type="text" id="bbn" onKeyPress="return ValidateAlpha(event);" required>
    	</div>
        </div>
        
        
        <div class="col-md-12" align="left"><p>Registration No.</p></div>
        <div class="col-md-12">
        	  <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <input  name="bb_regno" placeholder="Registration No." class="form-control"  type="text" id="bb_regno" onkeypress="return isNumberKey(event)" required>
              <span id="status" class="h1">
    	</div>
        </div>
        
        
    
		<div class="col-md-12" align="left"><p>Email</p></div>
        <div class="col-md-12">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email_id" placeholder="E-Mail Address" class="form-control"  type="email" id="email_id" required>
            </div>
          </div>
          
         <div class="col-md-12" align="left"><p>Contact</p></div>
        <div class="col-md-12">
            <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input name="contact_no" placeholder="(845)555-1212" class="form-control" type="text" onkeypress="return isNumberKey(event)" required>
                </div>
          </div> 
          
          
          
    
        <div class="col-md-12" align="left"><p>Password</p></div>
        <div class="col-md-12"> 
        	<div class="input-group">
        	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  			<input name="password" placeholder="Password" class="form-control"  type="password" required>
    		</div>
   	    </div>
    
    	<div class="col-md-12" align="center">&nbsp;</div>
    	<div class="col-md-12">	
        <center><button type="submit" class="btn btn-primary" name="submit">&nbsp;&nbsp;Register&nbsp;&nbsp;</button></center></div>
    	
        <div class="col-md-12" align="center">&nbsp;</div>
    
     </form>	


	</div>

</div>
<div class="col-md-3"></div>

		</div></div>

	</div>

</div>



</div></div>


</body>
</html>