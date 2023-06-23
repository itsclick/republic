<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form id="form1" name="form1" enctype="multipart/form-data"  method="post" action=""></body>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Form Element sizes -->

            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Update Products Category </h3>
                  <?php
$id = $_REQUEST['updateprocat'];
require_once('../config/config.php');
$query_pag_data = "SELECT * from  questions where id = '$id'";
$result_pag_data = mysqli_query($login, $query_pag_data) or die('MySql Error' . mysql_error());


while($rows = mysqli_fetch_array($result_pag_data)){
    
  $id = $row['id'];
      $p_title = $row['p_title'];
$p_id = $row['p_id'];
 
?>


<?php
if(isset($_REQUEST['updateprocate'])){
require_once('../config/config.php');
$id = $_POST['id'];
$catid = $_POST['catid'];
$p_id = $_POST['p_id'];
 $sql = "UPDATE questions SET catid='$catid' WHERE id='$id'";


 
if ($login->query($sql) === TRUE) {
   
    echo(" <div class='btn btn-block btn-success' align='center'>
                               <button type='button' class='close' data-sucess='alert' aria-hidden='true'>&times;</button>
                         $catid Category Updated Post successfully <a href='index.php?unassignedpost' class='alert-link'>Ok</a>.
                           </div>");                        
                           
} else {
   echo "Error: " . $sql . "<br>" . $login->error;
}

$login->close();

}        
?>
          
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-4">
                    <input type="hidden" class="form-control" name="id"  value="<?php echo $rows['id']; ?>"/>
                    <input type="text" class="form-control" name="p_id"  value="<?php echo $rows['p_id']; ?>"/>
                  </div>
                 
                  <div class="col-4">
                    <input type="text" class="form-control" name="p_title" readonly="readonly" value="<?php echo $rows['p_title']; ?>">
                  </div>
                  <div class="col-4">
                    <div class="form-group">

                        <?php
      require_once('../config/config.php');
      $sub = "SELECT catid,catname from  tblcategories";
    if(!$sub){
    echo mysqli_error();  
    }
    $result = mysqli_query($login, $sub) or die('MySql Error' . mysqli_error());

  echo "<select name='catid' class='form-control'>"; 

while($row = mysqli_fetch_array($result)){
     
     $catid = $row['catid'];
     $catname = $row['catname'];
     
  echo "<option value='$catid'>$catid - $catname </option>";
  }
  echo "</select>";
    
  ?>
                      </div>
                     
                  </div><br><br>
                  
                  
                  <div class="col-12">
                  <input type="submit" name="updateprocate" id="savecate" value="Update Category" class="btn btn-block btn-success" />
                  </div>
                </div>

              </div>
            <?php }?>
              <!-- /.card-body -->
            </div>
          </form>  <!-- /.card -->        
</body>
</html>
