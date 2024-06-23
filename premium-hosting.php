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
	<title>Premium Hosting</title>

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
							<li class="breadcrumb-item active text-light" aria-current="page">Premium Hosting</li>
						</ol>
					</nav>
				</div>
				<div class="col-12">
					<h4 class="text-light text-center">PREMIUM HOSTING PLAN FOR HIGH TRAFFIC SITES</h4>
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
					<h3>PREMIUM <span> HOSTING </span> PACKAGES</h3>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">P-Basic</h6>
							<span class="value">
								$8.51
								<span class="month">Per Month</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>10 GB SSD Storage</li>
								<li>Bandwidth Unlimited</li>
								<li>2 GB Dedicated RAM</li>
								<li>1 Core Dedicated CPU</li>
								<li>1 Websites Hosting</li>
								<li class="text-success">FREE Weekly Backup</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li>RAID 10 SSD Server</li>
								<li>LiteSpeed Web Server</li>
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
							<h6 class="title">P-Advance</h6>
							<span class="value">
								$15.31
								<span class="month">Per Month</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>20 GB SSD Storage</li>
								<li>Bandwidth Unlimited</li>
								<li>2 GB Dedicated RAM</li>
								<li>2 Core Dedicated CPU</li>
								<li>1 Websites Hosting</li>
								<li class="text-success">FREE Weekly Backup</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li>RAID 10 SSD Server</li>
								<li>LiteSpeed Web Server</li>
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
							<h6 class="title">P-Professional</h6>
							<span class="value">
								$21.27
								<span class="month">Per Month</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>30 GB SSD Storage</li>
								<li>Bandwidth Unlimited</li>
								<li>3 GB Dedicated RAM</li>
								<li>2 Core Dedicated CPU</li>
								<li>1 Websites Hosting</li>
								<li class="text-success">FREE Weekly Backup</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li>RAID 10 SSD Server</li>
								<li>LiteSpeed Web Server</li>
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
							<h6 class="title">P-Ultimate</h6>
							<span class="value">
								$29.78
								<span class="month">Per Month</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>50 GB SSD Storage</li>
								<li>Bandwidth Unlimited</li>
								<li>4 GB Dedicated RAM</li>
								<li>2 Core Dedicated CPU</li>
								<li>1 Websites Hosting</li>
								<li class="text-success">FREE Weekly Backup</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li>RAID 10 SSD Server</li>
								<li>LiteSpeed Web Server</li>
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
			<div class="row newudcode">
				<h6>ALL OUR PLANS INCLUDE</h6>
				<div class="col-lg-2 col-md-4 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<i class="fa-solid fa-shield-virus" alt=" seo expate" description=" seo expate"></i>
						<p>EASY-TO-USE <br>CONTROL PANEL</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<i class="fa-brands fa-linux" alt=" seo expate" description=" seo expate"></i>
						<p>CLOUD <br>LINUX OS</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<i class="fa-solid fa-rocket" alt=" seo expate" description=" seo expate"></i>
						<p>99.9% UPTIME <br>GUARANTEE</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<i class="fa-solid fa-headset" alt=" seo expate" description=" seo expate"></i>
						<p>24/7/365 <br> PREMIUM SUPPORT</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<i class="fa-brands fa-app-store-ios" alt=" seo expate" description=" seo expate"></i>
						<p>1-CLICK <br>INSTALL APPS</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<i class="fa-solid fa-database" alt=" seo expate" description=" seo expate"></i>
						<p>UNLIMITED <br>DATABASE</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2 col-md-4 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<i class="fa-solid fa-road-lock" alt=" seo expate" description=" seo expate"></i>
						<p>SSL <br>CERTIFICATES</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<i class="fa-brands fa-google-wallet" alt=" seo expate" description=" seo expate"></i>
						<p>FREE <br>SITEBUILDER</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<i class="fa-brands fa-nfc-symbol" alt=" seo expate" description=" seo expate"></i>
						<p>TRANSFER <br>WEBSITE & DOMAIN</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<i class="fa-solid fa-money-bill-1" alt=" seo expate" description=" seo expate"></i>
						<p>30 DAYS <br>MONEY BACK</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<i class="fa-solid fa-shield-virus" alt=" seo expate" description=" seo expate"></i>
						<p>EASY-TO-USE <br>CONTROL PANEL</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<i class="fa-solid fa-headset" alt=" seo expate" description=" seo expate"></i>
						<p>24/7/365 <br>PREMIUM SUPPORT</p>
					</div>
				</div>
			</div>
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
	<!--================================SSD_WEB section end here=======================-->

	<!--================================payment_method section start here=======================-->
	<section class="payment_method">
		<?php include "includes/payment-method.php" ?>
	</section>
	<!--================================payment_method section end here=======================-->

	<?php include "includes/footer_menu.php" ?>

	<?php include "includes/script.php" ?>

</body>

</html>