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
					<a class="btn btn-primary btn-dashboard" href="index.php" role="button">Product Details</a>
				</div>
				<div class="col">
					<a class="btn btn-primary btn-dashboard active" href="product-orders.php" role="button">Product Orders</a>
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
          <table class='table table-striped table-hover' >
            <thead>
          <?php
        	require('../db.php');

        	$sel_query = "SELECT products.id_product, products.product_name, products.ordered_pcs, products.product_status, depotusers.id_users, depotusers.depot_name
        				FROM products
        				INNER JOIN  depotusers ON products.id_product = depotusers.id_users
                where id_product='".$id_product."'";


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
                $product_status = $row['product_status'];

        				echo ("
        			  <tr>
        				<td>$dbcusid</td>
        				<td>$dbcusname</td>
        				<td>$dborderid</td>
        				<td>$depot_name</td>
        				<td>$ordered_pcs</td>
                <td>$product_status</td>

        				</tr>

        		       ");

        			}
        	   }


        				 ?>
               </tbody>
     				</table>
            <div class="download-data-tab">
        			<p>
        				<a href="product-orders.php" class="btn btn-info">Back</a>
        				<a href="deleteproduct.php" class="btn btn-danger">Delete Products</a>
        			</p>
        		</div>
				</div>
				</div>
			</div>
		</div>



		</div>
	  </div>
</div>





</body>
</html>
