<?php
session_start();
$title = "Hire";
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $companyName = $_POST['company_name'];
    $companyWebsite = $_POST['company_website'];
    $type = $_POST['type'];
    $stuf = $_POST['stuf'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `contacts`(`name`, `email`, `phone`, `company_name`, `company_website`, `type`, `stuf`, `description`) VALUES('$name', '$email', '$phone', '$companyName', '$companyWebsite', '$type', '$stuf', '$description')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        $referrer = $_SERVER['HTTP_REFERER'];
        $successMessage = "Your message  successfully send";

        header("Location: hire.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
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
    <link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">
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

</head>

<body>
    <?php include "includes/navbar.php" ?>

    <section class="top-body top_about_us topaboutus" style="background-image: url(frontend/images/2.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover;  margin-top: 60px; ">
        <div class="container ">
            <div class="row">
                <div class="col-12" style="z-index:500;">
                    <div class="top_body_txt_part">
                        <h2>Hire Dedicated </h2>
                        <h1>IT Experts for your Project</h1>
                    </div>
                </div>
                <div class="col-md-8" style="z-index:500;">
                    <div class="d-flex gap-3 resflex">
                        <div class="" style="z-index:500;">
                            <div class="top-body-button pt-3">
                                <a type="button" href="web-development.php">Web development</a>
                            </div>
                        </div>
                        <div class="" style="z-index:500;">
                            <div class="top-body-button pt-3">
                                <a type="button" href="app-development.php">App Development</a>
                            </div>
                        </div>
                        <div class="" style="z-index:500;">
                            <div class="top-body-button pt-3">
                                <a type="button" href="contact.php">Let's Talk 😄</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
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
                                <li class="breadcrumb-item active text-light" aria-current="page">Hire</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================cliping_service section end here=======================-->

    <!--================================top-text-slider-part section start here=======================-->
    <section class="top_body_text_slider" style="background-image: url('frontend/images/slideimg.png');">
        <div class="container">
            <div class="row">
                <div class="tbt_text" style="text-align: justify;">
                    <p><a href="/" class="text-success">SEO Expate</a> stays ahead of the curve by exploring and
                        implementing cutting-edge technologies to provide businesses with a competitive edge. Serving
                        clients across Bangladesh and internationally, with a commitment to delivering tailored solutions
                        for diverse markets. Our top priorities are forging close bonds with our customers, learning about
                        their particular needs, and going above and beyond for them.</p>
                </div>
                <div class="tbt_slider">
                    <p>
                        <span class="txt-rotate" data-period="2000" data-rotate='[ "👉 Hire Mobile App Developers", "👉 Hire Game Developers", "👉 Hire Software Developers", "👉 Hire iOS Developers", " 👉 Hire Android Developers", "👉 Hire Android Game Developers", "👉 Hire WordPress Theme Designers", "👉 Hire PHP Developers", "👉 Hire Shopify App Developers." ]'>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--================================top-text-slider-part section end here=======================-->

    <!--================================top_body_project_countdown section start here=======================-->
    <section class="top_body_project_countdown">
        <div class="container">
            <div class="row">
                <div class="ptc_txt">
                    <div class="updatecode text-success" style="margin-bottom: -30px;">
                        <h6>A Short Introduction to Our Approach</h6>
                    </div>

                    <h4>Delivering IT Solutions Globally</h4>
                    <p class=" pt-4">In addition to creating a stress-free and sustainable IT environment, <a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd. produces outcomes that help
                        our clients stay ahead of the competition. By utilizing the newest and most widely used
                        technologies, our IT specialists continuously deliver user-centric IT solutions that are customized
                        to the needs of the business. We have been assisting clients all over the world to boost engagement,
                        sales, and conversions for more than ten years. Take a peek at the reliable numbers!</p>
                </div>
                <div class="ptc_countdown_wrp pt-5">
                    <div class="ptc_countdown">
                        <div class="count_container">
                            <span class="num" data-val="10+">000</span>
                            <span class="text">Years</span>
                        </div>

                        <div class="count_container">
                            <span class="num" data-val="25+">000</span>
                            <span class="text">Countries</span>
                        </div>

                        <div class="count_container">
                            <span class="num" data-val="450+">000 </span>
                            <span class="text">Projects</span>
                        </div>

                        <div class="count_container">
                            <span class="num" data-val="150+">000</span>
                            <span class="text">Clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================top_body_project_countdown section end here=======================-->

    <!--================================Our_Infrustructure section start here=======================-->
    <section class="Our_Infrustructure" style="background: unset;">
        <div class="container">
            <div class="row">
                <div class="Our_Infrustructure_img pt-3">
                    <img src="frontend/images/infrustructureer-1024x490.jpg" alt=" seo expate" description=" seo expate">
                </div>
            </div>
        </div>
    </section>
    <!--================================Our_Infrustructure section end here=======================-->

    <!--================================core_services section start here=======================-->
    <section class="Our_Departments core_services">
        <div class="container">
            <div class="row">
                <div class="updatecode">
                    <h6 class="pb-3 text-light">Hire Us</h6>
                </div>

                <p class="text-light pb-4" style="text-align: left;"><a href="/" class="text-success">SEO Expate</a>
                    delivers IT services and tech solutions and provides higher value to clients. Our service areas are
                    Software Development, <a href="app-development.php" class="text-success">Mobile App Development</a>, <a href="digital-marketing.php" class="text-success">Digital Marketing</a>, <a href="graphic-design.php" class="text-success">Graphics Design</a>, <a href="content-writing.php" class="text-success">Content Writing</a>, and many more. Also, we have a freelancing training
                    program that helps thousands of youth to build their career.</p>
                <div class="col-md-3">
                    <a href="web-development.php"><img src="frontend/images/core-servicr.png" alt=" seo expate" description=" seo expate"></a>
                    <h5 class="text-light pt-3">Web Development</h5>
                </div>
                <div class="col-md-3">
                    <a href="software-development.php"><img src="frontend/images/core-servicerter.png" alt=" seo expate" description=" seo expate"></a>
                    <h5 class="text-light pt-3">Software Development</h5>
                </div>
                <div class="col-md-3">
                    <a href="app-development.php"><img src="frontend/images/core-service-areaer.png" alt=" seo expate" description=" seo expate"></a>
                    <h5 class="text-light pt-3">Mobile App Development</h5>
                </div>
                <div class="col-md-3">
                    <a href="domain-hosting.php"><img src="frontend/images/core-servicer.png" alt=" seo expate" description=" seo expate"></a>
                    <h5 class="text-light pt-3">Domain & Hosting</h5>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-3">
                    <a href="graphic-design-and-photo-editing.php"><img src="frontend/images/iot-expertiser.png" alt=" seo expate" description=" seo expate"></a>
                    <h5 class="text-light pt-3">Graphic Design</h5>
                </div>
                <div class="col-md-3">
                    <a href="digital-marketing.php"><img src="frontend/images/core-service.png" alt=" seo expate" description=" seo expate"></a>
                    <h5 class="text-light pt-3">Digital Marketing</h5>
                </div>
                <div class="col-md-3">
                    <a href="seo-service.php"><img src="frontend/images/core-service-areater.png" alt=" seo expate" description=" seo expate"></a>
                    <h5 class="text-light pt-3">SEO</h5>
                </div>
                <div class="col-md-3">
                    <a href="content-writing.php"><img src="frontend/images/core-service-arear.png" alt=" seo expate" description=" seo expate"></a>
                    <h5 class="text-light pt-3">Content Writing</h5>
                </div>
            </div>
            <div class="top-body-button pt-5">
                <a type="button" href="services.php">See More Services</a>
            </div>
        </div>
    </section>
    <!--================================core-services section end here=======================-->

    <!--================================Our_Engagement section start here=======================-->
    <section class="Our_Departments Our_Engagement">
        <div class="container">
            <div class="row">
                <div class="updatecode">
                    <h6 class="pb-3 ">Our Engagement Models</h6>
                </div>
                <p class=" pb-4" style="text-align: left;">We have a different engagement model precisely created for our
                    services. Therefore, with years of experience, we develop these models to guarantee top-quality
                    performance, exceptional functionality, and impressive efficiency for your business.</p>
                <div class="col-md-4">
                    <img src="frontend/images/slide4.jpg" alt="image">
                    <h5 class=" pt-3">Agile Approach</h5>
                    <hr>
                    <p>The Agile approach allows for changes to be made throughout the development process. By breaking down
                        projects into smaller, manageable chunks, Agile allows for faster development cycles. Also, this
                        reduces the risk of major problems arising later in the project.</p>
                </div>
                <div class="col-md-4">
                    <img src="frontend/images/Manage Every Part of Your IT Operation.jpg" alt=" seo expate" description=" seo expate">
                    <h5 class=" pt-3">Dedicated Team</h5>
                    <hr>
                    <p>Our dedicated teams provide quality services, accelerate projects, and make the best use of
                        resources. This allows you to expand your capacity and access specific skill sets to tackle
                        difficult projects.</p>
                </div>
                <div class="col-md-4">
                    <img src="frontend/images/Having A Proactive and Proficient Team.jpg" alt=" seo expate" description=" seo expate">
                    <h5 class=" pt-3">Staff Augmentation</h5>
                    <hr>
                    <p>SEO Expate uses this method to find the exact expertise we need for a specific project. We can
                        quickly adjust our team size based on project needs.</p>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-6">
                    <img src="frontend/images/Speeding Up Your Business's Success.JPG" alt=" seo expate" description=" seo expate">
                    <h5 class=" pt-3">Hourly</h5>
                    <hr>
                    <p>We encourage the hourly work model because it gives greater flexibility in scheduling. Besides, we
                        can gain experience in different industries and with diverse teams by working on hourly projects.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="frontend/images/Having A Proactive and Proficient Team.jpg" alt=" seo expate" description=" seo expate">
                    <h5 class=" pt-3">Managed Service</h5>
                    <hr>
                    <p>We will manage your business remotely through this engagement model. This service includes managing
                        network, application, and infrastructure for security and many other operations.</p>
                </div>
            </div>
            <!-- <div class="top-body-button pt-5">
				<a type="button" href="contact.php">Find Out More</a>
			</div> -->
        </div>
    </section>
    <!--================================Our_Engagement section end here=======================-->

    <!--================================top-slider-part section start here=======================-->
    <section class="top-slider-part">
        <div class="container ">
            <div class="row">
                <div class="updatecode">
                    <h6 class="pb-3 "><span class="text-success">Our </span>Reliable Customers and Associates</h6>
                </div>
                <p><a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd. takes great pride in
                    collaborating with businesses, firms, service providers, corporations, government departments, and other
                    organizations as a top information technology company.
                    Here take a look at some of the top companies and institutions that <a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd. has already worked with.</p>

                <?php include('./includes/reliable-customers.php') ?>
            </div>
        </div>
    </section>
    <!--================================top-slider-part section end here=======================-->

    <!--================================Core_Values section start here=======================-->
    <section class="Core_Values">
        <div class="container">
            <div class="row">
                <div class="Core_Values_txt pb-5">
                    <div class="newupdcode">
                        <h5 class="pb-3 fs-1">We're Driven by <span class="text-success">our Core Values </span></h5>
                    </div>
                    <p><a href="/" class="text-success">SEO Expate</a> is one of the fastest-growing companies in
                        the country. Besides, at the heart of our success lies a determined commitment to our core values.
                        Thus, these values guide us to tackle challenges in every sector to deliver exceptional results for
                        our clients.</p>
                </div>
                <div class="col-md-6">
                    <div class="Core_Values_txt">
                        <div class="newudcode">
                            <h5 class="">Customer Obsession:</h5>
                        </div>
                        <h6 class=" pb-3">Commitment, Quality, Success</h6>
                        <p><a href="/" class="text-success">SEO Expate</a> is obsessed with bringing success to
                            clients. In addition, we always put our clients first. Client needs are our 1st priority and we
                            do everything to provide a better experience to the clients. Whether it's making a sale,
                            marketing our services, or providing ongoing support, our main goal is to ensure our clients
                            have a smooth and happy experience every step of the way.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="Core_Values_img pb-5 pt-3 ">
                        <img src="frontend/images/slide4.jpg" alt=" seo expate" description=" seo expate" class="img-thumbnail">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="Core_Values_img pb-5 pt-3">
                        <img src="frontend/images/seven.jpg" alt=" seo expate" description=" seo expate" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="Core_Values_txt">
                        <div class="newudcode">
                            <h5 class="">Eagerness to Invent:</h5>
                        </div>
                        <h6 class="pb-3">Courage, Innovation, Growth</h6>
                        <p>We believe in going beyond simply listening to our clients. Also, We are a team of passionate
                            inventors, constantly pushing the boundaries to develop groundbreaking solutions that empower
                            your success. Besides, the innovations we create have a ripple effect, benefiting not only your
                            business but also your customers and the communities you serve. So, you can partner with <a href="/" class="text-success">SEO Expate</a>, and let's co-create the future
                            together. Therefore, we will boost our inventive spirit, and convert your ideas into real-world
                            success. </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="Core_Values_txt">
                        <div class="newudcode">
                            <h5 class="">Long Term Thinking:</h5>
                        </div>
                        <h6 class=" pb-3">Integrity, Sustainability, Outcome</h6>
                        <p><a href="/" class="text-success">SEO Expate</a> believes that technology is not just a
                            tool, it's a powerful force for positive change. Besides, we are a purpose-driven company with a
                            desire to improve lives through innovative solutions. In addition, our focus isn't just on
                            immediate results. Moreover, we take a long-term perspective, preparing sustainable technology
                            that benefits not just our clients, but society as a whole.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="Core_Values_img pb-5 pt-3">
                        <img src="frontend/images/four.jpg" alt=" seo expate" description=" seo expate" class="img-thumbnail">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="Core_Values_img pb-5 pt-3">
                        <img src="frontend/images/slide6.jpg" alt=" seo expate" description=" seo expate" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="Core_Values_txt">
                        <div class="newudcode">
                            <h5 class="">Operation Excellence:</h5>
                        </div>
                        <h6 class=" pb-3">Ownership, Collaboration, Process</h6>
                        <p>We know that a good workplace is the foundation for exceptional results. That's why we are
                            dedicated to continuous improvement, promoting a culture that empowers our team and boosts our
                            success. Moreover, we believe in ethical practices and hold ourselves to the highest standards
                            of integrity. Therefore, honesty and transparency form the foundation for everything we do. We
                            have a highly-skilled, motivated team dedicated to exceeding expectations. Thus, this ensures
                            premium client service and innovative solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================Core_Values section end here=======================-->

    <!--================================top_our_industries  section start here=======================-->
    <section class="top_our_industries Fields_We_Cover top_our_clients" style="background: unset;">
        <?php include('./includes/fields-we-cover.php'); ?>
    </section>
    <!--================================top_our_industries section end here=======================-->

    <!--================================contact_form section start here=======================-->
    <section class="contact_form">
        <?php include('./includes/trusted-contact-form.php') ?>
    </section>
    <!--================================contact_form section end here=======================-->

    <?php include('./includes/seo-build-story.php'); ?>


    <?php include('./includes/footer_menu.php'); ?>

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