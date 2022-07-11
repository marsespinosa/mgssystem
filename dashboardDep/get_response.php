<?php
require_once("../db.php");
if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email'])&& $_POST['email'] !=''))
{
require_once("contact_mail.php");

$yourName = $con->real_escape_string($_POST['name']);
$yourEmail = $con->real_escape_string($_POST['email']);
$department  = mysqli_real_escape_string($con, $_POST['department']);
$subject = $con->real_escape_string($_POST['subject']);
$yourPhone = $con->real_escape_string($_POST['phone']);
$comments = $con->real_escape_string($_POST['comments']);
$depotid = $con->real_escape_string($_POST['id_users']);
$created_date = date('Y-m-d H:i:s');

$sql="INSERT INTO contactus (id_users,name,email,department,subject,phone,comments,created_date) VALUES ('".$depotid."','".$yourName."','".$yourEmail."','".$department."','".$subject."','".$yourPhone."','".$comments."','".$created_date."')";

if(!$result = $con->query($sql)){
die('There was an error running the query [' . $con->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>
