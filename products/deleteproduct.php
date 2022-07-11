<?php
require('../db.php');

//include("../auth_admin.php");

$result = @mysqli_query($con, "SELECT * FROM products") or die("Error: " . mysqli_error($con));

if(isset($_POST['chk_id']))
{
    $arr = $_POST['chk_id'];
    foreach ($arr as $id_product) {
        @mysqli_query($con,"DELETE FROM products WHERE id_product = " . $id_product);
    }
    $msg = "Deleted Successfully!";
    header("Location: deleteproduct.php?msg=$msg");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Products</title>
    <link rel="fav icon" type="image/png" href="../images/favicon.png">
    <meta content="width=device-width, initial-scale=1" name="viewport" >
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<link href="../css/bootstrap.min.css" rel="stylesheet">
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
			<form action="deleteproduct.php" method="post">
            <?php if (isset($_GET['msg'])) { ?>
            <p class="alert alert-success"><?php echo $_GET['msg']; ?></p>
            <?php } ?>
            <table class="table table-striped table-hover">
               <thead>
					<tr>
						<th scope='col'>Product Id</th>
						<th scope='col'>Product Name</th>
						<th scope='col'>Description</th>
						<th scope='col'>Product Category</th>
						<th scope='col'>Barcode/SKU</th>
						<th scope='col'>Manufactured Date</th>
						<th scope='col'>Expiration Date</th>
						<th scope='col'>Select Product</th>
					</tr>
				</thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>

                    <td><?php echo $row['id_product']; ?></td>
                    <td><?php echo $row['product_name']; ?></td>
                    <td><?php echo $row['product_cat']; ?></td>
                    <td><?php echo $row['barcode_sku']; ?></td>
                    <td><?php echo $row['manufactured_date']; ?></td>
                    <td><?php echo $row['expiration_date']; ?></td>
					<td><input name="chk_id[]" type="checkbox" class='chkbox' value="<?php echo $row['id_product']; ?>"/></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>

			</div>

			<div class="download-data-tab">
				<p>
					<input id="submit" name="submit" type="submit" class="btn btn-info" value="Delete" />
					<a href="view.php" class="btn btn-info">Back</a>
					<a href="view.php" class="btn btn-danger">Edit</a>
					<a href="#" class="btn btn-primary">Generate Reports</a>
				</p>
			</div>
		   </form>
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
<script src="js/jquery-3.4.1.min"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#chk_all').click(function(){
        if(this.checked)
            $(".chkbox").prop("checked", true);
        else
            $(".chkbox").prop("checked", false);
    });
});

$(document).ready(function(){
    $('#delete_form').submit(function(e){
        if(!confirm("Confirm Delete?")){
            e.preventDefault();
        }
    });
});
</script>
</body>
</html>
