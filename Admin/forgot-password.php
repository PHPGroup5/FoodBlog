<?php $title = 'Forgot password - Taste the Joy'; ?>
<?php $currentPage = 'forgotPassword'; ?>
<?php require_once('include/header.php') ?>

<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-password-image"
                                 style="background-image: url(&quot;assets/img/avatars/forgotPW.gif&quot;);"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-2">Forgot Your Password?</h4>
                                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and
                                        we'll send you a link to reset your password!</p>
                                </div>
                                <form class="user">
                                    <div class="form-group"><input class="form-control form-control-user" type="email"
                                                                   id="exampleInputEmail" aria-describedby="emailHelp"
                                                                   placeholder="Enter Email Address..." name="email">
                                    </div>
                                    <button class="btn btn-primary btn-block text-white btn-user"
                                            type="submit">Reset Password
                                    </button>
                                </form>
                                <div class="text-center">
                                    <hr>
                                    <a class="small" href="register.php">Create an Account!</a></div>
                                <div class="text-center"><a class="small" href="login.php">Already have an account?
                                        Login!</a></div>
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