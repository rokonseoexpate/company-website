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
	<title>Photo Retouching </title>
	<meta property="og:title" content="Home - IT Services, Technology Solutions">
		
	<link rel="stylesheet" href="frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="frontend/css/style.css">
	<link rel="stylesheet" href="frontend/css/responsive.css">
	<link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">


</head>

<body>

<!--================================Header section start here=======================-->
<?php include('./includes/navbar.php') ?>
<!--================================Header section end here=======================-->


	<!--================================photo editor sub Header section end here=======================-->
	<div class="photo_edipth">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark ">
				<div class="container-fluid ">
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
				        <span class="navbar-toggler-icon"><i class="fa-solid fa-bars" alt=" seo expate" description=" seo expate"></i></span>
				    </button>
				    <div class="collapse navbar-collapse  justify-content-center" id="main_nav">
				        <ul class="navbar-nav ">
				            <li class="nav-item dropdown has-megamenu ">
				                <a class="nav-link dropdown-toggle" href="graphic-design-and-photo-editing.php" data-bs-toggle="dropdown"> Photo Editing Services </a>
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
	<section class="top-body" style="background-image: url(frontend/images/wavy-abstract-shapes_1048-4986.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; ">		
		<div class="container ">
		    <div class="row">
		    	<div class="col-12" style="z-index:500;">
		    		<div class="top_body_txt_part">
						<h1>Photo Retouching </h1>		
						<p style="text-align:justify;">Photo retouching is a transformative process. It enhances the visual appeal of images by correcting imperfections, adjusting colors, and refining details. Using advanced software like Adobe Photoshop, retouchers meticulously edit photographs to achieve desired results. Common techniques include removing blemishes, wrinkles, or stray hairs, whitening teeth, and smoothing skin for portrait photography. Additionally, retouching can involve modifying lighting and contrast to improve overall composition and mood. Color correction is another crucial aspect, ensuring accuracy and vibrancy in hues. Whether it's for professional photography, advertising, or personal use, retouching can elevate the quality of images. It makes them more visually striking and engaging. </p>
						<p style="text-align:justify;">However, it's essential to strike a balance between enhancement and realism. It avoids over-editing that may distort the original subject or scene. Skilled retouchers possess a keen eye for detail and an understanding of aesthetics. It enables them to finesse images while preserving their authenticity. Finally, <a href="/" class="text-success">SEO Expate</a> BD Ltd is the right place to buy this unique service. </p>						
					</div>
					<div class="top-body-button pt-3">
						<a type="button" href="free_trial.php">Free Trial</a>
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
							<li class="breadcrumb-item active text-light" aria-current="page">Photo Retouching</li>
						</ol>
						</nav>
					</div>
					<div class="pb-2 pt-2 text-light"><h4 class="fs-1 fw-bold">Photo Retouching Service</h4></div>
					<p class="pt-2 text-light" >Photo retouching plays a vital role in enhancing the quality and impact of photographs. By carefully editing images, retouching correcting imperfections, adjusting colors, and refining details, it results in visually stunning and attractive pictures. Whether it's for advertising or personal use, this service allows creators to convey their message effectively. It helps to ensure that images meet high standards of visual appeal. It will help to capture viewers' attention and leave a good impression. Finally, this service enables photographers and designers to elevate their work to the next level.</p>					
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
					<div class="cliping_service_txt pb-2 pt-2"><h6>Our Photo Retouching Project</h6></div>
					<p class="pt-3" >Our photo retouching project focuses on making our images look their best. We use software like Adobe Photoshop to fix any flaws, enhance colors, and improve overall quality. Our goal is to create visually appealing photos for various purposes, including marketing and personal use. We pay close attention to detail to ensure each image meets high standards. By striking the right balance between enhancement and authenticity, we preserve the original look while making necessary improvements.</p>															
				</div>
				<div class="col-md-6" style="margin: auto;">
					<div class="clip_img">
						<img src="frontend/images/Photo-Retouching-Service-3.png" alt=" Photo Retouching" description=" Photo Retouching" class="img-thumbnail">
					</div>
				</div>
				<div class="col-12">
					<p class="" >STherefore, we understand the importance of striking a balance between enhancement and authenticity. Moreover, we also ensure that the final images maintain the integrity of the original subjects or scenes. With a keen eye for detail and a commitment to excellence, our photo retouching project aims to surpass expectations. Besides, we deliver exceptional results that elevate our visual content to new heights.</p>
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
		                        <img src="frontend/images/Photo-Retouching-Service-1.png" alt=" Photo Retouching" description=" Photo Retouching" >
		                  	</div>
		                </div>
		                <div class="slider-card">
		                  	<div class="d-flex justify-content-center align-items-center mb-4">
		                  		<img src="frontend/images/Photo-Retouching-Service-2.png" alt=" Photo Retouching" description=" Photo Retouching">
		              		</div>
		                </div>
		                <div class="slider-card">
		                  	<div class="d-flex justify-content-center align-items-center mb-4">
		                       <img src="frontend/images/Photo-Retouching-Service-3.png" alt=" Photo Retouching" description=" Photo Retouching" >
		                  	</div>
		                </div>
		                <div class="slider-card">
		                  	<div class="d-flex justify-content-center align-items-center mb-4">
		                       <img src="frontend/images/Photo-Retouching-Service-4.webp" alt=" Photo Retouching" description=" Photo Retouching" >
		                  	</div>
		                </div>
		                <div class="slider-card">
		                  	<div class="d-flex justify-content-center align-items-center mb-4">
		                       <img src="frontend/images/Photo-Retouching-Service-5.png" alt=" Photo Retouching" description=" Photo Retouching" >
		                  	</div>
		                </div>
		                <div class="slider-card">
		                  	<div class="d-flex justify-content-center align-items-center mb-4">
		                       <img src="frontend/images/Photo-Retouching-Service-6.png" alt=" Photo Retouching" description=" Photo Retouching" >
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
                <div class="newudcode"><h5>Photo Retouching Service in the SEO Expate BD Ltd.</h5></div>
                <div class="pb-5">
                    <p>In <a href="/" class="text-success">SEO Expate</a> BD Ltd., our photo retouching service is dedicated to enhancing the visual appeal of your images. We utilize advanced software and skilled professionals to correct imperfections, adjust colors, and refine details. In short, we ensure your photos look their best. Whether it's for e-commerce, advertising, or personal use, our team is committed to delivering high-quality results that meet your needs. We understand the importance of image quality in attracting and engaging audiences. Therefore, we pay attention to every detail during the retouching process. With our expertise in our <a href="/" class="text-success">company</a>, you can trust us to elevate your images to the next level. </p>                   
                </div>
            </div>
            <div class="row shadow px-5 py-3">
                <div class="col-md-4 m-auto">
                	<h5 class="fs-2 ">Starting Price</h5>
                </div>               
                <div class="col-md-4 m-auto">
                	<h5 class="fs-2 ">$0.99 USD</h5>
                </div>               
                <div class="col-md-4">
                	<img src="frontend/images/Photo-Retouching-Service.png" alt=" Photo Retouching" description=" Photo Retouching" class="img-thumbnail">
                </div>               
            </div>
        </div>
    </section>
	<!--================================editor_texts section end here=======================-->

	<!--================================domai_pricing_table section start here=======================-->
	<section class="domai_pricing_table t-shirt-price" style="background: var(--bg-secondary-color) !important; padding-top: unset;" >
	    <div class="container">
		    <div class="row">
		        <div class="col-md-4 col-sm-6">
		            <div class="pricingTable">
		                <div class="pricing_heading">
		                    <h6 class="title">Basic Retouching</h6>
		                    <p>We will do basic cliping path with this package</p>
		                    <span class="value">$5</span>
		                </div>
		                <div class="content">
		                    <ul>
		                        <li>5 image edit</li>
		                        <li> Each image edit 1$</li>
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
		                    <h6 class="title">Medium Retouching</h6>
		                    <p>Medium type Cliping path</p>
		                    <span class="value">
		                        $10
		                    </span>
		                </div>
		                <div class="content">
		                    <ul>
		                        <li>5 image edit</li>
		                        <li>  Each image edit 2$</li>
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
		                    <h6 class="title">Complex Retouching</h6>
		                    <p>Complex cliping path service</p>
		                    <span class="value">
		                        $20
		                    </span>
		                </div>
		                <div class="content">
		                    <ul>
		                        <li>5 image edit</li>
		                        <li>  Each image edit 4$</li>
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
		                    <h6 class="title">Basic Retouching</h6>
		                    <p>We will do basic cliping path with this package</p>
		                    <span class="value">
		                        $10
		                    </span>
		                </div>
		                <div class="content">
		                    <ul>
		                        <li>10 image edit</li>
		                        <li> Each image edit 1$</li>
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
		                    <h6 class="title">Medium Retouching</h6>
		                    <p>Medium type Cliping path</p>
		                    <span class="value">
		                        $20
		                    </span>
		                </div>
		                <div class="content">
		                    <ul>
		                        <li>10 image edit</li>
		                        <li> Each image edit 2$</li>
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
		                    <h6 class="title">Complex Retouching</h6>
		                    <p>Complex cliping path service</p>
		                    <span class="value">
		                        $40
		                    </span>
		                </div>
		                <div class="content">
		                    <ul>
		                        <li>10 image edit</li>
		                        <li> Each image edit 4$</li>
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
		                    <h6 class="title">Basic Retouching</h6>
		                    <p>We will do basic cliping path with this package</p>
		                    <span class="value">
		                        $50
		                    </span>
		                </div>
		                <div class="content">
		                    <ul>
		                        <li>50 image edit</li>
		                        <li>  Each image edit 1$</li>
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
		                    <h6 class="title">Medium Retouching</h6>
		                    <p>Medium type Cliping path</p>
		                    <span class="value">
		                        $100
		                    </span>
		                </div>
		                <div class="content">
		                    <ul>
		                        <li>50 image edit</li>
		                        <li>  Each image edit 2$</li>
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
		                    <h6 class="title">Complex Retouching</h6>
		                    <p>Complex cliping path service</p>
		                    <span class="value">
		                        $200
		                    </span>
		                </div>
		                <div class="content">
		                    <ul>
		                        <li>50 image edit</li>
		                        <li> Each image edit 4$</li>
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
		                    <h6 class="title">Basic Retouching</h6>
		                    <p>We will do basic cliping path with this package</p>
		                    <span class="value">
		                        $100
		                    </span>
		                </div>
		                <div class="content">
		                    <ul>
		                        <li>100 image edit</li>
		                        <li>   Each image edit 1$</li>
		                        <li>  Delivery in 2 day</li>
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
		                    <h6 class="title">Medium Retouching</h6>
		                    <p>Medium type Cliping path</p>
		                    <span class="value">
		                        $200
		                    </span>
		                </div>
		                <div class="content">
		                    <ul>
		                        <li>100 image edit</li>
		                        <li>   Each image edit 2$</li>
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
		                    <h6 class="title">Complex Retouching</h6>
		                    <p>Complex cliping path service</p>
		                    <span class="value">
		                        $400
		                    </span>
		                </div>
		                <div class="content">
		                    <ul>
		                        <li>100 image edit</li>
		                        <li> Each image edit 4$</li>
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
					<div class="newudcode"><h5 class="text-light">Budget-Friendly Photo Retouching Service ($1.99 each image)</h5></div>
	                <div>
	                    <p class="text-light">Our company offers affordable solutions to enhance your images without breaking the bank. Whether you're a small business owner, or a photographer on a budget, we've got you covered. With our cost-effective options, you can enjoy professional-level retouching without sacrificing quality. From removing blemishes to adjusting colors and improving overall composition, we tailor our services to meet your needs. You can buy this service at a reasonable price on this platform. Trust us to make your photos shine without burning a hole in your wallet!</p>
	                </div>
                </div>
            </div>
        </div>
    </section>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_all_services section end here=======================-->
	<section class="WHAT_MAKES footer_btm_all_services"  style="background: unset" >
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
<!--===========================footer part start===================================-->
<?php include('./includes/footer_menu.php') ?>
<!--===========================footer part end===================================-->

<script src="frontend/js/jquery-3.5.1.js"></script>
<script src="frontend/js/bootstrap.bundle.min.js"></script>
<script src="frontend/js/owl.carousel.js"></script>
<script src="frontend/js/main.js"></script>

</body>
</html>