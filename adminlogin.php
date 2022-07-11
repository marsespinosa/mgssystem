<?php 
if(isset($_POST['adminusername']))
{
        session_start();
        $_SESSION['adminusername']=$_POST['adminusername'];
        header("location: /dashboard/index.php");
}
?>


<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Login</title>
		<link rel="fav icon" type="image/png" href="images/favicon.png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link href="style.css" rel="stylesheet" />
		<link href="css/responsive.css" rel="stylesheet" />
	</head>

	<body>
  <div class="login-bg">
  		<div class="container">
  			 <div class="row login-wrapper bottom-padding">
  				<div class="col-sm-12 col-md-6">
  					<a href="https://mgsonwhiteningandbeatyshop.com/">
            <img src="images/hello.png" class="img-fluid classhello" alt="Hello, Beauties! BeYOUty is Confidence!" /></a>
  				</div>
  				<div class="col-sm-12 col-md-6">
  					<div class="adminlog">
							<?php
								require('db.php');
								session_start();
							    if (isset($_POST['submit'])){
									$adminusername = stripslashes($_REQUEST['adminusername']);
									$adminusername = mysqli_real_escape_string($con,$adminusername);
									$admin_password = stripslashes($_REQUEST['admin_password']);
									$admin_password = mysqli_real_escape_string($con,$admin_password);
									$query = "SELECT * FROM `adminusers` WHERE adminusername='$adminusername' and admin_password='$admin_password'";
									$result = mysqli_query($con,$query) or die(mysqli_error());
									$rows = mysqli_num_rows($result);
							        
									if($rows==1){
										$_SESSION['adminusername'] = $adminusername;
										header("Location: dashboard/index.php");
										ob_end_flush();
										echo '<script type="text/javascript">
										location.replace("dashboard/index.php"); </script>';
							        }
									else{
									echo "<div class='form'>
							        <h3>Username/password is incorrect.</h3><br/>Click here to <a href='adminlogin.php'>Login</a></div>";
									}
										
							    }
								else{
							?>
						<div class="form">
							<h1>Log In</h1>
							<form action="" method="post" name="login">
								<input type="text" name="adminusername" class="login-input" placeholder="Admin Username" required />
								<input type="password" name="admin_password"  class="login-input" placeholder="Password" required />
								<input name="submit"  class="btn btn-primary" type="submit" value="Login" />
							</form>
							<p>Not registered yet? <a href='admin-signup.php'>Register Here</a></p>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="link-copyright">Copyright 2021 © MGSON Whitening and Beauty Shop. All Rights Reserved.</div>
			<div class="home">
				<a href="https://mgsonwhiteningandbeatyshop.com/">Home</a>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

<script>
	$( document ).ready(function() {
        var height = $(this).height();
        $('.login-bg').css("height", height + "px");
    });
</script>