<?php
 //include("../auth_admin.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
			<li><a href="../dashboard/index.php">Dashboard</a></li>
			<li><a href="../humanresource/index.php">Human Resources</a></li>
			<li><a href="products.php" class="active-menu">Products</a></li>
			<li><a href="../messages/index.php">Messages</a></li>
			<li><a href="../notifications/index.php">Notifications</a></li>
			<li><a href="../settings/index.php">Settings</a></li>
		</ul>
		<p class="logout-btm"><a href="../logout.php">Logout</a></p>
		</div>
		<div class="col-sm-8 product-data">
			<h2>Products</h2>
			<div class="row product-nav cols-dashboard-right ctmdb">
				<div class="col">
					<h3><a class="btn btn-primary btn-dashboard" href="index.php" role="button">Product Details</a></h3>
				</div>
				<div class="col">
					<h3><a class="btn btn-primary btn-dashboard active" href="product-orders.php" role="button">Product Orders</a></h3>
				</div>
				<div class="col">
				 <h3><a class="btn btn-primary btn-dashboard" href="daily-inventory.php" role="button">Daily Inventory</a></h3>
				</div>
				<div class="col">
				 <h3><a class="btn btn-primary btn-dashboard" href="monthly-inventory.php" role="button">Monthly Inventory</a></h3>
				</div>
			</div>
		<div class="row data-tables-prod">
			<div class="col ctmta">
	<?php
	require('../db.php');

	$sel_query = "SELECT products.id_product, products.product_name, products.ordered_pcs, depotusers.id_users, depotusers.depot_name
				FROM products
				INNER JOIN  depotusers ON products.id_product = depotusers.id_users ";


	$result = $con->query($sel_query);

	   echo ("<table class='table table-striped table-hover'>
			  <tr>
				<th>Product ID</th>
				<th>Product Name</th>
				<th>ID Users</th>
				<th>Depot Name</th>
				<th>Ordered Pcs</th>
        <th>View Status</th>
			  </tr>");

	   if($result->num_rows > 0){

		  while ($row = $result->fetch_array()){
				$dbcusid = $row['id_product'];
				$dbcusname = $row['product_name'];
				$dborderid = $row['id_users'];
				$depot_name = $row['depot_name'];
				$ordered_pcs = $row['ordered_pcs'];

				echo ("
			  <tr>
				<td>$dbcusid</td>
				<td>$dbcusname</td>
				<td>$dborderid</td>
				<td>$depot_name</td>
				<td>$ordered_pcs</td>
          <td><a href='viewstatus.php?id_product=".$row['id_product']."'>View Status</a></td>

				</tr>

		       ");

			}
	   }


				 ?>
				</tbody>
				</table>
		</div>
		<div class="download-data-tab">
			<p>
				<a href="product-orders.php" class="btn btn-danger" >Back</a>
				<a href="deleteproduct.php" class="btn btn-danger">Delete Bulk</a>
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




<script src="../js/bootstrap.bundle.min.js"></script>


</div>
</body>
</html>
