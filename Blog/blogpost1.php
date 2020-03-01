<?php
session_start();
require_once('include/header.php') ?>
    <title>FoodBlog</title>
    <link rel="stylesheet" type="text/css" href="assets/css/comment.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
    </head>
    <body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
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
                <a href="#"><img class="img-fluid" href="#" src="../Admin/covers/<?php echo $row['photo'] ?>""
                    style="margin-top: 3%;"></a>
                <p style="margin-top: 3%;"><?php echo $row['content'] ?></p>

            </div>
        </div>
        <br>
        <div class="text-center"><h4>Share this</h4></div>
        <div class="addthis_inline_share_toolbox_q3ph text-center"></div>
        <br>
        <?php
        if ($_SESSION["loginStatus"] == 1) {
            require_once('include/comment.php');
        } ?>
    </div>
</article>

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
            ]

        });
    });
</script>
<?php require_once('include/footer.php'); ?>