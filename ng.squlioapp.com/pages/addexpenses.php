<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form id="expform" name="expform" method="post" action=""></body>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Form Element sizes -->

            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title"></h3>
                  <?php
if(isset($_REQUEST['saveexpense'])){
require_once('../config/config.php');
$expenname = $_POST['expenname'];
$amt = $_POST['amt'];
$bene = $_POST['bene'];
$des = $_POST['des'];
$authori = $_POST['authori'];



 

 $sql = "INSERT INTO tbl_expenses (expenname,amt,bene,des,authori) VALUES
  ('$expenname','$amt','$bene','$des','$authori')";

 
if ($login->query($sql) === TRUE) {
	 
    echo(" <div class='btn btn-block btn-success' align='center'>
                               <button type='button' class='close' data-sucess='alert' aria-hidden='true'>&times;</button>
                         $expenname Added successfully <a href='index.php?viewexpense' class='alert-link'>Ok</a>.
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
                    <input type="text" class="form-control" name="expenname" placeholder="Expenses Name">
                  </div>
                  <div class="col-4">
                    <input type="number" class="form-control" name="amt" placeholder="Amount">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="des" placeholder="Description">
                  </div><br><br>
                  <div class="col-4">
                    <input type="text" class="form-control" name="bene" placeholder="Beneficiary">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="authori" placeholder="Authorized by">
                  </div>
                  <div class="col-3">
                  <input type="submit" name="saveexpense" id="saveexpense" value="Save" class="btn btn-block btn-success" />
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
          </form>  <!-- /.card -->        
</body>
</html>
