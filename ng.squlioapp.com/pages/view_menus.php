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
                    <th>MID</th>
                    <th>Sort</th>
                    <th>Title</th>
                    <th>Icon</th>
                    <th>Parent</th>
                    <th>Link</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
		require_once('../config/config.php');

$query="SELECT * from tblmenus";
$result = mysqli_query($login, $query);
		while($row=mysqli_fetch_array($result)) {
						
$mid = $row['mid'];
$msort = $row['msort'];	
$mtitle = $row['mtitle'];		
$icons = $row['icons'];
$mparent = $row['mparent'];
$mlink = $row['mlink'];
$mstatus = $row['mstatus'];


		?>
                  <tr>
                    <td><?php echo $mid;?></td>
                    <td><?php echo $msort;?>  </td>
                    <td><?php echo $mtitle;?></td>
                    <td> <?php echo "<li class='$icons'</li>";?></td>
                    <td><?php echo $mparent;?></td>
                    <td> <?php echo $mlink;?></td>
                    <td><?php echo $mstatus;?></td>
                    <td><?php echo"  <a href='index.php?deletemenbtn=$mid' onclick='return confirmDelete()'><i class='fa fa-trash' aria-hidden='true' title='Delete'></i></a>"; ?></td>
                    
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
