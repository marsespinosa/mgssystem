<?php

 //include("../auth_admin.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="fav icon" type="image/png" href="../images/favicon.png">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../style.css" rel="stylesheet" />

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

  <!-- <a href="index.php"><img src="../images/logo.png" class="img-fluid logo" alt="Dashboard"></a> -->

  <!-- <div class="search-container">
        <form action="../search.php">
          <button type="submit"><i class="fa fa-search"></i></button>
          <input type="text" placeholder="Search.." name="search">
        </form>
  </div> -->
  <label for="ctmbtn" class="icon1">
		<span class="fa fa-bars"></span>
	</label>
	<input type="checkbox" id="ctmbtn" class="btnctm">

	<div id="dashboard-wrapper" class="container">
	  <div class="row">
		<div class="col-sm-4 ctmdiv2">
			<h2 class="admin-ht2" style="border-bottom: none;">
				<?php  
					//session_start();
					//echo $_SESSION['adminusername'];
				?>
			</h2>

		<ul class="nav-menu-side ctmnav2">
			<li><a href="index.php" class="active-menu">Dashboard</a></li>
			<li><a href="../humanresource/index.php">Human Resources</a></li>
			<li><a href="../products/index.php">Products</a></li>
			<li><a href="../messages/index.php">Messages</a></li>
			<li><a href="../notifications/index.php">Notifications</a></li>
			<li><a href="../settings/index.php">Settings</a></li>
		</ul>
		<p class="logout-btm"><a href="../logout.php">Logout</a></p>
		</div>
		<div class="col-sm-8 product-data">
			<h2>Dashboard</h2>
			<div class="row cols-dashboard-right ctmdb">
  				<div class="col">
  					<h3><a class="btn btn-primary btn-dashboard active" href="index.php" role="button">Order Received</a></h3>
  				</div>
  				<div class="col">
  				      <h3> <a class="btn btn-primary btn-dashboard" href="monthlyorder.php" role="button">Monthly Orders</a></h3>
  				</div>
  				<div class="col">
  			       <h3><a class="btn btn-primary btn-dashboard" href="pendingrequest.php" role="button">Pending Request</a></h3>
  				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 ctmta">
					<table class='table'>
					<thead>
						<tr>
							<th scope='col'>Product Id</th>
							<th scope='col'>Product Name</th>
							<th scope='col'>Depot Name</th>
							<th scope='col'>Product Category</th>
							<th scope='col'>Order Pcs</th>
							<th scope='col'>Product Status</th>
							<th scope='col'>View Order</th>
							</tr>
						 </thead>
					<tbody>

					<?php

					require('../db.php');

					$complete = "Complete";

					$sel_query = "SELECT products.id_product, products.product_name, products.product_cat, products.ordered_pcs,products.product_status, depotusers.id_users, depotusers.depot_name
						FROM products
						INNER JOIN  depotusers ON products.id_product = depotusers.id_users where product_status='$complete' ";

					$result = $con->query($sel_query);
					if ($result->num_rows > 0) {
					  while($row = $result->fetch_assoc()) {
						echo "
								<tr>
								  <th scope='row'>".$row["id_product"]."</th>
								  <td>" . $row["product_name"]. "</td>
								  <td>" . $row["depot_name"]. "</td>
								  <td>" . $row["product_cat"]. "</td>
								  <td>" . $row["ordered_pcs"]. "</td>
								  <td>" . $row["product_status"]. "</td>
								   <td><a href='edit-productorder.php?id_product=".$row['id_product']."'>View</a></td>
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
				  <a href="#" class="btn btn-primary"> Generate Reports </a>
				  <a href="#" class="btn btn-primary"> Notify Depot </a>
				</div>
			</div> <!-----row---->

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


</body>
</html>
