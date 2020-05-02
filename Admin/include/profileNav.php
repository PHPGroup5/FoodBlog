<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
        <ul class="nav navbar-nav flex-nowrap ml-auto">
            <div class="d-none d-sm-block topbar-divider"></div>
            <li class="nav-item dropdown no-arrow" role="presentation">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php include("config.php");
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
</nav>