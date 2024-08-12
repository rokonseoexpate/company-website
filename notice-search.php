<?php
$title = "Notice Search";
require_once 'config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Initialize variables for date range filtering
$formDate = $_GET['formDate'] ?? '';
$toDate = $_GET['toDate'] ?? '';

// Base SQL query
$qry = "SELECT * FROM notices";

// Add date filtering if dates are provided
if (!empty($formDate) && !empty($toDate)) {
    $qry .= " WHERE date BETWEEN ? AND ?";
}

// Order by ID in descending order
$qry .= " ORDER BY id DESC";

// Prepare the statement
$stmt = $conn->prepare($qry);

// Bind parameters if dates are provided
if (!empty($formDate) && !empty($toDate)) {
    $stmt->bind_param("ss", $formDate, $toDate);
}

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Check for query execution errors
if (!$result) {
    die("Query failed: " . $conn->error);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Title" content="Seo Expate Bangladesh LTD.">
    <meta name="description" content="Seo Expate Bangladesh LTD.">
    <meta name="keywords" content="seoebl, seoexpate, Seo Expate Bangladesh LTD.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta property="og:title" content="Home - IT Services, Technology Solutions">
    <link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">
    <?php include('./includes/style.php'); ?>
   
</head>

<body>
    <?php include('./includes/navbar.php'); ?>
    <!--================================cliping_service section start here=======================-->
    <section class="cliping_service eCommerceSEO" style="background: var(--global-bg-color); padding: 15px 0; ">
        <div class="container">
            <div class="row">
                <div class="col-12" style="z-index:500;">
                    <div class="top_about_us_txt" style="z-index:500;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcumb_gph">
                                <li class="breadcrumb-item"><a href="/" class="text-light">Home</a></li>
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
                <div class="col-md-12">
                    <form action="" class="form-inline d-flex gap-3 justify-content-center">
                        <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                            <input type="date" name="formDate" placeholder="From Date..." class="form-control" value="<?php echo htmlspecialchars($formDate); ?>">
                        </div>
                        <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                            <input type="date" name="toDate" placeholder="To Date..." class="form-control" value="<?php echo htmlspecialchars($toDate); ?>">
                        </div>
                        <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                            <input type="submit" value="Search" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <?php
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="col-md-3 pt-5">
                            <div class="item-row">
                                <a href="notice-details.php?id=<?php echo $row['id']; ?>">
                                    <div class="card">
                                        <img src="<?php
                                                    $imagePath = $row['image'];
                                                    $imageName = basename($imagePath);
                                                    $newImagePath = 'uploads/' . $imageName;
                                                    echo htmlspecialchars($newImagePath); ?>" alt="<?php echo htmlspecialchars($row['alt_tag']); ?>" description="<?php echo htmlspecialchars($row['alt_description']); ?>" class="card-img-top lazy">
                                        <div class="card-body">
                                            <h6 class="card-title">
                                                <span><?php echo htmlspecialchars($row['title']); ?></span>
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
                    echo "Error: " . $conn->error;
                }
                ?>
            </div>
        </div>
    </section>
    <!--================================Cnotice section end here=======================-->

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

<?php
// Close the statement and connection
$stmt->close();
$conn->close();
?>