<?php
$title = "Home";
ob_start();
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

?>

<!--================================top-body section start here=======================-->
<section class="top-body top_about_us" style="background-image: url(frontend/images/awards-and-recognitions-background-bannerr.png); background-repeat: no-repeat;  background-position:center center; background-size: cover; padding-top: 180px !important; padding-bottom: 300px;">
	<div class="container ">
		<div class="row">
			<div class="top_about_us_txt pb-5" style="z-index:500;">
			</div>
			<div class="col-12" style="z-index:500;">
				<div class="top_body_txt_part">
					<h2>We gained </h2>
					<h1>Certificates</h1>
				</div>
				<div class="top-body-button pt-3">
					<a type="button" href="contact.php">Let's Talk 😄</a>
				</div>
			</div>
		</div>
	</div>
</section>


<!--================================top-body section end here=======================-->

<!--================================Core_Values section start here=======================-->
<section class="Core_Values technology_company">
	<div class="container">
		<?php

		$qry = "SELECT * FROM certificates order by id desc";
		if ($result = $conn->query($qry)) {
			$number = 1;
			while ($row = $result->fetch_assoc()) {
				$imagePath = $row['image'];
				$imageName = basename($imagePath);
				$newImagePath = 'uploads/' . $imageName;
		?>

				<div class="row pb-2">
					<?php if ($number++ % 2 == 0) { ?>
						<div class="col-md-6">
							<div class="Core_Values_txt">
								<h4>Lorem ipsum dolor sit amet.</h4>
								<p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Aliquam quo, unde inventore magnam ab delectus tempora quibusdam a deserunt officiis veniam doloribus nulla sit perferendis, quam, asperiores iste. Quam illum reprehenderit, iure fuga commodi cumque illo dolorum ipsa, voluptate doloribus, atque corporis ex ipsum corrupti facere enim quaerat nam fugiat vel odit delectus quidem dicta quo explicabo? </p>
								<p>Animi tempore nobis quas corrupti ab ipsum, molestiae corporis, doloribus, nemo modi minima facilis ipsam iusto veniam cum. Quo, labore at doloremque vel beatae. At, perferendis porro soluta qui voluptates tempore, cumque. Quis provident assumenda, error delectus a quas repellat earum, alias omnis animi beatae adipisci, corporis! Placeat, itaque similique.</p>
							</div>
							<!-- <div class="top-body-button pt-4">
						<a type="button" href="contact.html">Read More Details</a>
					</div> -->
						</div>
						<div class="col-md-6">
							<div class="Core_Values_img pb-5 pt-3 text-center">
							<img src="<?php echo $newImagePath ?>" alt="image">
							</div>
						</div>
					<?php } else { ?>
						<div class="col-md-6">
							<div class="Core_Values_img pb-5 pt-3 text-center">
								<img src="<?php echo $newImagePath ?>" alt="image">
							</div>
						</div>
						<div class="col-md-6">
							<div class="Core_Values_txt">
								<h4><?php echo $row['title']?></h4>
								<p><?php echo $row['description']?></p>
							</div>
						</div>
						
					<?php } ?>
				</div>
				<hr>
		<?php }
		} ?>
	</div>
</section>
<!--================================Core_Values section end here=======================-->

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

<!--================================Thrive_Globally section start here=======================-->
<section class="PAY_MENT" style="padding: 20px 0;">
	<div class="container">
		<div class="row">
			<div class="PAY_IMG">
				<img src="images/Payment-method-banner-image-1024x73.webp" alt="payment" width="100%">
			</div>
		</div>
	</div>
</section>
<!--================================Thrive_Globally section end here=======================-->


<?php
$main_content = ob_get_clean();
include './layouts/app.php';
?>