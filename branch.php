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

<body>
	<?php include('./includes/navbar.php') ?>

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
						<p><a href="branches.php" class="text-light">All Branch</a></p>
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
						<!-- <iframe id="map-iframe" width="357" height="482" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

						<iframe width="300" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q='24.78250648976425','89.3925761814906'&hl=es&z=14&amp;output=embed">
						</iframe>



						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.953169801306!2d<?php echo $branch['longitude'] ?>!3d<?php echo $branch['latitude'] ?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085817e663f90d1%3A0x1a74e7ccf0c00b4!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1632789246122!5m2!1sen!2sus" width="357" height="482" style="border:0;" loading="lazy">
						</iframe> -->

						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.0628389270836!2d<?php echo $branch['longitude'] ?>!3d<?php echo $branch['latitude'] ?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDQ2JzIyLjEiTiA4OcKwMjMnNDguMyJF!5e0!3m2!1sen!2sus!4v1632789246122!5m2!1sen!2sus" width="357" height="482"  style="border:0;" allowfullscreen="" loading="lazy">
						</iframe> -->

						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.0628389270836!2d89.40828215530587!3d24.775116291582375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjQuNzcyODE0LCA4OS4zOTY3MzgzODUyMDg5!5e0!3m2!1sen!2sus!4v1632789246122!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
						</iframe> -->
						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14488.774990656675!2d89.3925761814906!3d24.78250648976425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fdad0064f6b97b%3A0xb7f18b18d8781d6b!2z4Kam4KeB4Kaw4KeB4Kay4Ka_4Kef4Ka-IOCmrOCmvuCmsuCmv-CmleCmviDgprjgprDgppXgpr7gprDgpr8g4Kaq4KeN4Kaw4Ka-4Kal4Kau4Ka_4KaVIOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCnnw!5e0!3m2!1sen!2sbd!4v1717672303289!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
						<!-- 
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14488.774990656675!2d89.3925761814906!3d24.78250648976425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc533666f61d9f%3A0x58afb9b4c0203cb7!2sTMSS%20CNG%20and%20Gasoline%20Station!5e0!3m2!1sen!2sbd!4v1717672986514!5m2!1sen!2sbd" width="357" height="482" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
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
														echo "pages/" . $imagePath; ?>" alt="<?php echo $row['name']; ?>" class="img-thumbnail">
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
	include('./includes/footer_menu.php');
	?>


	<script src="frontend/js/jquery-3.5.1.js"></script>
	<script src="frontend/js/bootstrap.bundle.min.js"></script>
	<script src="frontend/js/owl.carousel.js"></script>
	<script src="frontend/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



	<?php if (isset($successMessage)) : ?>
		<script>
			iziToast.success({
				title: 'Success',
				position: 'topRight',
				message: '<?php echo $successMessage; ?>',
			});
		</script>
	<?php endif; ?>

	<?php if (isset($errorMessage)) : ?>
		<script>
			iziToast.error({
				title: 'Error',
				position: 'topRight',
				message: '<?php echo $errorMessage; ?>',
			});
		</script>
	<?php endif; ?>

	<script>
		// Get the iframe element
		var iframe = document.getElementById('map-iframe');

		// Set the latitude and longitude values
		var lat = 24.73776226052785; // Replace with your dynamic latitude value
		var lon = 89.45282823416454; // Replace with your dynamic longitude value

		// Construct the new src URL
		var newSrc = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14488.774990656675!2d' + lon + '!3d' + lat + '!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc533666f61d9f%3A0x58afb9b4c0203cb7!2sTMSS%20CNG%20and%20Gasoline%20Station!5e0!3m2!1sen!2sbd!4v1717672986514!5m2!1sen!2sbd';

		// Set the new src attribute
		iframe.src = newSrc;
	</script>
</body>

</html>