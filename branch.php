<?php
$title = "Home";
ob_start();
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();


// Fetch the branch details from the database based on the ID
$id = $_GET['id']; // Assuming the ID is passed via URL parameter
$sql = "SELECT * FROM branches WHERE id = $id";
$result = mysqli_query($conn, $sql);
$branch = mysqli_fetch_assoc($result);

?>



<!--================================top-body section start here=======================-->
	<section class="top-body app_development phpdevelopment" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 60px; padding-top: 120px;">		
		<div class="container ">
		    <div class="row">
		    	<div class="col-12" style="z-index:500; ">
		    		<div class="top_body_txt_part">
						<h1 class="" style="font-size: 45px; line-height: 55px;">All Branches</h1>	 
						<p style="margin-top: -35px; text-align: justify;">Stay connected with SEO Expate Bangladesh Ltd. </p>											
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
					<div class="breadcumb_gph d-flex">
						<a class="text-light" href="index.php" ><p>Home</p></a>
						<p class="text-light px-3 ">»</p>
						<p class="text-light">All Branch</p>  
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
				<h2 class="fs-1 fw-bold text-center pb-5"><?php echo $branch['name']?></h2>
				<div class="col-md-4">
					<div class="branch-address">
                        <?php echo $branch['map']?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="branch-img">
						<img src="frontend/images/branch1.png" alt="" class="img-thumbnail">
					</div>
				</div>
				<div class="col-md-4">
					<div class="branch-img">
						<iframe width="100%" height="315" src=" <?php echo $branch['video_link']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" style="border:1px solid #dee2e6; border-redius:10px;" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================all_branches_list section end here=======================-->
	<!--================================Core_Team section start here=======================-->
	<section class="Core_Team allbranchlist" style="background: unset; padding-top: unset;">
		<div class="container">
			<div class="row">
				<div class="Core_Team_txt pb-2">
					<h3 class="fs-2 pb-3">Branch <span>all Employees</span></h3>
					<hr>
				</div>
				<div class="Core_Team_members">
					<div class="container mt-2">
					  	<div class="row" >				      							    	
					    	<div class="col-md-2 col-sm-6">
					      		<div class="card card-block shadow">
					    			<img src="frontend/images/Md. Nur Alam-Branch Manager-144.png" alt="Basudeb Acharjee" class="img-thumbnail">
					        		<div class="card-body">
					        			<h5 class="card-title fs-6">Md. Nur Alam</h5>
					        			<p class="card-text fs-6">Branch Manager</p>
					        		</div> 
					  			</div>
					    	</div>
					    	<div class="col-md-2 col-sm-6">
					      		<div class="card card-block shadow">
					    			<img src="frontend/images/Md. Asaduzzaman-Supervisor-174.PNG" alt="Md.Azharul Islam Khan" class="img-thumbnail">
					        		<div class="card-body">
					        			<h5 class="card-title fs-6">Md. Asaduzzaman</h5>
					        			<p class="card-text fs-6">Supervisor</p>
					        		</div> 
					  			</div>
					    	</div>
					    	<div class="col-md-2 col-sm-6">
					      		<div class="card card-block shadow">
					    			<img src="frontend/images/Md. Ahmed Ali-Supervisor-425.jpg" alt="Ragebul Ahsan Ripu" class="img-thumbnail">
					        		<div class="card-body">
					        			<h5 class="card-title fs-6">Md. Ahmed Ali</h5>
					        			<p class="card-text fs-6">Supervisor</p> 
					        		</div>
					  			</div>
					    	</div>  
					    	<div class="col-md-2 col-sm-6">
					      		<div class="card card-block shadow">
					    			<img src="frontend/images/Mst. Humaira Khatun-Team Leader-335.png" alt="Ragebul Ahsan Ripu" class="img-thumbnail">
					        		<div class="card-body">
					        			<h5 class="card-title fs-6">Mst. Humaira Khatun</h5>
					        			<p class="card-text fs-6">Team Leader</p> 
					        		</div>
					  			</div>
					    	</div>
					    	<div class="col-md-2 col-sm-6">
					      		<div class="card card-block shadow">
					    			<img src="frontend/images/Md. Shakil Hasan-Team Leader-538.png" alt="Ragebul Ahsan Ripu" class="img-thumbnail">
					        		<div class="card-body">
					        			<h5 class="card-title fs-6">Md. Shakil Hasan</h5>
					        			<p class="card-text fs-6">Team Leader</p>
					        		</div>
					  			</div>
					    	</div>
					    	<div class="col-md-2 col-sm-6">
					      		<div class="card card-block shadow">
					    			<img src="frontend/images/Md. Robiul Hasan-Team Leader-557.png" alt="Ragebul Ahsan Ripu" class="img-thumbnail">
					        		<div class="card-body">
					        			<h5 class="card-title fs-6">Md. Robiul Hasan</h5>
					        			<p class="card-text fs-6">Team Leader</p>
					        		</div>
					  			</div>
					    	</div>
					  	</div>
					  	<div class="row pt-5">
					  		<div class="col-md-2 col-sm-6">
					      		<div class="card card-block shadow">
					    			<img src="frontend/images/Mst. Istiya Khatun-Team Leader-559.png" alt="Basudeb Acharjee" class="img-thumbnail">
					        		<div class="card-body">
					        			<h5 class="card-title fs-6">Mst. Istiya Khatun</h5>
					        			<p class="card-text fs-6">Team Leader</p>
					        		</div> 
					  			</div>
					    	</div>
					    	<div class="col-md-2 col-sm-6">
					      		<div class="card card-block shadow">
					    			<img src="frontend/images/Mst. Tanjila Khatun-Team Leader-386.jpg" alt="Basudeb Acharjee" class="img-thumbnail">
					        		<div class="card-body">
					        			<h5 class="card-title fs-6">Mst. Tanjila Khatun</h5>
					        			<p class="card-text fs-6">Team Leader</p>
					        		</div> 
					  			</div>
					    	</div>
					    	<div class="col-md-2 col-sm-6">
					      		<div class="card card-block shadow">
					    			<img src="frontend/images/Md. Arafat Rahman-Team Leader-492.png" alt="Basudeb Acharjee" class="img-thumbnail">
					        		<div class="card-body">
					        			<h5 class="card-title fs-6">Md. Arafat Rahman</h5>
					        			<p class="card-text fs-6">Team Leader</p>
					        		</div> 
					  			</div>
					    	</div>
					    	<div class="col-md-2 col-sm-6">
					      		<div class="card card-block shadow">
					    			<img src="frontend/images/A.M Rakibul Islam-Team Leader-561.png" alt="Basudeb Acharjee" class="img-thumbnail">
					        		<div class="card-body">
					        			<h5 class="card-title fs-6">A.M Rakibul Islam</h5>
					        			<p class="card-text fs-6">Team Leader</p>
					        		</div> 
					  			</div>
					    	</div>
					  	</div> 
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================================Core_Team section end here=======================-->
    
	<!--================================top_ready_start section start here=======================-->
	<section class="top_ready_start" >
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_ready_start_txt">
                        <h3>We can build your story</h3>
                        <h6>We have partnered with great companies and entrepreneurs all over the world. And, provided the best service for them</h6>
                    </div>
                    <div class="top-body-button pt-5">
						<a type="button" href="contact.html">Get In Touch</a>
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
                 	<img src="frontend/images/Payment-method-banner-image-1024x73.webp" alt="payment" width="100%">
                </div>
            </div>
        </div>
    </section>
	<!--================================Thrive_Globally section end here=======================-->

<?php

$main_content = ob_get_clean();
include './layouts/app.php';
?>