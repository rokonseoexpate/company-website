<?php
$title = "App Development Course";
ob_start();
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

?>

<!--================================photo editor sub Header section end here=======================-->
<div class="photo_edipth">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-center" id="main_nav">
                    <ul class="navbar-nav ">
                        <li class="nav-item"><a class="nav-link" href="training.php"> Training</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="regular-course.php" data-bs-toggle="dropdown">Regular Course / Training</a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="website-course.php">Website</a></li>
                                <li><a class="dropdown-item" href="php-course.php">PHP</a></li>
                                <li><a class="dropdown-item" href="laravel-course.php">Laravel</a></li>
                                <li><a class="dropdown-item" href="aspnet-course.php">ASP.NET</a></li>
                                <li><a class="dropdown-item" href="python-course.php">Python</a></li>
                                <li><a class="dropdown-item" href="wordpress-course.php">WordPress</a></li>
                                <li><a class="dropdown-item" href="graphics-course.php">Graphics Design</a></li>
                                <li><a class="dropdown-item" href="digital-marketing-course.php">Digital Marketing</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="it-training.php" data-bs-toggle="dropdown">IT Training</a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="microsoft-office-course.php"> Microsoft Office</a></li>
                                <li><a class="dropdown-item" href="software-development-course.php">Software Development Course</a></li>
                                <li><a class="dropdown-item" href="app-development-course.php">App Development Course</a></li>
                                <li><a class="dropdown-item" href="adobe-course.php">Adobe / Freelancing</a></li>
                                <li><a class="dropdown-item" href="server-administration-course.php">Network & Server Administration</a></li>
                                <li><a class="dropdown-item" href="it-security-course.php">IT Security, Service & Business Management</a></li>
                                <li><a class="dropdown-item" href="machine-learning-course.php">AI / Machine Learning / Robotics</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!--================================photo editor sub Header section end here=======================-->

<!--================================top-body section start here=======================-->
<section class="top-body app_development phpdevelopment" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 20px;">
    <div class="container ">
        <div class="row">
            <div class="col-md-7 ecomresp" style="z-index:500; ">
                <div class="top_body_txt_part">
                    <h1 class="marginbottom" style="font-size: 45px; line-height: 55px;">ANDROID & IOS APP DEVELOPMENT</h1>
                </div>
                <div class="row">
                    <div class="col-md-6 pt-2" style="z-index:500; ">
                        <div class="courses p-2  rounded shadow bg-white border-0 border-top border-warning border-5">
                            <p class="text-dark text-center">Course Duration</p>
                            <p class="text-success text-center" style="margin-top: -20px;"><strong>3 months (3 days a week)</strong></p>
                        </div>
                    </div>
                    <div class="col-md-3 pt-2" style="z-index:500; ">
                        <div class="courses p-2  rounded shadow bg-white border-0 border-top border-warning border-5">
                            <p class="text-dark text-center">Total Class</p>
                            <p class="text-success text-center" style="margin-top: -20px;"><strong>36</strong></p>
                        </div>
                    </div>
                    <div class="col-md-3 pt-2" style="z-index:500; ">
                        <div class="courses p-2  rounded shadow bg-white border-0 border-top border-warning border-5">
                            <p class="text-dark text-center ">Project</p>
                            <p class=" text-center text-success" style="margin-top: -20px;"><strong>15+</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 m-auto ecomrespp" style="z-index:500; ">
                <img src="frontend/images/thinkdebug-mobileapp.jpg" alt=" ANDROID & IOS APP DEVELOPMENT" description=" ANDROID & IOS APP DEVELOPMENT" class="img-thumbnail">
            </div>
        </div>
    </div>
</section>
<!--================================top-body section end here=======================-->


<!--================================cliping_service section start here=======================-->
<section class="cliping_service eCommerceSEO ecomrespp" style="background: var(--global-bg-color); padding: 15px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12" style="z-index:500;">
                <div class="top_about_us_txt" style="z-index:500;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcumb_gph">
                            <li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
                            <li class="breadcrumb-item "><a href="training.php" class="text-light">Our Training</a></li>
                            <li class="breadcrumb-item active text-light" aria-current="page">ANDROID & IOS APP DEVELOPMENT</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================cliping_service section end here=======================-->

<!--================================cliping_service section start here=======================-->
<section class="cliping_service " >
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin: auto;">
                <div class="clip_img">
                    <img src="frontend/images/Mobile-App-Development_prev_ui.png" alt=" Android App Development" description=" Android App Development" class="img-thumbnail">
                </div>
            </div>
            <div class="col-md-6 margintop" style="z-index:500;">
                <div class="cliping_service_txt pb-2 pt-2"><h6>Android App Development with Java:</h6></div>
                <p class="pt-3" >This course will teach the students how to program core features and classes from the Java programming language that are used in Android, which is the dominant platform for developing and deploying mobile device apps.</p>
                <p class="" >In particular, this course will cover key Java programming language features that control the flow of execution through an app (such as Java’s various looping constructs and conditional statements), enable access to structured data (such as Java's built-in arrays and common classes in the Java Collections Framework, such as ArrayList and HashMap), group related operations and data into classes and interfaces (such as Java's primitive and user-defined types, fields, methods, generic parameters,and exceptions), customizing the behavior of existing classes through inheritance and polymorphism (such as subclassing and overriding virtual methods). Learners of this  <a href="training.php" class="text-success">course</a> will apply these Java features in the context of core Android components (such as Activities and basic UI elements) by applying common tools (such as Android Studio) needed to develop Java programs and useful Android apps.</p>
            </div>
        </div>
    </div>
</section>
<!--================================cliping_service section end here=======================-->

<!--================================editor_texts section start here=======================-->
<section class=" graphicdesigns_content">
    <div class="container shadow px-5 py-5">
        <div class="row">
            <div class="col-12 pb-5">
                <h4 class="text-center">Course Module :</h4>
                <div class="border-bottom border-3 border-success">
                </div>
            </div>
            <div class="col-12">
                <p>1. Basic Idea about Java</p>
                <p>2. Introduction to Android Studio</p>
                <p>3. Writing a Simple Android App Using Basic Java Features</p>
                <p>4. Knowledge about Structured Java</p>
                <p>5. Inheritance and Polymorphism</p>
                <p>6. Classes and Different Interfaces</p>
            </div>
        </div>
    </div>
</section>
<!--================================editor_texts section end here=======================-->

<!--================================editor_texts section start here=======================-->
<section class=" graphicdesigns_content ptunset" style="padding-top: unset;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 marginbottom">
                <div class="container shadow px-5 py-3 border-start border-5 border-success border-0">
                    <div class="row">
                        <div class="col-12 pb-3">
                            <h4 class="text-center fs-3">Needed Software</h4>
                            <div class="border-bottom border-3 border-success">
                            </div>
                        </div>
                        <div class="col-12">
                            <p>1. Visual Studio Code</p>
                            <p>2. Android Studio</p>
                            <p>3. Android Studio</p>
                            <p>4. Java Development Kit</p>
                            <p>&nbsp</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container shadow px-5 py-3 border-start border-5 border-warning border-0">
                    <div class="row">
                        <div class="col-12 pb-3">
                            <h4 class="text-center fs-3">Marketplace</h4>
                            <div class="border-bottom border-3 border-success">
                            </div>
                        </div>
                        <div class="col-12">
                            <p>1. Upwork</p>
                            <p>2. Fiver</p>
                            <p>3. Android Software Development Firm</p>
                            <p>4. Freelancer</p>
                            <p>5. Codecanyon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================editor_texts section end here=======================-->

<!--================================cliping_service section start here=======================-->
<section class="cliping_service " >
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="z-index:500;">
                <div class="cliping_service_txt pb-2 pt-2"><h6>iOS App Development</h6></div>
                <p class="pt-3" >This course will help the students learn about the iOS App Development Basics, and also the Development of iOS apps with the help of Swift specialization. This will greatly expand the programming skills and will help the students apply to authentic app development projects.</p>
                <p class="" >The topic that is covered in this course includes Xcode basics, Core iOS and Cocoa Touch frameworks, simple user interface creation, MVC Architecture, and a lot more. This course mainly focuses on using Apple's components to access different external sensors like cameras, microphones, and GPS. By the end of this course, the students will be able to create a basic App that will be according to specified parameters and guidelines. The course is currently taught with the latest Swift programs in mind.</p>
            </div>
            <div class="col-md-6" style="margin: auto;">
                <div class="clip_img">
                    <img src="frontend/images/MIndcob-15-1024x1024.png" alt=" iOS App Development" description=" iOS App Development" class="img-thumbnail">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================cliping_service section end here=======================-->

<!--================================editor_texts section start here=======================-->
<section class=" graphicdesigns_content">
    <div class="container shadow px-5 py-5">
        <div class="row">
            <div class="col-12 pb-5">
                <h4 class="text-center">Course Module :</h4>
                <div class="border-bottom border-3 border-success">
                </div>
            </div>
            <div class="col-12">
                <p>1. Introduction to XCode</p>
                <p>2. Introduction to the basics of iOS App Development</p>
                <p>3. UIKit and Interface builder</p>
                <p>4. Advanced UI Concept</p>
            </div>
        </div>
    </div>
</section>
<!--================================editor_texts section end here=======================-->

<!--================================editor_texts section start here=======================-->
<section class=" graphicdesigns_content ptunset" style="padding-top: unset;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 marginbottom">
                <div class="container shadow px-5 py-3 border-start border-5 border-success border-0">
                    <div class="row">
                        <div class="col-12 pb-3">
                            <h4 class="text-center fs-3">Needed Software</h4>
                            <div class="border-bottom border-3 border-success">
                            </div>
                        </div>
                        <div class="col-12">
                            <p>1. XCode</p>
                            <p>2. iOS Emulator</p>
                            <p>3. Cocoa Touch</p>
                            <p>4. Core iOS</p>
                            <p>&nbsp</p>
                            <p>&nbsp</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container shadow px-5 py-3 border-start border-5 border-warning border-0">
                    <div class="row">
                        <div class="col-12 pb-3">
                            <h4 class="text-center fs-3">Marketplace</h4>
                            <div class="border-bottom border-3 border-success">
                            </div>
                        </div>
                        <div class="col-12">
                            <p>1. Upwork</p>
                            <p>2. Fiver</p>
                            <p>3. iOS Software Development Firm</p>
                            <p>4. Freelancer</p>
                            <p>5. Github</p>
                            <p>6. Codecanyon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================editor_texts section end here=======================-->

<!--================================top_ready_start section start here=======================-->
<section class="top_ready_start" style="padding-top: unset;">
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
                    <img src="frontend/images/95991_prev_ui.png" alt=" We can build your story" description=" We can build your story">
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
                <img src="frontend/images/Payment-method-banner-image-1024x73.webp" alt="payment" description="payment" width="100%">
            </div>
        </div>
    </div>
</section>
<!--================================Thrive_Globally section end here=======================-->



<?php
$main_content = ob_get_clean();
include './layouts/app.php';
?>

