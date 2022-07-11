<?php
//include("../auth_admin.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monthly Inventory</title>
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
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top ctmnav">
	    <a class="logolink" href="index.php"><img src="../images/logo.png" class="img-fluid logo" alt="Dashboard"></a>

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
		<div class="col-sm-4 ctmdiv2">
		<h2 class="admin-ht2" style="border-bottom: none;"></h2>
		<ul class="nav-menu-side ctmnav2">
			<li><a href="../dashboard/index.php" >Dashboard</a></li>
			<li><a href="../humanresource/index.php">Human Resources</a></li>
			<li><a href="index.php">Products</a></li>
			<li><a href="../messages/index.php">Messages</a></li>
			<li><a href="../notifications/index.php">Notifications</a></li>
			<li><a href="../settings/index.php">Settings</a></li>
		</ul>
	<p class="logout-btm"><a href="../logout.php">Logout</a></p>
		</div>
		<div class="col-sm-8 product-data">
			<h2>
			<?php
			$month = date('m');
			if($month == 12){
				echo "For the Month of December";
			}if($month == 11){
				echo "For the Month of November";
			}if($month == 10){
				echo "For the Month of October";
			}if($month == 9){
				echo "For the Month of September";
			}if($month == 8){
				echo "For the Month of August";
			}if($month == 8){
				echo "For the Month of August";
			}if($month == 7){
				echo "For the Month of July";
			}if($month == 6){
				echo "For the Month of June";
			}if($month == 5){
				echo "For the Month of May";
			}if($month == 4){
				echo "For the Month of April";
			}if($month == 3){
				echo "For the Month of March";
			}if($month == 2){
				echo "For the Month of February";
			}if($month == 1){
				echo "For the Month of January";
			}
			?></h2>

			<div class="row product-nav cols-dashboard-right ctmdb">
				<div class="col">
					<h3><a class="btn btn-primary btn-dashboard" href="index.php" role="button">Product Details</a></h3>
				</div>
				<div class="col">
					<h3><a class="btn btn-primary btn-dashboard" href="product-orders.php" role="button">Product Orders</a></h3>
				</div>
				<div class="col">
				 <h3><a class="btn btn-primary btn-dashboard" href="daily-inventory.php" role="button">Daily Inventory</a></h3>
				</div>
				<div class="col">
				 <h3><a class="btn btn-primary btn-dashboard active" href="monthly-inventory" role="button">Monthly Inventory</a></h3>
				</div>
			</div>
		<div class="row data-tables-prod">
			<div class="col ctmta">
				<table class='table'>
					<thead>
							<tr>
								<th scope='col'>Product Id</th>
								<th scope='col'>Product Name</th>
								<th scope='col'>Depot User ID</th>
								<th scope='col'>Depot Name</th>
								<th scope='col'>Product Status</th>
								<th scope='col'>Ordered Pcs</th>
                <th scope='col'>Status</th>
								</tr>
						</thead>
						<tbody>

						<?php

						require('../db.php');
            $startmonth = date("Y-m-1 00:00:00");
            $endmonth = date("Y-m-d H:i:s");

						$sel_query = "SELECT products.id_product, products.product_name, products.product_cat, products.ordered_pcs,products.product_status, products.date_ordered, depotusers.id_users, depotusers.depot_name
						FROM products
						INNER JOIN  depotusers ON products.id_product = depotusers.id_users where date_ordered between '".$startmonth."' AND '".$endmonth."'";

						$result = $con->query($sel_query);

						if ($result->num_rows > 0) {
						  while($row = $result->fetch_assoc()) {
							echo "
									<tr>
									  <th scope='row'>".$row["id_product"]."</th>
									  <td>" . $row["product_name"]. "</td>
									  <td>" . $row["id_users"]. "</td>
									  <td>" . $row["depot_name"]. "</td>
									  <td>" . $row["product_status"]. "</td>
									  <td>" . $row["ordered_pcs"]. "</td>
                    <td><a href='viewstatus.php?id_product=".$row['id_product']."'>View Status</a></td>

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
	  </div>
</div><!-- Delete Products -->

 <?php
			require('../db.php');
			if (isset($_POST['submit'])) {
				// removes backslashes
			$product_name = stripslashes($_REQUEST['product_name']);
			$product_name = mysqli_real_escape_string($con, $product_name);

			$product_description = stripslashes($_REQUEST['product_description']);
			$product_description = mysqli_real_escape_string($con, $product_description);

            $product_cat  = mysqli_real_escape_string($con, $_POST['product_cat']);

			$barcode_sku = stripslashes($_REQUEST['barcode_sku']);
			$barcode_sku = mysqli_real_escape_string($con, $barcode_sku);

			$manufactured_date = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $_POST['manufactured_date'])));
			$expiration_date = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $_POST['expiration_date'])));

			$query_add    = "INSERT into `products` (product_name,product_description,product_cat,barcode_sku,manufactured_date,expiration_date)
									 VALUES ('$product_name','$product_description','$product_cat','$barcode_sku','$manufactured_date','$expiration_date')";


			$result_query   = mysqli_query($con, $query_add);

			if ($result_query) {
			echo ("<script LANGUAGE='JavaScript'>
							window.alert('Added');
							  window.location.href='index.php';
							</script>");
				}
			else {
				echo "<div class='form'>
									<p>Not Added</p>
								  </div>";
				}
			}


			?>

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
					<input type="date" class="input-product" name="manufactured_date" required>
					<input type="date" class="input-product" name="expiration_date" required>
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
