<?php
    $title = "Home";
    ob_start();
?>

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
				        	<li class="nav-item"><a class="nav-link" href="traning.php"> Training</a></li>
				        	<li class="nav-item dropdown">
				                <a class="nav-link  dropdown-toggle" href="regular_course.php" data-bs-toggle="dropdown">Regular Course / Training</a>
				                <ul class="dropdown-menu dropdown-menu-end">
				                  <li><a class="dropdown-item" href="php_course.php">PHP</a></li>
				                  <li><a class="dropdown-item" href="laravel_course.php">Laravel</a></li>
				                  <li><a class="dropdown-item" href="aspnet_course.php">ASP.NET</a></li>
				                  <li><a class="dropdown-item" href="python_course.php">Python</a></li>
				                  <li><a class="dropdown-item" href="wordpress_course.php">WordPress</a></li>
				                  <li><a class="dropdown-item" href="graphics_course.php">Graphics Design</a></li>
				                </ul>
				            </li>
				            <li class="nav-item dropdown">
				                <a class="nav-link  dropdown-toggle" href="it_traning.php" data-bs-toggle="dropdown">IT Training</a>
				                <ul class="dropdown-menu dropdown-menu-end">
				                  <li><a class="dropdown-item" href="microsoft_office_course.php"> Microsoft Office</a></li>
				                  <li><a class="dropdown-item" href="software_development_course.php">Software Development Course</a></li>
				                  <li><a class="dropdown-item" href="adobe_course.php">Adobe / Freelancing</a></li>
				                  <li><a class="dropdown-item" href="server_administration_course.php">Network & Server Administration</a></li>
				                  <li><a class="dropdown-item" href="it_security_course.php">IT Security, Service & Business Management</a></li>
				                  <li><a class="dropdown-item" href="machine_learning_course.php">AI / Machine Learning / Robotics</a></li>
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
						<h1 class="" style="font-size: 45px; line-height: 55px;">About Our Training</h1>	
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
					<div class="breadcumb_gph d-flex">
						<a class="text-light" href="home.php" class="text-success"><p>Home</p></a>
						<p class="text-light px-3 ">»</p>
						<p class="text-light">Our Training</p>
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
                	<h4 class="text-center">SEO Expate Bangladesh Ltd. has been the foremost information technology service provider since 2013.</h4>
	                <div class="border-bottom border-3 border-success">
	                	<p>The training programs of SEO Expate Bangladesh Ltd. a wide range of skills that are integral and necessary parts of everyday business. In our quest to address every organizational development need, we offer a gamut of training programs, which ranges from Executive Coaching and Leadership Training to basic Communication Skills. </p>
	                </div>
                </div>
                <div class="col-md-6">
                	<p>1. Practical & Project Based IT Training </p>
                	<p>2. Soft Skill & Leadership Training </p>
                	<p>3. Customized Services & On-Site Training </p>
                	<p>4. Skill/Career Development Services </p>
                </div>
                <div class="col-md-6">
                	<div class="clip_img">
						<img src="frontend/images/Our-Training-Centers.png" alt="image" class="img-thumbnail">
					</div>
                </div>
            </div>
        </div>
    </section>
	<!--================================editor_texts section end here=======================-->

	<!--================================Our_Branches section start here=======================-->
	<section class="Our_Branches type_of">
		<div class="container">
			<div class="row">
				<div class="Our_Branches_txt pb-5">
					<h3>Our Course / Training Services</h3>
					<hr>
				</div>
				<div class="col-md-4">
					<a href="blog_post.php">
						<div class="card">
				      		<img src="frontend/images/ecommerce-website2.jpg" class="card-img-top" alt="Image">
				      		<div class="card-body">
				        		<h5 class="card-title">Website</h5>
				        		<p class="card-text">Web Design & Development</p>
				      		</div>
				    	</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="academic_post.php">
						<div class="card hover-zoom">
				      		<img src="frontend/images/corporate-website2.jpg" class="card-img-top" alt="Image">
				      		<div class="card-body">
				        		<h5 class="card-title">Graphic Design</h5>
				        		<p class="card-text">Photoshop, Illustrator, etc</p>
				      		</div>
				    	</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="copy_writing.php">
						<div class="card">
				      		<img src="frontend/images/Bloging-website.jpg" class="card-img-top" alt="Image">
				      		<div class="card-body">
				        		<h5 class="card-title">Digital Marketing</h5>
				        		<p class="card-text">Digital Marketing Training</p>
				      		</div>
				    	</div>
					</a>
				</div>
			</div>
			<div class="row pt-5">
				<div class="col-md-4">
					<a href="static_web.php">
						<div class="card">
				      		<img src="frontend/images/education-website.jpg" class="card-img-top" alt="Image">
				      		<div class="card-body">
				        		<h5 class="card-title">Microsoft Office</h5>
				        		<p class="card-text">Microsoft Office Specialist</p>
				      		</div>
				    	</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="product_description.php">
						<div class="card">
				      	<img src="frontend/images/news-website.jpg" class="card-img-top" alt="Image">
				      	<div class="card-body">
				        	<h5 class="card-title">Software</h5>
				        	<p class="card-text">Software Development</p>
				      	</div>
				    </div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="press_release.php">
						<div class="card hover-zoom">
				      	<img src="frontend/images/entertainment-website.jpg" class="card-img-top" alt="Image">
				      	<div class="card-body">
				        	<h5 class="card-title">Networking</h5>
				        	<p class="card-text">Network Administration</p>
				      	</div>
				    </div>
					</a>
				</div>
			</div>
			<div class="row pt-5">
				<div class="col-md-4">
					<a href="static_web.php">
						<div class="card">
				      		<img src="frontend/images/education-website.jpg" class="card-img-top" alt="Image">
				      		<div class="card-body">
				        		<h5 class="card-title">App Development</h5>
				        		<p class="card-text">Android & IOS Development</p>
				      		</div>
				    	</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="product_description.php">
						<div class="card">
				      	<img src="frontend/images/news-website.jpg" class="card-img-top" alt="Image">
				      	<div class="card-body">
				        	<h5 class="card-title">Freelancing</h5>
				        	<p class="card-text">Facebook, Web, Google</p>
				      	</div>
				    </div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="press_release.php">
						<div class="card hover-zoom">
				      	<img src="frontend/images/entertainment-website.jpg" class="card-img-top" alt="Image">
				      	<div class="card-body">
				        	<h5 class="card-title">IT Service & Business</h5>
				        	<p class="card-text">Business Management</p>
				      	</div>
				    </div>
					</a>
				</div>
			</div>
			<div class="row pt-5">
				<div class="col-md-4">
					<a href="static_web.php">
						<div class="card">
				      		<img src="frontend/images/education-website.jpg" class="card-img-top" alt="Image">
				      		<div class="card-body pb-5">
				        		<h5 class="card-title">PHP</h5>
				        		<p class="card-text">Website Development With PHP & MySQL</p>
				      		</div>
				    	</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="product_description.php">
						<div class="card">
				      	<img src="frontend/images/news-website.jpg" class="card-img-top" alt="Image">
				      	<div class="card-body pb-4">
				        	<h5 class="card-title">Laravel</h5>
				        	<p class="card-text">Website Development Using Laravel Framework (PHP)</p>
				      	</div>
				    </div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="press_release.php">
						<div class="card hover-zoom">
				      	<img src="frontend/images/entertainment-website.jpg" class="card-img-top" alt="Image">
				      	<div class="card-body pb-5">
				        	<h5 class="card-title">Wordpress</h5>
				        	<p class="card-text">Web Design & Development With Wordpress</p>
				      	</div>
				    </div>
					</a>
				</div>
			</div>
			<div class="row pt-5">
				<div class="col-md-4">
					<a href="static_web.php">
						<div class="card">
				      		<img src="frontend/images/education-website.jpg" class="card-img-top" alt="Image">
				      		<div class="card-body">
				        		<h5 class="card-title">ASP.NET</h5>
				        		<p class="card-text">Web Application Development Using ASP.NET</p>
				      		</div>
				    	</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="product_description.php">
						<div class="card">
				      	<img src="frontend/images/news-website.jpg" class="card-img-top" alt="Image">
				      	<div class="card-body pb-4">
				        	<h5 class="card-title">Python</h5>
				        	<p class="card-text">Web Application Development Using Python</p>
				      	</div>
				    </div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="press_release.php">
						<div class="card hover-zoom">
				      	<img src="frontend/images/entertainment-website.jpg" class="card-img-top" alt="Image">
				      	<div class="card-body pb-5">
				        	<h5 class="card-title">Website Design</h5>
				        	<p class="card-text">Responsive Website Design With HTML, CSS, JS, Bootstrap.</p>
				      	</div>
				    </div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--================================Our_Branches section end here=======================-->

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
                        <img src="frontend/images/95991_prev_ui.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section> 
	<!--================================top_ready_start section end here=======================-->


	<!--===========================footer part start===================================-->
	<?php 
$main_content = ob_get_clean();
include './layouts/app.php';
?>