<?php
 //include("../auth_depot.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Orders</title>
  <link rel="fav icon" type="image/png" href="./../../images/favicon.png">
   <link rel="stylesheet" type="text/css" href="./../../css/bootstrap.css" />
	<link href="./../../css/bootstrap.min.css" rel="stylesheet">
	<link href="./../../css/modals.css" rel="stylesheet">
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
	 <link rel="stylesheet" type="text/css" href="./../../css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="./../../style.css" rel="stylesheet" />
	<link href="./../style.css" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="ctml">
      <a href="index.php"><img src="./../../images/logo.png" class="img-fluid logo" alt="Dashboard"></a>

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
  			<a href="index.php"><img src="./../images/profileavatar.png" class="mb-4 clientavatar" alt="client"/></a>
          <ul class="nav-menu-side withicons">
          <li><a href="./../myproducts.php">My Products</a></li>
          <li><a href="./../myorder.php" class="active-menu">My Orders</a></li>
          <li><a href="./../mycontract.php">My Contract</a></li>
          </ul>
        <p class="logout-btm"><a href="contact.php">Help?</a></p>
  		</div>

  		<div class="col-sm-8 product-data">
  			<div class="data-my-product">
  				<h2>My Orders</h2>
  				<ul class="myproducts">
  						<li><a class="btn btn-primary btn-dashboard" href="./../myorder.php" role="button">Unpaid</a></li>
  						<li><a class="btn btn-primary btn-dashboard" href="#" role="button">Processing</a></li>
  						<li><a class="btn btn-primary btn-dashboard" href="#" role="button">Shipped</a></li>
  						<li><a class="btn btn-primary btn-dashboard active" href="orderreceived.php" role="button">Received</a></li>
  				</ul>
  				<h2>Order Received</h2>
  				<div class="row info-order">

            <table class='table table-striped table-hover' >
    					<tbody>
                <?php
                  require('./../../db.php');
                  $id = $_GET['placeorder_id'];

                  $sql = "SELECT * FROM placeorder where placeorder_id=' ". $id ." '";
                  $result = $con->query($sql);

                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo "
                      <div class='productdetails'><h4>Placeorder ID: " . $row["placeorder_id"]. "</h4></div>
                      <div><strong>Product Name:</strong> ".$row["product_name"]."</div>
                      <div><strong>Product Category:</strong> " . $row["product_cat"]. "</div>
                      <div><strong>Ordered Pcs: </strong> " . $row["ordered_pcs"]. "</div>
                      <div><strong>Quantity Remaining: </strong> " . $row["quantity_remaining"]. "</div>
                      <div><strong>Product Status: </strong> " . $row["product_status"]. "</div>
                      <div><strong>Date Ordered: </strong> " . $row["date_ordered"]. "</div>";
                     }
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
