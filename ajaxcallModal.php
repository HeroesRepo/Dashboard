<?php
session_start();
?>
<?php

include "include/connection.php";
if(isset($_POST['wb_a_pos1']))
{
extract($_POST);


$q=mysqli_query($con,"select * from bb_dailystock_curr where bb_regno='".$_SESSION['bb_regno']."'") or die(mysqli_error($con));
  if(mysqli_num_rows($q)==1)
  
  {
  $row=mysqli_fetch_array($q);
      if(isset($_POST['wb_a_pos1']))
      {
        extract($_POST);
  
        $query1=mysqli_query($con,"insert into bb_dailystock_hist select * from bb_dailystock_curr where bb_regno='".$_SESSION['bb_regno']."'") or die(mysqli_error($con));
        
        
        
        if($query1)
        {
          
              if(isset($_POST['wb_a_pos1']))
            {
              //extract($_POST);
               $date2=$_POST['date1'];

              $wb_a_pos2=$_POST['wb_a_pos1'];
              $wb_a_neg2=$_POST['wb_a_neg1'];
              $wb_b_pos2=$_POST['wb_b_pos1'];
              $wb_b_neg2=$_POST['wb_b_neg1'];
              $wb_o_pos2=$_POST['wb_o_pos1'];
              $wb_o_neg2=$_POST['wb_o_neg1'];
              $wb_ab_pos2=$_POST['wb_ab_pos1'];
              $wb_ab_neg2=$_POST['wb_ab_neg1'];
              
              $pcv_a_pos2=$_POST['pcv_a_pos1'];
              $pcv_a_neg2=$_POST['pcv_a_neg1'];
              $pcv_b_pos2=$_POST['pcv_b_pos1'];
              $pcv_b_neg2=$_POST['pcv_b_neg1'];
              $pcv_o_pos2=$_POST['pcv_o_pos1'];
              $pcv_o_neg2=$_POST['pcv_o_neg1'];
              $pcv_ab_pos2=$_POST['pcv_ab_pos1'];
              $pcv_ab_neg2=$_POST['pcv_ab_neg1'];

              $rdp_a_pos2=$_POST['rdp_a_pos1'];
              $rdp_a_neg2=$_POST['rdp_a_neg1'];
              $rdp_b_pos2=$_POST['rdp_b_pos1'];
              $rdp_b_neg2=$_POST['rdp_b_neg1'];
              $rdp_o_pos2=$_POST['rdp_o_pos1'];
              $rdp_o_neg2=$_POST['rdp_o_neg1'];
              $rdp_ab_pos2=$_POST['rdp_ab_pos1'];
              $rdp_ab_neg2=$_POST['rdp_ab_neg1'];

              $ffp_a_pos2=$_POST['ffp_a_pos1'];
              $ffp_a_neg2=$_POST['ffp_a_neg1'];
              $ffp_b_pos2=$_POST['ffp_b_pos1'];
              $ffp_b_neg2=$_POST['ffp_b_neg1'];
              $ffp_o_pos2=$_POST['ffp_o_pos1'];
              $ffp_o_neg2=$_POST['ffp_o_neg1'];
              $ffp_ab_pos2=$_POST['ffp_ab_pos1'];
              $ffp_ab_neg2=$_POST['ffp_ab_neg1'];

          
              $query=mysqli_query($con,"update bb_dailystock_curr set
              bb_regno='".$_SESSION['bb_regno']."',
              date='$date2',
              wb_a_pos='$wb_a_pos2',
              wb_a_neg='$wb_a_neg2',
              wb_b_pos='$wb_b_pos2',
              wb_b_neg='$wb_b_neg2',
              wb_o_pos='$wb_o_pos2',
              wb_o_neg='$wb_o_neg2',
              wb_ab_pos='$wb_ab_pos2',
              wb_ab_neg='$wb_ab_neg2',
              pcv_a_pos='$pcv_a_pos2',
              pcv_a_neg='$pcv_a_neg2',
              pcv_b_pos='$pcv_b_pos2',
              pcv_b_neg='$pcv_b_neg2',
              pcv_o_pos='$pcv_o_pos2',
              pcv_o_neg='$pcv_o_neg2',
              pcv_ab_pos='$pcv_ab_pos2',
              pcv_ab_neg='$pcv_ab_neg2',
              rdp_a_pos='$rdp_a_pos2',
              rdp_a_neg='$rdp_a_neg2',
              rdp_b_pos='$rdp_b_pos2',
              rdp_b_neg='$rdp_b_neg2',
              rdp_o_pos='$rdp_o_pos2',
              rdp_o_neg='$rdp_o_neg2',
              rdp_ab_pos='$rdp_ab_pos2',
              rdp_ab_neg='$rdp_ab_neg2',
              ffp_a_pos='$ffp_a_pos2',
              ffp_a_neg='$ffp_a_neg2',
              ffp_b_pos='$ffp_b_pos2',
              ffp_b_neg='$ffp_b_neg2',
              ffp_o_pos='$ffp_o_pos2',
              ffp_o_neg='$ffp_o_neg2',
              ffp_ab_pos='$ffp_ab_pos2',
              ffp_ab_neg='$ffp_ab_neg2',
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
    
               $date2=$_POST['date1'];

              $wb_a_pos2=$_POST['wb_a_pos1'];
              $wb_a_neg2=$_POST['wb_a_neg1'];
              $wb_b_pos2=$_POST['wb_b_pos1'];
              $wb_b_neg2=$_POST['wb_b_neg1'];
              $wb_o_pos2=$_POST['wb_o_pos1'];
              $wb_o_neg2=$_POST['wb_o_neg1'];
              $wb_ab_pos2=$_POST['wb_ab_pos1'];
              $wb_ab_neg2=$_POST['wb_ab_neg1'];
              
              $pcv_a_pos2=$_POST['pcv_a_pos1'];
              $pcv_a_neg2=$_POST['pcv_a_neg1'];
              $pcv_b_pos2=$_POST['pcv_b_pos1'];
              $pcv_b_neg2=$_POST['pcv_b_neg1'];
              $pcv_o_pos2=$_POST['pcv_o_pos1'];
              $pcv_o_neg2=$_POST['pcv_o_neg1'];
              $pcv_ab_pos2=$_POST['pcv_ab_pos1'];
              $pcv_ab_neg2=$_POST['pcv_ab_neg1'];

              $rdp_a_pos2=$_POST['rdp_a_pos1'];
              $rdp_a_neg2=$_POST['rdp_a_neg1'];
              $rdp_b_pos2=$_POST['rdp_b_pos1'];
              $rdp_b_neg2=$_POST['rdp_b_neg1'];
              $rdp_o_pos2=$_POST['rdp_o_pos1'];
              $rdp_o_neg2=$_POST['rdp_o_neg1'];
              $rdp_ab_pos2=$_POST['rdp_ab_pos1'];
              $rdp_ab_neg2=$_POST['rdp_ab_neg1'];

              $ffp_a_pos2=$_POST['ffp_a_pos1'];
              $ffp_a_neg2=$_POST['ffp_a_neg1'];
              $ffp_b_pos2=$_POST['ffp_b_pos1'];
              $ffp_b_neg2=$_POST['ffp_b_neg1'];
              $ffp_o_pos2=$_POST['ffp_o_pos1'];
              $ffp_o_neg2=$_POST['ffp_o_neg1'];
              $ffp_ab_pos2=$_POST['ffp_ab_pos1'];
              $ffp_ab_neg2=$_POST['ffp_ab_neg1'];

$q=mysqli_query($con,"insert into bb_dailystock_curr (bb_regno,date,wb_a_pos,wb_a_neg,wb_b_pos,wb_b_neg,wb_o_pos,wb_o_neg,wb_ab_pos,wb_ab_neg,pcv_a_pos,pcv_a_neg,pcv_b_pos,pcv_b_neg,pcv_o_pos,pcv_o_neg,pcv_ab_pos,pcv_ab_neg,rdp_a_pos,rdp_a_neg,rdp_b_pos,rdp_b_neg,rdp_o_pos,rdp_o_neg,rdp_ab_pos,rdp_ab_neg,ffp_a_pos,ffp_a_neg,ffp_b_pos,ffp_b_neg,ffp_o_pos,ffp_o_neg,ffp_ab_pos,ffp_ab_neg) values('".$_SESSION['bb_regno']."','$date2','$wb_a_pos2','$wb_a_neg2','$wb_b_pos2','$wb_b_neg2','$wb_o_pos2','$wb_o_neg2','$wb_ab_pos2','$wb_ab_neg2','$pcv_a_pos2','$pcv_a_neg2','$pcv_b_pos2','$pcv_b_neg2','$pcv_o_pos2','$pcv_o_neg2','$pcv_ab_pos2','$pcv_ab_neg2','$rdp_a_pos2','$rdp_a_neg2','$rdp_b_pos2','$rdp_b_neg2','$rdp_o_pos2','$rdp_o_neg2','$rdp_ab_pos2','$rdp_ab_neg2','$ffp_a_pos2','$ffp_a_neg2','$ffp_b_pos2','$ffp_b_neg2','$ffp_o_pos2','$ffp_o_neg2','$ffp_ab_pos2','$ffp_ab_neg2')") or die(mysqli_error($con));

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
