<?php

include("config.php");

$title = $_POST['title'];
$intro = $_POST['intro'];
$content = $_POST['content'];
$category_id = $_POST['category_id'];
$photo = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
$file_ext = strtolower(end(explode('.', $photo)));
$extensions = array("jpeg", "jpg", "png", "gif");

if (!in_array($file_ext, $extensions)) {
    header("location: table.php?msg=failed");
} else if ($photo) {
    move_uploaded_file($tmp, "assets/img/covers/$photo");
    $sql = "INSERT INTO post(title,cat_id,photo,intro,content,created_date,modified_date) VALUES('$title','$category_id','$photo','$intro','$content',now(),now())";
    mysqli_query($conn, $sql);

    header("location: table.php");
}
?>