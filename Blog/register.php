<?php require_once('include/header.php') ?>
    <title> Register - FoodBlog</title>
    </head>

    <body>
<header class="masthead">
    <script src="assets/js/jquery.min.js"></script>
    <?php require_once('include/navbar.php') ?>
    <div id="example-box-reg" class="example-box">
        <div class="background-shapes"></div>
        <h1 class="text-center"><strong>Getting Started</strong></h1>
    </div>
</header>
<div class="row register-form" style="margin-right: 0rem;">
    <div class="col-md-8 offset-md-2">
        <form class="custom-form" action="registerQuery.php" method="post">
            <h1>Register</h1>
            <div class="form-row form-group">

                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="firstName"  id="inputFirstName" required="" placeholder="First name"
                           autofocus=""
                           ></div>
            </div>
            <div class="form-row form-group">

                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="lastName" id="inputLastName" required="" placeholder="Last name"
                           ></div>
            </div>
            <div class="form-row form-group">

                <div class="col-sm-6 input-column">
                    <input <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') { ?>
                        style="border: #FF0000 solid 1px;"
                    <?php } ?> class="form-control" type="email" id="inputEmail" required="" placeholder="Email address"
                                name="email"></div>
            </div>
            <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') { ?>
                <div style="margin-top: -15px;margin-bottom: 10px;">
                <span style="color:#a71d2a ; font-size: x-small; text-shadow: #a71d2a;">
                    <img src="assets/img/exclamation-triangle-solid.svg" style="width: 20px; height: 20px;"> Email is duplicated .Try again.</span>
                </div>
            <?php } ?>

            <div class="form-row form-group">

                <div class="col-sm-6 input-column">
                    <input <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'differentpw') { ?>
                            style="border: #FF0000 solid 1px;"
                        <?php } ?>
                            <?php if(isset($_GET["msg"]) && $_GET["msg"]=='invalidpw') { ?>
                            style=""
                            <?php } ?>
                        class="form-control" type="password" name="password" id="inputPassword" required="" placeholder="Password"
                        ></div>
            </div>


            <div class="form-row form-group">

                <div class="col-sm-6 input-column">
                    <input <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'differentpw') { ?>
                        style="border: #FF0000 solid 1px;"
                    <?php } ?> class="form-control" type="password" name="confirmpassword" id="inputConfirmPassword" required="" placeholder="Confirm password"
                               ></div>
            </div>
            <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'differentpw') { ?>
                <div>
                <span style="color:#a71d2a ; font-size: x-small; text-shadow: #a71d2a;">
                    <img src="assets/img/exclamation-triangle-solid.svg" style="width: 20px; height: 20px;">Password confirmation does not match.Try again.</span>
                </div>
            <?php } ?>
            <?php if(isset($_GET["msg"]) && $_GET["msg"]=='invalidpw') { ?>
                <div><span style="color:#a71d2a ; font-size: x-small; text-shadow: #a71d2a;">
                        <img src="assets/img/exclamation-triangle-solid.svg" style="width: 20px; height: 20px;">Password must contain at least one uppercase
                        and lowercase letter,one number and at least 8 characters.</span>
                </div>
            <?php } ?>

<div><span style="border: #3c697f;text-align: inherit;"> <button class="btn btn-light submit-button" type="submit">Submit Form</button>
    </span></div>

        </form>
    </div>
</div>
<?php require_once('include/footer.php'); ?>