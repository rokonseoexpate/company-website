<?php
$title = "Notice";
ob_start();
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

?>
	<!--================================cliping_service section start here=======================-->
	<section class="cliping_service eCommerceSEO" style="background: var(--global-bg-color); padding: 15px 0; margin-top: 60px;">
		<div class="container">
			<div class="row">
				<div class="col-12" style="z-index:500;">	
					<div class="top_about_us_txt" style="z-index:500;">
						<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcumb_gph">
							<li class="breadcrumb-item "><a href="index.php" class="text-light ">Home</a></li>
							<li class="breadcrumb-item active text-light" aria-current="page">Notice</li>
						</ol>
						</nav>
					</div>			
				</div>
			</div>
		</div>
	</section>
	<!--================================cliping_service section end here=======================-->
	<!--================================Cnotice section start here=======================-->
	<section class=" Cnotice">
        <div class="container">
            <div class="row">
            	<div class="col-md-12  ">
            		<form action="" class="form-inline d-flex gap-3 justify-content-center">
            			<div class="form-group mb-2 mr-sm-2 mb-sm-0">
            				<input type="date"  placeholder="From Date..." class="form-control ">
            			</div>            			
            			<div class="form-group mb-2 mr-sm-2 mb-sm-0">
            				<input type="text"  placeholder="To Date..." class="form-control ">
            			</div>
            			<div class="form-group mb-2 mr-sm-2 mb-sm-0">
            				<input type="text" id="keyword" placeholder="Title..." class="form-control">
            			</div>
            			<div class="form-group mb-2 mr-sm-2 mb-sm-0">
            				<select id="type" class="form-control">
            					<option value="featured">Latest News</option> 
            					<option value="1">Old News</option>
            					<option value="2">Events</option>
            					<option value="3">Update</option> 
            					<option value="4">Notices</option>
            				</select>
            			</div>
            			<div class="form-group mb-2 mr-sm-2 mb-sm-0">
            				<input type="submit" value="Search" class="btn btn-success">
            			</div>
            		</form>
            	</div>
            </div>
            <div class="row">
            	<div class="col-md-3 pt-5">
            		<div class="item-row">
            			<a href="notice-details.php">
            				<div class="card">
            					<img src="frontend/images/Eid Ul Fitr.jpg" alt="notice" description=" notice" class="card-img-top lazy"> 
            					<div class="card-body">
            						<h6 class="card-title"> 
            							<span>Eid Ul Fitr 2024</span>
            						</h6> 
            						<p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
            					</div>
            				</div>
            			</a>
            		</div>
            	</div>
            	<div class="col-md-3 pt-5">
            		<div class="item-row">
            			<a href="notice-details.php">
            				<div class="card">
            					<img src="frontend/images/Eid Ul Fitr.jpg" alt="notice" description=" notice" class="card-img-top lazy"> 
            					<div class="card-body">
            						<h6 class="card-title"> 
            							<span>Eid Ul Fitr 2024</span>
            						</h6> 
            						<p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
            					</div>
            				</div>
            			</a>
            		</div>
            	</div>
            	<div class="col-md-3 pt-5">
            		<div class="item-row">
            			<a href="notice-details.php">
            				<div class="card">
            					<img src="frontend/images/Eid Ul Fitr.jpg" alt="notice" description=" notice" class="card-img-top lazy"> 
            					<div class="card-body">
            						<h6 class="card-title"> 
            							<span>Eid Ul Fitr 2024</span>
            						</h6> 
            						<p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
            					</div>
            				</div>
            			</a>
            		</div>
            	</div>
            	<div class="col-md-3 pt-5">
            		<div class="item-row">
            			<a href="notice-details.php">
            				<div class="card">
            					<img src="frontend/images/Eid Ul Fitr.jpg" alt="notice" description=" notice" class="card-img-top lazy"> 
            					<div class="card-body">
            						<h6 class="card-title"> 
            							<span>Eid Ul Fitr 2024</span>
            						</h6> 
            						<p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
            					</div>
            				</div>
            			</a>
            		</div>
            	</div>
            </div>
            <div class="row">
            	<div class="col-md-3 pt-5">
            		<div class="item-row">
            			<a href="notice-details.php">
            				<div class="card">
            					<img src="frontend/images/Eid Ul Fitr.jpg" alt="notice" description=" notice" class="card-img-top lazy"> 
            					<div class="card-body">
            						<h6 class="card-title"> 
            							<span>Eid Ul Fitr 2024</span>
            						</h6> 
            						<p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
            					</div>
            				</div>
            			</a>
            		</div>
            	</div>
            	<div class="col-md-3 pt-5">
            		<div class="item-row">
            			<a href="notice-details.php">
            				<div class="card">
            					<img src="frontend/images/Eid Ul Fitr.jpg" alt="notice" description=" notice" class="card-img-top lazy"> 
            					<div class="card-body">
            						<h6 class="card-title"> 
            							<span>Eid Ul Fitr 2024</span>
            						</h6> 
            						<p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
            					</div>
            				</div>
            			</a>
            		</div>
            	</div>
            	<div class="col-md-3 pt-5">
            		<div class="item-row">
            			<a href="notice-details.php">
            				<div class="card">
            					<img src="frontend/images/Eid Ul Fitr.jpg" alt="notice" description=" notice" class="card-img-top lazy"> 
            					<div class="card-body">
            						<h6 class="card-title"> 
            							<span>Eid Ul Fitr 2024</span>
            						</h6> 
            						<p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
            					</div>
            				</div>
            			</a>
            		</div>
            	</div>
            	<div class="col-md-3 pt-5">
            		<div class="item-row">
            			<a href="notice-details.php">
            				<div class="card">
            					<img src="frontend/images/Eid Ul Fitr.jpg" alt="notice" description=" notice" class="card-img-top lazy"> 
            					<div class="card-body">
            						<h6 class="card-title"> 
            							<span>Eid Ul Fitr 2024</span>
            						</h6> 
            						<p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
            					</div>
            				</div>
            			</a>
            		</div>
            	</div>
            </div>
            <div class="row">
            	<div class="col-md-3 pt-5">
            		<div class="item-row">
            			<a href="notice-details.php">
            				<div class="card">
            					<img src="frontend/images/Eid Ul Fitr.jpg" alt="notice" description=" notice" class="card-img-top lazy"> 
            					<div class="card-body">
            						<h6 class="card-title"> 
            							<span>Eid Ul Fitr 2024</span>
            						</h6> 
            						<p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
            					</div>
            				</div>
            			</a>
            		</div>
            	</div>
            	<div class="col-md-3 pt-5">
            		<div class="item-row">
            			<a href="notice-details.php">
            				<div class="card">
            					<img src="frontend/images/Eid Ul Fitr.jpg" alt="notice" description=" notice" class="card-img-top lazy"> 
            					<div class="card-body">
            						<h6 class="card-title"> 
            							<span>Eid Ul Fitr 2024</span>
            						</h6> 
            						<p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
            					</div>
            				</div>
            			</a>
            		</div>
            	</div>
            	<div class="col-md-3 pt-5">
            		<div class="item-row">
            			<a href="notice-details.php">
            				<div class="card">
            					<img src="frontend/images/Eid Ul Fitr.jpg" alt="notice" description=" notice" class="card-img-top lazy"> 
            					<div class="card-body">
            						<h6 class="card-title"> 
            							<span>Eid Ul Fitr 2024</span>
            						</h6> 
            						<p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
            					</div>
            				</div>
            			</a>
            		</div>
            	</div>
            	<div class="col-md-3 pt-5">
            		<div class="item-row">
            			<a href="notice-details.php">
            				<div class="card">
            					<img src="frontend/images/Eid Ul Fitr.jpg" alt="notice" description=" notice" class="card-img-top lazy"> 
            					<div class="card-body">
            						<h6 class="card-title"> 
            							<span>Eid Ul Fitr 2024</span>
            						</h6> 
            						<p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
            					</div>
            				</div>
            			</a>
            		</div>
            	</div>
            </div>
        </div>
    </section>

	<!--================================Cnotice section end here=======================-->

	<!--================================top_ready_start section start here=======================-->
	<section class="top_ready_start" style="padding-top: unset;">
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
                        <img src="frontend/images/95991_prev_ui.png" alt="notice" description=" notice">
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