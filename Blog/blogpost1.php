<?php
session_start();
?>
<html>
<head>
    <title>FoodBlog</title><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Welcome to FoodBlog.">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/A-Blog-Page.css">
    <link rel="stylesheet" href="assets/css/footer-copyright_bar.css">
    <link rel="stylesheet" href="assets/css/Background-motion1-3.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/comment.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
    <style type="text/css">

        .container-fluid
        {
            align-content: center;
        }
        .container-fluid h3
        {
           padding-top: 2%;
        }        
    </style>
</head>
<body>
<?php
if ($_SESSION["loginStatus"] == 0) {
    require_once('include/navbar.php');
} else {
    require_once('include/loginNav.php');
}
include("config.php");
$_SESSION['postID'] = $_GET['id'];
$sql = "SELECT * FROM post  where id='" . $_SESSION['postID'] . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$cat=$row['cat_id'];
?>
<header class="masthead">
    <div id="example-box-Home" class="example-box">
        <div class="background-shapes"></div>
        <h1 class="text-center"><strong><?php echo $row['title'] ?></strong></h1>
    </div>
</header>
<article>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <a href="#"><img class="img-fluid" href="#" src="../Admin/assets/img/covers/<?php echo $row['photo'] ?>""
                    style="margin-top: 3%;"></a>
                <p style="margin-top: 3%;"><?php echo $row['content'] ?></p>
            </div>
        </div>
        <br>
        <?php
        if ($_SESSION["loginStatus"] == 1) {
            require_once('include/comment.php');
        } ?>
    </div>
</article>


    <div class="container-fluid">
        <h3> More Like This </h3>
        <div class="card-deck">
            
            <?php

            $result = mysqli_query($conn, "SELECT * FROM post where cat_id=$cat ORDER BY RAND() LIMIT 5");
            while ($row = mysqli_fetch_assoc($result)):
            ?>
            <div class="card" style="margin-bottom: 2%; background-color: #F7F7F7;">

              <img class="card-img-top" src="../Admin/assets/img/covers/<?php echo $row['photo'] ?>" style="width: 100%;height: 50%; ">
                <div class="card-body">
                   <a href="blogpost1.php?id=<?php echo $row['id']; ?>"> <h5 class="card-text" style="text-align: center; padding: 1%;"><?php echo $row['title']?></h5> </a>
                </div>
            </div>
            <?php endwhile; ?>
            
        </div>
    </div>

<script src="assets/js/clean-blog.js"></script>

<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            placeholder: 'Leave a comment',
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ],
            disableResizeEditor: true
        });
    });
</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e046d39c114b46f"></script>
<?php require_once('include/footer.php'); ?>
