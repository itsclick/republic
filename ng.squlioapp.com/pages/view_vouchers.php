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
                                        <th>V.code</th>
                                        <th>Amount</th>
                                        <th>Duration</th>
                                        <th>No. Of use</th>
                                        <th>Used By</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
  include ('../config/config.php');

$query="SELECT * from tblcoupon ORDER BY id DESC";
$result = mysqli_query($login, $query);
$i=1;
    while($row=mysqli_fetch_array($result)) {
      
      $id = $row['id'];
      $ccode = $row['ccode'];
$amt = $row['amt'];
$duration = $row['duration'];
$usedx = $row['usedx'];
$usedby = $row['usedby'];
$status = $row['status'];
    ?>
                  <tr>
                    
                                        <td style='display:none;'><?php echo $i++; ?></td>
                                        <td><?php echo $ccode; ?></td>
                                        <td><?php echo $amt ?></td>
                                        <td><?php echo $duration ?></td>
                                        <td><?php echo $usedx ?></td>
                                        <td><?php echo $usedby ?></td>

                                        
                                        
                                        <td><?php if ($status==0){
                    echo'<button type="button" class="badge badge-success">Valid</button>';
                      }
                else if ($status==1){
                echo'<button type="button" class="badge badge-danger">Invalid</button>';
                    }?> </td>
                     <td><?php echo"  <a href='index.php?deletecoupon=$id' onclick='return confirmDelete()'><i class='fa fa-trash' aria-hidden='true' title='Delete'></i></a>"; ?></td>
                                        
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
