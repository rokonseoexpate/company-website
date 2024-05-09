<?php
$title = "Home";
ob_start();
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

?>

<!--================================top-body section start here=======================-->
<section class="top-body" style="background-image: url(frontend/images/Advanced-technology.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover;  margin-top: 60px; ">
    <div class="container ">
        <div class="row">
            <div class="col-md-7" style="z-index:500;">
                <div class="top_body_txt_part">
                    <h1>SEO Expate Bangladesh Ltd.</h1>
                    <h2>SEO Services, IT Services, Solutions & Development</h2>
                    <h6>Getting Started With the Latest Technologies</h6>
                    <p>SEO Expate BD Ltd. helps you unlock innovation and navigate the digital future. We empower
                        enterprises to reimagine their business and dominate digital transformation. Certified for
                        quality and security (ISO 9001 & 27001), we offer cutting-edge IT services and technology
                        solutions. Again, we are proud members of FBCCI, BASIS, BACCO and have all the registered
                        licenses.</p>
                </div>
                <div class="top-body-button pt-3">
                    <div class="d-flex gap-3">
                        <a type="button" href="contact">Services</a>
                        <a type="button" href="#">Portfolio</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1" style="z-index:500;">
                <div class="top_body_awards">
                    <img src="frontend/images/trophy-of-digital-bangladesh-award-won-by-seoexpate.png" alt="image">
                </div>
            </div>
        </div>
</section>
<!--================================top-body section end here=======================-->

<!--================================top-slider-part section start here=======================-->
<section class="top-slider-part">
    <div class="container ">
        <div class="row">
            <h3><span>Our </span> Reliable Customers and Associates</h3>
            <p>SEO Expate Bangladesh Ltd. takes great pride in collaborating with businesses, firms, service providers,
                corporations, government departments, and other organizations as a top information technology company.
                Here take a look at some of the top companies and institutions that SEO Expate Bangladesh Ltd. has
                already worked with.</p>
            <div class="col-12 pt-5">
                <!-- <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner pb-5">
                        <?php
                        // $qry = "SELECT * FROM history_galleries WHERE image_type = 2 ORDER BY id DESC";
                        // if ($result = $conn->query($qry)) {
                        //     $active = true; // Set active class for the first item
                        //     while ($row = $result->fetch_assoc()) {
                        //         $imagePath = $row['image'];
                        //         $imageName = basename($imagePath);
                        //         $newImagePath = 'uploads/' . $imageName;
                        ?>
                                <div class="carousel-item <?php echo $active ? 'active' : ''; ?>" data-bs-interval="10000">
                                    <img src="<?php echo $newImagePath; ?>" class="d-block w-100" alt="img">
                                </div>
                        <?php
                        //         $active = false; // Remove active class for subsequent items
                        //     }
                        // }
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
                </div> -->
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
</section>
<!--================================top-slider-part section end here=======================-->

<!--================================top-text-slider-part section start here=======================-->
<section class="top_body_text_slider" style="background-image: url('frontend/images/slideimg.png');">
    <div class="container">
        <div class="row">
            <div class="tbt_text">
                <p>SEO Expate stays ahead of the curve by exploring and implementing cutting-edge technologies to
                    provide businesses with a competitive edge. Serving clients across Bangladesh and internationally,
                    with a commitment to delivering tailored solutions for diverse markets. Our top priorities are
                    forging close bonds with our customers, learning about their particular needs, and going above and
                    beyond for them.</p>
            </div>
            <div class="tbt_slider">
                <p>
                    <span class="txt-rotate" data-period="2000" data-rotate='[ "Trustworthy technology, seamless results", "Empowering tomorrow, today", " Connecting people, businesses, and possibilities", "Highlight your unique value proposition", "Digitally transform your business, unlock unlimited potential." ]'>
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
<!--================================top-text-slider-part section end here=======================-->

<!--================================top-seo-expate-part section start here=======================-->
<section class="top-seo-expate-part">
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <div class="top-seo-expate-video">
                    <iframe width="100%" height="384" src="https://www.youtube.com/embed/ha2rO-rjLNA" title="ডিজিটাল বাংলাদেশ&#39; একটি প্রত্যয়, একটি স্বপ্ন। আর সেটাই বাস্তবায়ন করেছে SEO Expate Bangladesh Ltd." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="top-seo-expate-txt">
                    <h4>SEO Expate BD Ltd. At A Glance</h4>
                    <p>SEO Expate Bangladesh Ltd. is a leading information technology (IT) service and solutions
                        provider, empowering businesses to reimagine their operations and navigate the digital
                        transformation landscape. Over 10 years of experience in the IT industry, backed by a team of
                        skilled professionals certified in various technologies and domains. Certified with ISO 9001 &
                        27001, ensuring quality service delivery and robust security measures. We offer a wide range of
                        services, including web development, software development, digital marketing, SEO, graphic
                        design, and more, catering to diverse business needs. Finally, we strive to provide affordable
                        solutions that deliver high return on investment (ROI).</p>
                </div>
                <div class="top-body-button pt-3">
                    <a type="button" href="#">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================top-seo-expate-part section end here=======================-->

<!--================================top_body_project_countdown section start here=======================-->
<section class="top_body_project_countdown">
    <div class="container">
        <div class="row">
            <div class="ptc_txt">
                <h3>A Short Introduction to Our Approach</h3>
                <h4>Delivering IT Solutions Globally</h4>
                <p class=" pt-4">In addition to creating a stress-free and sustainable IT environment, SEO Expate
                    Bangladesh Ltd. produces outcomes that help our clients stay ahead of the competition. By utilizing
                    the newest and most widely used technologies, our IT specialists continuously deliver user-centric
                    IT solutions that are customized to the needs of the business. We have been assisting clients all
                    over the world to boost engagement, sales, and conversions for more than ten years. Take a peek at
                    the reliable numbers!</p>
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

<!--================================top_body_explore_tab  section start here=======================-->
<section class="top_body_explore_tab">
    <div class="container">
        <div class="row">
            <div class="explore_txt">
                <h3>Discover Possibilities</h3>
                <p>At SEO Expate Bangladesh Ltd., we believe in unlocking the full potential of technology for your
                    business. Our client-centric approach ensures that you receive tailored solutions and services that
                    perfectly address your unique needs. Through four distinct segments, we provide an integrated range
                    of products, technological solutions, and services to help you maximize the benefits of technology.
                    SEO Expate innovative team drives cutting-edge research and development to create solutions ahead of
                    the curve.</p>
            </div>
            <div class="explore_tabs">
                <div class="container py-5">
                    <div class="row mb-5">
                        <div class="p-5 bg-white rounded shadow mb-5">
                            <!-- Rounded tabs -->
                            <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 ">
                                <li class="nav-item flex-sm-fill" role="presentation">
                                    <a id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" href="#home" role="tab" aria-controls="personal" aria-selected="true" class="nav-link border-0  font-weight-bold active">Advising and Creating</a>
                                </li>
                                <li class="nav-item flex-sm-fill" role="presentation">
                                    <a id="employment-tab" data-bs-toggle="tab" data-bs-target="#employment" href="#employment" role="tab" aria-controls="employment" aria-selected="false" class="nav-link border-0  font-weight-bold">Design and Development</a>
                                </li>
                                <li class="nav-item flex-sm-fill" role="presentation">
                                    <a id="Services-tab" data-bs-toggle="tab" data-bs-target="#Services" href="#Services" role="tab" aria-controls="Services" aria-selected="false" class="nav-link border-0  font-weight-bold">Services</a>
                                </li>
                            </ul>


                            <div class="tab-content" id="myTabContent">
                                <div id="personal" role="tabpanel" aria-labelledby="personal-tab" class="tab-pane fade px-4 py-5 show active">
                                    <p class="text-muted">Delivering full customized design and consulting services.</p>
                                    <p class="text-muted mb-0">SEO Expate Bangladesh Ltd, a provider of technology
                                        solutions, offers advice on how to create solutions for your issues. We help
                                        businesses become more inventive and flexible by meeting customer needs and
                                        working together to develop ground-breaking goods and services. </p>
                                    <div class="row pt-5">
                                        <div class="col-md-8">
                                            <h6>Principal Advantages of Our Design and Consultation Services:</h6>
                                            <p class="text-muted mb-0 pt-2"><span><i class="fa-solid fa-circle"></i></span>Utilizing the newest
                                                technologies, update or upgrade current systems.</p>
                                            <p class="text-muted mb-0 pt-2"> <span><i class="fa-solid fa-circle"></i></span>Specify digital
                                                transformation and intelligent automation strategies.</p>
                                            <p class="text-muted mb-0 pt-2"><span><i class="fa-solid fa-circle"></i></span>User experiences should be
                                                redefined via design thinking.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="explor_tab_img">
                                                <img src="frontend/images/Advancing Your Business Technology.jpg" alt="image">
                                            </div>
                                        </div>
                                        <div class="top-body-button pt-3 text-center">
                                            <a type="button" href="#">Advising Services</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="employment" role="tabpanel" aria-labelledby="employment-tab" class="tab-pane fade px-4 py-5">
                                    <p class="text-muted mb-0">SEO Expate Bangladesh Ltd, a provider of technology
                                        solutions, offers advice on how to create solutions for your issues. We help
                                        businesses become more inventive and flexible by meeting customer needs and
                                        working together to develop ground-breaking goods and services.</p>
                                    <div class="row pt-5">
                                        <div class="col-md-8">
                                            <h6>Principal Advantages of Our Design and Consultation Services: </h6>
                                            <p class="text-muted mb-0 pt-2"><span><i class="fa-solid fa-circle"></i></span>Describe your plans for
                                                intelligent automation and digital transformation.</p>
                                            <p class="text-muted mb-0 pt-2"> <span><i class="fa-solid fa-circle"></i></span>Utilizing the newest
                                                technologies, update or modernize current systems</p>
                                            <p class="text-muted mb-0 pt-2"><span><i class="fa-solid fa-circle"></i></span>Use design thinking to
                                                redefine user experiences</p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="explor_tab_img">
                                                <img src="frontend/images/Manage Every Part of Your IT Operation.jpg" alt="image">
                                            </div>
                                        </div>
                                        <div class="top-body-button pt-3 text-center">
                                            <a type="button" href="#">Development Services</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="Services" role="tabpanel" aria-labelledby="Services-tab" class="tab-pane fade px-4 py-5">
                                    <p class="text-muted mb-0">SEO Expate Bangladesh Ltd, a provider of technology
                                        solutions, offers advice on how to create solutions for your issues. We help
                                        businesses become more inventive and flexible by meeting customer needs and
                                        working together to develop ground-breaking goods and services.</p>
                                    <div class="row pt-5">
                                        <div class="col-md-8">
                                            <h6>Principal Advantages of Our Design and Services: </h6>
                                            <p class="text-muted mb-0 pt-2"><span><i class="fa-solid fa-circle"></i></span>Describe your plans for
                                                intelligent automation and digital transformation.</p>
                                            <p class="text-muted mb-0 pt-2"> <span><i class="fa-solid fa-circle"></i></span>Utilizing the newest
                                                technologies, update or modernize current systems</p>
                                            <p class="text-muted mb-0 pt-2"><span><i class="fa-solid fa-circle"></i></span>Use design thinking to
                                                redefine user experiences</p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="explor_tab_img">
                                                <img src="frontend/images/Having A Proactive and Proficient Team.jpg" alt="image">
                                            </div>
                                        </div>
                                        <p class="text-muted pt-5">The business will benefit from an innovative and
                                            holistic IT investment that reduces risk and boosts ROI from our proactive
                                            and comprehensive design and consulting services.</p>
                                        <div class="top-body-button pt-3 text-center">
                                            <a type="button" href="#"> Services</a>
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

<!--================================success_stories_slider section end here=======================-->
<section class="success_stories_slider">
    <div class="container-fluid">
        <div class="row">
            <div class="success_stories_slider_txt">
                <h3>Achievement of SEO Expate Bangladesh Ltd.</h3>
                <p>SEO Expate Bangladesh's success is the result of dedication and unwavering quality. Discover the
                    backstory behind our achievements.</p>
            </div>

            <div class="bbb_main_container pt-5">
                <div class="bbb_viewed_title_container">
                    <div class="bbb_viewed_nav_container">
                        <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="bbb_viewed_slider_container">
                    <div class="owl-carousel owl-theme bbb_viewed_slider">
                        <?php
                        $i = 1;
                        $qry = "SELECT * FROM history_galleries WHERE image_type = 4 ORDER BY id DESC";
                        $result = mysqli_query($conn, $qry); // Utilizing mysqli_query() to execute the query

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="owl-item">
                                    <div class="card bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image">
                                            <img src="<?php echo 'uploads/' . basename($row['image']); ?>" alt="">
                                        </div>
                                        <div class="card-body bbb_viewed_content text-center">
                                            <h5 class="card-title"><?php echo $row['short_title']?></h5>
                                            <p class=""><?php echo $row['title']?></p>
                                            <a href="#" class="">Read Insights <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
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
            </div>


        </div>
    </div>
</section>
<!--================================success_stories_slider section end here=======================-->

<!--================================top_body_why_work section start here=======================-->
<section class="top_body_why_work">
    <div class="container">
        <div class="row">
            <div class="why_work_txt pb-5">
                <h3 class="pb-4">Why Work With SEO Expate Bangladesh Ltd.?</h3>
                <p class="text-muted">Join together with a leading provider of technology solutions and IT services to
                    help businesses.</p>
            </div>
            <div class="col-md-6">
                <div class="why_work_img">
                    <img src="frontend/images/Manage Every Part of Your IT Operation.jpg" alt="image">
                </div>
                <div class="work_text pt-3">
                    <h4>Control Every Aspect of Your IT Enterprise</h4>
                    <p class="pt-3">Your IT infrastructure will remain scalable and reliable with the managed IT
                        services provided by SEO Expate Bangladesh Ltd. We provide affordable IT infrastructure and
                        software management solutions. SEO Expate Bangladesh Ltd. offers IT management, support, and
                        consulting services.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="why_work_img">
                    <img src="frontend/images/Advancing Your Business Technology.jpg" alt="image">
                </div>
                <div class="work_text pt-3">
                    <h4>Enhancing Technology for Your Company</h4>
                    <p class="pt-3">Our top priorities are the convenience and satisfaction of our clients. Our
                        all-inclusive approach to product development reduces risk and maximizes compatibility from
                        concept to execution. Take care of every facet of developing a digital product to make your
                        knowledge and expertise pay off generously.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="why_work_img">
                    <img src="frontend/images/Having A Proactive and Proficient Team.jpg" alt="image">
                </div>
                <div class="work_text pt-3">
                    <h4>Creating a Vibrant and Effective Group</h4>
                    <p class="pt-3">The most advanced technology solutions are offered to you by SEO Expate Bangladesh
                        Limited. Our team brings in the best personnel because of our quick and dispersed structure. To
                        expedite the product development process, a highly skilled team leader is assigned to each
                        project.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="why_work_img">
                    <img src="frontend/images/Advanced-technology.jpg" alt="image">
                </div>
                <div class="work_text pt-3">
                    <h4>Complying with the High-Tech Sector</h4>
                    <p class="pt-3">In order to provide you with the highest-quality product possible, we constantly
                        keep ourselves updated on the newest and most popular tools and technologies worldwide. SEO
                        Expate Bangladesh Ltd. is enthusiastic about applying modern techniques to address future
                        issues.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="why_work_img">
                    <img src="frontend/images/Aligning with the Advanced Tech Industry.jpg" alt="image">
                </div>
                <div class="work_text pt-3">
                    <h4>Design Thinking for Your Business</h4>
                    <p class="pt-3">In a competitive world, standing out requires more than just great products. You
                        need solutions that truly resonate with your users. That's where design thinking comes in. It's
                        a human-centered approach to innovation that helps you understand your users' needs, develop
                        creative solutions, and ultimately build better products and services.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="why_work_img">
                    <img src="frontend/images/Speeding Up Your Business's Success.JPG" alt="image">
                </div>
                <div class="work_text pt-3">
                    <h4>Accelerate Your Business Growth</h4>
                    <p class="pt-3">Ready to leave the starting line behind? At SEO Expate Bangladesh Ltd., we're
                        dedicated to propelling businesses like yours to new heights. We understand the challenges of
                        navigating today's dynamic market, and we're here to equip you with the strategies, solutions,
                        and support you need to achieve explosive growth.</p>
                </div>
            </div>
            <div class="top-body-button pt-3 text-center">
                <a type="button" href="#">Let's Work Together</a>
            </div>
        </div>
    </div>
</section>
<!--================================top_body_why_work section end here=======================-->

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

<!--================================top_featured section start here=======================-->
<section class="top_featured">
    <div class="container">
        <div class="row">
            <div class="top_featured_txt">
                <h3 class="pb-3">We're Highlighted On</h3>
                <p>In this category, SEO Expate Bangladesh Ltd. stands out as the most popular in the first place.
                    Numerous local and international (offline and online) TV networks, newspapers, journals, TV
                    channels, and other well-known platforms have highlighted our imaginative and inventive works! Also,
                    we are one of the most followed companies on various social media platforms. Again, we are going
                    like a bullet train in other media as well.</p>
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

<!--================================top_our_clients section start here=======================-->
<section class="top_our_clients">
    <div class="container">
        <div class="row">
            <div class="top_our_clients_txt">
                <h3 class="pb-3">Featured on TV Channel</h3>
                <p>I cannot recommend this IT firm enough. Their attention to detail, technical expertise, and
                    dedication to customer satisfaction set them apart from other firms. I am extremely happy with the
                    results of our collaboration.</p>
            </div>
            <div class="slider pt-5">
                <div class="owl-carousel">
                    <?php
                    $i = 1;
                    $qry = "SELECT * FROM featured_youtubes ORDER BY sort_by ASC";
                    $result = mysqli_query($conn, $qry); // Use mysqli_query() to execute the query

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <iframe width="560" height="315" src="<?php echo $row['link']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
        </div>
    </div>
</section>
<!--================================top_our_clients section end here=======================-->

<!--================================top_our_transform section start here=======================-->
<section class="top_our_transform">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="our_transform_txt">
                    <h5>Using Technology <br> to Transform Your Company </h5>
                </div>
            </div>
            <div class="col-md-6">
                <p>We want to use technology to propel innovation on a global scale. To grow internationally, change,
                    transform, innovate, and scale your company with SEO Expate Bangladesh Ltd.</p>
                <div class="top-body-button pt-3 pt-2">
                    <a type="button" href="#">Work with SEO Expate Bangladesh Ltd</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================top_our_transform section end here=======================-->

<!--================================top_our_industries  section start here=======================-->
<section class="top_our_industries">
    <div class="container">
        <div class="row">
            <div class="industries_txt">
                <h3>Fields We Cover</h3>
                <p>Having been in the information technology services provider business for more than ten years, we have
                    finished several projects for our clients in almost every sector. Including the following items:</p>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-network-wired"></i>
                    <p>Finance & Banking</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-dumpster-fire"></i>
                    <p>E-commerce</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-door-open"></i>
                    <p>Telco</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-sign-hanging"></i>
                    <p>Real Estate</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-brands fa-accusoft"></i>
                    <p>Software</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-person-skiing-nordic"></i>
                    <p>Health & Fitness</p>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-wine-glass"></i>
                    <p>Food & Drink</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-music"></i>
                    <p>Music</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-hospital"></i>
                    <p>Medical</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-prescription-bottle-medical"></i>
                    <p>Pharmaceutical</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-gas-pump"></i>
                    <p>Automotive</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-user-graduate"></i>
                    <p>Education</p>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-cart-flatbed-suitcase"></i>
                    <p>Travel</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-person-through-window"></i>
                    <p>Entertainment</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-calendar-day"></i>
                    <p>Retail</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-fax"></i>
                    <p>Business</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-icons"></i>
                    <p>Photo & Video</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-id-card-clip"></i>
                    <p>Non-Profit</p>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-3">
                <div class="industrie_serve">

                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-diagram-project"></i>
                    <p>Startup</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-newspaper"></i>
                    <p>AR/VR</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="industrie_serve">
                    <i class="fa-solid fa-couch"></i>
                    <p>Furniture</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="industrie_serve">

                </div>
            </div>
        </div>
    </div>
</section>
<!--================================top_our_industries section end here=======================-->

<!--================================top_our_technologies section start here=======================-->
<section class="top_our_technologies">
    <div class="container">
        <div class="row">
            <div class="top_our_technologies_txt">
                <h3> Innovative Technologies We Work With</h3>
                <p>The most innovative and dependable technologies are used by SEO Expate Bangladesh Ltd to build and
                    carry out the entire operation.</p>
            </div>
            <div class="explore_tabs">
                <div class="container py-5">
                    <div class="row mb-5">
                        <div class="p-5 bg-white rounded shadow mb-5">
                            <!-- Rounded tabs -->
                            <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 ">
                                <li class="nav-item flex-sm-fill" role="presentation">
                                    <a id="Mobile-tab" data-bs-toggle="tab" data-bs-target="#Mobile" type="button" href="#Mobile" role="tab" aria-controls="Mobile" aria-selected="true" class="nav-link border-0  font-weight-bold active"> Mobile </a>
                                </li>
                                <li class="nav-item flex-sm-fill" role="presentation">
                                    <a id="Front-tab" data-bs-toggle="tab" data-bs-target="#Front" href="#Front" role="tab" aria-controls="Front" aria-selected="false" class="nav-link border-0  font-weight-bold">Front-end </a>
                                </li>
                                <li class="nav-item flex-sm-fill" role="presentation">
                                    <a id="Back-tab" data-bs-toggle="tab" data-bs-target="#Back" href="#Back" role="tab" aria-controls="Back" aria-selected="false" class="nav-link border-0  font-weight-bold"> Back-end</a>
                                </li>
                                <li class="nav-item flex-sm-fill" role="presentation">
                                    <a id="Database-tab" data-bs-toggle="tab" data-bs-target="#Database" href="#Database" role="tab" aria-controls="Database" aria-selected="false" class="nav-link border-0  font-weight-bold"> Database</a>
                                </li>
                                <li class="nav-item flex-sm-fill" role="presentation">
                                    <a id="CMS-tab" data-bs-toggle="tab" data-bs-target="#CMS" href="#CMS" role="tab" aria-controls="CMS" aria-selected="false" class="nav-link border-0  font-weight-bold"> CMS</a>
                                </li>
                                <li class="nav-item flex-sm-fill" role="presentation">
                                    <a id="Tools-tab" data-bs-toggle="tab" data-bs-target="#Tools" href="#Tools" role="tab" aria-controls="Tools" aria-selected="false" class="nav-link border-0  font-weight-bold"> Tools</a>
                                </li>
                                <li class="nav-item flex-sm-fill" role="presentation">
                                    <a id="Integrations-tab" data-bs-toggle="tab" data-bs-target="#Integrations" href="#Integrations" role="tab" aria-controls="Integrations" aria-selected="false" class="nav-link border-0  font-weight-bold">
                                        Integrations</a>
                                </li>
                                <li class="nav-item flex-sm-fill" role="presentation">
                                    <a id="Cloud-tab" data-bs-toggle="tab" data-bs-target="#Cloud" href="#Cloud" role="tab" aria-controls="Cloud" aria-selected="false" class="nav-link border-0  font-weight-bold"> Cloud</a>
                                </li>
                                <li class="nav-item flex-sm-fill" role="presentation">
                                    <a id="DevOps-tab" data-bs-toggle="tab" data-bs-target="#DevOps" href="#DevOps" role="tab" aria-controls="DevOps" aria-selected="false" class="nav-link border-0  font-weight-bold"> DevOps</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div id="Mobile" role="tabpanel" aria-labelledby="Mobile-tab" class="tab-pane fade px-4 py-5 show active">
                                    <div class="row pt-5">
                                        <div class="col-md-2">
                                            <img src="frontend/images/iOS.png" alt="">
                                            <p>iOS</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/Android.png" alt="">
                                            <p>Android</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/Flutter.png" alt="">
                                            <p>Flutter</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/Objective-C.png" alt="">
                                            <p>Objective-C</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/C-2.png" alt="">
                                            <p>C#</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/C-1.png" alt="">
                                            <p>C++</p>
                                        </div>
                                    </div>
                                    <div class="row pt-5">
                                        <div class="col-md-2">
                                            <img src="frontend/images/swift-icon.png" alt="">
                                            <p>Swift</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/ionic-icon.png" alt="">
                                            <p>Ionic</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/kotlin-icon.png" alt="">
                                            <p>Kotlin</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/augmented-reality-icon.png" alt="">
                                            <p>Augmented Reality</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/virtual-reality-icon.png" alt="">
                                            <p>Virtual Reality</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/react-native-icon.png" alt="">
                                            <p>React Native</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="Front" role="tabpanel" aria-labelledby="Front-tab" class="tab-pane fade px-4 py-5">
                                    <div class="row pt-5">
                                        <div class="col-md-2">
                                            <img src="frontend/images/AngularJs.png" alt="">
                                            <p>Angular</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/VueJS.png" alt="">
                                            <p>VueJS</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/HTML.png" alt="">
                                            <p>HTML</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/Bootstrap.png" alt="">
                                            <p>Bootstrap</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/mean-icon.png" alt="">
                                            <p>MEAN</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/typescript-icon.png" alt="">
                                            <p>TypeScript</p>
                                        </div>
                                    </div>
                                    <div class="row pt-5">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/asp.net-icon.png" alt="">
                                            <p>ASP.NET</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/CSS.png" alt="">
                                            <p>CSS</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/ReactJs.png" alt="">
                                            <p>ReactJs</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/jQuery.png" alt="">
                                            <p>jQuery </p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/javascript-technology-icon-riseuplabs.png" alt="">
                                            <p> JavaScript</p>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                                <div id="Back" role="tabpanel" aria-labelledby="Back-tab" class="tab-pane fade px-4 py-5">
                                    <div class="row pt-5">
                                        <div class="col-md-2">
                                            <img src="frontend/images/java-icon.png" alt="">
                                            <p>Java</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/Laravel.png" alt="">
                                            <p>Laravel</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/PHP.png" alt="">
                                            <p>PHP</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/ASP.NET-MVC.png" alt="">
                                            <p>ASP.NET-MVC</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/django-icon.png" alt="">
                                            <p>Django</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/node.js-icon.png" alt="">
                                            <p>Node.js</p>
                                        </div>
                                    </div>
                                    <div class="row pt-5">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/codeigniter-icon.png" alt="">
                                            <p>Codeigniter</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/koa.js-icon.png" alt="">
                                            <p>Koa.js</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/flask-icon.png" alt="">
                                            <p>Flask</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/express.js-icon.png" alt="">
                                            <p> Express.js</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/graphql-icon.png" alt="">
                                            <p> GraphQL</p>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                                <div id="Database" role="tabpanel" aria-labelledby="Database-tab" class="tab-pane fade px-4 py-5">
                                    <div class="row pt-5">
                                        <div class="col-md-2">
                                            <img src="frontend/images/MySQL.png" alt="">
                                            <p>MySQL</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/Apache.png" alt="">
                                            <p>Apache</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/Firebase.png" alt="">
                                            <p>Firebase</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/sqlite-icon.png" alt="">
                                            <p>SQLite</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/oracle-icon.png" alt="">
                                            <p>Oracle</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/microsoft-sql-server-icon.png" alt="">
                                            <p>Microsoft SQL Server</p>
                                        </div>
                                    </div>
                                    <div class="row pt-5">
                                        <div class="col-md-2">
                                            <img src="frontend/images/amazon-dynamodb-icon.png" alt="">
                                            <p>Amazon DynamoDB</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/mongodb-icon.png" alt="">
                                            <p>MongoDB</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/apache-couchdb-icon.png" alt="">
                                            <p>Apache CouchDB</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/postgresql-icon.png" alt="">
                                            <p>PostgreSQL </p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/couchbase-icon.png" alt="">
                                            <p>Couchbase </p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/ravendb-icon.png" alt="">
                                            <p>RavenDB </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="CMS" role="tabpanel" aria-labelledby="CMS-tab" class="tab-pane fade px-4 py-5">
                                    <div class="row pt-5">
                                        <div class="col-md-5">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/wordpress-icon.webp" alt="">
                                            <p>WordPress</p>
                                        </div>
                                        <div class="col-md-5">
                                        </div>
                                    </div>
                                </div>
                                <div id="Tools" role="tabpanel" aria-labelledby="Tools-tab" class="tab-pane fade px-4 py-5">
                                    <div class="row pt-5">
                                        <div class="col-md-2">
                                            <img src="frontend/images/3DS-Max.webp" alt="">
                                            <p>3DS Max</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/Autodesk-Maya.webp" alt="">
                                            <p>Autodesk Maya</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/Blender.webp" alt="">
                                            <p>Blender</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/Motion-Builder.webp" alt="">
                                            <p>Motion Builder</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/sublime-text-technology-icon-75x75-1.webp" alt="">
                                            <p>Sublime Text</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/xampp-technology-icon-75x75-1.webp" alt="">
                                            <p>XAMPP</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="Integrations" role="tabpanel" aria-labelledby="Integrations-tab" class="tab-pane fade px-4 py-5">
                                    <div class="row pt-5">
                                        <div class="col-md-2">
                                            <img src="frontend/images/Firebase (1).png" alt="">
                                            <p>Firebase</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/Retrofit.png" alt="">
                                            <p>Retrofit</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/RapidPro.png" alt="">
                                            <p>RapidPro</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/MVVM.png" alt="">
                                            <p>MVVM</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/PortWallet.png" alt="">
                                            <p>PortWallet</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/angaza-technology-icon.png" alt="">
                                            <p>Angaza</p>
                                        </div>
                                    </div>
                                    <div class="row pt-5">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/hubspot-icon.png" alt="">
                                            <p>HubSpot</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/PortWallet (1).png" alt="">
                                            <p>Xero</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/bkash-technology-logo.png" alt="">
                                            <p>bKash </p>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                </div>
                                <div id="Cloud" role="tabpanel" aria-labelledby="Cloud-tab" class="tab-pane fade px-4 py-5">
                                    <div class="row pt-5">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/aws-technology-icon-75x75-1.webp" alt="">
                                            <p>AWS</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/amazon-ec2-technology-icon-75x75-1.webp" alt="">
                                            <p>Amazon EC2</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/amazon-s3-technology-icon-75x75-1.webp" alt="">
                                            <p>Amazon S3</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/amazon-route-53-technology-icon-75x75-1.webp" alt="">
                                            <p>Amazon Route 53</p>
                                        </div>
                                        <div class="col-md-2">

                                        </div>
                                    </div>

                                </div>
                                <div id="DevOps" role="tabpanel" aria-labelledby="DevOps-tab" class="tab-pane fade px-4 py-5">
                                    <div class="row pt-5">
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/github-technology-logo-75x75-1.webp" alt="">
                                            <p>GitHub</p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="frontend/images/cicd-technology-icon-75x75-1.webp" alt="">
                                            <p> CI/CD</p>
                                        </div>
                                        <div class="col-md-4">

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
<!--================================top_our_technologies section end here=======================-->

<!--================================top_future_focused section start here=======================-->
<section class="top_future_focused">
    <div class="container">
        <div class="row">
            <div class="top_future_focused_txt pb-5">
                <h3>Dive into SEO Expate's Forward-Thinking Offerings</h3>
                <p>Choose the service you want to explore from the available options. We constantly work to save you
                    time by providing you with the precise services you require to accomplish your objective.</p>
            </div>
            <div class="col-md-4">
                <div class="top_future_focused_service">
                    <a href="#" class="d-flex justify-content-between">
                        <p>Graphic Design</p>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top_future_focused_service">
                    <a href="#" class="d-flex justify-content-between">
                        <p>Digital Marketing</p>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top_future_focused_service">
                    <a href="#" class="d-flex justify-content-between">
                        <p>SEO</p>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-4">
                <div class="top_future_focused_service">
                    <a href="#" class="d-flex justify-content-between">
                        <p>QA (Quality Assurance)</p>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top_future_focused_service">
                    <a href="#" class="d-flex justify-content-between">
                        <p>Mobile App Development</p>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top_future_focused_service">
                    <a href="#" class="d-flex justify-content-between">
                        <p>Web Design & Development</p>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-4">
                <div class="top_future_focused_service">
                    <a href="#" class="d-flex justify-content-between">
                        <p>Content Writing</p>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top_future_focused_service">
                    <a href="#" class="d-flex justify-content-between">
                        <p>Software Development</p>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top_future_focused_service">
                    <a href="#" class="d-flex justify-content-between">
                        <p>IoT Development</p>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================================top_future_focused section end here=======================-->

<!--================================top_design_strategy section start here=======================-->
<section class="top_design_strategy">
    <div class="container">
        <div class="row">
            <div class="top_design_strategy_txt">
                <h3>Plan-Execute-Monitor: Focuses on planning, execution, and monitoring project progress.</h3>
                <p>Plan-Execute-Monitor, or Mode 1-2-3, is how SEO Expate Bangladesh Ltd operates. Anything nicely
                    conceived, in our opinion, may be developed astonishingly. Our staff handles every aspect of
                    development and deployment, guaranteeing a longer product life to increase sales.</p>
            </div>
            <div class="top_design_strategy_Design d-flex pt-5">
                <div class="design_icon">
                    <p>1</p>
                </div>
                <div class="design_icon_txt">
                    <h6>Plan :</h6>
                    <p>What goals do you have for your project? Break down the project into manageable tasks and phases.
                        Determine the time, budget, and personnel needed. Anticipate potential challenges and develop
                        solutions. Define how stakeholders will be informed and involved.</p>
                </div>
            </div>
            <div class="top_design_strategy_Design d-flex pt-5">
                <div class="design_icon">
                    <p>1</p>
                </div>
                <div class="design_icon_txt">
                    <h6>Execute :</h6>
                    <p>Assign tasks, manage resources, and track progress. Follow established procedures and protocols
                        also Ensure quality and consistency. Be adaptable and make necessary changes to the strategy.
                        Ensure that clients are informed and engaged. Proactively address challenges and keep them under
                        control.</p>
                </div>
            </div>
            <div class="top_design_strategy_Design d-flex pt-5">
                <div class="design_icon">
                    <p>1</p>
                </div>
                <div class="design_icon_txt">
                    <h6>Monitor :</h6>
                    <p>Track progress against the plan and measure key performance indicators (KPIs). Analyze data and
                        identify trends. Look for potential issues or areas for improvement. Evaluate the effectiveness
                        of the plan. Share progress, successes, and challenges. Capture lessons learned for future
                        projects.</p>
                </div>
            </div>
            <div class="top-body-button pt-5 text-center">
                <a type="button" href="#">See How We Work</a>
            </div>
        </div>
    </div>
</section>

<!--================================top_design_strategy section end here=======================-->

<!--================================top_award_winning section start here=======================-->
<section class="top_award_winning">
    <div class="container">
        <div class="row">
            <div class="top_award_winning_txt">
                <h3>Recognized IT Services Provider Since 2010</h3>
            </div>
            <div class="top_award_winning_bannar pb-5">
                <img src="frontend/images/awardd.png" alt="image">
            </div>
            <div class="col-md-6">
                <p>SEO Expate Bangladesh Ltd. is one of the most reputable and well-known names in the information
                    technology industry. Also, we are the most comprehensive organization that can help you with your
                    web development, digital marketing work, SEO strategy services and the list goes on. Throughout
                    Every Touchpoint or Interaction, We are Focused. </p>
                <p>Everything we create and execute has a significant impact. We design software for enterprises that is
                    user-friendly and also you can get one of the greatest user app experiences with us.</p>
            </div>
            <div class="col-md-6">
                <p>Building and managing websites and web applications is one of our primary jobs. To create excellent
                    internet experiences, our web developers ensure functionality, usability, and visual appeal. </p>
                <p>SEO Expate Bangladesh Ltd. has created and is now working on numerous initiatives. Also, have many
                    upcoming mega projects on hand. Therefore, we will be achieving some more gratuity in the upcoming
                    future.</p>
            </div>
            <div class="top-body-button pt-5 text-center">
                <a type="button" href="#">Read Our History</a>
            </div>
        </div>
    </div>
</section>
<!--================================top_award_winning section end here=======================-->

<!--================================top_ready_start section start here=======================-->
<section class="top_ready_start">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top_ready_start_txt">
                    <h3>Ready to Start <br>the Journey with SEO <br>Expate Bangladesh Ltd?</h3>
                    <h6>How can we help you?</h6>
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

<?php

$main_content = ob_get_clean();
include './layouts/app.php';
?>