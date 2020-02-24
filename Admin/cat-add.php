<?php

include("config.php");
$name = $_POST['name'];
$photo = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];

if ($photo) {
    move_uploaded_file($tmp, "covers/$photo");
}
$sql = "INSERT INTO category(name,photo,created_date,modified_date) VALUES ('" . $name . "','" . $photo . "',now(),now())";

mysqli_query($conn, $sql);

header("location: category.php");

?>