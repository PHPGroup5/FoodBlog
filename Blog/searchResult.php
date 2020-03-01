<?php require_once('include/header.php') ?>
<title>Contact us - FoodBlog</title>
</head>

<body>
<header class="masthead">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <?php require_once('include/navbar.php') ?>
    <div id="example-box-reg" class="example-box">
        <div class="background-shapes"></div>
        <h1 class="text-center"><strong>Results</strong></h1>
    </div>
</header>
<div class="container">
    <div class="block-content" style="padding: 80px;">
        <?php
        include("config.php");
        $search = $_POST["search"];
        $sql = "SELECT * from post where title LIKE '" . $search . "'";
        $row = mysqli_query($conn, $sql);
        $result = mysqli_num_rows($row);
        if ($result) {
            while ($data = mysqli_fetch_assoc($row)):
                ?>
                <div class="clean-blog-post" style="padding-bottom: 70px;">
                    <div class="row">
                        <div class="col-lg-5"><img class="rounded img-fluid" src="../Admin/covers/<?php echo $data['photo'] ?>"></div>
                        <div class="col-lg-7">
                            <h3><?php echo $data['title']?></h3>
                            <div class="info"><span class="text-muted"><?php echo $data['created_date']?><a
                                        href="blogpost1.php">John Smith</a></span></div>
                            <p>Today We are going to introduce the review of Imperial Garden Rose Garden Hotel.It offers two
                                types of Menu, Al La Carte Buffet and A La Carte Menu. Al La Carte Buffet is available for Lunch
                                and Dinner. For adult 16,000ks+ and for child 10,000ks+ . The time limit is 2 hours.</p>
                            <button class="btn btn-outline-primary btn-sm" type="button"><a href="blogpost1.php">Read More</a>
                            </button>
                        </div>
                    </div>
                </div>
        <?php endwhile ;
        } else
            echo " <div class=\"text-center mt-5\">
                    <div class=\"error mx-auto\" data-text=\"404\">
                    </div>
                    <p class=\"text-dark mb-5 lead\">Page Not Found</p>
                    <p class=\"text-black-50 mb-0\">It looks like you found an error!</p>
                </div>";
        ?>

    </div>
</div>
<?php require_once('include/footer.php'); ?>
