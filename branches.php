<?php
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
$title = "All Branches";

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
			<div class="col-12" style="z-index:500; ">
				<div class="top_body_txt_part">
					<h1 class="" style="font-size: 45px; line-height: 55px;">All Branches</h1>
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
				<div class="top_about_us_txt" style="z-index:500;">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcumb_gph">
							<li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
							<li class="breadcrumb-item active text-light" aria-current="page">All Branch</li>
						</ol>
					</nav>
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
			<div class="Our_Branches_txt pb-5">
				<h3>Our Branches</h3>
			</div>
			<?php
			$i = 1;
			$qry = "SELECT * FROM branches ORDER BY id DESC";
			$result = mysqli_query($conn, $qry); 

			if ($result) {
				while ($row = mysqli_fetch_assoc($result)) {
			?>
					<div class="col-md-4 pt-3">
						<div class="card" >
							<img src="<?php
										$imagePath = $row['image'];
										$imageName = basename($imagePath);
										$newImagePath = 'uploads/' . $imageName;
										echo $newImagePath; ?>" class="card-img-top" alt="<?php echo $row['name'] ?>">
							<div class="card-body">
								<h5 class="card-title"><?php echo $row['name'] ?></h5>
								<p class="card-text"><?php echo $row['address'] ?></p>
								<div><a href="branch.php?id=<?php echo $row['id'] ?>" class="text-success">View Location Map →</a></div>
								<div class="pt-2"><a href="branch.php?id=<?php echo $row['id'] ?>" class="text-success">See More →</a></div>
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
</section>



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
					<img src="frontend/images/95991_prev_ui.png" alt=" We can build your story" description=" We can build your story">
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
				<img src="frontend/images/Payment-method-banner-image-1024x73.webp" alt=" seo expate" description=" seo expate" width="100%">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" ></script>

<?php if (isset($successMessage)): ?>
	<script>
		iziToast.success({
			title: 'Success',
			position: 'topRight',
			message: '<?php echo $successMessage; ?>',
		});
	</script>
<?php endif; ?>

<?php if (isset($errorMessage)): ?>
	<script>
		iziToast.error({
			title: 'Error',
			position:'topRight',
			message: '<?php echo $errorMessage; ?>',
		});
	</script>
<?php endif; ?>
</body>
</html>
