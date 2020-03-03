<?php
session_start();
$_SESSION["loginStatus"]=0;
header("location: dashboard.php");
?>