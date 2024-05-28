<?php

ob_start();
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
// // Fetch the branch details from the database based on the ID
// $id = $_GET['id']; // Assuming the ID is passed via URL parameter
// $sql = "SELECT * FROM branches WHERE id = $id";
// $result = mysqli_query($conn, $sql);
// $branch = mysqli_fetch_assoc($result);

$title = "All Branches";

?>

<!--================================top-body section start here=======================-->
<section class="top-body app_development phpdevelopment" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 60px; padding-top: 120px;">
	<div class="container ">
		<div class="row">
			<div class="col-12" style="z-index:500; ">
				<div class="top_body_txt_part">
					<h1 class="" style="font-size: 45px; line-height: 55px;">All Branches</h1>
					<p style="margin-top: -35px; text-align: justify;">Stay connected with <a href="/" class="text-success">SEO Expate</a> Bangladesh Ltd. </p>
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
							<li class="breadcrumb-item active text-light" aria-current="page">All Branch</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================================cliping_service section end here=======================-->

<!--================================all_branches_list section start here=======================-->
<section class="all_branches_list">
	<div class="container">
	<div class="row">
			<div class="Our_Branches_txt pb-5">
				<h3>Our Branches</h3>
			</div>
			<?php
			$i = 1;
			$qry = "SELECT * FROM branches ORDER BY id DESC";
			$result = mysqli_query($conn, $qry); // Utilizing mysqli_query() to execute the query

			if ($result) {
				while ($row = mysqli_fetch_assoc($result)) {
			?>
					<div class="col-md-4 pt-3">
						<div class="card" >
							<img src="<?php
										$imagePath = $row['image'];
										$imageName = basename($imagePath);
										$newImagePath = 'pages/' . $imageName;
										echo $newImagePath; ?>" class="card-img-top" alt="<?php echo $row['name'] ?>">
							<div class="card-body">
								<h5 class="card-title"><?php echo $row['name'] ?></h5>
								<p class="card-text"><?php echo $row['address'] ?></p>
								<div><a href="branch.php?id=<?php echo $row['id'] ?>" class="text-success">View Location Map →</a></div>
								<div class="pt-2"><a href="branch.php?id=<?php echo $row['id'] ?>" class="text-success">See More →</a></div>
							</div>
						</div>
					</div>
			<?php
				}
			} else {
				echo "Error: " . mysqli_error($conn);
			}
			?>

		</div>
	</div>
</section>



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
					<img src="frontend/images/95991_prev_ui.png" alt=" We can build your story" description=" We can build your story">
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
				<img src="frontend/images/Payment-method-banner-image-1024x73.webp" alt=" seo expate" description=" seo expate" width="100%">
			</div>
		</div>
	</div>
</section>
<!--================================Thrive_Globally section end here=======================-->


<?php

$main_content = ob_get_clean();
include './layouts/app.php';
?>