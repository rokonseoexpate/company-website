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
			<div class="row newudcode">
				<div class="col-lg-2 col-md-6 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<p class="text-success text-center fs-2"><strong>.COM</strong></p>
						<p class="text-center"><strong>1199TK</strong></p>
						<p class="text-center">/1st year</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 pt-5">
					<div class="all_plan_icon ">
						<p class="text-success text-center fs-2"><strong>.NET</strong></p>
						<p class="text-center"><strong>1449TK</strong></p>
						<p class="text-center">/year</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<p class="text-success text-center fs-2"><strong>.ORG</strong></p>
						<p class="text-center"><strong>1449TK</strong></p>
						<p class="text-center">/year</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<p class="text-success text-center fs-2"><strong>.INFO</strong></p>
						<p class="text-center"><strong>2150TK</strong></p>
						<p class="text-center">/year</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 pt-5">
					<div class="all_plan_icon">
						<p class="text-success text-center fs-2"><strong>.COM.BD</strong></p>
						<p class="text-center"><strong>2150TK</strong></p>
						<p class="text-center">/2years</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 pt-5">
					<div class="all_plan_icon ">
						<p class="text-success text-center fs-2"><strong>.xyz</strong></p>
						<p class="text-center"><strong>1450TK</strong></p>
						<p class="text-center">/1st year</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="WHAT_MAKES editor_all_services" style="padding-top: unset;">
		<div class="container">
			<div class="row">
				<div class="col-md-3 pt-3">
					<a class="d-flex">
						<div class="what_make-icon">
							<i class="fa-solid fa-circle-dollar-to-slot" alt="  Photo Editor" description=" Photo Editor"></i>
						</div>
						<div class="what_make-txt">
							<h6>Easy Domain Setup No Technical Skills</h6>
						</div>
					</a>
				</div>
				<div class="col-md-3 pt-3">
					<a class="d-flex">
						<div class="what_make-icon">
							<i class="fa-solid fa-backward-fast" alt="  Photo Editor" description=" Photo Editor"></i>
						</div>
						<div class="what_make-txt">
							<h6>Paid Domain Privacy Protection</h6>
						</div>
					</a>
				</div>
				<div class="col-md-3 pt-3">
					<a class="d-flex">
						<div class="what_make-icon">
							<i class="fa-regular fa-clock" alt="  Photo Editor" description=" Photo Editor"></i>
						</div>
						<div class="what_make-txt">
							<h6>Advanced DNS Controls</h6>
						</div>
					</a>
				</div>
				<div class="col-md-3 pt-3">
					<a class="d-flex">
						<div class="what_make-icon">
							<i class="fa-solid fa-anchor-lock" alt="  Photo Editor" description=" Photo Editor"></i>
						</div>
						<div class="what_make-txt">
							<h6>Domain Locking & Forwarding</h6>
						</div>
					</a>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-3 pt-3">
					<a class="d-flex">
						<div class="what_make-icon">
							<i class="fa-brands fa-playstation" alt="  Photo Editor" description=" Photo Editor"></i>
						</div>
						<div class="what_make-txt">
							<h6>Free Email Address - Forwarding</h6>
						</div>
					</a>
				</div>
				<div class="col-md-3 pt-3">
					<a class="d-flex">
						<div class="what_make-icon">
							<i class="fa-solid fa-layer-group" alt="  Photo Editor" description=" Photo Editor"></i>
						</div>
						<div class="what_make-txt">
							<h6>Unlimited Sub Domains</h6>
						</div>
					</a>
				</div>
				<div class="col-md-3 pt-3">
					<a class="d-flex">
						<div class="what_make-icon">
							<i class="fa-brands fa-microsoft" alt="  Photo Editor" description=" Photo Editor"></i>
						</div>
						<div class="what_make-txt">
							<h6>Multi-Year Registration</h6>
						</div>
					</a>
				</div>
				<div class="col-md-3 pt-3">
					<a class="d-flex">
						<div class="what_make-icon">
							<i class="fa-solid fa-headset" alt="  Photo Editor" description=" Photo Editor"></i>
						</div>
						<div class="what_make-txt">
							<h6>Free 24×7/365 Support</h6>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--================================all_plan section end here=======================-->

	<!--================================Private_Server section start here=======================-->
	<section class="Private_Server">
		<div class="container">
			<div class="row">
				<h1>AVAILABLE DOMAIN PRICING</h1>
				<div class="bd-example pt-5">
					<div class="table-responsive-xxl">
						<table class="table table-bordered table-responsive-xxl">
							<thead>
								<tr>
									<th>
										<h6>DOMAIN</h6>
									</th>
									<th>
										<h6>REGISTRATION</h6>
									</th>
									<th>
										<h6>RENEW</h6>
									</th>
									<th>
										<h6>TRANSFER</h6>
									</th>
									<th>
										<h6>ORDER</h6>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>.COM</td>
									<td>$10.23 / year</td>
									<td>$12.36 / year</td>
									<td>$12.36 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.NET</td>
									<td>$12.36 / year</td>
									<td>$12.36 / year</td>
									<td>$12.36 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.ORG</td>
									<td>$12.36 / year</td>
									<td>$12.36 / year</td>
									<td>$12.36 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.INFO</td>
									<td>$18.34 / year</td>
									<td>$18.34 / year</td>
									<td>$18.34 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.BIZ</td>
									<td>$12.79 / year</td>
									<td>$12.79 / year</td>
									<td>$12.79 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.US</td>
									<td>$7.25 / year</td>
									<td>$7.25 / year</td>
									<td>$7.25 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.XYZ</td>
									<td>$12.37 / year</td>
									<td>$12.37 / year</td>
									<td>$12.37 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.ASIA</td>
									<td>$13.44 / year</td>
									<td>$13.44 / year</td>
									<td>$13.44 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.TEL</td>
									<td>$14.08 / year</td>
									<td>$14.08 / year</td>
									<td>$14.08 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.ME</td>
									<td>$24.53 / year</td>
									<td>$24.53 / year</td>
									<td>$24.53 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.WS</td>
									<td>$15.78 / year</td>
									<td>$15.78 / year</td>
									<td>$15.78 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.CC</td>
									<td>$24.10 / year</td>
									<td>$24.10 / year</td>
									<td>$24.10 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.CO</td>
									<td>$24.31 / year</td>
									<td>$24.31 / year</td>
									<td>$24.31 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.CA</td>
									<td>$12.37 / year</td>
									<td>$12.37 / year</td>
									<td>$12.37 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
								<tr>
									<td>.BD</td>
									<td>$18.34 / year</td>
									<td>$8.96 / year</td>
									<td>$8.96 / year</td>
									<td><a href="#">Order Now</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
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