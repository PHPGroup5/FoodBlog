<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Post - Taste the Joy</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <style type="text/css">
        #overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(8px); 
            display: none;
        }

        #dialog {
            position: absolute;
            top: 26%;
            left: 35%;
            width: 30%;
            border: 1px solid gray;
            border-radius: 7px;
            background: #fff;
            display: none;
        }

        #dialog h2 {
            margin: 0;
            padding: 8px;
            background: #373B5F;
            color: white;
            font-size: 17px;
            border-bottom: 1px solid gray;
        }

        #dialog h2 span {
            display: block;
            float: right;
            padding: 0 5px;
            color: white;
            cursor: pointer;
        }

        #dialog form {
            padding: 20px;
        }

        #edit h2 {
            margin: 0;
            padding: 8px;
            background: dodgerblue;
            color: white;
            font-size: 17px;
            border-bottom: 1px solid gray;
        }

        #edit h2 span {
            display: block;
            float: right;
            padding: 0 5px;
            color: #c22;
            cursor: pointer;
        }

        #edit form {
            padding: 20px;
        }

        input[type=text] {
            padding: 6px;
            width: 99%;
        }

        textarea {
            padding: 6px;
            font-family: Arial, Helvetica, sans-serif;
            width: 90%;
            height: 140px;
        }

        input[type=submit] {
            margin-top: 10px;
            border-radius: 3px;
            text-align: center;
            background-color: #373B5F;
        }

        input[type=reset] {
            margin-top: 10px;
            border-radius: 3px;
            text-align: center;
            background-color: #373B5F;
        }

    </style>
</head>

<body id="page-top">
<div id="wrapper">
    <?php require_once('include/nav.php') ?>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <ul class="nav navbar-nav flex-nowrap ml-auto">
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php
                                        echo $_SESSION['adminFirstName']." ".$_SESSION['adminLastName'];
                                        ?></span>
                                    <img class="border rounded-circle img-profile" src="assets/img/avatars/<?php echo $_SESSION['photo']?>"></a>
                            </div></li>
                        <li class="nav-item">
                            <div class="nav-item">
                                <a class="nav-link" href="logout.php" aria-expanded="false"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>&nbsp;Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav> <div class="container-fluid">
                <h3 class="text-dark mb-1">Post</h3>
                <div class="row text-center" style="padding-bottom: 16px;">
                    <div class="col">
                        <div class="collapse show" id="collapse-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Post Titile</th>
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
                                                     src="assets/img/covers/<?php echo $row['photo'] ?>"></td>
                                            <td><a href="post-edit.php?id=<?php echo $row['id'] ?>"><i
                                                            class="fas fa-edit"></i></a>
                                            </td>
                                            <td><a href="post-del.php?id=<?php echo $row['id'] ?>"><i
                                                            class="far fa-trash-alt"></i></a>
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
   
            <a class="btn btn-info btn-sm border rounded btn-icon-split" role="button" href="post.php"
               style="display: block;margin: auto;max-width: 140px;background: #373B5F;"><span
                        class="text-white-50 icon"
                        style="filter: blur(0px);"><i
                            class="fas fa-plus"></i></span><span class="text-white text">Add New Post</span></a>
            <div class="container my-auto">
                <div class="text-center my-auto copyright"></div>
            </div>
        
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
<script type="text/javascript">
  function cellHeaders(tableId) {
  try {
    let thArray = [];
    const table = document.getElementById(tableId);
    const headers = table.getElementsByTagName('th');
    for (let i = 0; i < headers.length; i++) {
      const headingText = headers[i].innerHTML;
      thArray.push(headingText);
    }
    const styleElm = document.createElement('style');
    let styleSheet;
    document.head.appendChild(styleElm);
    styleSheet = styleElm.sheet;
    for (let i = 0; i < thArray.length; i++) {
      styleSheet.insertRule(
        '#' +
          tableId +
          ' td:nth-child(' +
          (i + 1) +
          ')::before {content:"' +
          thArray[i] +
          ': ";}',
        styleSheet.cssRules.length
      );
    }
  } catch (err) {
    console.log('cellHeaders(): ' + err);
  }
}
cellHeaders('respTable');
</script>
<?php } ?>
    
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="assets/js/theme.js"></script>
<script type="text/javascript">
    function showDialog() {
        document.getElementById("overlay").style.display = "block";
        document.getElementById("dialog").style.display = "block";

    }

    function hideDialog() {
        document.getElementById("overlay").style.display = "none";
        document.getElementById("dialog").style.display = "none";

    }
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

</script>
</body>

</html>