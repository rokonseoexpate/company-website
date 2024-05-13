<?php
$title = "T-shirt Design";
ob_start();
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
?>
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
											<a href="ecommerce-photo_edit.php" class="d-flex">
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
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
												<div>
													<h6 class="title">Wedding Photo Editing</h6>
												</div>
											</a>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="col-megamenu pb-2">
											<a href="photo-restoration.php" class="d-flex">
												<div><i class="fa-regular fa-compass" alt=" seo expate" description=" seo expate"></i></div>
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
<section class="top-body" style="background-image: url(images/wavy-abstract-shapes_1048-4986.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; ">
	<div class="container ">
		<div class="row">
			<div class="col-12" style="z-index:500;">
				<div class="top_body_txt_part">
					<h1>About T-Shirt Design</h1>
					<p style="text-align:justify;">T-shirt design is an art form that allows people to express their creativity. Moreover, it involves creating unique graphics, patterns, and slogans printed on the fabric. Artists process those designs digitally, or they make their designs using hands, depending on the artist's selection. People use various materials, mostly cotton, to make T-shirts, and they represent items of clothing present in everybody's wardrobe. The T-shirt design industry has grown a lot in the past few years.</p>
					<p style="text-align:justify;">Today, graphic designers use a wide range of colors, intense visual pictures, and creative themes to create T-shirts of all kinds. T-shirt design is all about knowing how to combine details from every culture or field into exclusive designs and following modern trends. Most importantly, T-shirt design plays a crucial role in the fashion industry. Besides, it allows brands to differentiate themselves from competitors. A well-designed t-shirt can attract customers and also increase business sales. So, we recommend you take this dynamic service from <a href="index.php" class="text-success">SEO Expate</a> Bangladesh LTD.</p>
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
							<li class="breadcrumb-item "><a href="index.php" class="text-dark">Home</a></li>
							<li class="breadcrumb-item "><a href="photo-editor.php" class="text-dark">Photo editor</a></li>
							<li class="breadcrumb-item active text-dark" aria-current="page">T-Shirt Design</li>
						</ol>
					</nav>
				</div>
				<div class="cliping_service_txt pb-2 pt-2">
					<h6>T-Shirt Design Service</h6>
				</div>
				<p class="pt-3">T-Shirt Design Service specializes in designing and producing custom t-shirts. The companies that deliver this service must have these criteria. Besides, we can offer you many options to help you create a design that is unique to your business needs as we provide this service. Again, you can choose the fabric and color of your t-shirt to design the graphic or message that will print on it. So, our T-Shirt Design Service will give you complete control over the look and feel of your custom t-shirts.</p>

				<p>In fact, our T-shirt design service can be the best service for your company. It is one of the most beautiful processes to represent and describe occasional figures. Furthermore, males and females both can use it. Again, T-shirt design services make high-quality customs with their own design. This is why these design services are very demandable all around the country. We have professional designers and unique designs customized for customers. Lastly, we can provide the best service at a great value to satisfy the clients.</p>
			</div>
			<div class="col-md-6 m-auto">
				<div class="clip_img">
					<img src="frontend/images/baby-t-shirt-01-1024x614.jpg" alt="T-Shirt Design Service " description="T-Shirt Design Service">
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
			<div class="newudcode">
				<h5>Best T-Shirt Design Service</h5>
			</div>
			<div>
				<p>Best T-Shirt Design Service can enhance your marketing tactics, and you can attract many potential customers with that. For this reason, <a href="index.php" class="text-success">SEO Expate</a> Bangladesh LTD. company will give you the best t-shirt design service ever. If you are looking for the most trusted company for your t-shirt design, then you are in the right place. Besides, if you have a specific design in mind for your t-shirt, please inform us so we can accommodate your preferences. Our t-shirt design services are top-notch and reasonably priced. This service is crucial for any online business, and we are here to provide it for you.</p>
				<p>Moreover, our <a href="index.php" class="text-success">company</a> is reliable all over the world as we provide the best service to our customers. However, we consider ourselves as the best in this sector because of some several reasons. Firstly, we don't compromise our quality. The quality of the t-shirts and printing is important to create a good-looking customized t-shirt. Secondly, you can choose any design for your T-shirt, and we have the best designer who will design it per your choice. Moreover, our service will definitely fit your budget, and after placing your order, we will deliver it as soon as possible. </p>
				<p>Furthermore, <a href="index.php" class="text-success">SEO Expate</a> Bangladesh LTD. company will offer various design options and customization features for you. Again, we guarantee that your T-shirts last for years because we use high-quality materials. Our professional designers understand the latest trends in t-shirt design and give you the best service. Therefore, a lot of customers show interest in purchasing our products.</p>
			</div>
		</div>
	</div>
</section>
<!--================================editor_texts section end here=======================-->

<!--================================Our_Branches section start here=======================-->
<section class="tshirt_gallery type_of graphicdesigns_content" style="background: var(--bg-secondary-color) !important;">
	<div class="container">
		<div class="seasonthree season_three pb-5">
			<p class="text__three"> Our T-Shirt </p>
		</div>
		<h4 class="pt-2">Design Project</h4>
		<hr class="mt-2 mb-5">
		<div class="row text-center text-lg-start">
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid " src="frontend/images/tshirt.png" alt="T-Shirt " description="T-Shirt">
				</a>
			</div>
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid " src="frontend/images/t-shirt1-music1111-300x300.jpg" alt="T-Shirt " description="T-Shirt">
				</a>
			</div>
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid " src="frontend/images/baby-t-shirt-01-300x180.jpg" alt="T-Shirt " description="T-Shirt">
				</a>
			</div>
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid " src="frontend/images/tshirt-1b-300x212.jpg" alt="T-Shirt " description="T-Shirt">
				</a>
			</div>
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid " src="frontend/images/t-shirt-1c-300x212.jpg" alt="T-Shirt " description="T-Shirt">
				</a>
			</div>
			<div class="col-md-4 col-6">
				<a href="#" class="d-block mb-4 h-100">
					<img class="img-fluid img-thumbnail" src="frontend/images/t-shirt-2a-300x212.jpg" alt="T-Shirt " description="T-Shirt">
				</a>
			</div>
		</div>
	</div>
</section>
<!--================================Our_Branches section end here=======================-->

<!--================================editor_texts section start here=======================-->
<section class=" graphicdesigns_content">
	<div class="container">
		<div class="row">
			<div class="newudcode">
				<h5>Simple T-Shirt Design Service Cost ($15 for each image)</h5>
			</div>
			<div>
				<p>When it comes to getting a simple t-shirt design created, cost is always a consideration. Most importantly, we will give you the best services at an overall value. We determine the maximum price for our design services through discussions. Moreover, taking into account factors such as the amount of work, number of designs, and revisions needed. We also accept customized t-shirt design orders, with pricing being open to negotiation. Additionally, we provide a special flat discount to our clients for these orders.</p>
				<p>However, the benefit of the design we are offering is the best and unique in this sector. T-shirt design services are highly beneficial for virtue work and they will help you in many ways. The Simple T-Shirt Design Service Cost is very affordable on our <a href="index.php" class="text-success">SEO Expate</a> Bangladesh LTD. website. Also, we assure you we will work on your demand basis and deliver the work how you have asked for. So, if you are looking to promote your brand in a creative way, then our custom-designed t-shirts are the perfect solution. </p>
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
						<h6 class="title">Basic T-Shirt Design Service</h6>
						<p>We will do basic T-Shirt Design Service with this package</p>
						<span class="value">$15</span>
					</div>
					<div class="content">
						<ul>
							<li>1 T-Shirt Design</li>
							<li>Each T-Shirt Design $15</li>
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
						<h6 class="title">Medium T-Shirt Design Service</h6>
						<p>Medium type T-Shirt Design Service</p>
						<span class="value">
							$25
						</span>
					</div>
					<div class="content">
						<ul>
							<li>1 T-Shirt Design</li>
							<li> Each T-Shirt Design $25</li>
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
						<h6 class="title">Complex T-Shirt Design Service</h6>
						<p>Complex T-Shirt Design Service</p>
						<span class="value">
							$40
						</span>
					</div>
					<div class="content">
						<ul>
							<li>1 T-Shirt Design</li>
							<li> Each T-Shirt Design $40</li>
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
						<h6 class="title">Basic T-Shirt Design Service</h6>
						<p>We will do basic T-Shirt Design Service with this package</p>
						<span class="value">
							$75
						</span>
					</div>
					<div class="content">
						<ul>
							<li>5 T-Shirt Design</li>
							<li> Each T-Shirt Design $15</li>
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
						<h6 class="title">Medium T-Shirt Design Service</h6>
						<p>Medium type T-Shirt Design Service</p>
						<span class="value">
							$125
						</span>
					</div>
					<div class="content">
						<ul>
							<li>5 T-Shirt Design</li>
							<li> Each T-Shirt Design $25</li>
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
						<h6 class="title">Complex T-Shirt Design Service</h6>
						<p>Complex T-Shirt Design Service</p>
						<span class="value">
							$200
						</span>
					</div>
					<div class="content">
						<ul>
							<li>5 T-Shirt Design</li>
							<li> Each T-Shirt Design $40</li>
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
						<h6 class="title">Basic T-Shirt Design Service</h6>
						<p>We will do basic T-Shirt Design Service with this package</p>
						<span class="value">
							$150
						</span>
					</div>
					<div class="content">
						<ul>
							<li>10 T-Shirt Design</li>
							<li> Each T-Shirt Design $15</li>
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
						<h6 class="title">Medium T-Shirt Design Service</h6>
						<p>Medium type T-Shirt Design Service</p>
						<span class="value">
							$250
						</span>
					</div>
					<div class="content">
						<ul>
							<li>10 T-Shirt Design</li>
							<li> Each T-Shirt Design $25</li>
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
						<h6 class="title">Complex T-Shirt Design Service</h6>
						<p>Complex T-Shirt Design Service</p>
						<span class="value">
							$400
						</span>
					</div>
					<div class="content">
						<ul>
							<li>10 T-Shirt Design</li>
							<li>Each T-Shirt Design $40</li>
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
						<h6 class="title">Basic T-Shirt Design Service</h6>
						<p>We will do basic T-Shirt Design Service with this package</p>
						<span class="value">
							$300
						</span>
					</div>
					<div class="content">
						<ul>
							<li>20 T-Shirt Design</li>
							<li> Each T-Shirt Design $15</li>
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
						<h6 class="title">Medium T-Shirt Design Service</h6>
						<p>Medium type T-Shirt Design Service</p>
						<span class="value">
							$500
						</span>
					</div>
					<div class="content">
						<ul>
							<li>20 T-Shirt Design</li>
							<li> Each T-Shirt Design $25</li>
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
						<h6 class="title">Complex T-Shirt Design Service</h6>
						<p>Complex T-Shirt Design Service</p>
						<span class="value">
							$800
						</span>
					</div>
					<div class="content">
						<ul>
							<li>20 T-Shirt Design</li>
							<li>Each T-Shirt Design $40</li>
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