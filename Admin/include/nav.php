<style>
    .choice:hover
    {
        background-color: #282b44;
    }
</style>
<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion p-0" style="
    background-color: #373B5F;
    background-size: cover;
">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-users-cog"></i></div>
            <div class="sidebar-brand-text mx-3"><span>Admin Panel</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="nav navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item choice" role="presentation"><a class="nav-link" href="dashboard.php"><i
                            class="fas fa-info-circle"></i><span>Dashboard</span></a></li>
            <li class="nav-item choice" role="presentation"><a class="nav-link" href="profile.php"><i
                            class="fas fa-user"></i><span>Profile</span></a></li>
            <li class="nav-item choice" role="presentation"><a class="nav-link" href="table.php"><i
                            class="fas fa-plus-square"></i><span>Post</span></a></li>
            <li class="nav-item choice" role="presentation"><a class="nav-link" href="category.php"><i
                            class="fas fa-window-maximize"></i><span>Category</span></a></li>
             <li class="nav-item choice" role="presentation"><a class="nav-link" href="register.php"><i
                            class="fas fa-plus-circle"></i><span>New Admin</span></a></li>
        </ul>
        <div class="text-center d-none d-md-inline">
            <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
        </div>
    </div>
</nav>