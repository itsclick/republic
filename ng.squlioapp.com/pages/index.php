<?php
session_start();

       //connection 
  require_once ("../config/config.php");
  //inclusion of menus
  require_once ("../pages/menus.php");
	
  
//Check whether the session variable SESS_MEMBER_ID is present or not
  if($_SESSION['USER_ADMIN_ID'] == '') {
    header("location: ../index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sales Yards NG BO</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">


</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader 
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>-->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!--<a href="../index3.html" class="nav-link">Home</a>-->
      </li>
      <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
         <!--<a href="logout.php"><i class="fas fa-door-open">Log Out</i></a>-->
        
        </a>
        
          
        
      </li>

     
      
      
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
    <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SALES YARDS  BO
      <span class="brand-text font-weight-light"> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="#"></i>
              </p>
            </a>
            
          </li>
          
          <?php 
          // menus inclusion here
          meniNEV($login); ?>
          
        
          </li>
          
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $_SESSION['USER_ADMIN_ID'];?><img src="flag.fw.png" width="20px" height="20px"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="logout.php">Logout</a></li>
              <li class="breadcrumb-item active"><?php echo gmdate ('D - m -Y');?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-folder-plus"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Posts</span>
                <span class="info-box-number">
                <?php 		
	require_once ("../config/config.php");
			$query = "Select id, COUNT(id) From questions";
				$result = mysqli_query($login, $query) or die (mysql_error());   
				while ($row=mysqli_fetch_array($result)){
					echo "<small> ". $row['COUNT(id)'] ." </small>";
				}
				?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-shield"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Verified Users</span>
                <span class="info-box-number"><?php 		
	require_once ("../config/config.php");
			$query = "Select id, COUNT(id) From users WHERE verified=1";
				$result = mysqli_query($login, $query) or die (mysql_error());   
				while ($row=mysqli_fetch_array($result)){
					echo "<small> ". $row['COUNT(id)'] ." </small>";
				}
				?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users-slash"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Inactive Users</span>
                <span class="info-box-number"><?php 		
	require_once ("../config/config.php");
			$query = "Select id, COUNT(id) From users WHERE active=0";
				$result = mysqli_query($login, $query) or die (mysql_error());   
				while ($row=mysqli_fetch_array($result)){
					echo "<small> ". $row['COUNT(id)'] ." </small>";
				}
				?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Active Users</span>
                <span class="info-box-number"><?php 		
	require_once ("../config/config.php");
			$query = "Select id, COUNT(id) From users WHERE active=1";
				$result = mysqli_query($login, $query) or die (mysql_error());   
				while ($row=mysqli_fetch_array($result)){
					echo "<small> ". $row['COUNT(id)'] ." </small>";
				}
				?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
<?php
if (isset($_REQUEST['addmenu'])){
    include('addmenu.php');
}
else if(isset($_REQUEST['savementbtn'])){
  include('addmenu.php');
}
else if(isset($_REQUEST['viewmenu'])){
  include('view_menus.php');
}
else if(isset($_REQUEST['deletemenbtn'])){
  include('deletemenu.php');
}
//view orders
else if(isset($_REQUEST['allorders'])){
  include('view_orders.php');
}
else if(isset($_REQUEST['orderdetails'])){
  include('view_order_details.php');
}
else if(isset($_REQUEST['payout'])){
  include('view_payouts.php');
}
//payout
else if(isset($_REQUEST['allorders'])){
  include('view_payouts.php');
}
else if (isset($_REQUEST['editpayoutbtn'])){
  include ('edit_payout.php');
}
else if(isset($_REQUEST['updatepybtn'])){
  include('edit_payout.php');
}
//export unpiad payouts
else if(isset($_REQUEST['export_payout'])){
  include('payout_export.php');
}
//ads payments
else if (isset($_REQUEST['adspay'])){
  include('addspaymnt.php');
}
else if(isset($_REQUEST['userads'])){
  include('view_ads.php');
}
else if(isset($_REQUEST['deleteads'])){
  include('deleteads.php');
}
// manage posts
else if(isset($_REQUEST['viewposts'])){
  include('view_posts.php');
}
else if(isset($_REQUEST['deletepostbtn'])){
  include('deleteposts.php');
}
else if(isset($_REQUEST['updateprocat'])){
  include ('editprocate.php');
}
else if(isset($_REQUEST['updateprocate'])){
  include('editprocate.php');
}
else if(isset($_REQUEST['unassignedpost'])){
  include('unasignedposts.php');
}
//vendors
else if (isset($_REQUEST['viewvendors'])){
  include('view_vendors.php');
}
else if(isset($_REQUEST['veriquest'])){
  include('view_verifiedusers.php');
}
else if(isset($_REQUEST['vendoroffbtn'])){
  include('vendor_off.php');
}
//expenses
else if(isset($_REQUEST['addexpense'])){
  include('addexpenses.php');
}
else if(isset($_REQUEST['saveexpense'])){
  include('addexpenses.php');
}
else if (isset($_REQUEST['viewexpense'])){
  include('view_expenses.php');
}
else if (isset($_REQUEST['deleteexpenbtn'])){
  include('deleteexpen.php');
}

//add BO users
else if(isset($_REQUEST['adduser'])){
  include('adduser.php');
}
else if(isset($_REQUEST['savebouser'])){
  include('adduser.php');
}
else if (isset($_REQUEST['usersview'])){
  include('view_users.php');
}

//voucher management
elseif (isset($_REQUEST['add_voucher'])) {
  include('add_voucher.php');
}
else if (isset($_REQUEST['savevoucher'])){
  include('add_voucher.php');
}
else if (isset($_REQUEST['view_voucher'])){
  include('view_vouchers.php');
}
else if(isset($_REQUEST['deletecoupon'])){
  include('deletecoupon.php');
}

//Site menu categories
else if(isset($_REQUEST['addcate'])){
  include('addcate.php');
}
else if(isset($_REQUEST['savecate'])){
  include('addcate.php');
}
else if(isset($_REQUEST['viewcat'])){
  include('viewcat.php');
}
else if(isset($_REQUEST['deletecatbtn'])){
  include('deletecat.php');
}
else if(isset($_REQUEST['editcatbtn'])){
  include('editcat.php');
}
else if(isset($_REQUEST['updatecatebtn'])){
  include('editcat.php');
}

else {
  include('stat.php');
}

?>
        

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="https://salesyards.com">Sales Yards Dev</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.1.1
    </div>
  </footer>
</div>
<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>








<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- sweetalerts -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
