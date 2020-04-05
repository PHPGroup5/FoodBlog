<?php $title = 'Register - Taste the Joy'; ?>
<?php require_once('include/header.php') ?>
<style>
    .upload-btn-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .uploadBtn {
        color: #fff;
        background-color: #4e73df;
        border-color: #4e73df;
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
</style>

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
                        <form class="user" action="reg_finish.php" method="post" enctype='multipart/form-data'>
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
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                    <label class="">Add profile picture</label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="upload-btn-wrapper">
                                        <button class="uploadBtn">Upload a file</button>
                                        <input type="file" name="photo" class="form-control" id="photo">
                                    </div>
                                </div>
                            </div>

                            <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') { ?>
                                <div class="text-center">
                                    <h4 class="mb-4"
                                        style="color:#a71d2a ; font-size: x-large; text-shadow: #a71d2a;"><img
                                                src="../Blog/assets/img/exclamation-triangle-solid.svg"
                                                style="width: 20px; height: 20px;">Invalid photo format.</h4>
                                </div>
                            <?php } ?>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit">Register Account
                            </button>
                            <hr>
                        </form>
                        <div class="text-center"><a class="small" href="index.php">Already have an account? Login!</a>
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