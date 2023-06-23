<html>
    <body>
<?php 
//Include database connection details
require_once ("../config/config.php");


  $id = $_REQUEST['deleteads'];
  $sql = "Delete from userads where id='$id'";
  //$del=@mysql_query("Delete from tbl_students where id=".mysql_escape_string($id)."");
  
  if ($login->query($sql) === TRUE) {


    echo "<script>alert('Record Deleted Successfully')
    window.location.href='index.php?userads';  
    
    </script>";
    
	  /*echo(" <div class='alert alert-success alert-dismissable' align='center'>
                               <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                              <a href='index.php?viewmenu' class='alert-link'>Record Deleted Successfully. [Ok]</a>.
                            </div>");
                           echo' <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                            Launch Success Modal
                          </button>';

                       echo   "<script>
                          $('#modal-success').modal('show');
                      </script>";
*/
                        
   
} else {
    echo "Error deleting record: " . $login->error;
}

$login->close();
  

   
?>
 <div class="modal fade" id="modal-success">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">welcome to go </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
</body>
</html>