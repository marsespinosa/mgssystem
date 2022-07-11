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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

  <label for="ctmbtn" class="icon1">
    <span class="fa fa-bars"></span>
  </label>
  <input type="checkbox" id="ctmbtn" class="btnctm">

	<div id="dashboard-wrapper" class="container">
	  <div class="row">
		<div class="col-sm-4 ctmdiv2">
			<h2 class="admin-ht2" style="border-bottom: none;"><?php //echo $_SESSION['adminusername']; ?></h2>
		<ul class="nav-menu-side ctmnav2">
			<li><a href="../dashboard/index.php">Dashboard</a></li>
			<li><a href="../humanresource/index.php">Human Resources</a></li>
			<li><a href="../products/index.php">Products</a></li>
			<li><a href="../messages/index.php">Messages</a></li>
			<li><a href="index.php" class="active-menu">Notifications</a></li>
			<li><a href="../settings/index.php">Settings</a></li>
		</ul>
		<p class="logout-btm"><a href="../logout.php">Logout</a></p>
		</div>
		<div class="col-sm-8">
			<h2>From Depot</h2>
			<div class="row row-cols-4 product-nav">
			</div>
		<div class="row data-tables-prod">
			<div class="col ctmta">
        <table class='table table-striped table-hover' >
         <thead>
             <tr>
               <th scope='col'>Name</th>
               <th scope='col'>Email</th>
               <th scope='col'>View</th>
               <th scope='col'>Delete</th>
               </tr>
           </thead>
           <tbody>
           <?php
            require('../db.php');

            /*$sel_query = "SELECT contactus.id_conts, contactus.name, contactus.email, contactus.department, contactus.phone, contactus.created_date,  depotusers.depot_name
            FROM contactus
            INNER JOIN depotusers ON contactus.id_conts = depotusers.id_users";*/

            $sel_query = "SELECT * FROM contactus INNER JOIN depotusers ON contactus.id_users = depotusers.id_users";

            $resultasc = mysqli_query($con,$sel_query);

            if($row = mysqli_fetch_assoc($resultasc)) { ?>
              <!-- <?php echo $row["name"]; ?> -->
              <tr>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><a href="viewnotif.php?id_users=<?php echo $row["id_users"]; ?>">View</a></td>
                <td><a href="delete.php?id_users=<?php echo $row["id_users"]; ?>">Delete</a></td>
              </tr>
            <?php }?>

          </tbody>
        </table>

			</div>

    </div>

      <h2>From Applicants</h2>

	
	<h4>Distributor</h4>
      <div class="row data-tables-prod">
  			<div class="col ctmta">
          <table class='table table-striped table-hover' >
           <thead>
               <tr>
                 <th scope='col'>Name</th>
                 <th scope='col'>Email</th>
                 <th scope='col'>View</th>
                 <th scope='col'>Delete</th>
                 </tr>
             </thead>
             <tbody>
             <?php
              require('../db.php');

              $sel_query = "SELECT distributor.distributor_id, distributor.applicantname, distributor.email, distributor.datecreated,  depotusers.depot_name
              FROM distributor
              INNER JOIN depotusers ON distributor.distributor_id = depotusers.id_users";

              $resultasc = mysqli_query($con,$sel_query);
              if($row = mysqli_fetch_assoc($resultasc)) { ?>
                <tr>
                  <td><?php echo $row["depot_name"]; ?></td>
                  <td><?php echo $row["email"]; ?></td>
                  <td><a href="view.php?distributor_id=<?php echo $row["distributor_id"]; ?>">View</a></td>
                  <td><a href="delete.php?distributor_id=<?php echo $row["distributor_id"]; ?>">Delete</a></td></tr>
              <?php }?>

            </tbody>
          </table>

  			</div>

      </div>
	  
	  <h4>Seller</h4>
      <div class="row data-tables-prod">
  			<div class="col ctmta">
          <table class='table table-striped table-hover' >
           <thead>
               <tr>
                 <th scope='col'>Name</th>
                 <th scope='col'>Email</th>
                 <th scope='col'>View</th>
                 <th scope='col'>Delete</th>
                 </tr>
             </thead>
             <tbody>
             <?php
              require('../db.php');

              $sel_query = "SELECT sellerform.sellerform_id, sellerform.applicantname, sellerform.email, sellerform.datecreated,  depotusers.depot_name
              FROM sellerform
              INNER JOIN depotusers ON sellerform.sellerform_id = depotusers.id_users";

              $resultasc = mysqli_query($con,$sel_query);
              if($row = mysqli_fetch_assoc($resultasc)) { ?>
                <tr>
                  <td><?php echo $row["depot_name"]; ?></td>
                  <td><?php echo $row["email"]; ?></td>
                  <td><a href="view.php?sellerform_id=<?php echo $row["sellerform_id"]; ?>">View</a></td>
                  <td><a href="delete.php?sellerform_id=<?php echo $row["sellerform_id"]; ?>">Delete</a></td></tr>
              <?php }?>

            </tbody>
          </table>

  			</div>
			
	<h4>Sub-Seller</h4>
      <div class="row data-tables-prod">
  			<div class="col ctmta">
          <table class='table table-striped table-hover' >
           <thead>
               <tr>
                 <th scope='col'>Name</th>
                 <th scope='col'>Email</th>
                 <th scope='col'>View</th>
                 <th scope='col'>Delete</th>
                 </tr>
             </thead>
             <tbody>
             <?php
              require('../db.php');

              $sel_query = "SELECT subform.subform_id, subform.applicantname, subform.email, subform.datecreated,  depotusers.depot_name
              FROM subform
              INNER JOIN depotusers ON subform.subform_id = depotusers.id_users";

              $resultasc = mysqli_query($con,$sel_query);
              if($row = mysqli_fetch_assoc($resultasc)) { ?>
                <tr>
                  <td><?php echo $row["depot_name"]; ?></td>
                  <td><?php echo $row["email"]; ?></td>
                  <td><a href="view.php?subform_id=<?php echo $row["subform_id"]; ?>">View</a></td>
                  <td><a href="delete.php?subform_id=<?php echo $row["subform_id"]; ?>">Delete</a></td></tr>
              <?php }?>

            </tbody>
          </table>

  			</div>

      </div>
	  
	  

        <h2>Renewals</h2>

        <div class="row data-tables-prod">
    			<div class="col ctmta">
            <table class='table table-striped table-hover' >
             <thead>
                 <tr>
                   <th scope='col'>Name</th>
                   <th scope='col'>Email</th>
                   <th scope='col'>View</th>
                   <th scope='col'>Delete</th>
                   </tr>
               </thead>
               <tbody>
               <?php
                require('../db.php');

                /*$sel_query = "SELECT contactus.id_conts, contactus.name, contactus.email, contactus.department, contactus.phone, contactus.created_date,  depotusers.depot_name
                FROM contactus
                INNER JOIN depotusers ON contactus.id_conts = depotusers.id_users";*/

                $sel_query = "SELECT * FROM contactus INNER JOIN depotusers ON contactus.id_users = depotusers.id_users";

                $resultasc = mysqli_query($con,$sel_query);

                if($row = mysqli_fetch_assoc($resultasc)) { ?>
                  <tr>
                    <td><?php echo $row["depot_name"]; ?></td>
                    <td><?php echo $row["depot_email"]; ?></td>
                    <td><a href="viewrenewals.php?id_users=<?php echo $row["id_users"]; ?>">View</a></td>
                    <td><a href="delete.php?id_conts=<?php echo $row["id_users"]; ?>">Delete</a></td></tr>
                <?php }?>

              </tbody>
            </table>

    			</div>

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
</div>



</body>
</html>
