<?php
$title = "Update Image";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Check if image ID is provided via GET request
if (isset($_GET['id'])) {
    $image_id = $_GET['id'];

    // Fetch image details from database
    $select_query = "SELECT * FROM history_projects WHERE id = $image_id";
    $result = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_assoc($result);

    // Check if image exists
    if (!$row) {
        echo "Image not found";
        exit();
    }


    $imageQuery = "SELECT image FROM history_projects WHERE id = $image_id";
    $imageResult = mysqli_query($conn, $imageQuery);
    $imageRow = mysqli_fetch_assoc($imageResult);

    // Process update form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $description = $_POST['description'];

        // Check if a new image file is uploaded
        if (!empty($_FILES["image"]["name"])) {
            // Sanitize and prepare image name
            $imageName = $_FILES["image"]["name"];
            $imageName = preg_replace("/[^a-zA-Z0-9.]/", "-", $imageName); // Remove special characters except for letters, numbers, and periods
            $imageName = str_replace(" ", "-", $imageName); // Replace spaces with hyphens

            // Handling image upload
            $targetDir = "../uploads/"; // Specify the directory where you want to store uploaded images
            $targetFilePath = $targetDir . $imageName;

            if (file_exists($imageRow['image'])) {
                unlink($imageRow['image']);
            }
            
            // Upload file to server
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // Update image details in the database
                $update_query = "UPDATE history_projects SET title = '$title', description = '$description', image = '$targetFilePath' WHERE id = $image_id";
                if (mysqli_query($conn, $update_query)) {
                    // Redirect or display success message as per your requirement
                    $_SESSION['successMessage']  = "Updated Successfully";
                    header("Location: history-projects-list.php");
                    exit();
                } else {
                    // Handle update failure
                    $_SESSION['errorMessage'] = "Error updating image: " . mysqli_error($conn);
                }
            } else {
                $_SESSION['errorMessage'] = "Sorry, there was an error uploading your file.";
            }
        } else {
            // If no new image file is uploaded, update only the image type
            $update_query = "UPDATE history_projects SET title = '$title', description = '$description' WHERE id = $image_id";
            if (mysqli_query($conn, $update_query)) {
                // Redirect or display success message as per your requirement
                $_SESSION['successMessage']  = "Updated Successfully";
            } else {
                // Handle update failure
                $_SESSION['errorMessage']  = "Error updating image type: " . mysqli_error($conn);
            }
            header("Location: history-projects-list.php");
            exit();
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
            <h1><?php echo $title; ?></h1>
            <a href="history-projects-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">

                <div class="form-group col-md-12">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $row['title']; ?>">
                </div>
                <div class="form-group col-md-12">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?php echo $row['description']; ?></textarea>
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