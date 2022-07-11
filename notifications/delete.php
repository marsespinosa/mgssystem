<?php

require('../db.php');
$id_conts=$_REQUEST['id_conts'];
$querydel= "DELETE FROM contactus WHERE id_conts=$id_conts";
$resultdel = mysqli_query($con,$querydel) or die ( mysqli_error());
header("Location: index.php");
?>
