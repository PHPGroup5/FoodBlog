<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blank Page - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <style type="text/css">
        #overlay{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: cadetblue;
            opacity: 0.8;
            display: none;
        }

        #dialog{
            position: absolute;
            top: 26%;
            left: 35%;
            width: 30%;
            border: 1px solid gray;
            background: #fff;
            display: none;
        }

        #dialog h2{
            margin: 0;
            padding: 8px;
            background: dodgerblue;
            color: white;
            font-size: 17px;
            border-bottom: 1px solid gray;
        }

        #dialog h2 span{
            display: block;
            float: right;
            padding: 0 5px;
            color: #c22;
            cursor: pointer;
        }

        #dialog form{
            padding: 20px;
        }

        <--Edit-->

        #overedit{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: cadetblue;
            opacity: 0.8;
            display: none;
        }

        #edit{
            position: absolute;
            top: 26%;
            left: 35%;
            width: 30%;
            border: 1px solid gray;
            background: #fff;
            display: none;
        }

        #edit h2{
            margin: 0;
            padding: 8px;
            background: dodgerblue;
            color: white;
            font-size: 17px;
            border-bottom: 1px solid gray;
        }

        #edit h2 span{
            display: block;
            float: right;
            padding: 0 5px;
            color: #c22;
            cursor: pointer;
        }

        #edit form{
            padding: 20px;
        }

        input[type=text]{
            padding: 6px;
            width: 90%;
        }

        textarea{
            padding: 6px;
            font-family: Arial, Helvetica, sans-serif;
            width: 90%;
            height: 140px; 
        }

         input[type=submit]{
            margin-top: 5px; 

        }

         input[type=reset]{
            margin-top: 5px; 

        }

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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="table.php"><i class="fas fa-plus-square"></i><span>Post</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="category.php"><i class="fas fa-window-maximize"></i><span>Category</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"></div>
                </nav>
<div class="container-fluid">
<h3 class="text-dark mb-1">Category</h3>
<div class="row text-center" style="padding-bottom: 16px;">
<div class="col">
<div class="shadow card"><a class="btn btn-link text-left card-header font-weight-bold" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-4" href="#collapse-4" role="button">Added Category</a>
</div>
    <div class="collapse show" id="collapse-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                     <tbody>
                        <?php 
                        include("config.php");
                        $result=mysqli_query($conn,"SELECT * FROM category");
                        while($row = mysqli_fetch_assoc($result)):
                        ?>            
                        <tr>
                            <td><?php echo $row['name']?></td>
                            <td><a onclick="showEdit()"><i class="fas fa-edit"></i></a></td>
                            <td><a href="cat-del.php?id=<?php echo $row['id']?>"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                       <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-info btn-sm border rounded btn-icon-split" role="button"   onclick="showDialog()" style="display: block;margin: auto;max-width: 170px;"><span class="text-white-50 icon" style="filter: blur(0px);"><i class="fas fa-plus"></i></span><span class="text-white text">Add New Category</span></a></div>
                    <!--Dialog-->
                                <div id="overlay" onclick="hideDialog()"></div>
                                <div id="dialog">
                                    <h2>Add Category<span onclick="hideDialog()">&times;</span></i></h2>
                                <form action="cat-add.php" method="post">
                                    <input type="text" placeholder="Category Name" name="name">
                                    <input type="submit" name="Add" class="btn btn-info btn-sm">
                                    <input type="reset" name="Cancel" class="btn btn-info btn-sm">
                                </form>
                                </div>
                    <!--Edit Dialog-->
                    <div id="overedit" onclick="hideEdit()"></div>
                                <div id="edit">
                                    <h2>Edit Category<span onclick="hideEdit()">&times;</span></i></h2>
                                <form action = "cat-edit.php" method = "post">
                                <?php
                                $id = 8;
                                $result=mysqli_query($conn,"SELECT * FROM category WHERE id='".$id."' ");
                                $row=mysqli_fetch_assoc($result);
                                ?>
                                    <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">
                                    <input type="text" name="name" value="<?php echo $row['name'] ?>">
                                    <input type="submit" name="update" class="btn btn-info btn-sm">
                                    <input type="reset" name="Cancel" class="btn btn-info btn-sm">
                                </form>
                                </div>
            </div>
            <footer class="bg-white sticky-footer">
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
        function showDialog(){
        document.getElementById("overlay").style.display="block";
        document.getElementById("dialog").style.display="block";

    }

    function hideDialog(){
        document.getElementById("overlay").style.display="none";
        document.getElementById("dialog").style.display="none";

    }
    function showEdit(){
        document.getElementById("overedit").style.display="block";
        document.getElementById("edit").style.display="block";

    }

    function hideEdit(){
        document.getElementById("overedit").style.display="none";
        document.getElementById("edit").style.display="none";

    }
    </script>
</body>

</html>