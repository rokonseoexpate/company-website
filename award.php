<?php
$title = "Home";
ob_start();
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

?>

<!--================================top-awards section start here=======================-->
<section class="top-awards" style="background-image: url(frontend/images/awards-and-recognitions-background-banner.png); background-repeat: no-repeat;  background-position: center center; background-size: cover;  margin-top: 60px; width: 100%; height: 100%;">
    <div class="container">
        <div class="row"></div>
    </div>
</section>
<!--================================top-awards section end here=======================-->

<!--================================our_global_impact section start here=======================-->
<div class="our_global_impact">
    <div class="container">
        <div class="row">
            <div class="our_global_impact_txt">
                <h3>Awards & Recognitions</h3>
                <p>We are proud of being consistently recognized by national and international organizations and platforms as a trusted and reliable IT services provider, software & technology company and employer. It is our honor to be recognized for our hard work for our clients, employees, and communities globally. Explore some recent awards & recognitions received by SEO Expate and make decisions confidently.</p>
                <div class="top-body-button pt-4 d-flex gap-3">
                    <a type="button" href="about.php">About SEO Expate </a>
                    <a type="button" href="history.php">History of SEO Expate </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================================our_global_impact section end here=======================-->

<!--================================Core_Values section start here=======================-->
<section class="Core_Values technology_company">
    <div class="container">

        <div class="row pb-2">
            <div class="Core_Values_txt pb-5">
                <h3>Recognition as a Globally Trusted and Reliable Technology Company</h3>
                <p>SEO Expate received many awards and recognitions throughout its journey by providing IT solutions to Governments, Non-profit Organizations, and many International companies to help them reimagine their business and navigate their digital transformation. Winning recognition in every step of our journey helped us gather strength for making a better and bold new future. Explore our awards and recognitions that we have earned by trust, commitment, and dedication.</p>
            </div>
            <hr>
        

        <?php

$qry = "SELECT * FROM awards order by id desc";
if ($result = $conn->query($qry)) {
    $number = 1;
    while ($row = $result->fetch_assoc()) {
        $imagePath = $row['image'];
        $imageName = basename($imagePath);
        $newImagePath = 'uploads/' . $imageName;
        ?>
        <div class="row pt-4 pb-2">
            <?php if ($number++ % 2 == 0) { ?>
                <div class="col-md-6">
                    <div class="Core_Values_img pb-5 pt-3 text-center">
                        <img src="<?php echo $newImagePath; ?>" alt="image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="Core_Values_txt">
                        <h4><?php echo $row['title']; ?></h4>
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>
            <?php } else { ?>
                <div class="col-md-6">
                    <div class="Core_Values_txt">
                        <h4><?php echo $row['title']; ?></h4>
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="Core_Values_img pb-5 pt-3 text-center">
                        <img src="<?php echo $newImagePath; ?>" alt="image">
                    </div>
                </div>
            <?php } ?>
        </div>
        <hr>
    <?php }
} ?>

    </div>
</section>
<!--================================Core_Values section end here=======================-->

<!--================================top_our_transform section start here=======================-->
<section class="top_our_transform text-center">
    <div class="container">
        <div class="row">
            <div class="our_transform_txt text-center">
                <h5 class="text-center pb-3">We can build your story</h5>
                <p class="text-center" style="width: 50%; margin:auto;">Through the years we have partnered with great companies and
                    entrepreneurs all over the world.</p>
            </div>
            <div class="top-body-button pt-3 pt-4">
                <a type="button" href="#">Get In Touch</a>
            </div>
        </div>
    </div>
</section>
<!--================================top_our_transform section end here=======================-->

<?php
$main_content = ob_get_clean();
include './layouts/app.php';
?>