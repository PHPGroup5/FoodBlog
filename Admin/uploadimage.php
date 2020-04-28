<?php
session_start();
$id = $_SESSION['admin_id'];
include("config.php");
$image=$_FILES["image"]["name"];
$tmp=$_FILES["image"]["tmp_name"];
$file_ext=strtolower(end(explode('.',$image)));
$extensions= array("jpeg","jpg","png", "gif");

if(!in_array($file_ext,$extensions)){
    header("location: profile.php?msg=failed");
}
else if($image) {
    move_uploaded_file($tmp, "assets/img/avatars/$image");

    $sql = "UPDATE admins SET profile_image='$image' WHERE id='$id'";
    mysqli_query($conn, $sql);
    $_SESSION['photo'] = $image;
    header("location: profile.php");
}
?>