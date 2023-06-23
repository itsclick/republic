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
                                        
                                       <th>ID</th><!--T.ID here is count ID to get data in a count format-->
                                         <th>Menu ID</th>
                                        <th>Name</th>
                                         <th>Image</th>
                                        <th> Status</th>
                                        <th> Action</th>
                                        
                                        
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
  include ('../config/config.php');

$query="SELECT * from tblcategories ORDER BY mid ASC";
$result = mysqli_query($login, $query);
    while($row=mysqli_fetch_array($result)) {
      
      $catid = $row['catid'];
      $catname = $row['catname'];
       $mid = $row['mid'];
$catlink = $row['catlink'];
$file = $row['file'];
$catstate = $row['catstate'];       
?>
                  <tr>
                    
                                         <td><?php echo $catid; ?></td>
                                        <td> <?php echo $mid;?></td>
                                        <td> <?php echo $catname ?></td>
                                      <td> <?php echo'<img src="data:image/jpeg;base64,'.$row['file'].'" width="50px" height="50px"/>';?></td>
                                        <td> <?php if($catstate=1){
                      echo 'Active';
                    } else echo 'In Active';?></td>
                                       <td><?php echo"  <a href='index.php?editcatbtn=$catid'><i class='fas fa-pen' aria-hidden='true' title='Edit' style='color: #FFF;'></i></a> &nbsp;&nbsp;&nbsp;<a href='index.php?deletecatbtn=$catid' onclick='return confirmDelete()'><i class='fa fa-trash' aria-hidden='true' title='Delete' style='color:#e74c3c;'></i></a> "; ?></td>
                                        
                                        
                                        
                                        
                                  
                                        
                  </tr>
                  
                  <?php  }?>
                  
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
