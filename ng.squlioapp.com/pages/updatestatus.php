 <?php
if(isset($_REQUEST['updatestatus'])){

  
  
require_once('../config/config.php');
$id = $_POST['id'];
$promoted = $_POST['promoted'];


$sql = mysqli_query($login,"UPDATE  questions SET promoted=1 WHERE id='$id'");

 
  if(!$sql){
   die("query error" . mysqli_error()); 
   }else if($sql){
     
 echo "<script>alert('Status Updated!')
    window.location.href='index.php?viewposts';  
    
    </script>";

    
  
   }
   
}
?>