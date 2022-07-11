<?php

 //include("../auth_admin.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<title>Products</title>
	<link rel="fav icon" type="image/png" href="../images/favicon.png">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	 <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../style.css" rel="stylesheet" />
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
	    <a class="logolink" href="index.php"><img src="../images/logo.png" class="img-fluid logo" alt="Dashboard"></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <form class="form-inline my-2 my-lg-0" action="../search.php">
	        <button class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
	        <input class="form-control mr-sm-2 fa fa-search" type="text" placeholder="Search.." aria-label="Search" name="search">
	      </form>
	    </div>
 	</nav>

<!-- <a href="index.php"><img src="../images/logo.png" class="img-fluid" alt="Dashboard"></a>

	<div class="search-container">
		<form method="post" action="../search.php">
			<button type="submit"><i class="fa fa-search"></i></button>
			<input type="text" placeholder="Search.." name="keywords">
		</form>
	</div> -->

<div id="dashboard-wrapper" class="container">
	  <div class="row">
		<div class="col-sm-4">
		<h2 class="admin-ht2" style="border-bottom: none;"></h2>
		<ul class="nav-menu-side">
			<li><a href="../dashboard/index.php">Dashboard</a></li>
			<li><a href="../humanresource/index.php">Human Resources</a></li>
			<li><a href="index.php" class="active-menu">Products</a></li>
			<li><a href="../messages/index.php">Messages</a></li>
			<li><a href="../notifications/index.php">Notifications</a></li>
			<li><a href="../settings/index.php">Settings</a></li>
		</ul>
		<p class="logout-btm"><a href="../logout.php">Logout</a></p>
		</div>
		<div class="col-sm-8 product-data">
			<h2>Products</h2>
			<div class="row row-cols-4 product-nav">
				<div class="col">
					<a class="btn btn-primary btn-dashboard active" href="index.php" role="button">Product Details</a>
				</div>
				<div class="col">
					<a class="btn btn-primary btn-dashboard" href="product-orders.php" role="button">Product Orders</a>
				</div>
				<div class="col">
				 <a class="btn btn-primary btn-dashboard" href="daily-inventory.php" role="button">Daily Inventory</a>
				</div>
				<div class="col">
				 <a class="btn btn-primary btn-dashboard" href="monthly-inventory.php" role="button">Monthly Inventory</a>
				</div>
			</div>
		<div class="row data-tables-prod">
        <?php
        require('../db.php');

          $id_product=$_REQUEST['id_product'];
          $sql = "SELECT * FROM products where id_product='$id_product'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
              echo "
                    <div class='productdetails'><h4>Product Name: " . $row["product_name"]. "</h4></div>
                    <div><p>Product Id: ".$row["id_product"]." </p></div>
                    <div><strong>Description:</strong> " . $row["product_description"]. "</div>
                    <div><strong>Quantity: </strong> " . $row["product_quantity"]. "</div>
                    <div><strong>Product Category: </strong> " . $row["product_cat"]. "</div>
                    <div><strong>Barcode/SKU: </strong> " . $row["barcode_sku"]. "</div>
                    <div><strong>Manufactured Date: </strong> " . $row["manufactured_date"]. "</div>
                    <div><strong>Expiration Date: </strong> " . $row["expiration_date"]. "</div>";
              }
            } else {
              echo "0 results";
            }

            ?>

		</div>
		<!-- Footer -->
			<footer class="page-footer font-small mdb-color lighten-3 pt-4">
			  <!-- Copyright -->
			  <div class="footer-copyright text-center py-3">Copyright 2021 © MGSON Whitening and Beauty Shop. All Rights Reserverd.
			  </div>
			  <!-- Copyright -->
			</footer>
			<!-- Footer -->
	  </div>
</div><!-- Delete Products -->





</body>
</html>
