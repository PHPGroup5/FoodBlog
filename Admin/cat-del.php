<?php

include("config.php");
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM category WHERE id=$id");
header("location: category.php");
?>