<?php $title = 'Profile - Taste the Joy'; ?>
<?php $currentPage = 'profile'; ?>
<?php require_once('include/header.php') ?>
<head>
    <style type="text/css">
   #fileupload-example-5 {
    position: relative;
    overflow: hidden;
    }

    #fileupload-example-5 input {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    opacity: 0.001;
    }

    input[type="file"] {
        cursor: pointer;
    }

    button{
        cursor: pointer;
    }

    </style>
</head>
<body id="page-top">
<div id="wrapper">
    <?php require_once('include/nav.php') ?>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <?php require_once ('include/profileNav.php')?>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Profile</h3>
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="card-body text-center shadow">
                                <?php
        include("config.php");
        $result=mysqli_query($conn,"SELECT * FROM user WHERE id=1");
        $row=mysqli_fetch_assoc($result);
        ?>
                                <img class="rounded-circle mb-3 mt-4"
                                                                           src="covers/<?php echo $row['profile_image'] ?>" width="160"
                                                                           height="160">
                                <div class="mb-3" >
                                        <form action="uploadimage.php" method="post" enctype="multipart/form-data">
                                            <input type="file" name="image">

                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row mb-3 d-none">
                            <div class="col">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since
                                            last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since
                                            last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">User Settings</p>
                                    </div>
<div class="card-body">
    <form action="pro-edit.php" method="post">
        <?php
        include("config.php");
        $result=mysqli_query($conn,"SELECT * FROM user WHERE id=1");
        $row=mysqli_fetch_assoc($result);
        ?>
        <div class="form-row">
            <div class="col">
                <div class="form-group"><label for="username"><strong>Username</strong></label>
                <input class="form-control" type="text" value="<?php echo $row['username'] ?>" name="username"></div>
            </div>
            <div class="col">
                <div class="form-group"><label for="email"><strong>Email Address</strong></label><input class="form-control" type="email" value="<?php echo $row['email'] ?>" name="email"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group"><label for="firstname"><strong>First Name</strong></label><input class="form-control" type="text" value="<?php echo $row['firstname'] ?>" name="firstname"></div>
            </div>
            <div class="col">
                <div class="form-group"><label for="lastname"><strong>Last Name</strong></label><input class="form-control"
                type="text" value="<?php echo $row['lastname'] ?>" name="lastname"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group"><label for="password"><strong>New Password</strong></label><input class="form-control" type="password" name="password"
                    value="<?php echo $row["password"]?>"
                    >
                </div>
            </div>
            <div class="col">
                <div class="form-group"><label for="confirm_pw"><strong>Confirm Password</strong></label><input type="password"class="form-control" name="confirm_pw" value="<?php echo $row["password"]?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-sm" type="submit" name="submit">Save Settings
            </button>
        </div>
    </form>
</div>
                                </div>
                                <div class="card shadow"></div>
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
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>