<?php
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Fetch the branch details from the database based on the ID
$id = $_GET['id']; // Assuming the ID is passed via URL parameter
$sql = "SELECT * FROM notices WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$title = $row['title'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Title" content="This is the my site">
    <meta name="description" content="This is the my site">
    <meta name="keywords" content="seoebl, seoexpate">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Details </title>
    <meta property="og:title" content="Home - IT Services, Technology Solutions">

    <?php include "includes/style.php" ?>

    <link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">

    <div class="gtranslate_wrapper"></div>
 

</head>

<body>

    <!--================================Header section start here=======================-->
    <?php include('./includes/navbar.php') ?>
    <!--================================Header section end here=======================-->

    <!--================================cliping_service section start here=======================-->
    <section class="cliping_service eCommerceSEO" style="background: var(--global-bg-color); padding: 15px 0; ">
        <div class="container">
            <div class="row">
                <div class="col-12" style="z-index:500;">
                    <div class="top_about_us_txt" style="z-index:500;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcumb_gph">
                                <li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
                                <li class="breadcrumb-item "><a href="notice.php" class="text-light">Notice</a></li>
                                <li class="breadcrumb-item active text-light" aria-current="page">Notice Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================cliping_service section end here=======================-->
    <!--================================Cnotice section start here=======================-->
    <section class=" Cnotice">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="recentno0tice">
                        <div class="title pt-3">
                            <h3><?php echo $row['title']; ?></h3>
                        </div>
                        <div class="text-center mt-3 mb-5"></div>
                        <div class="row ">
                            <div class="col-sm-12 box mar-bottom10 pb-3">
                                <div class="text-start px-5"><strong>Title :</strong> <?php echo $row['title']; ?></div>
                                <div class=" text-start px-5"><strong>Notice Date :</strong> <?php
                                                                                                $originalDate = $row['date'];
                                                                                                $newDate = date("d M Y", strtotime($originalDate));
                                                                                                echo $newDate; ?></div>
                            </div>
                            <div class="col-sm-12 mar-bottom10 box"></div>
                            <div class="col-sm-12 box" align="center">
                                <iframe src="<?php
                                                $imagePath = $row['files'];
                                                $imageName = basename($imagePath);
                                                $newImagePath = 'uploads/' . $imageName;
                                                echo $newImagePath; ?>" width="100%" height="800"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center recentnotice">
                    <div class="recent_notice pt-3 pb-5">
                        <h3 class="">Recent Notice</h3>
                        <?php
                        $i = 1;
                        $qry = "SELECT * FROM notices ORDER BY id DESC";
                        $result = mysqli_query($conn, $qry); // Utilizing mysqli_query() to execute the query

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $date = date('d F', strtotime($row['date'])); // Format the date to 'd F' (day and month)
                        ?>
                                <div class="row notice-row notice-border">
                                    <div class="col-sm-2 col-xs-2 font-bold">
                                        <span class="day" style="color: var(--secondary-text-color); font-weight: 700;"><?php echo $date; ?></span>
                                    </div>
                                    <div class="col-sm-2 col-xs-2 year"><?php echo date('Y', strtotime($row['date'])); ?></div>
                                    <div class="col-sm-8 col-xs-8">
                                        <a href="notice-details.php?id=<?php echo $row['id']; ?>" class="margin-left-15"><?php echo $row['title']; ?></a>
                                    </div>
                                </div>
                        <?php
                            }
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                        ?>
                    </div>
                </div>
            </div>
    </section>

    <!--================================Cnotice section end here=======================-->

    <!--================================top_ready_start section start here=======================-->
    <section class="top_ready_start" style="padding-top: unset;">
        <div class="container">
            <?php include('./includes/seo-build-story.php') ?>
        </div>
    </section>
    <!--================================top_ready_start section end here=======================-->

    <!--===========================footer part start===================================-->
    <?php include('./includes/footer_menu.php') ?>
    <!--===========================footer part end===================================-->

    <?php include "includes/script.php" ?>

</body>

</html>