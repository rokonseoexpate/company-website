<?php

require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="Title" content="This is the my site">
	<meta name="description" content="This is the my site">
	<meta name="keywords" content="seoebl, seoexpate">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Website Course </title>
	<meta property="og:title" content="Home - IT Services, Technology Solutions">

	<?php include "includes/style.php" ?>

	<link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">

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

	<!--================================Header section start here=======================-->
	<?php include('./includes/navbar.php') ?>
	<!--================================photo editor sub Header section end here=======================-->
	<?php include 'includes/course-nav.php' ?>
	<!--================================photo editor sub Header section end here=======================-->

	<!--================================top-body section start here=======================-->
	<section class="top-body app_development phpdevelopment" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 20px;">
		<div class="container ">
			<div class="row">
				<div class="col-md-7 ecomresp" style="z-index:500; ">
					<div class="top_body_txt_part">
						<h1 class="marginbottom" style="font-size: 45px; line-height: 55px;">Website Design And Development</h1>
						<p class="marggintop" style="margin-top: -15px; text-align: justify;">Currently, the demand for web design and development is high in the marketplaces, and is constantly increasing and will increase in the future. Many people who learn web design and development work are working in many popular marketplaces including Upwork, Fiverr, Freelancer, PeoplePerhour. The course is arranged. In such a way that one can easily make his Web App from basic to professional and can easily build his career in the world of WEB.</p>
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
					<img src="frontend/images/8-Phase-of-the-WordPress-Web-Design-and-Development-Process-to-Follow.jpg" alt="Amazon " description="Amazon" class="img-thumbnail">
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
								<li class="breadcrumb-item "><a href="training.php" class="text-light">Our Training</a></li>
								<li class="breadcrumb-item active text-light" aria-current="page">Website Design</li>
							</ol>
						</nav>
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
				<div class="col-12 pb-5 newudcode">
					<h6 class="text-center">Our courses</h6>
					<div class="border-bottom border-3 border-success">
					</div>
				</div>
				<div class="col-12">
					<p>1. Web Design – HTML,CSS, Javascript, jQuery, Bootstrap,Wordpress</p>
					<p>2. Web Development Using <a href="php-course.php" class="text-success">PHP</a> (OOP)</p>
					<p>3. Web Development Using <a href="python-course.php" class="text-success">Python & Django</a></p>
					<p>4. Web Development Using <a href="laravel-course.php" class="text-success">Laravel</a></p>
					<p>5. Web Design & Development with MERN </p>
				</div>
				<div class="col-12">
					<p>In this course we will create real world projects, which will make you confident and will help you build complex web applications, while also helping you maintain your confidence on the job.</p>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<section class=" graphicdesigns_content" style="padding-top: unset;">
		<div class="container shadow px-5 py-5">
			<div class="row">
				<div class="col-12 pb-5 newudcode">
					<h6 class="text-center">Why learn to work with us?</h6>
					<div class="border-bottom border-3 border-success">
					</div>
				</div>
				<div class="col-12">
					<p>1. Hand-penned practical projects and assignments are given in each class</p>
					<p>2. Recorded videos of all classes are provided.</p>
					<p>3. Class PDFs and slides are provided.</p>
					<p>4. In addition to direct mentoring support, you will get much more from this course! </p>
					<p>5. Issuance of Online Verified Certificate.</p>
					<p>6. Life time course free facility is available.</p>
					<p>7. Office can do free time lab practice.</p>
					<p>8. Classes can be done online and offline.</p>
					<p>9. Arrangement of <a href="jobs.php" class="text-success">job</a> placement and internship.</p>
					<p>10. Interview and <a href="jobs.php" class="text-success">job</a> preparation is done.</p>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<section class=" graphicdesigns_content" style="padding-top: unset;">
		<div class="container shadow px-5 py-5 border-start border-5 border-warning border-0">
			<div class="row">
				<div class="col-12 pb-5 newudcode">
					<h6 class="text-center">Additional facilities</h6>
					<div class="border-bottom border-3 border-success">
					</div>
				</div>
				<div class="col-12">
					<p>1. We have our own hostel for boys and girls.</p>
					<p>2. We have good facilities for online and offline courses.</p>
					<p>3. There are arrangements for job placement and internship.</p>
					<p>4. Confirm your discount offer by registering today.</p>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================top_ready_start section start here=======================-->
	<section class="top_ready_start" style="padding-top: unset;">
		<div class="container">
			<?php include "includes/seo-build-story.php" ?>
		</div>
	</section>
	<!--================================top_ready_start section end here=======================-->

	<!--===========================footer part start===================================-->
	<?php include('./includes/footer_menu.php') ?>
	<!--===========================footer part end===================================-->

	<?php include "includes/script.php" ?>

</body>

</html>