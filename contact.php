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
<section class="conversation_away">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="top_ready_start_txt">
					<p><span><a href="/">Home</a></span> » Contact</p>
					<h3>We’re just a</h3>
					<h4>Conversation away!</h4>
					<p>We combine international outlook with the knowledge from across the industries and technologies, into creating a digital masterpiece that delivers result.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="top_ready_start_img">
					<img src="frontend/images/95991_prev_ui.png" alt="seo expate">
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
			<div class="Our_Offices_txt pb-5">
				<h3>Our <span>Offices</span></h3>
			</div>
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe loading="lazy" src="https://maps.google.com/maps?q=SEO%20EXPATE%20BANGLADESH%20LTD.&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="SEO EXPATE BANGLADESH LTD." aria-label="SEO EXPATE BANGLADESH LTD."></iframe>
				</div>
				<div class="Our_Offices_map_txt">
					<h4>Head Office (Bogura, Bangladesh)</h4>
					<p>Floor 1, Kagjipara, SEO Expate Tower, Majhira, Shahajanpur, Bogura-5801, Bangladesh</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe loading="lazy" src="https://maps.google.com/maps?q=SEO%20EXPATE%20BANGLADESH%20LTD.&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="SEO EXPATE BANGLADESH LTD." aria-label="SEO EXPATE BANGLADESH LTD."></iframe>

				</div>
				<div class="Our_Offices_map_txt">
					<h4>Second Branch (Bogura, Bangladesh)</h4>
					<p>Floor 2, Mofazzal Tower, Majhira Bazar, Shahajanpur, Bogura-5801, Bangladesh</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe loading="lazy" src="https://maps.google.com/maps?q=SEO%20EXPATE%20BANGLADESH%20LTD.&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="SEO EXPATE BANGLADESH LTD." aria-label="SEO EXPATE BANGLADESH LTD."></iframe>
				</div>
				<div class="Our_Offices_map_txt">
					<h4>Third Branch (Bogura, Bangladesh)</h4>
					<p>Floor 4 & 5, Mofazzal Tower, Majhira Bazar, Shahajanpur, Bogura-5801, Bangladesh</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe loading="lazy" src="https://maps.google.com/maps?q=SEO%20EXPATE%20BANGLADESH%20LTD.&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="SEO EXPATE BANGLADESH LTD." aria-label="SEO EXPATE BANGLADESH LTD."></iframe>

				</div>
				<div class="Our_Offices_map_txt">
					<h4>Corporate Office (Dhaka, Bangladesh)</h4>
					<p>House – 386, Level-2, Road-6, Baridhara DOHS, Dhaka – 1212, Bangladesh</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe loading="lazy" src="https://maps.google.com/maps?q=SEO%20EXPATE%20BANGLADESH%20LTD.&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="SEO EXPATE BANGLADESH LTD." aria-label="SEO EXPATE BANGLADESH LTD."></iframe>
				</div>
				<div class="Our_Offices_map_txt">
					<h4>Jalesharitola Branch (Bogura, Bangladesh)</h4>
					<p>Romena Afaz Complex, 2nd floor, Romena Afaz Road, Jalesharitola, Bogura -5800, Bangladesh</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe loading="lazy" src="https://maps.google.com/maps?q=SEO%20EXPATE%20BANGLADESH%20LTD.&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="SEO EXPATE BANGLADESH LTD." aria-label="SEO EXPATE BANGLADESH LTD."></iframe>

				</div>
				<div class="Our_Offices_map_txt">
					<h4>Naogaon Branch (Naogaon, Bangladesh)</h4>
					<p>Mohadevpur Upazila Gate number 04, Hannan Tower 1st floor, Mohadevpur, Naogaon – 6530, Bangladesh</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe loading="lazy" src="https://maps.google.com/maps?q=SEO%20EXPATE%20BANGLADESH%20LTD.&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="SEO EXPATE BANGLADESH LTD." aria-label="SEO EXPATE BANGLADESH LTD."></iframe>
				</div>
				<div class="Our_Offices_map_txt">
					<h4>Naogaon Second Branch (Naogaon, Bangladesh)</h4>
					<p>Mohadevpur Upazila Gate number 04, Hannan Tower 3rd floor, Mohadevpur, Naogaon – 6530, Bangladesh</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe loading="lazy" src="https://maps.google.com/maps?q=SEO%20EXPATE%20BANGLADESH%20LTD.&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="SEO EXPATE BANGLADESH LTD." aria-label="SEO EXPATE BANGLADESH LTD."></iframe>

				</div>
				<div class="Our_Offices_map_txt">
					<h4>Ullapara Branch (Sirajganj, Bangladesh)</h4>
					<p>Science College Road, Jhikira, Ullapara, Sirajganj – 6760, Bangladesh</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe loading="lazy" src="https://maps.google.com/maps?q=SEO%20EXPATE%20BANGLADESH%20LTD.&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="SEO EXPATE BANGLADESH LTD." aria-label="SEO EXPATE BANGLADESH LTD."></iframe>
				</div>
				<div class="Our_Offices_map_txt">
					<h4>Sherpur Branch (Bogura, Bangladesh)</h4>
					<p>Sherpur Bus Stand, Sherpur Bazar, SEO Expate Tower, Sherpur, Bogura – 5840, Bangladesh</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="Our_Offices_map">
					<iframe loading="lazy" src="https://maps.google.com/maps?q=SEO%20EXPATE%20BANGLADESH%20LTD.&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="SEO EXPATE BANGLADESH LTD." aria-label="SEO EXPATE BANGLADESH LTD."></iframe>

				</div>
				<div class="Our_Offices_map_txt">
					<h4>Palashbari Branch (Gaibandha, Bangladesh)</h4>
					<p>Palashbari RDRS Bazar, SEO Expate Tower, Palashbari, Gaibandha – 5730, Bangladesh</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================Our_Offices section end here=======================-->

<!--================================contact_icons section start here=======================-->
<section class="contact_icons">
	<div class="container">
		<div class="row">
			<div class="contact_icon_text">
				<h3>Drop us a line to Start a Project with us</h3>
			</div>
			<div class="col-md-6 borderr">
				<div class="contact_icons_txt d-flex">
					<div class="icon_key">
						<i class="fa-solid fa-pencil"></i>
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
						<i class="fa-regular fa-envelope"></i>
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
						<i class="fa-brands fa-whatsapp"></i>
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
						<i class="fa-brands fa-skype"></i>
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
						<?php
						$qry = "SELECT * FROM trusted_bies order by orderBy ASC";
						if ($result = $conn->query($qry)) {
							while ($row = $result->fetch_assoc()) {
								$imagePath = $row['image'];
								$imageName = basename($imagePath);
								$newImagePath = 'uploads/' . $imageName;
						?>
								<div class="col-md-4">
									<img src="<?php echo $newImagePath ?>" alt="">
								</div>
						<?php }
						} ?>
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
											<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="row g-3" id="hireForm">
												<div class="col-12">
													<input type="hidden" name="type" value="hire" id="">
													<label for="fullname" class="form-label">Your Name <span>*</span></label>
													<input type="text" class="form-control" name="name" id="fullname" placeholder="Your Full Name" required>
													<small> <span class="nameErr text-danger"></span> </small>

												</div>
												<div class="col-md-6">
													<label for="inputEmail4" class="form-label">Email <span>*</span></label>
													<input type="email" name="email" class="form-control" id="inputEmail4" placeholder="info@seoexpate.com" required>
													<small> <span class="emailErr text-danger"></span> </small>

												</div>
												<div class="col-md-6">
													<label for="inputPassword4" class="form-label">Phone Number <span>*</span></label>
													<input type="text" name="phone" class="form-control" id="inputPassword4" placeholder="+8801409957451" required>
													<small> <span class="phoneErr text-danger"></span> </small>

												</div>
												<div class="col-md-6">
													<label for="CompanyName" class="form-label">Company Name</label>
													<input type="text" name="company_name" class="form-control" id="CompanyName" placeholder="Company Name">
													<small> <span class="company_nameErr text-danger"></span> </small>

												</div>
												<div class="col-md-6">
													<label for="CompanyWebsite" class="form-label">Company Website</label>
													<input type="text" name="company_website" class="form-control" id="CompanyWebsite" placeholder="Company Website">
													<small> <span class="company_websiteErr text-danger"></span> </small>

												</div>
												<div class="col-12">
													<label for="stuf" class="form-label">Number of Staff Required <span>*</span></label>
													<input type="text" class="form-control" id="stuf" name="stuf" placeholder="Number of Staff Required" required>
													<small> <span class="stufErr text-danger"></span> </small>

												</div>
												<div class="col-12">
													<label for="type" class="form-label">Briefly Describe Your Requirements <span>*</span></label>
													<textarea type="text" name="description" class="form-control" id="summernote" placeholder="Start Typing Here..."></textarea>
													<small> <span class="descriptionErr text-danger"></span> </small>

												</div>
												<div class="col-12 text-center">
													<button type="button" class="btn submitBtn">Submit & Schedule a Meeting</button>
												</div>
											</form>
										</div>

										<div id="Project" role="tabpanel" aria-labelledby="Project-tab" class="tab-pane fade px-4 py-5">
											<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="row g-3">
												<div class="col-12">
													<input type="hidden" name="type" value="project" id="">
													<label for="fullname" class="form-label">Your Name <span>*</span></label>
													<input type="text" name="name" class="form-control" id="fullname" placeholder="Your Full Name" required>
												</div>
												<div class="col-md-6">
													<label for="inputEmail4" class="form-label">Email <span>*</span></label>
													<input type="email" name="email" class="form-control" id="inputEmail4" placeholder="info@seoexpate.com" required>
												</div>
												<div class="col-md-6">
													<label for="inputPassword4" class="form-label">Phone Number <span>*</span></label>
													<input type="text" name="phone" class="form-control" id="inputPassword4" placeholder="+8801409957451" required>
												</div>
												<div class="col-md-6">
													<label for="CompanyName" class="form-label">Company Name <span>*</span></label>
													<input type="text" name="company_name" class="form-control" id="CompanyName" placeholder="Company Name" required>
												</div>
												<div class="col-md-6">
													<label for="CompanyWebsite" class="form-label">Company Website <span>*</span></label>
													<input type="text" name="company_website" class="form-control" id="CompanyWebsite" placeholder="Company Website" required>
												</div>
												<div class="col-12">
													<label for="type" class="form-label">Briefly Describe Your Requirements <span>*</span></label>
													<textarea type="text" name="description" class="form-control" id="summernote" placeholder="Start Typing Here..."></textarea>
												</div>
												<div class="col-12 text-center">
													<button type="submit" class="btn">Submit & Schedule a Meeting</button>
												</div>
											</form>
										</div>

										<div id="Partnership" role="tabpanel" aria-labelledby="Partnership-tab" class="tab-pane fade px-4 py-5">
											<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="row g-3">
												<div class="col-12">
													<input type="hidden" name="type" value="partnership" id="">
													<label for="fullname" class="form-label">Your Name <span>*</span></label>
													<input type="text" name="name" class="form-control" id="fullname" placeholder="Your Full Name" required>
												</div>
												<div class="col-md-6">
													<label for="inputEmail4" class="form-label">Email <span>*</span></label>
													<input type="email" name="email" class="form-control" id="inputEmail4" placeholder="info@seoexpate.com" required>
												</div>
												<div class="col-md-6">
													<label for="inputPassword4" class="form-label">Phone Number <span>*</span></label>
													<input type="text" name="phone" class="form-control" id="inputPassword4" placeholder="+8801409957451" required>
												</div>
												<div class="col-md-6">
													<label for="CompanyName" class="form-label">Company Name</label>
													<input type="text" name="company_name" class="form-control" id="CompanyName" placeholder="Company Name" required>
												</div>
												<div class="col-md-6">
													<label for="CompanyWebsite" class="form-label">Company Website</label>
													<input type="text" name="company_website" class="form-control" id="CompanyWebsite" placeholder="Company Website" required>
												</div>
												<div class="col-12">
													<label for="type" class="form-label">Briefly Describe Your Requirements <span>*</span></label>
													<textarea type="text" name="description" class="form-control" id="summernote" placeholder="Start Typing Here..."></textarea>
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