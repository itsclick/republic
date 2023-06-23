
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
                                        <th>Date</th>
                                        <th>Name </th>
                                        <th>Amount </th>
                                        <th>Beneficiary</th>
                                        <th>Description</th>
                                        <th>Authorized by</th>
                                        <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
  include ('../config/config.php');

$query="SELECT * from tbl_expenses ORDER BY id ASC";
$result = mysqli_query($login, $query);

    while($row=mysqli_fetch_array($result)) {
      
      $id = $row['id'];
      $expendate = $row['expendate'];
$expenname = $row['expenname'];
$amt = $row['amt'];
$bene = $row['bene'];
$des = $row['des'];
$authori = $row['authori'];

    ?>
                  <tr>
                    
                                        
                                        <td><?php echo $expendate; ?></td>
                                        <td><?php echo $expenname; ?></td>
                                        <td><?php echo $amt;?></td>
                                        <td><?php echo $bene ?></td>
                                        <td><?php echo $des ?></td>
                                        <td><?php echo $authori ?></td>
                                       
                                        
                                        
                                        <td> <a href='index.php?deleteexpenbtn=<?php echo $id ?>'><i class='fa fa-trash' aria-hidden='true' title='Delete'></i>


                                          </td>
                                        
                                        
                  </tr>
                  
                  <?php  }?>
                  
                  </tbody>
                   <?php 
  include ('../config/config.php');
$actcode = "SELECT sum(`amt`) from tbl_expenses ";
$result = mysqli_query($login,$actcode) or die('' . mysqli_error());
$row = mysqli_fetch_row($result);
$amt = $row[0];
 


    ?>
    <footer>
      <tr>
      
        <th colspan="2">TOTAL</th>
          <th><font color="#009900"><?php echo number_format($amt,2); ?></font></th>
          <th><font color="#FF0000"></font></th>
          
        </tr>
      </footer>
                  
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
