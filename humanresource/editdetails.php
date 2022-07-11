<?php
 //include("../auth_admin.php");
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
			<h2>Management Staff</h2>
			  <div class="row cols-dashboard-right">
				<div class="col">
					<a class="btn btn-primary btn-dashboard active" href="index.php" role="button">Management Staff</a>
				</div>
				<div class="col">
					<a class="btn btn-primary btn-dashboard" href="productionstaff.php" role="button">Production Staff</a>
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
				<table class='table table-striped table-hover' >
					<thead>
							<tr>
								<th scope='col'>Employee ID</th>
								<th scope='col'>Name</th>
								<th scope='col'>Position</th>
								<th scope='col'>Contact Number</th>
								<th scope='col'>Email Address</th>
								<th scope='col'>Access</th>

								</tr>
						</thead>
						<tbody>

						<?php

						require('../db.php');

						$sql = "SELECT id_admin, employee_id, admin_name, admin_position, contact_number, admin_email FROM adminusers";
						$result = $con->query($sql);

						if ($result->num_rows > 0) {
						  while($row = $result->fetch_assoc()) {
							echo "
									<tr>
									  <th scope='row'>".$row["employee_id"]."</th>
									  <td>" . $row["admin_name"]. "</td>
									  <td>" . $row["admin_position"]. "</td>
									  <td>" . $row["contact_number"]. "</td>
									  <td>" . $row["admin_email"]. "</td>
                    <td><a href='edithr.php?id_admin=". $row['id_admin']."'>Edit</a> | <a href='deletehr.php?id_admin=". $row['id_admin'] ."'>Delete</a> </td>
									</tr>";
						  }
						} else {
						  echo "0 results";
						}

						?>
							</tbody>
				</table>
			</div>
			<div class="download-data-tab">
					<p>
						<a href="index.php" class="btn btn-info">Back</a>
						<a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</a>
						<!-- <a href="#" class="btn btn-danger">Delete Details</a> -->
						<a href="#" class="btn btn-primary">Generate Records</a>
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




		</div> <!----end cols 8 ---->
	  </div>
	 </div>
<?php
			require('../db.php');
			if (isset($_POST['submit'])) {
				// removes backslashes
			$employee_id = stripslashes($_REQUEST['employee_id']);
			$employee_id = mysqli_real_escape_string($con, $employee_id);

			$admin_name = stripslashes($_REQUEST['admin_name']);
			$admin_name = mysqli_real_escape_string($con, $admin_name);

			$admin_position  = mysqli_real_escape_string($con, $_POST['admin_position']);

			$admin_email = stripslashes($_REQUEST['admin_email']);
			$admin_email = mysqli_real_escape_string($con, $admin_email);

			$contact_number = stripslashes($_REQUEST['contact_number']);
			$contact_number = mysqli_real_escape_string($con, $contact_number);

			$query_add    = "INSERT into `adminusers` (employee_id,admin_name,admin_position,admin_email,contact_number)
									 VALUES ('$employee_id','$admin_name','$admin_position','$admin_email','$contact_number')";


			$result_query   = mysqli_query($con, $query_add);

			if ($result_query) {
			echo ("<script LANGUAGE='JavaScript'>
							window.alert('Added');
							  window.location.href='index.php';
							</script>");
				}
			else {
				echo "<div class='form'>
									<p>Not Added</p>
								  </div>";
				}
			}


			?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Products</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 		<form class="form" action="" method="post">
			<input type="text" class="input-product" name="employee_id" placeholder="Employee's Id" required />
			<input type="text" class="input-product" name="admin_name" placeholder="Name" required />
      <select class="input-product form-selected" name="admin_position">
          <option selected>Position</option>
          <option value="management_staff">Management Staff</option>
          <option value="production_staff">Production Staff</option>
          <option value="applicants">Applicants</option>
          <option value="Others">Others</option>
      </select>


			<input type="text" class="input-product" name="contact_number" placeholder="Contact Number" required />
			<input type="text" class="input-product" name="admin_email" placeholder="Your Email" required>
			<input type="submit" name="submit" value="Add" class="add-button">
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div><!-- ModalBox Add Product -->



<script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>
