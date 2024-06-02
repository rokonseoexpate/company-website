<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- SEO meta tags -->
<meta name="description" content="<?php echo $meta_description ?? '';  ?>">
<meta name="keywords" content="<?php echo $meta_keyword ?? '';  ?>">
<meta name="author" content="<?php echo $meta_author ?? '' ;  ?>">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="7 days">
<meta name="language" content="English">

<!-- Open Graph meta tags for social media -->
<meta property="og:title" content="<?php echo $og_title ?? '';  ?>">
<meta property="og:description" content="<?php echo $og_description ?? '' ;  ?>">
<meta property="og:image" content="<?php echo $og_image ?? '';  ?>">
<meta property="og:url" content="<?php echo $og_url ?? '';  ?>">
<meta property="og:type" content="website">

<!-- Twitter Card meta tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $title ?? '';  ?>">
<meta name="twitter:description" content="<?php echo $twitter_description ?? '';  ?>">
<meta name="twitter:image" content="<?php echo $twitter_image ?? '';  ?>">
<meta name="twitter:site" content="@<?php echo $title ?? '';  ?>">

<!-- Canonical link -->
<link rel="canonical" href="<?php echo getCurrentRootURL(); ?>">
    


$meta_description = "Meta description will be here";
$meta_keyword = "Meta keyword will be here";
$meta_author = "Meta author will be here";
$og_title = "OG title will be here";
$og_description = "OG description will be here";
$og_image = "OG image will be here";
$og_url = "OG url will be here";
$twitter_description = "Twitter description will be here";
$twitter_image = "Twitter image will be here";


<?php
function getCurrentRootURL() {
    // Get the protocol (HTTP or HTTPS)
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    // Get the host (e.g., www.example.com)
    $host = $_SERVER['HTTP_HOST'];

    // Get the root directory
    $root = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

    // Combine all to get the full URL
    $currentRootURL = $protocol . $host . $root;

    return $currentRootURL;
}
?>