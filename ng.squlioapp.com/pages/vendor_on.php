 <?php
if(isset($_REQUEST['vendoroffbtn'])){

  
  
require_once('../config/config.php');
$username = $_POST['username'];
//$payout = $_POST['payout'];


$sql = mysqli_query($login,"UPDATE `users` SET `active`='0' WHERE username='$username'");

 
  if(!$sql){
   die("query error" . mysqli_error()); 
   }else if($sql){
     
 echo "<script>alert('Vendor Paid Out successful!')
    window.location.href='index.php?viewvendors';  
    
    </script>";

    
  
   }
   
}
?>