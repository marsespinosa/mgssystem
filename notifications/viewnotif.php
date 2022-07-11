<?php //include("../auth_admin.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Messages</title>
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
	<link rel="stylesheet" type="text/css" href="style.css" />
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

	<!-- <a href="../dashboard/index.php"><img src="../images/logo.png" class="img-fluid" alt="Dashboard"></a> -->

	<div id="dashboard-wrapper" class="container">
	  <div class="row">
			<div class="col-sm-4">
				<h2 class="admin-ht2" style="border-bottom: none;"><?php //echo $_SESSION['adminusername']; ?></h2>

				<ul class="nav-menu-side">
					<li><a href="../dashboard/index.php">Dashboard</a></li>
					<li><a href="/humanresource/index.php">Human Resources</a></li>
					<li><a href="../products/index.php">Products</a></li>
					<li><a href="index.php">Messages</a></li>
					<li><a href="../notifications/index.php" class="active-menu">Notifications</a></li>
					<li><a href="../settings/index.php">Settings</a></li>
				</ul>

				<p class="logout-btm"><a href="../logout.php">Logout</a></p>
			</div>

			<div class="col-sm-8">
				<h2>View Notification Messages</h2>

				<div class="row data-tables-prod">
					<div class="col">
						<?php
							require('../db.php');

							$id_users = $_REQUEST['id_users'];
							$querdprod = "SELECT * from contactus where id_users='".$id_users."' ";
							$resuldel = mysqli_query($con, $querdprod) or die ( mysqli_error());

							if($row = mysqli_fetch_assoc($resuldel))
						?>

						<input name="id_users" type="hidden" value="<?php echo $row["id_users"]; ?>" />
						<p><strong>Name:</strong> <?php echo $row['name'];?></p>
						<p><strong>Email:</strong> <?php echo $row['email'];?> | <strong>Phone:</strong> <?php echo $row['phone'];?></p>
			      <p><strong>Department:</strong> <?php echo $row['department'];?></p>
	        	<p><strong>Subject:</strong> <?php echo $row['subject'];?></p>
			      <p><strong>Message:</strong> <?php echo $row['comments'];?></p>
						<p><strong>created_date:</strong> <?php echo $row['created_date'];?></p>
						<p><a href="delete.php?id_users=<?php echo $row["id_users"]; ?>">Delete</a></p>
					</div>
				</div>
			</div>
	  </div>
	</div><!-- Delete Products -->
</body>
</html>