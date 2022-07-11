<?php

 //include("../auth_admin.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<title>Products</title>
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
				<table class='table table-striped table-hover' >
					<thead>
							<tr>
								<th scope='col'>Product Id</th>
								<th scope='col'>Product Name</th>
								<th scope='col'>Description</th>
								<th scope='col'>Quantity</th>
								<th scope='col'>Product Category</th>
								<th scope='col'>Barcode/SKU</th>
								<th scope='col'>Manufactured Date</th>
								<th scope='col'>Expiration Date</th>

								</tr>
						</thead>
						<tbody>

						<?php

						require('../db.php');

						$sql = "SELECT id_product, product_name, product_description ,ordered_remaining, product_cat, barcode_sku, product_quantity, manufactured_date, expiration_date FROM products";
						$result = $con->query($sql);

						if ($result->num_rows > 0) {
						  while($row = $result->fetch_assoc()) {
							echo "
									<tr>
									  <th scope='row'>".$row["id_product"]."</th>
									  <td>" . $row["product_name"]. "</td>
									  <td>" . $row["product_description"]. "</td>
									  <td>" . $row["product_quantity"]. "</td>
									  <td>" . $row["product_cat"]. "</td>
									  <td>" . $row["barcode_sku"]. "</td>
									  <td>" . $row["manufactured_date"]. "</td>
									  <td>" . $row["expiration_date"]. "</td>
									</tr>";
						  }
						} else {
						  echo "0 results";
						}

						?>
							</tbody>
				</table>
			</div>
			<div class="download-data-tab">
					<p>
						<a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</a>
						<a href="view.php" class="btn btn-danger" >Edit Products</a>
						<a href="deleteproduct.php" class="btn btn-danger">Delete Products</a>
						<a href="#" class="btn btn-primary">Generate Reports</a>
					</p>
			</div>

		</div>
		</div>
	  </div>
</div><!-- Delete Products -->



</body>
</html>
