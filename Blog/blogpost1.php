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
<footer>
    <div class="row">
        <div class="col-sm-6 col-md-4 text-center footer-navigation">
            <h3><a href="#">Taste the Joy</a></h3>
            <p class="links"><a href="index.php">Home</a><strong> · </strong><a href="about.php">About</a><strong>
                    · </strong><a href="login.html">Login</a><strong> · </strong><a href="register.php">Register</a></p>
        </div>
        <div class="col-sm-6 col-md-4 footer-contacts">
            <div><span class="fa fa-map-marker footer-contacts-icon"
                       style="margin-bottom: 0px;margin-top: 10px;"> </span>
                <p style="margin-top: 10px;"><span class="new-line-span" style="font-size: 12px;"><a
                                class="footerContents" href="https://goo.gl/maps/13yrnrAeLwyFL41b6" target="_blank">University of Information Technology</a></span>Yangon,
                    Myanmar</p>
            </div>
            <div><i class="fa fa-phone footer-contacts-icon"></i>
                <p class="footer-center-info email text-left" style="margin-top: 10px;"> +959426564404</p>
            </div>
            <div><i class="fa fa-envelope footer-contacts-icon"></i>
                <p style="margin-top: 10px;"><a class="footerContents" href="https://outlook.office365.com/owa/"
                                                target="_blank">heinkhantzaw@uit.edu.mm</a></p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-4 footer-about">
            <h4>About the website</h4>
            <p><br>This is our college project in PHP. In this website, you can read everything about food.&nbsp;<br><br></p>
            <div class="social-links social-icons">
                <a href="https://www.facebook.com/hein.zaw.9028"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/hein-zaw-66901b195/"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com/PHPGroup5/FoodBlog/tree/master"><i class="fa fa-github"></i></a></div>
        </div>
    </div>
    <p class="text-center company-name" style="font-size: 12px;"><br>Copyright © 2020 Group 5. All rights
        reserved.<br><br></p>
</footer>
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

</body>
</html>