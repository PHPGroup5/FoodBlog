<?php
session_start();
require_once('include/header.php') ?>
    <title>About us - Taste the Joy</title>
    </head>

    <body>
<header class="masthead">
    <script src="assets/js/jquery.min.js"></script>
    <?php
    if ($_SESSION["loginStatus"] == 0) {
        require_once('include/navbar.php');
    } else
        require_once('include/loginNav.php'); ?>
    <div class="example-box">
        <div class="background-shapes"></div>
        <h1>Who we are</h1>
       
    </div>
</header>
<div class="container">
    <section class="py-5">
        <h1 class="text-center text-uppercase">Our team</h1>
        <h2 class="text-center text-uppercase text-secondary mb-5">Project Member</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img class="w-100" alt="" src="assets/img/About/pt7.png">
                                </div>
                                <div class="user-imagia"><img class="rounded-circle m-2 img-fluid" alt=""
                                                              src="assets/img/About/pt6.png"></div>
                                <div class="py-1 px-3 text-center">
                                    <h3 class="text-capitalize m-0">Thinzar Aung</h3>
                                    <p class="text-secondary mb-3">Blog post creator</p>
                                    <p><em> Hi I am Thinzar Aung.I am the post creator of taste the joy.I have a huge
                                            passion for food blogging .</em></div>

                            </div>
                            <div class="back-imagia">
                                <div class="d-flex align-items-center h-100 px-3">
                                    <div>
                                        <h3 class="text-center">What I do?</h3>
                                        <p class="text-center">I make designs for blog posts and my job is to make you hungry whenever you see my posts.</p>
                                    </div>
                                </div>
                                <div class="footer-imagia w-100 text-secondary position-absolute text-center py-2">
                                    <div class="social-imagia text-center"><a class="m-2"
                                                                              href="https://www.facebook.com/thinzar.aung.399?"><i
                                                    class="fa fa-facebook"></i></a><a class="m-2" href="#"><i
                                                    class="fa fa-github"></i></a><a class="m-2" href="#"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4"></div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img class="w-100" alt="" src="assets/img/About/pt2.png">
                                </div>
                                <div class="user-imagia"><img class="rounded-circle m-2 img-fluid" alt=""
                                                              src="assets/img/About/pt1.png"></div>
                                <div class="py-1 px-3 text-center">
                                    <h3 class="text-capitalize m-0">Thiri Chan Nyein</h3>
                                    <p class="text-secondary mb-3"> Back end Developer</p>
                                    <p><em>Hi I am Chan. What you will find here is a collection of blog post for flavorful breakfasts, hot and filling lunches, easy dinners for any day of the week. </em></div>

                            </div>
                            <div class="back-imagia">
                                <div class="d-flex align-items-center h-100 px-3">
                                    <div>
                                        <h3 class="text-center">What I do?</h3>
                                        <p class="text-center">I design database of the website. My main job is to make efficient and effective backend system. </p>
                                    </div>
                                </div>
                                <div class="footer-imagia w-100 text-secondary position-absolute text-center py-2">
                                    <div class="social-imagia text-center"><a class="m-2"
                                                                              href="https://www.facebook.com/thirichan.nyein.9?"><i
                                                    class="fa fa-facebook"></i></a><a class="m-2" href="#"><i
                                                    class="fa fa-github"></i></a><a class="m-2" href="#"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4"></div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img class="w-100" alt="" src="assets/img/About/cry.jpg"></div>
                                <div class="user-imagia"><img class="rounded-circle m-2 img-fluid" alt=""
                                                              src="assets/img/About/pt3.png"></div>
                                <div class="py-1 px-3 text-center">
                                    <h3 class="text-capitalize m-0">Hein Khant Zaw</h3>
                                    <p class="text-secondary mb-3">Project Leader and Front end developer</p>
                                    <p><em>Hi I am Hein Khant Zaw. Unlike most
                                            food blog, this one is about the experiences and food itself.  </em></div>

                            </div>
                            <div class="back-imagia">
                                <div class="d-flex align-items-center h-100 px-3">
                                    <div>
                                        <h3 class="text-center">What I do?</h3>
                                        <p class="text-center">Me? I just love to fix everyone's error and bugs!</p>
                                    </div>
                                </div>
                                <div class="footer-imagia w-100 text-secondary position-absolute text-center py-2">
                                    <div class="social-imagia text-center"><a class="m-2"
                                                                              href="https://www.facebook.com/hein.zaw.9028"><i
                                                    class="fa fa-facebook"></i></a><a class="m-2"
                                                                                      href="https://github.com/HeinKhantZaw"><i
                                                    class="fa fa-github"></i></a><a class="m-2" href="#"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4"></div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img class="w-100" alt="" src="assets/img/About/pt4.png">
                                </div>
                                <div class="user-imagia"><img class="rounded-circle m-2 img-fluid" alt=""
                                                              src="assets/img/About/p.jpg"></div>
                                <div class="py-1 px-3 text-center">
                                    <h3 class="text-capitalize m-0">Thet Su Su Kyaw</h3>
                                    <p class="text-secondary mb-3">Front End and Back End Developer</p>
                                    <p><em>Hi I am Thet Su. Taste the Joy is a destination for millions
                                            of passionate and hungry readers. </em></div>

                            </div>
                            <div class="back-imagia">
                                <div class="d-flex align-items-center h-100 px-3">
                                    <div>
                                        <h3 class="text-center">What I do?</h3>
                                        <p class="text-center">I developed admin panel of the website. </p>
                                    </div>
                                </div>
                                <div class="footer-imagia w-100 text-secondary position-absolute text-center py-2">
                                    <div class="social-imagia text-center"><a class="m-2"
                                                                              href="https://www.facebook.com/profile.php?id=100015064938618"><i
                                                    class="fa fa-facebook"></i></a><a class="m-2" href="https://www.facebook.com/profile.php?id=100015064938618"><i
                                                    class="fa fa-github"></i></a><a class="m-2" href="https://github.com/ThetSuSu"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4"></div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img class="w-100" alt="" src="assets/img/About/pt9.png">
                                </div>
                                <div class="user-imagia"><img class="rounded-circle m-2 img-fluid" alt=""
                                                              src="assets/img/About/pt8.png"></div>
                                <div class="py-1 px-3 text-center">
                                    <h3 class="text-capitalize m-0">Khant Hay Thi Tun</h3>
                                    <p class="text-secondary mb-3"> Front end and Back end Developer</p>
                                    <p><em>Hi I am Hay Thi. Taste the joy is a favorite of industry pros for finding out
                                            what's opening where, and how it's all going down. </em></div>

                            </div>
                            <div class="back-imagia">
                                <div class="d-flex align-items-center h-100 px-3">
                                    <div>
                                        <h3 class="text-center">What I do?</h3>
                                        <p class="text-center">It is my job to make beautiful layouts and user interface of our website so that every single visitor would enjoy reading the blog posts! </p>
                                    </div>
                                </div>
                                <div class="footer-imagia w-100 text-secondary position-absolute text-center py-2">
                                    <div class="social-imagia text-center"><a class="m-2"
                                                                              href="https://www.facebook.com/orasulli.khant"><i
                                                    class="fa fa-facebook"></i></a><a class="m-2"
                                                                                      href="https://github.com/Khant-haythi"><i
                                                    class="fa fa-github"></i></a><a class="m-2" href="#"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<hr>
<?php require_once('include/footer.php'); ?>