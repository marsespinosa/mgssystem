<?php
 // include("../auth_depot.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<title>Password</title>
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
	 <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../style.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" />
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<a href="index.php"><img src="../images/logo.png" class="img-fluid logo" alt="Dashboard"></a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>

		    <form class="form-inline my-2 my-lg-0 nfdp" action="../search.php">
		      <button class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
		      <input class="form-control mr-sm-2 fa fa-search" type="text" placeholder="Search.." aria-label="Search" name="search">
		    </form>
	    </div>

	    <div>
	    	<ul class="col-sm-12 bell-icons bc1">
				<li><a href="#"></a></li>
				<li><a href="contact.php"></a></li>
				<li>
					<a type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
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
				<li><a href="#">My Orders</a></li>
				<li><a href="mycontract.php">My Contract</a></li>
			  </ul>
		<p class="helpbtm"><a href="contact.php">Help?</a></p>
	<p class="logout-btm"><a href="../logout.php">Logout</a></p>
		</div>
		<div class="col-sm-8 product-data">
			<div class="myprofile">
				<h2 style="text-align: left;">Change Password</h2>

				<div><?php if(isset($message)) { echo $message; } ?></div>
   <form method="post" action="" align="center">
	   Current Password:<br>
	   <input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
	   <br>
	   New Password:<br>
	   <input type="password" name="newPassword"><span id="newPassword" class="required"></span>
	   <br>
	   Confirm Password:<br>
	   <input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
	   <br><br>
	   <input type="submit">
   </form>

   <?php
		  include("../db.php");
		  session_start();
		  $currentuser = isset($_SESSION['username']) ? $_SESSION['username'] : '';
		  $con = mysqli_connect('localhost','root','','mgson') or die('Unable To connect');
		  if(count($_POST)>0)
		  {
		  	$old_pass = $_POST['currentPassword'];
		  	$new_pass = $_POST['newPassword'];
		  	$re_pass = $_POST['confirmPassword'];

			  if ($new_pass == $re_pass) {
			 		mysqli_query($con,"UPDATE depotusers SET password_dept='" . $re_pass . "' WHERE username='" . $currentuser ."'");
			  		echo ("<script LANGUAGE='JavaScript'>
									window.alert('Password Updated Successfully');
									window.location.href='deppassword.php';
									</script>");

			 		} else {
			 			echo "<script LANGUAGE='JavaScript'>
									window.alert('Not Updated');
									  window.location.href='deppassword.php';
									</script>";
			 		}
		  }
		?>

				<div>
				  <div class="row">
						<div class="col-sm-12"></div>
				  </div>
				</div>
				<footer>Copyright 2021 © MGSON Whitening and Beauty Shop. All Rights Reserved.</footer>
		  </div>
</div>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</div>
</body>
</html>
