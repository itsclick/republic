<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Form Element sizes -->

            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Update PayOuts</h3>
                  
<?php
$id = $_REQUEST['editpayoutbtn'];
require_once('../config/config.php');
$query_pag_data = "SELECT * from  orders where id = '$id'";
$result_pag_data = mysqli_query($login, $query_pag_data) or die('MySql Error' . mysql_error());


while($rows = mysqli_fetch_array($result_pag_data)){
    
  $id = $rows['id'];
$payout = $rows['payout'];
$seller_id = $rows['seller_id'];
$product_id = $rows['product_id'];
?>


                 
          
              </div>
              <form id="updatepay" name="updatepay" method="POST" action="update.php">
              <div class="card-body">
                <div class="row">
                  
                  
                  <div class="col-5">
                    <input name="id" type="hidden" class="form-control" id="id" value="<?php echo $rows['id']; ?>"/>
                  
                   Seller ID:<input name="seller_id" type="text" class="form-control" id="seller_id" value="<?php echo $rows['seller_id']; ?>" readonly="readonly"/>
                  </div>
                  <div class="col-5">
                    
                  Payout Status<input name="payout" type="text" class="form-control" id="payout" value="<?php echo $rows['payout']; ?>"/>
                  </div>
                  <div class="col-2">
                   <br><input type="submit" name="updatepybtn" id="updatepybtn" value="Update Payout" class="btn btn-block btn-success" />
                  </div>
                  </form> 
                  <?php
}
  ?>
                 
                 
                  </div>
 
              </div>
              <!-- /.card-body -->
            </div>
          
 
               
           <!-- /.card -->        
</body>
</html>
