<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8"/>
	  <title>Sign Up - Depot</title>
	<link rel="fav icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap" rel="stylesheet" />

    <link href="style.css" rel="stylesheet" />

    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

<?php

	require 'vendor/phpmailer/phpmailer/src/Exception.php';
  	require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  	require 'vendor/phpmailer/phpmailer/src/SMTP.php';
  	use PHPMailer\PHPMailer\PHPMailer;
  	use PHPMailer\PHPMailer\Exception;
  	use PHPMailer\PHPMailer\SMTP;
	require('db.php');

    if (isset($_POST['submit'])) {
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($con, $username);
		$depot_name = stripslashes($_REQUEST['depot_name']);
		$depot_name = mysqli_real_escape_string($con, $depot_name);
		$depot_email    = stripslashes($_REQUEST['depot_email']);
		$depot_email    = mysqli_real_escape_string($con, $depot_email);
		$depot_contractnumber  = stripslashes($_REQUEST['depot_contractnumber']);
		$depot_contractnumber  = mysqli_real_escape_string($con, $depot_contractnumber);
		$message = " Hi! i'm $depot_name and this is my account informations registered <br>
					Usermame: $username <br> 
					Name: $depot_name <br> 
					Email: $depot_email <br> 
					Contract Number: $depot_contractnumber ";

		function generatepass($length = 8){

			 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

			 $password_dept = substr( str_shuffle( $chars ), 0, $length );

			 return $password_dept;

		}

		$password_dept = generatepass();
		$encpt_password= $password_dept;
		$adminpss = mysqli_real_escape_string($con, $encpt_password);
		$create_datetimedep = date("Y-m-d H:i:s");	

		$query_add = "INSERT into `depotusers` (id_users,username,depot_name,depot_email,depot_contractnumber,password_dept,create_datetimedep)
				VALUES ('id_users','$username','$depot_name','$depot_email','$depot_contractnumber','$adminpss','$create_datetimedep')";

		$result_query   = mysqli_query($con, $query_add);

			if ($result_query) {

			echo ("<script LANGUAGE='JavaScript'>

							window.alert('Registered! Please wait for an email activation');

							  window.location.href='index.php';

							</script>");

				}

			else {

				echo "<script LANGUAGE='JavaScript'>

							window.alert('Not Added');

							  window.location.href='registration.php';

							</script>";

				}



	  	$mail = new PHPMailer;
  		$mail->Body = new PHPMailer;
	  	$mail->IsSMTP();
		
			$mail->SMTPDebug  = 0;  
				$mail->SMTPAuth   = TRUE;
				$mail->SMTPSecure = "tls";
				$mail->Port       = 587;
				$mail->Host       = "smtp.gmail.com";
				$mail->Username   = "rbaclas1989@gmail.com";
				$mail->Password   = "march31@89!";


	  	$mail->IsHTML(true);

 	 	$mail->AddAddress("admin@mgsonwhiteningandbeatyshop.com", "Admin - Main");
	  	$mail->SetFrom("admin@mgsonwhiteningandbeatyshop.com", "Admin - Main");
	  	$mail->AddReplyTo("admin@mgsonwhiteningandbeatyshop.com", "Admin - Main");
	  	$mail->AddCC("admin@mgsonwhiteningandbeatyshop.com", "Admin - Main");
	  	$mail->Subject = "Depot User Sign Ups";
	  	$content = $message;



	  	$mail->MsgHTML($content); 

	  	if(!$mail->Send()) {

	    	echo "Error while sending Email.";

	  	} else {

	    	echo "Email sent successfully";

	  	}

	}

?>



<div class="login-bg">

		<div class="container">
			 <div class="row bottom-padding">
				<div class="col-sm-5 col-md-6">
					<a href="https://mgsonwhiteningandbeatyshop.com/">
				<img src="images/welcome.png" class="img-fluid welcome" alt="Hello, Beauties! BeYOUty is Confidence!" /></a>

				</div>

				<div class="col-sm-5 col-md-6">

					<div class="adminlog">

						<h1 class="login-title">Create Account</h1>

						<form class="form adminsignup" action="" method="post">
							<input type="text" class="hidden" name="id_users" />
							<input type="text" class="login-input" name="username" placeholder="Username" required />
							<input type="text" class="login-input" name="depot_name" placeholder="Name" required>
							<input type="text" class="login-input" name="depot_email" placeholder="Email Adress" required>
							<input type="text" class="login-input" name="depot_contractnumber" placeholder="Contract Number" required>
							<p>By creating an account you agree to our <a href="termsandconditions.html"> Terms & Privacy.</a></p>
							<input type="submit" name="submit" value="Submit" class="login-button">
							<p class="link">Already have an account? <a href="index.php">Login here</a></p>

						</form>

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

