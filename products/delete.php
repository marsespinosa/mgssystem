<?php

require('../db.php');
$id_product=$_REQUEST['id_product'];
$querydel= "DELETE FROM products WHERE id_product=$id_product";
$resultdel = mysqli_query($con,$querydel) or die ( mysqli_error());
header("Location: index.php");
?>
