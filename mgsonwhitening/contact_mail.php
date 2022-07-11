<?php
$toEmail = "cilleEspinosa26@gmail.com";
$mailHeaders = "From: " . $_POST['name'] . "<". $_POST['email'] .">\r\n";
$body = htmlspecialchars($_POST['comments']);

if(mail($toEmail,$body,$_POST["phone"],$mailHeaders)) {

echo"<p class='success'>Contact Mail Sent.</p>";
} else {

echo"<p class='Error'>Problem in Sending Mail.</p>";
}
?>
