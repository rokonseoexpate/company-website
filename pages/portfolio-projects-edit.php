<?php
$title = "Update Web Portfolio";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Fetch branches from the database
$branch_query = "SELECT * FROM web_portfolio_categories";
$branch_result = mysqli_query($conn, $branch_query);

// Check if the project ID is provided in the URL
if (isset($_GET['id'])) {
    $project_id = $_GET['id'];

    // Fetch project details from the database
    $fetch_query = "SELECT * FROM web_portfolios WHERE id = $project_id";
    $fetch_result = mysqli_query($conn, $fetch_query);
    $project_row = mysqli_fetch_assoc($fetch_result);
} else {
    // Redirect or display an error message if project ID is not provided
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['title'];
    $category_id = $_POST['category_id'];
    $link = $_POST['link'];

    // Check if a new image is uploaded
    if ($_FILES["image"]["size"] > 0) {
        // Sanitize the file name
        $image_name = $_FILES["image"]["name"];
        $image_name = preg_replace("/[^\w\-\.]/", "-", $image_name); // Replace special characters with hyphens
        $image_name = preg_replace("/\s+/", "-", $image_name); // Replace spaces with hyphens

        // Upload new image file
        $target_dir = "../uploads/";
        $target_file = $target_dir . $image_name;
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image_path = $target_file;
    } else {
        // Keep the existing image path if no new image is uploaded
        $image_path = $project_row['image'];
    }

    // Sanitize inputs to prevent SQL injection
    $sanitized_name = mysqli_real_escape_string($conn, $name);
    $sanitized_category_id = mysqli_real_escape_string($conn, $category_id);
    $sanitized_link = mysqli_real_escape_string($conn, $link);
    $sanitized_image_path = mysqli_real_escape_string($conn, $image_path);

    // Update query
    $update_query = "UPDATE web_portfolios SET title = '$sanitized_name', category_id = '$sanitized_category_id', link = '$sanitized_link', image = '$sanitized_image_path' WHERE id = $project_id";

    // Execute query
    if (mysqli_query($conn, $update_query)) {
        // Update successful
        $_SESSION['successMessage'] = "Portfolio updated successfully!";

        // Redirect to portfolio list page or display success message as per your requirement
    } else {
        // Update failed
        $_SESSION['errorMessage'] = "Error updating Portfolio: " . mysqli_error($conn);
    }
    header("Location: portfolio-projects-list.php");
    exit();
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Update Web Portfolio</h1>
            <a href="portfolio-projects-list.php" class="btn btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" id="Title" name="title" placeholder="Title" value="<?php echo $project_row['title']; ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="category">Category</label>
                    <select id="category_id" class="form-control" name="category_id" readonly="">
                        <option value="">Choose...</option>
                        <?php while ($branch_row = mysqli_fetch_assoc($branch_result)) : ?>
                            <option value="<?php echo $branch_row['id']; ?>" <?php if ($branch_row['id'] == $project_row['category_id']) echo 'selected'; ?>><?php echo $branch_row['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="link">Link</label>
                    <input type="text" class="form-control" id="link" name="link" placeholder="link" value="<?php echo $project_row['link']; ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file dropify" accept="image/*" name="image" placeholder="image" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="image">Existing Image</label>
                    <br>
                    <img src="<?php echo $project_row['image']; ?>" alt="" width="250px">
                </div>
            </div>
            <button type="submit" class="btn btn-primary my-3">Submit</button>

        </form>
    </div>

</div>


<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
