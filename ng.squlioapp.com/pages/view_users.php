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
                    <th>Full Name</th>
                    <th>E-mial</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
		require_once('../config/config.php');

$query="SELECT * from bousers";
$result = mysqli_query($login, $query);
		while($row=mysqli_fetch_array($result)) {
						
$id = $row['id'];
$fname = $row['fname'];	
$email = $row['email'];		
$role = $row['role'];



		?>
                  <tr>
                    <td><?php echo $fname;?></td>
                    <td><?php echo $email;?>  </td>
                    <td><?php echo "******";?></td>
                    <td> <?php echo $role;?></td>
                    
                    <td><?php echo"  <a href='index.php?userdetailbtn=$id'><i class='fa fa-info' aria-hidden='true' title='Delete'></i></a>"; ?> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;<?php echo"  <a href='index.php?deletemenbtn=$id' onclick='return confirmDelete()'><i class='fa fa-trash' aria-hidden='true' title='Delete'></i></a>"; ?></td>
                    
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
