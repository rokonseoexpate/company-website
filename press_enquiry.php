<?php

ob_start();
require_once 'config/dbconnect.php';

$title = 'Press Enquiry';

?>

<!--================================top-body section start here=======================-->
<section class="top-body app_development phpdevelopment" style="background-image: url(images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 60px; padding-top: 120px;">
	<div class="container ">
		<div class="row">
			<div class="col-md-7" style="z-index:500; ">
				<div class="top_body_txt_part">
					<h1 class="" style="font-size: 45px; line-height: 55px;">PR Resources</h1>
					<p style="margin-top: -15px; text-align: justify;">Stay connected with <a href="index.php" class="text-success">SEO Expate</a> Bangladesh Ltd. PR and Media team for latest information on new technology innovation, latest products and updates. We are changing and bringing digital transformation across the world. Publish news about our digital journey and strategies to build a better future with technology.</p>
				</div>
			</div>
			<div class="col-md-5 m-auto" style="z-index:500; ">
				<img src="frontend/images/4d25c6bd3f17faaaa9015077d9da28ac.jpg" alt=" PR Resources" description=" PR Resources" class="img-thumbnail">
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
							<li class="breadcrumb-item "><a href="index.php" class="text-light ">Home</a></li>
							<li class="breadcrumb-item active text-light" aria-current="page">Press Enquiry</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->

<!--================================editor_texts section start here=======================-->
<section class=" graphicdesigns_content">
	<div class="container shadow px-5 py-5">
		<div class="row">
			<div class="col-12 pb-5">
				<h4 class="text-center">We Can Help Journalists</h4>
				<div class="border-bottom border-3 border-success">
				</div>
			</div>
			<div class="col-12">
				<p>We help national and international journalists with up-to-date justified resources on <a href="contact.php" class="text-success">Information</a> and Technology. You will get the exact and accurate technology news from us.</p>
			</div>
		</div>
	</div>
</section>
<!--================================editor_texts section end here=======================-->

<!--================================top_ready_start section start here=======================-->
<section class="top_ready_start" style="padding-top: unset;">
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
					<img src="frontend/images/95991_prev_ui.png" alt=" PR Resources" description=" PR Resources">
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
				<img src="images/Payment-method-banner-image-1024x73.webp" alt=" PR Resources" description=" PR Resources" width="100%">
			</div>
		</div>
	</div>
</section>
<!--================================Thrive_Globally section end here=======================-->
<?php
$main_content = ob_get_clean();
include './layouts/app.php';
?>