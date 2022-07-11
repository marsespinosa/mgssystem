<?php

require('../db.php');
//include("../auth_admin.php");

$id_product=$_REQUEST['id_product'];
$query = "SELECT * from products where id_product='".$id_product."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<title>Edit Products</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<link href="../style.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


<a href="index.php"><img src="../images/logo.png" class="img-fluid" alt="Dashboard"></a>

<div class="search-container">
		<form method="post" action="../search.php">
			<button type="submit"><i class="fa fa-search"></i></button>
			<input type="text" placeholder="Search.." name="keywords">
		</form>
	</div>

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
				$id_product=$_REQUEST['id_product'];
				$product_name = $_REQUEST['product_name'];
				$barcode_sku = $_REQUEST['barcode_sku'];
				$product_quantity = $_REQUEST['product_quantity'];
				$product_status = $_REQUEST['product_status'];
				$date_ordered = date('Y-m-d H:i:s');
				$keywords = $_REQUEST['keywords'];
				$update="update products set product_name='".$product_name."',barcode_sku='".$barcode_sku."',product_quantity='".$product_quantity."',product_status='".$product_status."',date_ordered='".$date_ordered.",keywords='".$keywords."' where id_product='".$id_product."'";

				mysqli_query($con, $update) or die(mysqli_error());

				$status = "Record Updated Successfully. </br></br><a href='product-orders.php'>View Updated Record</a>";
				echo '<p style="color:#FF0000;">'.$status.'</p>';
				}else {
				?>

				<div class="editproductsorder">
					<form class="form" action="" method="post">
					<input type="hidden" name="new" value="1" />
					<input name="id_product" type="hidden" value="<?php echo $row['id_product'];?>" />
					<strong>Product Name:</strong><input type="text" class="input-product" name="product_name" value="<?php echo $row['product_name'];?>" placeholder="Product Name" required />
					<strong>Order Status:</strong><select class="form-select" name="product_status">
						<option value="<?php echo $row['product_status'];?>"><?php echo $row['product_status'];?></option>
						<option value="On Progress">On Progress</option>
						<option value="Successfully Delivered">Successfully Delivered</option>
						<option value="Order Return">Order Return</option>
						<option value="Order Cancel">Order Cancel</option>
						<option value="Order Refund">Order Refund</option>
					</select>
					<strong>Barcode/SKU:</strong><input type="number" class="input-product" name="barcode_sku" value="<?php echo $row['barcode_sku'];?>" placeholder="Barcode or SKU" required>
					<strong>Number of pcs ordered:</strong><input type="number" class="input-product" name="product_quantity" value="<?php echo $row['product_quantity'];?>" placeholder="Number of pcs ordered" required>
					<strong>Date Ordered:</strong><input type="date" class="input-product" name="date_ordered" value="<?php echo $row['date_ordered'];?>" placeholder="Date Ordered" required>
					<strong>Keywords</strong><input type="text" class="input-product" name="keywords" value="<?php echo $row['keywords'];?>" placeholder="Keywords" required>
						<input name="submit" type="submit" value="Update" />
					</form>
				<?php } ?>
				</div>
				</div>
			</div>
		</div>
		<div class="download-data-tab">
			<p>
				<a href="product-orders.php" class="btn btn-info">Back</a>
				<a href="deleteproduct.php" class="btn btn-danger">Delete Products</a>
			</p>
		</div>


		</div>
	  </div>
</div>





</body>
</html>
