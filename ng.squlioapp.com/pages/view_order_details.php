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

<?php
  
  
  function getbuername($buyer_id){
    include ("../config/config.php");
    $query2="SELECT * from users where id ='".$buyer_id."'";
    $result2 = mysqli_query($login, $query2);
        while($rows=mysqli_fetch_array($result2)) {
          return $rows['username']; 
      }
      
  }
?>
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
                <h3 class="card-title">Order Details</h3>
                  <?php
$id = $_REQUEST['orderdetails'];
require_once('../config/config.php');
$query_pag_data = "SELECT * from orders where id = '$id'";
$result_pag_data = mysqli_query($login, $query_pag_data) or die('MySql Error' . mysqli_error());


while($row = mysqli_fetch_array($result_pag_data)){
    
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
?>
          
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    Order Date: <?php echo $row ['order_date'];?>
                  </div>
                  <div class="col-3">
                    Order Token:<?php echo $order_token;?>
                  </div>
                  <div class="col-3">
                  Payment Reference:<?php echo $self_pay_reference;?>
                  </div>
                  <div class="col-3">
                   Seller ID:<?php echo getusernames($seller_id); ?>
                  </div>
                  <br><br>
                  <div class="col-3">
                    Buyer ID:<?php echo getbuername($buyer_id);?>
                  </div>
                  <div class="col-3">
                    Product ID: <?php echo $product_id;?>
                  </div>
                  <div class="col-3">
                 Quantity: <?php echo $qty;?>
                  </div>
                  <div class="col-3">
                  Unit Price: ₦  <?php echo $product_price;?>
                  </div><br><br>
                  <div class="col-3">
                  Sub Total: ₦ <?php echo $product_price * $qty; ?>
                  </div>
                  <div class="col-3">
                  Order Full Name: <?php echo $order_fullname;?>
                  </div>
                  <div class="col-3">
                  Delivery Fee: <?php echo $delivery_price;?>
                  </div>
                  <div class="col-3">
                  Order Info: <?php echo $row['order_info']; ?>
                  </div><br><br>
                  <div class="col-3">
                    Payment Status: <?php echo $payment_status;?>
                  </div>
                  <div class="col-3">
                    Order Mobile No.: <?php echo $order_mobilenumber;?>
                  </div>
                  <div class="col-3">
                    Delivery Location: <?php echo $order_delivery_location;?>
                  </div>
                  <div class="col-3">
                    Payout: <?php echo $payout;?>
                  </div><br><br>
                   <div class="col-3">
                      Payment Type: <?php echo $payment_type;?>
                  </div>
                   <div class="col-3">
                    Delivery Type: <?php echo $delivery_type;?>
                  </div>
                   <div class="col-3">
                    V-Set: <span class="btn btn-sm bg-green"><?php echo $row['product_price']-($row['product_price']/100*5); ?></span>
                  </div>
                   <div class="col-3">
                    Payers Count: <?php echo $payers_count;?>
                  </div><br><br>
                  <div class="col-3">
                    Total Payers: <?php echo $total_payers;?>
                  </div>
                  <div class="col-3">
                    Y-Com: <span class="btn btn-sm bg-maroon"><?php echo ($product_price) /100*5; ?></span>
                  </div>
                  <div class="col-3">
                    Settlement Date: <?php echo $settlement_datet;?>
                  </div>
                  <div class="col-3">
                      Special Token: <?php echo $specialtoken;?>
                  </div>
                  <?php
}
  ?>
                </div>
 
              </div>
              <!-- /.card-body -->
            </div>
          </form>  <!-- /.card -->        
</body>
</html>
