<?php
    if (isset($_POST['submit'])) {
        include("config.php");
        $email=$_POST['email'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $password=$_POST['password'];
        

       	$sql = "UPDATE admins SET email='$email', firstname='$firstname' , lastname='$lastname',password = '$password' WHERE id= 1 ";
		mysqli_query($conn,$sql);
        header("location: profile.php");
    }
    ?>