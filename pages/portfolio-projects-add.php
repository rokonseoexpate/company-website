<?php
$title = "Create Web Portfolio";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
// Fetch branches from the database
$branch_query = "SELECT * FROM web_portfolio_categories";
$branch_result = mysqli_query($conn, $branch_query);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['title'];
    $category_id = $_POST['category_id'];
    $link = $_POST['link'];
    $alt_tag = $_POST['alt_tag']; // New field for alt tag
    $alt_description = $_POST['alt_description']; // New field for alt text

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
        $image_path = ''; // Set default image path if no image is uploaded
    }

    // Sanitize inputs to prevent SQL injection
    $sanitized_name = mysqli_real_escape_string($conn, $name);
    $sanitized_category_id = mysqli_real_escape_string($conn, $category_id);
    $sanitized_link = mysqli_real_escape_string($conn, $link);
    $sanitized_image_path = mysqli_real_escape_string($conn, $image_path);
    $sanitized_alt_tag = mysqli_real_escape_string($conn, $alt_tag); // Sanitize alt tag
    $sanitized_alt_description = mysqli_real_escape_string($conn, $alt_description); // Sanitize alt description

    // Insert query
    $insert_query = "INSERT INTO web_portfolios (title, category_id, link, image, alt_tag, alt_description) VALUES ('$sanitized_name', '$sanitized_category_id', '$sanitized_link', '$sanitized_image_path', '$sanitized_alt_tag', '$sanitized_alt_description')";

    // Execute query
    if (mysqli_query($conn, $insert_query)) {
        // Insert successful
        $_SESSION['successMessage']  = "Portfolio created successfully!";
        // Redirect to employee list page or display success message as per your requirement
    } else {
        // Insert failed
        $_SESSION['errorMessage'] = "Error creating Portfolio: " . mysqli_error($conn);
    }
    // Redirect or handle the case where ID is not provided
    header("Location: portfolio-projects-list.php");
    exit();
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1><?php echo $title?></h1>
            <a href="portfolio-projects-list.php" class="btn btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">

                <div class="form-group col-md-6">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" id="Title" name="title" placeholder="Title" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="category">Category</label>
                    <select id="category_id" class="form-control" name="category_id" required>
                        <option value="">Choose...</option>
                        <?php while ($branch_row = mysqli_fetch_assoc($branch_result)) : ?>
                            <option value="<?php echo $branch_row['id']; ?>"><?php echo $branch_row['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="link">Link</label>
                    <input type="text" class="form-control" id="link" name="link" placeholder="link" required>
                </div>

                <div class="form-group col-md-12">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file dropify" accept="image/*" name="image" placeholder="image" required>
                </div>

                <!-- New fields for alt tag and alt text -->
                <div class="form-group col-md-6">
                    <label for="alt_tag">Alt Tag</label>
                    <input type="text" class="form-control" id="alt_tag" name="alt_tag" placeholder="Alt Tag">
                </div>
                <div class="form-group col-md-6">
                    <label for="alt_description">Alt Description</label>
                    <textarea name="alt_description" class="form-control" colspan="5" rowspan="5" id="">

                    </textarea>
                </div>
                <!-- End of new fields -->

            </div>
            <button type="submit" class="btn btn-primary my-3">Submit</button>

        </form>
    </div>

</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
