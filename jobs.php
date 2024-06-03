<?php
$title = "Jobs";
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
	<script>window.gtranslateSettings = {"default_language":"en","native_language_names":true,"detect_browser_language":true,"url_structure":"sub_domain","languages":["en","fr","de","it","es"],"wrapper_selector":".gtranslate_wrapper","horizontal_position":"left","vertical_position":"bottom"}</script>
	<script src="https://cdn.gtranslate.net/widgets/latest/lc.js" defer></script>

</head>
<?php include('./includes/navbar.php') ?>

<!--================================top-body section start here=======================-->
<section class="top-body top_about_us" style="background-image: url(frontend/images/2.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover;">
    <div class="container ">
        <div class="row">
            <div class="top_about_us_txt pb-5" style="z-index:500;">
            </div>
            <div class="col-12" style="z-index:500;">
                <div class="top_body_txt_part">
                    <h2>Find Your </h2>
                    <h1>Dream Job</h1>
                </div>
                <div class="top-body-button pt-3">
                    <a type="button" href="contact.php">Let's Talk 😄</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================top-body section end here=======================-->

<!--================================OpenPosition section start here=======================-->
<section class="OpenPosition">
    <div class="container">

        <div class="row pb-5">
            <div class="col-12">
                <h6 class="fw-bold fs-1">Currently Open Positions</h6>
                <p>Welcome to SEO Expate Bangladesh Ltd.' job portal. Apply your desired jobs that best fit your skills and passions from below.</p>
            </div>
        </div>
        <?php
        $qry = "SELECT * FROM jobs";
        $result = mysqli_query($conn, $qry);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="row pt-3 pb-5">
                    <div class="col-12">
                        <h6 class="fw-bold"><?php echo $row['title'] ?></h6>
                        <a href="#">
                            <h3 class="fw-bold text-success"><?php echo $row['title'] ?></h3>
                        </a>

                        <div class="d-flex gap-5">
                            <p>Job Type: <?php echo $row['job_type'] ?></p>
                            <p>Vacancies: <?php echo $row['vacancies'] ?></p>
                            <p> Deadline: <?php echo date('d M Y', strtotime($row['deadline'])); ?></p>

                        </div>
                        <div class="top-body-button pt-3">
                            <a type="button" target="_blank" href="<?php echo $row['apply_link'] ?>">Apply Here</a>
                        </div>
                    </div>
                </div>
                <hr>
        <?php
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        ?>

    </div>
</section>
<!--================================OpenPosition section end here=======================-->

<!--================================Our_Infrustructure section start here=======================-->
<section class="Our_Infrustructure">
    <div class="container">
        <div class="row">
            <div class="Our_Infrustructure_txt">
                <div class="updatecode">
                    <h6 class="text-center" style="padding-bottom: unset;">Our Infrustructure</h6>
                </div>
                <div class="updatecode" style="padding-bottom: unset;">
                    <h6 class="text-center" style="color: var(--secondary-text-color);">Pleasant Work Environment</h6>
                </div>
                <p class=" pt-2" style="text-align: justify;">We strongly believe that the productivity of a team greatly depends on a company culture. That's why we enable a positive work environment that increases creativity and innovation. This leads to seamless design, production, and testing stages, ensuring we deliver world-class technology solutions.</p>
            </div>
            <div class="Our_Infrustructure_img pt-3">
                <img src="frontend/images/infrustructureer-1024x490.jpg" alt="job" description=" job">
            </div>
        </div>
    </div>
</section>
<!--================================Our_Infrustructure section end here=======================-->

<!--================================Our_Engagement section start here=======================-->
<section class="Our_Departments Our_Engagement">
    <div class="container">
        <div class="row">
            <div class="updatecode pb-3">
                <h6 class="text-center" style="padding-bottom: unset;">Our Engagement Models</h6>
            </div>
            <p class=" pb-4" style="text-align: justify;">We have a different engagement model precisely created for our services. Therefore, with years of experience, we develop these models to guarantee top-quality performance, exceptional functionality, and impressive efficiency for your business.</p>
            <div class="col-md-4">
                <img src="frontend/images/slide4.jpg" alt="image">
                <h5 class=" pt-3">Agile Approach</h5>
                <hr>
                <p>The Agile approach allows for changes to be made throughout the development process. By breaking down projects into smaller, manageable chunks, Agile allows for faster development cycles. Also, this reduces the risk of major problems arising later in the project.</p>
            </div>
            <div class="col-md-4">
                <img src="frontend/images/Manage Every Part of Your IT Operation.jpg" alt="Our Engagement Models" description=" Our Engagement Models">
                <h5 class=" pt-3">Dedicated Team</h5>
                <hr>
                <p>Our dedicated teams provide quality services, accelerate projects, and make the best use of resources. This allows you to expand your capacity and access specific skill sets to tackle difficult projects.</p>
            </div>
            <div class="col-md-4">
                <img src="frontend/images/Having A Proactive and Proficient Team.jpg" alt="Our Engagement Models" description=" Our Engagement Models">
                <h5 class=" pt-3">Staff Augmentation</h5>
                <hr>
                <p>SEO Expate uses this method to find the exact expertise we need for a specific project. We can quickly adjust our team size based on project needs.</p>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-6">
                <img src="frontend/images/Speeding Up Your Business's Success.JPG" alt="Our Engagement Models" description=" Our Engagement Models">
                <h5 class=" pt-3">Hourly</h5>
                <hr>
                <p>We encourage the hourly work model because it gives greater flexibility in scheduling. Besides, we can gain experience in different industries and with diverse teams by working on hourly projects.</p>
            </div>
            <div class="col-md-6">
                <img src="frontend/images/Having A Proactive and Proficient Team.jpg" alt="Our Engagement Models" description=" Our Engagement Models">
                <h5 class=" pt-3">Managed Service</h5>
                <hr>
                <p>We will manage your business remotely through this engagement model. This service includes managing network, application, and infrastructure for security and many other operations.</p>
            </div>
        </div>
        <div class="top-body-button pt-5">
            <a type="button" href="contact.php">Find Out More</a>
        </div>
    </div>
</section>
<!--================================Our_Engagement section end here=======================-->

<!--================================Our_Culture section start here=======================-->
<section class="Events_SEO ">
    <div class="container">
        <div class="row">
            <div class="Events_SEO_txt">
                <p class="ptag">Our Culture</p>
                <h6 class="pt-2 pb-5">SEO Expate ensures a good cultural atmosphere for the employees. It encourages employees' creativity and also helps us to grow our businesses.</h6>
            </div>
            <div>
                <div class=" container">
                    <div class="row">
                        <?php

                        $blogQuery = "SELECT blogs.*, blog_categories.name as category_name
                FROM blogs 
                LEFT JOIN blog_categories ON blogs.blog_category_id = blog_categories.id
                WHERE blog_category_id = 4
                ORDER BY blogs.id DESC";

                        $blogs = $conn->query($blogQuery);
                        foreach ($blogs as $blog) {

                            $imagePath = $blog['image'];
                            $imageName = basename($imagePath);
                            $newImagePath = 'uploads/' . $imageName;
                        ?>
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="card" style="background: #00000091;">
                                    <div class="bg-image hover-zoom ">
                                        <img src="<?php echo $newImagePath ?>" alt="<?php echo $blog['alt_tag'] ?>" description="<?php echo $blog['alt_description'] ?>" class="w-100" />
                                        <a href="blog-details.php?id=<?php echo $blog['id'] ?>">
                                            <div class="mask">
                                                <div class="d-flex justify-content-start align-items-end h-100">
                                                    <h5><span class="badge bg-success ms-2"><?php echo $blog['category_name'] ?></span></h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <a href="blog-details.php?=" class="text-reset">
                                            <h5 class="card-title mb-3 text-light"><?php echo $blog['title'] ?></h5>
                                        </a>
                                        <a href="blog-details.php?id=<?php echo $blog['id'] ?>" class="text-reset">
                                            <p class="text-danger">Read Insight →</p>
                                            <p>&nbsp</p>
                                            <p>&nbsp</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================================Our_Culture section end here=======================-->



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
                    <img src="frontend/images/95991_prev_ui.png" alt="Our Engagement Models" description=" Our Engagement Models">
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
                <img src="frontend/images/Payment-method-banner-image-1024x73.webp" alt="Our Engagement Models" description=" Our Engagement Models" width="100%">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" ></script>

<?php if (isset($successMessage)): ?>
    <script>
        iziToast.success({
            title: 'Success',
            position: 'topRight',
            message: '<?php echo $successMessage; ?>',
        });
    </script>
<?php endif; ?>

<?php if (isset($errorMessage)): ?>
    <script>
        iziToast.error({
            title: 'Error',
            position:'topRight',
            message: '<?php echo $errorMessage; ?>',
        });
    </script>
<?php endif; ?>
</body>
</html>
