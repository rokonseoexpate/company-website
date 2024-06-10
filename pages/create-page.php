<?php
$title = "Add new page";
session_start();
ob_start();
include '../layouts/master.php';
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (!$_SESSION['username']) {
    header("Location: login.php");
}

$content = ob_get_clean();


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
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag" style="font-family: Ionicons, Bangla506, sans-serif;"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right" style="font-family: &quot;Font Awesome 5 Free&quot;, Bangla506, sans-serif;"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars" style="font-family: Ionicons, Bangla506, sans-serif;"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right" style="font-family: &quot;Font Awesome 5 Free&quot;, Bangla506, sans-serif;"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add" style="font-family: Ionicons, Bangla506, sans-serif;"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right" style="font-family: &quot;Font Awesome 5 Free&quot;, Bangla506, sans-serif;"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

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
                </div>

            </div>
        </div>
    </section>

</div>