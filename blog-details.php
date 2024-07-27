<?php

require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

$id = $_GET['id'];
$sql = "SELECT * FROM blogs WHERE id = $id";
$result = mysqli_query($conn, $sql);
$blog = mysqli_fetch_assoc($result);

$title = $blog['title'];

$relatedBlogQuery = "SELECT * FROM blogs WHERE blog_category_id =  {$blog['blog_category_id']} AND id != {$blog['id']} LIMIT 2";

$blogs = mysqli_query($conn, $relatedBlogQuery);

// Use mysqli_fetch_all to fetch all related blogs
$relatedBlogs = mysqli_fetch_all($blogs, MYSQLI_ASSOC);

$imagePath = $blog['image'];
$imageName = basename($imagePath);
$newImagePath = 'uploads/' . $imageName;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Title" content="Seo Expate Bangladesh LTD.">
    <meta name="description" content="Seo Expate Bangladesh LTD.">
    <meta name="keywords" content="seoebl, seoexpate, Seo Expate Bangladesh LTD.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;  ?></title>
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
    <style>
        img {
            max-width: 100%;
            height: auto
        }
    </style>
</head>

<body>
    <?php include('./includes/navbar.php') ?>

    <section class="web_service text-light">
        <div class="container ">
            <div class="row">
                <div class="col-md-6" style="z-index:500;">
                    <div class="top_about_us_txt pt-5">
                        <div class="top_about_us_txt" style="z-index:500;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcumb_gph">
                                    <li class="breadcrumb-item "><a href="/" class="text-light ">Home</a></li>
                                    <li class="breadcrumb-item active text-light" aria-current="page"><?php echo $blog['title'] ?> </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="top_body_txt_part">
                        <h4><?php echo $blog['title'] ?></h4>
                    </div>
                    <div class="button pt-5">
                        <a href="contact.php" class="text-light">Contact Us</a>
                    </div>
                </div>
                <div class="col-md-6 pt-4">
                    <div class="web_service_img">
                        <img src="<?php echo $newImagePath ?>" alt="<?php echo $blog['alt_tag'] ?>" description="<?php echo  strip_tags($blog['alt_description']) ?>" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================web_service section end here=======================-->

    <!--================================what_you_need section start here=======================-->
    <section class="what_you_need">
        <div class="container">
            <div class="row">
                <div class="what_you_need_txt">
                    <p><?php echo $blog['description'] ?></p>
                </div>
            </div>
        </div>
    </section>
    <!--================================what_you_need section end here=======================-->
    <section class="others_blog">
        <div class="container">
            <div class="row">
                <h4 class=" fw-bold">Other CSR of SEO Expate Bangladesh Ltd.</h4>
                <?php
                foreach ($relatedBlogs as $row) {
                ?>
                    <div class="col-md-6 pt-4">
                        <div class="card">
                            <div class="card-img blog_det_img">
                                <img src="<?php echo 'uploads/' . basename($row['image']); ?>" alt="<?php echo $row['alt_tag'] ?>" description="<?php echo strip_tags($row['alt_description']) ?>" class="img-thumbnail">
                            </div>
                            <div class="card-body">
                                <div class="title">
                                    <h4><?php echo $row['title'] ?></h4>
                                </div>
                                <div class="description">
                                    <p><?php

                                        if (!function_exists('limit_characters')) {
                                            function limit_characters($text, $limit)
                                            {
                                                $text = strip_tags($text);
                                                if (strlen($text) > $limit) {
                                                    return substr($text, 0, $limit) . '...';
                                                }
                                                return $text;
                                            }
                                        }

                                        // Example usage within your script
                                        $description = isset($row['description']) ? $row['description'] : '';
                                        echo limit_characters($description, 132);

                                        ?>

                                    </p>
                                </div>
                                <div class="button ">
                                    <a href="blog-details.php?id=<?php echo $row['id'] ?>" class="text-success fw-bold">Read</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!--================================top_ready_start section start here=======================-->
    <section class="top_ready_start">
        <div class="container">
            <?php include('./includes/seo-build-story.php') ?>
        </div>
    </section>
    <!--================================top_ready_start section end here=======================-->


    <?php include('./includes/footer_menu.php'); ?>

    <?php include "includes/script.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php if (isset($successMessage)) : ?>
        <script>
            iziToast.success({
                title: 'Success',
                position: 'topRight',
                message: '<?php echo htmlspecialchars($successMessage); ?>',
            });
        </script>
    <?php endif; ?>

    <?php if (isset($errorMessage)) : ?>
        <script>
            iziToast.error({
                title: 'Error',
                position: 'topRight',
                message: '<?php echo htmlspecialchars($errorMessage); ?>',
            });
        </script>
    <?php endif; ?>
</body>

</html>