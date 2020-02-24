<?php
session_start(); ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="Welcome to FoodBlog.">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/-Team-Rotating-Cards-BS4-.css">
        <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
        <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
        <link rel="stylesheet" href="assets/css/Background-motion1.css">
        <link rel="stylesheet" href="assets/css/Background-motion1-1.css">
        <link rel="stylesheet" href="assets/css/Background-motion1-2.css">
        <link rel="stylesheet" href="assets/css/A-Blog-Page.css">
        <link rel="stylesheet" href="assets/css/footer-copyright_bar.css">
        <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
        <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
        <link rel="stylesheet" href="assets/css/Animated-Menu-Icon.css">
        <link rel="stylesheet" href="assets/css/Background-motion1-3.css">
        <link rel="stylesheet" href="assets/bootstrap.min.css">
        <title>Categories - Taste the Joy</title>
    </head>

<body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<?php
if ($_SESSION["loginStatus"] == 0) {
    require_once('include/navbar.php');
} else
    require_once('include/loginNav.php'); ?>
<header class="masthead">
    <div id="example-box-Category" class="example-box">
        <h1 class="text-center"><strong>Categories</strong></h1><span
                class="text-center subheading"><br>Choose your favourite Category!<br><br></span>
        <div class="background-shapes"></div>
    </div>
</header>
<section id="portfolio" class="bg-light">
    <div class="container">
        <div class="row">
            <?php
            include("config.php");
            $result = mysqli_query($conn, "SELECT * FROM category ORDER BY created_date DESC");

            while ($row = mysqli_fetch_assoc($result)):
                ?>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-external-link fa-3x"></i></div>
                        </div>
                        <img class="img-fluid " src="../Admin/covers/<?php echo $row['photo'] ?>"></a>
                    <div class="portfolio-caption">
                        <h4><?php echo $row['name'] ?></h4>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<script src="assets/js/agency.js"></script>
<?php require_once('include/footer.php'); ?>