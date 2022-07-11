<?php 
if(isset($_POST['username']))
{
        session_start();
        $_SESSION['username']=$_POST['username'];
        header("location: /dashboard/index.php");
}
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Depot Login</title>
		<link rel="fav icon" type="image/png" href="images/favicon.png">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap" rel="stylesheet" />
		<link href="style.css" rel="stylesheet" />
		<link href="css/responsive.css" rel="stylesheet" />
	</head>

	<body>
	<?php
		require('db.php');

		session_start();
	    if (isset($_POST['submit'])){
			$username = stripslashes($_REQUEST['username']);
			$username = mysqli_real_escape_string($con,$username);

			$password_dept = stripslashes($_REQUEST['password_dept']);
			$password_dept = mysqli_real_escape_string($con,$password_dept);

	        $query = "SELECT * FROM `depotusers` WHERE username='$username' and password_dept='$password_dept'";

			$result = mysqli_query($con,$query) or die(mysqli_error());
			$rows = mysqli_num_rows($result);
	        if($rows==1){
				$_SESSION['username'] = $username;
				header("Location: dashboard/index.php");
				ob_end_flush();
				echo '<script type="text/javascript">
				location.replace("dashboardDep/index.php"); </script>';
			}else{
					echo "<div class='form'><h3>Username/password is incorrect.</h3>
	        <br/>Click here to <a href='../depotlogin.php'>Login</a></div>";
					}
	    }else{
	?>


	<div class="login-bg">
			<div class="container">
				 <div class="row login-wrapper bottom-padding">
					<div class="col-sm-12 col-md-6">
						<a href="https://mgsonwhiteningandbeatyshop.com/">
	          				<img src="images/hello.png" class="img-fluid classhello" alt="Hello, Beauties! BeYOUty is Confidence!" />
	          			</a>
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="adminlog">
							<div class="form">
								<h1>Log In</h1>
								<form action="" method="post" name="login">
									<input type="text" name="username" class="login-input" placeholder="Username" required />
									<input type="password" name="password_dept"  class="login-input" placeholder="Password" required />
									<input name="submit" class="btn btn-primary" type="submit" value="Login" />
								</form>
								<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
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

	   	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	    <script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
</html>

<script>
	$( document ).ready(function() {
        var height = $(this).height();
        $('.login-bg').css("height", height + "px");
    });
</script>
