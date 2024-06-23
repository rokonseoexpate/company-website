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
	<title>Web Development</title>
	<meta property="og:title" content="Home - IT Services, Technology Solutions">

	<link rel="stylesheet" href="frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="frontend/css/style.css">
	<link rel="stylesheet" href="frontend/css/responsive.css">
	<link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">

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
	<!--================================web_service section start here=======================-->
	<section class="web_service text-light">
		<div class="container ">
			<div class="row">
				<div class="top_about_us_txt pt-5">
					<div class="top_about_us_txt" style="z-index:500;">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcumb_gph">
								<li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
								<li class="breadcrumb-item active text-light" aria-current="page">Web Development</li>
							</ol>
						</nav>
					</div>
				</div>
				<div class="col-md-6" style="z-index:500;">
					<div class="top_body_txt_part">
						<h4>We have Premium Website Development Services Empowering Business Growth With Professionalism</h4>
					</div>
					<div class="button pt-5">
						<a href="contact.php" class="text-light">Contact Us</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="web_service_img">
						<img src="frontend/images/iPhone-App-Screen-Mockups_prev_ui.png" alt="Web Development " description="Web Development">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================web_service section end here=======================-->

	<!--================================our_promise section start here=======================-->
	<div class="our_mission our_promise" style="background-image: url(images/Web_Development_BG.jpg); background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<div class="row newudcode">
				<h2 class="text-center pb-5">Why We Are The Best Web Development Company In Bangladesh?</h2>
				<div class="col-md-6">
					<p style="text-align: justify;"><a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd is a leading IT company and we are known as the best Web Development <a href="/" class="text-success">Company</a> in Bangladesh. Here, our web development team has years of experience in creating high-performance websites. We are updated with the latest development innovations therefore we can give you world-class services. Hence, we can say that no matter which industry you are in, we can provide you with an attractive, responsive, secure, flexible, and well-structured site. Also, we ensure dynamic websites, proper development, website security, and search engine optimization. The whole operation is built around your precise specifications and requirements. Moreover, we build customized websites based on our clients’ demands and budgets. </p>
				</div>
				<div class="col-md-6">
					<img src="frontend/images/Best-Website-Design-Company-in-Bangladesh_prev_ui.png" alt="Web Development " description="Web Development" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!--================================our_promise section end here=======================-->

	<!--================================Our_Branches section start here=======================-->
	<section class="Our_Branches type_of">
		<div class="container">
			<div class="row">
				<div class="Our_Branches_txt newudcode">
					<h1>Types of Web Development Services</h1>
					<hr>
				</div>
				<div class="col-md-3 pt-5">
					<a href="#web-portfolio">
						<div class="card">
							<img src="frontend/images/ecommerce-website2.jpg" class="card-img-top" alt="Web Development " description="Web Development">
							<div class="card-body pb-4">
								<h5 class="card-title">Ecommerce Website</h5>
								<p class="card-text">A website that can properly manage all kinds of products you want to sell. Help your customers to purchase easily through eCommerce sites.</p>
								<span>&nbsp</span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 pt-5">
					<a href="#web-portfolio">
						<div class="card hover-zoom">
							<img src="frontend/images/corporate-website2.jpg" class="card-img-top" alt="Web Development " description="Web Development">
							<div class="card-body pb-5">
								<h5 class="card-title">Corporate Website</h5>
								<p class="card-text">Maintain your business and other corporate body through a strong corporate website that upholds an official outlook. Make it easy, make it official.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 pt-5">
					<a href="#web-portfolio">
						<div class="card">
							<img src="frontend/images/Bloging-website.jpg" class="card-img-top" alt="Web Development " description="Web Development">
							<div class="card-body pb-5">
								<h5 class="card-title">Blog / Portfolio Website</h5>
								<p class="card-text">Publish all your writings and personal experience through a nice-looking blog/portfolio website. Give your readers an amazing reading environment.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 pt-5">
					<a href="#web-portfolio">
						<div class="card">
							<img src="frontend/images/education-website.jpg" class="card-img-top" v>
							<div class="card-body pb-4">
								<h5 class="card-title">Educational Website</h5>
								<p class="card-text">Spread the proper education using an informative and learner-friendly educational website. Take the learning system to one step higher.</p>
								<span>&nbsp</span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-3 pt-5">
					<a href="#web-portfolio">
						<div class="card">
							<img src="frontend/images/news-website.jpg" class="card-img-top" alt="Web Development " description="Web Development">
							<div class="card-body pb-5">
								<h5 class="card-title">News Website</h5>
								<p class="card-text">Gather all the local and international latest news in one platform. Let your news website be an online hub of information and research.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 pt-5">
					<a href="#web-portfolio">
						<div class="card hover-zoom">
							<img src="frontend/images/entertainment-website.jpg" class="card-img-top" alt="Web Development " description="Web Development">
							<div class="card-body pb-5">
								<h5 class="card-title">Entertainment Website</h5>
								<p class="card-text">Make a web platform of fresh entertainment for people. Give an attractive look that fulfills your mind refreshment.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 pt-5">
					<a href="#web-portfolio">
						<div class="card">
							<img src="frontend/images/travel-website.jpg" class="card-img-top" alt="Web Development " description="Web Development">
							<div class="card-body pb-5">
								<h5 class="card-title">Travel Agency Website</h5>
								<p class="card-text">Decorate an attractive website that represents all the traveling scopes both at home and abroad. Make sure travelers can find it easy and helpful.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 pt-5">
					<a href="#web-portfolio">
						<div class="card">
							<img src="frontend/images/Customize-website.jpg" class="card-img-top" alt="Web Development " description="Web Development">
							<div class="card-body pb-5">
								<h5 class="card-title">Custom Website</h5>
								<p class="card-text">Make any kind of custom website you want. Make it simple and expressive so that it can fulfill your vision.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--================================Our_Branches section end here=======================-->

	<!--================================we_following section start here=======================-->
	<div class="our_mission our_promise we_following">
		<div class="container">
			<div class="row updatecode">
				<h6 class="text-center pb-5">We Believe in the Following Factors</h6>
				<hr>
				<div class="col-md-6">
					<p> <span><i class="fa-solid fa-circle"></i></span>Create and maintain business relationships with clients through quality support.</p>
					<p> <span><i class="fa-solid fa-circle"></i></span>Provide international-grade IT support to corporate-level organizations.</p>
					<p> <span><i class="fa-solid fa-circle"></i></span>Industry automation through <a href="software-development.php" class="text-success">software</a> & <a href="app-development.php" class="text-success">apps</a> to increase productivity.</p>
					<p> <span><i class="fa-solid fa-circle"></i></span>Full-time customer care support through cooperation.</p>
					<p> <span><i class="fa-solid fa-circle"></i></span>Work with full devotion to satisfying the demands of the clients.</p>
					<p> <span><i class="fa-solid fa-circle"></i></span>Help all industries to cope with digitization.</p>
					<p> <span><i class="fa-solid fa-circle"></i></span>We want to be the most reliable web development <a href="/" class="text-success">company</a> in Bangladesh.</p>
				</div>
				<div class="col-md-6">
					<img src="frontend/images/slide4.jpg" alt="Web Development " description="Web Development" class="img-thumbnail">
				</div>
			</div>
		</div>
	</div>
	<!--================================we_following section end here=======================-->

	<!--================================explore_portfolio_tab  section start here=======================-->
	<section class="top_body_explore_tab explore_portfolio_tab" id="web-portfolio">
		<div class="container">
			<div class="row">
				<div class="explore_txt">
					<div class="updatecode" style="margin-bottom: -40px;">
						<h6>Explore Our Portfolio</h6>
					</div>
					<p>Here, we have some previous working experience we would like to share. Visit your chosen category of website, it will give you a clear view of our <a href="services.php" class="text-success">services</a>. Look through them and feel free to contact us for details.</p>
				</div>
				<div class="explore_tabs">
					<div class="container py-5">
						<div class="row mb-5">
							<div class="p-5 bg-white rounded shadow mb-5">
								<!-- Rounded tabs -->
								<ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 ">
									<?php
									// Check database connection
									if (!$conn) {
										echo "Database connection failed: " . mysqli_connect_error();
									} else {
										$qry = "SELECT * FROM web_portfolio_categories";
										$result = mysqli_query($conn, $qry); // Execute the query

										if ($result && mysqli_num_rows($result) > 0) {
											$firstTab = true; // Reset the firstTab variable for the tab headers
											while ($row = mysqli_fetch_assoc($result)) {
									?>
												<li class="nav-item flex-sm-fill" role="presentation">
													<a id="<?php echo $row['id']; ?>-tab" data-bs-toggle="pill" href="#<?php echo $row['id']; ?>" role="tab" aria-controls="<?php echo $row['id']; ?>" aria-selected="<?php echo $firstTab ? 'true' : 'false'; ?>" class="nav-link border-0 font-weight-bold<?php echo $firstTab ? ' show active' : ''; ?>"><?php echo $row['name']; ?></a>
												</li>
									<?php
												$firstTab = false;
											}
										} else {
											echo "No categories found.";
										}
									}
									?>
								</ul>

								<div class="tab-content" id="myTabContent">
									<?php
									$firstTab = true; // Reset the firstTab variable for the tab content
									// Check database connection
									if (!$conn) {
										echo "Database connection failed: " . mysqli_connect_error();
									} else {
										$qry = "SELECT DISTINCT category_id FROM web_portfolios";
										$result = mysqli_query($conn, $qry);

										if ($result && mysqli_num_rows($result) > 0) {
											while ($row = mysqli_fetch_assoc($result)) {
									?>
												<div id="<?php echo $row['category_id']; ?>" role="tabpanel" aria-labelledby="<?php echo $row['category_id']; ?>-tab" class="tab-pane fade px-4 py-5<?php echo $firstTab ? ' show active' : ''; ?>">
													<div class="row">
														<?php
														// Check if category_id is not empty
														if (!empty($row['category_id'])) {
															$qryItems = "SELECT * FROM web_portfolios WHERE category_id = {$row['category_id']}";
															$resultItems = mysqli_query($conn, $qryItems);

															if ($resultItems && mysqli_num_rows($resultItems) > 0) {
																while ($item = mysqli_fetch_assoc($resultItems)) {
														?>
																	<div class="col-md-3 pt-5">
																		<a href="<?php echo $item['link']; ?>">
																			<div class="card ">
																				<img src="<?php echo 'uploads/' . basename($item['image']); ?>" class="cardHeight card-img-top" alt="<?php echo $item['title']; ?>" description="<?php echo $item['link']; ?>">
																				<div class="card-body ">
																					<h5 class="card-title cardHeight pb-3"><?php echo $item['title']; ?></h5>
																					<a href="<?php echo $item['link']; ?>" class="btn pt-2">Live Preview</a>
																				</div>
																			</div>
																		</a>
																	</div>
														<?php
																}
															} else {
																echo "No portfolio items found for this category.";
															}
														} else {
															echo "Category ID is empty.";
														}
														?>
													</div>
												</div>
									<?php
												$firstTab = false;
											}
										} else {
											echo "No portfolios found.";
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
	</section>
	<!--================================explore_portfolio_tab section end here=======================-->

	<!--================================what_you_need section start here=======================-->
	<section class="what_you_need">
		<div class="container">
			<div class="row">
				<div class="what_you_need_txt ">
					<div class="newudcode">
						<h6>What Kinds of Website Do You Need?</h6>
					</div>
					<p>What do you expect to get from your websites? <a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd has various types of web development services from which you can choose your desired one. In addition, you need to have a website that properly represents your company and all buy and sell functionality. A well-structured website will represent your company to the world and also increase your sales rapidly. Depending on the category and functionality, the technology changes, but don’t worry we have a great command over technology. Therefore, we only need your requirements and rest is our responsibility.</p>
					<h5 class="fs-4">E-Commerce Website:</h5>
					<p>Our E-commerce website service will make your online business easier. It will allow your businesses to reach a wide range of potential customers from your targeted country. Also, we ensure the best security system and enable a safer transaction method. E-commerce websites typically have features like Product Catalogs, Shopping carts, Search and Filter Options, Order Management, Reviews and Ratings, etc. In addition, our responsive web design will give a good user experience. Our website is suitable for integrating third-party services. Moreover, we will establish a proper data analytics and Reporting feature that will help you to fetch customer details. </p>
					<h5 v>Corporate Website:</h5>
					<p>The corporate Website will showcase the brand, products, <a href="services.php" class="text-success">services</a>, and corporate information to the public. It will serve as a digital existence of your company for the public to learn about the <a href="/" class="text-success">company</a> and engage with its offerings. SEO Expate Bangladesh Ltd is one of the most experienced web development companies to serve corporate clients. </p>
					<h5 class="fs-4">News Portal Website:</h5>
					<p>You can publish news articles, updates, and multimedia content from various sources through the news portal website. We have created multiple news websites successfully. Hence, we will follow all of your requirements and create a News Website entirely from scratch.</p>
					<h5 class="fs-4">Blog Website:</h5>
					<p>A blog website is a platform where you can regularly publish informational, educational, or entertaining content in the form of articles or posts. Besides, blogging is a great way to show your ability to help people with the right solution to any problems. People regularly get help from blog websites and thus you can create a huge fan base through content marketing. <a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd is a web development company in Bangladesh, that can help you to create any type of blog site.</p>
					<h5 class="fs-4">Portfolio Website:</h5>
					<p>A portfolio website is a medium where individuals, professionals, freelancers, or businesses showcase their work, projects, and skills. It is a great way to present yourself as an expert and impress your clients. So, as a professional you must have a portfolio site with your personalization. Here comes SEO Expate Bangladesh Ltd with vast experience in creating websites according to your specifications. Moreover, we can help you to create sites both with scratch and CMS. </p>
					<h5 class="fs-4">Educational Website:</h5>
					<p>An educational website is a platform to provide educational resources and academic support to the people. There are some mandatory features for an educational site like interactivity, certification, community, support, etc. Hence, you need expert solutions to create and maintain this kind of site. For that, you can trust our experience and try our web development services. </p>
					<h5 class="fs-4">Entertainment Website:</h5>
					<p>An entertainment website provides users with a diverse array of entertaining content. These sites could have various forms of content, including movies, TV shows, music, games, celebrity news, events, and cultural trends. In fact, we believe that entertainment is more than just a pastime. It is a journey that allows us to recharge our energy and explore new worlds. SEO Expate Bangladesh Ltd has previous experience in creating and maintaining entertainment websites. So, we can give you the best web development service in Bangladesh. </p>
					<h5 class="fs-4">Travel Agency Website:</h5>
					<p>You can create a visually appealing website to showcase all the travel opportunities available both domestically and internationally. Besides, this kind of site needs regular maintenance and updates for that you need professional help. We are capable of creating and maintaining travel agency websites and you can satisfy your customers with our services. </p>
					<h5 class="fs-4">Custom Website:</h5>
					<p>Custom website development service involves creating a unique site to meet specific needs and requirements. Also, we create customized websites according to the client’s requirements. This service offers greater flexibility, scalability, and customization options, allowing for a highly personalized brand presence. In addition, we are very much compatible with the updated technology. Moreover, we are strict about quality assurance therefore we have professional QA experts on our team. Hence, SEO Expate Bangladesh Ltd will give you a website that is user-friendly, stable, trustworthy, and will fulfill your needs.</p>
					<h5 class="fs-4">Why Do You Need Us?</h5>
					<p><a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd is one of the most renowned IT companies in Bangladesh. We use advanced web design technology and combine it with your business concepts while designing the site. Besides, we always make the website user-friendly and attractive so the visitor spends more time on the page.</p>
					<p>Additionally, our created sites are compatible with all kinds of devices from smartphones, tablets, laptops, and big-screen monitors. Also, we will give you an easy backend so that you can smoothly add content to the site. Moreover, we will add an effective data management system that will help you to gather and use databases.</p>
					<p>Moreover, we have a complete team consisting of UI/UX designers, web developers, content writers, graphics designers, and <a href="/" class="text-success">SEO Expates</a>. For that, we can ensure you a wide range of services from the design to rank on Google. Thus, we created a loyal customer base from all across the globe. </p>
					<h5 class="fs-4">What is Web Design?</h5>
					<p>Web design is the process of creating the visual appearance and layout of websites according to our needs. A website is developed with different types of codes like HTML, CSS, Javascript, etc. It is a common practice to illustrate the website interface with graphical tools to help the developers. This process encloses various elements such as layout, color scheme, typography, imagery, and navigation. So, web designers use design principles, and user experience to create pleasing, intuitive, and user-friendly websites that effectively engage visitors. Moreover, web design plays a vital role in shaping the user's perception of a website and increasing the engagement rate.</p>
					<h5 class="fs-4">Type of Web Design:</h5>
					<h5>E-commerce:</h5>
					<p>People visit E-commerce websites, not only to purchase but also to learn about a product. Therefore, it is important to build an E-commerce website very responsive, and attractive. This is essential for e-commerce sites as it directly impacts the user experience and overall success of the online store. For that, you require great design and design planning before going for the development. </p>
					<h5>Newspaper:</h5>
					<p>A news portal is the digital format of the newspaper but it has no limit of pages and contents. The news portals have made information greatly available to the mass population at a lesser cost nowadays. Therefore, the demand for newspapers is degrading day by day. It is very important to make a site attractive, user-friendly, and authentic to meet people's needs. Web design enables newspapers interactive features that enhance reader engagement. Thus, proper web design plays a crucial role in the success of newspaper websites by enhancing engagement, and brand awareness. </p>
					<h5>Portfolio: </h5>
					<p>A portfolio website is the representative of your professional or business career. It is a showcase of your work, projects, skills, and achievements to the world. Therefore, this is the most effective way to impress clients and grab opportunities. For that, you need an attractive portfolio that amazes people even at first glance. So, a dynamic, responsive, animated, and attractive portfolio website will improve your image in the industry.</p>
					<h5>Blog: </h5>
					<p>A blog site is the finest way to portray your knowledge and interact with people. Here, along with the depth of content, you also need to focus on the user experience of your site. If your site does not attract people then you can't get desired amount of traffic. For that, your website should be visually appealing and user-friendly and you can easily organize all the blog posts, articles, and other content. We developed many blog websites for years. So, before the development, our designers will provide you with an attractive layout and visuals for the websites.</p>
					<h5>Corporate:</h5>
					<p>Every organization of corporate business should have an attractive representation of their services and achievements through a website. This is highly recommended because, without a proper site, you can't think of brand building. Besides, your corporate website will help you to reach and attract potential buyers from all over the world. For that, your site must be organized and eye-catching. SEO Expate Bangladesh Ltd has been working for years on creating corporate website design. We will deliver you with a professional, trustworthy, and visually appealing online presence for businesses and organizations.</p>
					<h5>Education:</h5>
					<p>The educational website design focuses on engaging visuals, responsive design, and proper content organization. Most educational sites target young students and even children. Therefore, the site must have interactive learning tools with a smooth user experience. In addition, the design should ensure that students can give proper feedback and the teacher can make good assessments. SEO Expate Bangladesh Ltd is one of the best in Bangladesh, we have the capabilities to develop any kind of educational website.</p>
					<h5>Entertainment:</h5>
					<p>The entertainment website design must have visually engaging, immersive, and user-friendly online experiences. If the website is not properly organized then the entertainment site will not entertain people at all. So, it can be a disaster for your business to grow in this industry. This kind of site can have images, videos, animations, and different types of content formats. Therefore, all the contents must fit with the design and give a good experience to the audience. We worked for many entertainment websites successfully, therefore, we can give you a high-quality service.</p>
					<h5>Travel website: </h5>
					<p>Travel website design helps to portray informative content in an attractive manner to make people interested in it. The site will give visitors proper destination guides with interactive maps and catchy images of the place. In addition, most travel site has planning and booking options. Booking is only possible when you can attach the customers with the contents and travel plan. So, the website design will play a vital role in the success of the company. SEO Expate Bangladesh Ltd is an established web design company in Bangladesh, you can try our services. </p>
					<h5>Steps of Web Design: </h5>
					<p>Collect and Analyze the Requirements</p>
					<p>The most important thing to get customer satisfaction is to understand the customer's requirements. Therefore, we acquire a crystal clear understanding of the business and mission of the company. It helps the designers to understand and create the architecture to meet the company's needs. The key factor that we keep in mind is the target audience and the functionalities of the business. </p>
					<h5>Idea Generation</h5>
					<p>Idea Generation refers to planning for defining project milestone, and timelines as well as creating a strategy for execution. The designer analyzes all the requirements and makes an idea of the site. Here, content strategy is a key factor that is maintained properly. We create designs to make your brand visible in every corner of the site.</p>
					<h5>Create Workflows:</h5>
					<p>Here, we make a detailed demonstration of the site through diagrams and descriptions. This serves as a blueprint for the designers and we will share it with clients to get their feedback before moving forward.</p>
					<h5>Develop Visual Mockups:</h5>
					<p>Visual Mockups a static wireframes that show the visual UI(user interface) details to present a realistic model of the site. Developing Visual Mockups is the final step of website design. In addition, it gives the actual view of the website. Then, we deliver this design to the clients for approval. If the client is satisfied with the mockup then, the developer codes this site according to the design. </p>
					<h5 class="fs-4">Frequently Asked Questions (FAQ)</h5>
					<p>Every day we receive some questions from our buyers. Every client has specific need, especially people who want to customize their website always have some questions. We always welcome our clients to ask questions because it gives us complete details of the buyer's needs. Here, we add some questions that are frequently asked by our clients.</p>
				</div>
			</div>
		</div>
	</section>
	<!--================================what_you_need section end here=======================-->

	<!--================================accordion section start here=======================-->
	<section class="accordion_service">
		<div class="container">
			<div class="row">
				<div id="accordion">
					<div class="accordion-item">
						<h5 class="accordion-header" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							How long does it take to create a new website?
						</h5>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
							<div class="accordion-body">
								Every website is unique from the other. For that, the time depends on the requirements and also on the complexity of the site. The more functions you want to add to the site the more time it will take to develop. Besides, we focus on both time and quality so that we can provide the best service within the timeline.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							What is the price of a custom website?
						</h5>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
							<div class="accordion-body">
								The prices of our customer website vary from 20,000 to 40,000 Taka, depending on the requirements. Our pricing is very affordable in comparison to the market. Moreover, the price can be varied according to the complexity of the site. Contact us through the hotline, email, or WhatsApp number for more information.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							What do you offer after the website is created?
						</h5>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
							<div class="accordion-body">
								First of all, we will give you all kinds of support after delivering the website. In addition, we have many digital marketing services like Search Engine Optimization, Social Media Marketing, Google Ads, etc. Moreover, we have professional content writers and graphic designers. Therefore, we can provide you with a complete service from the web design to rank on search engines.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h5 class="accordion-header collapsed" id="headingFour" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							What are the technologies you use to develop a website?
						</h5>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
							<div class="accordion-body">
								We design and develop different websites with different technologies as per the client's requirements. Here, we use PHP, Laravel, WordPress, Node.js, Jquery, Javascript, HTML, CSS, and a wide range of other technologies. dditionally, if you are not sure about the technology our expert developers will help you by analyzing your requirements. SEO Expate Bangladesh Ltd is a famous company for providing the best quality websites in the local and global market.
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
	<?php include "includes/seo-build-story.php" ?>
	</section>
	<!--================================top_ready_start section end here=======================-->

	<!--===========================footer part start===================================-->
	<?php include('./includes/footer_menu.php') ?>
	<!--===========================footer part end===================================-->

	<script src="frontend/js/jquery-3.5.1.js"></script>
	<script src="frontend/js/bootstrap.bundle.min.js"></script>
	<script src="frontend/js/owl.carousel.js"></script>
	<script src="frontend/js/main.js"></script>

</body>

</html>