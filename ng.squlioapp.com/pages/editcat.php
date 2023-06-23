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
                <h3 class="card-title">Update Category </h3>
                  <?php
$catid = $_REQUEST['editcatbtn'];
require_once('../config/config.php');
$query_pag_data = "SELECT * from  tblcategories where catid = '$catid'";
$result_pag_data = mysqli_query($login, $query_pag_data) or die('MySql Error' . mysql_error());


while($rows = mysqli_fetch_array($result_pag_data)){
    
  $catid = $row['catid'];
      $catname = $row['catname'];
$catlink = $row['catlink'];
$file = $row['file'];
$catstate = $row['catstate']; 
?>


<?php
if(isset($_REQUEST['updatecatebtn'])){
require_once('../config/config.php');
$catid = $_POST['catid'];
$mid = $_POST['mid'];
$catname = $_POST['catname'];
$catlink = $_POST['catlink'];
$filename = $_FILES['file']['name'];
$file = $_FILES['file']['tmp_name'];
$catstate = $_POST['catstate'];
$file = base64_encode(file_get_contents(addslashes($file)));



//echo $file;
if($file==""){
 $sql = "UPDATE tblcategories SET catid='$catid',mid='$mid',catname='$catname',catlink='$catlink' ,catstate='$catstate' WHERE catid='$catid'";
}else{
  $sql = "UPDATE tblcategories SET catid='$catid',mid='$mid',catname='$catname',catlink='$catlink' ,file='$file',catstate='$catstate' WHERE catid='$catid'";
}

 
if ($login->query($sql) === TRUE) {
   
    echo(" <div class='btn btn-block btn-success' align='center'>
                               <button type='button' class='close' data-sucess='alert' aria-hidden='true'>&times;</button>
                         $catname Category Added successfully <a href='index.php?viewcat' class='alert-link'>Ok</a>.
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
                    Menu ID <input type="hidden" class="form-control" name="catid"  value="<?php echo $rows['catid']; ?>"/>
                    <input type="text" class="form-control" name="mid"  value="<?php echo $rows['mid']; ?>"/><br>
                  </div>
                 
                  <div class="col-4">
                   Category Name<input type="text" class="form-control" name="catname"  value="<?php echo $rows['catname']; ?>"/>
                  </div>
                  <div class="col-4">
                    Status <input type="text" class="form-control" name="catstate" value="<?php if($catstate=1){
                      echo 'Active';
                    } else echo 'In Active';?>">
                  </div><br><br>
                  <div class="col-4">
                    <input type="file"  name="file" id="file" /> 
                  </div>
                  
                  <div class="col-3">
                  <input type="submit" name="updatecatebtn" id="savecate" value="Update" class="btn btn-block btn-success" />
                  </div>
                </div>

              </div>
            <?php }?>
              <!-- /.card-body -->
            </div>
          </form>  <!-- /.card -->        
</body>
</html>
