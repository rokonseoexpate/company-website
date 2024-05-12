<?php
$title = "Dashboard";
ob_start();
$content = ob_get_clean();
include '../layouts/master.php';
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
?>

<div class="content-wrapper" style="min-height: 485px;">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-4 col-6">

                    <div class="small-box bg-info">
                        <?php
                        $branchQuery = "SELECT COUNT(*) AS totalBranches FROM branches";
                        $queryResult = mysqli_query($conn, $branchQuery);
                        $row = mysqli_fetch_assoc($queryResult);
                        ?>
                        <div class="inner">
                            <h3><?php echo  $row['totalBranches'] ?></h3>
                            <p>Total Branch</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag" style="font-family: Ionicons, Bangla506, sans-serif;"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6">

                    <div class="small-box bg-success">
                        <?php 
                            $department = "SELECT COUNT('*') AS TotalDepartments From departments"; 
                            $query =  mysqli_query($conn, $department);
                            $data = mysqli_fetch_assoc($query);
                        ?>
                        <div class="inner">

                            <h3> <?php echo  $data['TotalDepartments'] ?></h3>
                            <p>Total Department</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars" style="font-family: Ionicons, Bangla506, sans-serif;"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="small-box bg-warning">
                        <?php 
                        $employerQuery = "SELECT COUNT('*') AS totalEmployer From employees";
                        $employer = mysqli_query($conn, $employerQuery);
                        $data = mysqli_fetch_assoc($employer);
                        ?>
                        <div class="inner">
                            <h3><?php echo $data['totalEmployer']?></h3>
                            <p>Total Employer</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add" style="font-family: Ionicons, Bangla506, sans-serif;"></i>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph" style="font-family: Ionicons, Bangla506, sans-serif;"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right" style="font-family: &quot;Font Awesome 5 Free&quot;, Bangla506, sans-serif;"></i></a>
                    </div>
                </div> -->

            </div>
        </div>
    </section>
</div>