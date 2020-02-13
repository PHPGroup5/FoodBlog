<?php $title = 'Update Category - Taste the Joy'; ?>
<?php require_once ('include/header.php')?>

<body id="page-top">
<div id="wrapper">
    <?php
    if (isset($_POST['submit'])) {
        include("config.php");
        $name = $_POST['category'];
        $id = $_GET['id'];
        $sql = "UPDATE category SET name = '" . $name . "' , modified_date = NOW() WHERE id = '" . $id . "'";
        $result = mysqli_query($conn, $sql);
        header("location: category.php");
    }
    ?>

    <?php require_once ('include/nav.php')?>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <?php require_once ('include/profileNav.php')?>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Cateogry</h3>
                <div class="row mb-3">

                    <div class="col-lg-8">
                        <div class="row mb-3 d-none">
                            <div class="col">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since
                                            last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since
                                            last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Category Settings</p>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">

                                            <div class="form-row">
                                                <div class="col">
                                                    <?php
                                                    $id = $_GET['id'];
                                                    $result = mysqli_query($conn, "SELECT * FROM category WHERE id='" . $id . "' ");
                                                    $row = mysqli_fetch_assoc($result);
                                                    ?>
                                                    <div class="form-group"><input class="form-control"
                                                                                   type="hidden"
                                                                                   name="id"
                                                                                   value="<?php echo $row['id'] ?>">
                                                    </div>
                                                    <div class="form-group"><label for="Category"><strong>Update
                                                                Category</strong></label><input class="form-control"
                                                                                                type="text"
                                                                                                placeholder="Category name"
                                                                                                name="category"
                                                                                                value="<?php echo $row['name'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-sm" type="submit" name="submit">
                                                    Update
                                                </button>
                                            </div>
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>


</body>
</html>