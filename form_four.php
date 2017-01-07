<?php
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
   <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
   <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
   <!-- Table style -->
   <link rel="stylesheet" href="dist/css/table.css">

  <!--   <link rel="stylesheet" href="dist/css/stylesheet.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style>
    .input-group{
  padding-bottom:12px;
  }
 </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 <script>
  $( document ).ready(function() {
     var currentBoxNumber = 0;
    $(".form-control").keyup(function (event) {
        if (event.keyCode == 13) {
            textboxes = $("input.form-control");
            currentBoxNumber = textboxes.index(this);
            console.log(textboxes.index(this));
            if (textboxes[currentBoxNumber + 1] != null) {
                nextBox = textboxes[currentBoxNumber + 1];
                nextBox.focus();
                nextBox.select();
                event.preventDefault();
                return false;
            }
        }
});
    $('#submitBtn').click(function() {
         $('#wb_a_pos1').text(populateModal($('#wb_a_pos').val()));
         $('#wb_a_neg1').text(populateModal($('#wb_a_neg').val()));
         $('#wb_b_pos1').text(populateModal($('#wb_b_pos').val()));
         $('#wb_b_neg1').text(populateModal($('#wb_b_neg').val()));
         $('#wb_o_pos1').text(populateModal($('#wb_o_pos').val()));
         $('#wb_o_neg1').text(populateModal($('#wb_o_neg').val()));
         $('#wb_ab_pos1').text(populateModal($('#wb_ab_pos').val()));
         $('#wb_ab_neg1').text(populateModal($('#wb_ab_neg').val()));
         $('#pcv_a_pos1').text(populateModal($('#pcv_a_pos').val()));
         $('#pcv_a_neg1').text(populateModal($('#pcv_a_neg').val()));
         $('#pcv_b_pos1').text(populateModal($('#pcv_b_pos').val()));
         $('#pcv_b_neg1').text(populateModal($('#pcv_b_neg').val()));
         $('#pcv_o_pos1').text(populateModal($('#pcv_o_pos').val()));
         $('#pcv_o_neg1').text(populateModal($('#pcv_o_neg').val()));
         $('#pcv_ab_pos1').text(populateModal($('#pcv_ab_pos').val()));
         $('#pcv_ab_neg1').text(populateModal($('#pcv_ab_neg').val()));
         $('#rdp_a_pos1').text(populateModal($('#rdp_a_pos').val()));
         $('#rdp_a_neg1').text(populateModal($('#rdp_a_neg').val()));
         $('#rdp_b_pos1').text(populateModal($('#rdp_b_pos').val()));
         $('#rdp_b_neg1').text(populateModal($('#rdp_b_neg').val()));
         $('#rdp_o_pos1').text(populateModal($('#rdp_o_pos').val()));
         $('#rdp_o_neg1').text(populateModal($('#rdp_o_neg').val()));
         $('#rdp_ab_pos1').text(populateModal($('#rdp_ab_pos').val()));
         $('#rdp_ab_neg1').text(populateModal($('#rdp_ab_neg').val()));
         $('#ffp_a_pos1').text(populateModal($('#ffp_a_pos').val()));
         $('#ffp_a_neg1').text(populateModal($('#ffp_a_neg').val()));
         $('#ffp_b_pos1').text(populateModal($('#ffp_b_pos').val()));
         $('#ffp_b_neg1').text(populateModal($('#ffp_b_neg').val()));
         $('#ffp_o_pos1').text(populateModal($('#ffp_o_pos').val()));
         $('#ffp_o_neg1').text(populateModal($('#ffp_o_neg').val()));
         $('#ffp_ab_pos1').text(populateModal($('#ffp_ab_pos').val()));
         $('#ffp_ab_neg1').text(populateModal($('#ffp_ab_neg').val()));
 });

    var populateModal = function(val){
      if(val == "")
        return 0;
      else
        return val;

    }
});
 $( document ).ready(function() {
 $('.btnNext').click(function(){
  $('.nav-pills > .active').next('li').find('a').trigger('click');
});

  $('.btnPrevious').click(function(){
  $('.nav-pills > .active').prev('li').find('a').trigger('click');
});  
});
</script>
<script>
 

function myFunction() {


               var populateModal_submit = function(value){
                    if(value == "")
                      return 0;
                    else
                      return value;

                  } 

              var date = populateModal_submit(document.getElementById("date").value);
              var wb_a_pos = populateModal_submit(document.getElementById("wb_a_pos").value);
              var wb_a_neg = populateModal_submit(document.getElementById("wb_a_neg").value);
              var wb_b_pos = populateModal_submit(document.getElementById("wb_b_pos").value);
              var wb_b_neg = populateModal_submit(document.getElementById("wb_b_neg").value);
              var wb_o_pos = populateModal_submit(document.getElementById("wb_o_pos").value);
              var wb_o_neg = populateModal_submit(document.getElementById("wb_o_neg").value);
              var wb_ab_pos = populateModal_submit(document.getElementById("wb_ab_pos").value);
              var wb_ab_neg = populateModal_submit(document.getElementById("wb_ab_neg").value);
              var pcv_a_pos = populateModal_submit(document.getElementById("pcv_a_pos").value);
              var pcv_a_neg = populateModal_submit(document.getElementById("pcv_a_neg").value);
              var pcv_b_pos = populateModal_submit(document.getElementById("pcv_b_pos").value);
              var pcv_b_neg = populateModal_submit(document.getElementById("pcv_b_neg").value);
              var pcv_o_pos = populateModal_submit(document.getElementById("pcv_o_pos").value);
              var pcv_o_neg = populateModal_submit(document.getElementById("pcv_o_neg").value);
              var pcv_ab_pos = populateModal_submit(document.getElementById("pcv_ab_pos").value);
              var pcv_ab_neg = populateModal_submit(document.getElementById("pcv_ab_neg").value);
              var rdp_a_pos = populateModal_submit(document.getElementById("rdp_a_pos").value);
              var rdp_a_neg = populateModal_submit(document.getElementById("rdp_a_neg").value);
              var rdp_b_pos = populateModal_submit(document.getElementById("rdp_b_pos").value);
              var rdp_b_neg = populateModal_submit(document.getElementById("rdp_b_neg").value);
              var rdp_o_pos = populateModal_submit(document.getElementById("rdp_o_pos").value);
              var rdp_o_neg = populateModal_submit(document.getElementById("rdp_o_neg").value);
              var rdp_ab_pos = populateModal_submit(document.getElementById("rdp_ab_pos").value);
              var rdp_ab_neg = populateModal_submit(document.getElementById("rdp_ab_neg").value);
              var ffp_a_pos = populateModal_submit(document.getElementById("ffp_a_pos").value);
              var ffp_a_neg = populateModal_submit(document.getElementById("ffp_a_neg").value);
              var ffp_b_pos = populateModal_submit(document.getElementById("ffp_b_pos").value);
              var ffp_b_neg = populateModal_submit(document.getElementById("ffp_b_neg").value);
              var ffp_o_pos = populateModal_submit(document.getElementById("ffp_o_pos").value);
              var ffp_o_neg = populateModal_submit(document.getElementById("ffp_o_neg").value);
              var ffp_ab_pos = populateModal_submit(document.getElementById("ffp_ab_pos").value);
              var ffp_ab_neg = populateModal_submit(document.getElementById("ffp_ab_neg").value);

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'date1=' + date + '&wb_a_pos1=' + wb_a_pos + '&wb_a_neg1=' + wb_a_neg + '&wb_b_pos1=' + wb_b_pos + '&wb_b_neg1=' + wb_b_neg + '&wb_o_pos1=' + wb_o_pos + '&wb_o_neg1=' + wb_o_neg + '&wb_ab_pos1=' + wb_ab_pos + '&wb_ab_neg1=' + wb_ab_neg + '&pcv_a_pos1=' + pcv_a_pos + '&pcv_a_neg1=' + pcv_a_neg + '&pcv_b_pos1=' + pcv_b_pos + '&pcv_b_neg1=' + pcv_b_neg + '&pcv_o_pos1=' + pcv_o_pos + '&pcv_o_neg1=' + pcv_o_neg + '&pcv_ab_pos1=' + pcv_ab_pos + '&pcv_ab_neg1=' + pcv_ab_neg + '&rdp_a_pos1=' + rdp_a_pos + '&rdp_a_neg1=' + rdp_a_neg + '&rdp_b_pos1=' + rdp_b_pos + '&rdp_b_neg1=' + rdp_b_neg + '&rdp_o_pos1=' + rdp_o_pos + '&rdp_o_neg1=' + rdp_o_neg + '&rdp_ab_pos1=' + rdp_ab_pos + '&rdp_ab_neg1=' + rdp_ab_neg + '&ffp_a_pos1=' + ffp_a_pos + '&ffp_a_neg1=' + ffp_a_neg + '&ffp_b_pos1=' + ffp_b_pos + '&ffp_b_neg1=' + ffp_b_neg + '&ffp_o_pos1=' + ffp_o_pos + '&ffp_o_neg1=' + ffp_o_neg + '&ffp_ab_pos1=' + ffp_ab_pos + '&ffp_ab_neg1=' + ffp_ab_neg;
// AJAX code to submit form.
            $.ajax({
            type: "POST",
            url: "ajaxcallModal.php",
            data: dataString,
            cache: false,
            success: function(result) {
              
            //alert(result);
            $('#formfield')[0].reset();
            }
            });
        }
</script>
<SCRIPT language=Javascript>
function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            return true;
      }
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
              <h3 class="box-title">Update Stock</h3>
            </div>
            <!-- /.box-header -->
    <div class="box-body">
             
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
          <div class="container-fluid">
                <div class="row">
                
               
                  <div class="row">
                <div class="col-md-6">
                <div class="col-md-12" align="left">Date</div>
                <div class="col-md-12" align="left">
               <form role="form" id="formfield" method="post"  enctype="multipart/form-data">
                <input type="hidden" name="action" value="add_form" /> 
                        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                 <input type="date" value="<?php echo date('Y-m-d'); ?>" name="date" placeholder="01/02/2014" class="form-control" id="date"/>
                 <input type="text" name="zero" id="zero" hidden="">
                  </div>
            </div>
        </div>
                
   
                <div class="col-md-6">
                <div class="col-md-12" align="left"><p></p></div>
                 <div class="col-md-12" align="left"></div> 
              </div></div>
            
      
             <div class="col-md-12" align="left"><p>Daily Stock</p></div>
            
            
            <div class="col-md-12" align="left">
                <ul class="nav nav-pills nav-justified">
                        <li class="active"><a data-toggle="pill" href="#wb">Whole Blood</a></li>
                        <li><a data-toggle="pill" href="#pcv">PCV</a></li>
                        <li><a data-toggle="pill" href="#rdp">RDP</a></li>
                        <li><a data-toggle="pill" href="#ffp">FFP</a></li>
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
                  
                  <div class="col-md-12" align="right">
                    <a class="btn btn-default btnNext">Next</a>
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

                   <div class="col-md-12">
                   <a class="btn btn-default btnPrevious" style="float: left;">Previous</a>
                    <a class="btn btn-default btnNext" style="float: right;">Next</a>
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

                  <div class="col-md-12">
                   <a class="btn btn-default btnPrevious" style="float: left;">Previous</a>
                    <a class="btn btn-default btnNext right" style="float: right;">Next</a>
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
                 
                  <div class="col-md-12">
                   <a class="btn btn-default btnPrevious" style="float: left;">Previous</a>
                    <input type="button" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-primary" style="float: right;" />
                  </div>          
          </div>
      </div>
</div>


<div class="col-md-12" align="left">&nbsp;</div>
            
                <!--  <div class="col-md-12" align="center">
                 <input type="button" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-default" />
                                </div> -->
          </form> 
      </div>
  </div>
            <div class="col-md-2"></div>
            </div>
          </div>

          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
        <!--Logo Footer -->
      <div id="footer">
        <img src= "images/logo.png" />
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
         </div>
    <strong>Copyright &copy; 2016 <a href="#">Heroes</a>.</strong> All rights
    reserved.
  </footer>


<div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="color: red">Are you sure you want to submit the following details?</h4>
            </div>
            
                
               
              <div id="no-more-tables">
                <table class="col-md-12 table table-hover cf table-bordered" id="example2" style="border: black">
                    <thead class="cf">
                        <tr>
                            <th>Component/Blood Group</th>
                            <th>A+ve</th>
                            <th>O+ve</th>
                            <th>B+ve</th>
                            <th>AB+ve</th>
                            <th>A-ve</th>
                            <th>O-ve</th>
                            <th>B-ve</th>
                            <th>AB-ve</th>
                        </tr>
                    </thead>
                    <tbody>
           
                            <tr>
                              <td data-title="Component">Whole Blood</td>
                              <td class="center" data-title="A+ve" id="wb_a_pos1"></td>
                              <td class="center" data-title="O+ve" id="wb_o_pos1"></td>
                              <td class="center" data-title="B+ve" id="wb_b_pos1"></td>
                              <td class="center" data-title="AB+ve" id="wb_ab_pos1"></td>
                              <td class="center" data-title="A-ve" id="wb_a_neg1"></td>
                              <td class="center" data-title="O-ve" id="wb_o_neg1"></td>
                              <td class="center" data-title="B-ve" id="wb_b_neg1"></td>             
                              <td class="center" data-title="AB-ve" id="wb_ab_neg1"></td>
                            </tr>

                             <tr>
                              <td data-title="Component">PCV</td>
                              <td class="center" data-title="A+ve" id="pcv_a_pos1"></td>
                              <td class="center" data-title="O+ve" id="pcv_o_pos1"></td>
                              <td class="center" data-title="B+ve" id="pcv_b_pos1"></td>
                              <td class="center" data-title="AB+ve" id="pcv_ab_pos1"></td>
                              <td class="center" data-title="A-ve" id="pcv_a_neg1"></td>
                              <td class="center" data-title="O-ve" id="pcv_o_neg1"></td>
                              <td class="center" data-title="B-ve" id="pcv_b_neg1"></td>               
                              <td class="center" data-title="AB-ve" id="pcv_ab_neg1"></td>              
                              
                            </tr>


                             <tr>
                              <td data-title="Component">RDP</td>
                              <td class="center" data-title="A+ve" id="rdp_a_pos1"></td>
                              <td class="center" data-title="O+ve" id="rdp_o_pos1"></td>
                              <td class="center" data-title="B+ve" id="rdp_b_pos1"></td>
                              <td class="center" data-title="AB+ve" id="rdp_ab_pos1"></td>
                              <td class="center" data-title="A-ve" id="rdp_a_neg1"></td>
                              <td class="center" data-title="O-ve" id="rdp_o_neg1"></td>
                              <td class="center" data-title="B-ve" id="rdp_b_neg1"></td>               
                              <td class="center" data-title="AB-ve" id="rdp_ab_neg1"></td>           
                              
                            </tr>


                             <tr>
                              <td data-title="Component">FFP</td>
                            <td class="center" data-title="A+ve" id="ffp_a_pos1"></td>
                              <td class="center" data-title="O+ve" id="ffp_o_pos1"></td>
                              <td class="center" data-title="B+ve" id="ffp_b_pos1"></td>
                              <td class="center" data-title="AB+ve" id="ffp_ab_pos1"></td>
                              <td class="center" data-title="A-ve" id="ffp_a_neg1"></td>
                              <td class="center" data-title="O-ve" id="ffp_o_neg1"></td>
                              <td class="center" data-title="B-ve" id="ffp_b_neg1"></td>               
                              <td class="center" data-title="AB-ve" id="ffp_ab_neg1"></td>               
                              
                            </tr>
                      </tbody>
                </table>
                
            </div>

        
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="#" id="submit" class="btn btn-success success" name="submit" onclick="myFunction()" data-dismiss="modal">Confirm</a>
            </div>
        </div>
    </div>
</div>




<!-- jQuery 2.2.3 -->
<!-- <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script> -->
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
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
