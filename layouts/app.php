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
<!DOCTYPE html>
<html lang="en">
<head>
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
    
	<title><?php echo $title;  ?></title>

	<link rel="stylesheet" href="frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="frontend/css/style.css">
	<link rel="stylesheet" href="frontend/css/responsive.css">
	<link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<div class="gtranslate_wrapper"></div>
	<script>window.gtranslateSettings = {"default_language":"en","native_language_names":true,"detect_browser_language":true,"url_structure":"sub_domain","languages":["en","fr","de","it","es"],"wrapper_selector":".gtranslate_wrapper","horizontal_position":"left","vertical_position":"bottom"}</script>
	<script src="https://cdn.gtranslate.net/widgets/latest/lc.js" defer></script>

</head>

<body>

	<!--================================Header section start here=======================-->
	<?php include('./includes/navbar.php') ?>
	<!--================================Header section end here=======================-->
            
    <!-- Content Wrapper. Contains page content -->
    <?php echo $main_content; ?>
    <!-- /.content-wrapper -->

	<!--===========================footer part start===================================-->
	<?php include('./includes/footer_menu.php') ?>
	<!--===========================footer part end===================================-->

    <script src="frontend/js/jquery-3.5.1.js"></script>
    <script src="frontend/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/js/owl.carousel.js"></script>
    <script src="frontend/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <?php if (isset($successMessage)): ?>
        <script>

            iziToast.success({
                title: 'Success',
                position: 'topRight',
                message: '<?php echo $successMessage; ?>',
            });
        </script>
    <?php endif; ?>

    <?php if (isset($errorMessage)): ?>
        <script>
            iziToast.error({
                title: 'Error',
                position:'topRight',
                message: '<?php echo $errorMessage; ?>',
            });
        </script>
    <?php endif; ?>


</body>
</html>