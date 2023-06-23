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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                                        
                                        <th style='display:none;'>ID</th>
                                        <th>Vendor</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Unit.P</th>
                                        <th>Qty</th>
                                        <th>Sub.T</th>
                                        <th>D.P</th>
                                        <th>O.T</th>
                                         <th>Date</th>
                                         <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
  include ('../config/config.php');

$query="SELECT * from orders ORDER BY id DESC";
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
                    
                                        <td style='display:none;'><?php echo $i++; ?></td>
                                        <td><?php echo getusernames($seller_id); ?></td>
                                        <td><?php echo $order_fullname ?></td>
                                        <td><?php echo $order_mobilenumber ?></td>
                                        <td><?php echo $product_price ?></td>
                                        <td><?php echo $qty ?></td>
                                        <td bgcolor="#293A4A"><font color="#FFFFFF"> <?php echo $fpp ?></font></td>
                                        <td bgcolor="#996600"><font color="#FFF"> <?php echo $delivery_price ?></font></td>
                                        <td bgcolor="#004020"><font color="#FFF"> <?php echo $fpp + $delivery_price ?></font></td>
                                        <td> <?php echo $order_date ?></td>
                                        
                                        <td><?php if ($payment_status==0){
                    echo'<button type="button" class="badge badge-danger">Failed</button>';
                      }
                else if ($payment_status==1){
                echo'<button type="button" class="badge badge-success">Paid</button>';
                    }?> |  <a href='index.php?orderdetails=<?php echo $id ?>'><i class='fa fa-info-circle' aria-hidden='true' title='Client Details'></i></a>&nbsp;&nbsp;  </td>
                                        
                  </tr>
                  
                  <?php } ?>
                  
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
