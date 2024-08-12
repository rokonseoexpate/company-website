<?php
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
$title = "It Training";
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

</head>

<body>
	<?php include "includes/navbar.php" ?>


	<!--================================top-body section start here=======================-->
	<section class="top-body app_development phpdevelopment" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 20px;">
		<div class="container ">
			<div class="row">
				<div class="col-md-7 ecomresp" style="z-index:500; ">
					<div class="top_body_txt_part">
						<h1 class="marginbottom" style="font-size: 45px; line-height: 55px;">Data Not Found</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================top-body section end here=======================-->


	<?php
	include('./includes/footer_menu.php');
	?>

	<?php include "includes/script.php" ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

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