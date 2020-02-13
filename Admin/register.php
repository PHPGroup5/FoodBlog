<?php $title = 'Register - Taste the Joy'; ?>
<?php require_once('include/header.php') ?>

<body class="bg-gradient-primary"
      style="background-color: #4e73df;background-image: linear-gradient(0deg,#3f4c6b,#606c88);background-size: cover;">
<div class="container">
    <div class="card shadow-lg o-hidden border-0 my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-flex">
                    <div class="flex-grow-1 bg-register-image"
                         style="background-image: url(&quot;assets/img/avatars/create.jpg&quot;);"></div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Create an Account!</h4>
                        </div>
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                                                          type="text" id="exampleFirstName"
                                                                          placeholder="First Name" name="first_name">
                                </div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="text"
                                                             id="exampleFirstName" placeholder="Last Name"
                                                             name="last_name"></div>
                            </div>
                            <div class="form-group"><input class="form-control form-control-user" type="email"
                                                           id="exampleInputEmail" aria-describedby="emailHelp"
                                                           placeholder="Email Address" name="email"></div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                                                          type="password" id="examplePasswordInput"
                                                                          placeholder="Password" name="password"></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="password"
                                                             id="exampleRepeatPasswordInput"
                                                             placeholder="Repeat Password" name="password_repeat"></div>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit">Register
                                Account
                            </button>
                            <hr>
                            <hr>
                        </form>
                        <div class="text-center"><a class="small" href="forgot-password.php">Forgot Password?</a></div>
                        <div class="text-center"><a class="small" href="login.php">Already have an account? Login!</a>
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