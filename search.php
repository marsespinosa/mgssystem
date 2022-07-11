<?php
// include("auth_depot.php");
// include("auth_admin.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Products</title>
	<link rel="fav icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="products/style.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top ctmnav">
	    <a class="logolink" href="index.php"><img src="images/logo.png" class="img-fluid logo" alt="Dashboard"></a>

	    <div>
	      <form class="form-inline my-2 my-lg-0" action="../search.php">
	      	<div class="input-group">
	        	<button class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search ctmfa"></i></button>
	        	<input class="form-control mr-sm-2 fa fa-search ctmse" type="text" placeholder="Search.." aria-label="Search" name="search">
	        </div>
	      </form>
	    </div>
 	</nav>

  <label for="ctmbtn" class="icon1">
		<span class="fa fa-bars"></span>
	</label>
	<input type="checkbox" id="ctmbtn" class="btnctm">

	<div id="dashboard-wrapper" class="container">
	  <div class="row">
		<div class="col-sm-4">
			<h2 class="admin-ht2" style="border-bottom: none;"></h2>
		<ul class="nav-menu-side">
			<li><a href="dashboard/index.php">Dashboard</a></li>
			<li><a href="humanresource/index.php">Human Resources</a></li>
			<li><a href="products/index.php">Products</a></li>
			<li><a href="messages/index.php">Messages</a></li>
			<li><a href="notifications/index.php">Notifications</a></li>
			<li><a href="settings/index.php">Settings</a></li>
		</ul>
		 <p class="logout-btm"><a href="logout.php">Logout</a></p>
		</div>
		<div class="col-sm-8">
			<div class="gobackbtn"><button onclick="goBack()">Go Back</button>
			<script> function goBack() { window.history.back();}</script></div>
			<h2>Results</h2>
			  <div class="row cols-dashboard-right searchresults">

				<?php

				include('db.php');
				$keywords= $_POST['keywords'];
				$sql = "SELECT * FROM products where keywords='$keywords'";

				$result = $con->query($sql);

						if ($result->num_rows > 0) {
						  while($row = $result->fetch_assoc()) {
							echo "
							<h5><a href='products/details.php?id_product=".$row["id_product"]."'>" . $row["product_name"]. "</a></h5>
							<p>" . $row["product_description"]. "</br>
							Quantity: <strong>" . $row["product_quantity"]. "</strong></br>
							Barcode/Sku:<strong>" . $row["barcode_sku"]. "</strong></p>
							";
						  }
						} else {
						  echo "0 results";
						}


					?>

			</div>
		<div class="row">
			<div class="col-sm-12"></div>
		</div>

		</div>
	  </div>
	 </div>

</body>
</html>
