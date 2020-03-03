<?php
session_start();
require_once('include/header.php');
include("config.php"); ?>
<title>Admin Panel</title>
</head>
<body id="page-top">
<div id="wrapper">
    <?php require_once('include/nav.php') ?>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <?php require_once('include/profileNav.php') ?>
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block"
                                                                role="button" href="#"><i
                                class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a></div>
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="t`e`xt-uppercase text-primary font-weight-bold text-xs mb-1"><span>Total posts</span>
                                        </div>
                                        <div class="text-dark font-weight-bold h5 mb-0">
                                            <span><?php $result = mysqli_query($conn, "SELECT * FROM post");
                                                $num_rows = mysqli_num_rows($result);
                                            echo $num_rows;?></span>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-file fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Total comments</span>
                                        </div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span>
                                                <?php $result = mysqli_query($conn, "SELECT * FROM comment");
                                                $num_rows = mysqli_num_rows($result);
                                                echo $num_rows; ?>
                                            </span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-dark py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Total users</span>
                                        </div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span>
                                                <?php $result = mysqli_query($conn, "SELECT * FROM reg");
                                                $num_rows = mysqli_num_rows($result);
                                                echo $num_rows; ?>
                                            </span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Number of admins</span>
                                        </div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span>
                                                <?php $result = mysqli_query($conn, "SELECT * FROM admins");
                                                $num_rows = mysqli_num_rows($result);
                                                echo $num_rows; ?>
                                            </span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user-circle fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"></div>
            </div>
        </footer>
    </div></div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>