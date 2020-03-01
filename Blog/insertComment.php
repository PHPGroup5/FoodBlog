<?php
session_start();
include("config.php");
$commentBody = $_POST['content'];

$sql = "INSERT INTO comment(content) VALUES('".$commentBody."')";
mysqli_query($conn, $sql);

$userID = $_SESSION["user_id"];
$postID = $_SESSION['postID'];
$last_id = mysqli_insert_id($conn);

$query = "INSERT INTO user_comment_post VALUES ('".$last_id."','".$userID."','".$postID."')";
mysqli_query($conn, $query);
header("location: blogpost1.php?id=". $_SESSION['postID']);
?>