<?php
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Use a prepared statement to safely query the database
    $qry = "SELECT * FROM products WHERE id=?";
    $stmt = $conn->prepare($qry);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Check if a row is returned
    if ($row) {
        $title = $row['title'];
        $demoLink = $row['link'];
        $description = $row['description'];
        $short_description = $row['short_description'];
        $imagePath = $row['image'];
        $imageName = basename($imagePath);
        $newImagePath = 'uploads/' . $imageName;
    } else {
        echo "Product not found.";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="Title" content="This is the my site">
	<meta name="description" content="This is the my site">
	<meta name="keywords" content="seoebl, seoexpate">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Details</title>

	<?php include "includes/style.php" ?>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

	<div class="gtranslate_wrapper"></div>

</head>

<body>

	<!--================================Header section start here=======================-->
	<?php include "includes/navbar.php" ?>
	<!--================================Header section end here=======================-->
	<!--================================domai_search_bar section start here=======================-->
	<section class="domai_search_bar web_hosting" style="background-image: url(frontend/images/website-support-5.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 80px 0;">
		<div class="container">
			<div class="row pb-5">
				<div class="top_about_us_txt" style="z-index:500;">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcumb_gph">
							<li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
							<li class="breadcrumb-item active text-light" aria-current="page">All Products</li>
						</ol>
					</nav>
				</div>
				<div class="col-12">
					<h4 class="text-light text-center"><?php echo $title ?></h4>
				</div>
			</div>
		</div>
	</section>
	<!--================================domai_search_bar section end here=======================-->

	<!--================================Management_Software section start here=======================-->
	<section class="Management_Software">
		<div class="container">
			<div class="row">
				<h1><?php echo $title ?></h1>
				<p class="short-des"><?php echo $short_description ?></p>
				<div>
					<hr>
				</div>
				<div class="col-md-5 pt-5">
					<div class="Management_Software_img">
						<img src="<?php echo $newImagePath ?>" alt=" seo expate" description=" seo expate">
					</div>
					<div class="text-center pt-5">
						<div class="top-body-button pt-3 d-flex gap-4">
							<a type="button" href="<?php echo $demoLink ?>">Show Demo</a>
							<a type="button" href="contact.php#contactForm">Purchase</a>
						</div>
					</div>
				</div>
				<div class="col-md-7 pt-5">
				<?php echo $description ?>
				</div>
			</div>
		
		</div>
	</section>
	<!--================================Management_Software section end here=======================-->

	<?php include('./includes/footer_menu.php') ?>

	<?php include "includes/script.php" ?>

</body>

</html>