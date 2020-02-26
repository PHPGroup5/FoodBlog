<?php 
session_start();
require_once('include/header.php') ?>
    <title>Home - FoodBlog</title>
    </head>

    <body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<?php require_once('include/navbar.php') ?>
<?php include ("config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM post  where id='".$id."'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<header class="masthead">
    <div id="example-box-Home" class="example-box">
        <div class="background-shapes"></div>
        <h1 class="text-center"><strong><?php echo $row['title']?></strong></h1>
    </div>
</header>
<article>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                
                <p style="margin-top: 3%;"><?php echo $row['content']?></p>
                <a href="#"><img class="img-fluid" href="#" src="../Admin/covers/<?php echo $row['photo'] ?>""
                                 style="margin-top: 3%;"></a>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 col-lg-12 mx-auto">
            <div class="comment">
                <div id="disqus_thread"></div>
                <script>

                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function () { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://taste-the-joy.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
            </div>
            </div>
        </div>
    </div>
</article>


<?php require_once('include/footer.php'); ?>