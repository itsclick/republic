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
                    <th>Avater</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Tel</th>
                    <th>Acc No.</th>
                    <th>B.Name</th>
                    <th>R.Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
  include ('../config/config.php');

$query="SELECT * from users ORDER BY id DESC";
$result = mysqli_query($login, $query);
    while($row=mysqli_fetch_array($result)) {
      
      $id = $row['id'];
      $username = $row['username'];
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$phone_number = $row['phone_number']; 
$avatar = $row['avatar'];
$registered = $row['registered'];
$active = $row['active'];
$momonum = $row['momonum']; 
$momonetwork = $row['momonetwork'];       
?>
                  <tr>
                    <td> <img src="https://salesyards.com.ng/<?php echo $avatar;?>" alt="User Image" class="img-size-50" ></td>
                    <td><?php echo $username;?>  </td>
                    <td><?php echo $first_name. ' '. $last_name;?></td>
                    <td><?php echo $phone_number;?></td>
                    <td><?php echo $momonum;?></td>
                    <td><?php echo $momonetwork;?></td>
                    <td> <?php echo $registered;?></td>
                    <td><?php 
                         if($active==1){
                            echo'<button type="button" class="badge badge-success">Active</button>';
                          }
                          else if($active==0){
                            echo'<button type="button" class="badge badge-danger">Inactive</button>'; 
                          }
                        ?>
                          


                        </td>
                    <td><form id="vendoroffbtn" name="vendoroffbtn" method="POST" action="activatevendor.php">
                                            <?php
require_once('../config/config.php');
$query_pag_data = "SELECT * from  users where username = '$username'";
$result_pag_data = mysqli_query($login, $query_pag_data) or die('MySql Error' . mysql_error());


while($rows = mysqli_fetch_array($result_pag_data)){
    
  $id = $rows['id'];
$username = $rows['username'];
$active = $rows['active']
?>

                                   <input name="id" type="hidden" class="form-control" id="id" value="<?php echo $rows['id']; ?>"/>
                                   <input name="active" type="hidden" class="form-control" id="active" value="<?php echo $rows['active']; ?>"/>
                                         
                                           <button name="activate" class="btn btn-default"> <i class="fa fa-toggle-off" style="color: #28a745;"></i></button>  </form> &nbsp; 

                                        <!-- deactivate vendors account start here-->
                                           <form id="activate" name="deactivate" method="POST" action="deactivatevendor.php">
                                            <?php
require_once('../config/config.php');
$query_pag_data = "SELECT * from  users where id = '$id'";
$result_pag_data = mysqli_query($login, $query_pag_data) or die('MySql Error' . mysql_error());


while($rows = mysqli_fetch_array($result_pag_data)){
    
$id = $row['id'];
      $username = $row['username'];
$active = $row['active'];

?>

                                   <input name="id" type="hidden" class="form-control" id="id" value="<?php echo $rows['id']; ?>"/>
                                   <input name="active" type="hidden" class="form-control" id="active" value="<?php echo $rows['active']; ?>"/>
                                         
                                           <button name="deactivate" class="btn btn-default"> <i class="fa fa-toggle-off" style="color: #e74c3c;"></i></button>  </form></td>
                    
                  </tr>
                  
                  <?php }}} ?>
                  
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
