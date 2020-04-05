<nav class="navbar navbar-expand topbar static-top">
    <div class="container-fluid">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                echo $_SESSION['firstName'];
                ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="min-width: 5rem;">
                <a class="dropdown-item" href="updateUser.php" style="padding: .25rem 0.5rem;"><i
                            class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>&nbsp;Update</a>
<a class="dropdown-item" href="logout.php" style="padding: .25rem 0.5rem;"><i
                            class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>&nbsp;Logout</a>

            </div>
        </div>
    </div>
</nav>