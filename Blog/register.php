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
<div class="row register-form">
    <div class="col-md-8 offset-md-2">
        <form class="custom-form">
            <h1>Register Form</h1>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label>
                </div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label>
                </div>
                <div class="col-sm-6 input-column"><input class="form-control" type="email"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"
                                                          for="password-input-field">Password </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="password"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-password-input-field">Repeat
                        Password </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="password"></div>
            </div>
            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"><label
                        class="form-check-label" for="formCheck-5">I've read and accept the terms and conditions</label>
            </div>
            <button class="btn btn-light submit-button" type="button">Submit Form</button>
        </form>
    </div>
</div>
<?php require_once('include/footer.php'); ?>