
<?php //include("../auth_admin.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Messages</title>
	<link rel="fav icon" type="image/png" href="../images/favicon.png">
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top ctmnav">
	    <a class="logolink" href="index.php"><img src="../images/logo.png" class="img-fluid logo" alt="Dashboard"></a>

	    <div>
	      <form class="form-inline my-2 my-lg-0" action="../search.php">
	      	<div class="input-group">
	        	<button class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search ctmfa"></i></button>
	        	<input class="form-control mr-sm-2 fa fa-search ctmse" type="text" placeholder="Search.." aria-label="Search" name="search">
	        </div>
	      </form>
	    </div>
 	</nav>

	<!-- <a href="../dashboard/index.php"><img src="../images/logo.png" class="img-fluid" alt="Dashboard"></a> -->

	<label for="ctmbtn" class="icon1">
		<span class="fa fa-bars"></span>
	</label>
	<input type="checkbox" id="ctmbtn" class="btnctm">

	<div id="dashboard-wrapper" class="container">
	  <div class="row">
		<div class="col-sm-4 ctmdiv2">
			<h2 class="admin-ht2" style="border-bottom: none;"><?php //echo $_SESSION['adminusername']; ?></h2>
		<ul class="nav-menu-side ctmnav2">
			<li><a href="../dashboard/index.php">Dashboard</a></li>
			<li><a href="/humanresource/index.php">Human Resources</a></li>
			<li><a href="../products/index.php">Products</a></li>
			<li><a href="index.php" class="active-menu">Messages</a></li>
			<li><a href="../notifications/index.php">Notifications</a></li>
			<li><a href="../settings/index.php">Settings</a></li>
		</ul>
		<p class="logout-btm"><a href="../logout.php">Logout</a></p>
		</div>
		<div class="col-sm-8">
			<h2>Messages</h2>
			<div class="row data-tables-prod">
			<div class="col ctmta">
				<table class='table table-striped table-hover' >
					<thead>
							<tr>
								<th scope='col'>ID</th>
								<th scope='col'>Name</th>
								<th scope='col'>Email</th>
								<th scope='col'>Phone</th>
                <th scope='col'>Department</th>
								<th scope='col'>Date</th>
								<th scope='col'>View</th>
								<th scope='col'>Delete</th>
								</tr>
						</thead>
						<tbody>


						<?php
							require('../db.php');

							$sel_query = "SELECT contactus.id_conts, contactus.name, contactus.email, contactus.department, contactus.phone, contactus.created_date,  depotusers.depot_name
							FROM contactus
							INNER JOIN depotusers ON contactus.id_conts = depotusers.id_users";

							$resultasc = mysqli_query($con,$sel_query);
							if($row = mysqli_fetch_assoc($resultasc)) { ?>
							<tr>
							  <td><?php echo $row["id_conts"]; ?></td>
							  <td><?php echo $row["depot_name"]; ?></td>
							  <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php echo $row["department"]; ?></td>
							  <td><?php echo $row["created_date"]; ?></td>
							  <td><a href="view.php?id_conts=<?php echo $row["id_conts"]; ?>">View</a></td>
							  <td><a href="delete.php?id_conts=<?php echo $row["id_conts"]; ?>">Delete</a></td></tr>
						<?php }?>

						</tbody>
				</table>
			</div>

			<!-- Footer -->
			<footer class="page-footer font-small mdb-color lighten-3 pt-4">
			  <!-- Copyright -->
			  <div class="footer-copyright text-center py-3">Copyright 2021 © MGSON Whitening and Beauty Shop. All Rights Reserverd.
			  </div>
			  <!-- Copyright -->
			</footer>
			<!-- Footer -->




		</div> <!----end cols 8 ---->
	  </div>
	 </div>
</div>

</body>
</html>
