<?php

session_start();
$_SESSION["adminLoginStatus"]=0;
header("location: index.php");

?>