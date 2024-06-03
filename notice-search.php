<?php
$title = "Notice Search";
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Initialize variables for date range filtering
$formDate = $_GET['formDate'] ?? '';
$toDate = $_GET['toDate'] ?? '';

// Build the SQL query based on the date range
$qry = "SELECT * FROM notices WHERE 1";

if (!empty($formDate) && !empty($toDate)) {
    $qry .= " AND date BETWEEN '$formDate' AND '$toDate'";
}

$qry .= " ORDER BY id DESC";
$result = mysqli_query($conn, $qry); // Executing the query

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="Title" content="This is the my site">
	<meta name="description" content="This is the my site">
    <meta name="keywords" content="seoebl, seoexpate">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wedding Photo Editing</title>
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

<!--================================cliping_service section start here=======================-->
<section class="cliping_service eCommerceSEO" style="background: var(--global-bg-color); padding: 15px 0; margin-top: 60px;">
    <div class="container">
        <div class="row">
            <div class="col-12" style="z-index:500;">
                <div class="top_about_us_txt" style="z-index:500;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcumb_gph">
                            <li class="breadcrumb-item "><a href="index.php" class="text-light ">Home</a></li>
                            <li class="breadcrumb-item active text-light" aria-current="page">Notice</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================cliping_service section end here=======================-->
<!--================================Cnotice section start here=======================-->
<section class="Cnotice">
    <div class="container">
        <div class="row">
            <div class="col-md-12  ">
                <form action="" class="form-inline d-flex gap-3 justify-content-center">
                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="date" name="formDate" placeholder="From Date..." class="form-control" value="<?php echo $formDate; ?>">
                    </div>
                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="date" name="toDate" placeholder="To Date..." class="form-control" value="<?php echo $toDate; ?>">
                    </div>
                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="submit" value="Search" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 1;
            $qry = "SELECT * FROM notices ORDER BY id DESC";
            $result = mysqli_query($conn, $qry); // Utilizing mysqli_query() to execute the query

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-md-3 pt-5">
                        <div class="item-row">
                            <a href="notice-details.php?id=<?php echo $row['id']; ?>">
                                <div class="card">
                                    <img src="<?php
                                    $imagePath = $row['image'];
                                    $imageName = basename($imagePath);
                                    $newImagePath = 'uploads/' . $imageName;
                                    echo $newImagePath; ?>" alt=" <?php echo $row['alt_tag']?> " description="<?php echo $row['alt_description']?>" class="card-img-top lazy">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <span><?php echo $row['title']?></span>
                                        </h6>
                                        <p style="margin-top: 10px; text-decoration: none; display: inline-block;"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            ?>
        </div>
    </div>
</section>

<!--================================Cnotice section end here=======================-->

<!--===========================footer part start===================================-->
<?php include('./includes/footer_menu.php') ?>
<!--===========================footer part end===================================-->

<script src="frontend/js/jquery-3.5.1.js"></script>
<script src="frontend/js/bootstrap.bundle.min.js"></script>
<script src="frontend/js/owl.carousel.js"></script>
<script src="frontend/js/main.js"></script>

</body>
</html>
