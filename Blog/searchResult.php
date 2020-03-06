<?php
session_start();
require_once('include/header.php') ?>
<title>Search Results - FoodBlog</title>
</head>

<body>
<?php
if ($_SESSION["loginStatus"] == 0) {
    require_once('include/navbar.php');
} else
    require_once('include/loginNav.php'); ?>
<header class="masthead">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <div id="example-box-reg" class="example-box">
        <div class="background-shapes"></div>
        <h1 class="text-center"><strong>Results</strong></h1>
    </div>
</header>
<div class="container">
    <div class="block-content" style="padding: 40px;">
        <?php
        include("config.php");
        $search = $_POST["search"];
        $sql = "SELECT * from post where title LIKE '%".$search."%'";
        $row = mysqli_query($conn, $sql);
        $result = mysqli_num_rows($row);
        if ($result) {
            while ($data = mysqli_fetch_assoc($row)):
                ?>
                <div class="clean-blog-post" style="padding-bottom: 70px;">
                    <div class="row">
                        <div class="col-lg-5"><img class="rounded img-fluid" src="../Admin/assets/img/covers/<?php echo $data['photo'] ?>"></div>
                        <div class="col-lg-7">
                            <h3><?php echo $data['title']?></h3>
                            <div class="info"><span class="text-muted"><?php echo $data['created_date']?></span></div>
                            <p><?php echo substr($data['content'], 0, 400); ?></p>
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
