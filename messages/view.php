<?php //include("../auth_admin.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
	<title>View Messages</title>
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

	<!-- <a href="../dashboard/index.php"><img src="../images/logo.png" class="img-fluid" alt="Dashboard"></a> -->

	<div id="dashboard-wrapper" class="container">
	  <div class="row">
		<div class="col-sm-4">
			<h2 class="admin-ht2" style="border-bottom: none;"><?php //echo $_SESSION['adminusername']; ?></h2>
		<ul class="nav-menu-side">
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
			<h2>View Messages</h2>
		<div class="row data-tables-prod">
			<div class="col">
			<?php
			require('../db.php');
			$id_conts = $_REQUEST['id_conts'];
			$querdprod = "SELECT * from contactus where id_conts='".$id_conts."' ";
			$resuldel = mysqli_query($con, $querdprod) or die ( mysqli_error());
			if($row = mysqli_fetch_assoc($resuldel)){
			?>
			<input name="id_conts" type="hidden" value="<?php echo $row["id_conts"]; ?>" />
			<p><strong>Name:</strong> <?php echo $row['name'];?></p>
			<p><strong>Email:</strong> <?php echo $row['email'];?> | <strong>Phone:</strong> <?php echo $row['phone'];?></p>
      <p><strong>Department:</strong> <?php echo $row['department'];?></p>
        <p><strong>Subject:</strong> <?php echo $row['subject'];?></p>
      <p><strong>Message:</strong> <?php echo $row['comments'];?></p>
			<p><strong>created_date:</strong> <?php echo $row['created_date'];?></p>
			<p><a href="delete.php?id_conts=<?php echo $row["id_conts"]; ?>">Delete</a></p>

			<?php

			} ?>



		</div>

		<!-- Footer -->
			<footer class="page-footer font-small mdb-color lighten-3 pt-4">
			  <!-- Copyright -->
			  <div class="footer-copyright text-center py-3">Copyright 2021 ?? MGSON Whitening and Beauty Shop. All Rights Reserverd.
			  </div>
			  <!-- Copyright -->
			</footer>
			<!-- Footer -->
		</div>




		</div>
	  </div>
</div><!-- Delete Products -->


</body>
</html>
