<?php
session_start();
require_once('include/header.php') ?>
    <title> Update - FoodBlog</title>
    </head>

    <body>
<header class="masthead">
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <?php require_once('include/loginNav.php') ?>
    <div id="example-box-reg" class="example-box">
        <div class="background-shapes"></div>
        <h1 class="text-center"><strong> Update your profile</strong></h1>
    </div>
</header>
<div class="row register-form" style="margin-right: 0rem;">
    <div class="col-md-8 offset-md-2">
        <?php
        include ('config.php');
        $result = mysqli_query($conn, "SELECT * FROM reg where id =" . $_SESSION['user_id']);
        $row = mysqli_fetch_assoc($result);
        ?>
        <form class="custom-form" action="updateUserQuery.php" method="post">
            <h1>Update here</h1>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">First
                        Name </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="firstName">
                    <input class="form-control" type="hidden" name="oldfirstname" value="<?php echo $row['firstName'] ?>"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Last
                        Name </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="lastName">
                    <input class="form-control" type="hidden" name="oldlastname" value="<?php echo $row['lastName'] ?>">
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="email" name="email">
                    <input class="form-control" type="hidden" name="oldEmail" value="<?php echo $row['email'] ?>">
                </div>
            </div>

            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"
                                                          for="password-input-field">Password </label></div>
                <div class="col-sm-6 input-column">
                    <input <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'differentpw') { ?>
                        style="border: #FF0000 solid 1px;"
                    <?php } ?> class="form-control" type="password" name="password">
                    <input class="form-control" type="hidden" name="oldPassword" value="<?php echo $row['password'] ?>">
                </div>
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


            <button class="btn btn-light submit-button" type="submit">Update</button>
        </form>
    </div>
</div>
<?php if (isset($_GET["msg"]) && $_GET["msg"] == 'success') { ?>
    <script>
        Swal.fire(
            '',
            'Profile successfully updated!',
            'success'
        )
    </script>
<?php } ?>
<?php require_once('include/footer.php'); ?>