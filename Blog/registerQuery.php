<?php
include("config.php");
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['confirmpassword'];
$sql = "INSERT INTO reg (firstName,lastName,email,password,createdDate,modifiedDate) VALUES ('" . $firstName . "','" . $lastName . "','" . $email . "','" . $password . "',now(),now())";
mysqli_query($conn, $sql);
if (mysqli_error($conn)) {
    header("location: register.php?msg=failed");
}
if($password!=$cpassword)
{
    header("location: register.php?msg=differentpw");
}else{
    header("location: login.php?msg=success");
}
?>