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
	<title>Training</title>
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

</head>

<body>

	<!--================================Header section start here=======================-->
	<?php include('./includes/navbar.php') ?>
	<!--================================Header section end here=======================-->

	<!--================================Header section end here=======================-->

	<!--================================photo editor sub Header section end here=======================-->
	<?php include_once "includes/course-nav.php"; ?>
	<!--================================photo editor sub Header section end here=======================-->

	<!--================================top-body section start here=======================-->
	<section class="top-body app_development" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 20px;">
		<div class="container ">
			<div class="row">
				<div class="col-12" style="z-index:500; ">
					<div class="top_body_txt_part">
						<h1 class="" style="font-size: 45px; line-height: 55px;">About Our Training</h1>
						<h2>Find out how our expert training courses can help with your professional development.</h2>
					</div>
					<div class="top-body-button pt-3">
						<a type="button" href="contact.php">Contact Us</a>
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
								<li class="breadcrumb-item active text-light" aria-current="page">Our Training</li>
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
				<div class="col-12 pb-5">
					<h4 class="text-center">SEO Expate Bangladesh Ltd. has been the foremost information technology service provider since 2013.</h4>
					<div class="border-bottom border-3 border-success">
						<p>The training programs of <a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd. a wide range of skills that are integral and necessary parts of everyday business. In our quest to address every organizational development need, we offer a gamut of training programs, which ranges from Executive Coaching and Leadership Training to basic Communication Skills. </p>
					</div>
				</div>
				<div class="col-md-6">
					<p>1. Practical & Project Based IT Training </p>
					<p>2. Soft Skill & Leadership Training </p>
					<p>3. Customized Services & On-Site Training </p>
					<p>4. Skill/Career <a href="software-development-course.php" class="text-success">Development Services</a> </p>
				</div>
				<div class="col-md-6">
					<div class="clip_img">
						<img src="frontend/images/Our-Training-Centers.png" alt="v " description="training programs" class="img-thumbnail">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================Our_Branches section start here=======================-->
	<section class="Our_Branches type_of branchresp">
		<div class="container">
			<div class="row">
				<div class="Our_Branches_txt ">
					<div class="Our_Departments bg-0 p-0" style="background: unset;">
						<h6 class="text-start ">Our Course / Training Services</h6>
					</div>
					<hr>
				</div>
				<div class="col-md-4 pt-5">
					<a href="regular-course.php">
						<div class="card">
							<img src="frontend/images/ecommerce-website2.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body">
								<h5 class="card-title">Regular Course</h5>
								<p class="card-text">All Course List</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 pt-5">
					<a href="graphics-course.php">
						<div class="card hover-zoom">
							<img src="frontend/images/corporate-website2.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body">
								<h5 class="card-title">Graphic Design</h5>
								<p class="card-text">Photoshop, Illustrator, etc</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 pt-5">
					<a href="digital-marketing-course.php">
						<div class="card">
							<img src="frontend/images/Bloging-website.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body">
								<h5 class="card-title">Digital Marketing</h5>
								<p class="card-text">Digital Marketing Training</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 pt-5">
					<a href="website-course.php">
						<div class="card">
							<img src="frontend/images/ecommerce-website2.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body">
								<h5 class="card-title">Website</h5>
								<p class="card-text">Web Design & Development</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 pt-5">
					<a href="software-development-course.php">
						<div class="card">
							<img src="frontend/images/news-website.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body">
								<h5 class="card-title">Software</h5>
								<p class="card-text">Software Development</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 pt-5">
					<a href="server-administration-course.php">
						<div class="card hover-zoom">
							<img src="frontend/images/ecommerce-website2.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body">
								<h5 class="card-title">Networking</h5>
								<p class="card-text">Network Administration</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-4 pt-5">
					<a href="app-development-course.php">
						<div class="card">
							<img src="frontend/images/news-website.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body">
								<h5 class="card-title">App Development</h5>
								<p class="card-text">Android & IOS Development</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 pt-5">
					<a href="microsoft-office-course.php">
						<div class="card">
							<img src="frontend/images/education-website.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body">
								<h5 class="card-title">Microsoft Office</h5>
								<p class="card-text">Microsoft Office Specialist</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 pt-5">
					<a href="it-security-course.php">
						<div class="card hover-zoom">
							<img src="frontend/images/entertainment-website.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body">
								<h5 class="card-title">IT Service & Business</h5>
								<p class="card-text">Business Management</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 pt-5">
					<a href="php-course.php">
						<div class="card">
							<img src="frontend/images/education-website.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body pb-5">
								<h5 class="card-title">PHP</h5>
								<p class="card-text">Website Development With PHP & MySQL</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 pt-5">
					<a href="laravel-course.php">
						<div class="card">
							<img src="frontend/images/news-website.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body pb-4">
								<h5 class="card-title">Laravel</h5>
								<p class="card-text">Website Development Using Laravel Framework (PHP)</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 pt-5">
					<a href="wordpress-course.php">
						<div class="card hover-zoom">
							<img src="frontend/images/entertainment-website.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body pb-5">
								<h5 class="card-title">Wordpress</h5>
								<p class="card-text">Web Design & Development With Wordpress</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-4 pt-5">
					<a href="aspnet-course.php">
						<div class="card">
							<img src="frontend/images/entertainment-website.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body pb-5">
								<h5 class="card-title">ASP.NET</h5>
								<p class="card-text">Web Application Development Using ASP.NET</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 pt-5">
					<a href="python-course.php">
						<div class="card">
							<img src="frontend/images/news-website.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body pb-5">
								<h5 class="card-title">Python</h5>
								<p class="card-text">Web Application Development Using Python</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 pt-5">
					<a href="website-course.php">
						<div class="card hover-zoom">
							<img src="frontend/images/ecommerce-website2.jpg" class="card-img-top" alt="Training Services " description="Training Services">
							<div class="card-body pb-4">
								<h5 class="card-title">Website Design</h5>
								<p class="card-text">Responsive Website Design With HTML, CSS, JS, Bootstrap.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--================================Our_Branches section end here=======================-->

	<!--================================top_ready_start section start here=======================-->
	<section class="top_ready_start">
		<div class="container">
			<?php include 'includes/seo-build-story.php' ?>
		</div>
	</section>
	<!--================================top_ready_start section end here=======================-->

	<!--===========================footer part start===================================-->
	<?php include('./includes/footer_menu.php') ?>
	<!--===========================footer part end===================================-->

	<?php include "includes/script.php" ?>

</body>

</html>