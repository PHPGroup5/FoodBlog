<?php
include("config.php");
$intro = $_POST['intro'];
$title = $_POST['title'];
$content = $_POST['content'];
$id = $_POST['postID'];
$category_id = $_POST['category_id'];
$photo = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
if ($title == "") {
    $title = $_POST['oldtitle'];
}
if ($intro == "") {
    $intro = $_POST['oldIntro'];
}
    $file_ext = strtolower(end(explode('.', $photo)));
    $extensions = array("jpeg", "jpg", "png", "gif");

    if (!in_array($file_ext, $extensions)) {
        header("location: table.php?msg=failed");
    } else if ($photo) {
        move_uploaded_file($tmp, "assets/img/covers/$photo");
        $sql = "UPDATE post SET cat_id='$category_id', title='$title' ,photo = '$photo', content = '$content' WHERE id= '$id' ";
        mysqli_query($conn, $sql);
        header("location: table.php?msg=success");
    }
    ?>