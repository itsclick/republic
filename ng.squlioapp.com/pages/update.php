 <?php
if(isset($_REQUEST['updatepybtn'])){

  
  
require_once('../config/config.php');
$id = $_POST['id'];
$payout = $_POST['payout'];


$sql = mysqli_query($login,"UPDATE  orders SET payout=1 WHERE id='$id'");

 
  if(!$sql){
   die("query error" . mysqli_error()); 
   }else if($sql){
     
 echo "<script>alert('Vendor Paid Out successful!')
    window.location.href='index.php?payout';  
    
    </script>";

    
  
   }
   
}
?>