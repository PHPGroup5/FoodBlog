<html lang="en"><head>
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
        form label{
            display: block;
            margin-top: 10px;
            font-size: 18px;
        }

        input[type=reset]{
            margin-left: 20px;
        }
    </style>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">

</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-users-cog"></i></div>
                <div class="sidebar-brand-text mx-3"><span>Admin Panel</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Profile</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="table.php"><i class="fas fa-plus-square"></i><span>Post</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="category.php"><i class="fas fa-window-maximize"></i><span>Category</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid">
                    <ul class="nav navbar-nav flex-nowrap ml-auto">
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">John Doe</span><img class="border rounded-circle img-profile" src="assets/img/avatar.jpg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                </div>
                            </div></li>
                        <li class="nav-item">
                            <div class="nav-item">
                                <a class="nav-link" href="#" aria-expanded="false"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>&nbsp;Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h2 >Create a New Post</h2>

                    </li>
                    <li class="list-group-item">
                        <form action="post-add.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>

                            <div class="form-group">
                                <label for="catgory">Select a Category</label>
                                <select name="category_id" class="form-control" id="catgory">
                                    <?php
                                    include("config.php");
                                    $result=mysqli_query($conn,"SELECT id,name FROM category");
                                    while($row=mysqli_fetch_assoc($result)): ?>
                                        <option value="<?php echo $row['id']?>">
                                            <?php echo $row['name'] ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="photo">Featured Image</label>
                                <input type="file" name="photo" class="form-control" id="photo">
                            </div>

                            <div class="form-group">
                                <label for="summernote">Content</label>
                                <textarea id="summernote" class="form-control" name="content"></textarea>
                            </div>
                            <br><br>

                            <input type="submit" class="btn btn-primary btn-md">
                            <input type="reset" class="btn btn-primary btn-md">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top" style="display: none;"><i class="fas fa-angle-up"></i></a></div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
<script src="assets/js/theme.js"></script>
<script type="text/javascript">
    /*setInterval(next,5000);*/
    var box=1;
    function prev(){
        document.getElementById('box'+box).className="page-item";
        box--;if(box<1) box=3;
        document.getElementById('box'+box).className="page-item active";
    }

    function next(){
        document.getElementById('box'+box).className="page-item";
        box++;if(box>3) box=1;
        document.getElementById('box'+box).className="page-item active";
    }

</script>

</body></html>