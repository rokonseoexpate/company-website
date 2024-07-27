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
	<title>Website Migration</title>

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
							<li class="breadcrumb-item active text-light" aria-current="page">Free Migration</li>
						</ol>
					</nav>
				</div>
				<div class="col-12">
					<h4 class="text-light text-center">FREE WEBSITE MIGRATION SERVICE</h4>
				</div>
			</div>
		</div>
	</section>
	<!--================================domai_search_bar section end here=======================-->

	<!--================================website_migration section start here=======================-->
	<section class="website_migration">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Website Migration Service</h1>
					<p>SEO Expate Bangladesh Ltd provides Website migration service in Bangladesh. Our professional web developers will migrateyour allwebsite Data with emails. After migration, we will ensure everything is working properly on your new server.</p>
					<p>You may need to migrate your website for different reasons. For some reason, your website may need to move from one hosting serviceprovider to another hosting service provider.</p>
					<div class="free_host">
						<h2>If someone wants to come from any other hosting service provider to SEO Expate Bangladesh Ltd then Website migration is totally free.</h2>
					</div>
					<p>We provide different type of migration.</p>
					<p><strong>Such as :</strong></p>
					<ol>
						<li>Old Hosting Service Provider to New Hosting Service Provider.</li>
						<li>Old Domain to New Domain.</li>
					</ol>
					<img src="frontend/images/website_migration.jpg" alt=" Website migration" description=" Website migration">
					<p>A website migration redirects all of your old Web Pages to new pages.There are a number of cases where the extent of the migration goes deeper, including switching servers, CMS platforms, and the creation or consolidation of various branded sub domains, but quite often refers to a switching over of site domains.</p>
					<p>So, Website migrations are very important. Not carrying out a migration could mean the near total loss of your rankings and traffic, which can all add up to one massive chunk of lost business when your new site goes live.</p>
					<p><a href="domain-hosting.php" class="text-success">SEO Expate Bangladesh Ltd</a> provides the service and support 24 hours a day 7 days a week. We’re satisfied of what we do and we prove it by providing great service at a good value.</p>
				</div>
			</div>
		</div>
	</section>
	<!--================================website_migration section end here=======================-->

	<!--================================domai_support section start here=======================-->
	<section class="domai_support">
		<div class="container">
			<div class="row">
				<h4>NEED HELP? CALL OUR SUPPORT AT <span>+8801409957451</span></h4>
			</div>
		</div>
	</section>
	<!--================================domai_support section end here=======================-->

	<!--===========================footer part start===================================-->
	<?php include "includes/footer_menu.php" ?>
	<!--===========================footer part end===================================-->

	<?php include "includes/script.php" ?>

</body>

</html>