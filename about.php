<?php
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Title" content="Seo Expate Bangladesh LTD.">
    <meta name="description" content="Seo Expate Bangladesh LTD.">
    <meta name="keywords" content="seoebl, seoexpate, Seo Expate Bangladesh LTD.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <meta property="og:title" content="Home - IT Services, Technology Solutions">

    <?php include('./includes/style.php') ?>

    <div class="gtranslate_wrapper"></div>
    <script>
    window.gtranslateSettings = {
        "default_language": "en",
        "native_language_names": true,
        "detect_browser_language": true,
        "url_structure": "sub_domain",
        "languages": ["en", "fr", "de", "it", "es"],
        "wrapper_selector": ".gtranslate_wrapper",
        "horizontal_position": "left",
        "vertical_position": "bottom"
    }
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/lc.js" defer></script>

</head>
<body>
<!--================================top-body section start here=======================-->
<section class="top-body top_about_us"
    style="background-image: url(frontend/images/2.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover;  margin-top: 60px; ">
    <div class="container ">
        <div class="row">
            <div class="top_about_us_txt pb-5" style="z-index:500;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a href="/" class="text-light fw-bold">Home</a></li>
                        <li class="breadcrumb-item active text-light fw-bold" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12" style="z-index:500;">
                <div class="top_body_txt_part">
                    <h2>Expert Solutions </h2>
                    <h1>for Your Digital Needs</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================top-body section end here=======================-->

<!--================================Providing_Solutions section start here=======================-->
<section class="Providing_Solutions">
    <div class="container">
        <div class="row">
            <div class="Providing_Solutions_txt">
                <p>SEO Expate was established to help entrepreneurs stay focused on their business without the
                    distraction of IT issues. Besides, our diversified IT services are your secret weapon to help keep
                    your business running smoothly and securely. <a href="/" class="text-success">SEO Expate</a> has
                    made a name for itself as a trusted IT company that offers competitive pricing to large and small
                    business communities.</p>
                <h3 class="pt-2 pb-2">We are Unleashing the Power of Technology</h3>
                <div class="top-body-button pt-3">
                    <a type="button" href="contact.php">Let's Talk 😄</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================Providing_Solutions section end here=======================-->

<!--================================our_promise section start here=======================-->
<div class="our_mission our_promise" style="background: #F5F5F5;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4><span> Who</span> We Are</h4>
                <p style="text-align: justify;">We are SEO Expate Bangladesh Ltd. a multinational IT service and
                    technology solution provider company. We've been designing, developing, and marketing websites with
                    a results-oriented focus since 2013. <a href="/" class="text-success">SEO Expate</a> is an
                    ISO-certified global service provider and we are successfully exploring various branches of the IT
                    sector. Additionally, we specialize in making complex IT outsourcing projects run smoothly and
                    efficiently. Our operational excellence, technical assistance, and other supporting staff are the
                    artificers of the whole work. Moreover, our team of experts handles everything from technical tasks
                    to daily operations sincerely. Therefore, SEO-EBL is your ideal companion in every department. </p>
                <div class="top-body-button pt-3">
                    <a type="button" href="history.php">See our history → </a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="frontend/images/Screenshot.png" alt="image">
            </div>
        </div>
    </div>
</div>
<!--================================our_promise section end here=======================-->

<!--================================our_promise section start here=======================-->
<div class="our_mission our_promise">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="frontend/images/1.jpg" alt="image">
            </div>
            <div class="col-md-6">
                <h5><span> What </span> We Do</h5>
                <p style="text-align: justify;">SEO Expate is passionate about empowering businesses with the power of
                    technology. Our team of passionate experts in an IT company is dedicated to using modern technology
                    to solve modern-day problems. Since 2013, we've been helping businesses of all sizes across various
                    industries achieve their goals. </p>
                <div class="top-body-button pt-2">
                    <a type="button" href="contact.php">Know More About Us</a>
                </div>
            </div>
            <div class="col-12">
                <p>We provide Digital marketing, SEO, Web development, Mobile app development, Software development,
                    Graphics design, Content Writing, and many more services. Also, we have a training program where we
                    work to employ young people through freelancing.<a href="#coreteam" class="text-success">Our
                        team</a> holds the industry's leading certifications, ensuring you receive the best quality
                    service and support. Whether you're a startup or a large enterprise, we offer flexible and
                    customized solutions that will help your business. Additionally, we offer expert guidance on how to
                    utilize technology properly to maximize your business potential.</p>
            </div>
        </div>
    </div>
</div>
<!--================================our_promise section end here=======================-->

<!--================================top_awards section start here=======================-->
<section class="top_awards about_awards" style="background: #000;">
    <div class="container">
        <div class="row">
            <div class="slider pt-5">
                <div class="owl-carousel">
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="frontend/images/slide1.jpg" alt="award" description="award">
                        </div>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="frontend/images/slide2.jpg" alt="award" description="award">
                        </div>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="frontend/images/slide3.jpg" alt="award" description="award">
                        </div>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="frontend/images/slide4.jpg" alt="award" description="award">
                        </div>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="frontend/images/slide5.jpg" alt="award" description="award">
                        </div>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="frontend/images/slide6.jpg" alt="award" description="award">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================top_awards section end here=======================-->

<!--================================top_body_explore_tab  section start here=======================-->
<section class="top_body_explore_tab">
    <div class="container">
        <div class="row">
            <div class="explore_txt">
                <h5>Create a Better Tomorrow with</h5>
                <h6>Modern Technology</h6>
                <p>The world is in constant change, and modern technology is the engine driving us forward. In fact, by
                    the devices in our pockets, the vast networks connecting us globally. Thus, modern technology opens
                    immense potential to create a better tomorrow. For that, to get the best outcome we have to utilize
                    this technology in all aspects of our life. SEO Expate is giving you various types of IT support to
                    make your institute compatible with the digital era. Here, SEO Expate Bangladesh Ltd provides
                    Software Development, Mobile App Development, Digital Marketing, Graphics Design, etc. services. The
                    future we want to create depends on the choices we make today. So, give us a chance to serve you
                    with the best technology for your organization.</p>
            </div>
            <div class="explore_tabs">
                <div class="container py-5">
                    <div class="row mb-5">
                        <div class="p-5 bg-white rounded shadow mb-5 ptunsetrep"
                            style="border-left:5px solid var(--secondary-text-color); border-right:5px solid var(--secondary-text-color);">
                            <!-- Rounded tabs -->
                            <div class="row">
                                <div class="col-md-2 border-end">
                                    <ul id="myTab" role="tablist"
                                        class="nav nav-tabs nav-pills flex-column text-center border-0 ">
                                        <li class="nav-item flex-sm-fill" role="presentation">
                                            <a id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal"
                                                type="button" href="#home" role="tab" aria-controls="personal"
                                                aria-selected="true"
                                                class="nav-link border-0  font-weight-bold active text-left"> Our
                                                Mission </a>
                                        </li>
                                        <li class="nav-item flex-sm-fill" role="presentation">
                                            <a id="employment-tab" data-bs-toggle="tab" data-bs-target="#employment"
                                                href="#employment" role="tab" aria-controls="employment"
                                                aria-selected="false"
                                                class="nav-link border-0  font-weight-bold text-left"> Our Vision</a>
                                        </li>
                                        <li class="nav-item flex-sm-fill" role="presentation">
                                            <a id="Services-tab" data-bs-toggle="tab" data-bs-target="#Services"
                                                href="#Services" role="tab" aria-controls="Services"
                                                aria-selected="false"
                                                class="nav-link border-0  font-weight-bold text-left">We Value</a>
                                        </li>
                                        <li class="nav-item flex-sm-fill" role="presentation">
                                            <a id="Servicess-tab" data-bs-toggle="tab" data-bs-target="#Servicess"
                                                href="#Servicess" role="tab" aria-controls="Servicess"
                                                aria-selected="false"
                                                class="nav-link border-0  font-weight-bold text-left">We Promise</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-10">
                                    <div class="tab-content" id="myTabContent">
                                        <div id="personal" role="tabpanel" aria-labelledby="personal-tab"
                                            class="tab-pane fade px-4 py-5 show active">
                                            <p class="text-muted mb-0">We are here to provide services with the greatest
                                                technologies available. Not to mention, we will do it more creatively
                                                and productively. Hence, consider the most efficient use of technology
                                                to expand the possibilities of your organization. SEO Expate Bangladesh
                                                Ltd. is one the fastest-growing IT companies in Bangladesh. We want to
                                                reach every corner of the country with branches in every district.
                                                Therefore, we are working hard to make our dream successful.</p>
                                        </div>
                                        <div id="employment" role="tabpanel" aria-labelledby="employment-tab"
                                            class="tab-pane fade px-4 py-5">
                                            <p class="text-muted mb-0">SEO Expate Bangladesh Ltd. started with the
                                                vision to support individuals and organizations in their prospective
                                                departments. We are determined to provide the best solutions you are
                                                required for your journey to success. Also, we have a vision to produce
                                                more than 50000 freelancers to make the youth asset for the country. In
                                                addition, we have a dream to play a significant role in the global IT
                                                industry.</p>

                                        </div>
                                        <div id="Services" role="tabpanel" aria-labelledby="Services-tab"
                                            class="tab-pane fade px-4 py-5">
                                            <p class="text-muted mb-0">1. Customer Obsession <br>2. Eagerness to Invent
                                                <br>3. Long Term Thinking <br>4. Operation Excellence </p>
                                        </div>
                                        <div id="Servicess" role="tabpanel" aria-labelledby="Servicess-tab"
                                            class="tab-pane fade px-4 py-5">
                                            <p class="text-muted mb-0">It is obvious that choosing an IT company and
                                                investing there for your business is difficult. For that, to reduce this
                                                complexity we make some promises to our clients. We will always protect
                                                your data and systems from any kind of cyberattacks. We will provide a
                                                team of experienced IT professionals with the skills to solve your
                                                problems. Besides, our solutions will fit your budget and provide a good
                                                return on investment (ROI). Also, through regular guidance and support,
                                                we will ensure your technology investments are profitable. SEO Expate is
                                                staying ahead of the latest technology trends and offering top-quality
                                                solutions. Finally, we are frequently organizing your IT infrastructure
                                                to improve efficiency.</p>
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

<!--================================Core_Team section start here=======================-->
<section class="Core_Team" id="coreteam">
    <div class="container">
        <div class="row">
            <div class="Core_Team_txt pb-5">
                <h5>Meet The <span>Core Team</span></h5>
                <h6 class="pt-2">Experience you can trust.</h6>
            </div>
            <div class="Core_Team_members">
                <div class="container mt-2">
                    <div class="row">
                        <?php
                        $query = "SELECT * FROM teams WHERE type='core_team' ORDER BY order_by ASC";
                        $result = $conn->query($query);
                        foreach ($result as $team) {

                            $imagePath = $team['image'];
                            $imageName = basename($imagePath);
                            $newImagePath = 'uploads/' . $imageName;
                        ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="card card-block">
                                <img src="<?php echo $newImagePath ?>" alt="<?php echo $team['alt_tag']; ?>"
                                    description="<?php echo strip_tags( $team['alt_description']); ?>"
                                    class="img-thumbnail">
                                <div class="card-body">
                                    <h5 class="card-title "><?php echo $team['name']; ?></h5>
                                    <p class="card-text"><?php echo $team['designation']; ?></p>
                                    <div class="d-flex gap-2" style=" justify-content:center;">
                                        <a href="<?php echo $team['website'] ?>"><i class="fa-solid fa-globe"
                                                alt="<?php echo $team['alt_tag']; ?>"
                                                description="<?php echo $team['alt_description']; ?>"></i></a>
                                        <a href="<?php echo $team['facebook'] ?>"><i class="fa-brands fa-facebook"
                                                alt="<?php echo $team['alt_tag']; ?>"
                                                description="<?php echo $team['alt_description']; ?>"></i></a>
                                        <a href="<?php echo $team['linkedin'] ?>"><i class="fa-brands fa-linkedin"
                                                alt="<?php echo $team['alt_tag']; ?>"
                                                description="<?php echo $team['alt_description']; ?>"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================Core_Team section end here=======================-->

<!--================================Core_Team section start here=======================-->
<section class="Core_Team" style="background: unset;">
    <div class="container">
        <div class="row">
            <div class="Core_Team_txt pb-5">
                <h5>Honorable <span>Advisor</span></h5>
            </div>
            <div class="Core_Team_members">
                <div class="container mt-2">
                    <div class="row">
                        <?php
                        $query = "SELECT * FROM teams WHERE type='advisor' ORDER BY order_by ASC";
                        $result = $conn->query($query);
                        foreach ($result as $advisor) {

                            $imagePath = $advisor['image'];
                            $imageName = basename($imagePath);
                            $newImagePath = 'uploads/' . $imageName;
                        ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="card card-block">
                                <img src="<?php echo $newImagePath ?>" alt="<?php echo $advisor['alt_tag'] ?>"
                                    description="<?php echo strip_tags($advisor['alt_description']) ?>"
                                    class="img-thumbnail">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $advisor['name'] ?></h5>
                                    <p class="card-text"><?php echo $advisor['designation'] ?></p>
                                    <div class="d-flex gap-2" style=" justify-content:center;">
                                        <a href="<?php echo $advisor['website'] ?>">
                                            <i class="fa-solid fa-globe" alt="<?php echo $advisor['alt_tag'] ?>"
                                                description="<?php echo $team['alt_description']; ?>"></i>
                                        </a>
                                        <a href="<?php echo $advisor['facebook'] ?>"><i class="fa-brands fa-facebook"
                                                alt="<?php echo $advisor['alt_tag'] ?>"
                                                description="<?php echo $team['alt_description']; ?>"></i></a>
                                        <a href="<?php echo $advisor['linkedin'] ?>"><i class="fa-brands fa-linkedin"
                                                alt="<?php echo $advisor['alt_tag'] ?>"
                                                description="<?php echo $team['alt_description']; ?>"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================Core_Team section end here=======================-->

<!--================================Our_Branches section start here=======================-->
<section class="Our_Branches Our-Branches">
    <div class="container">
        <div class="row">
            <div class="Our_Branches_txt pb-5">
                <h6>Our Branches</h6>
            </div>
            <?php
            $i = 1;
            $qry = "SELECT * FROM branches ORDER BY id DESC";
            $result = mysqli_query($conn, $qry); // Utilizing mysqli_query() to execute the query

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $imagePath = $row['image'];
                    $imageName = basename($imagePath);
                    $newImagePath = 'pages/' . $imageName;
            ?>
            <div class="col-md-3 pb-5">
                <div class="card">
                    <img src="<?php echo $newImagePath; ?>" class="card-img-top" alt="<?php echo $row['alt_tag'] ?>"
                        description="<?php echo strip_tags($row['alt_description']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name'] ?></h5>
                        <p class="card-text"><?php echo $row['address'] ?></p>
                        <div><a href="branch.php?id=<?php echo $row['id'] ?>" class="text-success">View Location Map
                                →</a></div>
                        <div class="pt-2 "><a href="branch.php?id=<?php echo $row['id'] ?>" class="text-success">See
                                More →</a></div>
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
<!--================================Our_Branches section end here=======================-->

<!--================================top_awards section start here=======================-->
<section class="top_awards">
    <div class="container">
        <div class="row">
            <div class="top_awards_txt">
                <h6>Achievements and Recognitions</h6>
                <p>SEO Expate Bangladesh Ltd. is certified by ISO 9001 & 27001 and we are a trusted provider of digital
                    services. Besides, we are registered as a Joint Stock <a href="/" class="text-success">Company</a>.
                    In the year 2023, SEO Expate was awarded the ''Smart Bangladesh Award - 2023" by the government of
                    Bangladesh for its significant role in the IT sector. Also, we are members of BASIS (Bangladesh
                    Association of Software and Information Services), and BACCO (Bangladesh Association of Contact
                    Center & Outsourcing). </p>
            </div>
            <div class="slider pt-5">
                <div class="owl-carousel">
                    <?php
                    $i = 1;
                    $qry = "SELECT * FROM history_galleries WHERE image_type = 4 ORDER BY id DESC";
                    $result = mysqli_query($conn, $qry);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="<?php echo 'uploads/' . basename($row['image']); ?>"
                                alt="<?php echo $row['alt_tag'] ?>"
                                description="<?php echo strip_tags($row['alt_description']) ?>">
                        </div>
                        <h5 class="mb-0 text-center"><b>Winner</b></h5>
                        <p class="text-center p-4">Digital Bangladesh Award 2023 </p>
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

<!--================================Our_Departments section start here=======================-->
<section class="Our_Departments">
    <div class="container">
        <div class="row">
            <h6 class="pb-5 text-light">Our Departments</h6>
            <?php
            $query = "SELECT * FROM departments ORDER BY id ASC";
            $result = $conn->query($query);
            foreach ($result as $key => $department) {

                $imagePath = $department['image'];
                $imageName = basename($imagePath);
                $newImagePath = 'uploads/' . $imageName;
            ?>

            <div class="col-md-3 <?php if ($key > 3) {
                                            echo 'mt-4';
                                        } ?>">
                <a href="department.php"><img src="<?php echo $newImagePath ?>"
                        alt="<?php echo $department['alt_tag'] ?>"
                        description="<?php echo strip_tags($department['alt_description']) ?>"></a>
                <h5 class="text-light pt-3"><?php echo $department['name'] ?></h5>
            </div>
            <?php } ?>
        </div>

    </div>
</section>
<!--================================Our_Departments section end here=======================-->

<!--================================Our_Infrustructure section start here=======================-->
<section class="Our_Infrustructure Our_Departments">
    <div class="container">
        <div class="row">
            <div class="Our_Infrustructure_txt">
                <h6 class="text-center">Our Infrustructure</h6>
                <h6 class="text-center" style="color: var(--secondary-text-color);">Pleasant Work Environment</h6>
                <p class="text-justify pt-2">We strongly believe that the productivity of a team greatly depends on a
                    company culture. That's why we enable a positive work environment that increases creativity and
                    innovation. This leads to seamless design, production, and testing stages, ensuring we deliver
                    world-class technology solutions.</p>
            </div>
            <div class="Our_Infrustructure_img pt-3">
                <img src="frontend/images/infrustructureer-1024x490.jpg" alt="Our Infrustructure"
                    description="Our Infrustructure">
            </div>
            <div class="Our_Infrustructure_video pt-3">
                <h3>Watch Video:</h3>
                <iframe width="1250" height="703" src="https://www.youtube.com/embed/hItrynkfRiM"
                    title="ফ্রিল্যান্সিংয়ে জীবন বদলেছে মিজানুরের | DBC News Special" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<!--================================Our_Infrustructure section end here=======================-->

<!--================================core_services section start here=======================-->
<section class="Our_Departments core_services Our_Departments">
    <div class="container">
        <div class="row">
            <h6 class="pb-3 text-light">Core Service Areas</h6>
            <p class="text-light pb-4" style="text-align: justify;">SEO Expate delivers IT <a href="services.php"
                    class="text-success">services</a> and tech solutions and provides higher value to clients. Our
                service areas are Software Development, Mobile App Development, Digital Marketing, Graphics Design,
                Content Writing, and many more. Also, we have a freelancing training program that helps thousands of
                youth to build their career.</p>
            <div class="col-md-3">
                <a href="web-development.php"><img src="frontend/images/core-servicr.png" alt="Core Service Areas"
                        description="Core Service Areas"></a>
                <h5 class="text-light pt-3">Web Development</h5>
            </div>
            <div class="col-md-3">
                <a href="software-development.php"><img src="frontend/images/core-servicerter.png"
                        alt="Core Service Areas" description="Core Service Areas"></a>
                <h5 class="text-light pt-3">Software Development</h5>
            </div>
            <div class="col-md-3">
                <a href="app-development.php"><img src="frontend/images/core-service-areaer.png"
                        alt="Core Service Areas" description="Core Service Areas"></a>
                <h5 class="text-light pt-3">Mobile App Development</h5>
            </div>
            <div class="col-md-3">
                <a href="domain-hosting.php"><img src="frontend/images/core-servicer.png" alt="Core Service Areas"
                        description="Core Service Areas"></a>
                <h5 class="text-light pt-3">Domain & Hosting</h5>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-3">
                <a href="photo-editor.php"><img src="frontend/images/iot-expertiser.png" alt="Core Service Areas"
                        description="Core Service Areas"></a>
                <h5 class="text-light pt-3">Graphic Design</h5>
            </div>
            <div class="col-md-3">
                <a href="digital-marketing.php"><img src="frontend/images/core-service.png" alt="Core Service Areas"
                        description="Core Service Areas"></a>
                <h5 class="text-light pt-3">Digital Marketing</h5>
            </div>
            <div class="col-md-3">
                <a href="seo-service.php"><img src="frontend/images/core-service-areater.png" alt="Core Service Areas"
                        description="Core Service Areas"></a>
                <h5 class="text-light pt-3">SEO</h5>
            </div>
            <div class="col-md-3">
                <a href="content-writing.php"><img src="frontend/images/core-service-arear.png" alt="Core Service Areas"
                        description="Core Service Areas"></a>
                <h5 class="text-light pt-3">Content Writing</h5>
            </div>
        </div>
        <div class="top-body-button pt-5">
            <a type="button" href="services.php">See More Services</a>
        </div>
    </div>
</section>
<!--================================core_services section end here=======================-->

<!--================================Our_Engagement section start here=======================-->
<section class="Our_Departments Our_Engagement">
    <div class="container">
        <div class="row">
            <h6 class="pb-3">Our Engagement Models</h6>
            <p class=" pb-4" style="text-align: justify;">We have a different engagement model precisely created for <a
                    href="services.php" class="text-success">our services</a>. Therefore, with years of experience, we
                develop these models to guarantee top-quality performance, exceptional functionality, and impressive
                efficiency for your business.</p>
            <div class="col-md-4">
                <img src="frontend/images/slide4.jpg" alt="Our Engagement Models" description="Our Engagement Models">
                <h5 class=" pt-3">Agile Approach</h5>
                <hr>
                <p>The Agile approach allows for changes to be made throughout the development process. By breaking down
                    projects into smaller, manageable chunks, Agile allows for faster development cycles. Also, this
                    reduces the risk of major problems arising later in the project.</p>
            </div>
            <div class="col-md-4">
                <img src="frontend/images/Manage Every Part of Your IT Operation.jpg" alt="Our Engagement Models"
                    description="Our Engagement Models">
                <h5 class=" pt-3">Dedicated Team</h5>
                <hr>
                <p>Our dedicated teams provide quality services, accelerate projects, and make the best use of
                    resources. This allows you to expand your capacity and access specific skill sets to tackle
                    difficult projects.</p>
            </div>
            <div class="col-md-4">
                <img src="frontend/images/Having A Proactive and Proficient Team.jpg" alt="Our Engagement Models"
                    description="Our Engagement Models">
                <h5 class=" pt-3">Staff Augmentation</h5>
                <hr>
                <p>SEO Expate uses this method to find the exact expertise we need for a specific project. We can
                    quickly adjust our team size based on project needs.</p>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-6">
                <img src="frontend/images/Speeding Up Your Business's Success.JPG" alt="Our Engagement Models"
                    description="Our Engagement Models">
                <h5 class=" pt-3">Hourly</h5>
                <hr>
                <p>We encourage the hourly work model because it gives greater flexibility in scheduling. Besides, we
                    can gain experience in different industries and with diverse teams by working on hourly projects.
                </p>
            </div>
            <div class="col-md-6">
                <img src="frontend/images/Having A Proactive and Proficient Team.jpg" alt="Our Engagement Models"
                    description="Our Engagement Models">
                <h5 class=" pt-3">Managed Service</h5>
                <hr>
                <p>We will manage your business remotely through this engagement model. This service includes managing
                    network, application, and infrastructure for security and many other operations.</p>
            </div>
        </div>
        <!-- <div class="top-body-button pt-5">
                <a type="button" href="contact.php">Find Out More</a>
            </div> -->
    </div>
</section>
<!--================================Our_Engagement section end here=======================-->

<!--================================Our_Culture section start here=======================-->
<section class="Events_SEO ">
    <div class="container">
        <div class="row">
            <div class="Events_SEO_txt">
                <p class="ptag">Our Culture</p>
                <h6 class="pt-2 pb-5">SEO Expate ensures a good cultural atmosphere for the employees. It encourages
                    employees' creativity and also helps us to grow our businesses.</h6>
            </div>
            <div>
                <div class=" container">
                    <div class="row">
                        <?php

                        $blogQuery = "SELECT blogs.*, blog_categories.name as category_name
                                        FROM blogs 
                                        LEFT JOIN blog_categories ON blogs.blog_category_id = blog_categories.id
                                        WHERE blog_category_id = 4
                                        ORDER BY blogs.id DESC";

                        $blogs = $conn->query($blogQuery);
                        foreach ($blogs as $blog) {

                            $imagePath = $blog['image'];
                            $imageName = basename($imagePath);
                            $newImagePath = 'uploads/' . $imageName;
                        ?>
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card" style="background: #00000091;">
                                <div class="bg-image hover-zoom ">
                                    <img src="<?php echo $newImagePath ?>" alt="<?php echo $blog['alt_tag'] ?>"
                                        description="<?php echo strip_tags($blog['alt_description']) ?>"
                                        class="w-100" />
                                    <a href="blog-details.php?id=<?php echo $blog['id'] ?>">
                                        <div class="mask">
                                            <div class="d-flex justify-content-start align-items-end h-100">
                                                <h5><span
                                                        class="badge bg-success ms-2"><?php echo $blog['category_name'] ?></span>
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="blog-details.php?=" class="text-reset">
                                        <h5 class="card-title mb-3 text-light"><?php echo $blog['title'] ?></h5>
                                    </a>
                                    <a href="blog-details.php?id=<?php echo $blog['id'] ?>" class="text-reset">
                                        <p class="text-danger">Read Insight →</p>
                                        <p>&nbsp</p>
                                        <p>&nbsp</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================Our_Culture section end here=======================-->

<!--================================Our_Culture section start here=======================-->
<section class="Events_SEO Our_Culturee">
    <div class="container">
        <div class="row">
            <div class="Events_SEO_txt pb-5">
                <p class="text-dark ptag">Corporate social responsibility (CSR) Initiatives by SEO Expate</p>
                <p>Managing Corporate Social Responsibility (CSR) is not only crucial for the company but also important
                    for social security. We believe that established businesses have a responsibility to contribute to
                    the unprivileged people of the community. That's why Corporate Social Responsibility (CSR) isn't
                    just a show-off at SEO Expate, it's a core thread in our company culture.</p>
            </div>
            <div>
                <div class=" container">
                    <div class="row">
                        <?php

                        $blogQuery = "SELECT blogs.*, blog_categories.name as category_name
                                        FROM blogs 
                                        LEFT JOIN blog_categories ON blogs.blog_category_id = blog_categories.id
                                        WHERE blog_category_id = 5
                                        ORDER BY blogs.id DESC";

                        $blogs = $conn->query($blogQuery);
                        foreach ($blogs as $csr) {

                            $imagePath = $csr['image'];
                            $imageName = basename($imagePath);
                            $newImagePath = 'uploads/' . $imageName;
                        ?>
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card" style="background: #00000091;">
                                <div class="bg-image hover-zoom ">
                                    <img src="<?php echo  $newImagePath ?>" alt="<?php echo $csr['alt_tag'] ?>"
                                        description="<?php echo strip_tags($csr['alt_description']) ?>" class="w-100" />
                                    <a href="blog-details.php?id=<?php echo $csr['id'] ?>">
                                        <div class="mask">
                                            <div class="d-flex justify-content-start align-items-end h-100">
                                                <h5><span
                                                        class="badge bg-success ms-2"><?php echo $csr['category_name'] ?? '' ?></span>
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="blog-details.php" class="text-reset">
                                        <h5 class="card-title mb-3 text-light"><?php echo $csr['title'] ?></h5>
                                    </a>
                                    <a href="blog-details.php?id=<?php echo $csr['id'] ?>" class="text-reset">
                                        <p class="text-danger">Read Insight →</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================Our_Culture section end here=======================-->

<!--================================Events_SEO section start here=======================-->
<section class="Events_SEO">
    <div class="container">
        <div class="row">
            <div class="Events_SEO_txt">
                <p class="ptag">Events of SEO Expate</p>
                <h6 class="pt-2 pb-5">Explore successful events organized and participated by SEO Expate Bangladesh Ltd!
                </h6>
            </div>
            <div>
                <div class=" container">
                    <div class="row">
                        <?php

                        $blogQuery = "SELECT blogs.*, blog_categories.name as category_name
                                        FROM blogs 
                                        LEFT JOIN blog_categories ON blogs.blog_category_id = blog_categories.id
                                        WHERE blog_category_id = 6
                                        ORDER BY blogs.id DESC";

                        $blogs = $conn->query($blogQuery);
                        foreach ($blogs as $event) {

                            $imagePath = $event['image'];
                            $imageName = basename($imagePath);
                            $newImagePath = 'uploads/' . $imageName;
                        ?>
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card" style="background: #00000091;">
                                <div class="bg-image hover-zoom ">
                                    <img src="<?php echo $newImagePath ?>" alt="<?php echo $event['alt_tag'] ?>"
                                        description="<?php echo strip_tags($event['alt_description']) ?>"
                                        class="w-100" />
                                    <a href="blog-details.php?id=<?php echo $event['id'] ?>">
                                        <div class="mask">
                                            <div class="d-flex justify-content-start align-items-end h-100">
                                                <h5><span
                                                        class="badge bg-success ms-2"><?php $event['category_name'] ?></span>
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="blog-details.php" class="text-reset">
                                        <h5 class="card-title mb-3 text-light"><?php echo $event['title'] ?></h5>
                                    </a>
                                    <a href="blog-details.php?id=<?php echo $event['id'] ?>" class="text-reset">
                                        <p class="text-danger">Read Insight →</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================Events_SEO section end here=======================-->

<!--================================top_featured section start here=======================-->
<section class="top_featured our_mission">
    <div class="container">
        <div class="row">
            <div class="top_featured_txt">
                <h5 class="pb-3">We're Highlighted On</h5>
                <p>SEO Expate Bangladesh Ltd is a national powerhouse and global player in IT <a href="services.php"
                        class="text-success"> services</a> and technology solutions. Our innovative works have been
                    featured in multiple TV channels, Newspapers, Magazines, and other popular platforms. This
                    recognition boosts our passion to keep innovating.</p>
            </div>
            <div class="slider pt-5">
                <div class="owl-carousel">
                    <?php
                    $i = 1;
                    $qry = "SELECT * FROM history_galleries WHERE image_type = 3 ORDER BY id DESC";
                    $result = mysqli_query($conn, $qry); // Utilizing mysqli_query() to execute the query

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $imagePath = $row['image'];
                            $imageName = basename($imagePath);
                            $newImagePath = 'uploads/' . $imageName;
                    ?>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="<?php echo $newImagePath; ?>" alt="<?php echo $row['alt_tag'] ?>"
                                description="<?php echo strip_tags($row['alt_description']) ?>">
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
                            <div
                                class=" bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image">
                                    <img src="frontend/images/mukto-sokal.png" alt="We're Highlighted On"
                                        description="We're Highlighted On">
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div
                                class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image">
                                    <img src="frontend/images/6578bb0f9469d.png" alt="We're Highlighted On"
                                        description="We're Highlighted On">
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div
                                class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image">
                                    <img src="frontend/images/logo-fb.png" alt="We're Highlighted On"
                                        description="We're Highlighted On">
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div
                                class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image">
                                    <img src="frontend/images/loggo.png" alt="We're Highlighted On"
                                        description="We're Highlighted On">
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div
                                class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image">
                                    <img src="frontend/images/bogura.png" alt="We're Highlighted On"
                                        description="We're Highlighted On">
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div
                                class=" bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image">
                                    <img src="frontend/images/jaijaidin.png" alt="We're Highlighted On"
                                        description="We're Highlighted On">
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div
                                class=" bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image">
                                    <img src="frontend/images/satmatha.png" alt="We're Highlighted On"
                                        description="We're Highlighted On">
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div
                                class=" bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image">
                                    <img src="frontend/images/mukto-sokal.png" alt="We're Highlighted On"
                                        description="We're Highlighted On">
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div
                                class=" bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image">
                                    <img src="frontend/images/daily-korotoya.png" alt="We're Highlighted On"
                                        description="We're Highlighted On">
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

<!--================================top-slider-part section start here=======================-->
<section class="top-slider-part">
    <div class="container ">
        <div class="row">
            <p class="ptag"><span>Our </span> Reliable Customers and Associates</p>
            <p>SEO Expate Bangladesh Ltd. takes great pride in collaborating with businesses, firms, service providers,
                corporations, government departments, and other organizations as a top information technology company.
                Here take a look at some of the top companies and institutions that SEO Expate Bangladesh Ltd. has
                already worked with.</p>
            <div class="col-12 pt-5">
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
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
                        <button type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide-to="<?php echo $index; ?>" <?php echo $active ? 'class="active"' : ''; ?>
                            aria-label="Slide <?php echo $index; ?>"></button>
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
                            <img src="<?php echo $newImagePath; ?>" class="d-block w-100"
                                alt="<?php echo $row['alt_tag'] ?>"
                                description="<?php echo strip_tags($row['alt_description']) ?>">
                        </div>
                        <?php
                            $active = false;
                        }
                        ?>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================top-slider-part section end here=======================-->

<!--================================Core_Values section start here=======================-->
<section class="Core_Values">
    <div class="container">
        <div class="row">
            <div class="Core_Values_txt pb-5">
                <h5 class="ptag">We’re Driven by <span>our Core Values</span></h5>
                <p>SEO Expate is one of the fastest-growing companies in the country. Besides, at the heart of our
                    success lies a determined commitment to our core values. Thus, these values guide us to tackle
                    challenges in every sector to deliver exceptional results for our clients.</p>
            </div>
            <div class="col-md-6">
                <div class="Core_Values_txt">
                    <strong>Customer Obsession:</strong>
                    <h6 class="pt-3 pb-3">Commitment, Quality, Success</h6>
                    <p>SEO Expate is obsessed with bringing success to clients. In addition, we always put our clients
                        first. Client needs are our 1st priority and we do everything to provide a better experience to
                        the clients. Whether it's making a sale, marketing our services, or providing ongoing support,
                        our main goal is to ensure our clients have a smooth and happy experience every step of the way.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="Core_Values_img pb-5 pt-3 ">
                    <img src="frontend/images/slide4.jpg" alt="We’re Driven by our Core Values"
                        description="We’re Driven by our Core Values" class="img-thumbnail">
                </div>
            </div>
        </div>
        <hr>
        <div class="row pt-4">
            <div class="col-md-6">
                <div class="Core_Values_img pb-5 pt-3">
                    <img src="frontend/images/seven.jpg" alt="We’re Driven by our Core Values"
                        description="We’re Driven by our Core Values" class="img-thumbnail">
                </div>
            </div>
            <div class="col-md-6">
                <div class="Core_Values_txt">
                    <strong>Eagerness to Invent:</strong>
                    <h6 class="pt-3 pb-3">Courage, Innovation, Growth</h6>
                    <p>We believe in going beyond simply listening to our clients. Also, We are a team of passionate
                        inventors, constantly pushing the boundaries to develop groundbreaking solutions that empower
                        your success. Besides, the innovations we create have a ripple effect, benefiting not only your
                        business but also your customers and the communities you serve. So, you can partner with SEO
                        Expate, and let's co-create the future together. Therefore, we will boost our inventive spirit,
                        and convert your ideas into real-world success. </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="row pt-4">
            <div class="col-md-6">
                <div class="Core_Values_txt">
                    <strong>Long Term Thinking:</strong>
                    <h6 class="pt-3 pb-3">Integrity, Sustainability, Outcome</h6>
                    <p>SEO Expate believes that technology is not just a tool, it's a powerful force for positive
                        change. Besides, we are a purpose-driven company with a desire to improve lives through
                        innovative solutions. In addition, our focus isn't just on immediate results. Moreover, we take
                        a long-term perspective, preparing sustainable technology that benefits not just our clients,
                        but society as a whole.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="Core_Values_img pb-5 pt-3">
                    <img src="frontend/images/four.jpg" alt="We’re Driven by our Core Values"
                        description="We’re Driven by our Core Values" class="img-thumbnail">
                </div>
            </div>
        </div>
        <hr>
        <div class="row pt-4">
            <div class="col-md-6">
                <div class="Core_Values_img pb-5 pt-3">
                    <img src="frontend/images/slide6.jpg" alt="We’re Driven by our Core Values"
                        description="We’re Driven by our Core Values" class="img-thumbnail">
                </div>
            </div>
            <div class="col-md-6">
                <div class="Core_Values_txt">
                    <strong>Operation Excellence:</strong>
                    <h6 class="pt-3 pb-3">Ownership, Collaboration, Process</h6>
                    <p>We know that a good workplace is the foundation for exceptional results. That's why we are
                        dedicated to continuous improvement, promoting a culture that empowers our team and boosts our
                        success. Moreover, we believe in ethical practices and hold ourselves to the highest standards
                        of integrity. Therefore, honesty and transparency form the foundation for everything we do. We
                        have a highly-skilled, motivated team dedicated to exceeding expectations. Thus, this ensures
                        premium client service and innovative solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================Core_Values section end here=======================-->

<!--================================top_our_clients section start here=======================-->
<section class="top_our_clients">
    <div class="container">
        <div class="row">
            <div class="top_our_clients_txt">
                <h5 class="pb-3 ">Featured on TV Channel</h5>
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
                            <iframe width="560" height="315" src="<?php echo $row['link']; ?>"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

<!--================================top_design_strategy section start here=======================-->
<section class="top_design_strategy" style=" background: var(--bg-secondary-color);">
    <div class="container">
        <div class="row">
            <div class="top_design_strategy_txt">
                <h5>How We Work with Clients</h5>
                <p>Every project is our passion project for that we work with our hearts and minds to turn your vision
                    into a success story. Also, we're passionate about making a real difference for our customers. It's
                    more than just achieving goals and we truly care about your business. Besides, we build strong,
                    lasting partnerships with our clients to understand your needs. SEO Expate offers exclusive and
                    dedicated support with a team that becomes an extension of yours. In addition, our proven mode
                    "1-2-3 Strategy" guarantees success at every step. Let's chat and see how we can turn your vision
                    into reality together. </p>
            </div>
            <div class="top_design_strategy_Design d-flex pt-5">
                <div class="design_icon">
                    <p>1</p>
                </div>
                <div class="design_icon_txt">
                    <h6>Design</h6>
                    <p>The first step of any project is to design the client's ideas accurately. Besides, beautiful
                        design makes your product stand out and empowers your brand.</p>
                </div>
            </div>
            <div class="top_design_strategy_Design d-flex pt-5">
                <div class="design_icon">
                    <p>1</p>
                </div>
                <div class="design_icon_txt">
                    <h6>Build</h6>
                    <p>SEO Expate combines digital transformation strategies with robust product engineering to build
                        anything you need.</p>
                </div>
            </div>
            <div class="top_design_strategy_Design d-flex pt-5">
                <div class="design_icon">
                    <p>1</p>
                </div>
                <div class="design_icon_txt">
                    <h6>Sustain</h6>
                    <p>Our managed services ensure your product stays optimized, customized, and flawlessly integrated.
                    </p>
                </div>
            </div>
            <div class="top-body-button pt-5 text-center">
                <a type="button" href="about.php">See How We Work</a>
            </div>
        </div>
    </div>
</section>

<!--================================top_design_strategy section end here=======================-->

<!--================================top_our_industries  section start here=======================-->
<section class="top_our_industries Fields_We_Cover top_our_clients" style="background: unset;">
    <div class="container">
        <div class="row">
            <div class="industries_txt">
                <h5 class="pb-3">Fields We Cover</h5>
                <p>Having been in the information technology services provider business for more than ten years, we have
                    finished several projects for our clients in almost every sector. Including the following items:</p>
            </div>
            <div class=" col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-network-wired" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Finance & Banking</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-dumpster-fire" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>E-commerce</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-door-open" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Telco</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-sign-hanging" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Real Estate</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-brands fa-accusoft" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Software</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-person-skiing-nordic" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Health & Fitness</p>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-wine-glass" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Food & Drink</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-music" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Music</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-hospital" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Medical</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-prescription-bottle-medical" alt="Fields We Cover"
                        description="Fields We Cover"></i>
                    <p>Pharmaceutical</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-gas-pump" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Automotive</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-user-graduate" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Education</p>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-cart-flatbed-suitcase" alt="Fields We Cover"
                        description="Fields We Cover"></i>
                    <p>Travel</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-person-through-window" alt="Fields We Cover"
                        description="Fields We Cover"></i>
                    <p>Entertainment</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-calendar-day" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Retail</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-fax" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Business</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-icons" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Photo & Video</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-id-card-clip" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Non-Profit</p>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-3 col-sm-6 col">
                <div class="industrie_serve">

                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-diagram-project" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Startup</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-newspaper" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>AR/VR</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col">
                <div class="industrie_serve">
                    <i class="fa-solid fa-couch" alt="Fields We Cover" description="Fields We Cover"></i>
                    <p>Furniture</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col">
                <div class="industrie_serve">

                </div>
            </div>
        </div>
    </div>
</section>
<!--================================top_our_industries section end here=======================-->

<!--================================certifid section start here=======================-->
<section class="we_certifid" style="">
    <div class="container">
        <div class="row">
            <h5 class="text-light text-center">We are Certified</h5>
            <hr>
            <div class="col-sm-2"></div>
            <div class="col-sm-2 pt-5">
                <img src="frontend/images/Logo_Certificate_of_Incorporation_w_11zon-1024x1024.png"
                    alt="We are Certified" description="We are Certified">
            </div>
            <div class="col-sm-2 pt-5 ">
                <img src="frontend/images/9001-iso.png" alt="We are Certified" description="We are Certified">
            </div>
            <div class="col-sm-2 pt-5 ">
                <img src="frontend/images/Untitled-2-01-1024x1024.png" alt="We are Certified"
                    description="We are Certified">
            </div>
            <div class="col-sm-2 pt-5 widthgrow">
                <img src="frontend/images/basis_logo_1.png" alt="We are Certified" description="We are Certified">
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row">
            <div class="col-sm-2 pt-5 widthgrow">
                <img src="frontend/images/230625112346-2103logo.png" alt="We are Certified"
                    description="We are Certified">
            </div>
            <div class="col-sm-2 pt-5 ">
                <img src="frontend/images/CMMI Logo PNG Vector (EPS) Free Download.jpg" alt="We are Certified"
                    description="We are Certified">
            </div>
            <div class="col-sm-3 pt-5 widthgrow">
                <img src="frontend/images/534868.png" alt="We are Certified" description="We are Certified">
            </div>
            <div class="col-sm-2 pt-5 widthgrow ">
                <img src="frontend/images/logo-landscape-272x97.png" alt="We are Certified"
                    description="We are Certified">
            </div>
            <div class="col-sm-3 pt-5 widthgrow">
                <img src="frontend/images/freelancer-bangladesh-logo.png" alt="We are Certified"
                    description="We are Certified">
            </div>
        </div>
    </div>
</section>
<!--================================certifid section end here=======================-->

<!--================================Thrive_Globally section start here=======================-->
<section class="Thrive_Globally">
    <div class="container">
        <div class="row">
            <div class="Thrive_Globally_txt">
                <h5>Our Geography</h5>
                <h6 class="pt-2 pb-2">We Thrive Globally</h6>
                <p>Experience the power of our technology solutions, designed to enhance the lives of global users. You
                    can find us and see where we are located and from where we operate. Explore our website to learn
                    more.</p>
            </div>
            <div class="thrive_img pb-5 pt-3">
                <img src="frontend/images/global-presencer-1024x490.png" alt="We Thrive Globally"
                    description="We Thrive Globally">
            </div>
            <div class="top-body-button pt-3">
                <a type="button" href="contact.php">See Our Offices</a>
            </div>
        </div>
    </div>
</section>
<!--================================Thrive_Globally section end here=======================-->

<!--================================Power_Technology section start here=======================-->
<section class="Power_Technology"
    style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat; background-position: center  center; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="Power_Technology_txt" style="z-index:500;">
                <h5>Let's Experience</h5>
                <h6 class="pt-2 pb-2">the Power of Technology</h6>
                <p>SEO Expate is your guide to the ultimate technology solutions. Embark on your journey today and
                    discover how we utilize updated tools to tackle your biggest challenges.</p>
                <div class="top-body-button pt-3">
                    <a type="button" href="contact.php">Start Your Journey with Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================Power_Technology section end here=======================-->

<!--================================Thrive_Globally section start here=======================-->
<section class="PAY_MENT" style="padding: 20px 0;">
    <div class="container">
        <div class="row">
            <div class="PAY_IMG">
                <img src="frontend/images/Payment-method-banner-image-1024x73.webp" alt="payment" description="payment"
                    width="100%">
            </div>
        </div>
    </div>
</section>
<!--================================Thrive_Globally section end here=======================-->

<?php

$main_content = ob_get_clean();
include './layouts/app.php';
?>