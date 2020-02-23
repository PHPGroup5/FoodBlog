<?php require_once('include/header.php') ?>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <title>Categories - Taste the Joy</title>
    </head>

    <body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>


<?php require_once('include/navbar.php') ?>
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

while($row=mysqli_fetch_assoc($result)):
    ?>
            <div class="col-sm-6 col-md-4 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-external-link fa-3x"></i></div>
                    </div><img class="img-fluid " src="../Admin/covers/<?php echo $row['photo'] ?>"></a>
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