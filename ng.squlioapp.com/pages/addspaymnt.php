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
                  <tr>                   <th>Date</th>
                                        <th>Vendors</th>
                                        <th>Amount</th>
                                        <th>Plan</th>
                                        <th>Infot</th>
                                        <th>Via</th>
                  </tr>
                  </thead>
                  <tbody>
                 <?php 
  include ('../config/config.php');

$query="SELECT * from payments ORDER BY id DESC";
$result = mysqli_query($login, $query);
$i=1;
    while($row=mysqli_fetch_array($result)) {
      
      $id = $row['id'];
      $user_id = $row['user_id'];
$amount = $row['amount'];
$type = $row['type'];
$date = $row['date'];
$pro_plan = $row['pro_plan'];
$info = $row['info'];
$via = $row['via'];



    ?>
                  <tr>
                    
                                        
                                        
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo getusernames($user_id); ?></td>
                                        <td bgcolor="#293A4A"><font color="#FFFFFF"><?php echo $amount; ?></font></td>
                                        <td ><?php echo $pro_plan ?></font></td>
                                        <td ><?php echo $info  ?></td>
                                        <td><?php echo $via  ?></td>
                                        
                                        
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
