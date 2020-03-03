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
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <title>Categories - Taste the Joy</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
                    <a class="portfolio-link" href="categoryDetail.php?id=<?php echo $row['id']?>">
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
<script src="assets/js/agency.js"></script><footer>
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
            <div><i class="fa fa-phone footer-contacts-icon" style="margin-left: -73px;"></i>
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
            <p><br>This is our college project in PHP. In this website, you can read reviews about the restaurants in
                Yangon.&nbsp;<br><br></p>
            <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i
                            class="fa fa-github"></i></a></div>
        </div>
    </div>
    <p class="text-center company-name" style="font-size: 12px;"><br>Copyright © 2020 Group 5. All rights
        reserved.<br><br></p>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/clean-blog.js"></script>
</body>

</html>