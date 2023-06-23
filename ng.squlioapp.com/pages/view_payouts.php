<?php
  
  
  function getusernames($id){
    include ("../config/config.php");
    $query1="SELECT * from users where id ='".$id."'";
    $result1 = mysqli_query($login, $query1);
        while($rows=mysqli_fetch_array($result1)) {
          return $rows['username']; 
      }
      
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <SCRIPT type="text/javascript">


function confirmDelete()
{
var agree=confirm("Are you sure you wish to continue?");
if (agree)
	return true ;
else
	return false ;
}
// -->
</script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
             

            
              <!-- /.card-header -->
              <div class="card-body">
                <a href="payout_export.php">Export Upaid</a>a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>

                  <tr>                  <th>id</th>
                                        <th>Date</th>
                                        <th>Vendors </th>
                                        <th>Qty </th>
                                        <th>P. Price</th>
                                        <th>Yards Com</th>
                                        <th>V.Amount</th>
                                        <th>Set Status</th>
                                        <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
  include ('../config/config.php');

$query="SELECT * from orders WHERE payout=1 ORDER BY id ASC";
$result = mysqli_query($login, $query);

    while($row=mysqli_fetch_array($result)) {
      
      $id = $row['id'];
      $buyer_id = $row['buyer_id'];
$seller_id = $row['seller_id'];
$product_id = $row['product_id'];
$payment_type = $row['payment_type'];
$delivery_type = $row['delivery_type'];
$order_fullname = $row['order_fullname'];
$order_mobilenumber = $row['order_mobilenumber'];
$order_delivery_location = $row['order_delivery_location'];
$product_price = $row['product_price'];
$delivery_price = $row['delivery_price'];
$payment_status = $row['payment_status'];
$order_date = $row['order_date'];
$order_token = $row['order_token'];
$total_payers = $row['total_payers'];
$self_pay_reference = $row['self_pay_reference'];
$payout = $row['payout'];
$payers_count = $row['payers_count'];
$settlement_datet = $row['settlement_date'];
$specialtoken = $row['specialtoken'];
$qty = $row['qty'];

@$fpp=$row['product_price']*$row['qty'] ;
    ?>
                  <tr>
                    
                                        
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $order_date; ?></td>
                                        <td><?php echo getusernames($seller_id);?></td>
                                        <td><?php echo $qty ?></td>
                                        <td><?php echo $product_price ?></td>
                                        <td bgcolor="#293A4A"><font color="#FFFFFF"><?php echo $qty * $product_price/100*5 ?></font></td>
                                        <td bgcolor="#003333"><font color="#FFFFFF"><?php echo $qty * $product_price-($product_price/100*5) ?></font></td>
                                        <td> 
                    
                    
                    <?php if ($payout==0){
                    echo'<button type="button" class="btn btn-danger">Unpaid</button>';
                      }
                else if ($payout==1){
                echo'<button type="button" class="btn btn-success">Paid</button>';
                    }?>
             </td>
                                        <td> <a href='index.php?orderdetails=<?php echo $id ?>'><i class='fa fa-info-circle' aria-hidden='true' title='Client Details'></i>


                                          <form id="updatepay" name="updatepay" method="POST" action="update.php">
                                            <?php
require_once('../config/config.php');
$query_pag_data = "SELECT * from  orders where id = '$id'";
$result_pag_data = mysqli_query($login, $query_pag_data) or die('MySql Error' . mysql_error());


while($rows = mysqli_fetch_array($result_pag_data)){
    
  $id = $rows['id'];
$payout = $rows['payout'];
$seller_id = $rows['seller_id'];
$product_id = $rows['product_id'];
?>

                                   <input name="id" type="hidden" class="form-control" id="id" value="<?php echo $rows['id']; ?>"/>
                          <input name="payout" type="hidden" class="form-control" id="payout" value="<?php echo $rows['payout']; ?>"/>
                          <input name="seller_id" type="hidden" class="form-control" id="seller_id" value="<?php echo $rows['seller_id']; ?>" readonly="readonly"/>
                                         
                                           <!--This button help to payout
                                            <button name="updatepybtn" class="btn btn-default"> <i class="fab fa-amazon-pay"></i></button>-->  </form></td>
                                        
                                        
                  </tr>
                  
                  <?php } }?>
                  
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
