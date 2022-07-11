<?php
 //include("../auth_depot.php");
// include("../auth_admin.php");
include '../db.php';
?>

<?php 
	$currentuser = isset($_SESSION['username']) ? $_SESSION['username'] : '';
	require('../db.php');
	$querduser = "SELECT * from depotusers where id_users='" . $currentuser ."'";
	$result = $con->query($querduser);
	$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products</title>
	<link rel="fav icon" type="image/png" href="../images/favicon.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../style.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<div class="ctml">
			<a href="index.php"><img src="../images/logo.png" class="img-fluid logo" alt="Dashboard"></a>

		    <form class="form-inline my-2 my-lg-0 nfdp" action="../search.php">
		    	<div class="input-group">
	    			<button class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
			      	<input class="form-control mr-sm-2 fa fa-search" type="text" placeholder="Search.." aria-label="Search" name="search">
		    	</div>
		    </form>
	    </div>

	    <label for="btn1" class="icon">
    		<span class="fa fa-bars"></span>
    	</label>
    	<input type="checkbox" id="btn1" class="btnctm">

	    <div>
	    	<ul class="col-sm-12 bell-icons bc1 ctmul1">
				<li><a class="fa fa-bell-o" href="#"></a></li>
				<li><a class="fa fa-comment-o" href="contact.php"></a></li>
				<li>
					<label for="btn2" class="show"></label>
					<a class="fa fa-user-o" type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
					<input type="checkbox" id="btn2" class="btnctm">
				 	<div class="dropdown-menu">
					    <a class="dropdown-item ctm2" href="./myprofile.php"><b>Profile</b></a>
					    <a class="dropdown-item ctm2" href="./depsettings.php"><b>Settings</b></a>
					    <div class="dropdown-divider"></div>
					    <a class="dropdown-item logout" href="../logout.php"><b>Logout</b></a>
				  	</div>
				</li>
			</ul>

			<ul class="col-sm-12 bell-icons bc1 ctmul2">
				<li><a class="fa fa-bell-o" href="#">Notifications</a></li>
				<li><a class="fa fa-comment-o" href="contact.php">Contact Us</a></li>
				<li>
					<label for="btn2" class="show"></label>
					<a class="fa fa-user-o" type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Profile</a>
					<input type="checkbox" id="btn2" class="btnctm">
				 	<div class="dropdown-menu">
					    <a class="dropdown-item ctm2" href="./myprofile.php"><b>Profile</b></a>
					    <a class="dropdown-item ctm2" href="./depsettings.php"><b>Settings</b></a>
					    <div class="dropdown-divider"></div>
					    <a class="dropdown-item logout" href="../logout.php"><b>Logout</b></a>
				  	</div>
				</li>
			</ul>
	    </div>
 	</nav>

	<div id="dashboard-wrapper" class="container">
	  <div class="row">
		<div class="col-sm-4">
			<a href="index.php"><img src="images/profileavatar.png" class="mb-4 clientavatar" alt="client"/></a>
	      	<ul class="nav-menu-side withicons">
	      		<li><a href="myproducts.php">My Products</a></li>
	      		<li><a href="myorder.php">My Orders</a></li>
	      		<!-- <li><a href="myorder.php?id_users=<?php echo $row["id_users"]; ?>">My Orders</a></li> -->
	      		<li><a href="mycontract.php">My Contract</a></li>
      		</ul>
			<!-- <p class="helpbtm help"><a href="contact.php">Help?</a></p> -->
			<p class="logout-btm"><a href="contact.php" target="_blank">Help?</a></p>
		</div>

		<div class="col-sm-8 product-data">
			<div class="data-my-product">
				<h2>Dashboard</h2>
				<div class="col-sm-12 bottom-data-profile">
					<div class="myteam">
						<img src="../images/percentageicon.png" />
						<h3>My Earnings</h3>
					</div>

					<div class="welcomemessage">
						<img src="../images/bargraph.png"  class="mb-4" width="322"  />
					</div>
				</div>

				<div class="col-sm-12 bottom-data-profile">
					<div class="myteam">
						<img src="../images/myteam.png"  class="mb-4" width="82"  />
						<h3>My Team</h3>
					</div>

					<div class="welcomemessage">
						<h3>Welcome!</h3>
						<p>Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
					</div>
				</div>
			</div>

			<footer>Copyright 2021 © MGSON Whitening and Beauty Shop. All Rights Reserved.</footer>
		</div>
	  </div>
	</div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>