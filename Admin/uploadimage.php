<?php
session_start();
$id = $_SESSION['admin_id'];
include("config.php");
$image=$_FILES["image"]["name"];
$tmp=$_FILES["image"]["tmp_name"];

if($image){
	move_uploaded_file($tmp,"covers/$image");
}

$sql="UPDATE admins SET profile_image='$image' WHERE id='$id'";
mysqli_query($conn,$sql);
$_SESSION['photo'] = $image;
header("location: profile.php");
?>