<?php
session_start();
require_once('include/header.php') ?>
    <title>Home - Taste the Joy</title>
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
    <div id="example-box-Home" class="example-box">
        <div class="background-shapes"></div>
        <h1 class="text-center"><strong>Welcome to Taste the Joy</strong></h1>
    </div>
</header>
<div class="container">
    <div class="block-content" style="padding: 80px;">
        
        <?php
            include("config.php");
            $result = mysqli_query($conn, "SELECT * FROM post ORDER BY created_date DESC");

            while ($row = mysqli_fetch_assoc($result)):?>
        <div class="clean-blog-post" style="padding-bottom: 40px;">
            <div class="row">
                <div class="col-lg-5"><img class="img-fluid" 
                    href="#" src="../Admin/covers/<?php echo $row['photo'] ?>"></div>
                <div class="col-lg-7">
                    <h3><?php echo $row['title']?></h3>
                    <div class="info"><span class="text-muted"><?php echo $row['created_date']?></span>
                    </div>
                    <p><?php echo $row['content']?></p>
                    <button class="btn btn-outline-primary btn-sm" type="button" onclick="window.location.href = 'blogpost1.php?id=<?php echo $row['id']; ?>'">Read More</button>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
</div>
<?php require_once('include/footer.php'); ?>