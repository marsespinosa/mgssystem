<?php
 // include("../auth_depot.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Contract</title>
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
    				<li><a href="myproducts.php">My Products</a></li>
    				<li><a href="myorder.php">My Orders</a></li>
    				<li><a href="mycontract.php" class="active-menu">My Contract</a></li>
    			  </ul>
          <p class="logout-btm"><a href="contact.php">Help?</a></p>
    		</div>
    		<div class="col-sm-8 product-data">
    			<div class="data-my-product" style="border-bottom: none;">
    				<h2>My Contract</h2>
            <iframe src="https://mgsonsys.mgsonwhiteningandbeatyshop.com/uploads/Contract.pdf" width="90%" height="500px"></iframe>
            
          </div>

          <div class="data-my-product" style="margin-top: 40px;">
            <a href="#" class="btn btn-info floatrightbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Renew</a>
          </div>

          <?php
            session_start();
            $currentuser = isset($_SESSION['username']) ? $_SESSION['username'] : '';
            $con = mysqli_connect('localhost','root','','mgson') or die('Unable To connect');

            $depdb = "SELECT * FROM depotusers WHERE username='" . $currentuser ."'";
            $depotdata = mysqli_query($con, $depdb);

            $row = mysqli_fetch_assoc($depotdata);
          ?>
          <footer>Copyright 2021 © MGSON Whitening and Beauty Shop. All Rights Reserved.</footer>
    	  </div>
    </div><!-- Delete Products -->
  </div>


<!-- ModalBox Add Product -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Renewals</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        require('../db.php');
        $status = "";
        if(isset($_POST['new']) && $_POST['new']==1)
        {
        $id_users = $_POST['id_users'];
        $depot_name = $_POST['depot_name'];
        $depot_email = $_POST['depot_email'];
        $depot_contractnumber	 = $_POST['depot_contractnumber'];
        $create_datetimedep = date('Y-m-d H:i:s');
        $renewaldate = date('Y-m-d H:i:s');

        $updated="UPDATE depotusers SET depot_name='".$depot_name."',depot_email='".$depot_email."', depot_contractnumber='".$depot_contractnumber."',
        create_datetimedep='".$create_datetimedep."',renewaldate='".$renewaldate."' where id_users='".$id_users."'";

        mysqli_query($con, $updated) or die(mysqli_error());

        $status = "<div class='record-updated'>Notify Admin. </br></br><a href='mycontract.php'>View Updated Record</a>";
        echo '<p style="color:#FF0000;">'.$status.'</p></div>';
        } else {
        ?>

      <form class="form checkbtn" action="" method="post">
        <input type="hidden" name="new" value="1" />
        <input name="id_users" type="hidden" value="<?php echo $row['id_users'];?>" />
        <input type="text" class="input-product ctm" name="depot_name" value="<?php echo $row['depot_name'];?>" required>
        <input type="text" class="input-product ctm" name="depot_email"  value="<?php echo $row['depot_email'];?>" placeholder="Product Description" required>
        <input type="text" class="input-product ctm" name="depot_contractnumber" value="<?php echo $row['depot_contractnumber'];?>" required>
        <input type="date" class="input-product" name="create_datetimedep" value="<?php echo $row['create_datetimedep'];?>" required>
        <input type="date" class="input-product" name="renewaldate" required>
        <div class="form-check">
          <input class="form-check-input" name="termscondition" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">Terms and Condition</label>
        </div>
        <input name="submit" type="submit" value="Renew" />
      </form>

		<!-- </form> -->
    	<?php } ?>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div><!-- ModalBox Add Product -->
</div>
</body>
</html>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>