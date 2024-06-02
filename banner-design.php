<?php
$title = "Banner Design";
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


<!--================================photo editor sub Header section end here=======================-->
<div class="photo_edipth">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark ">
			<div class="container-fluid ">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><i class="fa-solid fa-bars" alt=" seo expate" description=" seo expate"></i></span>
				</button>
				<div class="collapse navbar-collapse  justify-content-center" id="main_nav">
					<ul class="navbar-nav ">
						<li class="nav-item dropdown has-megamenu ">
							<a class="nav-link dropdown-toggle" href="photo-editor.php" data-bs-toggle="dropdown"> Photo Editing Services </a>
							<div class="dropdown-menu megamenu" role="menu">
								<div class="row g-3">
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="clipping-path.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
												<div>
													<h6 class="title">Clipping Path</h6>
												</div>
											</a>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="background-remove.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
												<div>
													<h6 class="title">Photo Background Removing</h6>
												</div>
											</a>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="image-masking.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
												<div>
													<h6 class="title">Image Masking</h6>
												</div>
											</a>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="shadow-making.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
												<div>
													<h6 class="title">Shadow Making</h6>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="row g-3">
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="ghost-mannequin.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
												<div>
													<h6 class="title">Ghost Mannequin Effect</h6>
												</div>
											</a>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="photo-retouching.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
												<div>
													<h6 class="title">Photo Retouching</h6>
												</div>
											</a>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="color-correction.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
												<div>
													<h6 class="title">Color Correction</h6>
												</div>
											</a>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="ecommerce-photo-edit.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
												<div>
													<h6 class="title">E-Commerce Photo Editing</h6>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="row g-3">
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="jewelry-retouching.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
												<div>
													<h6 class="title">Jewelry Retouching</h6>
												</div>
											</a>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="wedding-photo.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt="Wedding Photo Editing" description="Wedding Photo Editing"></i></div>
												<div>
													<h6 class="title">Wedding Photo Editing</h6>
												</div>
											</a>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="photo-restoration.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt="Photo Restoration" description="Photo Restoration"></i></div>
												<div>
													<h6 class="title">Photo Restoration</h6>
												</div>
											</a>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="real-estate-photo.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
												<div>
													<h6 class="title">Real Estate Photo Editing</h6>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="row g-3">
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="image-manipulation.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
												<div>
													<h6 class="title">Image Manipulation</h6>
												</div>
											</a>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="raster-vector.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
												<div>
													<h6 class="title">Raster to Vector Conversion</h6>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link  dropdown-toggle" href="graphic-design.php" data-bs-toggle="dropdown"> Graphic Design </a>
							<ul class="dropdown-menu dropdown-menu-end">
								<li><a class="dropdown-item" href="t-shirt-design.php"> T-Shirt Design</a></li>
								<li><a class="dropdown-item" href="logo-design.php">Logo Designs Service</a></li>
								<li><a class="dropdown-item" href="banner-design.php">Banner Design</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="photo-editor-pricing.php"> Pricing </a></li>
						<li class="nav-item"><a class="nav-link" href="photo-edit-portfolio.php"> Portfolio </a></li>
					</ul>
					<ul class="navbar-nav booknowbtn">
						<li class="nav-item">
							<a type="submit" class="nav-link btn" href="get-quote.php">Get Quote</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</div>
<!--================================photo editor sub Header section end here=======================-->

<!--================================top-body section start here=======================-->
<section class="top-body" style="background-image: url(frontend/images/wavy-abstract-shapes_1048-4986.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; ">
	<div class="container ">
		<div class="row">
			<div class="col-12" style="z-index:500;">
				<div class="top_body_txt_part">
					<h1>About Banner Design</h1>
					<p style="text-align:justify;">A banner is a visually appealing advertisement displayed on websites. The standard size of a banner is 468 pixels wide and 60 pixels long. In today's digital world, banners are the most common form of online advertising. Moreover, banner ads are small rectangular advertisements appearing on all web pages. Likewise, it differs in look, content, and theme. Banner design is essential for creating brand awareness and attracting customers. It can help any type of business stand out in a crowded marketplace.</p>
					<p style="text-align:justify;">Besides, Banner Design is an essential element of marketing and advertising your products or services. Again, it plays a crucial role in attracting the attention of potential buyers. A well-designed banner can effectively communicate a message and promote a brand to your targeted audience. Most importantly, a well-designed banner can carry information and drive traffic to a website. It is an effective tool to generate money as well as promote the company. So, visit us soon, as SEO Expate Bangladesh LTD. provides a top-class banner design service.</p>
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
<section class="cliping_service photo_edit_all_service tshirtdesign">
	<div class="container">
		<div class="row">
			<div class="col-md-6" style="z-index:500;">
				<div class="top_about_us_txt" style="z-index:500;">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcumb_gph">
							<li class="breadcrumb-item "><a href="/" class=" text-dark">Home</a></li>
							<li class="breadcrumb-item "><a href="photo-editor.php" class="text-dark">Photo editor</a></li>
							<li class="breadcrumb-item active " aria-current="page">Banner Design</li>
						</ol>
					</nav>
				</div>
				<div class="cliping_service_txt pb-2 pt-2">
					<h6>Banner Design Service</h6>
				</div>
				<p class="pt-3">Banner Design Service can attract many customers and increase brand awareness for your company. Besides, it is one of the most outstanding services SEO Expate Bangladesh LTD provides. The key banner design elements include color, typography, imagery, and layout. Moreover, these elements work together to create a visually appealing and informative design. Color plays a significant role in producing emotions and conveying a brand's message to customers. Firstly, typography helps create a hierarchy and guide the viewer's attention. Secondly, imagery can enhance the visual impact of a banner and make it more memorable. Thirdly, layout determines how the elements will arranged and organized within the design. Our professional designers work hard while making these banners, and we have been providing this service for a long time.</p>
				<p>Moreover, we keep the design simple and easy to understand. That's why your customers will understand your message easily. As well as we use high-quality images and graphics while designing a banner. Again, we choose colors that complement the brand and produce the desired emotions. You can test the banner design on different devices to ensure it looks good on all screens. In conclusion, banner design is a crucial aspect of marketing and advertising. By understanding the key elements and following effective design tips, businesses can create impactful banners that attract and engage customers.</p>
			</div>
			<div class="col-md-6" style="margin: auto;">
				<div class="clip_img">
					<img src="frontend/images/Social-Media-post-Design-4-1024x1024.jpg" alt=" seo expate" description=" seo expate">
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->

<!--================================editor_texts section start here=======================-->
<section class=" graphicdesigns_content">
	<div class="container">
		<div class="row">
			<h4>Best Banner Design Service</h4>
			<div>
				<p>Our Banner Design Service is the best in the industry, and you can get a lot of benefits from us. Most importantly, we have a team of talented designers who are experts in creating eye-catching banners. Moreover, our designs are unique and customized to meet your specific needs. We offer quick turnaround times and reasonable pricing so that you can easily get our service. You can increase your brand visibility with our professionally designed banners. However, we will help you to stand out from the competition with our creative designs. Also, you can drive traffic to your website or event with our attention-grabbing banners. You can also boost sales and conversions with our effective banner designs. For these several reasons, we claim ourselves best in this sector.</p>
				<p>Again, our team consists of experienced designers and writers who have the skills to produce a wide variety of banner designs. Whether you prefer simple and clean designs or vibrant and colorful ones, we can create static, animated, video, and flash banners that are sure to deliver results. You can contact us with your design requirements, and we will fulfill them. Our hired expert team will work closely with you to understand your vision and goals. Then, we will create a custom banner design that aligns with your brand identity. You will receive the final design files in various formats for easy use. Therefore, we suggest you contact us as soon as possible and get your custom banner design from us. </p>
			</div>
		</div>
	</div>
</section>
<!--================================editor_texts section end here=======================-->

<!--================================Our_Branches section start here=======================-->
<section class="tshirt_gallery type_of graphicdesigns_content" style="background: var(--bg-secondary-color) !important;">
	<div class="container">
		<div class="seasonthree season_three pb-5">
			<p class="text__three"> Our Banner </p>
		</div>
		<h4 class="pt-2"> Design Project </h4>
		<hr class="mt-2 mb-4">
		<p>Our Banner Design Project kicked off with a brainstorming session. We gathered ideas from professional team members and clients. Also, our primary goal is to create a visually stunning banner for our clients. Moreover, we strictly maintain the quality of our work and give the best service to our customers. SEO Expate Bangladesh LTD Banner Design Service is where creativity meets impact. In these modern days, an attractive banner is the key to grabbing attention, giving your message, and leaving a lasting impression. Moreover, our skilled designers understand the power of visual communication. From eye-catching visuals to effective typography, our banner designs effectively promote your brand and boost your marketing efforts. </p>
		<p>Most importantly, we use various design tools to bring our ideas to life. Photoshop, Illustrator, and Canva are some tools we use for banner designs. However, each team member contributed unique skills and expertise while creating the banners. After our hard work, the final banner design will be ready in a few days. The banner you will get from us features bold colors and eye-catching graphics. Again, the messaging will be clear and concise, highlighting key event details. So, bring us your innovative ideas, and we'll turn them into successful realities. </p>
		<div class="row text-center text-lg-start pt-5">
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid " src="frontend/images/Social-Media-post-Design-4-1024x1024.jpg" alt=" Our Banner" description="Our Banner">
				</a>
			</div>
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid " src="frontend/images/Social-Media-post-Design-1-600x657.jpg" alt=" Our Banner" description="Our Banner">
				</a>
			</div>
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid " src="frontend/images/Social-Media-post-Design-3-510x510.jpg" alt=" Our Banner" description="Our Banner">
				</a>
			</div>
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid " src="frontend/images/FB-Post-Design-Background-remove-01-510x510.jpg" alt=" Our Banner" description="Our Banner">
				</a>
			</div>
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid " src="frontend/images/shadow-making-design-Fb-post-Design-01-510x510.jpg" alt=" Our Banner" description="Our Banner">
				</a>
			</div>
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid img-thumbnail" src="frontend/images/social-media-Banner-Design3-600x583.jpg" alt=" Our Banner" description="Our Banner">
				</a>
			</div>
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid img-thumbnail" src="frontend/images/social-media-Group-Cover-Photo-600x315.jpg" alt=" Our Banner" description="Our Banner">
				</a>
			</div>
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid img-thumbnail" src="frontend/images/Philipine-Photo-editor-FB-Cover-Photo-Editing-600x264.jpg" alt=" Our Banner" description="Our Banner">
				</a>
			</div>
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid img-thumbnail" src="frontend/images/Social-Media-post-Design-2-600x372.jpg" alt=" Our Banner" description="Our Banner">
				</a>
			</div>
		</div>
	</div>
</section>
<!--================================Our_Branches section end here=======================-->

<!--================================editor_texts section start here=======================-->
<section class=" graphicdesigns_content">
	<div class="container">
		<div class="row newudcode">
			<h5>Simple Banner Design Service Cost ($20 each Banner Design)</h5>
			<div>
				<p>Banner Design Services mainly belongs to advertisement work, and without a banner, you cannot introduce your products to consumers. When it comes to creating a banner for your business or event, cost is always a major factor to consider. The price of a banner design service can vary depending on various factors, such as complexity, size, and the designer's expertise. However, we offer package deals or discounts for multiple banners. You can shop around and compare prices before making a decision. That's why we can guarantee that only we can offer you the best prices for banner designs than others.</p>
				<p>Furthermore, a banner design is suitable for reaching the targeted consumer. In this view, it holds so much related information about your company and products. Besides, our banner design service is inexpensive, and you can easily afford it. SEO Expate Bangladesh LTD. has a track record of providing excellent customer service and ensuring client satisfaction. Also, our specialists actively listen to our customer's feedback, make revisions as needed, and work hard to achieve the desired outcome. So, we recommend you take your budget-friendly service as we are a reliable and trustworthy company worldwide.</p>
			</div>
		</div>
	</div>
</section>
<!--================================editor_texts section end here=======================-->

<!--================================domai_pricing_table section start here=======================-->
<section class="domai_pricing_table t-shirt-price" style="background: var(--bg-secondary-color) !important;">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="pricingTable">
					<div class="pricing_heading">
						<h6 class="title">Basic Banner Design Service</h6>
						<p>We will do basic Banner Design Service with this package</p>
						<span class="value">$20</span>
					</div>
					<div class="content">
						<ul>
							<li>1 Banner Design</li>
							<li> Each Banner Design $20</li>
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
						<h6 class="title">Medium Banner Design Service</h6>
						<p>Medium type Banner Design Service</p>
						<span class="value">
							$30
						</span>
					</div>
					<div class="content">
						<ul>
							<li>1 Banner Design</li>
							<li> Each Banner Design $30</li>
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
						<h6 class="title">Complex Banner Design Service</h6>
						<p>Complex Banner Design Service</p>
						<span class="value">
							$40
						</span>
					</div>
					<div class="content">
						<ul>
							<li>1 Banner Design</li>
							<li> Each Banner Design $40</li>
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
						<h6 class="title">Basic Banner Design Service</h6>
						<p>We will do basic Banner Design Service with this package</p>
						<span class="value">
							$100
						</span>
					</div>
					<div class="content">
						<ul>
							<li>5 Banner Design</li>
							<li> Each Banner Design $20</li>
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
						<h6 class="title">Medium Banner Design Service</h6>
						<p>Medium type Banner Design Service</p>
						<span class="value">
							$150
						</span>
					</div>
					<div class="content">
						<ul>
							<li>5 Banner Design</li>
							<li> Each Banner Design $30</li>
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
						<h6 class="title">Complex Banner Design Service</h6>
						<p>Complex Banner Design Service</p>
						<span class="value">
							$200
						</span>
					</div>
					<div class="content">
						<ul>
							<li>5 Banner Design</li>
							<li> Each Banner Design $40</li>
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
						<h6 class="title">Basic Banner Design Service</h6>
						<p>We will do basic Banner Design Service with this package</p>
						<span class="value">
							$200
						</span>
					</div>
					<div class="content">
						<ul>
							<li>10 Banner Design</li>
							<li> Each Banner Design $20</li>
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
						<h6 class="title">Medium Banner Design Service</h6>
						<p>Medium type Banner Design Service</p>
						<span class="value">
							$300
						</span>
					</div>
					<div class="content">
						<ul>
							<li>10 Banner Design</li>
							<li> Each Banner Design $30</li>
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
						<h6 class="title">Complex Banner Design Service</h6>
						<p>Complex Banner Design Service</p>
						<span class="value">
							$400
						</span>
					</div>
					<div class="content">
						<ul>
							<li>10 Banner Design</li>
							<li>Each Banner Design $40</li>
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
						<h6 class="title">Basic Banner Design Service</h6>
						<p>We will do basic Banner Design Service with this package</p>
						<span class="value">
							$400
						</span>
					</div>
					<div class="content">
						<ul>
							<li>20 Banner Design</li>
							<li> Each Banner Design $20</li>
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
						<h6 class="title">Medium Banner Design Service</h6>
						<p>Medium type Banner Design Service</p>
						<span class="value">
							$600
						</span>
					</div>
					<div class="content">
						<ul>
							<li>20 Banner Design</li>
							<li> Each Banner Design $30</li>
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
						<h6 class="title">Complex Banner Design Service</h6>
						<p>Complex Banner Design Service</p>
						<span class="value">
							$800
						</span>
					</div>
					<div class="content">
						<ul>
							<li>20 Banner Design</li>
							<li>Each Banner Design $40</li>
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

<!--================================editor_all_services section end here=======================-->
<section class="WHAT_MAKES footer_btm_all_services" style="background: unset">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h4>Photoshop Services</h4>
				<a href="clipping-path.php" class="d-flex pt-4">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Clipping Path Service</h6>
					</div>
				</a>
				<a href="jewelry-retouching.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Jewelry Retouching Service</h6>
					</div>
				</a>
				<a href="ecommerce-photo-edit.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>E-Commerce Photo Editing</h6>
					</div>
				</a>
				<a href="image-masking.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Image Masking Service</h6>
					</div>
				</a>
				<a href="color-correction.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Color Correction Service</h6>
					</div>
				</a>
			</div>
			<div class="col-md-3">
				<h4>Photoshop Services</h4>
				<a href="real-estate-photo.php" class="d-flex pt-4">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Real Estate Photo Editing</h6>
					</div>
				</a>
				<a href="photo-retouching.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Photo Retouching</h6>
					</div>
				</a>
				<a href="background-remove.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Remove Background Image</h6>
					</div>
				</a>
				<a href="ghost-mannequin.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Ghost Mannequin Effect</h6>
					</div>
				</a>
				<a href="shadow-making.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Shadow Making Service</h6>
					</div>
				</a>
			</div>
			<div class="col-md-3">
				<h4>Photoshop Services</h4>
				<a href="photo-restoration.php" class="d-flex pt-4">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Photo Restoration</h6>
					</div>
				</a>
				<a href="image-manipulation.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Image Manipulation Service</h6>
					</div>
				</a>
				<a href="wedding-photo.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Wedding Photo Editing</h6>
					</div>
				</a>
				<a href="raster-vector.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Raster to Vector Conversion</h6>
					</div>
				</a>
				<a href="background-remove.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Photo Background Removing</h6>
					</div>
				</a>
			</div>
			<div class="col-md-3">
				<h4>Graphics Design Services</h4>
				<a href="t-shirt-design.php" class="d-flex pt-4">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>T-Shirt Design</h6>
					</div>
				</a>
				<a href="logo-design.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Logo Designs Service</h6>
					</div>
				</a>
				<a href="banner-design.php" class="d-flex pt-2">
					<div>
						<i class="fa-regular fa-square-check" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="what_make-txt">
						<h6>Banner Design</h6>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!--================================editor_all_services section end here=======================-->

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
$main_content = ob_get_clean();
include './layouts/app.php';
?>