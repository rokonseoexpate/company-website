<?php
$title = "History Upload Projects";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description= $_POST['description'];

    // Sanitize and prepare image name
    $imageName = $_FILES["image"]["name"];
    $imageName = preg_replace("/[^a-zA-Z0-9.]/", "-", $imageName); // Remove special characters except for letters, numbers, and periods
    $imageName = str_replace(" ", "-", $imageName); // Replace spaces with hyphens

    // Handling image upload
    $targetDir = "../uploads/"; // Specify the directory where you want to store uploaded images
    $targetFilePath = $targetDir . $imageName;

    // Upload file to server
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
        // Insert notice into notices table
        $insert_query = "INSERT INTO history_projects (title, image, description) VALUES ('$title', '$targetFilePath','$description')";
        if (mysqli_query($conn, $insert_query)) {
            // Redirect or display success message as per your requirement
            $successMessage = "Project Created Successfully";
            header("Location: history-projects-list.php");
            exit();
        } else {
            // Handle insert failure
            $errorMessage = "Error creating notice: " . mysqli_error($conn);
        }
    } else {
        $errorMessage = "Sorry, there was an error uploading your file.";
    }
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1><?php echo $title;?></h1>
            <a href="history-projects-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">

                <div class="form-group col-md-12">
                    <label for="title">Title  <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" placeholder="Title" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="description">Description <span class="text-danger">*</span></label>
                    <textarea name="description"  id="summernote" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <div class="form-group col-md-12">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file dropify" accept="image/*" name="image" placeholder="Image">
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
