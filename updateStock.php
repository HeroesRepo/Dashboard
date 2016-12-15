<?php
session_start();
?>
<?php
include "include/connection.php";
$query2='select * from bb_info where bb_regno="'.$_SESSION['bb_regno'].'"  ';
    $res2=mysqli_query($con,$query2);
    $rec=mysqli_fetch_array($res2);
?>

<?php

include "include/connection.php";
if(isset($_POST['submit']))
{
extract($_POST);


$q=mysqli_query($con,"select * from bb_dailystock_curr where bb_regno='".$_SESSION['bb_regno']."'") or die(mysqli_error($con));
  if(mysqli_num_rows($q)==1)
  
  {
  $row=mysqli_fetch_array($q);
      if(isset($_POST['submit']))
      {
        extract($_POST);
  
        $query1=mysqli_query($con,"insert into bb_dailystock_hist select * from bb_dailystock_curr where bb_regno='".$_SESSION['bb_regno']."'") or die(mysqli_error($con));
        
        
        
        if($query1)
        {
          
              if(isset($_POST['submit']))
            {
              extract($_POST);
              
          
              $query=mysqli_query($con,"update bb_dailystock_curr set
              bb_regno='".$_SESSION['bb_regno']."',
              date='$date',
              wb_a_pos='$wb_a_pos',
              wb_a_neg='$wb_a_neg',
              wb_b_pos='$wb_b_pos',
              wb_b_neg='$wb_b_neg',
              wb_o_pos='$wb_o_pos',
              wb_o_neg='$wb_o_neg',
              wb_ab_pos='$wb_ab_pos',
              wb_ab_neg='$wb_ab_neg',
              pcv_a_pos='$pcv_a_pos',
              pcv_a_neg='$pcv_a_neg',
              pcv_b_pos='$pcv_b_pos',
              pcv_b_neg='$pcv_b_neg',
              pcv_o_pos='$pcv_o_pos',
              pcv_o_neg='$pcv_o_neg',
              pcv_ab_pos='$pcv_ab_pos',
              pcv_ab_neg='$pcv_ab_neg',
              rdp_a_pos='$rdp_a_pos',
              rdp_a_neg='$rdp_a_neg',
              rdp_b_pos='$rdp_b_pos',
              rdp_b_neg='$rdp_b_neg',
              rdp_o_pos='$rdp_o_pos',
              rdp_o_neg='$rdp_o_neg',
              rdp_ab_pos='$rdp_ab_pos',
              rdp_ab_neg='$rdp_ab_neg',
              ffp_a_pos='$ffp_a_pos',
              ffp_a_neg='$ffp_a_neg',
              ffp_b_pos='$ffp_b_pos',
              ffp_b_neg='$ffp_b_neg',
              ffp_o_pos='$ffp_o_pos',
              ffp_o_neg='$ffp_o_neg',
              ffp_ab_pos='$ffp_ab_pos',
              ffp_ab_neg='$ffp_ab_neg',
              posting_time=CURRENT_TIMESTAMP 
              
              where  bb_regno='".$_SESSION['bb_regno']."' ") or die(mysqli_error($con)); 
              
               if($query)
                          {
                           echo '<script type="text/javascript">';
                           //echo " alert('Record Updated');";
                           //echo 'window.location.href = "bloodbankProfile.php";'; 
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
          }
          
          else
          {
              echo '<script type="text/javascript">';
              //echo " alert('Error while Copying...!!!');";
               echo '</script>';
                  
            
          }
          
          
      }
        
  
  
  
    
  }
  else
  {


$q=mysqli_query($con,"insert into bb_dailystock_curr (bb_regno,date,wb_a_pos,wb_a_neg,wb_b_pos,wb_b_neg,wb_o_pos,wb_o_neg,wb_ab_pos,wb_ab_neg,pcv_a_pos,pcv_a_neg,pcv_b_pos,pcv_b_neg,pcv_o_pos,pcv_o_neg,pcv_ab_pos,pcv_ab_neg,rdp_a_pos,rdp_a_neg,rdp_b_pos,rdp_b_neg,rdp_o_pos,rdp_o_neg,rdp_ab_pos,rdp_ab_neg,ffp_a_pos,ffp_a_neg,ffp_b_pos,ffp_b_neg,ffp_o_pos,ffp_o_neg,ffp_ab_pos,ffp_ab_neg) values('".$_SESSION['bb_id']."','$date','$wb_a_pos','$wb_a_neg','$wb_b_pos','$wb_b_neg','$wb_o_pos','$wb_o_neg','$wb_ab_pos','$wb_ab_neg','$pcv_a_pos','$pcv_a_neg','$pcv_b_pos','$pcv_b_neg','$pcv_o_pos','$pcv_o_neg','$pcv_ab_pos','$pcv_ab_neg','$rdp_a_pos','$rdp_a_neg','$rdp_b_pos','$rdp_b_neg','$rdp_o_pos','$rdp_o_neg','$rdp_ab_pos','$rdp_ab_neg','$ffp_a_pos','$ffp_a_neg','$ffp_b_pos','$ffp_b_neg','$ffp_o_pos','$ffp_o_neg','$ffp_ab_pos','$ffp_ab_neg')") or die(mysqli_error($con));

  if($q)
  { 
    echo"<script>";
    //echo"alert('Record Inserted');";
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
      //-->
   </SCRIPT>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
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
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
        <li class="treeview"><a href="currentdailyStock.php"><i class="fa fa-th"></i> <span>Current Stock</span></a></li>
        <li><a href="updateStock.php"><i class="fa fa-th-list"></i> <span>Update  Stock</span></a></li>
        <li><a href="historicalStock.php"><i class="fa fa-table"></i> <span>Historical Stock</span></a></li>
        <li><a href="userProfile.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>
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
        Update Stock
        <!--<small>advanced tables</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Update Stock</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">       
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
      <div class="container-fluid">
            <div class="row">
            
           
              <div class="row">
                <div class="col-md-6">
                <div class="col-md-12" align="left"><p>Blood Bank Name</p></div>
                <div class="col-md-12" align="left">
                
                        <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="first_name" placeholder="Name" class="form-control"  type="text" id="bbn" value="<?php echo $rec['bb_name'];?>" >
                                </div>
            
                
                
                </div>
                
                </div>
                
    <form role="form" id="ps_entry" name="ps_entry" method="post" onsubmit="return entry_check()" action="">  
                <div class="col-md-6">
                <div class="col-md-12" align="left"><p>Date</p></div>
                 <div class="col-md-12" align="left">
                 <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                 <input type="date" value="<?php echo date('Y-m-d'); ?>" name="date" placeholder="01/02/2014" class="form-control" id="date"/>
                  </div>
                 </div> 
                  
                
                
                
                </div>
               
            </div>
            
      
             <div class="col-md-12" align="left"><p>Daily Stock</p></div>
            
            
            <div class="col-md-12" align="left">
                <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a data-toggle="tab" href="#wb">Whole Blood</a></li>
                        <li><a data-toggle="tab" href="#pcv">PCV</a></li>
                        <li><a data-toggle="tab" href="#rdp">RDP</a></li>
                        <li><a data-toggle="tab" href="#ffp">FFP</a></li>
                      </ul>
            
            
            
                  
             </div>
              
              <div class="col-md-12" align="left">&nbsp;</div>
              
             
              
              
              
              
              
 <div class="tab-content">
    <div id="wb" class="tab-pane fade in active">
    
                        
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">A+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_a_pos" onkeypress="return isNumberKey(event)" id="wb_a_pos">
                        </div>
                 </div>
                
                
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">A-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_a_neg" onkeypress="return isNumberKey(event)" id="wb_a_neg">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">B+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_b_pos" onkeypress="return isNumberKey(event)" id="wb_b_pos">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">B-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_b_neg" onkeypress="return isNumberKey(event)" id="wb_b_neg">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">O+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_o_pos" onkeypress="return isNumberKey(event)" id="wb_o_pos">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">O-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_o_neg" onkeypress="return isNumberKey(event)" id="wb_o_neg">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">AB+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_ab_pos" onkeypress="return isNumberKey(event)" id="wb_ab_pos">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">AB-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="wb_ab_neg" onkeypress="return isNumberKey(event)" id="wb_ab_neg">
                        </div>
                 </div>
    </div>
    <div id="pcv" class="tab-pane fade">
                            
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">A+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_a_pos" onkeypress="return isNumberKey(event)" id="pcv_a_pos">
                        </div>
                 </div>
                
                
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">A-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_a_neg" onkeypress="return isNumberKey(event)" id="pcv_a_neg">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">B+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_b_pos" onkeypress="return isNumberKey(event)" id="pcv_b_pos">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">B-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_b_neg" onkeypress="return isNumberKey(event)" id="pcv_b_neg">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">O+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_o_pos" onkeypress="return isNumberKey(event)" id="pcv_o_pos">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">O-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_o_neg" onkeypress="return isNumberKey(event)" id="pcv_o_neg">
                        </div>
                 </div>
                 
                 
                            <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">AB+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_ab_pos" onkeypress="return isNumberKey(event)" id="pcv_ab_pos">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">AB-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="pcv_ab_neg" onkeypress="return isNumberKey(event)" id="pcv_ab_neg">
                        </div>
                 </div>
    </div>
    <div id="rdp" class="tab-pane fade">
    
                      
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">A+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_a_pos" onkeypress="return isNumberKey(event)" id="rdp_a_pos">
                        </div>
                 </div>
                
                
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">A-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_a_neg" onkeypress="return isNumberKey(event)" id="rdp_a_neg">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">B+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_b_pos" onkeypress="return isNumberKey(event)" id="rdp_b_pos">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">B-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_b_neg" onkeypress="return isNumberKey(event)" id="rdp_b_neg">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">O+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_o_pos" onkeypress="return isNumberKey(event)" id="rdp_o_pos">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">O-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_o_neg" onkeypress="return isNumberKey(event)" id="rdp_o_neg">
                        </div>
                 </div>
                 
                 
                            <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">AB+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_ab_pos" onkeypress="return isNumberKey(event)" id="rdp_ab_pos">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">AB-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="rdp_ab_neg" onkeypress="return isNumberKey(event)" id="rdp_ab_neg">
                        </div>
                 </div>
    </div>
    <div id="ffp" class="tab-pane fade">
    
                  
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">A+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_a_pos" onkeypress="return isNumberKey(event)" id="ffp_a_pos">
                        </div>
                 </div>
                
                
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">A-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_a_neg" onkeypress="return isNumberKey(event)" id="ffp_a_neg">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">B+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_b_pos" onkeypress="return isNumberKey(event)" id="ffp_b_pos">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">B-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_b_neg" onkeypress="return isNumberKey(event)" id="ffp_b_neg">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">O+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_o_pos" onkeypress="return isNumberKey(event)" id="ffp_o_pos">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">O-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_o_neg" onkeypress="return isNumberKey(event)" id="ffp_o_neg">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">AB+</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_ab_pos" onkeypress="return isNumberKey(event)" id="ffp_ab_pos">
                        </div>
                 </div>
                 
                 
              <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">AB-</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="ffp_ab_neg" onkeypress="return isNumberKey(event)" id="ffp_ab_neg">
                        </div>
                 </div>
    </div>
  </div>
</div>

 
      
      
   
              
              
              
    
                 <div class="col-md-12" align="left">&nbsp;</div>
            
                 <div class="col-md-12" align="center">
                   
                    <input type="submit" name="submit" value="Update" id="submitBtn" class="btn btn-primary" />
                   
                 
                   
                   </div>

      </form> 
          
            </div>
       
          </div>
            
           
         
<div class="col-md-2"></div>
</div></div>
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
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
