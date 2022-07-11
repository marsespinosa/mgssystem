<?php
 //include("../auth_admin.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Setting</title>
	<link rel="fav icon" type="image/png" href="../images/favicon.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="style.css" rel="stylesheet" />

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

	<label for="ctmbtn" class="icon1">
		<span class="fa fa-bars"></span>
	</label>
	<input type="checkbox" id="ctmbtn" class="btnctm">

	<div id="dashboard-wrapper" class="container">
	  <div class="row">
		<div class="col-sm-4 ctmdiv2">
			<h2 class="admin-ht2" style="border-bottom: none;">
				<?php  
					//session_start();
					//echo $_SESSION['adminusername'];
				?>
			</h2>
		<ul class="nav-menu-side ctmnav2">
			<li><a href="../dashboard/index.php">Dashboard</a></li>
			<li><a href="../humanresource/index.php">Human Resources</a></li>
			<li><a href="../products/index.php">Products</a></li>
			<li><a href="../messages/index.php">Messages</a></li>
			<li><a href="../notifications/index.php">Notifications</a></li>
			<li><a href="index.php" class="active-menu">Settings</a></li>
		</ul>
		 <p class="logout-btm"><a href="../logout.php">Logout</a></p>
		</div>
		<div class="col-sm-8">
			<h2>Settings</h2>
			  <div class="row cols-dashboard-right">
				<div class="settings">
				<!-- <a class="btn btn-primary btn-dashboard active" href="#" role="button">Change Username</a> -->
				<a class="btn btn-primary btn-dashboard" href="password.php" role="button">Change Password</a>
				<a class="btn btn-primary btn-dashboard" href="#" role="button">Edit</a>
				</div>
			  </div>
			  <div class="row">
				<div class="col-sm-12"></div>
			  </div>

		</div>
	  </div>
	 </div>
<!-- Footer -->
		<footer class="page-footer font-small mdb-color lighten-3 pt-4">
		  <!-- Copyright -->
		  <div class="footer-copyright text-center py-3">Copyright 2021 © MGSON Whitening and Beauty Shop. All Rights Reserverd.
		  </div>
		  <!-- Copyright -->
		</footer>
		<!-- Footer -->
</body>
</html>
