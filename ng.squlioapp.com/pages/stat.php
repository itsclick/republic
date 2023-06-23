
<html>
    <body>

    <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Monthly Recap Report</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                    </p>

                    <div class="chart">
                      <!-- Sales Chart Canvas -->
                      <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Goal Completion</strong>
                    </p>

                    <div class="progress-group">
                      Add Products to Cart
                      <span class="float-right"><b>160</b>/200</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      Complete Purchase
                      <span class="float-right"><b>310</b>/400</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Visit Premium Page</span>
                      <span class="float-right"><b>480</b>/800</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      Send Inquiries
                      <span class="float-right"><b>250</b>/500</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                      <h5 class="description-header"><?php 
				
        require_once ("../config/config.php")
        ;
      
              $query = "Select id, SUM(product_price) From orders where payment_status=1";
              $result = mysqli_query($login, $query) or die (mysql_error());   
              while ($row=mysqli_fetch_array($result)){
                echo "<h6>₦ ". $row['SUM(product_price)']/100*3.05 ." </h6>";
              }
              
              ?></h5>
                      <span class="description-text">Total yards commission</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                      <h5 class="description-header"><?php 
				
        require_once ("../config/config.php")
        ;
      
              $query = "Select id, SUM(amount) From payments";
              $result = mysqli_query($login, $query) or die (mysql_error());   
              while ($row=mysqli_fetch_array($result)){
                echo "<h6> ₦ ". $row['SUM(amount)'] ." </h6>";
              }
              
              ?></h5>
                      <span class="description-text">TOTAL ads COST</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                      <h5 class="description-header"><?php						
	require_once ("../config/config.php")
	;

				$query = "Select id, SUM(product_price) From orders where payment_status=1";
				$result = mysqli_query($login, $query) or die (mysql_error());   
				while ($row=mysqli_fetch_array($result)){
					$res=$row['SUM(product_price)'];
				}
				echo "<h6>₦ ".$res/100*95 ." </h6>";
				?></h5>
                      <span class="description-text">TOTAL PAYOUT</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                      <h5 class="description-header"> <?php						
	require_once ("../config/config.php")
	;

				$query = "Select id, SUM(product_price) From orders where payment_status=0";
				$result = mysqli_query($login, $query) or die (mysql_error());   
				while ($row=mysqli_fetch_array($result)){
					$res=$row['SUM(product_price)'];
				}
				echo "<h6>₦ ".$res/100*95 ." </h6>";
				?></h5>
                      <span class="description-text">TOTAL PENDING PAYOUT</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">US-Visitors Report</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                    <!-- Map will be created here -->
                    <div id="world-map-markers" style="height: 325px; overflow: hidden">
                      <div class="map"></div>
                    </div>
                  </div>
                  <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                    <div class="description-block mb-4">
                      <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                      <h5 class="description-header">8390</h5>
                      <span class="description-text">Visits</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block mb-4">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">30%</h5>
                      <span class="description-text">Referrals</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">70%</h5>
                      <span class="description-text">Organic</span>
                    </div>
                    <!-- /.description-block -->
                  </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="row">
              
              <div class="col-md-12">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Lastest Verified Vendors</h3>

                    <div class="card-tools">
                      <span class="badge badge-danger">8 New Members</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      <?php 
  include ('../config/config.php');

$query="SELECT * from users ORDER BY id ASC LIMIT 8";
$result = mysqli_query($login, $query);
    while($row=mysqli_fetch_array($result)) {
      
      $id = $row['id'];
      $username = $row['username'];
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$avatar = $row['avatar'];
$registered = $row['registered'];
    ?>

                      <li>
                        <img src="https://salesyards.com.ng/<?php echo $avatar;?>" alt="User Image">
                        <a class="users-list-name" href="#"><?php echo $first_name ." ".$first_name;?></a>
                        <span class="users-list-date"><?php echo $registered;?></span>
                      </li>
                      <?php } ?>
                      
                      
                      
                      
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="javascript:">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Orders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Vendor</th>
                      <th>PID</th>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>QTY</th>
                      <th>Price</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
	include ('../config/config.php');

$query="SELECT * from orders ORDER BY id DESC LIMIT 9";
$result = mysqli_query($login, $query);
$i=1;
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
                      <td><?php echo $seller_id ;?></td>
                      <td><?php echo $product_id;?></td>
                      <td><?php echo $order_fullname;?></td>
                      <td>
                        <?php echo $order_mobilenumber;?> </td>
                      <td>
                      <?php echo $qty;?> </td>
                      </td>
                      <td><?php echo $fpp;?> </td>
                      <td><?php if ($payment_status==0){
										echo'<button type="button" class="badge badge-danger">Failed</button>';
											}
								else if ($payment_status==1){
								echo'<button type="button" class="badge badge-success">Paid</button>';
										}?> </td>
                    </tr>
    <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!--<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>-->
                <a href="index.php?allorders" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Orders</span>
                <span class="info-box-number"><?php 
        
  require_once ("../config/config.php")
  ;

        $query = "Select id, COUNT(id) From orders";
        $result = mysqli_query($login, $query) or die (mysql_error());   
        while ($row=mysqli_fetch_array($result)){
          echo "<h6> ". $row['COUNT(id)'] ." </h6>";
        }
        
        ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="fas fa-truck"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Delivered</span>
                <span class="info-box-number"><?php 
        
  require_once ("../config/config.php")
  ;

        $query = "Select id, COUNT(id) From orders where payment_status=1";
        $result = mysqli_query($login, $query) or die (mysql_error());   
        while ($row=mysqli_fetch_array($result)){
          echo "<h6> ". $row['COUNT(id)'] ." </h6>";
        }
        
        ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-plane-slash"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">False Orders</span>
                <span class="info-box-number"><?php 


        $query = "Select id, COUNT(id) From orders where payment_status=0";
        $result = mysqli_query($login, $query) or die (mysql_error());   
        while ($row=mysqli_fetch_array($result)){
          echo "<h6> ". $row['COUNT(id)'] ." </h6>";
        }
        
        ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fas fa-money-bill-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total True sum</span>
                <span class="info-box-number"><?php 
        
  require_once ("../config/config.php")
  ;

        $query = "Select id, SUM(product_price) From orders where payment_status=1";
        $result = mysqli_query($login, $query) or die (mysql_error());   
        while ($row=mysqli_fetch_array($result)){
          echo "<h6>₦ ". $row['SUM(product_price)'] ." </h6>";
        }
        
        ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Browser Usage</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <div class="chart-responsive">
                      <canvas id="pieChart" height="150"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <ul class="chart-legend clearfix">
                      <li><i class="far fa-circle text-danger"></i> Chrome</li>
                      <li><i class="far fa-circle text-success"></i> IE</li>
                      <li><i class="far fa-circle text-warning"></i> FireFox</li>
                      <li><i class="far fa-circle text-info"></i> Safari</li>
                      <li><i class="far fa-circle text-primary"></i> Opera</li>
                      <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                    </ul>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-light p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      United States of America
                      <span class="float-right text-danger">
                        <i class="fas fa-arrow-down text-sm"></i>
                        12%</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      India
                      <span class="float-right text-success">
                        <i class="fas fa-arrow-up text-sm"></i> 4%
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      China
                      <span class="float-right text-warning">
                        <i class="fas fa-arrow-left text-sm"></i> 0%
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.footer -->
            </div>
            <!-- /.card -->

            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recently Added Products</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <?php 
                  //fectching from DB using JSON
  include ('../config/config.php');

$query="SELECT p_title,p_price,photo,question from questions ORDER BY id ASC LIMIT 9";
$result = mysqli_query($login, $query);
$json_array = array();
while ($row=mysqli_fetch_assoc($result)){

  $foto = $row['photo'];
  $p_title = $row ['p_title'];
  $p_price = $row ['p_price'];
  $question = $row ['question'];
  $data= json_decode($foto,true);

  @$image=$data['uploadFile'];

  echo '
                  <li class="item">
                    <div class="product-img">
                      <img src="https://salesyards.com.ng/'.$image.'" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">'.$p_title.'
                        <span class="badge badge-warning float-right">₦ '.$p_price.'</span></a>
                      <span class="product-description">
                        '.$question = substr($question, 0, 50).'.
                      </span>
                    </div>
                  </li>';



}
//echo json_encode($json_array)

    ?>
                
                
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="href="index.php?viewposts" class="uppercase">View All Products</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    </body>


</html>


  