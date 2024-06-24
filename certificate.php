<?php
$title = "Certificates";
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
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
	<link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">
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


<?php include('./includes/navbar.php') ?>

<!--================================top-body section start here=======================-->
<section class="top-body top_about_us" style="background-image: url(frontend/images/awards-and-recognitions-background-bannerr.png); background-repeat: no-repeat;  background-position:center center; background-size: cover; padding-top: 180px !important; padding-bottom: 300px;">
	<div class="container ">
		<div class="row">
			<div class="top_about_us_txt pb-5" style="z-index:500;">
			</div>
			<div class="col-12" style="z-index:500;">
				<div class="top_body_txt_part">
					<h2>We gained </h2>
					<h1>Certificates</h1>
				</div>
				<div class="top-body-button pt-3">
					<a type="button" href="contact.php">Let's Talk 😄</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================top-body section end here=======================-->

<!--================================Core_Values section start here=======================-->
<section class="Core_Values technology_company">
	<div class="container">
		<?php

		$qry = "SELECT * FROM certificates order by id desc";
		if ($result = $conn->query($qry)) {
			$number = 1;
			while ($row = $result->fetch_assoc()) {
				$imagePath = $row['image'];
				$imageName = basename($imagePath);
				$newImagePath = 'uploads/' . $imageName;
		?>
				<div class="row pb-2">
					<?php if ($number++ % 2 == 0) { ?>
						<div class="col-md-6">
							<div class="Core_Values_txt newudcode">
								<h5><?php echo $row['title'] ?></h5>
								<p><?php echo $row['description'] ?></p>
							</div>

						</div>
						<div class="col-md-6">
							<div class="Core_Values_img pb-5 pt-3 text-center">
								<img src="<?php echo $newImagePath ?>" alt="<?php echo $row['alt_tag'] ?>" description="<?php echo strip_tags($row['alt_description']) ?>">
							</div>
						</div>
					<?php } else { ?>
						<div class="col-md-6">
							<div class="Core_Values_img pb-5 pt-3 text-center">
								<img src="<?php echo $newImagePath ?>" alt="<?php echo $row['alt_tag'] ?>" description="<?php echo strip_tags($row['alt_description']) ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="Core_Values_txt newudcode">
								<h5><?php echo $row['title'] ?></h5>
								<p><?php echo $row['description'] ?></p>
							</div>
							<!-- <div class="top-body-button pt-4">
						<a type="button" href="contact.html">Read More Details</a>
					</div> -->
						</div>

					<?php } ?>
				</div>
				<hr>
		<?php }
		} ?>
	</div>
</section>
<!--================================Core_Values section end here=======================-->

<section class="top_ready_start">
	<div class="container">
		<?php include('./includes/seo-build-story.php') ?>
	</div>
</section>

<?php include('./includes/footer_menu.php'); ?>


<?php include "includes/script.php" ?>

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


</body>

</html>