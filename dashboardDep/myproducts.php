<?php
// include("../auth_depot.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Products</title>
	<link rel="fav icon" type="image/png" href="../images/favicon.png">
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	 <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../style.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" />

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<div class="ctml">
			<a href="index.php"><img src="../images/logo.png" class="img-fluid logo" alt="Dashboard"></a>

		    <form class="form-inline my-2 my-lg-0 nfdp" action="../search.php">
		    	<div class="input-group">
	    			<button class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
			      	<input class="form-control mr-sm-2 fa fa-search" type="text" placeholder="Search.." aria-label="Search" name="search">
		    	</div>
		    </form>
	    </div>

	    <label for="btn1" class="icon">
    		<span class="fa fa-bars"></span>
    	</label>
    	<input type="checkbox" id="btn1" class="btnctm">

	    <div>
	    	<ul class="col-sm-12 bell-icons bc1 ctmul1">
				<li><a class="fa fa-bell-o" href="#"></a></li>
				<li><a class="fa fa-comment-o" href="contact.php"></a></li>
				<li>
					<label for="btn2" class="show"></label>
					<a class="fa fa-user-o" type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
					<input type="checkbox" id="btn2" class="btnctm">
				 	<div class="dropdown-menu">
					    <a class="dropdown-item ctm2" href="./myprofile.php"><b>Profile</b></a>
					    <a class="dropdown-item ctm2" href="./depsettings.php"><b>Settings</b></a>
					    <div class="dropdown-divider"></div>
					    <a class="dropdown-item logout" href="../logout.php"><b>Logout</b></a>
				  	</div>
				</li>
			</ul>

			<ul class="col-sm-12 bell-icons bc1 ctmul2">
				<li><a class="fa fa-bell-o" href="#">Notifications</a></li>
				<li><a class="fa fa-comment-o" href="contact.php">Contact Us</a></li>
				<li>
					<label for="btn2" class="show"></label>
					<a class="fa fa-user-o" type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Profile</a>
					<input type="checkbox" id="btn2" class="btnctm">
				 	<div class="dropdown-menu">
					    <a class="dropdown-item ctm2" href="./myprofile.php"><b>Profile</b></a>
					    <a class="dropdown-item ctm2" href="./depsettings.php"><b>Settings</b></a>
					    <div class="dropdown-divider"></div>
					    <a class="dropdown-item logout" href="../logout.php"><b>Logout</b></a>
				  	</div>
				</li>
			</ul>
	    </div>
 	</nav>

	<div id="dashboard-wrapper" class="container">
	  <div class="row">
		<div class="col-sm-4">
			<a href="index.php"><img src="images/profileavatar.png" class="mb-4 clientavatar" alt="client"/></a>
      <ul class="nav-menu-side withicons">
      <li><a href="myproducts.php"  class="active-menu">My Products</a></li>
      <li><a href="myorder.php">My Orders</a></li>
      <li><a href="mycontract.php">My Contract</a></li>
      </ul>
			<p class="logout-btm"><a href="contact.php">Help?</a></p>
		</div>
		<div class="col-sm-8 product-data">
			<div class="data-my-product">
				<h2>My Products</h2>
				<ul class="myproducts">
						<li><a class="btn btn-primary btn-dashboard active" href="#" role="button">Facial Care</a></li>
						<li><a class="btn btn-primary btn-dashboard" href="./productCategory/bodycare.php" role="button">Body Care</a></li>
						<li><a class="btn btn-primary btn-dashboard" href="./productCategory/haircare.php" role="button">Hair Care</a></li>
						<li><a class="btn btn-primary btn-dashboard" href="./productCategory/slimingcofee.php" role="button">Slimming Coffee</a></li>
						<li><a class="btn btn-primary btn-dashboard" href="./productCategory/tints.php" role="button">Tints</a></li>
						<li><a class="btn btn-primary btn-dashboard" href="./productCategory/hisscents.php" role="button">His Scents</a></li>
						<li> <a class="btn btn-primary btn-dashboard" href="./productCategory/herscents.php" role="button">Her Scents</a></li>
						<li><a class="btn btn-primary btn-dashboard" href="./productCategory/oil.php" role="button">Oils</a></li>
				</ul>
				<h2>Facial Care</h2>
				<div class="row info-order">

          <table class='table table-striped table-hover' >
  					<thead>
  							<tr>
  								<th scope='col'>Product Id</th>
  								<th scope='col'>Product Name</th>
  								<th scope='col'>Quantity</th>
                  <th scope='col'>Ordered Pcs</th>
                  <th scope='col'>Quantity Remaining</th>
  								<th scope='col'>Order</th>
  								</tr>
  						</thead>
  					<tbody>
  						<?php

  						require('../db.php');

              $product_cat = 'facial_care';
  						$sql = "SELECT id_product,product_name,product_description,product_cat,barcode_sku,product_quantity,ordered_pcs,manufactured_date,expiration_date,
              product_quantity-ordered_pcs AS remainingpcs FROM products where product_cat='$product_cat'";

              $result = $con->query($sql);

  						if ($result->num_rows > 0) {
  						$i=0;
  						  while($row = $result->fetch_assoc()) {
  							echo "
  									<tr>
                      <td>" .$row['id_product']."</td>
                      <td>" . $row["product_name"]. "</td>
  									  <td>" . $row["product_quantity"]. "</td>
                      <td>" . $row["ordered_pcs"]. "</td>
                      <td>" . $row["remainingpcs"]. "</td>"; ?>
                      <td><a href="placeorder.php?id_product=<?php echo $row["id_product"]; ?>" class="btn btn-info">Place Order</a></td>
  						<?php }

  						 $i++;
  						} else {
  						  echo "0 results";
  						}

  						?>

  					</tbody>
  				</table>

				</div>

			</div>
		<footer>Copyright 2021 © MGSON Whitening and Beauty Shop. All Rights Reserved.</footer>
	  </div>
</div><!-- Delete Products -->

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
