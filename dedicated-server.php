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
	<title>DEDICATED SERVER</title>

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
	<section class="domai_search_bar web_hosting" style="background-image: url(frontend/images/website-support-5.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 80px 0;">
		<div class="container">
			<div class="row pb-5">
				<div class="top_about_us_txt" style="z-index:500;">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcumb_gph">
							<li class="breadcrumb-item "><a href="domain-hosting.php" class="text-light ">Domain & Hosting</a></li>
							<li class="breadcrumb-item active text-light" aria-current="page">Dedicated Server</li>
						</ol>
					</nav>
				</div>
				<div class="col-12">
					<h4 class="text-light text-center">DEDICATED SERVER(USA DATA CENTER)</h4>
				</div>
			</div>
		</div>
	</section>
	<!--================================domai_search_bar section end here=======================-->

	<!--================================Private_Server section start here=======================-->
	<section class="Private_Server ">
		<div class="container">
			<div class="row">
				<h1>Single Processor Dedicated Servers</h1>
				<p>Perfect for High Traffic Sites & Apps, File Server Hosting, Reseller Hosting</p>
				<div class="bd-example">
					<div class="table-responsive-xxl">
						<table class="table table-bordered table-responsive-xxl">
							<thead>
								<tr>
									<th>
										<h6>SERVER PLAN</h6>
									</th>
									<th>
										<h6>CPU</h6>
									</th>
									<th>
										<h6>RAM</h6>
									</th>
									<th>
										<h6>SPACE</h6>
									</th>
									<th>
										<h6>IP</h6>
									</th>
									<th>
										<h6>BANDWIDTH</h6>
									</th>
									<th>
										<h6>PRICE</h6>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>INTEL XEON E3-1230 v5</td>
									<td>4 Cores @ 3.4 GHz</td>
									<td>16 GB RAM</td>
									<td>2X250 GB SSD</td>
									<td>2 Dedicated IP</td>
									<td>5TB Monthly Bandwidth</td>
									<td>$170.61/M <a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>INTEL XEON E3-1275 v6</td>
									<td>4 Cores @ 4.2 GHz</td>
									<td>16 GB RAM</td>
									<td>2X240 GB SSD</td>
									<td>2 Dedicated IP</td>
									<td>5TB Monthly Bandwidth</td>
									<td>$272.97/M <a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>INTEL XEON E3-1275 v6</td>
									<td>4 Cores @ 4.2 GHz</td>
									<td>64 GB RAM</td>
									<td>2X480 GB SSD</td>
									<td>2 Dedicated IP</td>
									<td>10TB Monthly Bandwidth</td>
									<td>$426.52/M <a href="#">Order Now</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row pt-5">
				<h2>Dual Processor Dedicated Servers</h2>
				<p>Perfect for Multiple Sites Hosting, Resource Intensive Apps, Large Database Hosting, Large Scale Reseller Hosting</p>
				<div class="bd-example">
					<div class="table-responsive-xxl">
						<table class="table table-bordered table-responsive-xxl">
							<thead>
								<tr>
									<th>
										<h6>SERVER PLAN</h6>
									</th>
									<th>
										<h6>CPU</h6>
									</th>
									<th>
										<h6>RAM</h6>
									</th>
									<th>
										<h6>SPACE</h6>
									</th>
									<th>
										<h6>IP</h6>
									</th>
									<th>
										<h6>BANDWIDTH</h6>
									</th>
									<th>
										<h6>PRICE</h6>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>INTEL XEON E5-2650 v4</td>
									<td>16 Cores @ 2.1 GHz</td>
									<td>32 GB RAM</td>
									<td>2 x 480 GB SSD</td>
									<td>2 Dedicated IP</td>
									<td>8TB Monthly Bandwidth</td>
									<td>$341.22/M <a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>INTEL XEON E5-2650 v4</td>
									<td>24 Cores @ 4.2 GHz</td>
									<td>32 GB RAM</td>
									<td>2 x 480 GB SSD</td>
									<td>2 Dedicated IP</td>
									<td>10TB Monthly Bandwidth</td>
									<td>$426.52/M <a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>INTEL XEON E5-2650 v4</td>
									<td>24 Cores @ 4.2 GHz</td>
									<td>64 GB RAM</td>
									<td> 4X480 GB SSD</td>
									<td>2 Dedicated IP</td>
									<td>10TB Monthly Bandwidth</td>
									<td>$597.13/M <a href="#">Order Now</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================Private_Server section end here=======================-->

	<!--================================all_plan section start here=======================-->
	<section class="all_plan PrivateServer">
		<div class="container">
			<div class="row newudcode">
				<h6>All Dedicated Servers Included</h6>
				<div class="col-lg-3 col-md-6 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<img src="frontend/images/ddosprotection.png" alt=" seo expate" description=" seo expate">
						<p class="text-center pt-3"><strong>DDOS Protection </strong><br>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<img src="frontend/images/full-root-access.png" alt=" seo expate" description=" seo expate">
						<p class="text-center pt-3"><strong>Full Root Access</strong><br>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<img src="frontend/images/cpanelandwhm.png" alt=" seo expate" description=" seo expate">
						<p class="text-center pt-3"><strong>Free cPanel/WHM</strong><br>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<img src="frontend/images/fully-managed.png" alt=" seo expate" description=" seo expate">
						<p class="text-center pt-3"><strong>Fully Managed</strong><br> I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================all_plan section end here=======================-->

	<!--================================SSD_WEB section start here=======================-->
	<section class="all_plan PrivateServer all-plan">
		<div class="container">
			<?php include "includes/vps-support.php" ?>
		</div>
	</section>
	<!--================================SSD_WEB section end here=======================-->

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