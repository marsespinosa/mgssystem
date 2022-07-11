<?php

//include("../auth_admin.php");
require('../db.php');

$id_product = $_REQUEST['id_product'];
$querdprod = "SELECT * from products where id_product='".$id_product."' ";
$resuldel = mysqli_query($con, $querdprod) or die ( mysqli_error());
$row = mysqli_fetch_assoc($resuldel);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<title>Edit Products</title>
	<link rel="fav icon" type="image/png" href="../images/favicon.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<link href="../style.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
			<div class="col">
				<div class="form">
				<?php
				require('../db.php');
				$status = "";
				if(isset($_POST['new']) && $_POST['new']==1)
				{
				$id_product = $_POST['id_product'];
				$product_name = $_POST['product_name'];
				$product_description = $_POST['product_description'];
				$product_cat = $_POST['product_cat'];
				$barcode_sku = $_POST['barcode_sku'];
				$product_quantity = $_POST['product_quantity'];
				$keywords = $_POST['keywords'];
				$manufactured_date = date('Y-m-d H:i:s', strtotime(str_replace('-', '/',$_POST['manufactured_date'])));
				$expiration_date = date('Y-m-d H:i:s', strtotime(str_replace('-', '/',$_POST['expiration_date'])));

				$updated="UPDATE products SET product_name='".$product_name."', product_description='".$product_description."',
				product_cat='".$product_cat."', barcode_sku='".$barcode_sku."', product_quantity='".$product_quantity."',
				manufactured_date='".$manufactured_date."',expiration_date='".$expiration_date."',
				keywords='".$keywords."' where id_product='".$id_product."'";

				mysqli_query($con, $updated) or die(mysqli_error());

				$status = "<div class='record-updated'>Record Updated Successfully. </br></br><a href='index.php'>View Updated Record</a>";
				echo '<p style="color:#FF0000;">'.$status.'</p></div>';
				}else {
				?>

				<div class="editproductsorder">
					<form class="form" action="" method="post">
					<input type="hidden" name="new" value="1" />
					<input name="id_product" type="hidden" value="<?php echo $row['id_product'];?>" />
					<strong>Product Name:</strong><input type="text" class="input-product" name="product_name" value="<?php echo $row['product_name'];?>" placeholder="Product Name" required />
					<strong>Product Description:</strong><input type="text" class="input-product" name="product_description"  value="<?php echo $row['product_description'];?>" placeholder="Product Description" required>
						<select class="form-select" name="product_cat" >
							<option value="<?php echo $row['product_cat'];?>"><?php echo $row['product_cat'];?></option>
							<option value="facial_care">Facial Care</option>
							<option value="body_care">Body Care</option>
							<option value="hair_care">Hair Care</option>
							<option value="sliming_coffee">Sliming Coffee</option>
							<option value="tints">Tints</option>
							<option value="his_scent">His Scent</option>
							<option value="her_scent">Her Scent</option>
						</select>
					<strong>Product SKU:</strong><input type="text" class="input-product" name="barcode_sku" value="<?php echo $row['barcode_sku'];?>" placeholder="Barcode or SKU" required>
					<strong>Quantity:</strong><input type="text" class="input-product" name="product_quantity" value="<?php echo $row['product_quantity'];?>" required>
					<strong>Keywords</strong><input type="text" class="input-product" name="keywords" value="<?php echo $row['keywords'];?>" placeholder="Keywords" required>
					<strong>Manufactured Date:</strong><input type="date" class="input-product" name="manufactured_date" value="<?php echo $row['manufactured_date'];?>" required>
					<strong>Expiration Date:</strong><input type="date" class="input-product" name="expiration_date" value="<?php echo $row['expiration_date'];?>" required>
						<input name="submit" type="submit" value="Update" />
					</form>
				<?php } ?>

        
				</div>
				</div>
			</div>
			<div class="download-data-tab">
					<p>
						<a href="index.php" class="btn btn-danger" >Back</a>
						<a href="index.php" class="btn btn-danger" >Edit Products</a>
						<a href="deleteproduct.php" class="btn btn-danger">Delete Products</a>
						<a href="#" class="btn btn-primary">Generate Reports</a>
					</p>
			</div>
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
	  </div>
</div><!-- Delete Products -->


</body>
</html>
