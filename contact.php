<?php
$title = "Contact";
ob_start();

require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$companyName = $_POST['company_name'];
	$companyWebsite = $_POST['company_website'];
	$type = $_POST['type'];
	$stuf = $_POST['stuf'];
	$description = $_POST['description'];

	$sql = "INSERT INTO `contacts`(`name`, `email`, `phone`, `company_name`, `company_website`, `type`, `stuf`, `description`) VALUES('$name', '$email', '$phone', '$companyName', '$companyWebsite', '$type', '$stuf', '$description')";

	$result = $conn->query($sql);

	if ($result === TRUE) {
		$referrer = $_SERVER['HTTP_REFERER'];
		echo "<script>alert('successfully submited');</script>";
		header("Location: contact.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>


<!--================================conversation_away section start here=======================-->
<section class="conversation_away pbunsetc">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="top_ready_start_txt ">
					<div class="top_about_us_txt" style="z-index:500;">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcumb_gph">
								<li class="breadcrumb-item "><a href="index.php" class="text-dark ">Home</a></li>
								<li class="breadcrumb-item active text-dark" aria-current="page">» Contact</li>
							</ol>
						</nav>
					</div>
					<h3>We’re just a</h3>
					<h4>Conversation away!</h4>
					<p>We combine international outlook with the knowledge from across the industries and technologies, into creating a digital masterpiece that delivers result.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="top_ready_start_img">
					<img src="frontend/images/95991_prev_ui.png" alt=" Conversation away" description=" Conversation away">
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================conversation_away section end here=======================-->

<!--================================contact_icons section start here=======================-->
<section class="contact_icons">
	<div class="container">
		<div class="row">
			<div class="col-md-6 borderr">
				<div class="contact_icons_txt d-flex">
					<div class="icon_key">
						<i class="fa-solid fa-magnifying-glass fa-rotate-90"></i>
					</div>
					<div class="icon_key_text">
						<p>Looking for Jobs?</p>
						<h5>Current Job Openings</h5>
					</div>
				</div>
			</div>
			<div class="col-md-6 borderb">
				<div class="contact_icons_txt d-flex">
					<div class="icon_key">
						<i class="fa-brands fa-searchengin fa-rotate-90"></i>
					</div>
					<div class="icon_key_text">
						<p>Looking for Business Collaboration or Partnership?</p>
						<h5>info@seoexpate.com</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 borderl">
				<div class="contact_icons_txt d-flex">
					<div class="icon_key">
						<i class="fa-brands fa-searchengin fa-rotate-90"></i>
					</div>
					<div class="icon_key_text">
						<p>Press Inquiries</p>
						<h5>info@seoexpate.com</h5>
					</div>
				</div>
			</div>
			<div class="col-md-6 ">
				<div class="contact_icons_txt d-flex">
					<div class="icon_key">
						<i class="fa-solid fa-magnifying-glass fa-rotate-90"></i>
					</div>
					<div class="icon_key_text">
						<p>Everything Else</p>
						<h5>info@seoexpate.com</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================contact_icons section end here=======================-->

<!--================================Our_Offices section start here=======================-->
<section class="Our_Offices">
	<div class="container">
		<div class="row">
			<div class="Our_Offices_txt pb-5 newudcode">
				<h6 class="fs-1">Our <span class="text-success">Offices</span></h6>
			</div>
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<!-- <iframe loading="lazy" src="https://maps.google.com/maps?q=SEO%20EXPATE%20BANGLADESH%20LTD.&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="SEO EXPATE BANGLADESH LTD." aria-label="SEO EXPATE BANGLADESH LTD."></iframe>-->
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14490.35118817288!2d89.3941205!3d24.7753184!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc5380c9b5d9d3%3A0x6b91dc7c9e5fc33b!2sSEO%20Expate%20Bangladesh%20Ltd!5e0!3m2!1sen!2sbd!4v1714979476233!5m2!1sen!2sbd" width="600" height="450" style="border:5px solid #fff;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="Our_Offices_map_txt newudcode">
					<h6 class="fs-3 text-start pt-3">Head Office (Bogura, Bangladesh)</h6>
					<p>Floor 1, Kagjipara, SEO Expate Tower, Majhira, Shahajanpur, Bogura-5801, Bangladesh</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14490.648871887286!2d89.3980751!3d24.772768!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc531d5ea1640d%3A0xf19f6922f3bc02f!2sSEO%20Expate%20Bangladesh%20Ltd.%20(Second%20%26%20Third%20Branch)!5e0!3m2!1sen!2sbd!4v1714979275811!5m2!1sen!2sbd" width="600" height="450" style="border:5px solid #fff;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				</div>
				<div class="Our_Offices_map_txt newudcode">
					<h4>Second Branch (Bogura, Bangladesh)</h4>
					<p>Floor 2, Mofazzal Tower, Majhira Bazar, Shahajanpur, Bogura-5801, Bangladesh</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14490.648871887286!2d89.3980751!3d24.772768!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc531d5ea1640d%3A0xf19f6922f3bc02f!2sSEO%20Expate%20Bangladesh%20Ltd.%20(Second%20%26%20Third%20Branch)!5e0!3m2!1sen!2sbd!4v1714979275811!5m2!1sen!2sbd" width="600" height="450" style="border:5px solid #fff;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="Our_Offices_map_txt newudcode">
					<h6 class="fs-3 text-start pt-3">Third Branch (Bogura, Bangladesh)</h6>
					<p>Floor 4 & 5, Mofazzal Tower, Majhira Bazar, Shahajanpur, Bogura-5801, Bangladesh</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14600.643503507843!2d90.4136593!3d23.8128777!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7007111992f%3A0x4a05864d5f212784!2sSEO%20Expate%20Bangladesh%20Ltd%20(Dhaka%20Corporate%20Branch)!5e0!3m2!1sen!2sbd!4v1714979353960!5m2!1sen!2sbd" width="600" height="450" style="border:5px solid #fff;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				</div>
				<div class="Our_Offices_map_txt newudcode">
					<h6 class="fs-3 text-start pt-3">Corporate Office (Dhaka, Bangladesh)</h6>
					<p>House – 386, Level-2, Road-6, Baridhara DOHS, Dhaka – 1212, Bangladesh</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14482.106951074984!2d89.3761003!3d24.8458533!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc55f311f064c9%3A0xcccf3b81a63cf3a2!2sSEO%20Expate%20Bangladesh%20Ltd%20(Jalesharitola%20Branch)!5e0!3m2!1sen!2sbd!4v1714979388336!5m2!1sen!2sbd" width="600" height="450" style="border:5px solid #fff;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="Our_Offices_map_txt newudcode">
					<h6 class="fs-3 text-start pt-3">Jalesharitola Branch (Bogura, Bangladesh)</h6>
					<p>Romena Afaz Complex, 2nd floor, Romena Afaz Road, Jalesharitola, Bogura -5800, Bangladesh</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14473.442307695166!2d88.7518353!3d24.9197835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fb7fdf7a7630e3%3A0x79e9258f0c2e1a5!2sSEO%20Expate%20Bangladesh%20Ltd%20(%20Naogaon%20Branch)!5e0!3m2!1sen!2sbd!4v1714979058007!5m2!1sen!2sbd" width="600" height="450" style="border:5px solid #fff;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				</div>
				<div class="Our_Offices_map_txt newudcode">
					<h6 class="fs-3 text-start pt-3">Naogaon Branch (Naogaon, Bangladesh)</h6>
					<p>Mohadevpur Upazila Gate number 04, Hannan Tower 1st floor, Mohadevpur, Naogaon – 6530, Bangladesh</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14473.442307695166!2d88.7518353!3d24.9197835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fb7fdf7a7630e3%3A0x79e9258f0c2e1a5!2sSEO%20Expate%20Bangladesh%20Ltd%20(%20Naogaon%20Branch)!5e0!3m2!1sen!2sbd!4v1714979058007!5m2!1sen!2sbd" width="600" height="450" style="border:5px solid #fff;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="Our_Offices_map_txt newudcode">
					<h6 class="fs-3 text-start pt-3">Naogaon Second Branch (Naogaon, Bangladesh)</h6>
					<p>Mohadevpur Upazila Gate number 04, Hannan Tower 3rd floor, Mohadevpur, Naogaon – 6530, Bangladesh</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14543.713951081956!2d89.5708516!3d24.3141294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fddbddce9d3cd7%3A0xd5bb934064df5339!2sSEO%20Expate%20Bangladesh%20Ltd%20(Ullapara%20Branch)!5e0!3m2!1sen!2sbd!4v1714979120073!5m2!1sen!2sbd" width="600" height="450" style="border:5px solid #fff;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				</div>
				<div class="Our_Offices_map_txt newudcode">
					<h6 class="fs-3 text-start pt-3">Ullapara Branch (Sirajganj, Bangladesh)</h6>
					<p>Science College Road, Jhikira, Ullapara, Sirajganj – 6760, Bangladesh</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="Our_Offices_map newudcode">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14503.173115076665!2d89.4193984!3d24.6652429!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fdb3e28219a68d%3A0xe3fc6aa5cca9080a!2sSEO%20Expate%20Bangladesh%20Ltd.%20(Sherpur%20Branch)!5e0!3m2!1sen!2sbd!4v1714979318319!5m2!1sen!2sbd" width="600" height="450" style="border:5px solid #fff;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="Our_Offices_map_txt newudcode">
					<h6 class="fs-3 text-start pt-3">Sherpur Branch (Bogura, Bangladesh)</h6>
					<p>Sherpur Bus Stand, Sherpur Bazar, SEO Expate Tower, Sherpur, Bogura – 5840, Bangladesh</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14428.664734005948!2d89.4150669!3d25.2986201!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd21739fac11a3%3A0x2fa35f2554560469!2sSEO%20Expate%20Bangladesh%20Ltd.%20(Palashbari%20Branch)!5e0!3m2!1sen!2sbd!4v1714979195140!5m2!1sen!2sbd" width="600" height="450" style="border:5px solid #fff;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="Our_Offices_map_txt newudcode">
					<h6 class="fs-3 text-start pt-3">Palashbari Branch (Gaibandha, Bangladesh)</h6>
					<p>Palashbari RDRS Bazar, SEO Expate Tower, Palashbari, Gaibandha – 5730, Bangladesh</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14414.504885475113!2d89.3151111!3d25.4173194!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fcdb007cf6dc07%3A0x51731e36c84f7c21!2sSEO%20Expate%20Bangladesh%20Limited%2C%20Pirganj%20Branch!5e0!3m2!1sen!2sbd!4v1714979239719!5m2!1sen!2sbd" width="600" height="450" style="border:5px solid #fff;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="Our_Offices_map_txt newudcode">
					<h6 class="fs-3 text-start pt-3">Pirganj Branch (Rangpur, Bangladesh)</h6>
					<p>East side of Islami Bank S, B Plaza, Pirganj, Rangpur</p>
				</div>
			</div>
			<div class="col-md-6">

			</div>
		</div>
	</div>
</section>
<!--================================Our_Offices section end here=======================-->

<!--================================contact_icons section start here=======================-->
<section class="contact_icons">
	<div class="container">
		<div class="row">
			<div class="contact_icon_text newudcode">
				<h5 class="text-center pb-5">Drop us a line to Start a Project with us</h5>
			</div>
			<div class="col-md-6 borderr">
				<div class="contact_icons_txt d-flex">
					<div class="icon_key">
						<i class="fa-solid fa-pencil" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="icon_key_text">
						<p>Ready to share a project?</p>
						<h5>Submit a Form</h5>
					</div>
				</div>
			</div>
			<div class="col-md-6 borderb">
				<div class="contact_icons_txt d-flex">
					<div class="icon_key">
						<i class="fa-regular fa-envelope" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="icon_key_text">
						<p>Share a detailed specification</p>
						<h5>info@seoexpate.com</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 borderl">
				<div class="contact_icons_txt d-flex">
					<div class="icon_key">
						<i class="fa-brands fa-whatsapp" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="icon_key_text">
						<p>Connect on WhatsApp</p>
						<h5>+8801409957451</h5>
					</div>
				</div>
			</div>
			<div class="col-md-6 ">
				<div class="contact_icons_txt d-flex">
					<div class="icon_key">
						<i class="fa-brands fa-skype" alt=" seo expate" description=" seo expate"></i>
					</div>
					<div class="icon_key_text">
						<p>Connect on Skype</p>
						<h5>seoexpate</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================contact_icons section end here=======================-->

<!--================================contact_form section start here=======================-->
<section class="contact_form">
	<div class="container">
		<div class="row">
			<div class="contact_form_txt">
				<h3>Ready to Start the Journey with SEO Expate Bangladesh Ltd? How can we help you?</h3>
			</div>
			<div class="col-md-6 pb-5">
				<div class="contact_form_icons">
					<h5>Trusted by</h5>
					<div class="row">
						<div class="col-md-4">
							<img src="frontend/images/unicef-client-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/usaid-org-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/undp-org-logo.png" alt=" seo expate" description=" seo expate">
						</div>
					</div>
					<div class="row margintop">
						<div class="col-md-4">
							<img src="frontend/images/unwomen-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/who-org-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/fao-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
					</div>
					<div class="row margintop">
						<div class="col-md-4">
							<img src="frontend/images/sands-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/murka-games-limited-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/safe-guard-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
					</div>
					<div class="row margintop">
						<div class="col-md-4">
							<img src="frontend/images/atec-global-client-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/bbc-action-media-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/sesame-workshop-bangladesh-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
					</div>
					<div class="row margintop">
						<div class="col-md-4">
							<img src="frontend/images/ifrc-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/crazylabs-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/voodoo-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
					</div>
					<div class="row margintop">
						<div class="col-md-4">
							<img src="frontend/images/swiss-marketing-systems-gmbh-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/princetech-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/fhi360-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
					</div>
					<div class="row margintop">
						<div class="col-md-4">
							<img src="frontend/images/financial-fondue-gmbh-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/playmania-israeli-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/pinklime-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
					</div>
					<div class="row margintop">
						<div class="col-md-4">
							<img src="frontend/images/mcafee-enterprises-inc-entertainment-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/kuato-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/plan-international-bangladesh-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
					</div>
					<div class="row margintop">
						<div class="col-md-4">
							<img src="frontend/images/cog-media-agency-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/frobolous-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/capital-numbers-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
					</div>
					<div class="row margintop">
						<div class="col-md-4">
							<img src="frontend/images/a2i-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/ict-division-govt-logo.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/robi-axiata-company-logo.png" alt=" seo expate" description=" seo expate">
						</div>
					</div>
					<div class="row margintop pt-4">
						<div class="col-md-4">
							<img src="frontend/images/SAU-Logo-150x150.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
							<img src="frontend/images/resize_prev_ui.png" alt=" seo expate" description=" seo expate">
						</div>
						<div class="col-md-4">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 pb-5">
				<div class="multi_contact_forms">
					<div class="explore_tabs">
						<div class="container">
							<div class="row ">
								<h6>I'm Looking For</h6>
								<p>[ Please select your area of interest below ]</p>
								<div class="">
									<!-- Rounded tabs -->
									<ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center border-0 ">
										<li class="nav-item flex-sm-fill" role="presentation">
											<a id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" href="#home" role="tab" aria-controls="personal" aria-selected="true" class="nav-link border-0  font-weight-bold active">Career & Jobs </a>
										</li>
										<li class="nav-item flex-sm-fill" role="presentation">
											<a id="employment-tab" data-bs-toggle="tab" data-bs-target="#employment" href="#employment" role="tab" aria-controls="employment" aria-selected="false" class="nav-link border-0  font-weight-bold"> Press Enquiry</a>
										</li>
										<li class="nav-item flex-sm-fill" role="presentation">
											<a id="Hire-tab" data-bs-toggle="tab" data-bs-target="#Hire" href="#Hire" role="tab" aria-controls="Hire" aria-selected="false" class="nav-link border-0  font-weight-bold">Hire IT Experts</a>
										</li>
										<li class="nav-item flex-sm-fill" role="presentation">
											<a id="Project-tab" data-bs-toggle="tab" data-bs-target="#Project" href="#Project" role="tab" aria-controls="Project" aria-selected="false" class="nav-link border-0  font-weight-bold">Project Outsource</a>
										</li>
										<li class="nav-item flex-sm-fill" role="presentation">
											<a id="Partnership-tab" data-bs-toggle="tab" data-bs-target="#Partnership" href="#" role="tab" aria-controls="Partnership" aria-selected="false" class="nav-link border-0  font-weight-bold">Partnership</a>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
										<div id="Hire" role="tabpanel" aria-labelledby="Hire-tab" class="tab-pane fade px-4 py-5 show active">
											<form class="row g-3">
												<div class="col-12">
													<label for="fullname" class="form-label">Your Name <span>*</span></label>
													<input type="text" class="form-control" id="fullname" placeholder="Your Full Name" required>
												</div>
												<div class="col-md-6">
													<label for="inputEmail4" class="form-label">Email <span>*</span></label>
													<input type="email" class="form-control" id="inputEmail4" placeholder="info@seoexpate.com" required>
												</div>
												<div class="col-md-6">
													<label for="inputPassword4" class="form-label">Phone Number <span>*</span></label>
													<input type="text" class="form-control" id="inputPassword4" placeholder="+8801409957451" required>
												</div>
												<div class="col-md-6">
													<label for="CompanyName" class="form-label">Company Name</label>
													<input type="text" class="form-control" id="CompanyName" placeholder="Company Name" required>
												</div>
												<div class="col-md-6">
													<label for="CompanyWebsite" class="form-label">Company Website</label>
													<input type="text" class="form-control" id="CompanyWebsite" placeholder="Company Website" required>
												</div>
												<div class="col-12">
													<label for="stuf" class="form-label">Number of Staff Required <span>*</span></label>
													<input type="text" class="form-control" id="stuf" placeholder="Number of Staff Required" required>
												</div>
												<div class="col-12">
													<label for="type" class="form-label">Briefly Describe Your Requirements <span>*</span></label>
													<textarea type="text" class="form-control" id="type" placeholder="Start Typing Here..."></textarea>
												</div>
												<div class="col-12 text-center">
													<button type="submit" class="btn">Submit & Schedule a Meeting</button>
												</div>
											</form>
										</div>
										<div id="Project" role="tabpanel" aria-labelledby="Project-tab" class="tab-pane fade px-4 py-5">
											<form class="row g-3">
												<div class="col-12">
													<label for="fullname" class="form-label">Your Name <span>*</span></label>
													<input type="text" class="form-control" id="fullname" placeholder="Your Full Name" required>
												</div>
												<div class="col-md-6">
													<label for="inputEmail4" class="form-label">Email <span>*</span></label>
													<input type="email" class="form-control" id="inputEmail4" placeholder="info@seoexpate.com" required>
												</div>
												<div class="col-md-6">
													<label for="inputPassword4" class="form-label">Phone Number <span>*</span></label>
													<input type="text" class="form-control" id="inputPassword4" placeholder="+8801409957451" required>
												</div>
												<div class="col-md-6">
													<label for="CompanyName" class="form-label">Company Name</label>
													<input type="text" class="form-control" id="CompanyName" placeholder="Company Name" required>
												</div>
												<div class="col-md-6">
													<label for="CompanyWebsite" class="form-label">Company Website</label>
													<input type="text" class="form-control" id="CompanyWebsite" placeholder="Company Website" required>
												</div>
												<div class="col-12">
													<label for="type" class="form-label">Briefly Describe Your Requirements <span>*</span></label>
													<textarea type="text" class="form-control" id="type" placeholder="Start Typing Here..."></textarea>
												</div>
												<div class="col-12 text-center">
													<button type="submit" class="btn">Submit & Schedule a Meeting</button>
												</div>
											</form>
										</div>
										<div id="Partnership" role="tabpanel" aria-labelledby="Partnership-tab" class="tab-pane fade px-4 py-5">
											<form class="row g-3">
												<div class="col-12">
													<label for="fullname" class="form-label">Your Name <span>*</span></label>
													<input type="text" class="form-control" id="fullname" placeholder="Your Full Name" required>
												</div>
												<div class="col-md-6">
													<label for="inputEmail4" class="form-label">Email <span>*</span></label>
													<input type="email" class="form-control" id="inputEmail4" placeholder="info@seoexpate.com" required>
												</div>
												<div class="col-md-6">
													<label for="inputPassword4" class="form-label">Phone Number <span>*</span></label>
													<input type="text" class="form-control" id="inputPassword4" placeholder="+8801409957451" required>
												</div>
												<div class="col-md-6">
													<label for="CompanyName" class="form-label">Company Name</label>
													<input type="text" class="form-control" id="CompanyName" placeholder="Company Name" required>
												</div>
												<div class="col-md-6">
													<label for="CompanyWebsite" class="form-label">Company Website</label>
													<input type="text" class="form-control" id="CompanyWebsite" placeholder="Company Website" required>
												</div>
												<div class="col-12">
													<label for="type" class="form-label">Briefly Describe Your Requirements <span>*</span></label>
													<textarea type="text" class="form-control" id="type" placeholder="Start Typing Here..."></textarea>
												</div>
												<div class="col-12 text-center">
													<button type="submit" class="btn">Submit & Schedule a Meeting</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 pt-5">
					<p>All projects secured by NDA & IP is your's</p>
				</div>
				<div class="col-md-6 pt-5">
					<p>100% Secure. Zero Spam.</p>
				</div>
				<hr>
				<p>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
			</div>
		</div>
	</div>
</section>
<!--================================contact_form section end here=======================-->

<!--================================analog_clock section start here=======================-->
<section class="analog_clock">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<canvas id="canvas" width="150" height="150"></canvas>
				<h5 class="pt-5">Bangladesh</h5>
				<p>Floor-14, Tropical Alauddin Tower, Plot No-32/C, <br> Road-2, Sector-3, Uttara, Dhaka-1230</p>
			</div>
			<div class="col-md-6">
				<div class="container">
					<div class="clock">
						<label style="--i: 1"><span>1</span></label>
						<label style="--i: 2"><span>2</span></label>
						<label style="--i: 3"><span>3</span></label>
						<label style="--i: 4"><span>4</span></label>
						<label style="--i: 5"><span>5</span></label>
						<label style="--i: 6"><span>6</span></label>
						<label style="--i: 7"><span>7</span></label>
						<label style="--i: 8"><span>8</span></label>
						<label style="--i: 9"><span>9</span></label>
						<label style="--i: 10"><span>10</span></label>
						<label style="--i: 11"><span>11</span></label>
						<label style="--i: 12"><span>12</span></label>
						<div class="indicator">
							<span class="hand hour"></span>
							<span class="hand minute"></span>
							<span class="hand second"></span>
						</div>
					</div>
					<div class="mode-switch"></div>
				</div>
				<h5>Bangladesh</h5>
				<p>Floor-14, Tropical Alauddin Tower, Plot No-32/C, <br> Road-2, Sector-3, Uttara, Dhaka-1230</p>
			</div>
		</div>
	</div>
</section>
<!--================================analog_clock section end here=======================-->

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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$(".submitBtn").click(function() {
			var name = $("#fullname").val();
			var email = $("#inputEmail4").val();
			var phone = $("#inputPassword4").val();
			var company_name = $("#CompanyName").val();
			var company_website = $("#CompanyWebsite").val();
			var stuf = $("#stuf").val();
			var description = $("#summernote").val();

			// Validation for name
			if (name === "") {
				$(".nameErr").php("Please enter your name");
				return;
			} else {
				$(".nameErr").php("");
			}

			// Validation for email
			if (email === "") {
				$(".emailErr").php("Please enter your email");
				return;
			} else {
				$(".emailErr").php("");
			}

			// Validation for phone
			if (phone === "") {
				$(".phoneErr").php("Please enter your phone number");
				return;
			} else {
				$(".phoneErr").php("");
			}

			// Validation for Company name
			if (company_name === "") {
				$(".company_nameErr").php("Please enter your company name");
				return;
			} else {
				$(".company_nameErr").php("");
			}

			// Validation for Company Website
			if (company_website === "") {
				$(".company_websiteErr").php("Please enter your company name");
				return;
			} else {
				$(".company_websiteErr").php("");
			}


			// Validation for stuf
			if (stuf === "") {
				$(".stufErr").php("Please enter number of staff required");
				return;
			} else {
				$(".stufErr").php("");
			}

			// Validation for description
			if (description === "") {
				$(".descriptionErr").php("Please describe your requirements");
				return;
			} else {
				$(".descriptionErr").php("");
			}

			// If all validations pass, submit the form
			$("#hireForm").submit();
		});
	});
</script>
<?php
$main_content = ob_get_clean();
include './layouts/app.php';
?>