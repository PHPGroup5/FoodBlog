<?php
//session_start();
include("config.php");
$email = $_POST['email'];
$password = $_POST['password'];
$sql="SELECT * from reg where email='". $email ."' and password='".$password."'";
$row= mysqli_query($conn, $sql);
//$_SESSION['firstName'] = $row['firstName'];
$result=mysqli_num_rows($row);
if($result==1)
{
    header("location: index.php");
}
else
    echo "fail";