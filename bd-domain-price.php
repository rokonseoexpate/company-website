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
	<title>BD Domain Price </title>

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

	<!--================================domain_registration section start here=======================-->
	<section class="domain_registration">
		<div class="container">
			<div class="row">
				<div class="top_about_us_txt" style="z-index:500;">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcumb_gph">
							<li class="breadcrumb-item "><a href="domain-hosting.php" class="text-dark ">Domain & Hosting</a></li>
							<li class="breadcrumb-item active text-dark" aria-current="page">/ .BD Domain Price</li>
						</ol>
					</nav>
				</div>
				<div class="col-md-8">
					<div class="domain_registration_txt">
						<h5>Do you need .edu.bd or .com.bd domain? We can help you.</h5>
						<p>If you want to do a website for your educational institute. Of course, you need a .edu.bd domain registration. BTCL (Bangladesh Telecommunication Company Limited) provides .edu.bd domain registration service. We can assist you in registering a domain to BTCL, So Web Host BD provides all the necessary assistance to register .edu.bd domain for you.</p>
						<h5>Domain Registration Price:</h5>
						<p>.edu.bd or .com.bd domain must be registered for a minimum of 2 years. 2 Years registration charge 2150 taka.</p>
						<h5>Domain renew price:</h5>
						<p>You have to renew after 2 years by providing next 2 years price 2500 taka.</p>
						<h5>Registration Procedure & Time line:</h5>
						<ol>
							<li>We have to activate every .eud.bd domain by BTCL (Bangladesh Telecommunications Company Ltd). We have to maintain the following steps:</li>
							<li>We have to Submit an application for Domain registration to BTCL.</li>
							<li>Acceptance of Domain registration Demand letter or invoice.</li>
							<li>After Receiving the demand letter or invoice, we have to deposit the payment to the bank or online payment via mobile banking.</li>
							<li>BTCL takes time to process the registration within 2/3 working days.</li>
							<li> Above all process can take time up to 5-7 working days.</li>
						</ol>
						<h5>Terms And Conditions:</h5>
						<ol>
							<li>Domain registration depends on first order, first-activation basis when payment confirmation. The activation process will be started after successful payment is received by Web Host BD.</li>
							<li> You have to wait until the activation process. Sometimes it can take more time to activate.</li>
							<li>Domain name check depends on you. For any mistake, we are not responsible.</li>
							<li>The domain registration fee is non-refundable if the domain name has been successfully registered.</li>
							<li>If the registration is not successful, Web Host BD will refund the fee.</li>
							<li>If you do agree to our terms of service then you can order your domain.</li>
						</ol>
					</div>
				</div>
				<div class="col-md-4">
					<div class="subscribe_channel">
						<h6>SUBSCRIBE OUR CHANNEL</h6>
						<button> <a href="https://www.youtube.com/@seoexpatebangladeshltd"> <span><i class="fa-brands fa-youtube" alt="Domain hosting company" description="Domain hosting company"></i></span>Youtube</a> </button>
					</div>
					<div class="latest_post_right">
						<h6>LATEST POSTS</h6>
						<ul>
							<li><a href="#">Business Website Design in Bangladesh</a></li>
							<li><a href="#">Questions to Ask Before Buying Web Hosting</a></li>
							<li><a href="#">Best web hosting service provider</a></li>
							<li><a href="#">Advantages and Disadvantages of Reseller Web Hosting</a></li>
							<li><a href="#">Domain hosting company in Bangladesh</a></li>
						</ul>
					</div>
					<div class="right_side_banner">
						<img src="images/300x250.jpg" alt="Domain hosting company" Description="Domain hosting company">
					</div>
					<div class="right_side_video">
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/iRh1x9EGa78?si=4Rna3XSPcDU7UR15" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================domain_registration section end here=======================-->

	<!--================================domai_support section start here=======================-->
	<section class="domai_support">
		<div class="container">
			<div class="row">
				<h4>NEED HELP? CALL OUR SUPPORT AT <span>+8801409957451</span></h4>
			</div>
		</div>
	</section>
	<!--================================domai_support section end here=======================-->

	<?php include "includes/footer_menu.php" ?>

	<?php include "includes/script.php" ?>

</body>

</html>