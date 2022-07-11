<?php
// include("../auth_depot.php");
?>

<?php
require('../db.php');

$id_product = $_REQUEST['id_product'];
$querdprod = "SELECT * from products where id_product='".$id_product."' ";
$resuldel = mysqli_query($con, $querdprod) or die ( mysqli_error());
$row = mysqli_fetch_assoc($resuldel);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<title>My Products</title>
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
      <li><a href="myproducts.php"  class="active-menu">My Products</a></li>
      <li><a href="myorder.php">My Orders</a></li>
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
				<h2>Facial Care</h2>
				<div class="row info-order">
        <div class="placeordered">
        <?php
            require('../db.php');
          	$id = $_GET['id_product'];

            if (isset($_POST['submit'])) {
	            $product_name ='Ageless Beauty Maintenance Set';
	            $product_status= 'On Progress';
	            $product_cat = 'facial_care';

	            $ordered_pcs = stripslashes($_REQUEST['ordered_pcs']);
	            $ordered_pcs = mysqli_real_escape_string($con, $ordered_pcs);

	            $quantity_remaining = "SELECT * from products where id_product=' ". $id ." '  ";
	            $result2 = $con->query($quantity_remaining);

							foreach($result2 as $samplearray){
								$quantity_holder = $samplearray['product_quantity'];
							}

							$differnce = $quantity_holder - $ordered_pcs;

	            $date_ordered = date('Y-m-d H:i:s');
	            $query_add_prod ="INSERT into `placeorder` (product_name,product_cat,ordered_pcs,quantity_remaining,product_status,date_ordered)
	                              VALUES ('$product_name','$product_cat','$ordered_pcs','$differnce','$product_status','$date_ordered')";

	            $query_update_prod = "UPDATE products SET product_quantity='" . $differnce . "' WHERE id_product='" . $id ."'";

	            $result_query_prod = mysqli_query($con,$query_add_prod);
	            $result_update_prod = mysqli_query($con,$query_update_prod);

	            if ($result_query_prod) {
	            	if ($result_update_prod) {
	            		echo ("<script LANGUAGE='JavaScript'>
                        	window.alert('Added');
                          window.location.href='myproducts.php';
                      	</script>");
	            	} else { }
	                
	            }
	            else {
	              echo "<div class='form'> <p>Not Added</p></div>";
	              }
	          }
                  ?>

                  <form class="form" action="" method="post">
                    <h5><?php echo $row['product_name']; ?></h5>
                    <p><?php echo $row['product_status']; ?></p>
                    <p><?php echo $row['product_cat']; ?></p>
                    <input type="number" class="input-product" name="ordered_pcs" placeholder="Ordered PCS" required />
                    <input type="submit" name="submit" value="Place Order" class="add-button"  />
                  </form>
              </div>
				</div>

			</div>
		<footer>Copyright 2021 © MGSON Whitening and Beauty Shop. All Rights Reserved.</footer>
	  </div>
</div><!-- Delete Products -->




<script src="../js/bootstrap.bundle.min.js"></script>


</div>
</body>
</html>
