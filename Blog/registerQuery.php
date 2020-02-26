<?php
include("config.php");
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$slquery = "SELECT 1 FROM register WHERE email = '$email'";
$selectresult = mysqli_query($slquery);
if(mysqli_num_rows($selectresult)>0)
{
    die('email already exists');
}

$sql = "INSERT INTO reg (firstName,lastName,email,password,createdDate,modifiedDate) VALUES ('" . $firstName . "','" . $lastName . "','" . $email . "','" . $password . "',now(),now())";
mysqli_query($conn, $sql);

header("location: login.php");
?>