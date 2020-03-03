<?php
include("config.php");
$image=$_FILES["image"]["name"];
$tmp=$_FILES["image"]["tmp_name"];

if($image){
	move_uploaded_file($tmp,"covers/$image");
}

$sql="UPDATE admins SET profile_image='$image' WHERE id=1";
mysqli_query($conn,$sql);
header("location: profile.php");
?>