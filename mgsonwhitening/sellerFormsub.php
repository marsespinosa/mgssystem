<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>MGSON Whitening and Beauty Shop</title>
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
	<link rel="fav icon" type="image/png" href="images/favicon.png">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">

</head>
<body class="distriforms">
<div class="onlyonmobile">
	<div class="logosite"><a href="https://mgsonwhiteningandbeatyshop.com/"><img class="logo" src="images/logo.png" alt="Company logo" /></a></div>
	<nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
		<div class="container-fluid">
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarsExample01">
			<ul class="navbar-nav me-auto mb-2">
				<li><a href="index.html" class="nav-link">Home</a></li>
				<li><a href="ourproducts.html" class="nav-link">Our Products</a></li>
				<li><a href="aboutus.html" class="nav-link">About Us</a></li>
				<li><a href="contact.html" class="nav-link">Contact Us</a></li>
				<li><a href="https://mgsonsys.mgsonwhiteningandbeatyshop.com/" class="nav-link">Log In</a></li>
			</ul>
		  </div>
		</div>
	  </nav>
</div>

<div class="img-header">
		<div class="container">
			<img src="images/banner.png" class="imgH" alt="company banner" style="width:100%;">
		</div>
</div>
<div id="container-team">
			<div class="container">
				<h1 class="thicker">Be a Seller!</h1>
				<hr class="featurette-divider">
				
			<form class="row g-3 needs-validation" action="" method="post" enctype='multipart/form-data' novalidate>
		<div class="nameinfo">
			<p for="validationCustom01" class="form-label">Name*</p>
			<div class="col-md-4 padding0">
		    <input type="text" name="applicantname" class="form-control" placeholder="First Name" required>
		    <div class="valid-feedback">
		      Looks good!
		    </div>
		  </div>
			<div class="col-md-4">
	    <input type="text" name="middlename" class="form-control" placeholder="Middle Name" required>
	    <div class="valid-feedback">
	      Looks good!
	    </div>
	  </div> 
	  <div class="col-md-4 padding0">
	    <input type="text" name="lastname" class="form-control" placeholder="Last Name"  required>
	    <div class="valid-feedback">
	      Looks good!
	    </div>
	  </div> 
	  
	  <div class="col-md-4 padding0">
	    <input type="text" name="email" class="form-control" placeholder="Email"  required>
	    <div class="valid-feedback">
	      Looks good!
	    </div>
	  </div>
	  
	  </div>
		
	  <div class="col-12 buttonsubmit">
	    <button class="btn btn-primary" type="submit"  name="submit" value="submit">Submit</button>
	  </div>
</div>


	</form>



<?php
	require('db.php');
    if (isset($_POST['submit'])) {
	$applicantname = stripslashes($_REQUEST['applicantname']);
	$applicantname = mysqli_real_escape_string($con, $applicantname);

	$middlename = stripslashes($_REQUEST['middlename']);
	$middlename = mysqli_real_escape_string($con, $middlename);
		
	$lastname = stripslashes($_REQUEST['lastname']);
	$lastname = mysqli_real_escape_string($con, $lastname);
	
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con, $email);
		
	$datecreated = date("Y-m-d H:i:s");	
	
		    
    $insert_img = "insert into `sellerform` SET applicantname ='".$applicantname."',middlename ='".$middlename."',lastname ='".$lastname."',
	email ='".$email."',datecreated ='".$datecreated."'";
    
	$result = $con->query($insert_img);
	
	echo "Send Application";
    
	}
	
	$errormsg = "";
	
	if (empty($_POST["applicantname"])) {
		$errormsg .= "Name required. ";
	} else {
		$applicantname = filter_var($_POST['applicantname'], FILTER_SANITIZE_STRING);
	}
	if (empty($_POST["middlename"])) {
		$errormsg .= "Middle required. ";
	} else {
		$middlename = filter_var($_POST['middlename'], FILTER_SANITIZE_STRING);
	}
	if (empty($_POST["lastname"])) {
		$errormsg .= "Last Name required. ";
	} else {
		$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
	}	
	if (empty($_POST["email"])) {
		$errormsg .= "email required. ";
	} else {
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	}
	
	$success = '';
	if (!$errormsg){
		$to = "admin@mgsonwhiteningandbeatyshop.com";
		$subject = "Seller Applicant";	
		
		$body_message = "";
		$body_message .= "First Name: " . $applicantname ."\n";
		$body_message .= "Middle Name: " . $middlename . "\n";
		$body_message .= "Last Name: " . $lastname . "\n";
		$body_message .= "email: " . $email ."\n";
		
		$headers = 'From: '. $applicantname .' <'. $email .'>' . "\r\n" .
					'Reply-To: ' . $email . "\r\n";
		
		$success = mail($to, $subject, $body_message, $headers);
		
	} 
		
   

?>
				
				
		</div>

</div>
<footer id="footer">
    <div class="container">
		<p class="text-danger">© MGSON Whitening and Beauty Shop. All Rights Reserved. 2021</p>
	</div>
</footer>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>


<script>
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
})()
</script>


</body>
</html>
