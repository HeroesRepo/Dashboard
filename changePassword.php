<?php<?php
session_start();
if (!(isset($_SESSION['bb_regno']) && $_SESSION['bb_regno'] != '')) {

header ("Location: index.php");

}
?>
<?php
include "include/connection.php";
$query2='select * from bb_info where bb_regno="'.$_SESSION['bb_regno'].'"  ';
    $res2=mysqli_query($con,$query2);
    $rec=mysqli_fetch_array($res2);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Heroes</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
   <!-- Table style -->
   <link rel="stylesheet" href="dist/css/table.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="currentdailyStock.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Heroes</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Heroes</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
   <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
 
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img  class="user-image img-responsive img-circle"  src="dist/img/download.jpg" alt="User profile picture">
            <span class="hidden-xs"><?php echo $rec['bb_name'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
            <img  class="profile-user-img img-responsive img-circle"  src="dist/img/download.jpg" alt="User profile picture">
            <p align="center"><?php echo $rec['bb_name'];?></p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-centre"><center>
                  <a href="logout.php" class="btn btn-default btn-flat">Logout</a></center>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img  class="profile-user-img img-responsive img-circle"  src="dist/img/download.jpg" alt="User profile picture">
          </div>
        <div class="pull-left info">
          <p><?php echo $rec['bb_name'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
         <li><a href="#"><i class="fa fa-th-list"></i> <span>Update  Stock</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
            </span>
         </a>
              <ul class="treeview-menu">
                  <li><a href="form_one.php"><i class="fa fa-circle-o"></i> Form 1</a></li>
                   <li><a href="form_two.php"><i class="fa fa-circle-o"></i> Form 2</a></li>
                  <li><a href="form_three.php"><i class="fa fa-circle-o"></i> Form 3</a></li>
                  <li><a href="form_four.php"><i class="fa fa-circle-o"></i> Form 4</a></li>
                 <li><a href="form_five.php"><i class="fa fa-circle-o"></i> Form 5</a></li>
              </ul>
         </li>
        <li class="treeview"><a href="currentdailyStock.php"><i class="fa fa-th"></i> <span>Current Stock</span></a></li>
        <li><a href="historicalStock.php"><i class="fa fa-table"></i> <span>Historical Stock</span></a></li>
        <li><a href="findDonors.php"><i class="fa fa-search"></i> <span>Find Donors</span></a></li>  
        <li><a href="userProfile.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>
        <li><a href="#"><i class="fa fa-save"></i> <span>Change Password</span></a></li>
          <li><a href="logout.php"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>    
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Change Password
       <!-- <small>it all starts here</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="hostel_dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Change Password</a></li>
      <!--  <li class="active">Blank page</li>-->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header"></div>
        <div class="box-body">
        <div class="row">
        <!-- left column -->
        <div class="col-md-3"></div>
        
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-success" style="border:groove">
            <div class="box-header with-border">
              <h3 class="box-title">Change Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="formpassword" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Old Password</label>
                  <input type="password" class="form-control" placeholder="Old Password" name="pass">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">New Password</label>
                  <input type="password" class="form-control validate[required] text-input" placeholder="New Password" name="pass1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" class="form-control validate[required,equals[password]] text-input" placeholder="Confirm Password" name="pass2">
                </div>
            
              </div>
              <!-- /.box-body -->

              <div class="box-footer" align="center">
                <button type="submit" name="change" class="btn btn-primary">Change Password</button>
				<a href="bloodbankProfile.php"><button type="button" class="btn btn-danger">Cancel</button></a>
              </div>
            </form>
          </div>
          
           <div class="col-md-3"></div>
           
           </div>
          
          <!-- /.box -->
          <?php
		  if(isset($_POST['change']))
		  {
			  include"include/connection.php";
        //$encrypted_mypassword=md5($pass);
			$query='select * from bb_credentials where email_id="'.$_SESSION['uname'].'"and password="'.md5($_POST['pass']).'"';
 		  	$res=mysqli_query($con,$query);
			if(mysqli_num_rows($res)>0)
			{
				if(strlen($_POST['pass1'])>=6)
				{
					if($_POST['pass1']==$_POST['pass2'])
					{
          //$encrypted_newpassword=md5($pass1);
					$query1='update bb_credentials set password="'.md5($_POST['pass1']).'"
					where email_id="'.$_SESSION['uname'].'"';
					$res1=mysqli_query($con,$query1);
					//echo $query1;
					if($res1)
					{
					echo"<script>";
					//echo"alert('Password Change Successfully');";
					echo"</script>";
					}
					else
					{
						echo"Error";
					}
					}
					else
					{
						echo"<script>";
						echo"alert('confirm Password is not match with new Password');";
						echo"</script>";
					}
				}
				else
				{
					echo"<script>";
					echo"alert('Password Length must be Greater than or equal to 6');";
					echo"</script>";
				}
			}
			else
			{
				echo"<script>";
					echo"alert('Old password is wrong. Please Enter valid Password');";
					echo"</script>";
			}
		  }
		  ?>
     
       
          
          
          
          
          
          
          
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
     <div id="footer">
        <img src= "images/logo.png" />
      </div>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2016 <a href="#">Heroes</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


</body>
</html>
