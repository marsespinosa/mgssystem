<?php
// include("../auth_depot.php");
?>

<?php
	require('../db.php');

	$id_product = $_REQUEST['id_product'];
	$querdprod = "SELECT * from products where id_product='".$id_product."' ";
	$resuldel = mysqli_query($con, $querdprod) or die ( mysqli_error());
	$row = mysqli_fetch_assoc($resuldel);

	$currentuser = isset($_SESSION['username']) ? $_SESSION['username'] : '';
	require('../db.php');
	$querduser = "SELECT * from depotusers where id_users='" . $currentuser ."'";
	$result = $con->query($querduser);
	$row2 = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<title>My Products</title>
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

	 <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../style.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" />

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<a href="index.php"><img src="../images/logo.png" class="img-fluid logo" alt="Dashboard"></a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>

		    <form class="form-inline my-2 my-lg-0 nfdp" action="../search.php">
		      <button class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
		      <input class="form-control mr-sm-2 fa fa-search" type="text" placeholder="Search.." aria-label="Search" name="search">
		    </form>
	    </div>

	    <div>
	    	<ul class="col-sm-12 bell-icons bc1">
				<li><a href="#"></a></li>
				<li><a href="contact.php"></a></li>
				<li>
					<a type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
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
<!-- <div class="container">
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
	</div> -->

	<div id="dashboard-wrapper" class="container">
	  <div class="row">
		<div class="col-sm-4">
			<a href="index.php"><img src="images/profileavatar.png" class="mb-4 clientavatar" alt="client"/></a>
      <ul class="nav-menu-side withicons">
      <li><a href="myproducts.php"  class="active-menu">My Products</a></li>
      <li><a href="myorder.php">My Orders</a></li>
      <li><a href="mycontract.php">My Contract</a></li>
      </ul>
		<!-- <p class="helpbtm help"><a href="contact.php">Help?</a></p> -->
			<p class="logout-btm"><a href="contact.php">Help?</a></p>
		</div>
		<div class="col-sm-8 product-data">
			<div class="data-my-product">
				<h2>My Products</h2>
				<!-- <ul class="bell-icons">
				<li><a href="#"></a></li>
				<li><a href="contact.php"></a></li>
				<li><a href="index.php"></a></li>
				</ul> -->
				<?php

				foreach($resuldel as $prodcatarr){
					$prodcatarray = $prodcatarr['product_cat'];
				}

				if ($prodcatarray == "facial_care") {
					$classname1 = "active";
				} else if ($prodcatarray == "body_care") {
					$classname2 = "active";
				} else if ($prodcatarray == "hair_care") {
					$classname3 = "active";
				} else if ($prodcatarray == "sliming_coffee") {
					$classname4 = "active";
				} else if ($prodcatarray == "tints") {
					$classname5 = "active";
				} else if ($prodcatarray == "hisscents") {
					$classname6 = "active";
				} else if ($prodcatarray == "herscents") {
					$classname7 = "active";
				} else if ($prodcatarray == "oils") {
					$classname8 = "active";
				}

				?>
				<ul class="myproducts">
						<li><a class="btn btn-primary btn-dashboard <?php $classname1 ?>" href="myproducts.php" role="button">Facial Care</a></li>
						<li><a class="btn btn-primary btn-dashboard <?php $classname2 ?>" href="./productCategory/bodycare.php" role="button">Body Care</a></li>
						<li><a class="btn btn-primary btn-dashboard <?php $classname3 ?>" href="./productCategory/haircare.php" role="button">Hair Care</a></li>
						<li><a class="btn btn-primary btn-dashboard <?php $classname4 ?>" href="./productCategory/slimingcofee.php" role="button">Slimming Coffee</a></li>
						<li><a class="btn btn-primary btn-dashboard <?php $classname5 ?>" href="./productCategory/tints.php" role="button">Tints</a></li>
						<li><a class="btn btn-primary btn-dashboard <?php $classname6 ?>" href="./productCategory/hisscents.php" role="button">His Scents</a></li>
						<li><a class="btn btn-primary btn-dashboard <?php $classname7 ?>" href="./productCategory/herscents.php" role="button">Her Scents</a></li>
						<li><a class="btn btn-primary btn-dashboard <?php $classname8 ?>" href="./productCategory/oil.php" role="button">Oils</a></li>
				</ul>
				<h2>
					<?php
						foreach($resuldel as $arrayforname){
								$product_cat = $arrayforname['product_cat'];
							}
					?>
				</h2>
				<div class="row info-order">
        <div class="placeordered">
        <?php
            require('../db.php');
          	$id = $_GET['id_product'];



            if (isset($_POST['submit'])) {
	            //$product_name ='Ageless Beauty Maintenance Set';
	            //$product_status= 'On Progress';
	            //$product_cat = 'facial_care';

	            $ordered_pcs = stripslashes($_REQUEST['ordered_pcs']);
	            $ordered_pcs = mysqli_real_escape_string($con, $ordered_pcs);

	            $quantity_remaining = "SELECT * from products where id_product=' ". $id ." '  ";
	            $result2 = $con->query($quantity_remaining);

	            $user = "SELECT * from depotusers where id_users='" . $currentuser ."'";
	            $result1 = $con->query($user);

	        
							foreach($result2 as $samplearray){
								$quantity_holder = $samplearray['product_quantity'];
								$product_cat = $samplearray['product_cat'];
	            	$product_name = $samplearray['product_name'];
	            	$product_status= $samplearray['product_status'];
							}

							foreach($result1 as $samplearray1){
	            	$id_users = $samplearray1['id_users'];
							}


							$differnce = $quantity_holder - $ordered_pcs;

	            $date_ordered = date('Y-m-d H:i:s');
	            $query_add_prod ="INSERT into `placeorder` (id_users,product_name,product_cat,ordered_pcs,quantity_remaining,product_status,date_ordered)
	                              VALUES ('$id_users','$product_name','$product_cat','$ordered_pcs','$differnce','$product_status', '$date_ordered')";

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
                    <input name="id_users" class="input-product" type="hidden" value="<?php echo $row2["id_users"]; ?>">
                    <input type="submit" name="submit" value="Place Order" class="add-button"  />
                  </form>
              </div>
				</div>

			</div>
		<footer>Copyright 2021 © MGSON Whitening and Beauty Shop. All Rights Reserved.</footer>
	  </div>
</div><!-- Delete Products -->




<script src="../js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</div>
</body>
</html>
