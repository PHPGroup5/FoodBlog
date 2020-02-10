<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <style type="text/css">

    </style>
</head>

<body id="page-top">
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
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-item">
                        <a class="nav-link" href="#" aria-expanded="false"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>&nbsp;Logout</a>
                    </div>
                </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Posts</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Posts Info</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Post Title</th>
                                        <th>Post Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include("config.php");
                                   $result= mysqli_query($conn,"SELECT * FROM post");
                                   while($row=mysqli_fetch_assoc($result)):
                                   ?>
                                    <tr>
                                        <td style="cursor: pointer">
                                            <?php echo $row['title'] ?>
                                        </td>
                                       <td><img class="rounded-circle border shadow mr-2" width="60" src="covers/<?php echo $row['photo'] ?>"></td>
                                       <td><a href="table.php?id=<?php echo $row['id'] ?>"><i class="material-icons border rounded border-info">edit</i></a></td>
                                       <td><a href="post-del.php?id=<?php echo $row['id']?>"><i class="material-icons border rounded border-danger">delete</i></a></td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><button id="pre" onclick="prev()" value="Submit" class="btn btn-sm btn-outline-primary py-0" style="font-size: 0.8em;">&laquo;</button></a></li>
                                        <li class="page-item active" id="box1"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item" id="box2"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item" id="box3"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><button id="next" onclick="next()" class="btn btn-sm btn-outline-primary py-0" style="font-size: 0.8em;">&raquo;</button></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <a class="btn btn-info btn-sm border rounded btn-icon-split" role="button" href="post.php" style="display: block;margin: auto;max-width: 170px;"><span class="text-white-50 icon" style="filter: blur(0px);"><i class="fas fa-plus"></i></span><span class="text-white text">Add New Post</span></a>
            <div class="container my-auto">
                <div class="text-center my-auto copyright"></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
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
</body>

</html>