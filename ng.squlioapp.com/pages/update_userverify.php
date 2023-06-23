 <?php
if(isset($_REQUEST['userverifybtn'])){

  
  
require_once('../config/config.php');
$id = $_POST['id'];
$user_id = $_POST['user_id'];

//echo $user_id;

$sql = "UPDATE  users SET verified=1 WHERE id='$user_id'";


if (mysqli_query($login, $sql)) {

	$sql2 = "Delete from verification_requests where id='$id'";
if (mysqli_query($login, $sql2)) {
  echo "<script>alert('Vendor Verified successful!')
    window.location.href='index.php?viewvendors';  
    
    </script>";
} else {
  echo "Error updating record: " . mysqli_error($login);
}
}
mysqli_close($login);
}
?>