<?php
    $title = "Amazon Seo";
    ob_start();
?>

<section class="top_our_transform">
    <div class="container">
        <div class="row">
            <h1>No data found </h1>
        </div>
    </div>
</section>
<?php 
$main_content = ob_get_clean();
include './layouts/app.php';
?>