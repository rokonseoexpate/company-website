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
		
	<link rel="stylesheet" href="frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="frontend/css/style.css">
	<link rel="stylesheet" href="frontend/css/responsive.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

	<div class="gtranslate_wrapper"></div>
	<script>window.gtranslateSettings = {"default_language":"en","native_language_names":true,"detect_browser_language":true,"url_structure":"sub_domain","languages":["en","fr","de","it","es"],"wrapper_selector":".gtranslate_wrapper","horizontal_position":"left","vertical_position":"bottom"}</script>
	<script src="https://cdn.gtranslate.net/widgets/latest/lc.js" defer></script>

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
						<h1>Pricing</h1>		
						<p style="text-align:justify;">Pricing is a crucial aspect of any business and is vital to a company's success. Besides, in today's competitive market, pricing strategies are more important than anything. For this reason, SEO Expate Bangladesh LTD. will offer you various services at affordable prices. We know our customer's demands and we work on the basis of it. Furthermore, you can get multiple <a href="graphic-design.php" class="text-success">graphic design</a> services such as logo design, banner design, and t-shirt design. We can provide many photo editing services like clipping path, color correction, ghost mannequin effect, real estate photo editing, etc. We assure you that you'll get every photo editing service from us at a cheaper rate than other companies.</p>
						<p style="text-align:justify;">In addition, our <a href="index.php" class="text-success">company</a> is a reliable place where you can trust and have our services without any issues. Moreover, we have top-class workers and designers who work hard to give you the best service ever. So, if you are willing to take our service, then join us and we'll fulfill your demand by giving the best service ever.</p>
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
	<section class="tshirt_gallery type_of graphicdesigns_content"  style="background: var(--bg-secondary-color) !important;" >
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
	<section class="photopricing" style="background: var(--bg-secondary-color) !important;" >
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

	<!--================================domai_pricing_table section end here=======================-->

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