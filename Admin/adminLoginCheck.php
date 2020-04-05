<?php
session_start();
include("config.php");
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * from admins where email='" . $email . "' and password='" . $password . "'";
$row = mysqli_query($conn, $sql);
$result = mysqli_num_rows($row);
if ($result == 1) {
    $data = mysqli_fetch_assoc($row);
    $_SESSION["adminLoginStatus"] = 1;
    $_SESSION["admin_id"] = $data["id"];
    $_SESSION["adminFirstName"] = $data["firstname"];
    $_SESSION["adminLastName"] = $data["lastname"];
    $_SESSION["password"] = $data["password"];
    $_SESSION["photo"] = $data['profile_image'];

    header("location: dashboard.php");
} else {
    header("location: index.php?msg=failed");
}