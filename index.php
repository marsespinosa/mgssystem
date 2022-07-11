<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="fav icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>

	<div class="login-bg">
		<div class="container">
			 <div class="row login-wrapper bottom-padding">
				<div class="col-sm-12 col-md-6 col-md-4 col-md-40">
					<a href="https://mgsonwhiteningandbeatyshop.com/"><img src="images/hello.png" class="img-fluid classhello" alt="Hello, Beauties! BeYOUty is Confidence!" /></a>
				</div>
				<div class="col sm-12 col-md-6 col-md-4">
					<div class="adminlog">
						<img src="images/adminlogin.png" class="img-fluid" alt="Admin Login" />
						<a href="adminlogin.php" class="btn btn-primary" type="submit">Admin Login</a>
					</div>
				</div>
				<div class="col sm-12 col-md-6 col-md-4">
					<div class="adminlog">
						<img src="images/depot.png" class="img-fluid" alt="Depot Login" />
						<a href="depotlogin.php" class="btn btn-primary" type="submit">Depot Login</a>
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