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
    <title>Content Writing Pricing Package</title>
    <meta property="og:title" content="Home - IT Services, Technology Solutions">
    <link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">
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

    <?php include "includes/navbar.php" ?>

    <?php include "includes/content-nav.php" ?>
    <!--================================photo editor sub Header section end here=======================-->

    <!--================================top-body section start here=======================-->
    <section class="top-body app_development" style="background-image: url(frontend/images/1692873456499.jpg); background-repeat: no-repeat;  background-position: center center; background-size: cover; padding-top: 20px;">
        <div class="container ">
            <div class="row">
                <div class="col-12" style="z-index:500; ">
                    <div class="top_body_txt_part">
                        <h1 class="" style="font-size: 45px; line-height: 55px;">Content Writing Pricing Package</h1>
                    </div>
                    <div class="top-body-button pt-3">
                        <a type="button" href="contact.php">Contact Us</a>
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
                                <li class="breadcrumb-item "><a href="content-writing.php" class="text-light">Content Writing</a></li>
                                <li class="breadcrumb-item active text-light" aria-current="page">Content Writing Pricing</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================cliping_service section end here=======================-->

    <!--================================seopackages section start here=======================-->
    <div class="seopackages contentpricing">
        <div class="container">
            <h6 class="fs-1 fw-bold pt-5 pb-5 text-center ptunset">Blog Post Writing Price</h6>
            <div class="pricing-table table-responsive">
                <table class="table border shadow ">
                    <!-- Heading -->
                    <thead>
                        <tr>
                            <th class="border-end border-0 border-white border-3">

                            </th>
                            <th class="border-end border-0 border-white border-3">
                                <p class="fs-5">01 Blog Post / Month</p>
                                <p class="fs-5 fw-bold">TK. 6000 / $85</p>
                                <p class="fs-5 ">1 Blog Post / Month</p>
                            </th>
                            <th class="highlight border-end border-0 border-white border-3">
                                <p class="fs-5">02 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 11500 / $165</p>
                                <p class="fs-5">1 Blog Post / Biweekly</p>
                            </th>
                            <th class="border-end border-0 border-white border-3">
                                <p class="fs-5">03 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 17250 / $249</p>
                                <p class="fs-5">1 Blog Post / 10 Days</p>
                            </th>
                            <th>
                                <p class="fs-5">04 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 23000 / $299</p>
                                <p class="fs-5">1 Blog Post / Week</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="border-top border-0 border-white border-bottom border-3">
                        <tr>
                            <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title">
                                    <p>Article Length</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0  border-success border-bottom border-1">1200 Words/Article</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Blog Image Include</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Well Researched Article</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1"> Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Grammar Error Check</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Punctuation Error Check</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>100% Plagiarism-Free</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>SEO Optimized Writing</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Industry Expert Writer</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Proofreading</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Revision</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0  border-success border-bottom border-1">1 Time</td>
                        </tr>
                        <!-- Buttons -->
                        <tr>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1"><a class="btn text-light" href="#">Order Now</a></td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--================================seopackages section end here=======================-->

    <!--================================seopackages section start here=======================-->
    <div class="seopackages contentpricing">
        <div class="container">
            <h6 class="fs-1 fw-bold pt-5 pb-5 text-center ptunset">Academic Writing Price</h6>
            <div class="pricing-table table-responsive">
                <table class="table border shadow ">
                    <!-- Heading -->
                    <thead>
                        <tr>
                            <th class="border-end border-0 border-white border-3">

                            </th>
                            <th class="border-end border-0 border-white border-3">
                                <p class="fs-5">01 Blog Post / Month</p>
                                <p class="fs-5 fw-bold">TK. 6000 / $85</p>
                                <p class="fs-5 ">1 Blog Post / Month</p>
                            </th>
                            <th class="highlight border-end border-0 border-white border-3">
                                <p class="fs-5">02 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 11500 / $165</p>
                                <p class="fs-5">1 Blog Post / Biweekly</p>
                            </th>
                            <th class="border-end border-0 border-white border-3">
                                <p class="fs-5">03 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 17250 / $249</p>
                                <p class="fs-5">1 Blog Post / 10 Days</p>
                            </th>
                            <th>
                                <p class="fs-5">04 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 23000 / $299</p>
                                <p class="fs-5">1 Blog Post / Week</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="border-top border-0 border-white border-bottom border-3">
                        <tr>
                            <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title">
                                    <p>Article Length</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0  border-success border-bottom border-1">1200 Words/Article</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Blog Image Include</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Well Researched Article</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1"> Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Grammar Error Check</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Punctuation Error Check</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>100% Plagiarism-Free</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>SEO Optimized Writing</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Industry Expert Writer</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Proofreading</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Revision</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0  border-success border-bottom border-1">1 Time</td>
                        </tr>
                        <!-- Buttons -->
                        <tr>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1"><a class="btn text-light" href="#">Order Now</a></td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--================================seopackages section end here=======================-->

    <!--================================seopackages section start here=======================-->
    <div class="seopackages contentpricing">
        <div class="container">
            <h6 class="fs-1 fw-bold pt-5 pb-5 text-center ptunset">Copywriting Price</h6>
            <div class="pricing-table table-responsive">
                <table class="table border shadow ">
                    <!-- Heading -->
                    <thead>
                        <tr>
                            <th class="border-end border-0 border-white border-3">

                            </th>
                            <th class="border-end border-0 border-white border-3">
                                <p class="fs-5">01 Blog Post / Month</p>
                                <p class="fs-5 fw-bold">TK. 6000 / $85</p>
                                <p class="fs-5 ">1 Blog Post / Month</p>
                            </th>
                            <th class="highlight border-end border-0 border-white border-3">
                                <p class="fs-5">02 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 11500 / $165</p>
                                <p class="fs-5">1 Blog Post / Biweekly</p>
                            </th>
                            <th class="border-end border-0 border-white border-3">
                                <p class="fs-5">03 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 17250 / $249</p>
                                <p class="fs-5">1 Blog Post / 10 Days</p>
                            </th>
                            <th>
                                <p class="fs-5">04 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 23000 / $299</p>
                                <p class="fs-5">1 Blog Post / Week</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="border-top border-0 border-white border-bottom border-3">
                        <tr>
                            <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title">
                                    <p>Article Length</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0  border-success border-bottom border-1">1200 Words/Article</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Blog Image Include</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Well Researched Article</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1"> Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Grammar Error Check</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Punctuation Error Check</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>100% Plagiarism-Free</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>SEO Optimized Writing</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Industry Expert Writer</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Proofreading</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Revision</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0  border-success border-bottom border-1">1 Time</td>
                        </tr>
                        <!-- Buttons -->
                        <tr>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1"><a class="btn text-light" href="#">Order Now</a></td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--================================seopackages section end here=======================-->

    <!--================================seopackages section start here=======================-->
    <div class="seopackages contentpricing">
        <div class="container">
            <h6 class="fs-1 fw-bold pt-5 pb-5 text-center ptunset">Static Web Pages Price</h6>
            <div class="pricing-table table-responsive">
                <table class="table border shadow ">
                    <!-- Heading -->
                    <thead>
                        <tr>
                            <th class="border-end border-0 border-white border-3">

                            </th>
                            <th class="border-end border-0 border-white border-3">
                                <p class="fs-5">01 Blog Post / Month</p>
                                <p class="fs-5 fw-bold">TK. 6000 / $85</p>
                                <p class="fs-5 ">1 Blog Post / Month</p>
                            </th>
                            <th class="highlight border-end border-0 border-white border-3">
                                <p class="fs-5">02 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 11500 / $165</p>
                                <p class="fs-5">1 Blog Post / Biweekly</p>
                            </th>
                            <th class="border-end border-0 border-white border-3">
                                <p class="fs-5">03 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 17250 / $249</p>
                                <p class="fs-5">1 Blog Post / 10 Days</p>
                            </th>
                            <th>
                                <p class="fs-5">04 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 23000 / $299</p>
                                <p class="fs-5">1 Blog Post / Week</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="border-top border-0 border-white border-bottom border-3">
                        <tr>
                            <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title">
                                    <p>Article Length</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0  border-success border-bottom border-1">1200 Words/Article</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Blog Image Include</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Well Researched Article</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1"> Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Grammar Error Check</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Punctuation Error Check</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>100% Plagiarism-Free</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>SEO Optimized Writing</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Industry Expert Writer</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Proofreading</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Revision</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0  border-success border-bottom border-1">1 Time</td>
                        </tr>
                        <!-- Buttons -->
                        <tr>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1"><a class="btn text-light" href="#">Order Now</a></td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--================================seopackages section end here=======================-->

    <!--================================seopackages section start here=======================-->
    <div class="seopackages contentpricing ">
        <div class="container">
            <h6 class="fs-1 fw-bold pt-5 pb-5 text-center ptunset">Product Description Writing Price</h6>
            <div class="pricing-table table-responsive">
                <table class="table border shadow ">
                    <!-- Heading -->
                    <thead>
                        <tr>
                            <th class="border-end border-0 border-white border-3">

                            </th>
                            <th class="border-end border-0 border-white border-3">
                                <p class="fs-5">01 Blog Post / Month</p>
                                <p class="fs-5 fw-bold">TK. 6000 / $85</p>
                                <p class="fs-5 ">1 Blog Post / Month</p>
                            </th>
                            <th class="highlight border-end border-0 border-white border-3">
                                <p class="fs-5">02 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 11500 / $165</p>
                                <p class="fs-5">1 Blog Post / Biweekly</p>
                            </th>
                            <th class="border-end border-0 border-white border-3">
                                <p class="fs-5">03 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 17250 / $249</p>
                                <p class="fs-5">1 Blog Post / 10 Days</p>
                            </th>
                            <th>
                                <p class="fs-5">04 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 23000 / $299</p>
                                <p class="fs-5">1 Blog Post / Week</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="border-top border-0 border-white border-bottom border-3">
                        <tr>
                            <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title">
                                    <p>Article Length</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0  border-success border-bottom border-1">1200 Words/Article</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Blog Image Include</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Well Researched Article</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1"> Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Grammar Error Check</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Punctuation Error Check</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>100% Plagiarism-Free</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>SEO Optimized Writing</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Industry Expert Writer</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Proofreading</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Revision</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0  border-success border-bottom border-1">1 Time</td>
                        </tr>
                        <!-- Buttons -->
                        <tr>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1"><a class="btn text-light" href="#">Order Now</a></td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--================================seopackages section end here=======================-->

    <!--================================seopackages section start here=======================-->
    <div class="seopackages contentpricing">
        <div class="container">
            <h6 class="fs-1 fw-bold pt-5 pb-5 text-center ptunset">Press Release Writing Price</h6>
            <div class="pricing-table table-responsive">
                <table class="table border shadow ">
                    <!-- Heading -->
                    <thead>
                        <tr>
                            <th class="border-end border-0 border-white border-3">

                            </th>
                            <th class="border-end border-0 border-white border-3">
                                <p class="fs-5">01 Blog Post / Month</p>
                                <p class="fs-5 fw-bold">TK. 6000 / $85</p>
                                <p class="fs-5 ">1 Blog Post / Month</p>
                            </th>
                            <th class="highlight border-end border-0 border-white border-3">
                                <p class="fs-5">02 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 11500 / $165</p>
                                <p class="fs-5">1 Blog Post / Biweekly</p>
                            </th>
                            <th class="border-end border-0 border-white border-3">
                                <p class="fs-5">03 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 17250 / $249</p>
                                <p class="fs-5">1 Blog Post / 10 Days</p>
                            </th>
                            <th>
                                <p class="fs-5">04 Blog Posts / Month</p>
                                <p class="fs-5 fw-bold">TK. 23000 / $299</p>
                                <p class="fs-5">1 Blog Post / Week</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="border-top border-0 border-white border-bottom border-3">
                        <tr>
                            <td class="border-end border-0 border-success border-bottom border-1 border-left"><span class="ptable-title">
                                    <p>Article Length</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1200 Words/Article</td>
                            <td class=" border-0  border-success border-bottom border-1">1200 Words/Article</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Blog Image Include</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Well Researched Article</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1"> Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Grammar Error Check</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Punctuation Error Check</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>100% Plagiarism-Free</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>SEO Optimized Writing</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Industry Expert Writer</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Proofreading</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">Yes</td>
                            <td class=" border-0  border-success border-bottom border-1">Yes</td>
                        </tr>
                        <tr>
                            <td class=" border-0 border-end border-success border-bottom border-1"><span class="ptable-title">
                                    <p>Revision</p>
                                </span></td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0 border-end border-success border-bottom border-1">1 Time</td>
                            <td class=" border-0  border-success border-bottom border-1">1 Time</td>
                        </tr>
                        <!-- Buttons -->
                        <tr>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1"><a class="btn text-light" href="#">Order Now</a></td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                            <td class=" border-0 border-success border-bottom border-1">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <section class="top_ready_start">
        <div class="container">
            <?php include('./includes/seo-build-story.php') ?>
        </div>
    </section>
    
    <?php include "includes/footer_menu.php" ?>
    <!--===========================footer part end===================================-->

    <?php include "includes/script.php" ?>


</body>

</html>