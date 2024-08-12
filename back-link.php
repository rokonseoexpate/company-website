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
	<title>Back Link</title>
	<meta property="og:title" content="Home - IT Services, Technology Solutions">

	<?php include('./includes/style.php') ?>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>

	<!--================================Header section start here=======================-->
	<?php include('./includes/navbar.php') ?>
	<!--================================Header section end here=======================-->


	<?php include "includes/seo-nav.php" ?>
	<!--================================photo editor sub Header section end here=======================-->

	<!--================================top-body section start here=======================-->
	<section class="top-body app_development" style="background-image: url(frontend/images/1692873456499.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 20px;">
		<div class="container ">
			<div class="row">
				<div class="col-12 ecomresp" style="z-index:500;">
					<div class="top_body_txt_part">
						<h1 class="marginbottom text-center" style="font-size: 45px; line-height: 55px;">Back Link</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================top-body section end here=======================-->

	<!--================================cliping_service section start here=======================-->
	<section class="cliping_service eCommerceSEO" style="background: var(--button-bg-hover-color); padding: 15px 0;">
		<div class="container">
			<div class="row">
				<div class="col-12" style="z-index:500;">
					<div class="top_about_us_txt" style="z-index:500;">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcumb_gph">
								<li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
								<li class="breadcrumb-item "><a href="seo-service.php" class="text-light">SEO</a></li>
								<li class="breadcrumb-item active text-light" aria-current="page">Back Link</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================cliping_service section end here=======================-->

	<!--================================Core_Team section start here=======================-->
	<section class="Core_Team back_link_code">
		<div class="container">
			<div class="row">
				<div class="Core_Team_txt pb-5">
					<h3>Back Link <span>Services</span></h3>
				</div>
				<div class="Core_Team_members">
					<div class="container mt-2">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<a href="directory-submission.php">
									<div class="card card-block">
										<img src="frontend/images/ecommerce-website2.jpg" alt=" Regular Course" description=" Regular Course">
										<div class="card-body">
											<h5 class="card-title ">Directory Submission</h5>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6 backlinktop">
								<a href="link-building.php">
									<div class="card card-block">
										<img src="frontend/images/corporate-website2.jpg" alt=" Regular Course" description=" Regular Course">
										<div class="card-body">
											<h5 class="card-title">Link Building</h5>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6 mtrespon">
								<a href="Web-20-submission.php">
									<div class="card card-block">
										<img src="frontend/images/Bloging-website.jpg" alt=" Regular Course" description=" Regular Course">
										<div class="card-body">
											<h5 class="card-title">Web 2.0 submission</h5>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6 mtrespon">
								<a href="article-submission.php">
									<div class="card card-block">
										<img src="frontend/images/news-website.jpg" alt=" Regular Course" description=" Regular Course">
										<div class="card-body">
											<h5 class="card-title">Article Submission</h5>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-6 mtrespon">
								<a href="press-release-submission.php">
									<div class="card card-block">
										<img src="frontend/images/Bloging-website.jpg" alt=" Regular Course" description=" Regular Course">
										<div class="card-body">
											<h5 class="card-title">Press Release Submission</h5>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6 mtrespon">
								<a href="document-submission.php">
									<div class="card card-block">
										<img src="frontend/images/news-website.jpg" alt=" Regular Course" description=" Regular Course">
										<div class="card-body">
											<h5 class="card-title">Document Submission</h5>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6 mtrespon">
								<a href="image-submission.php">
									<div class="card card-block">
										<img src="frontend/images/Bloging-website.jpg" alt=" Regular Course" description=" Regular Course">
										<div class="card-body">
											<h5 class="card-title">Image Submission</h5>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6 mtrespon">
								<a href="guest-blog-post.php">
									<div class="card card-block">
										<img src="frontend/images/news-website.jpg" alt=" Regular Course" description=" Regular Course">
										<div class="card-body">
											<h5 class="card-title">Guest Blog Post</h5>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-6 mtrespon">
								<a href="404-broken-page-backlink.php">
									<div class="card card-block">
										<img src="frontend/images/ecommerce-website2.jpg" alt=" Regular Course" description=" Regular Course">
										<div class="card-body">
											<h5 class="card-title">404 Broken Page Backlink</h5>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================Core_Team section end here=======================-->

	<!--================================top_ready_start section start here=======================-->
	<section class="top_ready_start">
		<div class="container">
			<?php include('./includes/seo-build-story.php') ?>
		</div>
	</section>
	<!--================================top_ready_start section end here=======================-->

	<!--===========================footer part start===================================-->
	<?php include('./includes/footer_menu.php') ?>
	<!--===========================footer part end===================================-->

	<?php include "includes/script.php" ?>

</body>

</html>