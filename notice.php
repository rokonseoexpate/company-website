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
	<title>Notice </title>
	<meta property="og:title" content="Home - IT Services, Technology Solutions">

	<?php include "includes/style.php" ?>

	<link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">

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

	<!--================================cliping_service section start here=======================-->
	<section class="cliping_service eCommerceSEO" style="background: var(--global-bg-color); padding: 15px 0; margin-top: 60px;">
		<div class="container">
			<div class="row">
				<div class="col-12" style="z-index:500;">
					<div class="top_about_us_txt" style="z-index:500;">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcumb_gph">
								<li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
								<li class="breadcrumb-item active text-light" aria-current="page">Notice</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================cliping_service section end here=======================-->
	<!--================================Cnotice section start here=======================-->
	<section class=" Cnotice">
		<div class="container">
			<div class="row">
				<div class="col-md-12  ">
					<form action="notice-search.php" class="form-inline d-flex gap-3 justify-content-center">
						<div class="form-group mb-2 mr-sm-2 mb-sm-0">
							<input type="date" name="formDate" placeholder="From Date..." class="form-control" value="<?php echo $formDate; ?>">
						</div>
						<div class="form-group mb-2 mr-sm-2 mb-sm-0">
							<input type="date" name="toDate" placeholder="To Date..." class="form-control" value="<?php echo $toDate; ?>">
						</div>
						<div class="form-group mb-2 mr-sm-2 mb-sm-0">
							<input type="submit" value="Search" class="btn btn-success">
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<?php
				$i = 1;
				$qry = "SELECT * FROM notices ORDER BY id DESC";
				$result = mysqli_query($conn, $qry); // Utilizing mysqli_query() to execute the query

				if ($result) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
						<div class="col-md-3 pt-5">
							<div class="item-row">
								<a href="notice-details.php?id=<?php echo $row['id']; ?>">
									<div class="card">
										<img src="<?php
													$imagePath = $row['image'];
													$imageName = basename($imagePath);
													$newImagePath = 'uploads/' . $imageName;
													echo $newImagePath; ?>" alt=" <?php echo $row['alt_tag'] ?> " description="<?php echo $row['alt_description'] ?>" class="card-img-top lazy">
										<div class="card-body">
											<h6 class="card-title">
												<span><?php echo $row['title'] ?></span>
											</h6>
											<p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
										</div>
									</div>
								</a>
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

	<!--================================Cnotice section end here=======================-->
	<section class="top_ready_start">
		<div class="container">
			<?php include('./includes/seo-build-story.php') ?>
		</div>
	</section>

	<?php include('./includes/footer_menu.php');	?>

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