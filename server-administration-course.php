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
	<title>Server Administration Course </title>
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
	<section class="top-body app_development phpdevelopment" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 20px;">
		<div class="container ">
		    <div class="row">
		    	<div class="col-md-7 ecomresp" style="z-index:500; ">
		    		<div class="top_body_txt_part">
						<h1 class="marginbottom" style="font-size: 45px; line-height: 55px;">Server & Network Administration Specialist</h1>																						
					</div>
					<div class="row">
						<div class="col-md-6 pt-2" style="z-index:500; ">
							<div class="courses p-2  rounded shadow bg-white border-0 border-top border-warning border-5">
								<p class="text-dark text-center">Course Duration</p>
								<p class="text-success text-center" style="margin-top: -20px;"><strong>3 months (3 days a week)</strong></p>
							</div>
						</div>

						<div class="col-md-3 pt-2" style="z-index:500; ">
							<div class="courses p-2  rounded shadow bg-white border-0 border-top border-warning border-5">
								<p class="text-dark text-center">Total Class</p>
								<p class="text-success text-center" style="margin-top: -20px;"><strong>36</strong></p>
							</div>
						</div>			
						<div class="col-md-3 pt-2" style="z-index:500; ">
							<div class="courses p-2  rounded shadow bg-white border-0 border-top border-warning border-5">
								<p class="text-dark text-center ">Project</p>
								<p class=" text-center text-success" style="margin-top: -20px;"><strong>15+</strong></p>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-md-5 m-auto pt-5 ecomrespp" style="z-index:500; ">
					<img src="frontend/images/images (2).jpg" alt="Server & Network Administration " description="Server & Network Administration" class="img-thumbnail">
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
						    <li class="breadcrumb-item "><a href="training.php" class="text-light">Our Training</a></li>
						    <li class="breadcrumb-item active text-light" aria-current="page">Server Administration</li>
						  </ol>
						</nav>
					</div>				
				</div>
			</div>
		</div>
	</section>
	<!--================================cliping_service section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<div class="seopackages contentpricing">
        <div class="container">
        	<h2 class="fs-1 fw-bold pt-5 text-center ptunset">Server & Network Administration</h2>
        	<hr>
        	<h6 class="fs-3 fw-bold pt-5 pb-2 text-success ptunset">Computer Hardware Zone</h6>
        	<hr>
          <div class="pricing-table table-responsive">
            <table class="table border shadow ">
              <!-- Heading -->
              <thead>
                <tr>
                  <th class="border-end border-0 border-white border-3">
                  	<p class="fs-5">Course Name</p>
                  </th>
                  <th class="border-end border-0 border-white border-3">
                    <p class="fs-5">Duration</p>
                  </th>
                  <th class="highlight border-end border-0 border-white border-3">
                    <p class="fs-5">Details</p>
                  </th>
                </tr>
              </thead>
              <tbody class="border-top border-0 border-white border-bottom border-3">
                <tr>
                  <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title"><p>CompTIA IT Fundamentals (ITF+)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">24 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>CompTIA A+ Certification
					Hardware and Networking</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	CompTIA Network+</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs	</td>
                  <td class=" border-0 border-end border-success border-bottom border-1"> Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>CompTIA Security+</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<div class="seopackages contentpricing">
        <div class="container">
        	<h6 class="fs-3 fw-bold pt-5 pb-2 text-success ptunset">CISCO ZONE</h6>
        	<hr>
          <div class="pricing-table table-responsive">
            <table class="table border shadow ">
              <!-- Heading -->
              <thead>
                <tr>
                  <th class="border-end border-0 border-white border-3">
                  	<p class="fs-5">Course Name</p>
                  </th>
                  <th class="border-end border-0 border-white border-3">
                    <p class="fs-5">Duration</p>
                  </th>
                  <th class="highlight border-end border-0 border-white border-3">
                    <p class="fs-5">Details</p>
                  </th>
                </tr>
              </thead>
              <tbody class="border-top border-0 border-white border-bottom border-3">
                <tr>
                  <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title"><p>Cisco® Certified Network Associate (CCNA®)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Understanding Cisco Cybersecurity Operations Fundamentals (CBROPS)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Performing CyberOps Using Cisco Security Technologies (CBRCOR)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs	</td>
                  <td class=" border-0 border-end border-success border-bottom border-1"> Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Conducting Forensic Analysis and Incident Response Using Cisco Technologies for CyberOps (CBRFIR)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Implementing and Operating Cisco Enterprise Network Core Technologies</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Implementing and Operating Cisco Service Provider Network Core Technologies (SPCOR)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Implementing and Operating Cisco Data Center Core Technologies (DCCOR)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Implementing and Operating Cisco Security Core Technologies (SCOR)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Implementing and Operating Cisco Collaboration Core Technologies (CLCOR)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Developing Applications and Automating Workflows using Cisco Platforms (DEVASC)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<div class="seopackages contentpricing">
        <div class="container">
        	<h6 class="fs-3 fw-bold pt-5 pb-2 text-success ptunset">JUNIPER ZONE</h6>
        	<hr>
          <div class="pricing-table table-responsive">
            <table class="table border shadow ">
              <!-- Heading -->
              <thead>
                <tr>
                  <th class="border-end border-0 border-white border-3">
                  	<p class="fs-5">Course Name</p>
                  </th>
                  <th class="border-end border-0 border-white border-3">
                    <p class="fs-5">Duration</p>
                  </th>
                  <th class="highlight border-end border-0 border-white border-3">
                    <p class="fs-5">Details</p>
                  </th>
                </tr>
              </thead>
              <tbody class="border-top border-0 border-white border-bottom border-3">
                <tr>
                  <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title"><p>Juniper Junos, Associate (JNCIA-Junos)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Juniper Design, Associate (JNCDA)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Enterprise Routing and Switching, Specialist (JNCIS-ENT)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs	</td>
                  <td class=" border-0 border-end border-success border-bottom border-1"> Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Juniper Security, Associate (JNCIA-SEC)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Juniper  Security, Specialist (JNCIS-SEC)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Service Provider Routing and Switching, Specialist (JNCIS-SP)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">40 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Service Provider Routing and Switching, Expert (JNCIE-SP)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Juniper Security, Expert (JNCIE-SEC)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">12 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<div class="seopackages contentpricing">
        <div class="container">
        	<h6 class="fs-3 fw-bold pt-5 pb-2 text-success ptunset">MikroTIK Administrator ZONE</h6>
        	<hr>
          <div class="pricing-table table-responsive">
            <table class="table border shadow ">
              <!-- Heading -->
              <thead>
                <tr>
                  <th class="border-end border-0 border-white border-3">
                  	<p class="fs-5">Course Name</p>
                  </th>
                  <th class="border-end border-0 border-white border-3">
                    <p class="fs-5">Duration</p>
                  </th>
                  <th class="highlight border-end border-0 border-white border-3">
                    <p class="fs-5">Details</p>
                  </th>
                </tr>
              </thead>
              <tbody class="border-top border-0 border-white border-bottom border-3">
                <tr>
                  <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title"><p>	MikroTik Certified Network Associate</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">24 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	MikroTik Certified Routing Engineer</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">24 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	MikroTik Certfied Security Engineer</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs	</td>
                  <td class=" border-0 border-end border-success border-bottom border-1"> Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>		MikroTik Certified Traffic Control Engineer</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">24 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>MikroTik Certified User Management Engineer</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">24 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>MikroTik Certified Inter-Networking Engineer</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">24 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>MikroTik Certified IPv6 Engineer</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">24 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>MikroTik Certified Wireless Engineer</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">24 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>MikroTik Certified Switching Engineer</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">24 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<div class="seopackages contentpricing">
        <div class="container">
        	<h6 class="fs-3 fw-bold pt-5 pb-2 text-success ptunset">Fortinet ZONE</h6>
        	<hr>
          <div class="pricing-table table-responsive">
            <table class="table border shadow ">
              <!-- Heading -->
              <thead>
                <tr>
                  <th class="border-end border-0 border-white border-3">
                  	<p class="fs-5">Course Name</p>
                  </th>
                  <th class="border-end border-0 border-white border-3">
                    <p class="fs-5">Duration</p>
                  </th>
                  <th class="highlight border-end border-0 border-white border-3">
                    <p class="fs-5">Details</p>
                  </th>
                </tr>
              </thead>
              <tbody class="border-top border-0 border-white border-bottom border-3">
                <tr>
                  <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title"><p>Fortinet FortiOS Network Security Professional</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Fortinet FortiAnalyzer Network Security Analyst</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Fortinet FortiADC Network Security Specialist</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs	</td>
                  <td class=" border-0 border-end border-success border-bottom border-1"> Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>		Fortinet Advanced Analytics Network Security Architect</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Fortinet Fortinet Network Security Expert</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<div class="seopackages contentpricing">
        <div class="container">
        	<h6 class="fs-3 fw-bold pt-5 pb-2 text-success ptunset">Server Administrator ZONE</h6>
        	<hr>
          <div class="pricing-table table-responsive">
            <table class="table border shadow ">
              <!-- Heading -->
              <thead>
                <tr>
                  <th class="border-end border-0 border-white border-3">
                  	<p class="fs-5">Course Name</p>
                  </th>
                  <th class="border-end border-0 border-white border-3">
                    <p class="fs-5">Duration</p>
                  </th>
                  <th class="highlight border-end border-0 border-white border-3">
                    <p class="fs-5">Details</p>
                  </th>
                </tr>
              </thead>
              <tbody class="border-top border-0 border-white border-bottom border-3">
                <tr>
                  <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title"><p>	Microsoft Windows Server -2012</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">30 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Installing and Configuring Server</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">30 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Administering Windows Server</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">30 hrs	</td>
                  <td class=" border-0 border-end border-success border-bottom border-1"> Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Advanced Windows Server</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">30 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Designing and Implementing Server infrastructure</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">32 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Implementing an Advanced Server Infrastructure</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">32 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<div class="seopackages contentpricing">
        <div class="container">
        	<h6 class="fs-3 fw-bold pt-5 pb-2 text-success ptunset">MICROSOFT AZURE ZONE</h6>
        	<hr>
          <div class="pricing-table table-responsive">
            <table class="table border shadow ">
              <!-- Heading -->
              <thead>
                <tr>
                  <th class="border-end border-0 border-white border-3">
                  	<p class="fs-5">Course Name</p>
                  </th>
                  <th class="border-end border-0 border-white border-3">
                    <p class="fs-5">Duration</p>
                  </th>
                  <th class="highlight border-end border-0 border-white border-3">
                    <p class="fs-5">Details</p>
                  </th>
                </tr>
              </thead>
              <tbody class="border-top border-0 border-white border-bottom border-3">
                <tr>
                  <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title"><p>	Microsoft Azure Infrastructure and Deployment</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">24 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Microsoft Certified: Azure Administrator Associate</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Microsoft Certified: Azure IoT Developer Specialty</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs	</td>
                  <td class=" border-0 border-end border-success border-bottom border-1"> Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Designing Microsoft Azure Infrastructure Solutions</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Microsoft Azure Architect Design</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Microsoft Certified: DevOps Engineer Expert</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Microsoft Azure Security Technologies</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Microsoft Certified: Azure Network Engineer Associate</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Administering Windows Server Hybrid Core Infrastructure</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Configuring Windows Server Hybrid Advanced Services</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Microsoft 365 Certified: Modern Desktop Administrator Associate</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Microsoft 365 Certified: Messaging Administrator Associate</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>	Microsoft Certified: Azure AI Engineer Associate</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<div class="seopackages contentpricing">
        <div class="container">
        	<h6 class="fs-3 fw-bold pt-5 pb-2 text-success ptunset">Microsoft Security ZONE</h6>
        	<hr>
          <div class="pricing-table table-responsive">
            <table class="table border shadow ">
              <!-- Heading -->
              <thead>
                <tr>
                  <th class="border-end border-0 border-white border-3">
                  	<p class="fs-5">Course Name</p>
                  </th>
                  <th class="border-end border-0 border-white border-3">
                    <p class="fs-5">Duration</p>
                  </th>
                  <th class="highlight border-end border-0 border-white border-3">
                    <p class="fs-5">Details</p>
                  </th>
                </tr>
              </thead>
              <tbody class="border-top border-0 border-white border-bottom border-3">
                <tr>
                  <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title"><p>	Microsoft 365 Certified: Security Administrator Associate</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Microsoft 365 Certified: Developer Associate</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Microsoft Certified: Data Analyst Associate</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs	</td>
                  <td class=" border-0 border-end border-success border-bottom border-1"> Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Microsoft Certified: Azure Database Administrator Associate</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Microsoft 365 Certified: Enterprise Administrator Expert</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<div class="seopackages contentpricing">
        <div class="container">
        	<h6 class="fs-3 fw-bold pt-5 pb-2 text-success ptunset">LINUX ZONE</h6>
        	<hr>
          <div class="pricing-table table-responsive">
            <table class="table border shadow ">
              <!-- Heading -->
              <thead>
                <tr>
                  <th class="border-end border-0 border-white border-3">
                  	<p class="fs-5">Course Name</p>
                  </th>
                  <th class="border-end border-0 border-white border-3">
                    <p class="fs-5">Duration</p>
                  </th>
                  <th class="highlight border-end border-0 border-white border-3">
                    <p class="fs-5">Details</p>
                  </th>
                </tr>
              </thead>
              <tbody class="border-top border-0 border-white border-bottom border-3">
                <tr>
                  <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title"><p>Red Hat Certified System Administrator (RHCSA)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">42 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Red Hat Certified Engineer (RHCE)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Red Hat Certified Engineer (RHCE) exam for Red Hat Enterprise Linux 8</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">64 hrs	</td>
                  <td class=" border-0 border-end border-success border-bottom border-1"> Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Red Hat Certified Specialist in Ansible Automation exam</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">62 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<div class="seopackages contentpricing">
        <div class="container">
        	<h6 class="fs-3 fw-bold pt-5 pb-2 text-success ptunset">Data Center</h6>
        	<hr>
          <div class="pricing-table table-responsive">
            <table class="table border shadow ">
              <!-- Heading -->
              <thead>
                <tr>
                  <th class="border-end border-0 border-white border-3">
                  	<p class="fs-5">Course Name</p>
                  </th>
                  <th class="border-end border-0 border-white border-3">
                    <p class="fs-5">Duration</p>
                  </th>
                  <th class="highlight border-end border-0 border-white border-3">
                    <p class="fs-5">Details</p>
                  </th>
                </tr>
              </thead>
              <tbody class="border-top border-0 border-white border-bottom border-3">
                <tr>
                  <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title"><p>CDCP (Certified Data Centre Professional)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>CDCS (Certified Data Centre Specialist)</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>CDCE (Certified Data Centre Expert )</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs	</td>
                  <td class=" border-0 border-end border-success border-bottom border-1"> Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>CITP (Certified Information Technology Professional )</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
	<!--================================editor_texts section end here=======================-->

	<!--================================editor_texts section start here=======================-->
	<div class="seopackages contentpricing">
        <div class="container">
        	<h6 class="fs-3 fw-bold pt-5 pb-2 text-success ptunset">Vmware</h6>
        	<hr>
          <div class="pricing-table table-responsive">
            <table class="table border shadow ">
              <!-- Heading -->
              <thead>
                <tr>
                  <th class="border-end border-0 border-white border-3">
                  	<p class="fs-5">Course Name</p>
                  </th>
                  <th class="border-end border-0 border-white border-3">
                    <p class="fs-5">Duration</p>
                  </th>
                  <th class="highlight border-end border-0 border-white border-3">
                    <p class="fs-5">Details</p>
                  </th>
                </tr>
              </thead>
              <tbody class="border-top border-0 border-white border-bottom border-3">
                <tr>
                  <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title"><p>VCPS-DCV VMWARE vSphere,Install,Fonfigure, Manage [V5.1]</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>VMware Associate VMware Network Virtualization</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>VMware Certified Professional – Network Virtualization</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs	</td>
                  <td class=" border-0 border-end border-success border-bottom border-1"> Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>VMware Certified Advanced Professional – Network Virtualization</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>VMware Associate VMware Data Center Virtualization</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>VMware Certified Professional – Data Center Virtualization</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>VMware Certified Advanced Professional – Data Center Virtualization Design</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Associate VMware Cloud Management Automation</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
                <tr>
                  <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title"><p>Professional VMware vRealize Automation 8.3</p></span></td>
                  <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
                  <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
	<!--================================editor_texts section end here=======================-->

	<!--================================top_ready_start section start here=======================-->
	<section class="top_ready_start pt-5 ptunset" style="padding-top: unset;">
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
                        <img src="frontend/images/95991_prev_ui.png" alt="Server & Network Administration " description="Server & Network Administration">
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
                 	<img src="frontend/images/Payment-method-banner-image-1024x73.webp" alt="Server & Network Administration " description="Server & Network Administration" width="100%">
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