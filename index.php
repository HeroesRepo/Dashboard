<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Heroes</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="dist/css/style.css">
<style>
.error{
	color: red;
	
}	
</style>
</head>

<body>

<?php
include "include/connection.php";
	if(isset($_POST['submit']))
		{
			session_start();	
			$email_id=$_POST['email_id']; 
			$password=$_POST['password']; 
			$encrypted_mypassword=md5($password);


$sql=mysqli_query($con,"SELECT * FROM bb_credentials WHERE email_id='$email_id' and password='$encrypted_mypassword'") or die(mysqli_error($con));
//$result=mysql_query($sql);

			if(mysqli_num_rows($sql)==1)
			{
				$row=mysqli_fetch_array($sql);
				
				
				$_SESSION['uname']=$row['email_id'];
				$_SESSION['bb_regno']=$row['bb_regno'];
				
					echo"<script>";
					//echo "Login Successful..!!";
					echo"window.location.href='currentdailyStock.php'";
					echo"</script>";
				}
				else
				{

					$query=mysqli_query($con,"select * from bb_credentials where email_id='$email_id'") or die(mysql_error($con));
					if(mysqli_num_rows($query)==1)
					{

							$query1=mysqli_query($con,"select * from bb_credentials where password='$encrypted_mypassword'") or die(mysql_error($con));
							if(mysqli_num_rows($query1)==1)
							{

							}
							else
							{
								echo"<script>";
								echo "alert('Password is incorrect...!');";
								echo"</script>";
							}



					}
					else
					{
						echo"<script>";
						echo "alert('Email-id is not registerd...! Please Sign-In to continue...!');";
						echo"</script>";
					}

					
							
							
					
				}
			}
?>

<div class="container">
<div class="row">
<div class="col-md-6" align="center"><div class="col-md-12" align="center">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><img class="img-responsive heroes-logo" src="images/logo.png"  alt="logo_image"  ></div>

    

<div class="col-md-6" align="center">
<div class="col-md-12" align="center">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div><div class="col-md-12" align="left">&nbsp;</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-7">

	<div class="row">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="col-md-12" align="left"><p>Email</p></div>
        <div class="col-md-12">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email_id" placeholder="E-Mail Address" class="form-control"  type="email" id="email_id">
           </div>
           </div>
    
        <div class="col-md-12" align="left"><p>Password</p></div>
        <div class="col-md-12"> 
        	<div class="input-group">
        	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  			<input name="password" placeholder="Password" class="form-control"  type="password">
    		</div>
    	</div>
    
    	<div class="col-md-12" align="center">&nbsp;</div>
    	<div class="col-md-12">	
        <center><button type="submit" class="btn btn-primary" name="submit">&nbsp;&nbsp;Login&nbsp;&nbsp;</button></center></div>
    	
        <div class="col-md-12" align="center">&nbsp;</div>
    
     	<div class="col-md-12" align="left"><p>Not Registered yet?&nbsp;<a href="register.php">Sign Up</a></p></div>

</form>
	</div>

</div>
<div class="col-md-3"></div>

		</div></div>

	</div>

</div>



</div></div>




  
</div>


</body>
</html>