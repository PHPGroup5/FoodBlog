<?php

include("config.php");
$name=$_POST['name'];
$sql = "INSERT INTO category(name,created_date,modified_date) VALUES ('".$name."',now(),now())";

mysqli_query($conn,$sql);

header("location: category.php");

?>