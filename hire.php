<?php
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
        echo "<script>alert('successfully submited');</script>";
        header("Location: contact.php");
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

<section class="top-body top_about_us topaboutus"
    style="background-image: url(frontend/images/2.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover;  margin-top: 60px; ">
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
                    <span class="txt-rotate" data-period="2000"
                        data-rotate='[ "👉 Hire Mobile App Developers", "👉 Hire Game Developers", "👉 Hire Software Developers", "👉 Hire iOS Developers", " 👉 Hire Android Developers", "👉 Hire Android Game Developers", "👉 Hire WordPress Theme Designers", "👉 Hire PHP Developers", "👉 Hire Shopify App Developers." ]'>
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
                <p class=" pt-4">In addition to creating a stress-free and sustainable IT environment, <a
                        href="/" class="text-success">SEO Expate</a> Bangladesh Ltd. produces outcomes that help
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
                Software Development, <a href="app-development.php" class="text-success">Mobile App Development</a>, <a
                    href="digital-marketing.php" class="text-success">Digital Marketing</a>, <a
                    href="graphic-design.php" class="text-success">Graphics Design</a>, <a href="content-writing.php"
                    class="text-success">Content Writing</a>, and many more. Also, we have a freelancing training
                program that helps thousands of youth to build their career.</p>
            <div class="col-md-3">
                <a href="web-development.php"><img src="frontend/images/core-servicr.png" alt=" seo expate"
                        description=" seo expate"></a>
                <h5 class="text-light pt-3">Web Development</h5>
            </div>
            <div class="col-md-3">
                <a href="software-development.php"><img src="frontend/images/core-servicerter.png" alt=" seo expate"
                        description=" seo expate"></a>
                <h5 class="text-light pt-3">Software Development</h5>
            </div>
            <div class="col-md-3">
                <a href="app-development.php"><img src="frontend/images/core-service-areaer.png" alt=" seo expate"
                        description=" seo expate"></a>
                <h5 class="text-light pt-3">Mobile App Development</h5>
            </div>
            <div class="col-md-3">
                <a href="domain-hosting.php"><img src="frontend/images/core-servicer.png" alt=" seo expate"
                        description=" seo expate"></a>
                <h5 class="text-light pt-3">Domain & Hosting</h5>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-3">
                <a href="photo-editor.php"><img src="frontend/images/iot-expertiser.png" alt=" seo expate"
                        description=" seo expate"></a>
                <h5 class="text-light pt-3">Graphic Design</h5>
            </div>
            <div class="col-md-3">
                <a href="digital-marketing.php"><img src="frontend/images/core-service.png" alt=" seo expate"
                        description=" seo expate"></a>
                <h5 class="text-light pt-3">Digital Marketing</h5>
            </div>
            <div class="col-md-3">
                <a href="seo-service.php"><img src="frontend/images/core-service-areater.png" alt=" seo expate"
                        description=" seo expate"></a>
                <h5 class="text-light pt-3">SEO</h5>
            </div>
            <div class="col-md-3">
                <a href="content-writing.php"><img src="frontend/images/core-service-arear.png" alt=" seo expate"
                        description=" seo expate"></a>
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
                <img src="frontend/images/Manage Every Part of Your IT Operation.jpg" alt=" seo expate"
                    description=" seo expate">
                <h5 class=" pt-3">Dedicated Team</h5>
                <hr>
                <p>Our dedicated teams provide quality services, accelerate projects, and make the best use of
                    resources. This allows you to expand your capacity and access specific skill sets to tackle
                    difficult projects.</p>
            </div>
            <div class="col-md-4">
                <img src="frontend/images/Having A Proactive and Proficient Team.jpg" alt=" seo expate"
                    description=" seo expate">
                <h5 class=" pt-3">Staff Augmentation</h5>
                <hr>
                <p>SEO Expate uses this method to find the exact expertise we need for a specific project. We can
                    quickly adjust our team size based on project needs.</p>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-6">
                <img src="frontend/images/Speeding Up Your Business's Success.JPG" alt=" seo expate"
                    description=" seo expate">
                <h5 class=" pt-3">Hourly</h5>
                <hr>
                <p>We encourage the hourly work model because it gives greater flexibility in scheduling. Besides, we
                    can gain experience in different industries and with diverse teams by working on hourly projects.
                </p>
            </div>
            <div class="col-md-6">
                <img src="frontend/images/Having A Proactive and Proficient Team.jpg" alt=" seo expate"
                    description=" seo expate">
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
                Here take a look at some of the top companies and institutions that <a href="/"
                    class="text-success">SEO Expate</a> Bangladesh Ltd. has already worked with.</p>
            <div class="col-12 pt-5">
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner pb-5">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="frontend/images/slide1.png" class="d-block w-100" alt=" seo expate"
                                description=" seo expate">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="frontend/images/slide2.png" class="d-block w-100" alt=" seo expate"
                                description=" seo expate">
                        </div>
                        <div class="carousel-item">
                            <img src="frontend/images/slide3.png" class="d-block w-100" alt=" seo expate"
                                description=" seo expate">
                        </div>
                        <div class="carousel-item">
                            <img src="frontend/images/slide4.png" class="d-block w-100" alt=" seo expate"
                                description=" seo expate">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
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
                    <img src="frontend/images/slide4.jpg" alt=" seo expate" description=" seo expate"
                        class="img-thumbnail">
                </div>
            </div>
        </div>
        <hr>
        <div class="row pt-4">
            <div class="col-md-6">
                <div class="Core_Values_img pb-5 pt-3">
                    <img src="frontend/images/seven.jpg" alt=" seo expate" description=" seo expate"
                        class="img-thumbnail">
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
                        business but also your customers and the communities you serve. So, you can partner with <a
                            href="/" class="text-success">SEO Expate</a>, and let's co-create the future
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
                    <img src="frontend/images/four.jpg" alt=" seo expate" description=" seo expate"
                        class="img-thumbnail">
                </div>
            </div>
        </div>
        <hr>
        <div class="row pt-4">
            <div class="col-md-6">
                <div class="Core_Values_img pb-5 pt-3">
                    <img src="frontend/images/slide6.jpg" alt=" seo expate" description=" seo expate"
                        class="img-thumbnail">
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
<section class="top_our_industries Fields_We_Cover" style="background: unset;">
    <div class="container">
        <div class="row">
            <div class="industries_txt newupdcode">
                <h5>Fields We Cover</h5>
                <p>Having been in the information technology services provider business for more than ten years, we have
                    finished several projects for our clients in almost every sector. Including the following items:</p>
            </div>
            <div class=" col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-network-wired" alt=" seo expate" description=" seo expate"></i>
                    <p>Finance & Banking</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-dumpster-fire" alt=" seo expate" description=" seo expate"></i>
                    <p>E-commerce</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-door-open" alt=" seo expate" description=" seo expate"></i>
                    <p>Telco</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-sign-hanging" alt=" seo expate" description=" seo expate"></i>
                    <p>Real Estate</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-brands fa-accusoft" alt=" seo expate" description=" seo expate"></i>
                    <p>Software</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-person-skiing-nordic" alt=" seo expate" description=" seo expate"></i>
                    <p>Health & Fitness</p>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-wine-glass" alt=" seo expate" description=" seo expate"></i>
                    <p>Food & Drink</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-music" alt=" seo expate" description=" seo expate"></i>
                    <p>Music</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-hospital" alt=" seo expate" description=" seo expate"></i>
                    <p>Medical</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-prescription-bottle-medical" alt=" seo expate" description=" seo expate"></i>
                    <p>Pharmaceutical</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-gas-pump" alt=" seo expate" description=" seo expate"></i>
                    <p>Automotive</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-user-graduate" alt=" seo expate" description=" seo expate"></i>
                    <p>Education</p>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-cart-flatbed-suitcase" alt=" seo expate" description=" seo expate"></i>
                    <p>Travel</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-person-through-window" alt=" seo expate" description=" seo expate"></i>
                    <p>Entertainment</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-calendar-day" alt=" seo expate" description=" seo expate"></i>
                    <p>Retail</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-fax" alt=" seo expate" description=" seo expate"></i>
                    <p>Business</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-icons" alt=" seo expate" description=" seo expate"></i>
                    <p>Photo & Video</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-id-card-clip" alt=" seo expate" description=" seo expate"></i>
                    <p>Non-Profit</p>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-3 col-sm-6 col">
                <div class="industrie_serve">

                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-diagram-project" alt=" seo expate" description=" seo expate"></i>
                    <p>Startup</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-newspaper" alt=" seo expate" description=" seo expate"></i>
                    <p>AR/VR</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-couch" alt=" seo expate" description=" seo expate"></i>
                    <p>Furniture</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col">
                <div class="industrie_serve">

                </div>
            </div>
        </div>
    </div>
</section>
<!--================================top_our_industries section end here=======================-->

<!--================================contact_form section start here=======================-->
<section class="contact_form">
    <div class="container">
        <div class="row">
                <div class="contact_form_txt newudcode">
					<h6 class="fs-5">Ready to Start the Journey with SEO Expate Bangladesh Ltd? <br>How can we help you?</h6>
				</div>
            <div class="col-md-6 pb-5">
                <div class="contact_form_icons">
                    <h5>Trusted by</h5>
                    <div class="row">
                        <?php
						$qry = "SELECT * FROM trusted_bies order by orderBy ASC";
						if ($result = $conn->query($qry)) {
							while ($row = $result->fetch_assoc()) {
								$imagePath = $row['image'];
								$imageName = basename($imagePath);
								$newImagePath = 'uploads/' . $imageName;
						?>
                        <div class="col-md-4">
                            <img src="<?php echo $newImagePath ?>" alt="<?php echo $row['alt_tag'] ?>"
                                description="<?php echo $row['alt_description'] ?>">
                        </div>
                        <?php }
						} ?>
                    </div>

                </div>
            </div>
            <div class="col-md-6 pb-5">
                <div class="multi_contact_forms">
                    <div class="explore_tabs">
                        <div class="container">
                            <div class="row ">
                                <h6>I'm Looking For</h6>
                                <p>[ Please select your area of interest below ]</p>
                                <div class="">
                                    <!-- Rounded tabs -->
                                    <ul id="myTab" role="tablist"
                                        class="nav nav-tabs nav-pills flex-column flex-sm-row text-center border-0 ">
                                        <li class="nav-item flex-sm-fill" role="presentation">
                                            <a id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal"
                                                type="button" href="#home" role="tab" aria-controls="personal"
                                                aria-selected="true"
                                                class="nav-link border-0  font-weight-bold active">Career & Jobs </a>
                                        </li>
                                        <li class="nav-item flex-sm-fill" role="presentation">
                                            <a id="employment-tab" data-bs-toggle="tab" data-bs-target="#employment"
                                                href="#employment" role="tab" aria-controls="employment"
                                                aria-selected="false" class="nav-link border-0  font-weight-bold"> Press
                                                Enquiry</a>
                                        </li>
                                        <li class="nav-item flex-sm-fill" role="presentation">
                                            <a id="Hire-tab" data-bs-toggle="tab" data-bs-target="#Hire" href="#Hire"
                                                role="tab" aria-controls="Hire" aria-selected="false"
                                                class="nav-link border-0  font-weight-bold">Hire IT Experts</a>
                                        </li>
                                        <li class="nav-item flex-sm-fill" role="presentation">
                                            <a id="Project-tab" data-bs-toggle="tab" data-bs-target="#Project"
                                                href="#Project" role="tab" aria-controls="Project" aria-selected="false"
                                                class="nav-link border-0  font-weight-bold">Project Outsource</a>
                                        </li>
                                        <li class="nav-item flex-sm-fill" role="presentation">
                                            <a id="Partnership-tab" data-bs-toggle="tab" data-bs-target="#Partnership"
                                                href="#" role="tab" aria-controls="Partnership" aria-selected="false"
                                                class="nav-link border-0  font-weight-bold">Partnership</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div id="Hire" role="tabpanel" aria-labelledby="Hire-tab"
                                            class="tab-pane fade px-4 py-5 show active">
                                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"
                                                class="row g-3" id="hireForm">
                                                <div class="col-12">
                                                    <input type="hidden" name="type" value="hire" id="">
                                                    <label for="fullname" class="form-label">Your Name
                                                        <span>*</span></label>
                                                    <input type="text" name="name" class="form-control" id="fullname"
                                                        placeholder="Your Full Name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">Email
                                                        <span>*</span></label>
                                                    <input type="email" name="email" class="form-control"
                                                        id="inputEmail4" placeholder="info@seoexpate.com" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputPassword4" class="form-label">Phone Number
                                                        <span>*</span></label>
                                                    <input type="text" name="phone" class="form-control"
                                                        id="inputPassword4" placeholder="+8801409957451" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="CompanyName" name="company_name"
                                                        class="form-label">Company Name</label>
                                                    <input type="text" class="form-control" id="CompanyName"
                                                        placeholder="Company Name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="CompanyWebsite" class="form-label">Company
                                                        Website</label>
                                                    <input type="text" name="company_website" class="form-control"
                                                        id="CompanyWebsite" placeholder="Company Website" required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="stuf" class="form-label">Number of Staff Required
                                                        <span>*</span></label>
                                                    <input type="text" name="stuf" class="form-control" id="stuf"
                                                        placeholder="Number of Staff Required" required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="type" class="form-label">Briefly Describe Your
                                                        Requirements <span>*</span></label>
                                                    <textarea type="text" name="description" class="form-control"
                                                        id="type" placeholder="Start Typing Here..."></textarea>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn submitBtn">Submit & Schedule a
                                                        Meeting</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div id="Project" role="tabpanel" aria-labelledby="Project-tab"
                                            class="tab-pane fade px-4 py-5">
                                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"
                                                class="row g-3">
                                                <div class="col-12">
                                                    <input type="hidden" name="type" value="project" id="">
                                                    <label for="fullname" class="form-label">Your Name
                                                        <span>*</span></label>
                                                    <input type="text" name="name" class="form-control" id="fullname"
                                                        placeholder="Your Full Name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">Email
                                                        <span>*</span></label>
                                                    <input type="email" name="email" class="form-control"
                                                        id="inputEmail4" placeholder="info@seoexpate.com" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputPassword4" class="form-label">Phone Number
                                                        <span>*</span></label>
                                                    <input type="text" name="phone" class="form-control"
                                                        id="inputPassword4" placeholder="+8801409957451" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="CompanyName" name="company_name"
                                                        class="form-label">Company Name</label>
                                                    <input type="text" class="form-control" id="CompanyName"
                                                        placeholder="Company Name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="CompanyWebsite" class="form-label">Company
                                                        Website</label>
                                                    <input type="text" name="company_website" class="form-control"
                                                        id="CompanyWebsite" placeholder="Company Website" required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="type" class="form-label">Briefly Describe Your
                                                        Requirements <span>*</span></label>
                                                    <textarea type="text" name="description" class="form-control"
                                                        id="type" placeholder="Start Typing Here..."></textarea>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn">Submit & Schedule a
                                                        Meeting</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="Partnership" role="tabpanel" aria-labelledby="Partnership-tab"
                                            class="tab-pane fade px-4 py-5">
                                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"
                                                class="row g-3">
                                                <div class="col-12">
                                                    <input type="hidden" name="type" value="partnership" id="">
                                                    <label for="fullname" class="form-label">Your Name
                                                        <span>*</span></label>
                                                    <input type="text" name="name" class="form-control" id="fullname"
                                                        placeholder="Your Full Name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">Email
                                                        <span>*</span></label>
                                                    <input type="email" name="email" class="form-control"
                                                        id="inputEmail4" placeholder="info@seoexpate.com" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputPassword4" class="form-label">Phone Number
                                                        <span>*</span></label>
                                                    <input type="text" name="phone" class="form-control"
                                                        id="inputPassword4" placeholder="+8801409957451" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="CompanyName" class="form-label">Company Name</label>
                                                    <input type="text" name="company_name" class="form-control"
                                                        id="CompanyName" placeholder="Company Name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="CompanyWebsite" class="form-label">Company
                                                        Website</label>
                                                    <input type="text" name="company_website" class="form-control"
                                                        id="CompanyWebsite" placeholder="Company Website" required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="type" class="form-label">Briefly Describe Your
                                                        Requirements <span>*</span></label>
                                                    <textarea type="text" name="description" class="form-control"
                                                        id="type" placeholder="Start Typing Here..."></textarea>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn">Submit & Schedule a
                                                        Meeting</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================contact_form section end here=======================-->

<!--================================top_ready_start section start here=======================-->
<section class="top_ready_start">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top_ready_start_txt">
                    <h3>We can build your story</h3>
                    <h6>We have partnered with great companies and entrepreneurs all over the world. And, provided the
                        best service for them</h6>
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
                <img src="frontend/images/Payment-method-banner-image-1024x73.webp" alt=" seo expate"
                    description=" seo expate" width="100%">
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