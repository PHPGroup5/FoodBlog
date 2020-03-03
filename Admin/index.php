<?php $title = 'Login - Taste the Joy'; ?>
<?php require_once('include/header.php') ?>
<title>Admin Panel</title>
</head>
<body class="bg-gradient-primary"
      style="background-color: #4e73df;background-image: linear-gradient(0deg,#3f4c6b,#606c88);background-size: cover;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-login-image"
                                 style="background-image: url(&quot;assets/img/avatars/login.jpg&quot;);"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Welcome!</h4>
                                </div>
                                <form class="user" action="adminLoginCheck.php" method="post">
                                    <div class="form-group"><input class="form-control form-control-user" type="email"
                                                                   id="exampleInputEmail" aria-describedby="emailHelp"
                                                                   placeholder="Enter Email Address..." name="email">
                                    </div>
                                    <div class="form-group"><input class="form-control form-control-user"
                                                                   type="password" id="exampleInputPassword"
                                                                   placeholder="Password" name="password"></div>
                                    <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') { ?>
                                        <div class="text-center">
                                            <h4 class="mb-4"
                                                style="color:#a71d2a ; font-size: x-large; text-shadow: #a71d2a;"><img
                                                        src="../Blog/assets/img/exclamation-triangle-solid.svg"
                                                        style="width: 20px; height: 20px;">Email or password is incorrect.</h4>
                                        </div>
                                    <?php } ?>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <div class="form-check"><input class="form-check-input custom-control-input"
                                                                           type="checkbox" id="formCheck-1"><label
                                                        class="form-check-label custom-control-label" for="formCheck-1">Remember
                                                    Me</label></div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block text-white btn-user" type="submit">Login
                                    </button>
                                    <hr>
                                    <hr>
                                </form>

                                <div class="text-center"><a class="small" href="register.php">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>