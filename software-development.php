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
	<title>Software Development</title>
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

<body>

	<!--================================Header section start here=======================-->
	<?php include('./includes/navbar.php') ?>
	<!--================================Header section end here=======================-->


	<!--================================top-body section start here=======================-->
	<section class="top-body web_service" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover;  margin-top: 60px; ">
		<div class="container ">
			<div class="row">
				<div class="col-12" style="z-index:500;">
					<div class="top_about_us_txt pt-5">
						<div class="top_about_us_txt" style="z-index:500;">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb breadcumb_gph">
									<li class="breadcrumb-item "><a href="/" class=" text-light">Home</a></li>
									<li class="breadcrumb-item active text-light" aria-current="page">Software Development</li>
								</ol>
							</nav>
						</div>
					</div>
					<div class="top_body_txt_part">
						<h1>Software Development Services </h1>
						<h2>Provided by SEO Expate.</h2>
						<p><a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd is a software developer company. However, our team contains expert developers, designers, business analysts, and project managers. Moreover, we focus on building custom mobile and web applications. Therefore, Enterprises across a diverse set of industries including government, education, health care, financial services, and more. Also, hiring a custom software development company requires a sharp eye. To conclude, we can assure you that choosing our <a href="/" class="text-success">company</a> and collaborating with us will get you the best outcome.</p>
					</div>
					<div class="top-body-button pt-3">
						<div class="d-flex gap-3">
							<a type="button" href="contact.php">Get a Proposal</a>
							<!-- <a type="button" href="contact.php">Hire Software Developers</a> -->
						</div>
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
					<div class="pb-2 pt-2 text-light">
						<h4 class="fs-1 fw-bold">Software Development Service Summary</h4>
					</div>
					<p class="pt-2 text-light">Our software development <a href="services.php" class="text-success">services</a> offer special solutions to meet your business needs. However, with a team of developers, we specialize in making custom software, mobile apps, and web platforms. Also, it can streamline processes and enhance user experiences. However, from initial concept to final deployment, we maintain communication and collaboration. And, ensure that your vision is brought to accurately. Also, our agile approach allows for flexibility and adaptability throughout the development process, ensuring high-quality results that align with your goals. To conclude, trust us to deliver innovative, reliable, and scalable software solutions that drive your business forward.</p>
				</div>
			</div>
		</div>
	</section>
	<!--================================cliping_service section end here=======================-->

	<!--================================we_following section start here=======================-->
	<div class="our_mission our_promise we_following">
		<div class="container">
			<div class="row">
				<div class="updatecode">
					<h6 class="text-center pb-2">Benefits of Software Development Services for Small, Medium & Large Businesses</h6>
				</div>
				<p class="border-bottom border-success border-2 pb-4 mb-5">Software development services offer lots of benefits for businesses of all sizes. Therefore, for small companies, custom software can boost productivity efficiency and help you with the other competitors. Also, medium-sized companies can benefit from solutions that keep up growth, plan operations, and increase production. Large companies can use this service to solve difficult problems, and stay ahead of industry trends. Furthermore, software development services help businesses to grow, adapt to changing market demands, and drive success through technology-driven solutions tailored to their needs.</p>
				<div class="col-md-6">
					<h6 class="fs-1 fw-bold">Benefits</h6>
					<hr class="border-bottom border-danger border-2" style="width: 20%;">
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Optimized Business Process</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Scalable AR/VR/MR Solutions</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Improve Accessibility</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Ensure the best combination of skills</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Technical excellence combines with great customer service</p>
				</div>
				<div class="col-md-6">
					<img src="frontend/images/Major-benefits-of-customer-feedback-for-software-development.jpg" alt="Software Development" description="Software Development" class="img-thumbnail">
				</div>
			</div>
		</div>
	</div>
	<!--================================we_following section end here=======================-->

	<!--================================we_following section start here=======================-->
	<div class="our_mission our_promise we_following" style="background: var(--bg-secondary-color);">
		<div class="container">
			<div class="row">
				<div class="updatecode">
					<h6 class="text-center pb-2">Core Software Development Services</h6>
				</div>
				<p class="border-bottom border-success border-2 pb-4 mb-5">Our core development services offer you the best solutions for your customized software. Therefore, we collaborate with our customers and create something better for their needs. Our team carefully plans the whole project to finish it without any problems. Also, the development includes properly following the customer's instructions and ensuring it functions properly. So, these services enable the successful creation and deployment of custom software applications that drive business growth and innovation.</p>
				<div class="col-md-6">
					<img src="frontend/images/istockphoto-1502289545-612x612.jpg" alt="Software Development" description="Software Development" class="img-thumbnail">
				</div>
				<div class="col-md-6">
					<h6 class="fs-1 fw-bold">Our Services</h6>
					<hr class="border-bottom border-danger border-2" style="width: 20%;">
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Optimized Business Process</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Convert Manual System to Automate System Improve Accessibility</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Scalable AR/VR/MR Solutions</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Security</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Great customer service</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Ensure the best combination of skills</p>
				</div>
			</div>
		</div>
	</div>
	<!--================================we_following section end here=======================-->

	<!--================================we_following section start here=======================-->
	<div class="our_mission our_promise we_following">
		<div class="container">
			<div class="row">
				<div class="updatecode">
					<h6 class="text-center pb-2">Desktop Software Development Services</h6>
				</div>
				<p class="border-bottom border-success border-2 pb-4 mb-5">Desktop Software Development is the process of making computer programs for specific functionality. You can take advantage of using desktop software for its speed and performance. Besides, they run on desktops or laptops with macOS, Windows, or Linux operating systems. The independence of internet connectivity also makes desktop software in demand for businesses. And SEO Expate Bangladesh Ltd. is helping businesses by providing best-in-class desktop software development services globally.</p>
				<div class="col-md-6">
					<h6 class="fs-2 fw-bold">System Software Development</h6>
					<hr class="border-bottom border-danger border-2" style="width: 20%;">
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>System Software Development</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Programming Software Development</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Cross-platform Desktop App Development</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Open Source Software Development</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Shareware development</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Desktop Software Modernization</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Utility Software Development</p>
				</div>
				<div class="col-md-6">
					<img src="frontend/images/software-developer-6521720_960_720.jpg" alt="Software Development" description="Software Development" class="img-thumbnail">
				</div>
				<div class="application pt-3">
					<div class="row">
						<h6 class="fs-2 fw-bold pt-3"></h6>
						<hr class="border-bottom border-danger border-2">
						<div class="col-md-6">
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Application Software Development</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Browsers & Firmware Development</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Driver Software Development</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> API Development</p>
						</div>
						<div class="col-md-6">
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Security and Assurance</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Desktop Software Integration</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"> </i></span>Research and Development</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================================we_following section end here=======================-->

	<!--================================we_following section start here=======================-->
	<div class="our_mission our_promise we_following" style="background: var(--bg-secondary-color);">
		<div class="container">
			<div class="row">
				<div class="updatecode">
					<h6 class="text-center pb-2">Mobile Software Development Services</h6>
				</div>
				<p class="border-bottom border-success border-2 pb-4 mb-5">Do you need a mobile app and are looking for a mobile software development company? Then, you can have smart mobile app solutions at SEO Expate Bangladesh Ltd. If you need simple mobile apps or game development, we have quality mobile app solutions for you. To fulfill your needs, <a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd. offers mobile apps development with customization services.Here, you can have mobile app solutions for smartphones, smartwatches, iPhones, iPad, Apple Watch, Android, iOS, Windows Phone, and many more. You can rely on SEO Expate Bangladesh Ltd. the most reliable custom software development company. The expert team at <a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd. has expertise in Java, J2ME, J2EE, Ajax, PHP, Java, Ruby on Rails, and more to develop your mobile software.</p>
				<div class="col-md-6">
					<img src="frontend/images/istockphoto-1174690086-612x612.jpg" alt="Software Development" description="Software Development" class="img-thumbnail">
				</div>
				<div class="col-md-6">
					<h4 class="fs-2 fw-bold">Mobile Software Development</h4>
					<hr class="border-bottom border-danger border-2" style="width: 20%;">
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>OCustom Mobile Software Development</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Cross-platform Mobile Software Development</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Hybrid Software Development, Hybrid Mobile App Development</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Android Mobile Software Development</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>iOS Mobile Software Development</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Windows Phone Software Development</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Mobile Software Modernization</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Hybrid Software Development</p>
				</div>
				<div class="ios">
					<div class="row">
						<h4 class="fs-2 fw-bold pt-3">iOS and Android Apps Development</h4>
						<hr class="border-bottom border-danger border-2">
						<div class="col-md-6">
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Custom iOS and Android Apps Development</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> eCommerce Mobile App Development</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Native Mobile App Development, Native Mobile Software</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Android Mobile App Development, Mobile Game Development</p>
						</div>
						<div class="col-md-6">
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> iPad App Development, iPhone App Development</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Windows Phone App Development</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> UI/UX design, Mobile Apps with Blockchain Integration</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Hybrid Mobile App Development</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================================we_following section end here=======================-->

	<!--================================we_following section start here=======================-->
	<div class="our_mission our_promise we_following">
		<div class="container">
			<div class="row">
				<div class="updatecode">
					<h6 class="text-center pb-2">Custom Software Development Services</h6>
				</div>
				<p class="border-bottom border-success border-2 pb-4 mb-5">The custom software solution provides superior functionality. As a result, Small-to-midsize (SMB) and enterprises can gain a competitive advantage by using custom software. However, suppose you need custom software development services like desktop, <a href="web-development.php" class="text-success">web</a>, <a href="app-development.php" class="text-success">mobile apps</a>, cloud computing, and more. In that case, <a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd. can offer you the best solution for custom software development. With a proven record in custom software development for large enterprises and organizations, expert developers at <a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd. excel in custom mobile app development, desktop software development, and many more. Let's work together.</p>
				<div class="col-md-6">
					<h6 class="fs-2 fw-bold">Custom Enterprise Software Development </h6>
					<hr class="border-bottom border-danger border-2" style="width: 20%;">
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Custom Software Development for New Technologies</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Departmental Software, Customer Self-service Apps</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>UI and UX, Customer Self-service Apps</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Manufacturing Execution System (MES)</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> SProcurement Platforms</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Inventory Management Software</p>
					<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Supply Chain Management (SCM)</p>
				</div>
				<div class="col-md-6">
					<img src="frontend/images/shutterstock_1171172626.jpg" alt="Software Development" description="Software Development" class="img-thumbnail">
				</div>
				<div class="application pt-3">
					<div class="row">
						<h6 class="fs-2 fw-bold pt-3">Custom Mobile App Development </h6>
						<hr class="border-bottom border-danger border-2">
						<div class="col-md-6">
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> ACorporate & Interorganizational Software Systems</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Software for a Specific Business Function</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Cross-industry, DevOps and QA</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Product Life-cycle Management (PLM) Software</p>
						</div>
						<div class="col-md-6">
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span> Healthcare Revenue Cycle Management</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Business Process Management</p>
							<p> <span><i class="fa-solid fa-circle" alt="Software Development" description="Software Development"></i></span>Ecommerce Solutions, Point of Sale (POS) Software</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================================we_following section end here=======================-->

	<!--================================accordion section start here=======================-->
	<section class="accordion_service">
		<div class="container">
			<div class="row">
				<h6 class="text-center pb-5 fs-2">FAQs of Software Development Company and Services</h6>
				<div id="accordion">
					<div class="accordion-item">
						<h5 class="accordion-header" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Q. What are Software Development Services?</h5>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
							<div class="accordion-body">Software development services are the development of computer programs. The process includes designing, engineering, deploying, supporting, and fixing bugs in the software. And by performing all the processes, software development companies help customers.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Q. Why do you need a Software Development Company?
						</h5>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
							<div class="accordion-body">Software development companies develop software, frameworks, and tools for solving problems. If you are having difficulties handling your business, you need a software development partner. Then you can make your ideas thrive.Hiring a software development company can give you fresh perspectives. And experts can provide adequate support with their innovative Software development service ideas. Thus, you can save time and cost and get reliable software development services.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Q. Why should we choose SEO Expate Bangladesh Ltd. over other software development companies?
						</h5>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
							<div class="accordion-body">SEO Expate Bangladesh Ltd. is an ISO 9001:2023 certified Software Development Company. Also, the best platforms among software companies offer a comprehensive set of software development services to help you grow your business. Contact us if you need custom software, mobile apps, an e-commerce website, or a web application. Our highly expert software development team will create a masterpiece for you. They have a high level of recognition for their Software Development expertise.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingFour" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Q. I have got an idea, how and where do I start?
						</h5>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
							<div class="accordion-body">If you need a software solution, you can contact us by up this form. Click here and tell us your needs and we’ll get back to you. After analyzing your requirements, our team can arrange a meeting with you if you want. We will also share project proposals for budget and timeline estimates with you. If you want to know more about how we work then please <a href="#" class="text-success">visit us</a>.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingFourr" data-bs-toggle="collapse" data-bs-target="#collapseFourr" aria-expanded="false" aria-controls="collapseFourr">Q. Should I need to know about the technical details before working with you?
						</h5>
						<div id="collapseFourr" class="accordion-collapse collapse" aria-labelledby="headingFourr" data-bs-parent="#accordion">
							<div class="accordion-body">There is no need to know about the technical details. We will handle all the technical complexities. All you have to do is share your ideas with us. But if you are interested to see our technical expertise then you can <a href="#" class="text-success">visit here</a> to see the technologies we have expertise at.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingFive" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Q. What details do you need from me to begin the development?
						</h5>
						<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
							<div class="accordion-body">Share the details of your project ideas such as market scopes, timeframes, business challenges and other necessary information.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingSix" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Q. Can you develop Mobile Software?
						</h5>
						<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion">
							<div class="accordion-body">Yes, we can. You can work with SEO Expate Bangladesh Ltd. for any kind of mobile app development. Please visit our <a href="app-development.php" class="text-success">mobile app development services.</a></div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingSeven" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Q. Can you develop Desktop Software?
						</h5>
						<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordion">
							<div class="accordion-body">Yes, we can. You can work with SEO Expate Bangladesh Ltd. for any kind of desktop software. Please visit our <a href="/" class="text-success">SEO Expate Bangladesh Ltd.</a> .
							</div>
						</div>
					</div>

					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingSeveen" data-bs-toggle="collapse" data-bs-target="#collapseSeveen" aria-expanded="false" aria-controls="collapseSeveen">Q. Do I need to test my software?
						</h5>
						<div id="collapseSeveen" class="accordion-collapse collapse" aria-labelledby="headingSeveen" data-bs-parent="#accordion">
							<div class="accordion-body">Yes, please. <br>

								We need your support with testing the project. <br>

								We have testing and quality assurance processes, but the way we think and use your game is different from how you will. You know best what you want better than anyone else. <br>

								Probably you will use and interact with what we have built-in in ways that we could not have predicted.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingSeeven" data-bs-toggle="collapse" data-bs-target="#collapseSeeven" aria-expanded="false" aria-controls="collapseSeeven">Q. Which payment model do you offer?
						</h5>
						<div id="collapseSeeven" class="accordion-collapse collapse" aria-labelledby="headingSeeven" data-bs-parent="#accordion">
							<div class="accordion-body">SEO Expate Bangladesh Ltd. offers several pricing models that depend on the project nature and service. Thus, you can choose the best price option for the development of your software. We offer fixed price, Time & materials, and a dedicated team model.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingSevenn" data-bs-toggle="collapse" data-bs-target="#collapseSevenn" aria-expanded="false" aria-controls="collapseSevenn">Q. How do you guarantee product quality?
						</h5>
						<div id="collapseSevenn" class="accordion-collapse collapse" aria-labelledby="headingSevenn" data-bs-parent="#accordion">
							<div class="accordion-body">You will have unlimited support from our team. They will regularly test the work results, taking into account all customer preferences. As we work to gain our customer's satisfaction, we guarantee high-quality services. Meet the <a href="about.php" class="text-success">core team.</a>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingSseven" data-bs-toggle="collapse" data-bs-target="#collapseSseven" aria-expanded="false" aria-controls="collapseSseven">Q. What support services do you provide after the development?
						</h5>
						<div id="collapseSseven" class="accordion-collapse collapse" aria-labelledby="headingSseven" data-bs-parent="#accordion">
							<div class="accordion-body">We will always provide you with technical support for the developed projects. In addition, you can also have 24*7 customer support from our dedicated customer service team.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================accordion section end here=======================-->

	<!--================================top_ready_start section start here=======================-->
	<section class="top_ready_start">
		<div class="container">
			<?php include('./includes/seo-build-story.php') ?>
		</div>
	</section>
	<!--================================top_ready_start section end here=======================-->



	<!--===========================footer part start===================================-->
	<?php include('./includes/footer_menu.php') ?>
	<!--===========================footer part end===================================-->

	<?php include "includes/script.php" ?>

</body>

</html>