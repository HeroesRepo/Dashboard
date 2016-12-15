<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <!-- Table style -->
 

</head>

<body>
<?php
if($_POST['request'])
{
$request=$_POST['request'];
include "include/connection.php";
$query="select * from bb_dailystock_hist where DATE(posting_time)='$request' AND bb_regno='".$_SESSION['bb_regno']."'";
$result=mysqli_query($con,$query);
echo "<br />Total Number of Records ".mysqli_num_rows($result);
          if (mysqli_num_rows($result) == 0) {
                                    echo "<br>";
                                    echo "Record Not Found....!!!"; 
                                   } 

          else { 
        ?>
            <div id="no-more-tables">
                <table class="col-md-12 table table-hover cf" id="example2">
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
            <?php
                while($row=mysqli_fetch_array($result))
                  {
                    ?>
                           <tr>
                              <td data-title="Component">Whole Blood</td>
                              <td class="center" data-title="A+ve"><?php echo $row['wb_a_pos']?></td>
                              <td class="center" data-title="O+ve"><?php echo $row['wb_o_pos']?></td>
                              <td class="center" data-title="B+ve"><?php echo $row['wb_b_pos']?></td>
                              <td class="center" data-title="AB+ve"><?php echo $row['wb_ab_pos']?></td>
                              <td class="center" data-title="A-ve"><?php echo $row['wb_a_neg']?></td>
                              <td class="center" data-title="O-ve"><?php echo $row['wb_o_neg']?></td>
                              <td class="center" data-title="B-ve"><?php echo $row['wb_b_neg']?></td>            <td class="center" data-title="AB-ve"><?php echo $row['wb_ab_neg']?></td>
                            </tr>
                            <tr>
                              <td data-title="Component">PCV</td>
                              <td class="center" data-title="A+ve"><?php echo $row['pcv_a_pos']?></td>
                              <td class="center" data-title="O+ve"><?php echo $row['pcv_o_pos']?></td>
                              <td class="center" data-title="B+ve"><?php echo $row['pcv_b_pos']?></td>
                              <td class="center" data-title="AB+ve"><?php echo $row['pcv_ab_pos']?></td>
                              <td class="center" data-title="A-ve"><?php echo $row['pcv_a_neg']?></td>
                              <td class="center" data-title="O-ve"><?php echo $row['pcv_o_neg']?></td>
                              <td class="center" data-title="B-ve"><?php echo $row['pcv_b_neg']?></td>         
                               <td class="center" data-title="AB-ve"><?php echo $row['pcv_ab_neg']?></td>     
                            </tr>
                            <tr>
                              <td data-title="Component">RDP</td>
                              <td class="center" data-title="A+ve"><?php echo $row['rdp_a_pos']?></td>
                              <td class="center" data-title="O+ve"><?php echo $row['rdp_o_pos']?></td>
                              <td class="center" data-title="B+ve"><?php echo $row['rdp_b_pos']?></td>
                              <td class="center" data-title="AB+ve"><?php echo $row['rdp_ab_pos']?></td>
                              <td class="center" data-title="A-ve"><?php echo $row['rdp_a_neg']?></td>
                              <td class="center" data-title="O-ve"><?php echo $row['rdp_o_neg']?></td>
                              <td class="center" data-title="B-ve"><?php echo $row['rdp_b_neg']?></td>           <td class="center" data-title="AB-ve"><?php echo $row['rdp_ab_neg']?></td>      
                            </tr>
                            <tr>
                              <td data-title="Component">FFP</td>
                              <td class="center" data-title="A+ve"><?php echo $row['ffp_a_pos']?></td>
                              <td class="center" data-title="O+ve"><?php echo $row['ffp_o_pos']?></td>
                              <td class="center" data-title="B+ve"><?php echo $row['ffp_b_pos']?></td>
                              <td class="center" data-title="AB+ve"><?php echo $row['ffp_ab_pos']?></td>
                              <td class="center" data-title="A-ve"><?php echo $row['ffp_a_neg']?></td>
                              <td class="center" data-title="O-ve"><?php echo $row['ffp_o_neg']?></td>
                              <td class="center" data-title="B-ve"><?php echo $row['ffp_b_neg']?></td>           <td class="center" data-title="AB-ve"><?php echo $row['ffp_ab_neg']?></td>    
                            </tr>
                      </tbody>
                  <?php
                  };  
                ?>
            </table>
          </div>
      <?php
      };
    ?>
<?php
}
?>
</body>
</html>


