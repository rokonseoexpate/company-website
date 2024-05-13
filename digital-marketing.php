<?php
    $title = "Home";
    ob_start();
?>
	<!--================================Header section end here=======================-->
	
	<!--================================web_service section start here=======================-->
	<section class="web_service text-light">		
		<div class="container ">
		    <div class="row">
		    	<div class="top_about_us_txt pt-5">
		    		<div class="d-flex">						
						<p><a href="home.php" class="text-light">Home</a></p>
						<p><i class="fa-solid fa-angle-right"></i></p>
						<p class="ml-2">Digital Marketing</p>		
					</div>	
				</div>
		    	<div class="col-md-6" style="z-index:500;">
		    		<div class="top_body_txt_part">						
						<h4>Digital Marketing Main Features</h4>
						<p>Digital marketing is incredibly beneficial for all types of business. You can quickly spread your word using this excellent assistance from our website. Moreover, it promotes commodities, expands the customer base, resolves customer problems, and increases revenue with this service. </p>	
						<p>People are becoming more and more attracted to e-commerce. This digital era controls the online-focused market, and we help you develop your strategies on this platform. Our company, SEO Expate Bangladesh Ltd, offers you the best solutions along with the entire maintenance procedure. Therefore, experience the most unexpected collaborating with us. </p>	
					</div>
					<div class="button pt-5">
						<a href="contact.php" class="text-light">Contact Us</a>
					</div>	
				</div>
				<div class="col-md-6">
					<div class="web_service_img">
						<img src="frontend/images/1679733518738.png" alt="image" class="img-thumbnail">
					</div>
				</div>			
			</div>			
		</div>				
	</section>
	<!--================================web_service section end here=======================-->

	<!--================================Our_Branches section start here=======================-->
	<section class="Our_Branches type_of">
		<div class="container">
			<div class="row">
				<div class="Our_Branches_txt pb-5">
					<h3>Services Provided by Us</h3>
					<hr>
				</div>
				<div class="col-md-3">
					<a href="#">
						<div class="card">
				      		<img src="frontend/images/6386.jpg_wh860.jpg" class="card-img-top" alt="Image">
				      		<div class="card-body">
				        		<h5 class="card-title fs-6">Digital marketing consultancy</h5>
				      		</div>
				    	</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<div class="card hover-zoom">
				      		<img src="frontend/images/market-research.jpg" class="card-img-top" alt="Image">
				      		<div class="card-body">
				        		<h5 class="card-title fs-6">Market Research</h5>
				      		</div>
				    	</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<div class="card">
				      		<img src="frontend/images/istockphoto-1425235289-612x612.jpg" class="card-img-top" alt="Image">
				      		<div class="card-body">
				        		<h5 class="card-title fs-6">Reporting & Analytics</h5>
				      		</div>
				    	</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<div class="card">
				      		<img src="frontend/images/Medienaufsichtsrecht.jpg" class="card-img-top" alt="Image">
				      		<div class="card-body">
				        		<h5 class="card-title fs-6">Social Media Supervision</h5>
				      		</div>
				    	</div>
					</a>
				</div>
			</div>
			<div class="row pt-5">
				<div class="col-md-3">
					<a href="#">
						<div class="card">
				      	<img src="frontend/images/0_I9JnMZPh53L8JOgR.jpg" class="card-img-top" alt="Image">
				      	<div class="card-body">
				        	<h5 class="card-title fs-6">Push Notification Implementation</h5>
				      	</div>
				    </div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<div class="card hover-zoom">
				      	<img src="frontend/images/istockphoto-1212446140-612x612-1.jpg" class="card-img-top" alt="Image">
				      	<div class="card-body">
				        	<h5 class="card-title fs-6">Email Marketing</h5>
				      	</div>
				    </div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<div class="card">
				      	<img src="frontend/images/Banner-Image.jpg" class="card-img-top" alt="Image">
				      	<div class="card-body">
				        	<h5 class="card-title fs-6">Search Engine Optimization (SEO)</h5>
				      	</div>
				    </div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<div class="card">
				      	<img src="frontend/images/designing-ads-for-social-media.png" class="card-img-top" alt="Image">
				      	<div class="card-body">
				        	<h5 class="card-title fs-6">Social Media Advertisements</h5>
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
			<div class="row">
			<h3 class="text-center pb-5">Benefits of Digital Marketing </h3>	
			<hr>							
				<div class="col-md-6">					
					<p> <span><i class="fa-solid fa-circle"></i></span>Digital marketing is more affordable than other marketing methods.</p>
					<p> <span><i class="fa-solid fa-circle"></i></span>Industry automation through software and apps to grow productivity.</p>
					<p> <span><i class="fa-solid fa-circle"></i></span>A powerful tool with an easy method to maximize sales and increase revenue.</p>
					<p> <span><i class="fa-solid fa-circle"></i></span>Globally sell your service by contacting customers worldwide.</p>
					<p> <span><i class="fa-solid fa-circle"></i></span>It offers you great functionality with flexibility. </p>
					<p> <span><i class="fa-solid fa-circle"></i></span>Generate a desired return on investment (ROI).</p>
				</div>
				<div class="col-md-6">
					<img src="frontend/images/top-benefits-digital-marketing-1.jpg" alt="image" class="img-thumbnail">
				</div>				
			</div>
		</div>
	</div>
	<!--================================we_following section end here=======================-->

	<!--===========================footer part start===================================-->
	<?php 
$main_content = ob_get_clean();
include './layouts/app.php';
?>