<?php

include("config.php");

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$photo = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
$file_ext=strtolower(end(explode('.',$photo)));
$extensions= array("jpeg","jpg","png", "gif");

if(!in_array($file_ext,$extensions)){
    header("location: register.php?msg=failed");
}
else {
    move_uploaded_file($tmp, "covers/$photo");
    $sql = "INSERT INTO admins(firstname,lastname,email,password,profile_image,created_date,modified_date) VALUES('$firstName','$lastName','$email','$password','$photo',now(),now())";
    mysqli_query($conn, $sql);
    header("location: login.php");
}
?>