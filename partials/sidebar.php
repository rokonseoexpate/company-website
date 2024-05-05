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
                <li class="nav-item menu-open">
                    <a href="dashboard" class="nav-link active">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : ''; ?>">
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
                            <a href="all-pages.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Pages </p>
                            </a>
                            <a href="create-page.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Page </p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="branch-list.php"  class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'branch-list.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Branch
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="certificates.php" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Certificate
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="certificates.php" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Our Office
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="employ-list.php" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                    <a href="employee-list.php"  class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'employee-list.php' || basename($_SERVER['PHP_SELF']) == 'employee-add.php'|| basename($_SERVER['PHP_SELF']) == 'employee-edit.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-user-astronaut"></i>
                        <p>
                            Employee
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="job-list.php"  class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'job-list.php' || basename($_SERVER['PHP_SELF']) == 'job-add.php'|| basename($_SERVER['PHP_SELF']) == 'job-edit.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            Jobs
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="department-list.php"  class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'department-list.php' || basename($_SERVER['PHP_SELF']) == 'department-add.php'|| basename($_SERVER['PHP_SELF']) == 'department-edit.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Departments
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="notice-list.php"  class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'notice-list.php' || basename($_SERVER['PHP_SELF']) == 'notice-add.php'|| basename($_SERVER['PHP_SELF']) == 'notice-edit.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                            Notices
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="changePassword.php" class="nav-link">
                        <i class="nav-icon fas fa-parking"></i>
                        <p>
                            Change Password
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
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