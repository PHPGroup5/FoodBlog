<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
        form label {
            display: block;
            margin-top: 10px;
            font-size: 18px;
        }

        input[type=reset] {
            margin-left: 20px;
        }
    </style>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">


</head>
<body>
<div id="wrapper">
    <?php require_once ('include/nav.php')?>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <?php require_once ('include/profileNav.php')?>
            <div class="container-fluid">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h2>Create a New Post</h2>

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
                                    $result = mysqli_query($conn, "SELECT id,name FROM category");
                                    while ($row = mysqli_fetch_assoc($result)): ?>
                                        <option value="<?php echo $row['id'] ?>">
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
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top" style="display: none;"><i
                class="fas fa-angle-up"></i></a></div>
<script>
    $(document).ready(function () {
        $('#summernote').summernote();
    });
</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
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