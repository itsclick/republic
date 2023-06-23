<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form id="form1" name="form1" method="post" action=""></body>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Form Element sizes -->

            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Add Menus</h3>
                  <?php
if(isset($_REQUEST['savementbtn'])){
require_once('../config/config.php');
$mtitle = $_POST['mtitle'];
$icons = $_POST['icons'];
$mparent = $_POST['mparent'];
$mlink = $_POST['mlink'];
$mstatus = $_POST['mstatus'];



 

 $sql = "INSERT INTO tblmenus (mtitle,icons,mparent,mlink,mstatus) VALUES
  ('$mtitle','$icons','$mparent','$mlink','$mstatus')";

 
if ($login->query($sql) === TRUE) {
	 
    echo(" <div class='btn btn-block btn-success' align='center'>
                               <button type='button' class='close' data-sucess='alert' aria-hidden='true'>&times;</button>
                         $mtitle Added successfully <a href='index.php?addmenu' class='alert-link'>Ok</a>.
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
                    <input type="text" class="form-control" name="mtitle" placeholder="Menu Title">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="icons" placeholder="Menu icon">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="mparent" placeholder="Parent ID">
                  </div><br><br>
                  <div class="col-4">
                    <input type="text" class="form-control" name="mlink" placeholder="Menu Link">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="mstatus" placeholder="Status">
                  </div>
                  <div class="col-3">
                  <input type="submit" name="savementbtn" id="savementbtn" value="Save" class="btn btn-block btn-success" />
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
          </form>  <!-- /.card -->        
</body>
</html>
