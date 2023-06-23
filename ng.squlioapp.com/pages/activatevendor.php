 <?php
if(isset($_REQUEST['activate'])){

  
  
require_once('../config/config.php');
$id = $_POST['id'];
$active = $_POST['active'];


$sql = mysqli_query($login,"UPDATE  users SET active=1 WHERE id='$id'");

 
  if(!$sql){
   die("query error" . mysqli_error()); 
   }else if($sql){
     
 echo "<script>alert('Vendor Account activated!')
    window.location.href='index.php?viewvendors';  
    
    </script>";

    
  
   }
   
}
?>