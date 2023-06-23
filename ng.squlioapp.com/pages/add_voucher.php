<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form id="form1" name="form1" method="post" action=""></body>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Form Element sizes -->

            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Generate New Voucher </h3>
                  <?php
if(isset($_REQUEST['savevoucher'])){
require_once('../config/config.php');
$ccode = $_POST['ccode'];
$amt = $_POST['amt'];
$duration = $_POST['duration'];
$usedx = $_POST['usedx'];




 

 $sql = "INSERT INTO tblcoupon (ccode,amt,duration,usedx,usedby,status) VALUES
  ('$ccode','$amt','$duration','$usedx','N/A','0')";

 
if ($login->query($sql) === TRUE) {
	 
    echo(" <div class='btn btn-block btn-success' align='center'>
                               <button type='button' class='close' data-sucess='alert' aria-hidden='true'>&times;</button>
                         $ccode Voucher Added successfully <a href='index.php?addmenu' class='alert-link'>Ok</a>.
                           </div>");                        
                           
} else {
   echo "Error: " . $sql . "<br>" . $login->error;
}

$login->close();

}        
?>
          
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-4">
                    <input type="text" class="form-control" name="ccode"  value="SYN<?php echo (rand(4,100))."". gmdate('y');?>" readonly="readonly"/>
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="amt" placeholder="Enter Amount">
                  </div>
                  <div class="col-4">
                    <input type="date" class="form-control" name="duration" placeholder="Expiring Date">
                  </div><br><br>
                  <div class="col-4">
                    <input type="number" class="form-control" name="usedx" placeholder="No. of use">
                  </div>
                  
                  <div class="col-3">
                  <input type="submit" name="savevoucher" id="savevoucher" value="Save" class="btn btn-block btn-success" />
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
          </form>  <!-- /.card -->        
</body>
</html>
