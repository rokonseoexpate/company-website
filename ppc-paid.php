<?php
    $title = "PPC Paid";
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
		
	<?php include('./includes/style.php') ?>
	<div class="gtranslate_wrapper"></div>
	<script>window.gtranslateSettings = {"default_language":"en","native_language_names":true,"detect_browser_language":true,"url_structure":"sub_domain","languages":["en","fr","de","it","es"],"wrapper_selector":".gtranslate_wrapper","horizontal_position":"left","vertical_position":"bottom"}</script>
	<script src="https://cdn.gtranslate.net/widgets/latest/lc.js" defer></script>

</head>

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