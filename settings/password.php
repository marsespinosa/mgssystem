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

	<div id="dashboard-wrapper" class="container">
	  <div class="row">
		<div class="col-sm-4">
			<h2 class="admin-ht2" style="border-bottom: none;"></h2>
		<ul class="nav-menu-side">
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
   <div><?php if(isset($message)) { echo $message; } ?></div>
   <form method="post" action="" align="center">
	   Current Password:<br>
	   <input type="password" name="currentPassword"><span id="currentPassword" class="required" required></span>
	   <br>
	   New Password:<br>
	   <input type="password" name="newPassword"><span id="newPassword" class="required" required></span>
	   <br>
	   Confirm Password:<br>
	   <input type="password" name="confirmPassword"><span id="confirmPassword" class="required" required></span>
	   <br><br>
	   <input type="submit">
   </form>



<?php
  include("../db.php");
  $currentuser = isset($_SESSION['adminusername']) ? $_SESSION['adminusername'] : '';
  $con = mysqli_connect('localhost','root','','mgson') or die('Unable To connect');
  if(count($_POST)>0)
  {
  	$old_pass = $_POST['currentPassword'];
  	$new_pass = $_POST['newPassword'];
  	$re_pass = $_POST['confirmPassword'];

	  if ($new_pass == $re_pass) {
	 			mysqli_query($con,"UPDATE adminusers SET admin_password='" . $re_pass . "' WHERE adminusername='" . $currentuser ."'");
	  		echo ("<script LANGUAGE='JavaScript'>
									window.alert('Password Updated Successfully');
									window.location.href='password.php';
									</script>");

	 		} else {
	 			echo "<script LANGUAGE='JavaScript'>
									window.alert('Not Updated');
									  window.location.href='password.php';
									</script>";
	 		}
  }


?>

				</div>
			  </div>
			  <div class="row">
				<div class="col-sm-12">
					<a class="btn btn-primary btn-dashboard" href="index.php" role="button">Back</a>
				</div>
			  </div>

		</div>
	  </div>
	 </div>

</body>
</html>
