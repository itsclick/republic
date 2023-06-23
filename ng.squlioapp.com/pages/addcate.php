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
                <h3 class="card-title">Add New Category </h3>
                  <?php
if(isset($_REQUEST['savecate'])){
require_once('../config/config.php');
$catname = mysqli_escape_string($login, $_POST['catname']);
$catlink = $_POST['catlink'];
$filename = $_FILES['file']['name'];
$file = $_FILES['file']['tmp_name'];
$catstate = $_POST['catstate'];
$file = base64_encode(file_get_contents(addslashes($file)));



//echo $file;


 

 $sql = "INSERT INTO tblcategories (catname,catlink ,file,catstate) VALUES
  ('$catname','$catlink','$file','$catstate')";

 
if ($login->query($sql) === TRUE) {
	 
    echo(" <div class='btn btn-block btn-success' align='center'>
                               <button type='button' class='close' data-sucess='alert' aria-hidden='true'>&times;</button>
                         $catname Category Added successfully <a href='index.php?addcate' class='alert-link'>Ok</a>.
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
                    <input type="text" class="form-control" name="catname"  placeholder=" Category Name"/>
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="catlink" placeholder="Category Link">
                  </div>
                  <div class="col-4">
                    <input type="hidden" class="form-control" name="catstate" value="1">
                  </div><br><br>
                  <div class="col-4">
                    <input type="file"  name="file" id="file" /> 
                  </div>
                  
                  <div class="col-3">
                  <input type="submit" name="savecate" id="savecate" value="Save" class="btn btn-block btn-success" />
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
          </form>  <!-- /.card -->        
</body>
</html>
