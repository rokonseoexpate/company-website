<?php
$title = "Home";
ob_start();
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

?>
	<!--================================Header section end here=======================-->
	
	<!--================================top-body section start here=======================-->
	<section class="top-body top-history" style="background-image: url(frontend/images/1.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover;  margin-top: 60px; ">		
		<div class="container ">
		    <div class="row">
		    	<div class="col-12" style="z-index:500;">
		    		<div class="top_body_txt_part">
						<h1>History</h1>	
						<h2>of SEO Expate</h2>	
						<h6>To the Endless Possibilities</h6>	
						<p>The journey of SEO Expate started in 2013. Riseup Labs has provided technology solutions to global businesses for over 10 years. It has been established as a next-generation global IT service and technology solution provider company to help enterprises reimagine their business and navigate digital transformation. Let’s explore our long history of success!</p>
					</div>
					<div class="top-body-button pt-3">
						<div class="">
							<a type="button" href="#">About SEO Expate</a>
						</div>
					</div>	
				</div>			
			</div>
		</div>				
	</section>
	<!--================================top-body section end here=======================-->

	<!--================================accelerating_innovation section start here=======================-->
	<section class="accelerating_innovation">
		<div class="container">
			<div class="row">
				<div class="accelerating_innovation_txt pb-5">
					<h3>Accelerating Innovation</h3>
					<h4>Since 2013</h4>
				</div>
				<div class="col-md-6">
					<div class="accelerating_innovation_text">
						<p>The year 2013. A great Information Technology platform was born with a team of genius minds. From the beginning of our journey, SEO Expate has championed in every step by supporting new and better ideas to reach the next level.</p>
						<p class="pt-3">In the journey of SEO Expate, it has become a major technology solution provider for brands like UNICEF Bangladesh, Robi Axiata Limited, BBC Media Action, Ministry of Women and Children Affairs, ICT Division and many large corporations globally.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="accelerating_innovation_img">
						<img src="frontend/images/awardd.png" alt="image">
					</div>
				</div>
				<div class="top-body-button pt-5 text-center">
					<a type="button" href="#">Know More About Our Journey</a>
				</div>
			</div>
		</div>
	</section>
	<!--================================accelerating_innovation section end here=======================-->

	<!--================================top_body_explore_tab  section start here=======================-->
	<section class="top_body_explore_tab">
       <div class="container">
           <div class="row">
               	<div class="explore_txt">
                   <h3>Timeline Of Our</h3>
                   <h4 style="color:var(--secondary-text-color); font-weight: 700; font-size: 48px;">Successful Journey</h4>
                   <p>SEO Expate Bangladesh Ltd. started the journey in Game Development and after a successful journey, we have established as a next-generation globnal IT service and technology solutions provider company. Explore our journey of success since 2009.</p>                
               	</div>
               	<div class="explore_tabs">
                    <div class="container py-5">
                        <div class="row mb-5">
                            <div class="p-5 bg-white rounded shadow mb-5" style="border-left:5px solid var(--secondary-text-color); border-right:5px solid var(--secondary-text-color);">
                                <!-- Rounded tabs -->
                                <div class="row">
                                    <div class="col-md-2 border-end">
                                        <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column text-center border-0">
                                            <?php
                                            // Check database connection
                                            if (!$conn) {
                                                echo "Database connection failed: " . mysqli_connect_error();
                                            } else {
                                                $qry = "SELECT * FROM history_journeys ORDER BY id DESC";
                                                $result = mysqli_query($conn, $qry); // Use mysqli_query() to execute the query

                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    $firstTab = true;
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <li class="nav-item flex-sm-fill" role="presentation">
                                                            <a id="journey-tab-<?php echo $row['id']; ?>" data-bs-toggle="tab" data-bs-target="#journey<?php echo $row['id']; ?>" type="button" href="#journey<?php echo $row['id']; ?>" role="tab" aria-controls="journey<?php echo $row['id']; ?>" aria-selected="<?php echo $firstTab ? 'true' : 'false'; ?>" class="nav-link border-0  font-weight-bold <?php echo $firstTab ? 'active' : ''; ?>">
                                                                <?php echo htmlspecialchars($row['year']); ?>
                                                            </a>
                                                        </li>
                                                        <?php
                                                        $firstTab = false;
                                                    }
                                                } else {
                                                    echo "No journeys found.";
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="tab-content" id="myTabContent">
                                            <?php
                                            // Check database connection
                                            if (!$conn) {
                                                echo "Database connection failed: " . mysqli_connect_error();
                                            } else {
                                                $qry = "SELECT * FROM history_journeys ORDER BY id DESC";
                                                $result = mysqli_query($conn, $qry); // Use mysqli_query() to execute the query

                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    $firstPane = true;
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <div id="journey<?php echo $row['id']; ?>" role="tabpanel" aria-labelledby="journey-tab-<?php echo $row['id']; ?>" class="tab-pane fade px-4 py-5 <?php echo $firstPane ? 'show active' : ''; ?>">
                                                            <p class="text-muted mb-0"><?php echo strip_tags($row['details']); ?></p>
                                                        </div>
                                                        <?php
                                                        $firstPane = false;
                                                    }
                                                } else {
                                                    echo "No journeys found.";
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
       </div>
    </section>
	<!--================================top_body_explore_tab section end here=======================-->

	<!--================================our_mission section start here=======================-->
	<div class="our_mission">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="frontend/images/1707203640310.jpg" alt="image">
				</div>
				<div class="col-md-6">
					<h3>Our <span>One Mission</span></h3>
					<p>To help enterprises achieve their business objectives by <br>providing IT services & technology solutions.</p>
					<div class="top-body-button pt-3">
						<a type="button" href="#">See More </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================================our_mission section end here=======================-->

	<!--================================our_promise section start here=======================-->
	<div class="our_mission our_promise">
		<div class="container">
			<div class="row">				
				<div class="col-md-6">
					<h3>Our <span> Promise</span></h3>
					<p>We promise to do our very best and always strive to do <br> the right thing for your project, your users, and your team. </p>
					<p>We want you to think of us as your partners <br>in our journey together.</p>
					<div class="top-body-button pt-3">
						<a type="button" href="#">See More </a>
					</div>
				</div>
				<div class="col-md-6">
					<img src="frontend/images/Our-Promise.jpg" alt="image">
				</div>
			</div>
		</div>
	</div>
	<!--================================our_promise section end here=======================-->

	<!--================================our_global_impact section start here=======================-->
	<div class="our_global_impact">
		<div class="container">
			<div class="row">
				<div class="our_global_impact_txt">
					<h3>Our Global Impact Today</h3>
					<p>Since 2013, SEO Expate has successfully supported 50+ clients in more than 30 countries by delivering 700+ projects. We have created opportunities for 150+ IT professionals in 30+ different industries. Our global impact today achieved through our commitments to our clients, our team, and the communities where we serve are present in all we do. These ideas shape the projects we embark on, the individuals we recruit, and our overall organizational initiatives.</p>
					<div class="top-body-button pt-4">
						<a type="button" href="#">Find out more </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================================our_global_impact section end here=======================-->

	<!--================================our_global_impact section start here=======================-->
	<div class="world_impact">
		<div class="container">
			<div class="row">
				<img src="frontend/images/web-store_prev_ui.png" alt="">
			</div>
		</div>
	</div>
	<!--================================our_global_impact section end here=======================-->

	<!--================================overview_success section start here=======================-->
	<section class="overview_success">
		<div class="container">
			<div class="row">
				<div class="overview_success_txt">
					<h3>Overview of SEO Expate' Success</h3>
					<p>SEO Expate is an ISO-certified leading technology solution and next-generation global IT services provider that helps enterprises reimagine their business and navigate digital transformation. SEO Expate won the Digital Bangladesh Award 2022 from the ICT Division of Bangladesh as the best technology company in the private sector for using emerging technologies and its unique contribution to the Information Technology Sector.</p>
					<p>With over 10 years of experience managing 700+ projects and working with global enterprises, like – UNICEF, UNDP, USAID, FAO, WHO, ATEC, BBC, Fhi360, Axiata, Murka, Safe-Guard, Swiss Marketing Systems, we are expertly steering our clients through their digital journey.</p>
					<h6>Explore the best moments and achievements of SEO Expate throughout the last era.</h6>
				</div>
                <?php
                $i = 1;
                $qry = "SELECT * FROM history_galleries WHERE image_type = 1 ORDER BY id DESC";
                $result = mysqli_query($conn, $qry);

                if ($result) {
                    // Display the first image separately
                    if ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="overview_success_img pt-5">
                            <img src="<?php echo 'uploads/' . basename($row['image']); ?>" alt="image">
                        </div>
                        <?php
                    }

                    // Display the rest of the images
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="col-md-6">
                            <div class="overview_success_img pt-4">
                                <img src="<?php echo 'uploads/' . basename($row['image']); ?>" alt="image">
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
	<!--================================overview_success section end here=======================-->

	<!--================================Our_Great_Start section start here=======================-->

	<section class="Our_Great_Start">
		<div class="container">
			<div class="row">
				<div class="Our_Great_Start_txt pb-5">
					<h3>Our Great Start</h3>
					<p>Successful Solutions Developed by SEO Expate in the Last Era. We have started our journey with the game Tap Tap Ants, which has millions of downloads in the App Store and received the top-ranking position worldwide. Explore more solutions developed by SEO Expate throughout its journey.</p>
				</div>
                <?php
                $i = 1;
                $qry = "SELECT * FROM history_projects ORDER BY id DESC";
                $result = mysqli_query($conn, $qry); // Utilizing mysqli_query() to execute the query

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                        <div class="col-md-6 pt-3">
                            <div class="img">
                                <img src="<?php echo 'uploads/' . basename($row['image']); ?>" alt="image">
                            </div>
                            <div class="Our_Great_Start_img_txt pt-4">
                                <h5><?php echo $row['title']?></h5>
                                <p><?= $row['description']?></p>
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
	<!--================================Our_Great_Start section end here=======================-->
	<!--================================top_body_project_countdown section start here=======================-->
    <section class="top_body_project_countdown">
	    <div class="container">
	        <div class="row">
	            <div class="ptc_txt">
	                <h3>A Short Introduction to Our Approach</h3>
	                <h4>Delivering IT Solutions Globally</h4>
	                <p class=" pt-4">In addition to creating a stress-free and sustainable IT environment, SEO Expate Bangladesh Ltd. produces outcomes that help our clients stay ahead of the competition. By utilizing the newest and most widely used technologies, our IT specialists continuously deliver user-centric IT solutions that are customized to the needs of the business. We have been assisting clients all over the world to boost engagement, sales, and conversions for more than ten years. Take a peek at the reliable numbers!</p>
	            </div>
	            <div class="ptc_countdown_wrp pt-5">
	                <div class="ptc_countdown">
	                    <div class="count_container">
	                        <span class="num" data-val="10+">000</span>
	                        <span class="text">Years</span>
	                    </div>

	                    <div class="count_container">
	                        <span class="num" data-val="25+">000</span>
	                        <span class="text">Countries</span>
	                    </div>

	                    <div class="count_container">
	                        <span class="num" data-val="450+">000 </span>
	                        <span class="text">Projects</span>
	                    </div>

	                    <div class="count_container">
	                        <span class="num" data-val="150+">000</span>
	                        <span class="text">Clients</span>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!--================================top_body_project_countdown section end here=======================-->

	<!--================================top-slider-part section start here=======================-->
	<section class="top-slider-part">		
		<div class="container ">
		    <div class="row">
		    	<h3><span>Our </span> Reliable Customers and Associates</h3>
		    	<p>SEO Expate Bangladesh Ltd. takes great pride in collaborating with businesses, firms, service providers, corporations, government departments, and other organizations as a top information technology company.  
				Here take a look at some of the top companies and institutions that SEO Expate Bangladesh Ltd. has already worked with.</p>
                <div class="col-12 pt-5">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <?php
                            $qry = "SELECT * FROM history_galleries WHERE image_type = 2 ORDER BY id DESC";
                            if ($result = $conn->query($qry)) {
                                $active = true;
                                $index = 0;
                                while ($row = $result->fetch_assoc()) {
                                    $imagePath = $row['image'];
                                    $imageName = basename($imagePath);
                                    $newImagePath = 'uploads/' . $imageName;
                                    ?>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $index; ?>" <?php echo $active ? 'class="active"' : ''; ?> aria-label="Slide <?php echo $index; ?>"></button>
                                    <?php
                                    $active = false;
                                    $index++;
                                }
                            }
                            ?>
                        </div>

                        <div class="carousel-inner pb-5">
                            <?php
                            $result->data_seek(0);
                            $active = true;
                            while ($row = $result->fetch_assoc()) {
                                $imagePath = $row['image'];
                                $imageName = basename($imagePath);
                                $newImagePath = 'uploads/' . $imageName;
                                ?>
                                <div class="carousel-item <?php echo $active ? 'active' : ''; ?>" data-bs-interval="10000">
                                    <img src="<?php echo $newImagePath; ?>" class="d-block w-100" alt="img">
                                </div>
                                <?php
                                $active = false;
                            }
                            ?>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

			</div>
		</div>				
	</section>
	<!--================================top-slider-part section end here=======================-->
	<!--================================top_featured section start here=======================-->
	<section class="top_featured" >
		<div class="container">
			<div class="row">
				<div class="top_featured_txt">
					<h3 class="pb-3">We're Highlighted On</h3>
					<p>In this category, SEO Expate Bangladesh Ltd. stands out as the most popular in the first place. Numerous local and international (offline and online) TV networks, newspapers, journals, TV channels, and other well-known platforms have highlighted our imaginative and inventive works! Also, we are one of the most followed companies on various social media platforms. Again, we are going like a bullet train in other media as well.</p>
				</div>
				<div class="slider pt-5">
                    <div class="owl-carousel">
                        <?php
                        $i = 1;
                        $qry = "SELECT * FROM history_galleries WHERE image_type = 3 ORDER BY id DESC";
                        $result = mysqli_query($conn, $qry); // Utilizing mysqli_query() to execute the query

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="<?php
                                        $imagePath = $row['image'];
                                        $imageName = basename($imagePath);
                                        $newImagePath = 'uploads/' . $imageName;
                                        echo $newImagePath; ?>" alt="image">
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
		               <div class="bbb_main_container">
		                	<div class="bbb_viewed_slider_container">
		                    	<div class="owl-carousel owl-theme bbb_viewed_slider">
			                        <div class="owl-item">
			                            <div class=" bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
			                                <div class="bbb_viewed_image">
			                                	<img src="frontend/images/mukto-sokal.png" alt="">
			                                </div>
			                            </div>
			                        </div>
			                        <div class="owl-item">
			                            <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
			                                <div class="bbb_viewed_image">
			                                	<img src="frontend/images/6578bb0f9469d.png" alt="">
			                                </div>			                               				                                 
			                            </div>
			                        </div>
			                        <div class="owl-item">
			                            <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
			                                <div class="bbb_viewed_image">
			                                	<img src="frontend/images/logo-fb.png" alt="">			                                	
			                                </div>			                                 
			                            </div>
			                        </div>
			                        <div class="owl-item">
			                            <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
			                                <div class="bbb_viewed_image">	
			                                	<img src="frontend/images/loggo.png" alt="">		                                				                                	
			                                </div>			                               				                                 
			                            </div>
			                        </div>
			                        <div class="owl-item">
			                            <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
			                                <div class="bbb_viewed_image">
			                                	<img src="frontend/images/bogura.png" alt="">
			                                </div>			                               	
			                            </div>
			                        </div>
			                        <div class="owl-item">
			                            <div class=" bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
			                                <div class="bbb_viewed_image">
			                                	<img src="frontend/images/jaijaidin.png" alt="">
			                                </div>			                               	
			                            </div>
			                        </div>
			                        <div class="owl-item">
			                            <div class=" bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
			                                <div class="bbb_viewed_image">
			                                	<img src="frontend/images/satmatha.png" alt="">
			                                </div>
			                            </div>
			                        </div>
			                        <div class="owl-item">
			                            <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
			                                <div class="bbb_viewed_image">
			                                	<img src="frontend/images/mukto-sokal.png" alt="">
			                                </div>
			                            </div>
			                        </div>
			                        <div class="owl-item">
			                            <div class=" bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
			                                <div class="bbb_viewed_image">
			                                	<img src="frontend/images/daily-korotoya.png" alt="">
			                                </div>
			                            </div>
			                        </div>    
		                    	</div>
		                	</div>
		               </div> 
        
			</div>
		</div>
	</section>
	<!--================================top_featured section end here=======================-->
	<!--================================top_awards section start here=======================-->
	<section class="top_awards">
		<div class="container">
			<div class="row">
				<div class="top_awards_txt">
					<h3>Achievements and Recognitions</h3>
					<p>For more than ten years, SEO Expate Bangladesh Ltd. has been at the forefront of the ICT industry, driving innovation and empowering businesses to thrive in the digital age. As we celebrate this milestone, we take a moment to reflect on our achievements and recognitions, which stand as testaments to our dedication to excellence.</p>
					<p>Explore a selection of our honors and accomplishments below.</p>
				</div>
				<div class="slider pt-5">
		            <div class="owl-carousel">
                        <?php
                        $i = 1;
                        $qry = "SELECT * FROM history_galleries WHERE image_type = 4 ORDER BY id DESC";
                        $result = mysqli_query($conn, $qry); // Utilizing mysqli_query() to execute the query

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                        <div class="slider-card">
		                  	<div class="d-flex justify-content-center align-items-center mb-4">
		                        <img src="<?php echo 'uploads/' . basename($row['image']); ?>" alt="image" >
		                  	</div>
		                  <h5 class="mb-0 text-center"><b><?php echo $row['short_title']?></b></h5>
		                  <p class="text-center p-4"><?php echo $row['title']?> </p>
		                </div>

                        <?php
                            }
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                        ?>
		            </div>
		        </div>
			</div>
		</div>
	</section>
	<!--================================top_awards section end here=======================-->

	<!--================================top_our_transform section start here=======================-->
	<section class="top_our_transform text-center">
		<div class="container">
			<div class="row">
				<div class="our_transform_txt text-center">
					<h5 class="text-center pb-3">Create Your Story</h5>
					<p class="text-center" style="width: 50%; margin:auto;">Let us help you create your story by transforming your dreams and ideas into a big reality!</p>
				</div>
				<div class="top-body-button pt-3 pt-4">
					<a type="button" href="#">Make Your Own Story</a>
				</div>				
			</div>
		</div>
	</section>
	<!--================================top_our_transform section end here=======================-->


<?php
$main_content = ob_get_clean();
include './layouts/app.php';
?>