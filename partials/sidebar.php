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
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header"> Office </li>

                <li class="nav-item">
                    <a href="branch-list.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'branch-list.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>
                            Branch
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="department-list.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'department-list.php' || basename($_SERVER['PHP_SELF']) == 'department-add.php' || basename($_SERVER['PHP_SELF']) == 'department-edit.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Departments
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="employee-list.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'employee-list.php' || basename($_SERVER['PHP_SELF']) == 'employee-add.php' || basename($_SERVER['PHP_SELF']) == 'employee-edit.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Employee
                        </p>
                    </a>
                </li>

                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'history.php' || basename($_SERVER['PHP_SELF']) == 'history-journey-list.php' || basename($_SERVER['PHP_SELF']) == 'history-projects-list.php') ? 'menu-open' : ''; ?>">
                    <a href="#" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'history.php' || basename($_SERVER['PHP_SELF']) == 'history-journey-list.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-history"></i>
                        <p>
                            History Page
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="history.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'history.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>History Page Content</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="history-journey-list.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'history-journey-list.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <!-- <p>History Journey </p> -->
                                <p>Successful Journey </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="history-projects-list.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'history-projects-list.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>History Projects </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'portfolio-category-add.php' || basename($_SERVER['PHP_SELF']) == 'portfolio-projects-add.php' || basename($_SERVER['PHP_SELF']) == 'portfolio-category-list.php' || basename($_SERVER['PHP_SELF']) == 'portfolio-projects-list.php') ? 'menu-open' : ''; ?>">
                    <a href="#" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'portfolio-category-add.php' || basename($_SERVER['PHP_SELF']) == 'portfolio-category-list.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-code"></i>
                        <p>
                            Web Development
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="portfolio-category-list.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'portfolio-category-list.php' || basename($_SERVER['PHP_SELF']) == 'portfolio-category-add.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Portfolio Category </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="portfolio-projects-list.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'portfolio-projects-list.php' || basename($_SERVER['PHP_SELF']) == 'portfolio-projects-add.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Portfolio Projects </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'app-development-add.php' || basename($_SERVER['PHP_SELF']) == 'app-development-add.php' || basename($_SERVER['PHP_SELF']) == 'app-development-list.php') ? 'menu-open' : ''; ?>">
                    <a href="#" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'portfolio-category-add.php' || basename($_SERVER['PHP_SELF']) == 'portfolio-category-list.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fab fa-android"></i>
                        <p>
                            App Development
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="app-development-list.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'app-development-add.php' || basename($_SERVER['PHP_SELF']) == 'app-development-add.php' || basename($_SERVER['PHP_SELF']) == 'app-development-list.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Portfolio </p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="history-gallery-list.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'history-gallery-list.php') ? 'active' : ''; ?>">
                        <i class="far fa-images nav-icon"></i>
                        <p>Image Gallery </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="banner.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'banner.php') ? 'active' : ''; ?>">
                        <i class="far fa-images nav-icon"></i>
                        <p>Banners</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="youtube-video-list.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'youtube-video-list.php' || basename($_SERVER['PHP_SELF']) == 'youtube-video-add.php' || basename($_SERVER['PHP_SELF']) == 'youtube-video-edit.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fab fa-youtube"></i>
                        <p>
                            Featured Youtube
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="certificates.php" class="nav-link">
                        <i class="nav-icon fas fa-certificate"></i>
                        <p>
                            Certificate
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="trusted.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'trusted.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Trusted By
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="award.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'award.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-award"></i>
                        <p>
                            Award
                        </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="core-team.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'core-team.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-people-group"></i>
                        <p>
                            Core Team
                        </p>
                    </a>
                </li>

                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'blog-category.php' || basename($_SERVER['PHP_SELF']) == 'blogs.php') ? 'menu-open' : ''; ?>">
                    <a href="#" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'portfolio-category-add.php' || basename($_SERVER['PHP_SELF']) == 'portfolio-category-list.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fab fa-android"></i>
                        <p>
                            Blog
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="blog-category.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'blog-category.php') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="blogs.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'blogs.php')  ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blog Posts </p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="job-list.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'job-list.php' || basename($_SERVER['PHP_SELF']) == 'job-add.php' || basename($_SERVER['PHP_SELF']) == 'job-edit.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            Jobs
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="notice-list.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'notice-list.php' || basename($_SERVER['PHP_SELF']) == 'notice-add.php' || basename($_SERVER['PHP_SELF']) == 'notice-edit.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                            Notices
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contact-message.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact-message.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-message"></i>
                        <p>
                            Contact Message
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="free-trails.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'free-trails.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-message"></i>
                        <p>
                            Free Trail
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="get-quote.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'get-quote.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-message"></i>
                        <p>
                            Get Quote
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="changePassword.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'changePassword.php') ? 'active' : ''; ?>">
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