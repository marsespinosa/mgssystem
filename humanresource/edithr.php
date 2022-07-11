<?php

require('../db.php');
//include("../auth_admin.php");

$id_admin =$_REQUEST['id_admin'];
$query = "SELECT * from adminusers where id_admin ='".$id_admin ."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
	<title>Human Resources</title>
	<link rel="fav icon" type="image/png" href="../images/favicon.png">
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<link href="../css/modals.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

	<link href="../style.css" rel="stylesheet" />
	 <link rel="stylesheet" type="text/css" href="../css/style.css" />
	 <link rel="stylesheet" type="text/css" href="style.css" />


</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
	    <a class="logolink" href="index.php"><img src="../images/logo.png" class="img-fluid logo" alt="Dashboard"></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <form class="form-inline my-2 my-lg-0" action="../search.php">
	        <button class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
	        <input class="form-control mr-sm-2 fa fa-search" type="text" placeholder="Search.." aria-label="Search" name="search">
	      </form>
	    </div>
 	</nav>

	<!-- <a href="../dashboard/dashboard.php"><img src="../images/logo.png" class="img-fluid" alt="Dashboard"></a> -->

	<div id="dashboard-wrapper" class="container">
	  <div class="row">
		<div class="col-sm-4">
			<h2 class="admin-ht2" style="border-bottom: none;"><?php //echo $_SESSION['adminusername']; ?></h2>
		<ul class="nav-menu-side">
			<li><a href="../dashboard/index.php">Dashboard</a></li>
			<li><a href="index.php" class="active-menu">Human Resources</a></li>
			<li><a href="../products/index.php">Products</a></li>
			<li><a href="../messages/index.php">Messages</a></li>
			<li><a href="../notifications/index.php">Notifications</a></li>
			<li><a href="../settings/index.php">Settings</a></li>
		</ul>
		 <p class="logout-btm"><a href="../logout.php">Logout</a></p>
		</div>
		<div class="col-sm-8">
			<h2>Production Staff</h2>
      <div class="row cols-dashboard-right">
      <div class="col">
        <a class="btn btn-primary btn-dashboard active" href="index.php" role="button">Management Staff</a>
      </div>
      <div class="col">
        <a class="btn btn-primary btn-dashboard" href="#" role="button">Production Staff</a>
      </div>
      <div class="col">
        <a class="btn btn-primary btn-dashboard" href="#" role="button">Applicants</a>
      </div>
      <div class="col">
        <a class="btn btn-primary btn-dashboard" href="#" role="button">Renewals</a>
      </div>
      <div class="col">
        <a class="btn btn-primary btn-dashboard" href="#" role="button">Depots</a>
      </div>
      </div>
		<div class="row data-tables-prod">
			<div class="col">
				<div class="form">
				<?php
				$status = "";
				if(isset($_POST['new']) && $_POST['new']==1)
				{
				$id_admin=$_REQUEST['id_admin'];
				$employee_id = $_REQUEST['employee_id'];
        $admin_name = $_REQUEST['admin_name'];
        $admin_position = $_REQUEST['admin_position'];
        $contact_number = $_REQUEST['contact_number'];
        $admin_email = $_REQUEST['admin_email'];


        $update="update adminusers set employee_id='".$employee_id."', admin_name='".$admin_name."', admin_position='".$admin_position."', contact_number='".$contact_number."', admin_email='".$admin_email."' where id_admin='".$id_admin."'";
				mysqli_query($con, $update) or die(mysqli_error());

        $status = "<div class='record-updated'>Record Updated Successfully. </br></br><a href='index.php'>View Updated Record</a>";
				echo '<p style="color:#FF0000;">'.$status.'</p></div>';
				}else {
				?>

				<div class="editproductsorder">
					<form class="form" action="" method="post">
						<input type="hidden" name="new" value="1" />
						<input name="id_admin" type="hidden" value="<?php echo $row['id_admin'];?>" />

	          <strong>Employee's Id</strong>
	          <input type="text" class="input-product ehr" name="employee_id" value="<?php echo $row['employee_id'];?>" placeholder="Employee's Id" required />

						<strong>Name</strong>
						<input type="text" class="input-product" name="admin_name" value="<?php echo $row['admin_name'];?>" placeholder="Name" required />

	          <select class="input-product form-selected" name="admin_position" >
	              <option value="<?php echo $row['admin_position'];?>" selected><?php echo $row['admin_position'];?></option>
	              <option value="management_staff">Management Staff</option>
	              <option value="production_staff">Production Staff</option>
	              <option value="applicants">Applicants</option>
	              <option value="Others">Others</option>
	          </select>

	          <input type="text" class="input-product" name="contact_number" value="<?php echo $row['contact_number'];?>" placeholder="Contact Number" required />

	    			<input type="text" class="input-product" name="admin_email" value="<?php echo $row['admin_email'];?>" placeholder="Your Email" required>

	          <input name="submit" type="submit" value="Update" />
					</form>
				<?php } ?>
				</div>
				</div>
			</div>
			<div class="download-data-tab">
					<p>
						<a href="editdetails.php" class="btn btn-danger" >Back</a>
						<a href="view.php" class="btn btn-danger" >Edit Products</a>
						<a href="deleteproduct.php" class="btn btn-danger">Delete Products</a>
						<a href="#" class="btn btn-primary">Generate Reports</a>
					</p>
			</div>

			<!-- Footer -->
			<footer class="page-footer font-small mdb-color lighten-3 pt-4">
			  <!-- Copyright -->
			  <div class="footer-copyright text-center py-3">Copyright 2021 © MGSON Whitening and Beauty Shop. All Rights Reserverd.
			  </div>
			  <!-- Copyright -->
			</footer>
			<!-- Footer -->
		</div>




		</div>
	  </div>
</div><!-- Delete Products -->


<script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>
