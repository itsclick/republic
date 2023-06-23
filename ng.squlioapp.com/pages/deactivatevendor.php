 <?php
if(isset($_REQUEST['deactivate'])){

  
  
require_once('../config/config.php');
$id = $_POST['id'];
$active = $_POST['active'];


$sql = mysqli_query($login,"UPDATE  users SET active=0 WHERE id='$id'");

 
  if(!$sql){
   die("query error" . mysqli_error()); 
   }else if($sql){
     
 echo "<script>alert('Vendor Account Deactivated!')
    window.location.href='index.php?viewvendors';  
    
    </script>";

    
  
   }
   
}
?>