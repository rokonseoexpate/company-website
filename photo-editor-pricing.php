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
	<title>Photo Editor Price </title>
	<meta property="og:title" content="Home - IT Services, Technology Solutions">

	<?php include('./includes/style.php') ?>

	<div class="gtranslate_wrapper"></div>

</head>

<body>

	<!--================================Header section start here=======================-->
	<?php include('./includes/navbar.php') ?>
	<!--================================Header section end here=======================-->


	<?php include "includes/photo-editing-nav.php" ?>

	<!--================================top-body section start here=======================-->
	<section class="top-body" style="background-image: url(frontend/images/wavy-abstract-shapes_1048-4986.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; ">
		<div class="container ">
			<div class="row">
				<div class="col-12" style="z-index:500;">
					<div class="top_body_txt_part">
						<h1>Pricing</h1>
						<p style="text-align:justify;">Pricing is a crucial aspect of any business and is vital to a company's success. Besides, in today's competitive market, pricing strategies are more important than anything. For this reason, SEO Expate Bangladesh LTD. will offer you various services at affordable prices. We know our customer's demands and we work on the basis of it. Furthermore, you can get multiple <a href="graphic-design.php" class="text-success">graphic design</a> services such as logo design, banner design, and t-shirt design. We can provide many photo editing services like clipping path, color correction, ghost mannequin effect, real estate photo editing, etc. We assure you that you'll get every photo editing service from us at a cheaper rate than other companies.</p>
						<p style="text-align:justify;">In addition, our <a href="/" class="text-success">company</a> is a reliable place where you can trust and have our services without any issues. Moreover, we have top-class workers and designers who work hard to give you the best service ever. So, if you are willing to take our service, then join us and we'll fulfill your demand by giving the best service ever.</p>
					</div>
					<div class="top-body-button pt-3">
						<a type="button" href="free-trial.php">Free Trial</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================top-body section end here=======================-->

	<!--================================Our_Branches section start here=======================-->
	<section class="tshirt_gallery type_of graphicdesigns_content" style="background: var(--bg-secondary-color) !important;">
		<div class="container">
			<div class="seasonthree season_three pb-5 pt-5">
				<p class="text__three"> SERVICES PRICE </p>
			</div>
			<h4 class="pt-2">Photo Editor Service Price</h4>
			<hr class="mt-2 mb-2">
		</div>
	</section>
	<!--================================Our_Branches section end here=======================-->

	<!--================================domai_pricing_table section start here=======================-->
	<section class="photopricing" style="background: var(--bg-secondary-color) !important;">
		<div class="container">
			<div class="row">
				<div class="columns">
					<ul class="price">
						<li class="headers">Clipping Path Service</li>
						<li class="grey">$0.35 USD</li>
						<li>Starting Price</li>
						<li class="grey"> <img src="frontend/images/Clipping-Path-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers" style="background-color:#04AA6D">Background Removing Service</li>
						<li class="grey">$0.40 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/Photo-Background-Removing-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers">Image Masking Service</li>
						<li class="grey">$0.50 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/Image-Masking-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers" style="background-color:#04AA6D">Shadow Making Service</li>
						<li class="grey">$0.35 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/Shadow-Making-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers">Ghost Mannequin Effect Service</li>
						<li class="grey">$1.00 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/Ghost-Mannequin-Effect-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers" style="background-color:#04AA6D">Photo Retouching Service</li>
						<li class="grey">$0.99 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/Photo-Retouching-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers">Color Correction Service</li>
						<li class="grey">$0.50 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/Color-Correction-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers" style="background-color:#04AA6D">E-Commerce Photo Editing Service</li>
						<li class="grey">$0.49 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/E-Commerce-Photo-Editing-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers">Jewelry Retouching Service</li>
						<li class="grey">$2.00 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/Jewelry-Retouching-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers" style="background-color:#04AA6D">Wedding Photo Editing Service</li>
						<li class="grey">$1.00 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/Wedding-Photo-Editing-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers">Photo Restoration Service</li>
						<li class="grey">$2.00 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/Photo-Restoration-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers" style="background-color:#04AA6D">Real Estate Photo Editing</li>
						<li class="grey">$1.00 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/Real-Estate-Photo-Editing.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers">Image Manipulation Service</li>
						<li class="grey">$5.00 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/Image-Manipulation-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers" style="background-color:#04AA6D">Raster to Vector Conversion</li>
						<li class="grey">$4.99 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/Raster-to-Vector-Conversion-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
				<div class="columns">
					<ul class="price">
						<li class="headers">Illustrator Art Work Service</li>
						<li class="grey">$10.00 USD</li>
						<li>Starting Price</li>
						<li class="grey"><img src="frontend/images/Illustrator-Art-Work-Service.png" alt="  Photo Editor" description=" Photo Editor"></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<?php include('./includes/footer-services.php') ?>
	
	<?php include('./includes/footer_menu.php') ?>

	<?php include "includes/script.php" ?>

</body>

</html>