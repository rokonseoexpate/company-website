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
	<title>Regular Course </title>
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


	<!--================================photo editor sub Header section end here=======================-->
	<div class="photo_edipth">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark ">
				<div class="container-fluid ">
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
				        <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
				    </button>
				    <div class="collapse navbar-collapse  justify-content-center" id="main_nav">
				        <ul class="navbar-nav ">
				        	<li class="nav-item"><a class="nav-link" href="training.php"> Training</a></li>
				        	<li class="nav-item dropdown">
				                <a class="nav-link  dropdown-toggle" href="regular-course.php" data-bs-toggle="dropdown">Regular Course / Training</a>
				                <ul class="dropdown-menu dropdown-menu-end">
				                  <li><a class="dropdown-item" href="website-course.php">Website</a></li>
				                  <li><a class="dropdown-item" href="php-course.php">PHP</a></li>
				                  <li><a class="dropdown-item" href="laravel-course.php">Laravel</a></li>
				                  <li><a class="dropdown-item" href="aspnet-course.php">ASP.NET</a></li>
				                  <li><a class="dropdown-item" href="python-course.php">Python</a></li>
				                  <li><a class="dropdown-item" href="wordpress-course.php">WordPress</a></li>
				                  <li><a class="dropdown-item" href="graphics-course.php">Graphics Design</a></li>
				                  <li><a class="dropdown-item" href="digital-marketing-course.php">Digital Marketing</a></li>
				                </ul>
				            </li>
				            <li class="nav-item dropdown">
				                <a class="nav-link  dropdown-toggle" href="it-training.php" data-bs-toggle="dropdown">IT Training</a>
				                <ul class="dropdown-menu dropdown-menu-end">
				                  <li><a class="dropdown-item" href="microsoft-office-course.php"> Microsoft Office</a></li>
				                  <li><a class="dropdown-item" href="software-development-course.php">Software Development Course</a></li>
				                  <li><a class="dropdown-item" href="app-development-course.php">App Development Course</a></li>
				                  <li><a class="dropdown-item" href="adobe-course.php">Adobe / Freelancing</a></li>
				                  <li><a class="dropdown-item" href="server-administration-course.php">Network & Server Administration</a></li>
				                  <li><a class="dropdown-item" href="it-security-course.php">IT Security, Service & Business Management</a></li>
				                  <li><a class="dropdown-item" href="machine-learning-course.php">AI / Machine Learning / Robotics</a></li>
				                </ul>
				            </li>
				        </ul>
				    </div>
				</div> 
			</nav>      
		</div>
	</div>
	<!--================================photo editor sub Header section end here=======================-->
	
	<!--================================top-body section start here=======================-->
	<section class="top-body app_development" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 20px;">		
		<div class="container ">
		    <div class="row">
		    	<div class="col-12" style="z-index:500; ">
		    		<div class="top_body_txt_part">
						<h1 class="" style="font-size: 45px; line-height: 55px;">Regular Course</h1>	
						<h2>Find out how our expert training courses can help with your professional development.</h2>						
					</div>
					<div class="top-body-button pt-3">
						<a type="button" href="contact.php">Contact Us</a>
					</div>	
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
							<li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
							<li class="breadcrumb-item active text-light" aria-current="page">Regular Course</li>
						</ol>
						</nav>
					</div>				
				</div>
			</div>
		</div>
	</section>
	<!--================================cliping_service section end here=======================-->

	<!--================================Core_Team section start here=======================-->
	<section class="Core_Team">
		<div class="container">
			<div class="row">
				<div class="Core_Team_txt pb-5">
					<h3>Our <span>Course</span></h3>
				</div>
				<div class="Core_Team_members">
					<div class="container mt-2">
					  	<div class="row">
					    	<div class="col-md-3 col-sm-6">
					    		<a href="website-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/ecommerce-website2.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title ">Website</h5>
					        			<p class="card-text">Web Design & <br> Development</p>
					        		</div> 
					  			</div>
					  			</a>
					    	</div>
					    	<div class="col-md-3 col-sm-6">
					    		<a href="graphics-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/corporate-website2.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">Graphic Design</h5>
					        			<p class="card-text">Photoshop, Illustrator, <br> etc</p>
					        		</div> 
					  			</div>
					  			</a>
					    	</div>
					    	<div class="col-md-3 col-sm-6 mtrespon">
					    		<a href="digital-marketing-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/Bloging-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">Digital Marketing</h5>
					        			<p class="card-text">Digital Marketing <br> Training</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>
					    	<div class="col-md-3 col-sm-6 mtrespon">
					      		<a href="microsoft-office-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/news-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">Microsoft Office</h5>
					        			<p class="card-text">Microsoft Office <br> Specialist</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>    
					  	</div>
					  	<div class="row">
					    	<div class="col-md-3 col-sm-6 mtrespon">
					      		<a href="software-development-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/Bloging-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">Software</h5>
					        			<p class="card-text">Software <br> Development</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>
					    	<div class="col-md-3 col-sm-6 mtrespon">
					      		<a href="server-administration-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/news-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">Networking</h5>
					        			<p class="card-text">Network <br> Administration</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>
					    	<div class="col-md-3 col-sm-6 mtrespon">
					      		<a href="app-development-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/Bloging-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">App Development</h5>
					        			<p class="card-text">Android & IOS <br> Development</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>
					    	<div class="col-md-3 col-sm-6 mtrespon">
					      		<a href="it-security-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/news-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">IT Service & Business</h5>
					        			<p class="card-text">Business <br> Management</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>    
					  	</div>
					  	<div class="row">
					    	<div class="col-md-3 col-sm-6 mtrespon">
					      		<a href="php-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/Bloging-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">PHP</h5>
					        			<p class="card-text">Website Development <br> With PHP & <br> MySQL</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>
					    	<div class="col-md-3 col-sm-6 mtrespon">
					      		<a href="laravel-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/news-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">Laravel</h5>
					        			<p class="card-text">Website Development <br> Using Laravel  Framework (PHP)</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>
					    	<div class="col-md-3 col-sm-6 mtrespon">
					      		<a href="wordpress-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/Bloging-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">Wordpress</h5>
					        			<p class="card-text">Web Design & Development With Wordpress</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>
					    	<div class="col-md-3 col-sm-6 mtrespon">
					      		<a href="aspnet-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/news-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">ASP.NET</h5>
					        			<p class="card-text">Web Application Development Using ASP.NET</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>    
					  	</div>
					  	<div class="row">
					    	<div class="col-md-3 col-sm-6 mtrespon">
					      		<a href="python-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/Bloging-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">Python</h5>
					        			<p class="card-text">Web Application <br> Development Using <br> Python</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>
					    	<div class="col-md-3 col-sm-6 mtrespon">
					      		<a href="laravel-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/news-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">Website Design</h5>
					        			<p class="card-text">Responsive Website Design With HTML, CSS, JS, Bootstrap.</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>
					    	<div class="col-md-3 col-sm-6 mtrespon">
					      		<a href="wordpress-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/Bloging-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">Wordpress</h5>
					        			<p class="card-text">Web Design & Development With Wordpress</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>
					    	<div class="col-md-3 col-sm-6 mtrespon">
					      		<a href="aspnet-course.php">
					      		<div class="card card-block">
					    			<img src="frontend/images/news-website.jpg" alt=" Regular Course" description=" Regular Course">
					        		<div class="card-body">
					        			<h5 class="card-title">ASP.NET</h5>
					        			<p class="card-text">Web Application Development Using ASP.NET</p> 
					        		</div>
					  			</div>
					  			</a>
					    	</div>    
					  	</div>  
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================Core-Team section end here=======================-->

	<!--================================top_ready_start section start here=======================-->
	<section class="top_ready_start">
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
                        <img src="frontend/images/95991_prev_ui.png" alt=" Regular Course" description=" Regular Course">
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
                 	<img src="frontend/images/Payment-method-banner-image-1024x73.webp" alt=" Regular Course" description=" Regular Course" width="100%">
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