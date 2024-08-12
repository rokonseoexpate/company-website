<?php
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="Title" content="This is the my site">
  <meta name="description" content="This is the my site">
  <meta name="keywords" content="seoebl, seoexpate">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adobe / Freelancing Specialist</title>
  <meta property="og:title" content="Home - IT Services, Technology Solutions">

  <?php include('./includes/style.php') ?>



</head>

<body>
  <?php include "includes/navbar.php" ?>

  <?php include "includes/course-nav.php" ?>

  <!--================================top-body section start here=======================-->
  <section class="top-body app_development phpdevelopment" style="background-image: url(frontend/images/72d076db-72f4-4121-a467-0195035b7f60.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 20px;">
    <div class="container ">
      <div class="row">
        <div class="col-md-7 ecomresp" style="z-index:500; ">
          <div class="top_body_txt_part">
            <h1 class="marginbottom" style="font-size: 45px; line-height: 55px;">Adobe / Freelancing Specialist</h1>
          </div>
          <div class="row">
            <div class="col-md-6 pt-2" style="z-index:500; ">
              <div class="courses p-2  rounded shadow bg-white border-0 border-top border-warning border-5">
                <p class="text-dark text-center">Course Duration</p>
                <p class="text-success text-center" style="margin-top: -20px;"><strong>3 months (3 days a week)</strong></p>
              </div>
            </div>
            <div class="col-md-3 pt-2" style="z-index:500; ">
              <div class="courses p-2  rounded shadow bg-white border-0 border-top border-warning border-5">
                <p class="text-dark text-center">Total Class</p>
                <p class="text-success text-center" style="margin-top: -20px;"><strong>36</strong></p>
              </div>
            </div>
            <div class="col-md-3 pt-2" style="z-index:500; ">
              <div class="courses p-2  rounded shadow bg-white border-0 border-top border-warning border-5">
                <p class="text-dark text-center ">Project</p>
                <p class=" text-center text-success" style="margin-top: -20px;"><strong>15+</strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 m-auto pt-5 ecomrespp" style="z-index:500; ">
          <img src="frontend/images/become-a-freelancer-with-creatopy-1024x525.png" alt="Adobe / Freelancing Specialist" description="Adobe / Freelancing Specialist" class="img-thumbnail">
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
                <li class="breadcrumb-item "><a href="training.php" class="text-light">Our Training</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">Adobe / Freelancing</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================================cliping_service section end here=======================-->

  <!--================================editor_texts section start here=======================-->
  <div class="seopackages contentpricing">
    <div class="container">
      <h4 class="fs-3 fw-bold pt-5 pb-2 text-success ptunset">Adobe Zone</h4>
      <hr>
      <div class="pricing-table table-responsive">
        <table class="table border shadow ">
          <!-- Heading -->
          <thead>
            <tr>
              <th class="border-end border-0 border-white border-3">
                <p class="fs-5">Course Name</p>
              </th>
              <th class="border-end border-0 border-white border-3">
                <p class="fs-5">Duration</p>
              </th>
              <th class="highlight border-end border-0 border-white border-3">
                <p class="fs-5">Details</p>
              </th>
            </tr>
          </thead>
          <tbody class="border-top border-0 border-white border-bottom border-3">
            <tr>
              <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title">
                  <p> Adobe Professional Graphic Design Adobe Photoshop CC Adobe Illustrator CC</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p>Adobe Advanced Graphic Design</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p> Adobe UX/UI Design</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">72 hrs </td>
              <td class=" border-0 border-end border-success border-bottom border-1"> Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p> Adobe Motion Graphics</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">72 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p> Adobe Digital Image Editing/ E-Commerce Image Editing</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p>Adobe Certified Video Editing Solutions</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p> VFX and Cinematography Fundamentals</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p> VFX and Cinematography</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p> Digital Film Making</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p> YouTube Video Making</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p> After Effects CC 2017 Complete Training</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p> Professional Video Editing with Adobe Premiere Pro</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p>Camtasia Studio Full Professional Video Editing</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--================================editor_texts section end here=======================-->

  <!--================================editor_texts section start here=======================-->
  <div class="seopackages contentpricing">
    <div class="container">
      <h4 class="fs-3 fw-bold pt-5 pb-2 text-success ptunset">Freelancing</h4>
      <hr>
      <div class="pricing-table table-responsive">
        <table class="table border shadow ">
          <!-- Heading -->
          <thead>
            <tr>
              <th class="border-end border-0 border-white border-3">
                <p class="fs-5">Course Name</p>
              </th>
              <th class="border-end border-0 border-white border-3">
                <p class="fs-5">Duration</p>
              </th>
              <th class="highlight border-end border-0 border-white border-3">
                <p class="fs-5">Details</p>
              </th>
            </tr>
          </thead>
          <tbody class="border-top border-0 border-white border-bottom border-3">
            <tr>
              <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title">
                  <p> Digital Marketing</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p>Affiliate Marketing</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p> Social Media Marketing (SMM)</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">48 hrs </td>
              <td class=" border-0 border-end border-success border-bottom border-1"> Details</td>
            </tr>
            <tr>
              <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                  <p> SEO(Search Engine Optimization)</p>
                </span></td>
              <td class=" border-0 border-end border-success border-bottom border-1">48 hrs</td>
              <td class=" border-0 border-end border-success border-bottom border-1">Details</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--================================editor_texts section end here=======================-->

  <!--================================top_ready_start section start here=======================-->
  <section class="top_ready_start pt-5 ptunset" style="padding-top: unset;">
    <div class="container">
    <?php include('./includes/seo-build-story.php') ?>
    </div>
  </section>
  <!--================================top_ready_start section end here=======================-->

  <!--===========================footer part start===================================-->

  <?php include "includes/footer_menu.php" ?>
  <!--===========================footer part end===================================-->
  <?php include "includes/script.php" ?>

</body>

</html>