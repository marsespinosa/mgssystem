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
<div>
		<div id="container-team">
			<div class="container">
				<h1 class="thicker purplefont">Be a Distributor!</h1>
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
	  </div></div>
		<div class="col-12">
			<p for="validationCustom01" class="form-label">Address*</p>
			<input type="text" name="brgy" class="form-control" placeholder="Street/Barangay/Village/Subdivision" required> <br />
			<input type="text" name="streetone" class="form-control">
		</div>
		<div class="addressinputs">
	  <div class="col-md-6">
	    <input type="text" name="city" class="form-control" placeholder="City" required>
	    <div class="invalid-feedback">
	      Please provide a valid city.
	    </div>
	  </div>
	  <div class="col-md-6">
	    <input type="text" name="zipcode" class="form-control" placeholder="Zipcode" required>
	    <div class="invalid-feedback">
	      Please provide a valid zip.
	    </div>
	  </div>
		<div class="col-md-6">
		 <input type="text" name="statprovince" class="form-control" placeholder="State/Province/Region">
	 </div>
	 <div class="col-md-6">
		<input type="text" class="form-control" name="phonenumber" placeholder="Phone Number" required>
		<div class="invalid-feedback">
			Please provide a valid phone number.
		</div>
	</div>
	<div class="col-md-6">
	 <input type="text" class="form-control" name="country" placeholder="Country" required>
	 <div class="invalid-feedback">
		 Please provide a Country.
	 </div>
	  </div>
	</div>
	<div class="addressinputs">
	<div class="col-md-6">
	 <input type="text" class="form-control" name="email" placeholder="Email*" required>
	 <div class="invalid-feedback">
		 Please provide a Email.
	 </div>
	 </div>
	 <div class="col-md-6">
 	 <input type="text" class="form-control" name="confirmemail" placeholder="Confirm Email*" required>
 	 <div class="invalid-feedback">
 		 Email did not match
 	 </div>
 	 </div>

	 <div class="col-md-6">
		<p for="validationCustom01" class="form-label">Select Target Area:*</p>
		<input type="text" class="form-control" name="targetarea" placeholder="" required>
		<div class="invalid-feedback">
			Please provide a target area
		</div>
		</div>
		<div class="col-md-6">
 		<p for="validationCustom01" class="form-label">Select Package:*</p>
 		<!-- <input type="text" class="form-control" name="selectpackage" placeholder="" required> -->
 		<select name="selectpackage" class="form-control" required>
			<option selected="selected"></option>
			<option value="Afganistan">Package 1</option>
			<option value="Albania">Package 2</option>
			<option value="Algeria">Package 3</option>
		</select>
 		<div class="invalid-feedback">
 			Please provide a target area
 		</div>
 		</div>

		<div class="col-12">
			<label for="formFileMultiple" class="form-label">Proof of Indentification*</label>
			<input class="form-control" name="proofindentification[]" type="file" id="formFileMultiple" multiple>
		</div>

		<div class="col-12">
	    <div class="form-check">
	      <input class="form-check-input" name="termscondition" type="checkbox" value="" id="invalidCheck" required>
	      <label class="form-check-label" for="invalidCheck">
	        Terms and Condition
	      </label>
	      <div class="invalid-feedback">
	        You must agree before submitting.
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
	require('sendingemail/distriFormemail.php');
    if (isset($_POST['submit'])) {
		$applicantname = stripslashes($_REQUEST['applicantname']);
		$applicantname = mysqli_real_escape_string($con, $applicantname);

		$middlename = stripslashes($_REQUEST['middlename']);
		$middlename = mysqli_real_escape_string($con, $middlename);

		$lastname = stripslashes($_REQUEST['lastname']);
		$lastname = mysqli_real_escape_string($con, $lastname);

		$brgy = stripslashes($_REQUEST['brgy']);
		$brgy = mysqli_real_escape_string($con, $brgy);

		$streetone = stripslashes($_REQUEST['streetone']);
		$streetone = mysqli_real_escape_string($con, $streetone);

		$country = stripslashes($_REQUEST['country']);
		$country = mysqli_real_escape_string($con, $country);

		$zipcode = stripslashes($_REQUEST['zipcode']);
		$zipcode = mysqli_real_escape_string($con, $zipcode);

		$phonenumber = stripslashes($_REQUEST['phonenumber']);
		$phonenumber = mysqli_real_escape_string($con, $phonenumber);

		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con, $email);

		$confirmemail = stripslashes($_REQUEST['confirmemail']);
		$confirmemail = mysqli_real_escape_string($con, $confirmemail);

		$targetarea = stripslashes($_REQUEST['targetarea']);
		$targetarea = mysqli_real_escape_string($con, $targetarea);

		$selectpackage = stripslashes($_REQUEST['selectpackage']);
		$selectpackage = mysqli_real_escape_string($con, $selectpackage);

		$datecreated = date("Y-m-d H:i:s");

	$output_dir = "uploads/";
  $fileCount = count($_FILES["proofindentification"]['name']);
	for($i=0; $i < $fileCount; $i++)

		{
            $RandomNum   = time();

            $ImageName      = str_replace(' ','-',strtolower($_FILES['proofindentification']['name'][$i]));
            $ImageType      = $_FILES['proofindentification']['type'][$i];

            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt       = str_replace('.','',$ImageExt);
            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;

            $ret[$NewImageName]= $output_dir.$NewImageName;



    move_uploaded_file($_FILES["proofindentification"]["tmp_name"][$i],$output_dir."/".$NewImageName );


    $insert_img = "insert into `distributor` SET applicantname ='".$applicantname."',middlename ='".$middlename."',lastname ='".$lastname."',
	brgy ='".$brgy."',streetone ='".$streetone."',country ='".$country."',zipcode ='".$zipcode."',phonenumber ='".$phonenumber."',
	email ='".$email."',confirmemail ='".$confirmemail."',targetarea ='".$targetarea."',
	selectpackage ='".$selectpackage."',proofindentification ='".$NewImageName."',datecreated ='".$datecreated."'";

	$result = $con->query($insert_img);

	}

        echo "Send Application";

		}




?>




			</div>
		</div>

</div>

<footer id="footer">
        <div class="container">
				<p class="text-danger">© MGSON Whitening and Beauty Shop. All Rights Reserved. 2021</p>
		</div>
</footer>

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
