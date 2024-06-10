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
	<title>Photo Editor</title>
	<meta property="og:title" content="Home - IT Services, Technology Solutions">
		
	<link rel="stylesheet" href="frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="frontend/css/style.css">
	<link rel="stylesheet" href="frontend/css/responsive.css">
	<link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">

	<div class="gtranslate_wrapper"></div>
	<script>window.gtranslateSettings = {"default_language":"en","native_language_names":true,"detect_browser_language":true,"url_structure":"sub_domain","languages":["en","fr","de","it","es"],"wrapper_selector":".gtranslate_wrapper","horizontal_position":"left","vertical_position":"bottom"}</script>
	<script src="https://cdn.gtranslate.net/widgets/latest/lc.js" defer></script>

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
					<h1>About Photo Editor</h1>
					<p style="text-align:justify;"><a href="/" class="text-success">SEO Expate</a> bangladesh Ltd. photo editor provided you all type of image editing service. If you like to edit your photo then you can see our service. SEO Expate bangladesh Ltd. photo editor give you all type of graphic designs service ex: Clipping Path Service, Jewelry image Retouching Service, ECommerce Photo Editing Service, Image Masking Service, Image Color Correction Service, Real Estate Photo Editing, Photo Retouchin, Image background remove service, Image Ghost Mannequin Effect Service, Image Shadow Making Service, Photo Restoration service, Image Manipulation Servic, Wedding Photo Editing service, Image Raster to Vector Conversion service, Photo Background Removing service,Banner designs service, logo designs service.</p>
					<p style="text-align:justify;">In the conclusion <a href="/" class="text-success">SEO Expate</a> bangladesh Ltd. photo editor company have more then 100 professional graphic designer people who doing graphic designs service for you. If you need to do photo editor person for your business then <a href="/" class="text-success">SEO Expate</a>bangladesh Ltd. phot editor company will help you to provide you one suitable and experienced editor person.</p>
				</div>
				<div class="top-body-button pt-3">
					<a type="button" href="free-trial.php">Free Trial</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================top-body section end here=======================-->

<!--================================editor_texts section start here=======================-->
<section class="top_body_text_slider editor_texts" style="padding-bottom: 20px;">
	<div class="container">
		<div class="row">
			<div class="tbt_slider text-dark">
				<p>
					<span class="txt-rotate" data-period="2000" data-rotate='[ "PHILIPPINES PHOTO EDITOR."]'>
					</span>
				</p>
			</div>
			<div class="tbt_text text-dark">
				<p>Photo Editing Services for your business. <a href="/" class="text-success">SEO Expate</a> bangladesh Ltd. Photo Editor’s vision is to build people’s business spontaneously by any means. The SEO Expate bangladesh Ltd. Photo Editor doesn’t judge if you own a small or big company. Similarly, we both serve businesses even they operate online or offline. In other words, we care about your photo editing services and make it more profitable through our services. The <a href="/" class="text-success">SEO Expate</a> bangladesh Ltd. Photo Editor has an oath that we will build your company as a brand with visuals and with unique content. <a href="/" class="text-success">SEO Expate</a> bangladesh Ltd. Photo Editor will mainly create your business structure by doing graphics-related works. For that reason, we are offering every type of service that is a must need for an online and offline business.</p>
			</div>
		</div>
	</div>
</section>
<section class="guptobtn pb-5">
	<div class="container">
		<div class="row">
			<div class="top-body-button text-center pt-3">
				<a type="button" href="get-quote.php" style="cursor: pointer;">Get Started</a>
			</div>
		</div>
	</div>
</section>
<!--================================editor_texts section end here=======================-->

<!--================================editor_all_services section end here=======================-->
<section class="WHAT_MAKES editor_all_services">
	<div class="container">
		<div class="row">
			<div class="col-md-4 pt-3">
				<a href="clipping-path.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-solid fa-circle-dollar-to-slot" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Clipping Path Service</h6>
					</div>
				</a>
			</div>
			<div class="col-md-4 pt-3">
				<a href="jewelry-retouching.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-solid fa-backward-fast" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Jewelry Retouching Service</h6>
					</div>
				</a>
			</div>
			<div class="col-md-4 pt-3">
				<a href="ecommerce-photo-edit.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-regular fa-clock" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>E-Commerce Photo Editing</h6>
					</div>
				</a>
			</div>
		</div>
		<div class="row ">
			<div class="col-md-4 pt-3">
				<a href="image-masking.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-solid fa-anchor-lock" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Image Masking Service</h6>
					</div>
				</a>
			</div>
			<div class="col-md-4 pt-3">
				<a href="color-correction.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-brands fa-playstation" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Color Correction Service</h6>
					</div>
				</a>
			</div>
			<div class="col-md-4 pt-3">
				<a href="real-estate-photo.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-solid fa-layer-group" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Real Estate Photo Editing</h6>
					</div>
				</a>
			</div>
		</div>
		<div class="row ">
			<div class="col-md-4 pt-3">
				<a href="photo-retouching.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-brands fa-microsoft" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Photo Retouching</h6>
					</div>
				</a>
			</div>
			<div class="col-md-4 pt-3">
				<a href="background-remove.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-solid fa-headset" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Remove Background Image</h6>
					</div>
				</a>
			</div>
			<div class="col-md-4 pt-3">
				<a href="ghost-mannequin.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-solid fa-atom" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Ghost Mannequin Effect</h6>
					</div>
				</a>
			</div>
		</div>
		<div class="row ">
			<div class="col-md-4 pt-3">
				<a href="shadow-making.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-brands fa-microsoft" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Shadow Making Service</h6>
					</div>
				</a>
			</div>
			<div class="col-md-4 pt-3">
				<a href="photo-restoration.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-solid fa-headset" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Photo Restoration</h6>
					</div>
				</a>
			</div>
			<div class="col-md-4 pt-3">
				<a href="image-manipulation.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-solid fa-atom" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Image Manipulation Service</h6>
					</div>
				</a>
			</div>
		</div>
		<div class="row ">
			<div class="col-md-4 pt-3">
				<a href="wedding-photo.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-brands fa-microsoft" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Wedding Photo Editing</h6>
					</div>
				</a>
			</div>
			<div class="col-md-4 pt-3">
				<a href="raster-vector.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-solid fa-headset" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Raster to Vector Conversion</h6>
					</div>
				</a>
			</div>
			<div class="col-md-4 pt-3">
				<a href="background-remove.php" class="d-flex">
					<div class="what_make-icon">
						<i class="fa-solid fa-atom" alt="  Photo Editor" description=" Photo Editor"></i>
					</div>
					<div class="what_make-txt">
						<h6>Photo Background Removing</h6>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!--================================editor_all_services section end here=======================-->

<!--================================editor_texts section start here=======================-->
<section class="top_body_text_slider editor_texts" style="padding-bottom: 20px;">
	<div class="container">
		<div class="row">
			<div class="tbt_slider text-dark">
				<p><span>Photo Editing Services</span></p>
			</div>
			<div class="tbt_text text-dark">
				<p>In other words, Photo editing services included all the image editing services. If you think you need to do editing your photos or images then you can see all the photo editing services. <a href="/" class="text-success">SEO Expate</a> bangladesh Ltd. photo editor company provided you high-quality photo editing service. <a href="/" class="text-success">SEO Expate</a> bangladesh Ltd. photo editor company is one the best photo editing service company in the world. You will get here all the graphic design services at a lower price than other companies.</p>
			</div>
		</div>
	</div>
</section>
<section class="guptobtn pb-5">
	<div class="container">
		<div class="row">
			<div class="top-body-button text-center pt-3">
				<a type="button" href="contact.php">Get More Information</a>
			</div>
		</div>
	</div>
</section>
<!--================================editor_texts section end here=======================-->

<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="cliping_service_txt pb-2 pt-2">
					<h6>Clipping Path Service</h6>
				</div>
				<p class="pt-3"><a href="clipping-path.php" class="text-success">Clipping Path</a> Service is generally a way of photo cut-out from any background. People do this because they want to include a suitable or different environment for that image. At Philippines Photo Editor, we make sure that the outline of an image remains as emphatic as possible. For instance, our experts use a manual process with photo editor services. Clipping Path Service is essential for any E-Commerce business. Without proper Clipping Path Service, customers can see the details of the product. So, take the service from us because we have the best experience and experts for this service.</p>
				<div class="d-flex gap-4 dpblockrsp">
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="clipping-path.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 margintop">
				<div class="clip_img">
					<img src="frontend/images/Clipping-Path-Service-4.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->
<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service" style="background: unset; ">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="clip_img">
					<img src="frontend/images/Photo-Background-Removing-Service-3.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
			<div class="col-md-6">
				<div class="cliping_service_txt pb-2 pt-3 margintop">
					<h6>Remove Background Image Service</h6>
				</div>
				<p class="pt-3">Online businesses at present mostly rely on images. Therefore, the <a href="background-remove.php" class="text-success">background removal</a> service is very crucial right now. Removing background image service from any images can look simple. In addition, But doing it with advanced technology and software is not for all. Photo editing services has experts in this sector who have been doing this with perfection for years. Remove background service brings good to the business. It enlightens the picture and builds more focus on the picture’s appearance. Eventually, pick our background removal service and see your business grow.</p>
				<div class="d-flex gap-4 dpblockrsp">
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="background-remove.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->
<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="cliping_service_txt pb-2 pt-2">
					<h6>Image Masking Service</h6>
				</div>
				<p class="pt-3">SEO Expate bangladesh Ltd. Photo Editor’s <a href="image-masking.php" class="text-success">Image Masking</a> service is one of the most outstanding services. This is a kind of service that needs more attention. Mainly, this service has to deal with hairy objects, so it’s essential to pay a lot of attention while editing. <a href="/" class="text-success">SEO Expate</a> bangladesh Ltd. Photo Editor makes sure everything gets noticed during image masking no matter how complex the job is. Of course, we will deliver the work as fastest as possible and at a reasonable price.</p>
				<div class="d-flex gap-4 dpblockrsp">
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="image-masking.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="clip_img margintop">
					<img src="frontend/images/5.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->
<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service" style="background: unset; ">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="clip_img">
					<img src="frontend/images/Shadow-Making-Service-1.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
			<div class="col-md-6">
				<div class="cliping_service_txt pb-2 pt-3">
					<h6>Shadow Making Service</h6>
				</div>
				<p class="pt-3">By taking the shadow making service from the <a href="/" class="text-success">SEO Expate</a> bangladesh Ltd. Photo Editor, you can represent your objects with a very realistic look. For instance, our editors create a perfectly natural shadow with depth. The shape and the size of the image we create will make any of your pictures more attractive. Firstly, our editors design the shadow effect to the apparent extent and add noise depending on the object’s type. Secondly, the SEO Expate bangladesh Ltd. Photo Editor removes the backdrop from the background and gives a new drop shadow. In the end, every time you get a natural look for your products.</p>
				<div class="d-flex gap-4 dpblockrsp">
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="shadow-making.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->
<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="cliping_service_txt pb-2 pt-2">
					<h6>Ghost Mannequin Effect Service</h6>
				</div>
				<p class="pt-3">Ghost mannequin effect services and neck joint service is significant for online business. <a href="/" class="text-success">SEO Expate</a> bangladesh Ltd. ghost mannequin effect service will give a comprehensive all-over view of any garments. However, it looks like an easy process to do, but many actions are required to complete the service. The ghost mannequin effect generates many customers, so don’t take any chance with your business and go with the service.</p>
				<div class="d-flex gap-4 dpblockrsp">
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="ghost-mannequin.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 margintop">
				<div class="clip_img">
					<img src="frontend/images/Ghost-Mannequin-Effect-Service-5.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->
<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service" style="background: unset; ">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="clip_img">
					<img src="frontend/images/Photo-Retouching-Service-4.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
			<div class="col-md-6 margintop">
				<div class="cliping_service_txt pb-2 pt-3">
					<h6>Photo Retouching Services</h6>
				</div>
				<p class="pt-3">Photo retouching service is multiple mixtures of photo editing. Furthermore, photo retouching is essential for models and products for any online website. Again, we see various models on various sites and the question is how they look so perfect? The human body or face is never perfect, but after photo retouching service, it looks stunning. Philippine photo editor works in detail as we hide every mark and dark spot and give the face as prettier as possible. Therefore, we save your money and time by doing the service as reshooting is irritating.</p>
				<div class="d-flex gap-4">
					<div class="top-body-button  text-center pt-3">
						<a type="button" href="photo-retouching.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping-service section end here=======================-->
<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="cliping_service_txt pb-2 pt-2">
					<h6>Color Correction Service</h6>
				</div>
				<p class="pt-3">Everybody nowadays is an expert in photo editing in their way. So, it’s hard to satisfy a customer in color correction service as the service is known to all. But the Philippines Photo Editor does every job exquisitely. We have highly skilled editors who polish every image for the highest visual appeal. Moreover, we fix colors, brightness, shadows, backgrounds, and many more. In short, any poor picture will get the best looks after taking the Color Correction service.</p>
				<div class="d-flex gap-4 dpblockrsp">
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="color-correction.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 margintop">
				<div class="clip_img">
					<img src="frontend/images/Color-Correction-Service-4-1.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->
<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service" style="background: unset; ">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="clip_img">
					<img src="frontend/images/1-1.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
			<div class="col-md-6 margintop">
				<div class="cliping_service_txt pb-2 pt-3">
					<h6>E-Commerce Photo Editing Services</h6>
				</div>
				<p class="pt-3">ECommerce photo editing services from the <a href="/" class="text-success">SEO Expate</a> bangladesh Ltd. Photo Editor website is a must-be-taken service. As we all know, E-Commerce platforms are the fastest growing platforms. So it’s crucial to create a mastermind image for E-Commerce businesses. SEO Expate bangladesh Ltd. Photo Editor is very well known for producing world-class E-Commerce content. So take our E-Commerce photo editing service and see your business growth.</p>
				<div class="d-flex gap-4 dpblockrsp">
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="ecommerce-photo-edit.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->
<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="cliping_service_txt pb-2 pt-2">
					<h6>Jewelry Retouching</h6>
				</div>
				<p class="pt-3">Our Jewelry retouching service is much needed if anyone wants to do business online. Jewelry’s retouching is mainly a work on jewelry pictures. In contrast, jewelry is a very precious object. So, the editing must have to be superior. SEO Expate bangladesh Ltd. Photo Editor in this service works on color correction, photo retouching, background removal, dust cleaning, etc. Therefore, this retouching will surely increase the traffic of any site.</p>
				<div class="d-flex gap-4 dpblockrsp">
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="jewelry-retouching.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 margintop">
				<div class="clip_img">
					<img src="frontend/images/Jewelry-Retouching-Service-3.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->
<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service" style="background: unset; ">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="clip_img">
					<img src="frontend/images/3-2.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
			<div class="col-md-6 margintop">
				<div class="cliping_service_txt pb-2 pt-3">
					<h6>Wedding Photo Editing Services</h6>
				</div>
				<p class="pt-3">Wedding photo editing services is a top-notch job. SEO Expate bangladesh Ltd. Photo Editor Professionals use adobe photoshop and lightroom for this service. As we all know the wedding is one of the essential parts of our life. So, everybody wants the perfect wedding photo for themselves. We, in this context, are the most fantastic wedding photo provider. In other words, we all know that people are sensitive to this issue.Similarly, they eagerly wait to see the wedding picture as quickly as possible. We deliver it accurately with the best editing to fulfill everyone’s demand. Also, we make sure that this memory will remain forever.</p>
				<div class="d-flex gap-4 dpblockrsp">
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="wedding-photo.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->
<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="cliping_service_txt pb-2 pt-2">
					<h6>Photo Restoration Service</h6>
				</div>
				<p class="pt-3">Photo restoration service is the art of recreating any vintage, damaged, blurred photo. This photo restoration service from ours will bring life to any picture, that’s for sure. Photo restoration service is not just a simple service people’s emotions are attached to this. Similarly, Therefore our SEO Expate bangladesh Ltd. photo editor team uses the highest editing tools and technology for this service. Thus as a final result, we restore not only a photo but bring back so many memories</p>
				<div class="d-flex gap-4 dpblockrsp">
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="photo-restoration.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 margintop">
				<div class="clip_img">
					<img src="frontend/images/Photo-Restoration-Service-1.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->
<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service" style="background: unset; ">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="clip_img">
					<img src="frontend/images/Real-Estate-Photo-Editing-2.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
			<div class="col-md-6 margintop">
				<div class="cliping_service_txt pb-2 pt-3">
					<h6>Real Estate Photo Editing</h6>
				</div>
				<p class="pt-3">The real estate business is one of the most costly businesses in the present era. Therefore it is very crucial to present the service as extensive as possible. Maybe the property you are offering is a great one. But the picture editing services of the property is not up to mark. Therefore the final result will be a disaster. SEO Expate bangladesh Ltd. Photo Editor knows the value of a property deal. So we work thoroughly on any real estate image editing. SEO Expate bangladesh Ltd. Photo Editor has experts who work with perfection and give the best impression of the outdoors and indoors of a property. After doing every mixture, SEO Expate bangladesh Ltd. Photo Editor will finally give you the most extraordinary real estate photo editing services experience.</p>
				<div class="d-flex gap-4 dpblockrsp">
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="real-estate-photo.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->
<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="cliping_service_txt pb-2 pt-2">
					<h6>Image Manipulation Service</h6>
				</div>
				<p class="pt-3">Image Manipulation service is generally a design or art. Philippines Photo editor has the best artist for this job and mainly for professionals. Therefore, leading advertising agencies, fashion photographers, digital marketers, and so forth regularly take the service. This process has no limit; the artist uses their imagination to create a beautiful piece of art through this work. In conclusion, A superior image manipulation service can generate huge leads for any business. Above all, this is a way of showing your creativity to your customers.</p>
				<div class="d-flex gap-4 dpblockrsp">
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="image-manipulation.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 margintop">
				<div class="clip_img">
					<img src="frontend/images/Image-Manipulation-Service-5.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->
<!--================================cliping_service section start here=======================-->
<section class="cliping_service photo_edit_all_service" style="background: unset; ">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="clip_img">
					<img src="frontend/images/Raster-to-Vector-Conversion-Service-1.webp" alt="  Photo Editor" description=" Photo Editor">
				</div>
			</div>
			<div class="col-md-6 margintop">
				<div class="cliping_service_txt pb-2 pt-3">
					<h6>Raster To Vector Conversion</h6>
				</div>
				<p class="pt-3">This service will convert your existing raster or bitmap file into a vector, such as a PNG, BMP, or JPG file. In the photoshop sector, this work has a huge demand. You can get a high-quality picture after converting any file into a vector file. The Raster to Vector conversion is an easy and quick process that provides the best result. After doing vector conversion, you can zoom the picture at the highest point and see every inside detail. Finally, the Philippines Photo Editor will ensure the best transformation in this service, and that’s a promise.</p>
				<div class="d-flex gap-4 dpblockrsp">
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="raster-vector.php"> See More</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="free-trial.php"> Free Trial</a>
					</div>
					<div class="top-body-button  text-center pt-3 dpaitrsp">
						<a type="button" href="order-now.php"> Order Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->

<!--================================editor_texts section start here=======================-->
<section class=" editor_texts animatedeffect" style="background: var(--bg-secondary-color) !important;">
	<div class="container">
		<div class="row">
			<div class="tbt_slider text-dark">
				<h3 class="animate-charcter">Graphics Design</h3>
			</div>
			<div class="tbt_text text-dark pt-3">
				<p>In this modern fast going world, graphics design is everything you need the most. Whether you are doing a job or business, you need this service on every platform. Graphics design is a must thing for digital marketing. This graphics design service comes as a package, and then you can get many benefits in every package deal. In addition, graphics design services can help you make your life comfortable since it’s compulsory for every sector at present. Considering graphics design as a daily need, the <a href="/" class="text-success">SEO Expate</a> bangladesh Ltd. Photo Editor can give you the most fabulous design in every industry. At last, we are assuring you the best quality at a fair price.</p>
			</div>
		</div>
		<div class="top-body-button text-center pt-4">
			<a type="button" href="graphic-design.php">Get It Now</a>
		</div>
	</div>
</section>
<!--================================editor_texts section end here=======================-->

<!--================================Our_Branches section start here=======================-->
<section class="Our_Branches type_of graphic_link" style="background: unset; ">
	<div class="container">
		<div class="row">
			<div class="col-md-4 pt-3">
				<a href="banner-design.php">
					<div class="card">
						<img src="frontend/images/Banner-design-image.jpg" class="card-img-top" alt="  Photo Editor" description=" Photo Editor">
						<div class="card-body">
							<h5 class="card-title text-dark">Banner Design</h5>
							<p class="card-text text-dark pb-3">Banner design is a crucial part of all business. Nowadays, no business or company will get proper publicity if they are not into this banner design service. It’s a way of modern-day advertising. Though banner is not a new invention as we all know in past people used the banner for various purposes. But now, it’s so important to represent a banner more conveniently. Philippines Photo Editor understands the importance of it. Therefore, we will serve you a business-friendly banner so someone can easily understand what your business is and what you are offering to them.</p>
							<div class="button text-center pt-2"><a type="button" href="banner-design.php" class="text-light text-center"> Get It Now</a></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 pt-3">
				<div class="card hover-zoom">
					<a href="t-shirt-design.php"><img src="frontend/images/T-Shirt-Design-Banner.jpg" class="card-img-top" alt="  Photo Editor" description=" Photo Editor"></a>
					<div class="card-body">
						<h5 class="card-title text-dark">T-Shirt Design</h5>
						<p class="card-text pb-3 text-dark">Different T-Shirt design is currently a trend that everyone is maintaining. T-Shirt design for various occasions is renowned all over the globe. Again everyone loves to wear different T-Shirt designs all year, and you can imagine that this service will keep going. In conclusion, Philippines Photo Editor knows the demand. So we are offering various custom-made T-Shirt designs. Further, you can also choose a customized design on your own. So, without any hesitation, go for our service and grab your creative and unique T-Shirt design.</p>
						<div class="button text-center pt-2"><a type="submit" href="t-shirt-design.php" class="text-light text-center"> Get It Now</a></div>
					</div>
				</div>
			</div>
			<div class="col-md-4 pt-3">
				<a href="logo-design.php">
					<div class="card">
						<img src="frontend/images/Logo-Design-Banner.webp" class="card-img-top" alt="  Photo Editor" description=" Photo Editor">
						<div class="card-body">
							<h5 class="card-title text-dark">Logo Design Services</h5>
							<p class="card-text text-dark pb-3">Logo design is crucial work for building a business into a brand. Our top level logo design is the first condition to create any business or company. Thus, only a good-looking and understandable logo can produce a lot of customers, and it can go publicly viral. Philippines Photo Editor knows how important it is to create a professional logo. Hereafter we are offering the superior logo design service for our customers.</p>
							<div class="button text-center pt-2"><a type="button" href="logo-design.php" class="text-light text-center"> Get It Now</a></div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!--================================Our-Branches section end here=======================-->

<!--================================accordion section start here=======================-->
<section class="accordion_service">
	<div class="container">
		<div class="row">
			<h6 class="text-center pb-5 fs-1 fw-bold">Questions and Answer</h6>
			<div id="accordion">
				<div class="accordion-item">
					<h5 class="accordion-header" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						WHAT IS THE PHILIPPINES PHOTO EDITOR?
					</h5>
					<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
						<div class="accordion-body">
							The Philippines Photo Editor Service is the World’s top competitor Graphics Design Service agency. Most importantly, the Philippines Photo Editor maintains the creation of visual content in pictures. In other words, the Philippines Photo Editor is a website and provides the entire concept of communication design. In the same way, the Philippines Photo Editor website designer gives is many things. Hence, designers observe Clipping Path, Photo Retouching, Raster to Vector Conversion, Image Masking, etc. In addition, we provide is also Shadow Masking, Photo Restoration, Crop resizing, Ghost mannequins, Image manipulation services.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h5 class="accordion-header collapsed" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						WHY CHOOSE THE PHILIPPINES PHOTO EDITOR SERVICES?
					</h5>
					<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
						<div class="accordion-body">
							Here, the Philippines Photo Editor gives the services as high regulations. On the other hand, our website provides complete service excellent image quality. Similarly, we serve with unlimited revision.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h5 class="accordion-header collapsed" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						WHY DO YOU TRUST OUR WEBSITE?
					</h5>
					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
						<div class="accordion-body">
							You can trust our website because we provide a 100% satisfaction guarantee. Hence, if you are satisfied with our work, you will return your pay money. Moreover, we collect image sources from the top paid source site. Here, we are active 24 hours a day. So, you can visit our page at any time and do everything, including buy and inquiries. Hence, we assure you that our website is different from others. For instance, the whole design is more than perfect, clean, and accurate from others.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h5 class="accordion-header collapsed" id="headingFour" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						IS OUR WEBSITE DIFFERENT FROM OTHER WEBSITES?
					</h5>
					<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
						<div class="accordion-body">
							Of course, our website is different. Hence, we always provide unique and outstanding designs. Most importantly, our website gives services without 100% copyright. Even once you purchase, you will get the next updated service for free.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h5 class="accordion-header collapsed" id="headingFive" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
						WHAT IS THE FORMAT FOR THE GRAPHICS DESIGN FILE OF YOUR WEBSITE?
					</h5>
					<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
						<div class="accordion-body">
							Hence, we will provide you with JPEG, PSD, PNG, AI, EPS, PDF, SVG, TIFF, etc. Here, we used this format for the Graphics Design Service.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h5 class="accordion-header collapsed" id="headingSix" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
						DO THE PICTURES HAVE PERMITTED WHICH YOU INCLUDE YOUR WEBSITE?
					</h5>
					<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion">
						<div class="accordion-body">
							All resource file or images is on a permission basis and GDRP ready. Most importantly, we collect all design images or files from paid sites. Also, it is permitted.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h5 class="accordion-header collapsed" id="headingSeven" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
						WHAT IS THE NAME OF YOUR GRAPHIC DESIGN IMAGE SOURCE?
					</h5>
					<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordion">
						<div class="accordion-body">
							In the same fashion, we are collect images from many paid sites. Some sources are Sutterstrock, EyeEm, Pixels, Unsplash, Evanto Element, Freepik, Love Photo, Adobe Stock, Bigstock Photo, and iStock Photo.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h5 class="accordion-header collapsed" id="headingEight" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
						WHAT PURPOSE DO WE USE THIS GRAPHIC DESIGN SERVICE?
					</h5>
					<div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordion">
						<div class="accordion-body">
							You can use this Graphic Design service is to create your company’s online business or digital e-commerce site.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h5 class="accordion-header collapsed" id="headingNine" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapsenine">
						WHAT TYPE OF GRAPHIC DESIGN SERVICE DO WE PROVIDE?
					</h5>
					<div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordion">
						<div class="accordion-body">
							We provide many things like Clipping Path, Image Masking, and more things like: <br>
							Shadow Making <br>
							Photo Retouching <br>
							Image Manipulation <br>
							Photo Background Removing <br>
							Raster to Vector Conversion <br>
							Ghost Mannequin Effect <br>
							Image Retouching (Glamour & Wedding) <br>
							Color Correction <br>
							E-Commerce Photo Editing <br>
							Wedding Photo Editing <br>
							Real Estate Photo Editing <br>
							Photo Restoration <br>
							Jewelry Retouching, etc. <br>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h5 class="accordion-header collapsed" id="headingTen" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
						IS THE WEBSITE SERVICE IS READY TO USE IS ANOTHER WORK?
					</h5>
					<div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordion">
						<div class="accordion-body">
							Of course, our website service is ready to use in other work. So, If you want to use this service for your other job or other purposes, you can optimistically go for it.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h5 class="accordion-header collapsed" id="headingEleven" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
						IS THIS WEBSITE ACCURATE FOR GRAPHIC DESIGN SERVICES?
					</h5>
					<div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordion">
						<div class="accordion-body">
							Of course, we provide you with 100% accurate service. Similarly, all our services are not copyrighted from another thing. Also, it’s verified.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================accordion section end here=======================-->

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

<!--===========================footer part start===================================-->
<?php include('./includes/footer_menu.php') ?>
<!--===========================footer part end===================================-->

<script src="frontend/js/jquery-3.5.1.js"></script>
<script src="frontend/js/bootstrap.bundle.min.js"></script>
<script src="frontend/js/owl.carousel.js"></script>
<script src="frontend/js/main.js"></script>

</body>
</html>