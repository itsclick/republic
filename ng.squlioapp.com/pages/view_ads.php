
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <SCRIPT type="text/javascript">


function confirmDelete()
{
var agree=confirm("Are you sure you wish to continue?");
if (agree)
	return true ;
else
	return false ;
}
// -->
</script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
             

            
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                                        
                                        <th>Website</th>
                                        <th>Title</th>
                                        <th>users</th>
                                        <th>wallet</th>
                                        <th>Spent</th>
                                        <th>Published </th>
                                        <th>Placement</th>
                                        <th>Reuslt</th>
                                         <th>Action</th>
                                         
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
  include ('../config/config.php');

$query="SELECT
userads.id,
userads.`name`,
userads.url,
userads.headline,
userads.description,
userads.location,
userads.audience,
userads.ad_media,
userads.gender,
userads.bidding,
userads.posted,
userads.`status`,
userads.appears,
userads.user_id,
users.wallet,
users.id,
userads_data.id,
userads_data.user_id,
userads_data.ad_id,
sum(userads_data.clicks) AS click,
sum(userads_data.views) as views,
Sum(userads_data.spend) AS spend,
userads_data.dt,
userads.id,
userads.user_id
FROM
userads ,
users,
userads_data 
WHERE
userads.user_id = users.id AND userads_data.user_id = userads.user_id GROUP BY
userads_data.ad_id";
$result = mysqli_query($login, $query);

    while($row=mysqli_fetch_array($result)) {
      
      $id = $row['id'];
      $name = $row['name'];
$url = $row['url'];
$headline = $row['headline'];
$description = $row['description'];
$location = $row['location'];
$audience = $row['audience'];
$ad_media = $row['ad_media'];
$ad_media = $row['ad_media'];
$bidding = $row['bidding'];
$click = $row['click'];
$views = $row['views'];
$posted = $row['posted'];
$status = $row['status'];
$appears = $row['appears'];
$user_id = $row['user_id'];
$wallet = $row['wallet'];
$spend = $row['spend'];
$dt = $row['dt'];
$description = $row['description'];

    ?>
    
    
    

    
    
                  <tr>

                      <!-- modal with content to display advert media and message-->
                <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Advert details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p> <?php echo $description;?></p>
              <p><img src="https:saleyards.com/<?php echo $ad_media;?>"/></p>
            </div>
            <div class="modal-footer justify-content-between">
              <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
      </div><!-- /.modal-dialog ends here -->
                    
                                        <td><a href="<?php echo $url; ?>"><?php echo $url; ?></td>
                                        <td><?php echo $headline ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo number_format($wallet,2); ?></td>
                                        <td><?php echo number_format($spend,2); ?></td>
                                        <td><?php echo $dt;?></td>
                                        <td><?php echo $appears ?></td>
                                        <td > Clicks:<?php echo $click ?><br>Views<?php echo $views ?></td>
                                        <td> <?php echo"<a href='index.php?deleteads=$id' onclick='return confirmDelete()'><i class='fa fa-trash' aria-hidden='true' title='Delete'></i></a>"; ?>&nbsp;&nbsp; <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"> Details</button> </td>
                                        
                  </tr>
                  
                  <?php }?>
                  
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
