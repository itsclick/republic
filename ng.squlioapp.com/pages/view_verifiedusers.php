
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
                                        
                                        <th>V.Name </th>
                                        <th>Message </th>
                                         <th>file </th>
                                        <th>Status</th>
                                        <th>Action</th>
                                       
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
  include ('../config/config.php');

$query="SELECT * from verification_requests ORDER BY id ASC";
$result = mysqli_query($login, $query);

    while($row=mysqli_fetch_array($result)) {
      
      $id = $row['id'];
      $user_id = $row['user_id'];
$name = $row['name'];
$message = $row['message'];
$media_file = $row['media_file'];
$time = $row['time'];


    ?>
                  <tr>
                    <!-- modal with content to display verification ID and message-->
                <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Verification Request</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p> <?php echo $message;?></p>
              <p><img src="https://salesyards.com.ng/<?php echo $media_file;?>" width="300px" height="250px"    alt="User Image" > &hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
      </div><!-- /.modal-dialog ends here -->
                    
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $message;?></td>
                                        <td><img src="https://salesyards.com.ng/<?php echo $media_file;?>" alt="User Image" class="img-size-50" ></td>
                                        <td><?php echo date('d/m/Y', $time);
                                        ?></td>
                                       
                                        
                                        
                                        <td> <form id="updatepay" name="updatepay" method="POST" action="update_userverify.php">
                                            <?php
require_once('../config/config.php');
$query2="SELECT * from verification_requests ORDER BY id ASC";
$result2 = mysqli_query($login, $query2);

    while($row=mysqli_fetch_array($result2)) {
      
      $id = $row['id'];
      $user_id = $row['user_id'];
?>

                                   <input name="id" type="hidden" class="form-control" id="id" value="<?php echo $row['id']; ?>"/>
                          <input name="user_id" type="hidden" class="form-control" id="user_id" value="<?php echo $row['user_id']; ?>"/>
                          
                                         
                                           <button name="userverifybtn" class="btn btn-default"> Verify Account</i></button>  
                                         </form><br>
                                         <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">View Details</button>

 
                                          </td>
                                        
                                        
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
