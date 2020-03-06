<?php
session_start();
require_once('include/header.php') ?>
    <title>Recommendation - Taste the Joy</title>
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
        <h1 class="text-center"><strong> Recommended for you </strong></h1>
    </div>
</header>
<div class="container">
    <div class="block-content" style="padding: 40px;">

        <?php
        include("config.php");
        $result = mysqli_query($conn, "SELECT * from post where cat_id in (SELECT c.id from category c,post p,user_comment_post u WHERE p.id=u.postID AND c.id=p.cat_id AND u.userID='".$_SESSION['user_id']."') ORDER BY RAND();");
        while ($row = mysqli_fetch_assoc($result)):?>
            <div class="clean-blog-post" style="padding-bottom: 40px;">
                <div class="row">
                    <div class="col-lg-5"><img class="img-fluid"
                                               href="blogpost1.php?id=<?php echo $row['id']; ?>"
                                               src="../Admin/assets/img/covers/<?php echo $row['photo'] ?>"></div>
                    <div class="col-lg-7">
                        <h3><?php echo $row['title'] ?></h3>
                        <div class="info"><span class="text-muted"><?php echo $row['created_date'] ?></span>
                        </div>
                        <p><?php echo $row['content'] ?></p>
                        <button class="btn btn-outline-primary btn-sm" type="button"
                                onclick="window.location.href = 'blogpost1.php?id=<?php echo $row['id']; ?>'">Read More
                        </button>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php require_once('include/footer.php'); ?>