<?php
    include("config.php");
    $title = $_POST['title'];
    $content = $_POST['content'];
    $id = $_POST['postID'];
    $category_id = $_POST['category_id'];
    $photo = $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];
        if ($title == "") {
            $title = $_POST['oldtitle'];
        }
    if ($photo) {
        move_uploaded_file($tmp, "covers/$photo");
    }
        $sql = "UPDATE post SET cat_id='$category_id', title='$title' ,photo = '$photo', content = '$content' WHERE id= '$id' ";
        mysqli_query($conn, $sql);
header("location: table.php?msg=success");
?>