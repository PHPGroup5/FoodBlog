<?php

include ("config.php");
$name = $_POST['name'];
$id=$_POST['id'];
$sql = "UPDATE category SET name = '".$name."' , modified_date = NOW() WHERE id = '".$id."'";
$result = mysqli_query($conn,$sql);
header("location: category.php");
?> 
