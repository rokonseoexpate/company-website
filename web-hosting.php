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
	<title>Web Hosting</title>


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

	<?php include "includes/domain-hosting-nav.php" ?>
	<!--================================domai_search_bar section start here=======================-->
	<section class="domai_search_bar web_hosting" style="background-image: url(frontend/images/website-support-5.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 80px 0;">
		<div class="container">
			<div class="row pb-5">
				<div class="top_about_us_txt" style="z-index:500;">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcumb_gph">
							<li class="breadcrumb-item "><a href="domain-hosting.php" class="text-light ">Domain & Hosting</a></li>
							<li class="breadcrumb-item active text-light" aria-current="page">Web Hosting</li>
						</ol>
					</nav>
				</div>
				<div class="col-12">
					<h4 class="text-light text-center">HOSTING COMPANY IN BANGLADESH</h4>
				</div>
			</div>
		</div>
	</section>
	<!--================================domai_search_bar section end here=======================-->

	<!--================================domai_pricing_table section start here=======================-->
	<section class="domai_pricing_table web_hosting">
		<div class="container">
			<div class="row">
				<div class="domai_pricing_table_txt">
					<h3>SUITABLE <span> WEB HOSTING </span> PACKAGES FOR YOU</h3>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Plan 1</h6>
							<span class="value">
								$12.76
								<span class="month">Per Year</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>2 GB NVMe SSD Storage </li>
								<li>100 GB Data Transfer Monthly</li>
								<li>LiteSpeed Web Server</li>
								<li>2 Websites</li>
								<li>cPanel Control Panel</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li class="text-success">FREE Daily/Weekly Backup</li>
								<li>Unlimited Sub Domains</li>
								<li>Unlimited Email Accounts</li>
								<li>Unlimited Databases</li>
							</ul>
							<div class="link">
								<a href="#">ORDER NOW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Plan 2</h6>
							<span class="value">
								$17.02
								<span class="month">Per Year</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>3 GB NVMe SSD Storage</li>
								<li>150 GB Data Transfer Monthly</li>
								<li>LiteSpeed Web Server</li>
								<li>3 Websites</li>
								<li>cPanel Control Panel</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li class="text-success">FREE Daily/Weekly Backup</li>
								<li>Unlimited Sub Domains</li>
								<li>Unlimited Email Accounts</li>
								<li>Unlimited Databases</li>
							</ul>
							<div class="link">
								<a href="#">ORDER NOW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Plan 3</h6>
							<span class="value">
								$21.27
								<span class="month">Per Year</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>4 GB NVMe SSD Storage</li>
								<li>200 GB Data Transfer Monthly</li>
								<li>LiteSpeed Web Server</li>
								<li>4 Websites</li>
								<li>cPanel Control Panel</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li class="text-success">FREE Daily/Weekly Backup</li>
								<li>Unlimited Sub Domains</li>
								<li>Unlimited Email Accounts</li>
								<li>Unlimited Databases</li>
							</ul>
							<div class="link">
								<a href="#">ORDER NOW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Plan 4</h6>
							<span class="value">
								$25.52
								<span class="month">Per Year</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>5 GB NVMe SSD Storage</li>
								<li>250 GB Data Transfer Monthly</li>
								<li>LiteSpeed Web Server</li>
								<li>5 Websites</li>
								<li>cPanel Control Panel</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li class="text-success">FREE Daily/Weekly Backup</li>
								<li>Unlimited Sub Domains</li>
								<li>Unlimited Email Accounts</li>
								<li>Unlimited Databases</li>
							</ul>
							<div class="link">
								<a href="#">ORDER NOW</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-3">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Plan 5</h6>
							<span class="value">
								$38.29
								<span class="month">Per Year</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>10 GB NVMe SSD Storage </li>
								<li>500 GB Data Transfer Monthly</li>
								<li>LiteSpeed Web Server</li>
								<li>6 Websites</li>
								<li>cPanel Control Panel</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li class="text-success">FREE Daily/Weekly Backup</li>
								<li>Unlimited Sub Domains</li>
								<li>Unlimited Email Accounts</li>
								<li>Unlimited Databases</li>
							</ul>
							<div class="link">
								<a href="#">ORDER NOW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Plan 6</h6>
							<span class="value">
								$51.05
								<span class="month">Per Year</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>15 GB NVMe SSD Storage</li>
								<li>650 GB Data Transfer Monthly</li>
								<li>LiteSpeed Web Server</li>
								<li>11 Websites</li>
								<li>cPanel Control Panel</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li class="text-success">FREE Daily/Weekly Backup</li>
								<li>Unlimited Sub Domains</li>
								<li>Unlimited Email Accounts</li>
								<li>Unlimited Databases</li>
							</ul>
							<div class="link">
								<a href="#">ORDER NOW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Plan 7</h6>
							<span class="value">
								$59.56
								<span class="month">Per Year</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>20 GB NVMe SSD Storage</li>
								<li>800 GB Data Transfer Monthly</li>
								<li>LiteSpeed Web Server</li>
								<li>16 Websites</li>
								<li>cPanel Control Panel</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li class="text-success">FREE Daily/Weekly Backup</li>
								<li>Unlimited Sub Domains</li>
								<li>Unlimited Email Accounts</li>
								<li>Unlimited Databases</li>
							</ul>
							<div class="link">
								<a href="#">ORDER NOW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Plan 8</h6>
							<span class="value">
								$68.07
								<span class="month">Per Year</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>25 GB NVMe SSD Storage</li>
								<li>1000 GB Data Transfer Monthly</li>
								<li>LiteSpeed Web Server</li>
								<li>21 Websites</li>
								<li>cPanel Control Panel</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li class="text-success">FREE Daily/Weekly Backup</li>
								<li>Unlimited Sub Domains</li>
								<li>Unlimited Email Accounts</li>
								<li>Unlimited Databases</li>
							</ul>
							<div class="link">
								<a href="#">ORDER NOW</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================domai_pricing_table section end here=======================-->

	<!--================================domai_support section start here=======================-->
	<section class="domai_support">
		<div class="container">
			<div class="row">
				<h4>NEED HELP? CALL OUR SUPPORT AT <span>+8801409957451</span></h4>
			</div>
		</div>
	</section>
	<!--================================domai_support section end here=======================-->

	<!--================================all_plan section start here=======================-->
	<section class="all_plan">
		<div class="container">
			<?php include "includes/all-our-plan.php" ?>
		</div>
	</section>
	<!--================================all_plan section end here=======================-->

	<!--================================SSD_WEB section start here=======================-->
	<section class="SSD_WEB">
		<div class="container">
			<div class="row newudcode">
				<p> SEO Expate Bangladesh Ltd is a domain hosting <a href="/" class="text-success">company</a> in Bangladesh. Do you need a website hosting in Bangladesh ? Do you want to do a website ? You need domain name registration in Bangladesh and a hosting company in Bangladesh. We are best domain hosting provider for you. We provide best web hosting in Bangladesh. You can see our domain hosting price in Bangladesh. For creating a professional <a href="web-development.php" class="text-success">website</a> for your business or personal use, try to avoid free domain and hosting. If you use free <a href="domain-hosting.php" class="text-success">domain and hosting</a>, so you will not get better result form your website. Our hosting recommend WordPress, drupal,Joomla, Prestashop and many more. You can get cheap domain and web hosting from us.</p>
			</div>
		</div>
	</section>

	<section class="payment_method">
		<?php include "includes/payment-method.php" ?>
	</section>

	<?php include "includes/footer_menu.php" ?>

	<?php include "includes/script.php" ?>
</body>

</html>