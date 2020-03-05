<?php
session_start();
if (isset($_POST['submit'])) {
    include("config.php");
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $confirm_pw = $_POST['confirm_pw'];
    if($password!=$confirm_pw)
    {
        header("location: profile.php?msg=differentpw");
    }
    else{
        if ($firstname == "") {
            $firstname = $_POST['oldfirstname'];
        }
        if ($lastname == "") {
            $lastname = $_POST['oldlastname'];
        }
        if ($email == "") {
            $email = $_POST['oldEmail'];
        }
        if ($password == "") {
            $password = $_POST['oldPassword'];
        }
        $id = $_SESSION['admin_id'];


        $sql = "UPDATE admins SET email='$email', firstname='$firstname' , lastname='$lastname',password = '$password' WHERE id= '$id' ";
        mysqli_query($conn, $sql);
        echo mysqli_error($conn);
        header("location: profile.php?msg=success");
    }
}
?>