<nav class="navbar navbar-expand mb-4 topbar static-top">
    <div class="container-fluid">
        <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i
                    class="fas fa-bars"></i></button>
        <ul class="nav navbar-nav flex-nowrap ml-auto">
            <div class="d-none d-sm-block topbar-divider"></div>
            <li class="nav-item dropdown no-arrow" role="presentation">
                <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
                        <span class=" d-lg-inline mr-2 text-gray-600 small">
                            <?php
                            echo $_SESSION['firstName'];
                            ?>
                        </span>
                        <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                            <a class="dropdown-item" role="presentation" href="profile.php">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                            <a class="dropdown-item" role="presentation" href="setting.php">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                        </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-item">
                    <a class="nav-link" href="logout.php" aria-expanded="false"><i
                                class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>&nbsp;Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>