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
	<title>Domain Registration</title>

	<?php include('./includes/style.php') ?>

	<div class="gtranslate_wrapper"></div>
	<script>
		window.gtranslateSettings = {
			"default_language": "en",
			"native_language_names": true,
			"detect_browser_language": true,
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

	<?php include "includes/domain-hosting-nav.php" ?>

	<!--================================domai_search_bar section start here=======================-->
	<section class="domai_search_bar" style="background-image: url(frontend/images/website-support-5.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 80px 0;">
		<div class="container">
			<div class="row pb-5">
				<div class="top_about_us_txt" style="z-index:500;">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcumb_gph">
							<li class="breadcrumb-item "><a href="domain-hosting.php" class="text-light ">Domain & Hosting</a></li>
							<li class="breadcrumb-item active text-light" aria-current="page">Domain Registration</li>
						</ol>
					</nav>
				</div>
				<div class="col-12">
					<h1 class="text-light text-center">FIND YOUR PERFECT DOMAIN NAME.</h1>
					<p class="text-light text-center">Huge Choice. New Extensions. Low Prices. Register your perfect domain name today.</p>
				</div>
				<div class="col-12 pt-5">
					<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
						<div id="the-basics">
							<div class="input-group d-flex">
								<input name="searchField" id="searchField" type="search" class="form-control form-control-dark" style="width: 426px; " placeholder="seoexpate.com">
								<button class="btn btn-outline-secondary text-light" type="button" id="button-addon2">Search Domain</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================================domai_search_bar section end here=======================-->

	<!--================================all_plan section start here=======================-->
	<section class="all_plan PrivateServer">
		<div class="container">
			<?php include "includes/private-server.php" ?>
		</div>
	</section>
	<section class="WHAT_MAKES editor_all_services" style="padding-top: unset;">
		<div class="container">
			<?php include "includes/editor-all-services.php" ?>
		</div>
	</section>
	<!--================================all_plan section end here=======================-->

	<!--================================Private_Server section start here=======================-->
	<section class="Private_Server">
		<div class="container">
			<div class="row">
				<h1>AVAILABLE DOMAIN PRICING</h1>
				<?php include "includes/domain-price.php" ?>
			</div>
		</div>
	</section>
	<!--================================Private_Server section end here=======================-->

	<!--================================domai_support section start here=======================-->
	<section class="domai_support">
		<div class="container">
			<div class="row">
				<h4>NEED HELP? CALL OUR SUPPORT AT <span>+8801409957451</span></h4>
			</div>
		</div>
	</section>
	<!--================================domai_support section end here=======================-->

	<!--================================payment_method section start here=======================-->
	<section class="payment_method">
		<?php include "includes/payment-method.php" ?>
	</section>

	<?php include "includes/footer_menu.php" ?>

	<?php include "includes/script.php" ?>

</body>

</html>