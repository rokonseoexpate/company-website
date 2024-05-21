<?php
$title = "Notice Search";
ob_start();
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
<!--================================cliping_service section start here=======================-->
<section class="cliping_service eCommerceSEO" style="background: var(--global-bg-color); padding: 15px 0; margin-top: 60px;">
    <div class="container">
        <div class="row">
            <div class="col-12" style="z-index:500;">
                <div class="breadcumb_gph d-flex">
                    <a class="text-light" href="/" class="text-success"><p>Home</p></a>
                    <p class="text-light px-3 ">»</p>
                    <p class="text-light">Notice</p>
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
                                    echo $newImagePath; ?>" alt=" image " class="card-img-top lazy">
                                    <div class="card-body">
                                        <h2 class="card-title">
                                            <span><?php echo $row['title'] ?></span>
                                        </h2>
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

<?php
$main_content = ob_get_clean();
include './layouts/app.php';
?>
