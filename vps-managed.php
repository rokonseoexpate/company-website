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
	<title>Managed VPS Hosting</title>

	<?php include('./includes/style.php') ?>

	<div class="gtranslate_wrapper"></div>

</head>


<body>
	<?php include "includes/navbar.php" ?>

	<?php include "includes/domain-hosting-nav.php" ?>

	<!--================================domai_search_bar section start here=======================-->
	<section class="domai_search_bar web_hosting" style="background-image: url(frontend/images/website-support-5.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 80px 0;">
		<div class="container">
			<div class="row pb-5">
				<div class="top_about_us_txt" style="z-index:500;">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcumb_gph">
							<li class="breadcrumb-item "><a href="domain-hosting.php" class="text-light ">Domain & Hosting</a></li>
							<li class="breadcrumb-item active text-light" aria-current="page">VPS Managed</li>
						</ol>
					</nav>
				</div>
				<div class="col-12">
					<h4 class="text-light text-center">Fully Managed VPS Hosting</h4>
				</div>
			</div>
		</div>
	</section>
	<!--================================domai_search_bar section end here=======================-->

	<!--================================Private_Server section start here=======================-->
	<section class="Private_Server">
		<div class="container">
			<div class="row">
				<h1>Managed VPS Web Hosting Plans & Pricing</h1>
				<h2>High Performance SSD VPS</h2>
				<p>Choose your vps according to your need, 100% Intel CPU and 100% SSD storage.</p>
				<div class="bd-example">
					<?php include "includes/high-performance-ssd-vps.php" ?>
				</div>
			</div>
		</div>
	</section>
	<!--================================Private_Server section end here=======================-->

	<!--================================all_plan section start here=======================-->
	<section class="all_plan PrivateServer">
		<div class="container">
			<?php include "includes/featured-operating-systems.php" ?>
		</div>
	</section>
	<!--================================all_plan section end here=======================-->

	<!--================================all_plan section start here=======================-->
	<section class="all_plan PrivateServer all-plan">
		<div class="container">
			<?php include "includes/server-location.php" ?>
		</div>
	</section>
	<!--================================all_plan section end here=======================-->

	<!--================================all_plan section start here=======================-->
	<section class="all_plan PrivateServer">
		<div class="container">
			<?php include "includes/application.php" ?>
		</div>
	</section>
	<!--================================all_plan section end here=======================-->

	<!--================================SSD_WEB section start here=======================-->
	<section class="all_plan PrivateServer all-plan">
		<div class="container">
			<?php include "includes/vps-support.php" ?>
		</div>
	</section>
	<!--================================SSD_WEB section end here=======================-->

	<!--================================accordion section start here=======================-->
	<section class="accordion_service">
		<div class="container">
			<div class="row">
				<h6 class="text-center pb-5 fs-2">Managed VPS Hosting FAQs</h6>
				<div id="accordion">
					<div class="accordion-item">
						<h5 class="accordion-header" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Q. What is managed VPS hosting?</h5>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
							<div class="accordion-body">
								<p>A virtual private server (VPS) is a virtual operating system (or instance) that resides inside a parent server and shares resources with other virtual servers. The parent server divides up resources between all of the virtual servers via software called a hypervisor. The hypervisor creates and runs the VPS instances.</p>
								<p>A VPS instance is just like a regular server and is managed through an easy-to-use control panel. Since a VPS duplicates many of the properties of a physical server, it also provides similar functionality and processes.</p>
								<p>In a VPS setting, you’ll have full control to resize your server up to accommodate spikes in traffic or scale it down for post-seasonal businesses. The ability to upgrade or downgrade allows you to pay for only the resources you use on the VPS server.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Q. What are the benefits of VPS hosting?
						</h5>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
							<div class="accordion-body"><strong>A SEO Expate Bangladesh Ltd. managed VPS not only provides peace of mind, but also offers a robust combination of additional benefits, including:</strong> <br>
								<ol>
									<li>Quick resizing for changes in traffic flow.</li>
									<li>Only pay for what you use.</li>
									<li>Host unlimited sites (based on the resources available).</li>
									<li>Cost-effective hosting solution.</li>
									<li>Contract-free hosting.</li>
									<li>Multiple OS choices available.</li>
									<li>Daily backups (via your Manage Interface).</li>
									<li>SSH and full root access.</li>
									<li>Highly stable and secure.</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Q. Are all VPS hosting plans managed?
						</h5>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
							<div class="accordion-body">
								<p>No, not all VPS hosting plans are managed. Our VPS hosting plans have multiple managed and unmanaged management levels to suit every business need. Choose from these options:</p>
								<ol>
									<li>Fully managed VPS hosting: our primary recommendation, fully managed VPS hosting provides all of the support and assistance you need as a new server owner.</li>
									<li>Core VPS-managed: if you’re confident in your skills to run your own server and just a little support at times, core managed may be right for you.</li>
									<li>Unmanaged: this option may work better for larger firms that have a dedicated IT staff.</li>
								</ol>
								<p>We also include multiple management panels to assist you in managing your virtual private server, including:foun</p>
								<ol>
									<li>cPanel</li>
									<li>Plesk</li>
									<li>InterWorx</li>
								</ol>
								<p>Other management panels like Directadmin, Webmin, and CentOS Web Panels are also supported on almost all of our servers.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingFour" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Q. Which VPS should I choose?
						</h5>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
							<div class="accordion-body">
								<p>There are a few ways you can choose the right VPS solution for your needs. You don’t have to hire an expert to find a VPS option that is right for you. Your current hosting provider can provide details about your operating system (OS), central processing unit (CPU), random access memory (RAM), and disk usage to help you make an informed decision. Also, any current traffic logs can help narrow down your choice even further!</p>
								<p>If you are new to hosting or don’t know your current setup, contact our helpful Solutions Architects! We offer a variety of VPS solutions, including VPS Cloud Hosting starting at $5/mo. Our team of experts is waiting for 24/7 to assess your needs and make those tough decisions for you. Get used to a group of experts on your side!</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingFourr" data-bs-toggle="collapse" data-bs-target="#collapseFourr" aria-expanded="false" aria-controls="collapseFourr">Q. What operating systems can I get on a VPS?
						</h5>
						<div id="collapseFourr" class="accordion-collapse collapse" aria-labelledby="headingFourr" data-bs-parent="#accordion">
							<div class="accordion-body">
								<p>You have several options of operating systems. On our VPS platform, we currently offer the following 64-bit operating systems:</p>
								<ol>
									<li>Alma Linux</li>
									<li>CentOS</li>
									<li>CloudLinux</li>
									<li>Debian</li>
									<li>Fedora</li>
									<li>Windows Server</li>
									<li>Ubuntu</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingFive" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Q. Can I install my own OS on a VPS?
						</h5>
						<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
							<div class="accordion-body">Unfortunately, the VPS hosting platform does not allow the installation of custom operating systems. If the noted operating systems are not the right fit for you, you may want to consider a dedicated server. Our dedicated servers allow for the installation of multiple custom operating systems. Additionally, they provide the ability to fully customize your hosting environment!
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingSix" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Q. How do I move my site to a VPS?
						</h5>
						<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion">
							<div class="accordion-body">
								<p>You don’t need to move your site, we do it for you! Our Migrations team’s sole focus is to take that pressure off you by transferring your data from your old server or provider to us. Did we mention migrations come free with our VPS hosting?</p>
								<p>Moving a website requires skilled experts, a proven process, sharp attention to detail, and a dedicated amount of designated time. Our Migrations team can transfer your data on your timeline with minimal downtime. Whether you are looking to have more room for customization, or you have outgrown your current hosting environment, our Migrations team is here to make the transition as smooth as possible.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================accordion section end here=======================-->

	<!--================================domai_support section start here=======================-->
	<section class="domai_support">
		<div class="container">
			<div class="row">
				<h4>NEED HELP? CALL OUR SUPPORT AT <span>+8801409957451</span></h4>
			</div>
		</div>
	</section>
	<!--================================domai_support section end here=======================-->

	<!--================================payment_method section start here=======================-->
	<section class="payment_method">
		<?php include "includes/payment-method.php" ?>
	</section>


	<?php include "includes/footer_menu.php" ?>

	<?php include "includes/script.php" ?>

</body>

</html>