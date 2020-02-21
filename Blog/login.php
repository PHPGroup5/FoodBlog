<?php require_once('include/header.php') ?>
    <title>Login - Taste the Joy</title>
    </head>

    <body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<?php require_once('include/navbar.php') ?>
<header class="masthead">
    <div id="example-box-Login" class="example-box">
        <h1 class="text-center"><strong>Welcome Back to Taste the Joy!</strong></h1><span
                class="text-center subheading"><br>Sign in to get personalized recommendations, read topics you love, and interact with blog posts.<br><br></span>
        <div class="background-shapes"></div>
    </div>
</header>
<div class="login-card"><img class="profile-img-card" src="assets/img/avatar_2x.png">
    <p class="profile-name-card"></p>
    <form class="form-signin"  action="loginCheck.php" method="post"><span class="reauth-email"> </span>
        <input class="form-control" type="email" id="inputEmail" required="" placeholder="Email address" autofocus="" name="email">
        <input class="form-control" type="password" id="inputPassword" required="" placeholder="Password" name="password">

        <div class="checkbox">
            <div class="form-check" style="padding-bottom: 10px;padding-top: 10px;"><input class="form-check-input" type="checkbox" id="formCheck-1" style="margin-top: 10px;"><label
                        class="form-check-label" for="formCheck-1">Remember me</label></div>
        </div>
        <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
    </form>
    <a class="forgot-password" href="#">Forgot your password?</a></div>
<?php require_once('include/footer.php'); ?>