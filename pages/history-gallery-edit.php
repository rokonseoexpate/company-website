<?php
$title = "Update Image";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Check if image ID is provided via GET request
if (isset($_GET['id'])) {
    $image_id = $_GET['id'];

    // Fetch image details from database
    $select_query = "SELECT * FROM history_galleries WHERE id = $image_id";
    $result = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_assoc($result);

    // Check if image exists
    if (!$row) {
        echo "Image not found";
        exit();
    }

    // Process update form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['image_type'];

        // Check if a new image file is uploaded
        if (!empty($_FILES["image"]["name"])) {
            // Sanitize and prepare image name
            $imageName = $_FILES["image"]["name"];
            $imageName = preg_replace("/[^a-zA-Z0-9.]/", "-", $imageName); // Remove special characters except for letters, numbers, and periods
            $imageName = str_replace(" ", "-", $imageName); // Replace spaces with hyphens

            // Handling image upload
            $targetDir = "../uploads/"; // Specify the directory where you want to store uploaded images
            $targetFilePath = $targetDir . $imageName;

            // Upload file to server
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // Update image details in the database
                $update_query = "UPDATE history_galleries SET image_type = '$title', image = '$targetFilePath' WHERE id = $image_id";
                if (mysqli_query($conn, $update_query)) {
                    // Redirect or display success message as per your requirement
                    $successMessage = "Image Updated Successfully";
                    header("Location: history-gallery-list.php");
                    exit();
                } else {
                    // Handle update failure
                    $errorMessage = "Error updating image: " . mysqli_error($conn);
                }
            } else {
                $errorMessage = "Sorry, there was an error uploading your file.";
            }
        } else {
            // If no new image file is uploaded, update only the image type
            $update_query = "UPDATE history_galleries SET image_type = '$title' WHERE id = $image_id";
            if (mysqli_query($conn, $update_query)) {
                // Redirect or display success message as per your requirement
                $successMessage = "Image Type Updated Successfully";
                header("Location: history-gallery-list.php");
                exit();
            } else {
                // Handle update failure
                $errorMessage = "Error updating image type: " . mysqli_error($conn);
            }
        }
    }
} else {
    echo "Image ID not provided";
    exit();
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Update Image</h1>
            <a href="history-gallery-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="image_type">Image Type</label>
                    <select name="image_type" id="" class="form-control form-select">
                        <option value="1" <?php if ($row['image_type'] == 1) echo "selected"; ?>>overview_success</option>
                        <option value="2" <?php if ($row['image_type'] == 2) echo "selected"; ?>>customers_associates</option>
                        <option value="3" <?php if ($row['image_type'] == 3) echo "selected"; ?>>Highlighted</option>
                        <option value="4" <?php if ($row['image_type'] == 4) echo "selected"; ?>>Achievements</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file dropify" accept="image/*" name="image" placeholder="Image">
                </div>

                <div class="form-group col-md-6">
                    <label for="image">Image</label><br>
                    <img src=" <?php echo $row['image']; ?>" alt="" width="250px">
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
