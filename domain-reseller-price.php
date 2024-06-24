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
	<title>Domain Reseller Price</title>

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
							<li class="breadcrumb-item active text-light" aria-current="page">Domain Reseller Price</li>
						</ol>
					</nav>
				</div>
				<div class="col-12">
					<h4 class="text-light text-center">DOMAIN PRICE IN BANGLADESH</h4>
					<p class="text-light txtalign pt-3">You can find domain prices in Bangladesh from here. If you want to create a website for your business or personal use or for blogging, You have to buy a domain name. If you are Bangladeshi, you can buy a domain here in SEO Expate Bangladesh Ltd. We provide domain registration services in Bangladesh. We provide .com .net .org .info .us. .uk .me .tv and many more domain tlds that you can see below. We also sell .bd domains. You can buy and check .bd domain price from here. BTCL provides .bd domain in Bangladesh and we register it on behalf of our client from BTCL. You can check the domain price below. You can complete domain registration in Bangladesh. It’s our main business service domain name registration in Bangladesh. You can check your domain by our domain checker and you can see your domain availability. For purchasing a domain, you have to register our site by providing domain information. We are the best <a href="domain-hosting.php" class="text-success">domain hosting provider in Bangladesh</a> and provide domain hosting standard price, and we sell it in Bangladeshi Taka. You can register your domain with the best domain registrar in Bangladesh.</p>
				</div>
			</div>
		</div>
	</section>
	<!--================================domai_search_bar section end here=======================-->

	<!--================================Private_Server section start here=======================-->
	<section class="Private_Server">
		<div class="container">
			<div class="row">
				<h1>DOMAIN NAME REGISTRATION PRICE</h1>
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
	<!--================================payment_method section end here=======================-->

	<?php include "includes/footer_menu.php" ?>

	<?php include "includes/script.php" ?>

</body>

</html>