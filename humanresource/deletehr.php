<?php

require('../db.php');
$id_admin = $_REQUEST['id_admin'];
$query = "DELETE FROM adminusers WHERE id_admin = '" . $id_admin . "'";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: index.php");
?>
