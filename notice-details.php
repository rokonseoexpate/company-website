<?php
ob_start();
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Fetch the branch details from the database based on the ID
$id = $_GET['id']; // Assuming the ID is passed via URL parameter
$sql = "SELECT * FROM notices WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$title = $row['title'];
?>
	
	<!--================================cliping_service section start here=======================-->
	<section class="cliping_service eCommerceSEO" style="background: var(--global-bg-color); padding: 15px 0; margin-top: 60px;">
		<div class="container">
			<div class="row">
				<div class="col-12" style="z-index:500;">
					<div class="top_about_us_txt" style="z-index:500;">
						<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcumb_gph">
							<li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
							<li class="breadcrumb-item "><a href="notice.php" class="text-light">Notice</a></li>
							<li class="breadcrumb-item active text-light" aria-current="page">Notice Details</li>
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
            	<div class="col-md-8">
            		<div class="recentno0tice">
	            		<div class="title pt-3">
	            			<h5>Eid Ul Fitr 2024</h5>
	            		</div>
	            		<div class="text-center mt-3 mb-5"></div>
	                    <div class="row ">
	                        <div class="col-sm-12 box mar-bottom10 pb-3">
	                            <div class="text-start px-5"><strong>Title :</strong> Eid Ul Fitr 2024</div>
	                            <div class=" text-start px-5"><strong>Notice Date :</strong> 06 April 2024</div>
	                        </div>
	                        <div class="col-sm-12 mar-bottom10 box"></div>
	                        <div class="col-sm-12 box" align="center">
	                            <iframe src="frontend/images/434851978_403671812407986_8393123070098562643_n.pdf" width="100%" height="800"></iframe>   
	                        </div>
	                    </div>
                    </div>
            	</div>
            	<div class="col-md-4 text-center recentnotice">
            		<div class="recent_notice pt-3 pb-5">
                        <h5 class="">Recent Notice</h5>
                        <div class="row notice-row notice-border">
                            <div class="col-sm-2 col-xs-2 font-bold">
                            	<span class="day" style="color:var(--secondary-text-color); font-weight: 700;"> 11 </span><br> <span class="month"> April</span> 
                            </div>
                            <div class="col-sm-2 col-xs-2 year">2024</div>
                            <div class="col-sm-8 col-xs-8">
                            	<a href="notice_details.php"  class="margin-left-15">Eid Ul Fitr 2024</a>
                            </div>
                        </div>
                        <div class="row notice-row notice-border">
                            <div class="col-sm-2 col-xs-2 font-bold">
                            	<span class="day" style="color:var(--secondary-text-color); font-weight: 700;"> 11 </span><br> <span class="month">April</span> 
                            </div>
                            <div class="col-sm-2 col-xs-2 year">2024</div>
                             <div class="col-sm-8 col-xs-8">
                             	<a href="notice_details.php"  class="margin-left-15">Eid Ul Fitr 2024</a>
                             </div>
                        </div>
                        <div class="row notice-row notice-border">
                            <div class="col-sm-2 col-xs-2 font-bold">
                            	<span class="day" style="color:var(--secondary-text-color); font-weight: 700;"> 11 </span><br> <span class="month">April</span> 
                            </div>
                            <div class="col-sm-2 col-xs-2 year">2024</div>
                            <div class="col-sm-8 col-xs-8">
                            	<a href="notice_details.php"  class="margin-left-15">Eid Ul Fitr 2024</a>
                            </div>
                        </div>
                        <div class="row notice-row notice-border">
                            <div class="col-sm-2 col-xs-2 font-bold">
                            	<span class="day" style="color:var(--secondary-text-color); font-weight: 700;"> 11 </span><br> <span class="month">April</span> 
                            </div>
                            <div class="col-sm-2 col-xs-2 year">2024</div>
                            <div class="col-sm-8 col-xs-8">
                            	<a href="notice_details.php"  class="margin-left-15">Eid Ul Fitr 2024</a>
                            </div>
                        </div>
                        <div class="row notice-row notice-border">
                            <div class="col-sm-2 col-xs-2 font-bold">
                            	<span class="day" style="color:var(--secondary-text-color); font-weight: 700;"> 11 </span><br> <span class="month">April</span> 
                            </div>
                            <div class="col-sm-2 col-xs-2 year">2024</div>
                            <div class="col-sm-8 col-xs-8">
                            	<a href="notice_details.php"  class="margin-left-15">Eid Ul Fitr 2024</a>
                            </div>
                        </div>
                        <div class="row notice-row notice-border">
                            <div class="col-sm-2 col-xs-2 font-bold">
                            	<span class="day" style="color:var(--secondary-text-color); font-weight: 700;"> 11 </span><br> <span class="month">April</span> 
                            </div>
                            <div class="col-sm-2 col-xs-2 year">2024</div>
                            <div class="col-sm-8 col-xs-8">
                            	<a href="notice_details.php"  class="margin-left-15">Eid Ul Fitr 2024</a>
                            </div>
                        </div>
                        <div class="row notice-row notice-border">
                            <div class="col-sm-2 col-xs-2 font-bold">
                            	<span class="day" style="color:var(--secondary-text-color); font-weight: 700;"> 11 </span><br> <span class="month">April</span> 
                            </div>
                            <div class="col-sm-2 col-xs-2 year">2024</div>
                            <div class="col-sm-8 col-xs-8">
                            	<a href="notice_details.php"  class="margin-left-15">Eid Ul Fitr 2024</a>
                            </div>
                        </div>
                        <div class="row notice-row notice-border">
                            <div class="col-sm-2 col-xs-2 font-bold">
                            	<span class="day" style="color:var(--secondary-text-color); font-weight: 700;"> 11 </span><br> <span class="month">April</span> 
                            </div>
                            <div class="col-sm-2 col-xs-2 year">2024</div>
                            <div class="col-sm-8 col-xs-8">
                            	<a href="notice_details.php"  class="margin-left-15">Eid Ul Fitr 2024</a>
                            </div>
                        </div>
                        <div class="row notice-row notice-border">
                            <div class="col-sm-2 col-xs-2 font-bold">
                            	<span class="day" style="color:var(--secondary-text-color); font-weight: 700;"> 11 </span><br> <span class="month">April</span> 
                            </div>
                            <div class="col-sm-2 col-xs-2 year">2024</div>
                            <div class="col-sm-8 col-xs-8">
                            	<a href="notice_details.php"  class="margin-left-15">Eid Ul Fitr 2024</a>
                            </div>
                        </div>
                        <div class="row notice-row notice-border">
                            <div class="col-sm-2 col-xs-2 font-bold">
                            	<span class="day" style="color:var(--secondary-text-color); font-weight: 700;"> 11 </span><br> <span class="month">April</span> 
                            </div>
                            <div class="col-sm-2 col-xs-2 year">2024</div>
                            <div class="col-sm-8 col-xs-8">
                            	<a href="notice_details.php"  class="margin-left-15">Eid Ul Fitr 2024</a>
                            </div>
                        </div>
                        <div class="row notice-row notice-border">
                            <div class="col-sm-2 col-xs-2 font-bold">
                            	<span class="day" style="color:var(--secondary-text-color); font-weight: 700;"> 11 </span><br> <span class="month">April</span> 
                            </div>
                            <div class="col-sm-2 col-xs-2 year">2024</div>
                            <div class="col-sm-8 col-xs-8">
                            	<a href="notice_details.php"  class="margin-left-15">Eid Ul Fitr 2024</a>
                            </div>
                        </div>
                        <div class="row notice-row notice-border">
                            <div class="col-sm-2 col-xs-2 font-bold">
                            	<span class="day" style="color:var(--secondary-text-color); font-weight: 700;"> 11 </span><br> <span class="month">April</span> 
                            </div>
                            <div class="col-sm-2 col-xs-2 year">2024</div>
                            <div class="col-sm-8 col-xs-8">
                            	<a href="notice_details.php"  class="margin-left-15">Eid Ul Fitr 2024</a>
                            </div>
                        </div>            
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