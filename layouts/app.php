
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="This is the my site">
    <meta name="keywords" content="seoebl, seoexpate">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title;  ?></title>
	<meta property="og:title" content="Home - IT Services, Technology Solutions">
		
	<link rel="stylesheet" href="frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="frontend/css/style.css">
	<link rel="stylesheet" href="frontend/css/responsive.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

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

</body>
</html>