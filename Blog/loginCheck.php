<?php
session_start();
include("config.php");
$email = $_POST['email'];
$password = $_POST['password'];
$remember=$_POST['remember'];
$sql = "SELECT * from reg where email='" . $email . "' and password='" . $password . "'";
$row = mysqli_query($conn, $sql);
$result = mysqli_num_rows($row);
if ($result == 1) {
    $data = mysqli_fetch_assoc($row);
    $_SESSION["loginStatus"] = 1;
    $_SESSION["user_id"] = $data["id"];
    $_SESSION["firstName"] = $data["firstName"];

    header("location: index.php");
} else {
    header("location: login.php?msg=failed");
}