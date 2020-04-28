<?php

include("config.php");
$name = $_POST['name'];
$photo = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
$file_ext = strtolower(end(explode('.', $photo)));
$extensions = array("jpeg", "jpg", "png", "gif");

if (!in_array($file_ext, $extensions)) {
    header("location: category.php?msg=failed");
} else if ($photo) {
    move_uploaded_file($tmp, "assets/img/category/$photo");

    $sql = "INSERT INTO category(name,photo,created_date,modified_date) VALUES ('" . $name . "','" . $photo . "',now(),now())";

    mysqli_query($conn, $sql);

    header("location: category.php");
}
?>