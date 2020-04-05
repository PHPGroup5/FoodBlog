<?php
$dbhost = "localhost";
$dbuser = "iyzfzuaz_foodblog";
$dbpass = "Admin12345";
$dbname = "iyzfzuaz_foodblog";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($conn, $dbname);
?>