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
                                        
                                       <th>T.ID</th><!--T.ID here is count ID to get data in a count format-->
                                        <th>PID</th>
                                        <th>Image</th>
                                         <th>Title</th>
                                        <th> Action</th>
                                        <th>Status Promotion</th>
                                        
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  //fectching from DB using JSON
  include ('../config/config.php');

$query="SELECT id,p_id,active,public,p_title,p_price,photo,question,catid from questions ORDER BY id DESC";
$result = mysqli_query($login, $query);
$i=1;
$json_array = array();
while ($row=mysqli_fetch_assoc($result)){

  $id = $row['id'];
  $p_id = $row['p_id'];
  $active = $row['active'];
  $public = $row['public'];
  $foto = $row['photo'];
  $p_title = $row ['p_title'];
  $p_price = $row ['p_price'];
  $question = $row ['question'];
  $catid = $row ['catid'];
  $data= json_decode($foto,true);

  @$image=$data['uploadFile'];
    ?>
                  <tr>
                    
                                         <td><?php echo $i++; ?></td>
                                        <td> <?php echo $p_id ?></td>
                                        <td> <?php echo'<img src="https://salesyards.com.ng/'.$image.'" alt="Product Image" class="img-size-50">';?></td>
                                        <td><?php echo $p_title ?></td>
                                        <td><?php if ($catid==''){
                     
                     echo"<a href='index.php?updateprocat=$id'><i class='fas fa-pen' aria-hidden='true' title='Edit' style='color: #FFF;'></i></a>";
                      }
                else if ($active==1){
                echo'<i class="fa fa-podcast" aria-hidden="true" style="color: #00bc8c;"></i>';
                    }?> &nbsp;  | <?php echo"  <a href='index.php?deletepostbtn=$id' onclick='return confirmDelete()'><i class='fa fa-trash' aria-hidden='true' title='Delete'></i></a>"; ?> </td>
                                        
                                        <td> <form id="updatestatus" name="updatestatus" method="POST" action="updatestatus.php">
                                            <?php
require_once('../config/config.php');
$query_pag_data = "SELECT * from  questions where id = '$id'";
$result_pag_data = mysqli_query($login, $query_pag_data) or die('MySql Error' . mysql_error());


while($rows = mysqli_fetch_array($result_pag_data)){
    
  $id = $rows['id'];
$p_id = $rows['p_id'];
$promoted = $rows['promoted'];
?>
                                  
                                   <input name="id" type="hidden" class="form-control" id="id" value="<?php echo $rows['id']; ?>"/>
                          <input name="p_id" type="hidden" class="form-control" id="p_id" value="<?php echo $rows['p_id']; ?>"/>
                          <input name="promoted" type="hidden" class="form-control" id="promoted" value="<?php echo $rows['promoted']; ?>" readonly="readonly"/>
                                         
                        <button name="updatestatus" class="btn btn-default"> <i class="fa fa-check" style="color: #FFFFFF;"></i></button> 
                        <button name="updatestatus" class="btn btn-default"> <i class="fa fa-times" style="color: #e74c3c;"></i></button>  </form>

<?php
if ($promoted==1){
  echo ' <i class="fa fa-volume-up" style="color: #28a745;"></i>';
}
  else {
     echo ' <i class="fa fa-volume-off" style="color: #e74c3c;"></i>';
  }

?>

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
