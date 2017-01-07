<?php
session_start();
if (!(isset($_SESSION['bb_regno']) && $_SESSION['bb_regno'] != '')) {

header ("Location: index.php");

}
?>
<?php
include "include/connection.php";
$query_info='select * from bb_info where bb_regno="'.$_SESSION['bb_regno'].'"  ';
    $res_info=mysqli_query($con,$query_info);
    $rec=mysqli_fetch_array($res_info);
?>
<?php
include "include/connection.php";
$query_credentials='select * from bb_credentials where bb_regno="'.$_SESSION['bb_regno'].'"  ';
    $res_credentials=mysqli_query($con,$query_credentials);
    $rec_credentials=mysqli_fetch_array($res_credentials);
?>
<?php
include "include/connection.php";

if(isset($_POST['update']))
{
  extract($_POST);
 
  $query=mysqli_query($con,"update bb_credentials set
  email_id='$email_id',contact_no='$contact_no'  where  bb_regno='".$_SESSION['bb_regno']."' ") or die(mysqli_error($con)); 
   if($query)
                          {
               echo '<script type="text/javascript">';
               //echo " alert('Record Updated');";
               echo 'window.location.href = "userProfile.php";'; 
               echo '</script>';
      
                        }
                       else
                       {
               echo '<script type="text/javascript">';
               //echo "alert('Eror Occured');";
                           die(mysqli_error($con));
                 echo '<script>';
                           //echo $cQry;
      
                       }
}


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
        <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
        <li><a href="changePassword.php"><i class="fa fa-save"></i> <span>Change Password</span></a></li>
          <li><a href="logout.php"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>    
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <!--<small>advanced tables</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="container">
            <div class="row">
            <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="col-md-12">&nbsp;</div>
                    <table style="width: 80%">
                    <form method="post">
                      <tr><td>Blood Bank Name: </td><td>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="bb_name" placeholder="Name" class="form-control"  type="text" id="bbn" onKeyPress="return ValidateAlpha(event);" value="<?php echo $rec['bb_name'];?>" ng-readonly ng-disabled="">
                        </div></td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td>Email-id: </td><td>
                       <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email_id" placeholder="E-Mail Address" class="form-control"  type="email" id="email_id" value="<?php echo $rec_credentials['email_id']; ?>">
                        </div></td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td>Contact No.:</td><td>
                          <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                          <input name="contact_no" placeholder="(845)555-1212" class="form-control" type="text" onkeypress="return isNumberKey(event)" value="<?php echo $rec_credentials['contact_no']; ?>">
                          </div></td></tr>
                           <tr><td>&nbsp;</td></tr>
                            <tr><td>&nbsp;</td><td align="left"><input type="submit" name="update" class="btn btn-success" value="Update Profile"></td></tr>

                        </form> 
                    </table>

              </div>
               <div class="col-md-3"></div>
              </div>
          </div>


        

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <div id="footer">
    <img src= "images/logo.png" />
</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
    <strong>Copyright &copy; 2016 <a href="#">Heroes</a>.</strong> All rights
    reserved.
  </footer>
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
</body>
</html>
