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
	<title>SSD Virtual Private Server</title>

	<?php include('./includes/style.php') ?>

	<div class="gtranslate_wrapper"></div>

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
							<li class="breadcrumb-item active text-light" aria-current="page">VPS Unmanaged</li>
						</ol>
					</nav>
				</div>
				<div class="col-12">
					<h4 class="text-light text-center">SSD VIRTUAL PRIVATE SERVER ( LOCATION: USA )</h4>
				</div>
			</div>
		</div>
	</section>
	<!--================================domai_search_bar section end here=======================-->

	<!--================================Private_Server section start here=======================-->
	<section class="Private_Server">
		<div class="container">
			<div class="row">
				<h1>SSD Virtual Private Server Plan and Pricing (Cloud)</h1>
				<h2>High Performance SSD VPS</h2>
				<p>Choose your vps according to your need, 100% Intel CPU and 100% SSD storage.</p>
				<div class="bd-example">
					<?php include "includes/high-performance-ssd-vps.php" ?>
				</div>
			</div>
		</div>
	</section>
	<!--================================Private_Server section end here=======================-->

	<!--================================all_plan section start here=======================-->
	<section class="all_plan PrivateServer">
		<div class="container">
			<?php include "includes/featured-operating-systems.php" ?>
		</div>
	</section>
	<!--================================all_plan section end here=======================-->

	<!--================================all_plan section start here=======================-->
	<section class="all_plan PrivateServer all-plan">
		<div class="container">
			<?php include "includes/server-location.php" ?>
		</div>
	</section>
	<!--================================all_plan section end here=======================-->

	<!--================================all_plan section start here=======================-->
	<section class="all_plan PrivateServer">
		<div class="container">
			<?php include "includes/application.php" ?>
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
	<!--================================payment_method section end here=======================-->

	<!--===========================footer part start===================================-->
	<?php include "includes/footer_menu.php" ?>

	<!--===========================footer part end===================================-->
	<?php include "includes/script.php" ?>
</body>

</html>