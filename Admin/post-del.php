<?php

include("config.php");
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM post WHERE id=$id");
header("location: table.php");
?>