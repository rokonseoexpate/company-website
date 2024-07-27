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
	<title>Payment</title>

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
	<?php include "includes/navbar.php" ?>
	<!--================================Header section end here=======================-->

	<!--================================domain_hosting Sub_Header section start here=======================-->
	<?php include "includes/domain-hosting-nav.php" ?>
	<!--================================domain_hosting Sub_Header section end here=======================-->

	<!--================================domai_search_bar section start here=======================-->
	<section class="domai_search_bar web_hosting" style="background-image: url(frontend/images/website-support-5.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 80px 0;">
		<div class="container">
			<div class="row pb-5">
				<div class="top_about_us_txt" style="z-index:500;">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcumb_gph">
							<li class="breadcrumb-item "><a href="domain-hosting.php" class="text-light ">Domain & Hosting</a></li>
							<li class="breadcrumb-item active text-light" aria-current="page">Payment</li>
						</ol>
					</nav>
				</div>
				<div class="col-12">
					<h4 class="text-light text-center">Our Payment Options:</h4>
				</div>
			</div>
		</div>
	</section>
	<!--================================domai_search_bar section end here=======================-->

	<!--================================domai_support section start here=======================-->
	<section class="domai_support">
		<div class="container">
			<div class="row">
				<h4>NEED HELP? CALL OUR SUPPORT AT <span>+8801409957451</span></h4>
			</div>
		</div>
	</section>
	<!--================================domai_support section end here=======================-->

	<!--================================SSD_WEB section start here=======================-->
	<section class="SSD_WEB">
		<div class="container">
			<div class="row payment_option_domain">
				<h6>Dear Clients, you can use any payment method for your order activation.</h6>
				<p> We prefer to pay by automation from the invoice pay now button section. If you pay online by automation, you will get activation of your service instantly. <a href="domain-hosting.php" class="text-success">SEO Expate Bangladesh Ltd</a> accepts bKash, Rocket, Nagad, Upay, Cellfin, okwallet, ipay, Bank transfers for Bangladeshi clients. If you are not Bangladeshi then you can pay via paypal, payoneer or credit card.</p>
			</div>
		</div>
	</section>
	<!--================================SSD_WEB section end here=======================-->

	<!--================================payment_method section start here=======================-->
	<section class="payment_method">
		<?php include "includes/payment-method.php" ?>
	</section>
	<!--================================payment_method section end here=======================-->

	<!--===========================footer part start===================================-->
	<?php include "includes/footer_menu.php" ?>
	<!--===========================footer part end===================================-->

	<?php include "includes/script.php" ?>

</body>

</html>