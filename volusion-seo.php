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
	<title>Volusion SEO </title>
	<meta property="og:title" content="Home - IT Services, Technology Solutions">

	<?php include('./includes/style.php') ?>

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
	<?php include('./includes/navbar.php') ?>

	<?php include "includes/seo-nav.php" ?>

	<!--================================top-body section start here=======================-->
	<section class="top-body app_development" style="background-image: url(frontend/images/1692873456499.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 20px;">
		<div class="container ">
			<div class="row">
				<div class="col-md-7 ecomresp" style="z-index:500;">
					<div class="top_body_txt_part">
						<h1 class="marginbottom" style="font-size: 45px; line-height: 55px;">Volusion SEO & Volusion </h1>
						<h2 style="margin-top: -15px;" class="fs-1">Website Search Marketing</h2>
						<p style="text-align:justify;">At OuterBox we're an eCommerce-focused agency with Volusion <a href="/" class="text-success">SEO Expates</a> on staff. Over the last 10 years, we’ve worked on many Volusion SEO campaigns and know eCommerce search engine marketing inside and out. We’ll develop a custom plan to take your traffic and online sales to the next level.</p>
					</div>
					<div class="row">
						<div class="col-md-7 pt-2">
							<div class=" border-bottom border-3 border-success pb-3"><a href="contact.php" style="color: #F4B400;" class="fs-5 fw-bold ">Get Your Volusion SEO Proposal</a></div>
						</div>
						<div class="col-md-2 ecomrespons">
							<img src="frontend/images/google-seo-proposal-audit.png.webp" alt="Website Search Marketing " description="Website Search Marketing" class="img-fluid">
						</div>
					</div>
				</div>
				<div class="col-md-5 m-auto ecomrespp" style="z-index:500;">
					<img src="frontend/images/seo-serviceS-patna.png" alt="Website Search Marketing " description="Website Search Marketing" class="img-thumbnail">
				</div>
			</div>
		</div>
	</section>
	<!--================================top-body section end here=======================-->

	<!--================================cliping_service section start here=======================-->
	<section class="cliping_service eCommerceSEO" style="background: var(--button-bg-hover-color); padding: 15px 0;">
		<div class="container">
			<div class="row">
				<div class="col-12" style="z-index:500;">
					<div class="top_about_us_txt" style="z-index:500;">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcumb_gph">
								<li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
								<li class="breadcrumb-item "><a href="seo-service.php" class="text-light">SEO</a></li>
								<li class="breadcrumb-item active text-light" aria-current="page">Volusion SEO</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================cliping-service section end here=======================-->

	<!--================================cliping_service section start here=======================-->
	<section class="cliping_service" style="background: unset;">
		<div class="container">
			<div class="row">
				<div class="col-md-6" style="z-index:500;">
					<div class="cliping_service_txt pb-2">
						<h6>About Volusion SEO Service. </h6>
					</div>
					<p class="pt-3">Volusion SEO refers to the process of optimizing your Volusion online store to improve its visibility in search engine results. The goal is to increase organic (non-paid) traffic to your website, which can lead to higher sales and revenue.</p>
				</div>
				<div class="col-md-6" style="margin: auto;">
					<div class="clip_img">
						<img src="frontend/images/0_Q5ErShpWJcDA-RdO.jpg" alt="Volusion SEO Service " description="Volusion SEO Service" class="img-thumbnail">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================cliping_service section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<section class=" graphicdesigns_content" style="padding-top: unset;">
		<div class="container shadow py-5 px-5 " style="border-left:15px solid var(--secondary-text-color); background: var(--bg-secondary-color);">
			<div class="row ">
				<div class="col-12">
					<h6 class="fw-bold fs-5 pb-3">Expert Volusion SEO Companies Offer <a href="seo-service.php" class="text-success">SEO Services</a> Including:</h6>
					<h6 class="fw-bold fs-6 pb-3">1. eCommerce Keyword Research</h6>
					<h6 class="fw-bold fs-6 pb-3">2. Template Optimization</h6>
					<h6 class="fw-bold fs-6 pb-3">3. Strategy Development</h6>
					<h6 class="fw-bold fs-6 pb-3">4. Ongoing Content Strategy</h6>
					<h6 class="fw-bold fs-6 pb-3">5. Link Building Services</h6>
					<h6 class="fw-bold fs-6 pb-3">6. Conversion Optimization</h6>
					<h6 class="fw-bold fs-6 pb-3">7. URL Modifications & Optimization</h6>
					<h6 class="fw-bold fs-6 pb-3">8. Monthly Detailed Reporting</h6>
					<h6 class="fw-bold fs-6 pb-3">9. & Much More</h6>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================accordion section start here=======================-->
	<section class="accordion_service">
		<div class="container">
			<div class="row">
				<div id="accordion">
					<div class="accordion-item">
						<h5 class="accordion-header" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Volusion Focused SEO Plans</h5>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
							<div class="accordion-body">We have proven SEO strategies developed to optimize your Volusion website. We'll take what's worked for other sites and apply it to yours.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">We Know Volusion
						</h5>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
							<div class="accordion-body">We've been working with Volusion since the beginning of the platform, so you're in good hands with an expert SEO team.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Have Volusion SEO Questions?
						</h5>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
							<div class="accordion-body">Just ask us! We'll answer any questions about SEO for your Volusion website.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================accordion section end here=======================-->

	<?php include('./includes/seo-build-story.php') ?>
	
	<?php include('./includes/footer_menu.php') ?>

	<?php include "includes/script.php" ?>

</body>

</html>