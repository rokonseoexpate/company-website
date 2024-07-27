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
	<title>Press Enquery </title>
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
	<!--================================Header section end here=======================-->

	<!--================================top-body section start here=======================-->
	<section class="top-body app_development phpdevelopment" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 60px; padding-top: 120px;">
		<div class="container ">
			<div class="row">
				<div class="col-md-7" style="z-index:500; ">
					<div class="top_body_txt_part">
						<h1 class="" style="font-size: 45px; line-height: 55px;">PR Resources</h1>
						<p style="margin-top: -15px; text-align: justify;">Stay connected with <a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd. PR and Media team for latest information on new technology innovation, latest products and updates. We are changing and bringing digital transformation across the world. Publish news about our digital journey and strategies to build a better future with technology.</p>
					</div>
				</div>
				<div class="col-md-5 m-auto" style="z-index:500; ">
					<img src="frontend/images/4d25c6bd3f17faaaa9015077d9da28ac.jpg" alt=" PR Resources" description=" PR Resources" class="img-thumbnail">
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
								<li class="breadcrumb-item active text-light" aria-current="page">Press Enquiry</li>
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
					<h4 class="text-center">We Can Help Journalists</h4>
					<div class="border-bottom border-3 border-success">
					</div>
				</div>
				<div class="col-12">
					<p>We help national and international journalists with up-to-date justified resources on <a href="contact.php" class="text-success">Information</a> and Technology. You will get the exact and accurate technology news from us.</p>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<section class="top_ready_start">
		<div class="container">
			<?php include('./includes/seo-build-story.php') ?>
		</div>
	</section>
	<!--===========================footer part start===================================-->
	<?php include('./includes/footer_menu.php') ?>
	<!--===========================footer part end===================================-->

	<?php include "includes/script.php" ?>

</body>

</html>