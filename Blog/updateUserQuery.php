<?php
session_start();
    include("config.php");
    $email = $_POST['email'];
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $password = $_POST['password'];
    $confirm_pw = $_POST['confirmpassword'];
    if ($password != $confirm_pw) {
        header("location: updateUser.php?msg=differentpw");
    } else {
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
        $id = $_SESSION['user_id'];

        $sql = "UPDATE reg SET firstname='$firstname' , lastname='$lastname',password = '$password',modified_date = now() WHERE id= '$id' ";
        mysqli_query($conn, $sql);
        $_SESSION["firstName"] = $firstname;
        header("location: updateUser.php?msg=success");
    }
?>