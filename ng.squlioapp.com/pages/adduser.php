<?php
// WEBSITE MENU //
            
function permit($login){
$query="SELECT * from tblmenus where mstatus=1";
$result = mysqli_query($login,$query);


    while($row=mysqli_fetch_array($result)) {
        
if(!empty($row['suffix'])){
$ec=$row['suffix'];
//$inlink="data-toggle=\"dropdown\" class=\"dropdown-toggle\"";
}
  $curre =''.$row["mlink"];
  $menuDisplay = '<option value="'.$row['mid'].'" > '.$row['mtitle'].'</option>'."\n";
        
    echo $menuDisplay;
                
  // echo main menu
  
    $resultSubmenu = mysqli_query($login,"SELECT * FROM tblmenus WHERE mparent=" . $row['mid'] . " AND mstatus=1 ") or die(mysqli_error());
    if(mysqli_num_rows($resultSubmenu) >= 1){
  
        while($rowSub=mysqli_fetch_array($resultSubmenu)) {
      //'<option value="'.$rowSub['mlink'].'" > '.$rowSub['mtitle'].'</option>';
  
    $subsubmeneu = mysqli_query($login,"SELECT * FROM tblmenus WHERE mparent=".$rowSub['mid']." ORDER BY  mid") or die(mysql_error());
    if(mysqli_num_rows($subsubmeneu) >= 1){
      while($rowSub = mysqli_fetch_array($subsubmeneu)){
        //echo '<option value="'.$rowSub['mlink'].'" > '.$row['mtitle'].'</option>'."\n"; // echo sub menu
      }
    }
            
      
        }
    }
} 

}

            ?>

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
                <h3 class="card-title">Add BO User</h3>
                  <?php
if(isset($_REQUEST['savebouser'])){
require_once('../config/config.php');

$fname = $_POST['fname'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$password2 = sha1($_POST['password2']);
$role = $_POST['role'];
$permision = $_POST['permision'];

if ($password !==$password2){
  echo(" <div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                Your password do not match please try again. <a href='#' class='alert-link'>Alert Link</a>.
                            </div>");
}
else{
 

 $sql = "INSERT INTO bousers (fname,email,password,password2,role) VALUES
  ('$fname','$email','$password','$password2','$role')";

 
 if ($login->query($sql) === TRUE) {
  $last_id = $login->insert_id;
   foreach ($_POST['permision'] as $permit){
      $sql1 = "INSERT INTO user_perimision (menuid,user) VALUES ('".$permit."','".$last_id."')";
    $login->query($sql1);
     
  }
  echo(" <div class='alert alert-success alert-success' align='center'>
                                <button type='button' class='close' data-sucess='alert' aria-hidden='true'>&times;</button>
                           $fname | $password Added successfully <a href='index.php?usersview' class='alert-link'>okay</a>.
                            </div>"); 
  
} else {
    echo "Error: " . $sql . "<br>" . $login->error;
}

$login->close();
 
 
}
 
 
}
      
?>
          
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-4">
                    <input type="text" class="form-control" name="fname" placeholder="Full Name">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="email" placeholder="E-mail Address">
                  </div>
                  <div class="col-4">
                    <input type="password" class="form-control" name="password" placeholder="password">
                  </div><br><br>
                  <div class="col-4">
                    <input type="password" class="form-control" name="password2" placeholder="Confirm password">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="role" placeholder="Role">
                  </div>
                  <div class="col-4">
                   <select name="permision[]" multiple="true"  id="permision">
            <option value=""></option>
            <?php echo permit($login);?>
            <!--optgroup label="Eastern Time Zone">
<option value="CT">Connecticut</option>
</optgroup-->
          </select>
            <!--select style="width:300px" id="states" multiple="true"-->
            <?php //echo permit($login);?>
            <!--/select-->
          
            <script id="rendered-js">
function format(permision) {
  if (!permision.id) return permision.text; // optgroup
  return permision.text;
}


$("#permision").select2({
  placeholder: "Select a state",
  allowClear: true,
  formatResult: format,
  formatSelection: format });
//# sourceURL=pen.js
            </script>
                  </div><br><br>
                  <div class="col-3">
                  <input type="submit" name="savebouser" id="savebouser" value="Save" class="btn btn-block btn-success" />
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
          </form>  <!-- /.card -->        
</body>
</html>
