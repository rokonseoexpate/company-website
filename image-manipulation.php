<?php

require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
$title = "Image Manipulation";
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

</head>

<body>
	<?php include "includes/navbar.php" ?>

	<?php include 'includes/photo-editing-nav.php' ?>

	<!--================================top-body section start here=======================-->
	<section class="top-body" style="background-image: url(frontend/images/wavy-abstract-shapes_1048-4986.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; ">
		<div class="container ">
			<div class="row">
				<div class="col-12" style="z-index:500;">
					<div class="top_body_txt_part">
						<h1>Image Manipulation</h1>
						<p style="text-align:justify;">Image Manipulation is the art of altering and enhancing images using digital tools and techniques. It's like having a virtual toolbox. It fills with magical powers to transform ordinary photos into extraordinary creations. With image manipulation, we can adjust colors, contrast, and brightness to make pictures more vibrant and captivating. We can remove unwanted elements from photos to create cleaner and more polished images. Moreover, we can merge multiple photos together to create stunning collages or composite scenes. It transports viewers to imaginary worlds. Image manipulation allows us to unleash our imagination and bring our wildest ideas to life.</p>
						<p style="text-align:justify;">However, image manipulation is essential to use these powers responsibly and ethically. Besides, it ensures that the final images accurately represent reality or convey the intended message without misleading viewers. In the hands of skilled artists, image manipulation is a powerful tool for storytelling, creativity, and visual expression.</p>
					</div>
					<div class="top-body-button pt-3">
						<a type="button" href="free-trial.php">Free Trial</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================top-body section end here=======================-->

	<!--================================cliping_service section start here=======================-->
	<section class="cliping_service photo_edit_all_service tshirtdesign" style="background: var(--button-bg-hover-color);">
		<div class="container">
			<div class="row">
				<div class="col-12" style="z-index:500;">
					<div class="top_about_us_txt" style="z-index:500;">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcumb_gph">
								<li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
								<li class="breadcrumb-item "><a href="graphic-design-and-photo-editing.php" class="text-light">Photo editor</a></li>
								<li class="breadcrumb-item active text-light" aria-current="page">Image Manipulation</li>
							</ol>
						</nav>
					</div>
					<div class="pb-2 pt-2 text-light">
						<h4 class="fs-1 fw-bold">Image Manipulation Service</h4>
					</div>
					<p class="pt-2 text-light">Image Manipulation Service plays a vital role in various aspects of modern life, from marketing to entertainment and art. Its importance lies in its ability to enhance visual communication and storytelling. Besides, it makes images more compelling and engaging. In advertising and marketing, carefully manipulated images can grab attention, evoke emotions, and persuade consumers to take action. Moreover, this service is crucial in the entertainment industry. However, it helps create stunning visual effects in movies, television shows, and video games and immersive experiences. In art, it allows artists to experiment with different techniques and styles, pushing the boundaries of creativity. Overall, it empowers creators to transform ordinary images into extraordinary works of art.</p>
				</div>
			</div>
		</div>
	</section>
	<!--================================cliping_service section end here=======================-->

	<!--================================cliping_service section start here=======================-->
	<section class="cliping_service" style="background: unset; padding-bottom: unset;">
		<div class="container">
			<div class="row">
				<div class="col-md-6" style="z-index:500;">
					<div class="cliping_service_txt pb-2 pt-2">
						<h6>Our Image Manipulation Project</h6>
					</div>
					<p class="pt-3">In our image manipulation project, we embark on a creative journey. Therefore, we transform ordinary pictures into magical works of art. With our digital tools and imagination, we explore the possibilities of enhancing images to express our creativity. First, we start by selecting photos that inspire us, whether they're snapshots from our daily lives or images. Then, using software like Photoshop or online editing tools, we experiment with different effects and techniques. </p>
				</div>
				<div class="col-md-6" style="margin: auto;">
					<div class="clip_img">
						<img src="frontend/images/Image-Manipulation-Service-6.png" alt="Image Manipulation" description=" Image Manipulation" class="img-thumbnail">
					</div>
				</div>
				<div class="col-12">
					<p class="">Moreover, we develop important skills like problem-solving, attention to detail, and artistic expression. Ultimately, our project is about unleashing our creativity and sharing our unique perspectives with the world.</p>
				</div>
			</div>
		</div>
	</section>
	<!--================================cliping_service section end here=======================-->

	<!--================================top_awards section start here=======================-->
	<section class="top_awards">
		<div class="container">
			<div class="row">
				<div class="slider pt-5 shadow">
					<div class="owl-carousel">
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="frontend/images/Image-Manipulation-Service-1.png" alt="Image Manipulation" description=" Image Manipulation">
							</div>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="frontend/images/Image-Manipulation-Service-2.png" alt="Image Manipulation" description=" Image Manipulation">
							</div>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="frontend/images/Image-Manipulation-Service-3.png" alt="Image Manipulation" description=" Image Manipulation">
							</div>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="frontend/images/Image-Manipulation-Service-4.png" alt="Image Manipulation" description=" Image Manipulation">
							</div>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="frontend/images/Image-Manipulation-Service-5.webp" alt="Image Manipulation" description=" Image Manipulation">
							</div>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="frontend/images/Image-Manipulation-Service-6.png" alt="Image Manipulation" description=" Image Manipulation">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================top_awards section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<section class=" graphicdesigns_content" style="background: var(--bg-secondary-color);">
		<div class="container">
			<div class="row">
				<div class="newudcode pb-2">
					<h5 class="">Image Manipulation Service in the SEO Expate BD Ltd</h5>
				</div>
				<div class="pb-5 border-bottom border-success border-2">
					<p>In <a href="/" class="text-success">SEO Expate</a> BD Ltd., image manipulation is like being a wizard in a magical workshop. We make pictures come to life there. First, we start with a regular picture, maybe one of a beautiful landscape. Then, using our digital magic, we can make the colors brighter, and remove anything we don't want. However, we use our computers to make the pictures look exactly how we want them to. This helps our clients' websites and online shops look super cool and grab people's attention. In our magical workshop, we turn ordinary pictures into extraordinary ones that everyone will love!</p>
				</div>
			</div>
			<div class="row shadow px-5 py-3">
				<div class="col-md-4 m-auto">
					<h5 class="fs-2 ">Starting Price</h5>
				</div>
				<div class="col-md-4 m-auto">
					<h5 class="fs-2 ">$5.00 USD</h5>
				</div>
				<div class="col-md-4">
					<img src="frontend/images/Image-Manipulation-Service.png" alt="Image Manipulation" description=" Image Manipulation" class="img-thumbnail">
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<!--================================domai_pricing_table section start here=======================-->
	<section class="domai_pricing_table t-shirt-price" style="background: var(--bg-secondary-color) !important; padding-top: unset;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Basic Image Manipulation</h6>
							<p>Basic Image Manipulation with this package</p>
							<span class="value">$5</span>
						</div>
						<div class="content">
							<ul>
								<li>1 image edit</li>
								<li> Each image edit 5$</li>
								<li> Delivery in 1 day</li>
							</ul>
							<div class="link">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Medium Image Manipulation</h6>
							<p>Medium type Image Manipulation </p>
							<span class="value">
								$10
							</span>
						</div>
						<div class="content">
							<ul>
								<li>1 image edit</li>
								<li> Each image edit 10$</li>
								<li> Delivery in 1 day</li>
							</ul>
							<div class="link">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Complex Image Manipulation</h6>
							<p>Complex Image Manipulation Service</p>
							<span class="value">
								$20
							</span>
						</div>
						<div class="content">
							<ul>
								<li>1 image edit</li>
								<li> Each image edit 20$</li>
								<li> Delivery in 1 day</li>
							</ul>
							<div class="link">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-3">
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Basic Image Manipulation</h6>
							<p>Basic Image Manipulation with this package</p>
							<span class="value">
								$50
							</span>
						</div>
						<div class="content">
							<ul>
								<li>10 image edit</li>
								<li> Each image edit 5$</li>
								<li> Delivery in 1 day</li>
							</ul>
							<div class="link">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Medium Image Manipulation</h6>
							<p>Medium type Image Manipulation </p>
							<span class="value">
								$100
							</span>
						</div>
						<div class="content">
							<ul>
								<li>10 image edit</li>
								<li> Each image edit 10$</li>
								<li> Delivery in 1 day</li>
							</ul>
							<div class="link">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Complex Image Manipulation</h6>
							<p>Complex Image Manipulation Service</p>
							<span class="value">
								$200
							</span>
						</div>
						<div class="content">
							<ul>
								<li>10 image edit</li>
								<li> Each image edit 20$</li>
								<li> Delivery in 1 day</li>
							</ul>
							<div class="link">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-3">
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Basic Image Manipulation</h6>
							<p>Basic Image Manipulation with this package</p>
							<span class="value">
								$250
							</span>
						</div>
						<div class="content">
							<ul>
								<li>50 image edit</li>
								<li> Each image edit 5$</li>
								<li> Delivery in 1 day</li>
							</ul>
							<div class="link">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Medium Image Manipulation</h6>
							<p>Medium type Image Manipulation Service</p>
							<span class="value">
								$500
							</span>
						</div>
						<div class="content">
							<ul>
								<li>50 image edit</li>
								<li> Each image edit 10$</li>
								<li> Delivery in 1 day</li>
							</ul>
							<div class="link">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Complex Image Manipulation</h6>
							<p>Complex Image Manipulation Service </p>
							<span class="value">
								$1000
							</span>
						</div>
						<div class="content">
							<ul>
								<li>50 image edit</li>
								<li> Each image edit 20$</li>
								<li> Delivery in 1 day</li>
							</ul>
							<div class="link">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-3">
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Basic Image Manipulation</h6>
							<p>Basic Image Manipulation with this package</p>
							<span class="value">
								$500
							</span>
						</div>
						<div class="content">
							<ul>
								<li>100 image edit</li>
								<li> Each image edit 5$</li>
								<li> Delivery in 2 day</li>
							</ul>
							<div class="link">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Medium Image Manipulation</h6>
							<p>Medium type Image Manipulation</p>
							<span class="value">
								$1000
							</span>
						</div>
						<div class="content">
							<ul>
								<li>100 image edit</li>
								<li> Each image edit 10$</li>
								<li> Delivery in 2 day</li>
							</ul>
							<div class="link">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<div class="pricing_heading">
							<h6 class="title">Complex Image Manipulation</h6>
							<p>Complex Image Manipulation Service </p>
							<span class="value">
								$2000
							</span>
						</div>
						<div class="content">
							<ul>
								<li>100 image edit</li>
								<li> Each image edit 20$</li>
								<li> Delivery in 2 day</li>
							</ul>
							<div class="link">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================domai_pricing_table section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<section class=" graphicdesigns_content" style="background: var(--button-bg-hover-color);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="newudcode pb-2">
						<h5 class="text-light">Budget-Friendly Image Manipulation Service ($3.00 each image)</h5>
					</div>
					<div>
						<p class="text-light">Our Budget-Friendly Image Manipulation Service is here to help! It's like having your own magic wand to transform ordinary pictures into something extraordinary. With our affordable service, you can turn a simple photo into a masterpiece with just a few clicks. Whether you want to add special effects, adjust colors, or remove unwanted objects, we are ready to help you. Our team of experts uses special computer programs to make your pictures look amazing while keeping costs low. Plus, we're always here to help if you have any questions or need assistance along the way. Give your photos the makeover they deserve with our Budget-Friendly Image Manipulation Service today and let your creativity shine!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================editor_texts section end here=======================-->

	<?php include 'includes/footer-services.php' ?>

	<?php include('./includes/footer_menu.php');	?>

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