<?php
include("config.php");
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['confirmpassword'];
$validpw = $_POST['validpassword'];
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
if (mysqli_error($conn)) {
    header("location: register.php?msg=failed");
}

else if($password!=$cpassword)
{
    header("location: register.php?msg=differentpw");
}else if(strlen($password)<8 || !$uppercase || !$lowercase || !$number)
{
    header("location: register.php?msg=invalidpw");
}
else{
    $sql = "INSERT INTO reg (firstName,lastName,email,password,createdDate,modifiedDate) VALUES ('" . $firstName . "','" . $lastName . "','" . $email . "','" . $password . "',now(),now())";
    mysqli_query($conn, $sql);
    header("location: login.php?msg=success");
}
?>