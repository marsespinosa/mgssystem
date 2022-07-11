<?php

require('../db.php');
$id_product=$_REQUEST['id_product'];
$queryfnc = "DELETE FROM products WHERE id_product=$id_product";
$resultfunc = mysqli_query($con,$queryfnc) or die ( mysqli_error());
header("Location: product-orders.php");
?>
