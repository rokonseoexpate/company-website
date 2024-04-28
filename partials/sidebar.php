<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
        <img src="/uploads/logo.png" alt="SEO Expate Bangladesh LTD" class="brand-image elevation-3" style="width: 220px; height: auto;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info text-center">
                <a href="#" class="d-block"><?php echo $username; ?> </a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="dashboard" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
 
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="all-pages" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Pages </p>
                            </a>
                            <a href="create-page" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Page </p>
                            </a>
                        </li>
                        
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="changePassword" class="nav-link">
                        <i class="nav-icon fas fa-parking"></i>
                        <p>
                            Change Password
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>