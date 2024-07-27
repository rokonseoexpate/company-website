<div class="container">
	<div class="row">
		<div class="contact_form_txt">
			<h3>Ready to Start the Journey with SEO Expate Bangladesh Ltd? How can we help you?</h3>
		</div>
		<div class="col-md-6 pb-5 Res_coll">
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
								<img src="<?php echo $newImagePath ?>" alt="<?php echo $row['alt_tag'] ?>" description="<?php echo strip_tags($row['alt_description']) ?>">
							</div>
					<?php }
					} ?>
				</div>

			</div>
		</div>
		<div class="col-md-6 pb-5 Res_coll">
			<div class="multi_contact_forms">
				<div class="explore_tabs">
					<div class="container">
						<div class="row ">
							<h6>I'm Looking For</h6>
							<p>[ Please select your area of interest below ]</p>
							<div class="">
								<!-- Rounded tabs -->
								<ul id="myTab" role="tablist" class="nav nav-tabs nav-pills fle x-column flex-sm-row text-center border-0 ">
									<li class="nav-item flex-sm-fill Res_flex" role="presentation">
										<a id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" href="#home" role="tab" aria-controls="personal" aria-selected="false" class="nav-link border-0  font-weight-bold">Career & Jobs </a>
									</li>
									<li class="nav-item flex-sm-fill Res_flex" role="presentation">
										<a id="Hire-tab" data-bs-toggle="tab" data-bs-target="#Hire" href="#Hire" role="tab" aria-controls="Hire" aria-selected="true" class="nav-link border-0  font-weight-bold active">Hire IT Experts</a>
									</li>
									<li class="nav-item flex-sm-fill Res_flex" role="presentation">
										<a id="Project-tab" data-bs-toggle="tab" data-bs-target="#Project" href="#Project" role="tab" aria-controls="Project" aria-selected="false" class="nav-link border-0  font-weight-bold">Project Outsource</a>
									</li>
									<li class="nav-item flex-sm-fill Res_flex" role="presentation">
										<a id="Partnership-tab" data-bs-toggle="tab" data-bs-target="#Partnership" href="#" role="tab" aria-controls="Partnership" aria-selected="false" class="nav-link border-0  font-weight-bold">Partnership</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent">
									<div id="personal" role="tabpanel" aria-labelledby="Project-tab" class="tab-pane fade px-4 py-5">
										<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="row g-3" enctype="multipart/form-data">

											<div class="col-12">
												<input type="hidden" name="type" value="Career" id="">
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
												<label for="CompanyName"  class="form-label">Company Name</label>
												<input type="text" class="form-control" name="company_name" id="CompanyName" placeholder="Company Name" required>
											</div>

											<div class="col-md-6">
												<label for="CompanyWebsite" class="form-label">Company Website</label>
												<input type="text" name="company_website" class="form-control" id="CompanyWebsite" placeholder="Company Website" required>
											</div>

											<div class="col-12">
												<label for="type" class="form-label">Briefly Describe Your Requirements <span>*</span></label>
												<textarea type="text" name="description" class="form-control" id="type" placeholder="Start Typing Here..."></textarea>
											</div>

											<div class="col-12">
												<label for="type" class="form-label">Attachment(Optional)</label>
												<input type="file" name="attachments[]" class="form-control" id="type" accept="image/*, application/pdf, .doc, .docx" multiple />
											</div>


											<div class="col-12 text-center">
												<button type="submit" class="btn">Submit & Schedule a Meeting</button>
											</div>
										</form>
									</div>

									<div id="Hire" role="tabpanel" aria-labelledby="Hire-tab" class="tab-pane fade px-4 py-5 show active">
										<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="row g-3" id="hireForm" enctype="multipart/form-data">
											<div class="col-12">
												<input type="hidden" name="type" value="hire" id="">
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
												<label for="CompanyName"  class="form-label">Company Name</label>
												<input type="text" class="form-control" name="company_name" id="CompanyName" placeholder="Company Name" required>
											</div>
											<div class="col-md-6">
												<label for="CompanyWebsite" class="form-label">Company Website</label>
												<input type="text" name="company_website" class="form-control" id="CompanyWebsite" placeholder="Company Website" required>
											</div>
											<div class="col-12">
												<label for="stuf" class="form-label">Number of Staff Required <span>*</span></label>
												<input type="text" name="stuf" class="form-control" id="stuf" placeholder="Number of Staff Required" required>
											</div>
											<div class="col-12">
												<label for="type" class="form-label">Briefly Describe Your Requirements <span>*</span></label>
												<textarea type="text" name="description" class="form-control" id="type" placeholder="Start Typing Here..."></textarea>
											</div>
											
											<div class="col-12">
												<label for="type" class="form-label">Attachment(Optional)</label>
												<input type="file" name="attachments[]" class="form-control" id="type" accept="image/*, application/pdf, .doc, .docx" multiple />
											</div>

											
											<div class="col-12 text-center">
												<button type="submit" class="btn submitBtn">Submit & Schedule a Meeting</button>
											</div>
										</form>
									</div>

									<div id="Project" role="tabpanel" aria-labelledby="Project-tab" class="tab-pane fade px-4 py-5">
										<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="row g-3" enctype="multipart/form-data">
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
												<label for="CompanyName"class="form-label">Company Name</label>
												<input type="text" class="form-control"  name="company_name" id="CompanyName" placeholder="Company Name" required>
											</div>
											<div class="col-md-6">
												<label for="CompanyWebsite" class="form-label">Company Website</label>
												<input type="text" name="company_website" class="form-control" id="CompanyWebsite" placeholder="Company Website" required>
											</div>
											<div class="col-12">
												<label for="type" class="form-label">Briefly Describe Your Requirements <span>*</span></label>
												<textarea type="text" name="description" class="form-control" id="type" placeholder="Start Typing Here..."></textarea>
											</div>

											
											<div class="col-12">
												<label for="type" class="form-label">Attachment(Optional)</label>
												<input type="file" name="attachments[]" class="form-control" id="type" accept="image/*, application/pdf, .doc, .docx" multiple />
											</div>


											<div class="col-12 text-center">
												<button type="submit" class="btn">Submit & Schedule a Meeting</button>
											</div>
										</form>
									</div>
									<div id="Partnership" role="tabpanel" aria-labelledby="Partnership-tab" class="tab-pane fade px-4 py-5">
										<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="row g-3" enctype="multipart/form-data">
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
												<textarea type="text" name="description" class="form-control" id="type" placeholder="Start Typing Here..."></textarea>
											</div>

											
											<div class="col-12">
												<label for="type" class="form-label">Attachment(Optional)</label>
												<input type="file" name="attachments[]" class="form-control" id="type" accept="image/*, application/pdf, .doc, .docx" multiple />
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