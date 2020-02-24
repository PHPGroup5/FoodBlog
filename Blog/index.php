<?php
session_start();
require_once('include/header.php') ?>
    <title>Home - Taste the Joy</title>
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
    <div id="example-box-Home" class="example-box">
        <div class="background-shapes"></div>
        <h1 class="text-center"><strong>Welcome to Taste the Joy</strong></h1>
    </div>
</header>
<div class="container">
    <div class="block-heading"></div>
    <div class="block-content" style="padding: 80px;">
        <div class="clean-blog-post" style="padding-bottom: 70px;">
            <div class="row">
                <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/Sample.png"></div>
                <div class="col-lg-7">
                    <h3>Imperial Garden Seafood</h3>
                    <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a
                                    href="blogpost1.php">John Smith</a></span></div>
                    <p>Today We are going to introduce the review of Imperial Garden Rose Garden Hotel.It offers two
                        types of Menu, Al La Carte Buffet and A La Carte Menu. Al La Carte Buffet is available for Lunch
                        and Dinner. For adult 16,000ks+ and for child 10,000ks+ . The time limit is 2 hours.</p>
                    <button class="btn btn-outline-primary btn-sm" type="button"><a href="blogpost1.php">Read More</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="clean-blog-post" style="padding-bottom: 70px;">
            <div class="row">
                <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/Astons.png"></div>
                <div class="col-lg-7">
                    <h3>Lorem Ipsum dolor sit amet</h3>
                    <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,
                        mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna,
                        dignissim nec auctor in, mattis vitae
                        leo.</p>
                    <button class="btn btn-outline-primary btn-sm" type="button">Read More</button>
                </div>
            </div>
        </div>
        <div class="clean-blog-post" style="padding-bottom: 70px;">
            <div class="row">
                <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/Sample.png"></div>
                <div class="col-lg-7">
                    <h3>Lorem Ipsum dolor sit amet</h3>
                    <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,
                        mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna,
                        dignissim nec auctor in, mattis vitae
                        leo.</p>
                    <button class="btn btn-outline-primary btn-sm" type="button">Read More</button>
                </div>
            </div>
        </div>
        <div class="clean-blog-post">
            <div class="row">
                <div class="col-lg-5"><img class="rounded img-fluid" href="#" src="assets/img/Astons.png"></div>
                <div class="col-lg-7">
                    <h3>Lorem Ipsum dolor sit amet</h3>
                    <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,
                        mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna,
                        dignissim nec auctor in, mattis vitae
                        leo.</p>
                    <button class="btn btn-outline-primary btn-sm" type="button">Read More</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('include/footer.php'); ?>