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
	<title>Reseller Hosting</title>

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
							<li class="breadcrumb-item active text-light" aria-current="page">Reseller Hosting</li>
						</ol>
					</nav>
				</div>
				<div class="col-12">
					<h4 class="text-light text-center">RESELLER HOSTING IN BANGLADESH</h4>
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
					<h3>BEST<span> RESELLER HOSTING </span> PACKAGES FOR YOU</h3>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">P-Basic</h6>
							<span class="value">
								$14.54
								<span class="month">Per Month</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>25 GB SSD Storage</li>
								<li>750 GB Bandwidth/m</li>
								<li>25 Cpanel Accounts</li>
								<li>WHM Control Panel</li>
								<li>RAID 10 SSD Server</li>
								<li class="text-success">FREE Weekly Backup</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li>LiteSpeed Web Server</li>
								<li>Private Name Servers</li>
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
								$23.95
								<span class="month">Per Month</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>50 GB SSD Storage</li>
								<li>1500 GB Bandwidth/m</li>
								<li>50 Cpanel Accounts</li>
								<li>WHM Control Panel</li>
								<li>RAID 10 SSD Server</li>
								<li class="text-success">FREE Weekly Backup</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li>LiteSpeed Web Server</li>
								<li>Private Name Servers</li>
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
								$35.07
								<span class="month">Per Month</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>75 GB SSD Storage</li>
								<li>2 TB Bandwidth/m</li>
								<li>75 Cpanel Accounts</li>
								<li>WHM Control Panel</li>
								<li>RAID 10 SSD Server</li>
								<li class="text-success">FREE Weekly Backup</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li>LiteSpeed Web Server</li>
								<li>Private Name Servers</li>
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
								$47.05
								<span class="month">Per Month</span>
							</span>
						</div>
						<div class="content">
							<ul>
								<li>100 GB SSD Storage</li>
								<li>3 TB Bandwidth/m</li>
								<li>100 Cpanel Accounts</li>
								<li>WHM Control Panel</li>
								<li>RAID 10 SSD Server</li>
								<li class="text-success">FREE Weekly Backup</li>
								<li class="text-success">FREE SSL Life Time</li>
								<li>LiteSpeed Web Server</li>
								<li>Private Name Servers</li>
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
				<p>Do you want to start a Domain Hosting business ? Are you a web developer or a entrepreneur? You can start your own web hosting business easily taking our reseller hosting package. <a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd is a best reseller hosting provider in Bangladesh. If you want to gain your business and earn more money form your web hosting business, You can choose our reseller hosting package. Our reseller hosting package is better for any hosting reseller person or businessman. We have fast and reliable various location based hosting server. You will get all business support from us. You can get a suitable <a href="domain-hosting.php" class="text-success">reseller hosting</a> package from us. You can get 4 types of reseller hosting package from us, Such as 25 GB, 50 GB, 75 GB and 100 GB. You can choose according to your needs. You can get best server and cheap price reseller hosting from us. We provide Linux base cpanel reseller hosting form various location datacenter server. Only we are the best reseller hosting provider in Bangladesh.</p>
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
	<!--===========================footer part end===================================-->

	<?php include "includes/script.php" ?>

</body>

</html>