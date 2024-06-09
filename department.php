<?php
$title = "All Departments";
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Title" content="Seo Expate Bangladesh LTD.">
    <meta name="description" content="Seo Expate Bangladesh LTD.">
    <meta name="keywords" content="seoebl, seoexpate, Seo Expate Bangladesh LTD.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;  ?></title>
    <meta property="og:title" content="Home - IT Services, Technology Solutions">

    <?php include('./includes/style.php') ?>

    <div class="gtranslate_wrapper"></div>
    <script>
        window.gtranslateSettings = {
            "default_language": "en",
            "native_language_names": true,
            "detect_browser_language": true,
            "url_structure": "sub_domain",
            "languages": ["en", "fr", "de", "it", "es"],
            "wrapper_selector": ".gtranslate_wrapper",
            "horizontal_position": "left",
            "vertical_position": "bottom"
        }
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/lc.js" defer></script>
    <style>
        @media screen and (max-width: 2600px) {
            .allbranchlist .card {
                width: 263px;
            }
        }

        @media screen and (max-width: 412px) {
            .allbranchlist .card {
                width: 160px;
            }
        }
    </style>
</head>

<body>
    <?php include('./includes/navbar.php') ?>

    <!--================================top-body section start here=======================-->
    <section class="top-body app_development phpdevelopment" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 60px; padding-top: 120px;">
        <div class="container ">
            <div class="row">
                <div class="col-12" style="z-index:500; ">
                    <div class="top_body_txt_part">
                        <h1 class="" style="font-size: 45px; line-height: 55px;">All Department</h1>
                        <p style="margin-top: -35px; text-align: justify;">Stay connected with SEO Expate Bangladesh Ltd. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================top-body section end here=======================-->

    <!--================================cliping_service section start here=======================-->
    <section class="cliping_service eCommerceSEO" style="background: var(--global-bg-color); padding: 15px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12" style="z-index:500;">
                    <div class="top_about_us_txt" style="z-index:500;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcumb_gph">
                                <li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
                                <li class="breadcrumb-item active text-light" aria-current="page">Department</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================cliping_service section end here=======================-->
    <!--================================Core_Team section start here=======================-->
    <!-- <section class="Core_Team allbranchlist department_team_members" style="background: unset; padding-top: unset;">
    <div class="container">
        <div class="row">
            <div class="Core_Team_txt pb-2 pt-5">
                <h6 class="fs-1 pb-3">Our <span class="text-success">Team Members</span></h6>
            </div>
            <div class="Core_Team_members">

                <div class="container">
                    <?php
                    $qry = "SELECT * FROM departments";
                    $result = mysqli_query($conn, $qry);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="Core_Team_txt pb-2 pt-5">
                                <h3 class="fs-3 pb-3"><?= $row['name']; ?></h3>
                                <hr>
                            </div>
                            <div class="row pt-5">
                                <?php
                                $depId = $row['id'];
                                // Complete the SQL query to select employees based on department ID
                                $emps =  "SELECT * FROM employees WHERE department_id = '$depId' ORDER BY dep_priority ASC";
                                $resultemps = mysqli_query($conn, $emps);

                                // Fetch employees and display them
                                while ($emp = mysqli_fetch_assoc($resultemps)) {
                                ?>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="card card-block shadow">
                                            <img src="<?php echo 'uploads/' . basename($emp['image']); ?>" alt="<?php echo $emp['alt_tag']; ?>" description="<?php echo $emp['alt_description'] ?>" class="img-thumbnail">
                                            <div class="card-body">
                                                <h5 class="card-title fs-6"><?php echo $emp['name']; ?></h5>
                                                <p class="card-text fs-6"><?php echo $emp['designation']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                    ?>
                            </div>
                            <hr>
                            <?php
                        }
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                            ?>
                </div>
            </div>
        </div>
    </div>
</section> -->
    <!--================================Core_Team section end here=======================-->

    <section class="Core_Team allbranchlist department_team_members" style="background: unset; padding-top: unset;">
        <div class="container">
            <div class="row">
                <div class="Core_Team_txt pb-2 pt-5">
                    <h6 class="fs-1">Our <span class="text-success">Team Members</span></h6>
                    
                </div>
                <?php
                $qry = "SELECT * FROM departments";
                $result = mysqli_query($conn, $qry);

                if ($result) {
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($rows as $key => $row) {
                ?>
                        <div class="Core_Team_txt pb-2">
                            <h6 class="fs-3 pb-3 <?php if ($key != 0) { ?> pt-5 <?php } ?>"><?php echo $row['name']; ?></h6>
                            <hr>
                        </div>
                        <div class="bd-example">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <?php
                                            $depId = $row['id'];
                                            // Complete the SQL query to select employees based on department ID
                                            $emps =  "SELECT * FROM employees WHERE department_id = '$depId' ORDER BY dep_priority ASC";
                                            $resultemps = mysqli_query($conn, $emps);

                                            // Fetch employees and display them
                                            while ($emp = mysqli_fetch_assoc($resultemps)) {
                                            ?>
                                                <td>
                                                    <div class="card card-block shadow">
                                                        <img src="<?php echo 'uploads/' . basename($emp['image']); ?>" alt="<?php echo $emp['alt_tag']; ?>" description="<?php echo $emp['alt_description'] ?>" class="img-thumbnail">
                                                        <div class="card-body">
                                                            <h5 class="card-title fs-6"><?php echo $emp['name']; ?></h5>
                                                            <p class="card-text fs-6"><?php echo $emp['designation']; ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                            <?php
                                            }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
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
    </section>


    <!--================================top_ready_start section start here=======================-->
    <section class="top_ready_start">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_ready_start_txt">
                        <h3>We can build your story</h3>
                        <h6>We have partnered with great companies and entrepreneurs all over the world. And, provided the best service for them</h6>
                    </div>
                    <div class="top-body-button pt-5">
                        <a type="button" href="contact.php">Get In Touch</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top_ready_start_img text-left">
                        <img src="frontend/images/95991_prev_ui.png" alt=" seo expate" description=" seo expate">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================top_ready_start section end here=======================-->


    <!--================================Thrive_Globally section start here=======================-->
    <section class="PAY_MENT" style="padding: 20px 0;">
        <div class="container">
            <div class="row">
                <div class="PAY_IMG">
                    <img src="frontend/images/Payment-method-banner-image-1024x73.webp" alt=" seo expate" description=" seo expate" width="100%">
                </div>
            </div>
        </div>
    </section>
    <!--================================Thrive_Globally section end here=======================-->


    <?php
    include('./includes/footer_menu.php');
    ?>

    <script src="frontend/js/jquery-3.5.1.js"></script>
    <script src="frontend/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/js/owl.carousel.js"></script>
    <script src="frontend/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

    <?php if (isset($successMessage)) : ?>
        <script>
            iziToast.success({
                title: 'Success',
                position: 'topRight',
                message: '<?php echo $successMessage; ?>',
            });
        </script>
    <?php endif; ?>

    <?php if (isset($errorMessage)) : ?>
        <script>
            iziToast.error({
                title: 'Error',
                position: 'topRight',
                message: '<?php echo $errorMessage; ?>',
            });
        </script>
    <?php endif; ?>
</body>

</html>