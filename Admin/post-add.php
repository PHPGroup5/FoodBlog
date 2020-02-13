<?php

include("config.php");

$title = $_POST['title'];
$content = $_POST['content'];
$category_id = $_POST['category_id'];
$photo = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];

if ($photo) {
    move_uploaded_file($tmp, "covers/$photo");
}

$sql = "INSERT INTO post(title,cat_id,photo,content,created_date,modified_date) VALUES('$title','$category_id','$photo','$content',now(),now())";
mysqli_query($conn, $sql);

header("location: table.php");

?>