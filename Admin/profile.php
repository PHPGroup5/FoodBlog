<?php
session_start();
require_once('include/header.php');
include("config.php");
if ($_SESSION["adminLoginStatus"] != 1) {
    header("Location: ./");
} ?>
<head>
    <style type="text/css">
        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .uploadBtn {
            color: #fff;
            background-color: #373B5F;
            border-color: #373B5F;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: bold;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            cursor: pointer;
        }

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

        button {
            cursor: pointer;
        }
    </style>
    <title>Admin Panel</title>
</head>
<body id="page-top">
<div id="wrapper">
    <?php require_once('include/nav.php') ?>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <?php require_once('include/profileNav.php') ?>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Profile</h3>
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="card-body text-center shadow">
                                <?php
                                $result = mysqli_query($conn, "SELECT * FROM admins where id =" . $_SESSION['admin_id']);
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <img class="rounded-circle mb-3 mt-4"
                                     src="covers/<?php echo $row['profile_image'] ?>" width="160"
                                     height="160">
                                <div class="mb-3">
                                    <form action="uploadimage.php" method="post" enctype="multipart/form-data">
                                        <div class="upload-btn-wrapper">
                                            <button class="uploadBtn">Upload a file</button>
                                            <input class="form-control" type="file" name="image">
                                        </div>
                                        <input class="form-control" type="submit" placeholder="Change Profile">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">User Settings</p>
                                    </div>
                                    <div class="card-body">
                                        <form action="profile-edit.php" method="post">

                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Email
                                                                Address</strong></label><input class="form-control"
                                                                                               type="hidden"
                                                                                               value="<?php echo $row['email'] ?>"
                                                                                               name="oldEmail">
                                                        <input class="form-control"
                                                               type="email"
                                                               name="email"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="firstname"><strong>First
                                                                Name</strong></label>
                                                        <input class="form-control"
                                                               type="hidden"
                                                               value="<?php echo $row['firstname'] ?>"
                                                               name="oldfirstname">
                                                        <input class="form-control"
                                                               type="text"
                                                               name="firstname"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="lastname"><strong>Last
                                                                Name</strong></label>
                                                        <input class="form-control"
                                                               type="hidden"
                                                               value="<?php echo $row['lastname'] ?>"
                                                               name="oldlastname">
                                                        <input class="form-control"
                                                               type="text"
                                                               name="lastname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="password"><strong>New
                                                                Password</strong></label>
                                                        <input class="form-control"
                                                               type="hidden"
                                                               name="oldPassword"
                                                               value="<?php echo $row["password"] ?>">
                                                        <input class="form-control"
                                                               type="password"
                                                               name="password"
                                                            <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'differentpw') { ?>
                                                                style="border: #FF0000 solid 1px;"
                                                            <?php } ?>>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="confirm_pw"><strong>Confirm
                                                                Password</strong></label>
                                                        <input type="password"
                                                               class="form-control"
                                                               name="confirm_pw"
                                                            <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'differentpw') { ?>
                                                                style="border: #FF0000 solid 1px;"
                                                            <?php } ?>>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-sm" type="submit" name="submit"
                                                        style="background: #373B5F;">
                                                    Save Settings
                                                </button>
                                            </div>
                                            <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'differentpw') { ?>
                                                <div>
                                                    <span style="color:#a71d2a ; font-size: x-small; text-shadow: #a71d2a;"><img
                                                                src="../Blog/assets/img/exclamation-triangle-solid.svg"
                                                                style="width: 20px; height: 20px;">Password confirmation does not match.Try again.</span>
                                                </div>
                                            <?php } ?>
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>