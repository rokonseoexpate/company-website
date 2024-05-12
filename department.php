<?php
$title = "All Departments
";
ob_start();
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
?>


    <!--================================top-body section start here=======================-->
    <section class="top-body app_development phpdevelopment" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 60px; padding-top: 120px;">
        <div class="container ">
            <div class="row">
                <div class="col-12" style="z-index:500; ">
                    <div class="top_body_txt_part">
                        <h1 class="" style="font-size: 45px; line-height: 55px;">All Departments</h1>
                        <p style="margin-top: -35px; text-align: justify;">Stay connected with SEO Expate Bangladesh Ltd. </p>
                    </div>
                </div>
            </div>
        </div>

        
    </section>
    <!--================================top-body section end here=======================-->

    <!--================================clipping service section start here=======================-->
    <section class="cliping_service eCommerceSEO" style="background: var(--global-bg-color); padding: 15px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12" style="z-index:500;">
                    <div class="breadcumb_gph d-flex">
                        <a class="text-light" href="index.php" class="text-success"><p>Home</p></a>
                        <p class="text-light px-3 ">»</p>
                        <p class="text-light">Departments</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================clippings service section end here=======================-->

    <!--================================Core_Team section start here=======================-->
    <section class="Core_Team allbranchlist department_team_members" style="background: unset; padding-top: unset;">
        <div class="container">
            <div class="row">
                <div class="Core_Team_txt pb-2 pt-5">
                    <h3 class="fs-1">Our <span>Team Members</span></h3>
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
                                    $emps =  "SELECT * FROM employees WHERE department_id = '$depId'";
                                    $resultemps = mysqli_query($conn, $emps);

                                    // Fetch employees and display them
                                    while ($emp = mysqli_fetch_assoc($resultemps)) {
                                        ?>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="card card-block shadow">
                                                <img src="<?php echo 'uploads/' . basename($emp['image']); ?>" alt="<?php echo $emp['name']; ?>" class="img-thumbnail">
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
        </div>
    </section>


    <section class="top_ready_start" >
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
                        <img src="frontend/images/95991_prev_ui.png" alt="image">
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
                    <img src="frontend/images/Payment-method-banner-image-1024x73.webp" alt="payment" width="100%">
                </div>
            </div>
        </div>
    </section>
    <!--================================Thrive_Globally section end here=======================-->



<?php
$main_content = ob_get_clean();
include './layouts/app.php';
?>