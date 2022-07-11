<?php
 // include("../auth_depot.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<title>View Products</title>
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
	 <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../style.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" />
</head>

<body>

<div class="container">
	<div class="row">
		<div class="col-sm-4-2">
			<h1 class="logoh1"><a href="index.php"><img src="../images/depotlogo.png" class="img-fluid" alt="Dashboard"> Dashboard </a></h1>
		</div>
		<div class="col-sm-8-2 product-data">
			<div class="search-container floatleftsearch">
				<form method="post" action="../search.php">
				<button type="submit"><i class="fa fa-search"></i></button>
				<input type="text" placeholder="Search.." name="keywords">
			</form>
			</div>
		</div>
	</div>
	</div>

	<div id="dashboard-wrapper" class="container">
	  <div class="row">
		<div class="col-sm-4">
			<a href="index.php"><img src="images/profileavatar.png" class="mb-4 clientavatar" alt="client"/></a>
			  <ul class="nav-menu-side withicons">
				<li><a href="myproducts.php" class="active-menu">My Products</a></li>
				<li><a href="#">My Orders</a></li>
				<li><a href="mycontract.php">My Contract</a></li>
			  </ul>
		<p class="helpbtm"><a href="contact.php">Help?</a></p>
	<p class="logout-btm"><a href="../logout.php">Logout</a></p>
		</div>
		<div class="col-sm-8 product-data">
			<div class="data-my-product">
				<h2>My Products</h2>
				<ul class="bell-icons">
				<li><a href="#"></a></li>
				<li><a href="contact.php"></a></li>
				<li><a href="index.php"></a></li>
				</ul>
				<ul class="myproducts">
						<li><a class="btn btn-primary btn-dashboard active" href="#" role="button">Facial Care</a></li>
						<li><a class="btn btn-primary btn-dashboard" href="#" role="button">Body Care</a></li>
						<li><a class="btn btn-primary btn-dashboard" href="#" role="button">Hair Care</a></li>
						<li><a class="btn btn-primary btn-dashboard" href="#" role="button">Slimming Coffee</a></li>
						<li><a class="btn btn-primary btn-dashboard" href="#" role="button">Tints</a></li>
						<li><a class="btn btn-primary btn-dashboard" href="#" role="button">His Scents</a></li>
						<li> <a class="btn btn-primary btn-dashboard" href="#" role="button">Her Scents</a></li>
						<li><a class="btn btn-primary btn-dashboard" href="#" role="button">Oils</a></li>
				</ul>
				<h2>Products</h2>
				<div class="row info-order">

					<div class="placeorder"><a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Place Order</a></div>
				</div>
			</div>
		<footer>Copyright 2021 © MGSON Whitening and Beauty Shop. All Rights Reserved.</footer>
	  </div>
</div><!-- Delete Products -->


<?php
	require('../db.php');
	if (isset($_POST['submit'])) {
	$product_name = stripslashes($_REQUEST['product_name']);
	$product_name = mysqli_real_escape_string($con, $product_name);
	$product_cat  = mysqli_real_escape_string($con, $_POST['product_cat']);
	$ordered_pcs = stripslashes($_REQUEST['ordered_pcs']);
	$ordered_pcs = mysqli_real_escape_string($con, $ordered_pcs);

	$query_add_prod ="INSERT into `products` (product_name,product_cat,ordered_pcs)
							VALUES ('$product_name','$product_cat','$ordered_pcs')";

	$result_query_prod = mysqli_query($con,$query_add_prod);

	if ($result_query_prod) {
		echo ("<script LANGUAGE='JavaScript'>
							window.alert('Added');
							  window.location.href='myproducts.php';
							</script>");
			}
	else {
		echo "<div class='form'> <p>Not Added</p></div>";
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
		<input type="number" class="input-product" name="ordered_pcs" placeholder="Ordered Pcs" required />
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

</div>
</body>
</html>
