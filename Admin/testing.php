<?php $title = 'Post - Taste the Joy'; ?>
<?php require_once('include/header.php') ?>

<body id="page-top">
<div id="wrapper">
    <?php require_once('include/nav.php') ?>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <?php require_once ('include/profileNav.php')?>
            <div class="container-fluid">

                <h3 class="text-dark mb-4">Posts</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Posts Info</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table mt-2" id="dataTable" role="grid"
                             aria-describedby="dataTable_info">
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
                                $result = mysqli_query($conn, "SELECT * FROM post ORDER BY created_date DESC");

                                while($row=mysqli_fetch_assoc($result)):
                                    ?>
                                    <tr>
                                        <td style="cursor: pointer">
                                            <?php echo $row['title'] ?>
                                        </td>
                                        <td><img class="rounded-circle border shadow mr-2" width="60"
                                                 src="covers/<?php echo $row['photo'] ?>"></td>
                                        <td><a href="table.php?id=<?php echo $row['id'] ?>"><i
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
                        <div class="row">
                            <div class="col">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous">
                                                <button id="pre" onclick="prev()" value="Submit"
                                                        class="btn btn-sm btn-outline-primary py-0"
                                                        style="font-size: 0.8em;">&laquo;
                                                </button>
                                            </a></li>
                                        <li class="page-item active" id="box1"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item" id="box2"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item" id="box3"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next">
                                                <button id="next" onclick="next()"
                                                        class="btn btn-sm btn-outline-primary py-0"
                                                        style="font-size: 0.8em;">&raquo;
                                                </button>
                                            </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <a class="btn btn-info btn-sm border rounded btn-icon-split" role="button" href="post.php"
               style="display: block;margin: auto;max-width: 140px;"><span class="text-white-50 icon"
                                                                           style="filter: blur(0px);"><i
                            class="fas fa-plus"></i></span><span class="text-white text">Add New Post</span></a>
            <div class="container my-auto">
                <div class="text-center my-auto copyright"></div>
            </div>
        </footer>
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>
<script type="text/javascript">
    /*setInterval(next,5000);*/
    var box = 1;

    function prev() {
        document.getElementById('box' + box).className = "page-item";
        box--;
        if (box < 1) box = 3;
        document.getElementById('box' + box).className = "page-item active";
    }

    function next() {
        document.getElementById('box' + box).className = "page-item";
        box++;
        if (box > 3) box = 1;
        document.getElementById('box' + box).className = "page-item active";
    }

</script>
</body>

</html>