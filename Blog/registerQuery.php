<?php
include("config.php");
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO reg (firstName,lastName,email,password,createdDate,modifiedDate) VALUES ('" . $firstName . "','" . $lastName . "','" . $email . "','" . $password . "',now(),now())";
mysqli_query($conn, $sql);

header("location: login.php");
?>