<?php

ob_start();
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

    <style>
    img {
        max-width: 100%;
        height: auto
    }
</style>
<section class="web_service text-light">
    <div class="container ">
        <div class="row">
            <div class="col-md-6" style="z-index:500;">
                <div class="top_about_us_txt pt-5">
                    <div class="top_about_us_txt" style="z-index:500;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcumb_gph">
                                <li class="breadcrumb-item "><a href="index.php" class="text-light ">Home</a></li>
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
                    <img src="<?php echo $newImagePath ?>" alt="<?php echo $blog['alt_tag'] ?>" description="<?php echo $blog['alt_description'] ?>" class="img-thumbnail">
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
                            <img src="<?php echo $row['image'] ?>" alt="<?php echo $blog['alt_tag'] ?>" description="<?php echo $row['alt_description'] ?>" class="img-thumbnail">
                        </div>
                        <div class="card-body">
                            <div class="title">
                                <h4><?php echo $row['title'] ?></h4>
                            </div>
                            <div class="description">
                                <p><?php

                                    if (!function_exists('limit_characters')) {
                                        function limit_characters($text, $limit) {
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
                                <a href="blog-details.php?id=<?php echo $row['id']?>" class="text-success fw-bold">Read</a>
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
                    <img src="frontend/images/95991_prev_ui.png" alt=" seo expate" description=" seo expate">
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