<?php
 //include("../auth_depot.php");
?>

<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact</title>
		<link rel="fav icon" type="image/png" href="../images/favicon.png">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="responsive.css" />
		<link href="../style.css" rel="stylesheet" />
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
						<li><a href="myproducts.php" class="active-menu">My Products</a></li>
						<li><a href="#">My Orders</a></li>
						<li><a href="#">My Contract</a></li>
					  </ul>
				<!-- <p class="helpbtm help"><a href="contact.php">Help?</a></p> -->
			<p class="logout-btm"><a href="contact.php">Help?</a></p>
				</div>
				<div class="col-sm-8 product-data">
					<h2>Contact Us</h2>
					<h2>
						<?php 
							/*$msg = "";
							if (isset($_GET['error']))
							{
								$msg = "Fill in the data needed";
								echo '<div>'.$msg.'</div>';
							}

							if (isset($_GET['success']))
							{
								$msg = "Message Sent";
								echo '<div>'.$msg.'</div>';
							}*/
						?>
						
						<?php
							/*$currentuser = isset($_SESSION['username']) ? $_SESSION['username'] : '';
							$con = mysqli_connect('localhost','root','','mgson') or die('Unable To connect');

							$depcont = "SELECT * FROM depotusers WHERE username='" . $currentuser ."'";
							$depotid = mysqli_query($con, $depcont);

							$row = mysqli_fetch_assoc($depotid);*/
						?>
					</h2>

					<div class="row data-tables-prod">
						<div class="col">
						<form name="contact-form" action="" method="post" id="contact-form">
							<div class="form-group">
								<label for="Name">Name</label>
								<input type="text" class="form-control" name="name" placeholder="Name" required>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" name="email" placeholder="Email" required>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Department</label>
								<select class="form-select" name="department">
									<option selected>Department</option>
									<option value="management_staff">Management Staff</option>
									<option value="production_staff">Production Staff</option>
									<option value="technical_team">Technical Team</option>
									<option value="Others">Others</option>
								</select>
							</div>

							<div class="form-group">
								<label for="Phone">Phone</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone" required>
							</div>

							<div class="form-group">
								<label for="comments">Subject</label>
								<input type="text" class="form-control" name="subject" placeholder="Name" required>
							</div>

							<div class="form-group">
								<label for="comments">Message</label>
								<textarea name="comments" class="form-control" rows="3" cols="28" rows="5" placeholder="Message"></textarea>
							</div>

							<div class="form-group">
								<!-- <input name="id_users"  class="form-control" type="hidden" value="<?php echo $row["id_users"]; ?>"> -->
								<input name="id_users"  class="form-control" type="hidden" value="">
							</div>

							<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>

						</form>

						<div class="response_msg"></div>
					</div>
				</div>
				</div>
			  </div>
		</div><!-- Delete Products -->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#contact-form").on("submit",function(e){
		e.preventDefault();
			if($("#contact-form [name='name']").val() === '')
			{
				$("#contact-form [name='name']").css("border","1px solid red");
			}
			else if ($("#contact-form [name='email']").val() === '')
			{
				$("#contact-form [name='email']").css("border","1px solid red");
			}
			else
			{
				$("#loading-img").css("display","block");
				var sendData = $( this ).serialize();
				$.ajax({
					type: "POST",
					url: "get_response.php",
					data: sendData,
					success: function(data){
						$("#loading-img").css("display","none");
						$(".response_msg").text(data);
						$(".response_msg").slideDown().fadeOut(3000);
						$("#contact-form").find("input[type=text], input[type=email], textarea").val("");
					}

				});
			}
		});

		$("#contact-form input").blur(function(){
			var checkValue = $(this).val();
			if(checkValue != '')
			{
				$(this).css("border","1px solid #eeeeee");
			}
		});
	});
</script>
