<?php require_once('include/header.php') ?>
    <title>Login - Taste the Joy</title>
    </head>

    <body>
<script src="assets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php require_once('include/navbar.php') ?>
<?php if (isset($_GET["msg"]) && $_GET["msg"] == 'success') { ?>
    <script>
        Swal.fire(
            '',
            'User successfully registered!',
            'success'
        )
    </script>
<?php } ?>
<header class="masthead">
    <div id="example-box-Login" class="example-box">
        <h1 class="text-center"><strong>Welcome Back to Taste the Joy!</strong></h1>
        <div class="background-shapes"></div>
    </div>
</header>
<div class="login-card">


    <form class="form-signin" action="loginCheck.php" method="post">
        <span class="h2"><h2>LOGIN</h2></span

        <span class="reauth-email"> </span>
        <input <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') { ?>
                style="border: #FF0000 solid 1px;"
                <?php } ?>class="form-control" type="email" id="inputEmail" required="" placeholder="Email address"
                autofocus=""
                name="email">
        <input<?php if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') { ?>
            style="border: #FF0000 solid 1px;"
        <?php } ?> class="form-control" type="password" id="inputPassword" required="" placeholder="Password"
                   name="password" >
        <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') { ?>
            <div>
                <span style="color:#a71d2a ; font-size: x-small; text-shadow: #a71d2a;">
                    <img src="assets/img/exclamation-triangle-solid.svg" style="width: 20px; height: 20px;">Wrong password .Try again.</span>
            </div>
        <?php } ?>
      
        <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
    </form>
    <!--    <a class="forgot-password" href="#">Forgot your password?</a>--></div>
<?php require_once('include/footer.php'); ?>