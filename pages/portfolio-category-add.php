<?php
$title = "Web Development Portfolio Category";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $status = $_POST['status'];


    // Prepare the insert query
    $insert_query = "INSERT INTO web_portfolio_categories (name, status) VALUES ('$name', '$status')";

    // Execute the insert query
    if (mysqli_query($conn, $insert_query)) {
        // Insert successful
        $successMessage = "Created Successfully!";
        // Redirect to the page or display success message as per your requirement
    } else {
        // Insert failed
        $errorMessage = "Error creating job: " . mysqli_error($conn);
    }
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="portfolio-category-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="Name" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="status">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
