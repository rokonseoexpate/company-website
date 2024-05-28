<?php
$title = "History";
ob_start();
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

$sql = "SELECT * FROM histories WHERE id=1";
$result = $conn->query($sql);
$history = $result->fetch_assoc();

?>

    <!--================================top-body section start here=======================-->
    <section class="top-body top-history" style="background-image: url(images/1.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover;  margin-top: 60px; ">
        <div class="container ">
            <div class="row">
                <div class="col-12" style="z-index:500;">
                    <div class="top_body_txt_part">
                        <h1>History</h1>
                        <h2>of SEO Expate</h2>
                        <h6>To the Endless Possibilities</h6>
                        <p>The journey of <a href="index.php" class="text-success">SEO Expate</a> started in 2013. Riseup Labs has provided technology solutions to global businesses for over 10 years. It has been established as a next-generation global IT service and technology solution provider company to help enterprises reimagine their business and navigate digital transformation. Let’s explore our long history of <a href="award.php" class="text-success">success!</a></p>
                    </div>
                    <div class="top-body-button pt-3">
                        <div class="">
                            <a type="button" href="about.php">About SEO Expate</a>
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
                    <div class="updatecode"><h6 style="padding-bottom: unset;">Accelerating Innovation</h6></div>
                    <div class="updatecode"><h6 style="padding-bottom: unset;"><span>Since 2013</span></h6></div>
                </div>
                <div class="col-md-6">
                    <div class="accelerating_innovation_text">
                        <p>The year 2013. A great Information Technology platform was born with a team of genius minds. From the beginning of our journey, SEO Expate has championed in every step by supporting new and better ideas to reach the next level.</p>
                        <p class="pt-3">In the journey of <a href="index.php" class="text-success">SEO Expate</a>, it has become a major technology solution provider for brands like UNICEF Bangladesh, Robi Axiata Limited, BBC Media Action, Ministry of Women and Children Affairs, ICT Division and many large corporations globally.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accelerating_innovation_img">
                        <img src="images/awardd.png" alt="Information Technology platform" description=" Information Technology platform" class="img-thumbnail">
                    </div>
                </div>
                <div class="top-body-button pt-5 text-center">
                    <a type="button" href="about.php">Know More About Our Journey</a>
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
                    <div class="updatecode"><h6 class="text-dark" style="padding-bottom: unset;">Timeline Of Our</h6></div>
                    <div class="updatecode"><h6 style="padding-bottom: unset;"><span>Successful Journey</span></h6></div>
                    <p><a href="index.php" class="text-success">SEO Expate</a> Bangladesh Ltd. started the journey in Game Development and after a successful journey, we have established as a next-generation globnal IT service and technology solutions provider company. Explore our journey of success since 2013.</p>
                </div>
                <div class="explore_tabs">
                    <div class="container py-5">
                        <div class="row mb-5">
                            <div class="p-5 bg-white rounded shadow mb-5" style="border-left:5px solid var(--secondary-text-color); border-right:5px solid var(--secondary-text-color);">
                                <!-- Rounded tabs -->
                                <div class="row">
                                    <div class="col-md-2 border-end">
                                        <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column text-center border-0">
                                            <li class="nav-item flex-sm-fill" role="presentation">
                                                <a id="ppersonal-tab" data-bs-toggle="tab" data-bs-target="#ppersonal" type="button" href="#home" role="tab" aria-controls="ppersonal" aria-selected="true" class="nav-link border-0  font-weight-bold active "> 2024 </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill" role="presentation">
                                                <a id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" href="#hoome" role="tab" aria-controls="personal" aria-selected="true" class="nav-link border-0  font-weight-bold  "> 2023 </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill" role="presentation">
                                                <a id="employment-tab" data-bs-toggle="tab" data-bs-target="#employment" href="#employment" role="tab" aria-controls="employment" aria-selected="false" class="nav-link border-0  font-weight-bold">  2022</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill" role="presentation">
                                                <a id="Services-tab" data-bs-toggle="tab" data-bs-target="#Services" href="#Services" role="tab" aria-controls="Services" aria-selected="false" class="nav-link border-0  font-weight-bold">2021</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill" role="presentation">
                                                <a id="Servicess-tab" data-bs-toggle="tab" data-bs-target="#Servicess" href="#Servicess" role="tab" aria-controls="Servicess" aria-selected="false" class="nav-link border-0  font-weight-bold">2020</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill" role="presentation">
                                                <a id="Serrvices-tab" data-bs-toggle="tab" data-bs-target="#Serrvices" href="#Serrvices" role="tab" aria-controls="Serrvices" aria-selected="false" class="nav-link border-0  font-weight-bold">2019</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill" role="presentation">
                                                <a id="Serviices-tab" data-bs-toggle="tab" data-bs-target="#Serviices" href="#Serviices" role="tab" aria-controls="Serviices" aria-selected="false" class="nav-link border-0  font-weight-bold">2018</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill" role="presentation">
                                                <a id="Seervices-tab" data-bs-toggle="tab" data-bs-target="#Seervices" href="#Seervices" role="tab" aria-controls="Seervices" aria-selected="false" class="nav-link border-0  font-weight-bold">2017</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill" role="presentation">
                                                <a id="sixteen-tab" data-bs-toggle="tab" data-bs-target="#sixteen" href="#sixteen" role="tab" aria-controls="sixteen" aria-selected="false" class="nav-link border-0  font-weight-bold">2016</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill" role="presentation">
                                                <a id="fifteen-tab" data-bs-toggle="tab" data-bs-target="#fifteen" href="#fifteen" role="tab" aria-controls="fifteen" aria-selected="false" class="nav-link border-0  font-weight-bold">2015</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill" role="presentation">
                                                <a id="fourteen-tab" data-bs-toggle="tab" data-bs-target="#fourteen" href="#fourteen" role="tab" aria-controls="fourteen" aria-selected="false" class="nav-link border-0  font-weight-bold">2014</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill" role="presentation">
                                                <a id="thirteen-tab" data-bs-toggle="tab" data-bs-target="#thirteen" href="#thirteen" role="tab" aria-controls="thirteen" aria-selected="false" class="nav-link border-0  font-weight-bold">2013</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="tab-content" id="myTabContent">
                                            <div id="ppersonal" role="tabpanel" aria-labelledby="ppersonal-tab" class="tab-pane fade px-4 py-5 show active">
                                                <p class="text-muted mb-0">SEO Expate Bangladesh Ltd, a provider of technology solutions, offers advice on how to create solutions for your issues. We help businesses become more inventive and flexible by meeting customer needs and working together to develop ground-breaking goods and services. </p>
                                            </div>
                                            <div id="personal" role="tabpanel" aria-labelledby="personal-tab" class="tab-pane fade px-4 py-5 show ">
                                                <p class="text-muted mb-0">SEO Expate Bangladesh Ltd, a provider of technology solutions, offers advice on how to create solutions for your issues. We help businesses become more inventive and flexible by meeting customer needs and working together to develop ground-breaking goods and services. </p>
                                            </div>
                                            <div id="employment" role="tabpanel" aria-labelledby="employment-tab" class="tab-pane fade px-4 py-5">
                                                <p class="text-muted mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>

                                            </div>
                                            <div id="Services" role="tabpanel" aria-labelledby="Services-tab" class="tab-pane fade px-4 py-5">
                                                <p class="text-muted mb-0">SEO Expate Bangladesh Ltd, a provider of technology solutions, offers advice on how to create solutions for your issues. We help businesses become more inventive and flexible by meeting customer needs and working together to develop ground-breaking goods and services.</p>
                                            </div>
                                            <div id="Servicess" role="tabpanel" aria-labelledby="Servicess-tab" class="tab-pane fade px-4 py-5">
                                                <p class="text-muted mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>

                                            </div>
                                            <div id="Serrvices" role="tabpanel" aria-labelledby="Serrvices-tab" class="tab-pane fade px-4 py-5">
                                                <p class="text-muted mb-0">SEO Expate Bangladesh Ltd, a provider of technology solutions, offers advice on how to create solutions for your issues. We help businesses become more inventive and flexible by meeting customer needs and working together to develop ground-breaking goods and services.</p>
                                            </div>
                                            <div id="Serviices" role="tabpanel" aria-labelledby="Serviices-tab" class="tab-pane fade px-4 py-5">
                                                <p class="text-muted mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>

                                            </div>
                                            <div id="Seervices" role="tabpanel" aria-labelledby="Seervices-tab" class="tab-pane fade px-4 py-5">
                                                <p class="text-muted mb-0">SEO Expate Bangladesh Ltd, a provider of technology solutions, offers advice on how to create solutions for your issues. We help businesses become more inventive and flexible by meeting customer needs and working together to develop ground-breaking goods and services.</p>
                                            </div>
                                            <div id="sixteen" role="tabpanel" aria-labelledby="sixteen-tab" class="tab-pane fade px-4 py-5">
                                                <p class="text-muted mb-0">SEO Expate Bangladesh Ltd, a provider of technology solutions, offers advice on how to create solutions for your issues. We help businesses become more inventive and flexible by meeting customer needs and working together to develop ground-breaking goods and services.</p>
                                            </div>
                                            <div id="fifteen" role="tabpanel" aria-labelledby="fifteen-tab" class="tab-pane fade px-4 py-5">
                                                <p class="text-muted mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>

                                            </div>
                                            <div id="fourteen" role="tabpanel" aria-labelledby="fourteen-tab" class="tab-pane fade px-4 py-5">
                                                <p class="text-muted mb-0">SEO Expate Bangladesh Ltd, a provider of technology solutions, offers advice on how to create solutions for your issues. We help businesses become more inventive and flexible by meeting customer needs and working together to develop ground-breaking goods and services.</p>
                                            </div>
                                            <div id="thirteen" role="tabpanel" aria-labelledby="thirteen-tab" class="tab-pane fade px-4 py-5">
                                                <p class="text-muted mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>

                                            </div>
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
                    <img src="images/1707203640310.jpg" alt="One Mission" description=" One Mission">
                </div>
                <div class="col-md-6">
                    <div class="updatecode"><h6 class="" style="padding-bottom: unset; text-align: left !important;">Our <span> One Mission</span></h6></div>
                    <p>To help enterprises achieve their business objectives by <br>providing IT services & technology solutions.</p>
                    <!-- <div class="top-body-button pt-3">
                        <a type="button" href="contact.php">See More </a>
                    </div> -->
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
                    <div class="updatecode"><h6 class="" style="padding-bottom: unset; text-align: left !important;">Our <span> Promise</span></h6></div>
                    <p>We promise to do our very best and always strive to do <br> the right thing for your project, your users, and your team. </p>
                    <p>We want you to think of us as your partners <br>in our journey together.</p>
                    <!-- <div class="top-body-button pt-3">
                        <a type="button" href="contact.php">See More </a>
                    </div> -->
                </div>
                <div class="col-md-6">
                    <img src="images/Our-Promise.jpg" alt="One Mission" description=" One Mission">
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
                    <h3></h3>
                    <div class="updatecode"><h6 class="text-light" style="padding-bottom: unset; text-align: left !important;">Our Global Impact Today</h6></div>
                    <p>Since 2013, <a href="index.php" class="text-success">SEO Expate</a> has successfully supported 50+ clients in more than 30 countries by delivering 700+ projects. We have created opportunities for 150+ IT professionals in 30+ different industries. Our global impact today achieved through our commitments to our clients, our team, and the communities where we serve are present in all we do. These ideas shape the projects we embark on, the individuals we recruit, and our overall organizational initiatives.</p>
                    <!-- <div class="top-body-button pt-4">
                        <a type="button" href="contact.php">Find out more </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!--================================our_global_impact section end here=======================-->

    <!--================================our_global_impact section start here=======================-->
    <div class="world_impact">
        <div class="container">
            <div class="row">
                <img src="images/web-store_prev_ui.png" alt="One Mission" description=" One Mission">
            </div>
        </div>
    </div>
    <!--================================our_global_impact section end here=======================-->

    <!--================================overview_success section start here=======================-->
    <section class="overview_success">
        <div class="container">
            <div class="row">
                <div class="overview_success_txt">
                    <div class="app_development_txt"><strong class="text-light" style="">Overview of SEO Expate' Success</strong></div>
                    <p><a href="index.php" class="text-success">SEO Expate</a> is an ISO-certified leading technology solution and next-generation global IT services provider that helps enterprises reimagine their business and navigate digital transformation. SEO Expate won the Digital Bangladesh Award 2022 from the ICT Division of Bangladesh as the best technology company in the private sector for using emerging technologies and its unique contribution to the Information Technology Sector.</p>
                    <p>With over 10 years of experience managing 700+ projects and working with global enterprises, like – UNICEF, UNDP, USAID, FAO, WHO, ATEC, BBC, Fhi360, Axiata, Murka, Safe-Guard, Swiss Marketing Systems, we are expertly steering our clients through their digital journey.</p>
                    <h6>Explore the best moments and achievements of SEO Expate throughout the last era.</h6>
                </div>
                <div class="overview_success_img pt-5">
                    <img src="images/success_img.jpg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                </div>
                <div class="col-md-6">
                    <div class="overview_success_img  pt-4">
                        <img src="images/success-1.jpg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="overview_success_img  pt-4">
                        <img src="images/success-2.jpg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="overview_success_img  pt-4">
                        <img src="images/success-3.jpg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="overview_success_img  pt-4">
                        <img src="images/success-4.jpg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="overview_success_img  pt-4">
                        <img src="images/success-5.jpg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="overview_success_img  pt-4">
                        <img src="images/success-6.jpg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================overview_success section end here=======================-->

    <!--================================Our_Great_Start section start here=======================-->

    <section class="Our_Great_Start">
        <div class="container">
            <div class="row">
                <div class="Our_Great_Start_txt pb-5">
                    <div class="updatecode"><h6 class="" style="padding-bottom: unset;">Our Great Start</h6></div>
                    <p>Successful Solutions Developed by SEO Expate in the Last Era. We have started our journey with the game Tap Tap Ants, which has millions of downloads in the App Store and received the top-ranking position worldwide. Explore more solutions developed by SEO Expate throughout its journey.</p>
                </div>
                <div class="col-md-6">
                    <div class="img">
                        <img src="images/25373f0b4622aae50be59d5f0aa27537.jpg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                    <div class="Our_Great_Start_img_txt pt-4">
                        <h5>Tap Tap Ants</h5>
                        <p>The first game developed by SEO Expate was Tap Tap Ants, one of the most popular tapping games with millions of downloads in the App Store.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img">
                        <img src="images/maxresdefault.jpg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                    <div class="Our_Great_Start_img_txt pt-4">
                        <h5>Meena Game</h5>
                        <p>An adventure edutainment game developed by SEO Expate for UNICEF Bangladesh impact significantly in promoting child rights.</p>
                    </div>
                </div>
                <div class="col-md-6 pt-3">
                    <div class="img">
                        <img src="images/meena two.png" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                    <div class="Our_Great_Start_img_txt pt-4">
                        <h5>Meena Game 2 3D</h5>
                        <p>The 3D version of Meena Game with a new story of caring for a mother and a newborn baby. Another big success for SEO Expate.</p>
                    </div>
                </div>
                <div class="col-md-6 pt-3">
                    <div class="img">
                        <img src="images/app.jpg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                    <div class="Our_Great_Start_img_txt pt-4">
                        <h5>1952 AR App</h5>
                        <p>SEO Expate developed the “1952” app, a history-based educational AR app on the Language Movement of 21st February 1952.</p>
                    </div>
                </div>
                <div class="col-md-6 pt-3">
                    <div class="img">
                        <img src="images/280492.jpg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                    <div class="Our_Great_Start_img_txt pt-4">
                        <h5>Fun Basket</h5>
                        <p>An edutainment game developed by SEO Expate for BBC Media Action greatly reduces gender-based violence and improves life skills.</p>
                    </div>
                </div>
                <div class="col-md-6 pt-3">
                    <div class="img">
                        <img src="images/observerbd.com_1583518813.jpg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                    <div class="Our_Great_Start_img_txt pt-4">
                        <h5>7th March Speech</h5>
                        <p>A VR experience based on the historic 7th March speech of Bangabandhu Sheikh Mujibur Rahman of 1971 at the Racecourse Ground.</p>
                    </div>
                </div>
                <div class="col-md-6 pt-3">
                    <div class="img">
                        <img src="images/fuzionfrenzy_r_image5.jpg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                    <div class="Our_Great_Start_img_txt pt-4">
                        <h5>Rooftop Frenzy</h5>
                        <p>Action and adventure game developed by SEO Expate! Rooftop Frenzy is a free action-based rooftop run game, not just for kids of all ages!</p>
                    </div>
                </div>
                <div class="col-md-6 pt-3">
                    <div class="img">
                        <img src="images/2c87e8e9f5d5373176b6772216da16a6.jpeg" alt="SEO Expate' Success" description=" SEO Expate' Success">
                    </div>
                    <div class="Our_Great_Start_img_txt pt-4">
                        <h5>Treasure Wars</h5>
                        <p>Action and adventure game developed by SEO Expate! Rooftop Frenzy is a free action-based rooftop run game, not just for kids of all ages!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================Our_Great_Start section end here=======================-->
    <!--================================top_body_project_countdown section start here=======================-->
    <section class="top_body_project_countdown">
        <div class="container">
            <div class="row">
                <div class="ptc_txt">
                    <div class="updatecode"><h6 style="padding-bottom: unset;"><span>A Short Introduction to Our Approach</span></h6></div>
                    <div class="updatecode"><h6 class="text-dark" style="padding-bottom: unset;">Delivering IT Solutions Globally</h6></div>
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
                <div class="updatecode"><h6 style="padding-bottom: unset;"><span>Our </span> Reliable Customers and Associates</h6></div>
                <p><a href="index.php" class="text-success">SEO Expate</a> Bangladesh Ltd. takes great pride in collaborating with businesses, firms, service providers, corporations, government departments, and other organizations as a top information technology company.
                    Here take a look at some of the top companies and institutions that SEO Expate Bangladesh Ltd. has already worked with.</p>
                <div class="col-12 pt-5">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner pb-5">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="images/slide1.png" class="d-block w-100" alt="Reliable Customers and Associates" description=" Reliable Customers and Associates">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/slide2.png" class="d-block w-100" alt="Reliable Customers and Associates" description=" Reliable Customers and Associates">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slide3.png" class="d-block w-100" alt="Reliable Customers and Associates" description=" Reliable Customers and Associates">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slide4.png" class="d-block w-100" alt="Reliable Customers and Associates" description=" Reliable Customers and Associates">
                            </div>
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
                    <div class="updatecode pb-3"><h6 style="padding-bottom: unset;">We're Highlighted On</h6></div>
                    <p>In this category, <a href="index.php" class="text-success">SEO Expate</a> Bangladesh Ltd. stands out as the most popular in the first place. Numerous local and international (offline and online) TV networks, newspapers, journals, TV channels, and other well-known platforms have highlighted our imaginative and inventive works! Also, we are one of the most followed companies on various social media platforms. Again, we are going like a bullet train in other media as well.</p>
                </div>
                <div class="slider pt-5">
                    <div class="owl-carousel">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="images/News (1).jpg" alt="We're Highlighted On" description=" We're Highlighted On" >
                            </div>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="images/News (1).PNG" alt="We're Highlighted On" description=" We're Highlighted On" >
                            </div>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="images/News (2).jpg" alt="We're Highlighted On" description=" We're Highlighted On" >
                            </div>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="images/News (4).jpg" alt="We're Highlighted On" description=" We're Highlighted On">
                            </div>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="images/News (5).jpg" alt="We're Highlighted On" description=" We're Highlighted On" >
                            </div>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="images/News (6).jpg" alt="We're Highlighted On" description=" We're Highlighted On" >
                            </div>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="images/News (7).jpg" alt="We're Highlighted On" description=" We're Highlighted On">
                            </div>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="images/News (8).jpg" alt="We're Highlighted On" description=" We're Highlighted On">
                            </div>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="images/News (3).jpg" alt="We're Highlighted On" description=" We're Highlighted On" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bbb_main_container">
                    <div class="bbb_viewed_slider_container">
                        <div class="owl-carousel owl-theme bbb_viewed_slider">
                            <div class="owl-item">
                                <div class=" bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="images/mukto-sokal.png" alt="We're Highlighted On" description=" We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="images/6578bb0f9469d.png" alt="We're Highlighted On" description=" We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="images/logo-fb.png" alt="We're Highlighted On" description=" We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="images/loggo.png" alt="We're Highlighted On" description=" We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="images/bogura.png" alt="We're Highlighted On" description=" We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="images/jaijaidin.png" alt="We're Highlighted On" description=" We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="images/satmatha.png" alt="We're Highlighted On" description=" We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="images/mukto-sokal.png" alt="We're Highlighted On" description=" We're Highlighted On">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class=" bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                        <img src="images/daily-korotoya.png" alt="We're Highlighted On" description=" We're Highlighted On">
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
                    <div class="updatecode pb-3"><h6 style="padding-bottom: unset;">Achievements and Recognitions</h6></div>
                    <p>For more than ten years, SEO Expate Bangladesh Ltd. has been at the forefront of the ICT industry, driving innovation and empowering businesses to thrive in the digital age. As we celebrate this milestone, we take a moment to reflect on our achievements and recognitions, which stand as testaments to our dedication to excellence.</p>
                    <p>Explore a selection of our honors and accomplishments below.</p>
                </div>
                <div class="slider pt-5">
                    <div class="owl-carousel">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="images/1.png" alt="We're Highlighted On" description=" We're Highlighted On" >
                            </div>
                            <h5 class="mb-0 text-center"><b>Winner</b></h5>
                            <p class="text-center p-4">Digital Bangladesh Award 2023 </p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="images/04.png" alt="We're Highlighted On" description=" We're Highlighted On">
                            </div>
                            <h5 class="mb-0 text-center"><b>Exhibitor </b></h5>
                            <p class="text-center p-4">Basis Soft Expo 2023   </p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="images/06.png" alt="We're Highlighted On" description=" We're Highlighted On">
                            </div>
                            <h5 class="mb-0 text-center"><b>Science Fair </b></h5>
                            <p class="text-center p-4"></p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="images/07.png" alt="We're Highlighted On" description=" We're Highlighted On" >
                            </div>
                            <h5 class="mb-0 text-center"><b> FBCCI </b></h5>
                            <p class="text-center p-4">FBCCI Intro Smart Bangladesh</p>
                        </div>
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
                    <a type="button" href="contact.php">Make Your Own Story</a>
                </div>
            </div>
        </div>
    </section>
    <!--================================top_our_transform section end here=======================-->

    <!--================================Thrive_Globally section start here=======================-->
    <section class="PAY_MENT" style="padding: 20px 0;">
        <div class="container">
            <div class="row">
                <div class="PAY_IMG">
                    <img src="images/Payment-method-banner-image-1024x73.webp" alt="payment"  description=" payment" width="100%">
                </div>
            </div>
        </div>
    </section>
    <!--================================Thrive_Globally section end here=======================-->


<?php
$main_content = ob_get_clean();
include './layouts/app.php';
?>