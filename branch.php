<?php
require_once 'config/dbconnect.php';
$db = new DB_con();
$id = $_GET['id'];
$conn = $db->get_connection();
$sql = "SELECT * FROM branches WHERE id = $id";
$result = mysqli_query($conn, $sql);
$branch = mysqli_fetch_assoc($result);

$title = $branch['name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="Title" content="Seo Expate Bangladesh LTD.">
	<meta name="description" content="Seo Expate Bangladesh LTD.">
	<meta name="keywords" content="seoebl, seoexpate, Seo Expate Bangladesh LTD.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title;  ?></title>
	<meta property="og:title" content="Home - IT Services, Technology Solutions">

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

<!--================================top-body section start here=======================-->
<section class="top-body app_development phpdevelopment" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 60px; padding-top: 120px;">
	<div class="container ">
		<div class="row">
			<div class="col-12" style="z-index:500;">
				<div class="top_body_txt_part">
					<h1 class="" style="font-size: 45px; line-height: 55px;"><?php echo $branch['name'] ?></h1>
					<p style="margin-top: -35px; text-align: justify;">Stay connected with <a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd. </p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================top-body section end here=======================-->

<!--================================cliping_service section start here=======================-->
<section class="cliping_service eCommerceSEO" style="background: var(--global-bg-color); padding: 15px 0;">
	<div class="container">
		<div class="row">
			<div class="col-12" style="z-index:500;">
				<div class="breadcumb_gph d-flex">
					<a class="text-light" href="/">
						<p>Home</p>
					</a>
					<p class="text-light px-3 ">/</p>
					<p class="text-light">All Branch</p>
					<p class="text-light px-3 ">/</p>
					<p class="text-light"><?php echo $branch['name'] ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->

<!--================================all_branches_list section start here=======================-->
<section class="all_branches_list">
	<div class="container">
		<div class="row">
			<h2 class="fs-1 fw-bold text-center pb-5"><?php echo $branch['name'] ?></h2>
			<div class="col-md-4">
				<div class="branch-address">
					<?php echo $branch['map'] ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="branch-img">
					<img src="<?php echo 'pages/' . basename($branch['image']); ?>" alt="<?php echo $branch['name'] ?>" class="img-thumbnail">
				</div>
			</div>
			<div class="col-md-4">
				<div class="branch-img">
					<?php echo $branch['video_link'] ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================all_branches_list section end here=======================-->
<!--================================Core_Team section start here=======================-->
<section class="Core_Team allbranchlist" style="background: unset; padding-top: unset;">
	<div class="container">
		<div class="row">
			<div class="Core_Team_txt pb-2">
				<h3 class="fs-2 pb-3">Branch <span>all Employees</span></h3>
				<hr>
			</div>
			<div class="Core_Team_members">
				<div class="container mt-2">
					<div class="row">
						<?php
						$qry = "SELECT * FROM employees WHERE branch_id = " . $branch['id'] . " ORDER BY priority ASC";
						$result = mysqli_query($conn, $qry);

						if ($result) {
							while ($row = mysqli_fetch_assoc($result)) {
						?>
								<div class="col-md-2 col-sm-6">
									<div class="card card-block shadow">
										<img src="<?php
													$imagePath = $row['image'];
													$imageName = basename($imagePath);
													$newImagePath = 'uploads/' . $imageName;
													echo $newImagePath; ?>" alt="<?php echo $row['name']; ?>" class="img-thumbnail">
										<div class="card-body">
											<h5 class="card-title fs-6"><?php echo $row['name']; ?></h5>
											<p class="card-text fs-6"><?php echo $row['designation']; ?></p>
										</div>
									</div>
								</div>
						<?php
							}
						} else {
							echo "Error: " . mysqli_error($conn);
						}
						?>
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
		<div class="row">
			<div class="col-md-6">
				<div class="top_ready_start_txt">
					<h3>We can build your story</h3>
					<h6>We have partnered with great companies and entrepreneurs all over the world. And, provided the best service for them</h6>
				</div>
				<div class="top-body-button pt-5">
					<a type="button" href="contact.php">Get In Touch</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="top_ready_start_img text-left">
					<img src="frontend/images/95991_prev_ui.png" alt="SEO Expate Bangladesh LTD">
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================top_ready_start section end here=======================-->


<!--================================Thrive_Globally section start here=======================-->
<section class="PAY_MENT" style="padding: 20px 0;">
	<div class="container">
		<div class="row">
			<div class="PAY_IMG">
				<img src="frontend/images/Payment-method-banner-image-1024x73.webp" alt="SEO Expate Bangladesh LTD" width="100%">
			</div>
		</div>
	</div>
</section>
<!--================================Thrive_Globally section end here=======================-->

<?php

$main_content = ob_get_clean();
include './layouts/app.php';
?>