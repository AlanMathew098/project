<?php
include("dbx.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hayath</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-ct-dark.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<body>
		<div class="main-wrapper">
			<div class="header">
				<div class="header-left">
					<a href="index1.php" class="logo"> <img src="./assets/img/cax.png" width="50" height="70" alt="logo"> <span class="logoclass"></span> </a>
	
				</div>
				<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
				<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
				<ul class="nav user-menu">
			<li class="nav-item dropdown noti-dropdown">
		<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
		<div class="dropdown-menu notifications">
			<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
			<div class="noti-content">
				<ul class="notification-list">
					<li class="notification-message">
						<a href="#">
							<div class="media"> <span class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
								</span>
								<div class="media-body">
									<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
									<p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
								</div>
							</div>
						</a>
					</li>
					<li class="notification-message">
						<a href="#">
							<div class="media"> <span class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
								</span>
								<div class="media-body">
									<p class="noti-details"><span class="noti-title">International Software
										Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
									<p class="noti-time"><span class="notification-time">6 mins ago</span> </p>
								</div>
							</div>
						</a>
					</li>
					<li class="notification-message">
						<a href="#">
							<div class="media"> <span class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
								</span>
								<div class="media-body">
									<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone
										XR</span></p>
									<p class="noti-time"><span class="notification-time">8 mins ago</span> </p>
								</div>
							</div>
						</a>
					</li>
					<li class="notification-message">
						<a href="#">
							<div class="media"> <span class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
								</span>
								<div class="media-body">
									<p class="noti-details"><span class="noti-title">Mercury Software
									Inc</span> added a new product <span class="noti-title">Apple
									MacBook Pro</span></p>
									<p class="noti-time"><span class="notification-time">12 mins ago</span> </p>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
		</div>
	</li>
	<li class="nav-item dropdown has-arrow">
		<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-pill img-fluid " src="assets/img/IMG-20220912-WA0118.jpg" width="20px"   alt="Alan"></span> </a>
		<div class="dropdown-menu">
					<div class="user-header">
						<div class="avatar avatar-sm"> <img src="assets/img/IMG-20220912-WA0118.jpg" alt="User Image" class="avatar-img rounded-circle"> </div>
						<div class="user-text">
							<h6>Alan</h6>
							<p class="text-muted mb-0">Administrator</p>
						</div>
					</div> <a class="dropdown-item" href="profile.php">My Profile</a>  <a class="dropdown-item" href="login.php">Logout</a> </div>
					</li>
				</ul>
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
			</div>
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="active"> <a href="index1.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
							<li class="list-divider"></li>
							<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Products </span> <span class="menu-arrow"></span></a>
								<ul class="submenu_class" style="display: none;">
									
							
									<li><a href="home_add.php"> Add Hot Coffee </a></li>
									
								</ul>

						
					
							<li class="submenu"> <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul class="submenu_class" style="display: none;">
									<li><a href="home_table.php">Product Table </a></li>
							
								</ul>
							</li>
							<li class="list-divider"></li>
							<li class="menu-title mt-3"> <span>EXTRAS</span> </li>
							<li class="submenu"> <a href="#"><i class="fas fa-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
								<ul class="submenu_class" style="display: none;">
									<li><a href="login.php">Login </a></li>
									<li><a href="register.php">Register </a></li>
									<li><a href="forgot-password.php">Forgot Password </a></li>
									<li><a href="change-password.php">Change Password </a></li>
									<li><a href="lock-screen.php">Lockscreen </a></li>
									<li><a href="profile.php">Profile </a></li>
						
									<li><a href="error-404.php">404 Error </a></li>
									
								</ul>
							</li>
						
						</ul>
					</div>
				</div>
			</div>

			<?php 
 include "sidebar.php"
      ?>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header mt-5">
<div class="row">
<div class="col">
<h3 class="page-title">Product Table</h3>
</div>
</div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body booking_card">
                <div class="table-responsive">
                    <table class="datatable table table-stripped table table-hover table-center mb-0">
                        <thead>
                            <tr>
                            <th>Product Id</th>
                                <th>Product Name</th>
								
                                <th>Product Price</th>
								
                                <th>Product Details</th>
                                <th>Product Image</th>
								
			
                              
                            </tr>
							
                        </thead>

						<tbody>
                        <?php
						        $sql = "SELECT * FROM home";
						        $result = $mysqli->query($sql);
							
						        if ($result->num_rows > 0) {
						        // output data of each row
						        while($row = $result->fetch_assoc()) {
									$id= $row['id'];
						    ?>




						    <tr>
                            <td align="left"><?php echo $row['product_id'];?></td>
						        <td align="left"><?php echo $row['product_name'];?></td>
								 <td align="left">$<?php echo $row['product_price'];?></td>
						        <td align="left"><?php echo $row['product_details'];?></td>
                               
						       
                                    
								<td align="left"><img src="alan/<?php echo $row['product_image'];?>" alt="" height="150px" width="120px"></td>


    <td class="text-right">

	<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
  <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="home_edit.php?sa=<?php echo $row["id"];?>"  ><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a  class="dropdown-item" href="" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
</div>
 
</td>
                            </tr>
                            <?php
                                }
                                }
                            ?>
						</tbody>
        
                    </table>
					</div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="delete_asset" class="modal fade delete-modal" role="dialog">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
            <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
            <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
			<a href="home_delete.php?delete=<?php echo $id;?>"> <button type="submit" class="btn btn-danger">Delete</button></a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

</div>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>