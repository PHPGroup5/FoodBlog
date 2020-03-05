<?php
session_start();
require_once('include/header.php');
if ($_SESSION["adminLoginStatus"] != 1) {
    header("Location: ./");
}

?>
<head>
    <style type="text/css">
        html {
            min-height: 100%;
            /* make sure it is at least as tall as the viewport */
            position: relative;
        }

        body {
            height: 100%;
            /* force the BODY element to match the height of the HTML element */
            background-color: #999;
        }

        table {
            width: 100%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 1000px;
            float: none;
        }

        thead {
            width: 100%;
            height: 20px;
        }

        tbody {
            height: 200px;
            display: inline-block;
            width: 100%;
            overflow: auto;
        }

        .pageCenter {
            margin-left: auto;
            margin-right: auto;
            max-width: 1000px;
            float: none;
        }

        th, td {
            width: 768px;
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

                <h3 class="text-dark mb-4">Posts</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Posts Info</p>
                    </div>
                    <div class="pageCenter" style="width: 1000px;">
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid"
                                 aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th>Post Title</th>
                                        <th>Post Image</th>
                                        <th>Edit Post</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include("config.php");
                                    $result = mysqli_query($conn, "SELECT * FROM post ORDER BY created_date DESC");
                                    while ($row = mysqli_fetch_assoc($result)):
                                        ?>
                                        <tr>
                                            <td style="cursor: pointer">
                                                <?php echo $row['title'] ?>
                                            </td>
                                            <td><img class="rounded-circle border shadow mr-2" width="60"
                                                     src="covers/<?php echo $row['photo'] ?>"></td>
                                            <td><a href="post-edit.php?id=<?php echo $row['id'] ?>"><i
                                                            class="material-icons border rounded border-info">edit</i></a>
                                            </td>
                                            <td><a href="post-del.php?id=<?php echo $row['id'] ?>"><i
                                                            class="material-icons border rounded border-danger">delete</i></a>
                                            </td>
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
        <footer class="bg-white sticky-footer">
            <a class="btn btn-info btn-sm border rounded btn-icon-split" role="button" href="post.php"
               style="display: block;margin: auto;max-width: 140px;background: #373B5F;"><span
                        class="text-white-50 icon"
                        style="filter: blur(0px);"><i
                            class="fas fa-plus"></i></span><span class="text-white text">Add New Post</span></a>
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
        'Post successfully updated!',
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