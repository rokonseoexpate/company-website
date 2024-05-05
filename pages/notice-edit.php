<?php
$title = "Update Notice";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Check if notice ID is provided via GET request
if (isset($_GET['id'])) {
    $notice_id = $_GET['id'];

    // Fetch notice details from database
    $select_query = "SELECT * FROM notices WHERE id = $notice_id";
    $result = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_assoc($result);

    // Check if notice exists
    if (!$row) {
        echo "Notice not found";
        exit();
    }

    // Process update form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $date = $_POST['date'];

        // Check if a new image file is uploaded
        if ($_FILES["image"]["name"]) {
            // Sanitize and prepare image name
            $imageName = $_FILES["image"]["name"];
            $imageName = preg_replace("/[^a-zA-Z0-9.]/", "-", $imageName); // Remove special characters except for letters, numbers, and periods
            $imageName = str_replace(" ", "-", $imageName); // Replace spaces with hyphens

            // Handling image upload
            $targetDir = "../uploads/"; // Specify the directory where you want to store uploaded images
            $targetFilePath = $targetDir . $imageName;

            // Upload file to server
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // Update notice with new image
                $update_query = "UPDATE notices SET title = '$title', date = '$date', image = '$targetFilePath' WHERE id = $notice_id";
            } else {
                $errorMessage = "Sorry, there was an error uploading your file.";
            }
        } else {
            // Update notice without changing the image
            $update_query = "UPDATE notices SET title = '$title', date = '$date' WHERE id = $notice_id";
        }

        // Execute the update query
        if (isset($update_query) && mysqli_query($conn, $update_query)) {
            // Redirect or display success message as per your requirement
            $successMessage = "Notice Updated Successfully";
            header("Location: notice-list.php");
            exit();
        } else {
            // Handle update failure
            $errorMessage = "Error updating notice: " . mysqli_error($conn);
        }
    }
} else {
    echo "Notice ID not provided";
    exit();
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Update Notice</h1>
            <a href="notice-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $row['title']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="<?php echo $row['date']; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file dropify" accept="image/*" name="image" placeholder="Image">
                </div>

                <div class="form-group col-md-6">
                    <label for="image">Existing Image</label>
                    <br>
                    <img src="<?php echo $row['image']; ?>" alt="" class="img-fluid w-25">
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
