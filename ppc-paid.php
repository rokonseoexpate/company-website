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
	<title>PPC Paid</title>
	<meta property="og:title" content="Home - IT Services, Technology Solutions">

	<?php include "includes/style.php" ?>

	<link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">

	<div class="gtranslate_wrapper"></div>

</head>

<body>

	<!--================================Header section start here=======================-->
	<?php include('./includes/navbar.php') ?>
	<!--================================Header section end here=======================-->


	<section class="top_our_transform">
		<div class="container">
			<div class="row">
				<h1>No data found </h1>
			</div>
		</div>
	</section>

	<!--===========================footer part start===================================-->
	<?php include('./includes/footer_menu.php') ?>
	<!--===========================footer part end===================================-->

	<?php include "includes/script.php" ?>

</body>

</html>