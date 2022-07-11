<?php
  //include("../auth_admin.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<title>View Products</title>
	<link rel="fav icon" type="image/png" href="../images/favicon.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/modals.css" rel="stylesheet">
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
				<table class="table table-striped table-hover">
				<thead>
					<tr>
					  <th>Product Id</th>
					  <th scope='col'>Product Name</th>
					  <th scope='col'>Description</th>
					  <th scope='col'>Product Category</th>
					  <th scope='col'>Barcode/SKU</th>
					  <th scope='col'>Number of pcs</th>
					  <th scope='col'>Manufactured Date</th>
					  <th scope='col'>Expiration Date</th>
					  <th scope='col'>Edit</th>
					  <th scope='col'>Delete</th>
					 </tr>
				</thead>
				<tbody>

				<?php
				require('../db.php');

					$sql = "SELECT * FROM products order by id_product asc";
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
									  <td><a href='edit.php?id_product='".$row["id_product"].'">Edit</a></td>
									  <td><a href="delete.php?id_product="'. $row["id_product"].">Delete</a></td></tr>
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
					<a href="index.php" class="btn btn-danger">Back</a>
					<a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</a>
					<a href="deleteproduct.php" class="btn btn-danger">Delete by Bulk</a>
					<a href="#" class="btn btn-primary">Generate Reports</a>
				</p>
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

<!-- ModalBox Add Product -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Products</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 		<form class="form" action="" method="post">
		<input type="text" class="input-product" name="product_name" placeholder="Product Name" required />
		<input type="text" class="input-product" name="product_description" placeholder="Product Description" required>
				<select class="form-select" name="product_cat">
					  <option selected>Product Category</option>
					  <option value="facial_care">Facial Care</option>
					  <option value="body_care">Body Care</option>
					  <option value="hair_care">Hair Care</option>
					  <option value="sliming_coffee">Sliming Coffee</option>
					  <option value="tints">Tints</option>
					  <option value="his_scent">His Scent</option>
					  <option value="her_scent">Her Scent</option>
				</select>
					<input type="text" class="input-product" name="barcode_sku" placeholder="Barcode or SKU" required>
					<input type="number" class="input-product" name="product_quantity" placeholder="Quanity" required>
					<input type="date" class="input-product" name="manufactured_date" required>
					<input type="date" class="input-product" name="expiration_date" required>
					<input type="text" class="input-product" name="keywords" value="keywords" placeholder="Keywords" required>
					<input type="submit" name="submit" value="Add" class="add-button">
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div><!-- ModalBox Add Product -->



<script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>
