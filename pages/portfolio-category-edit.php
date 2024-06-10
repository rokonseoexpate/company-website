<?php
$title = "Update Web Development Portfolio Category";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
// Check if ID is provided in URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the existing data from the database based on ID
    $select_query = "SELECT * FROM web_portfolio_categories WHERE id = $id";
    $result = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_assoc($result);

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST['name'];
        $status = $_POST['status'];

        // Prepare the update query
        $update_query = "UPDATE web_portfolio_categories SET name = '$name', status = '$status' WHERE id = $id";

        // Execute the update query
        if (mysqli_query($conn, $update_query)) {
            // Update successful
            $_SESSION['successMessage'] = "Record Updated successfully!";

        } else {
            // Update failed
            $_SESSION['successMessage']  = "Error updating job: " . mysqli_error($conn);
        }
        // Redirect or handle the case where ID is not provided
        header("Location: portfolio-category-list.php");
        exit();
    }

}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="portfolio-category-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <?php if(isset($successMessage)) { ?>
            <div class="alert alert-success mt-3" role="alert"><?php echo $successMessage; ?></div>
        <?php } ?>
        <?php if(isset($errorMessage)) { ?>
            <div class="alert alert-danger mt-3" role="alert"><?php echo $errorMessage; ?></div>
        <?php } ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="Name" name="name" placeholder="Name" value="<?php echo $row['name']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="status">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1" <?php if($row['status'] == 1) echo "selected"; ?>>Active</option>
                        <option value="2" <?php if($row['status'] == 2) echo "selected"; ?>>Inactive</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary my-3">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
