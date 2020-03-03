<?php
session_start();
include("config.php");
$email = $_POST['email'];
$password = $_POST['password'];
$remember=$_POST['remember'];
$sql = "SELECT * from reg where email='" . $email . "' and password='" . $password . "'";
$row = mysqli_query($conn, $sql);
$result = mysqli_num_rows($row);
$current_time = time();
$cookie_expiration_time = $current_time + (30 * 24 * 60 * 60);
if ($result == 1) {
    if (! empty($_POST["remember"]))
    {
        setcookie("member_login", $email, $cookie_expiration_time);
        setcookie("member_password", $password, $cookie_expiration_time);
        header("location: dashboard.php");
    }
    $data = mysqli_fetch_assoc($row);
    $_SESSION["loginStatus"] = 1;
    $_SESSION["user_id"] = $data["id"];
    $_SESSION["firstName"] = $data["firstName"];

    header("location: dashboard.php");
} else {
    header("location: index.php?msg=failed");
}