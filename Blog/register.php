<?php require_once('include/header.php') ?>
    <title>Contact us - FoodBlog</title>
    </head>

    <body>
<header class="masthead">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <?php require_once('include/navbar.php') ?>
    <div id="example-box-reg" class="example-box">
        <div class="background-shapes"></div>
        <h1 class="text-center"><strong>Getting Started</strong></h1>
        <span class="text-center subheading"><br>Register atwt sar shar pee yay<br><br></span>
    </div>
</header>
<div class="row register-form" style="margin-right: 0rem;">
    <div class="col-md-8 offset-md-2">
        <form class="custom-form" action="registerQuery.php" method="post">
            <h1>Register Form</h1>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">First
                        Name </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="firstName"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Last
                        Name </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="lastName"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') { ?>
                        style="border: #FF0000 solid 1px;"
                    <?php } ?> class="form-control" type="email" name="email"></div>
            </div>
            <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') { ?>
                <div style="margin-top: -15px;margin-bottom: 10px;">
                <span style="color:#a71d2a ; font-size: x-small; text-shadow: #a71d2a;">
                    <img src="assets/img/exclamation-triangle-solid.svg" style="width: 20px; height: 20px;"> Email is duplicated .Try again.</span>
                </div>
            <?php } ?>

            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"
                                                          for="password-input-field">Password </label></div>
                <div class="col-sm-6 input-column">
                    <input <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'differentpw') { ?>
                        style="border: #FF0000 solid 1px;"
                        <?php } ?> class="form-control" type="password" name="password"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-password-input-field">Confirm
                        Password </label></div>
                <div class="col-sm-6 input-column">
                    <input <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'differentpw') { ?>
                        style="border: #FF0000 solid 1px;"
                        <?php } ?> class="form-control" type="password" name="confirmpassword"></div>
            </div>
<?php if (isset($_GET["msg"]) && $_GET["msg"] == 'differentpw') { ?>
            <div>
                <span style="color:#a71d2a ; font-size: x-small; text-shadow: #a71d2a;">
                    <img src="assets/img/exclamation-triangle-solid.svg" style="width: 20px; height: 20px;">Password confirmation does not match.Try again.</span>
            </div>
<?php } ?>


            <button class="btn btn-light submit-button" type="submit">Submit Form</button>
        </form>
    </div>
</div>
<?php require_once('include/footer.php'); ?>