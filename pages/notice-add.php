<?php
$title = "Create Notice";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $alt_tag = $_POST['alt_tag'];
    $alt_description = $_POST['alt_description'];

    if (empty($title)) {
        $_SESSION['errorMessage'] = "Title is required.";
    }

    if (empty($date)) {
        $_SESSION['errorMessage'] = "Date field is required.";
    }

    if ($_SESSION['errorMessage'] == null) {
        // Sanitize and prepare image name
        $imageName = $_FILES["image"]["name"];
        $imageName = preg_replace("/[^a-zA-Z0-9.]/", "-", $imageName); // Remove special characters except for letters, numbers, and periods
        $imageName = str_replace(" ", "-", $imageName); // Replace spaces with hyphens

        // Handling image upload
        $targetDir = "../uploads/"; // Specify the directory where you want to store uploaded images
        $targetFilePath = $targetDir . $imageName;

        // Upload file to server
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            // Handling PDF upload
            $pdfName = $_FILES["pdf"]["name"];
            $pdfName = preg_replace("/[^a-zA-Z0-9.]/", "-", $pdfName); // Remove special characters except for letters, numbers, and periods
            $pdfName = str_replace(" ", "-", $pdfName); // Replace spaces with hyphens

            $pdfTargetFilePath = $targetDir . $pdfName;

            if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $pdfTargetFilePath)) {
                // Insert notice into notices table
                $insert_query = "INSERT INTO notices (title, date, image, files, alt_tag, alt_description) VALUES ('$title','$date', '$targetFilePath', '$pdfTargetFilePath', '$alt_tag', '$alt_description')";
                if (mysqli_query($conn, $insert_query)) {
                    // Redirect or display success message as per your requirement
                    $_SESSION['successMessage']  = "Notice Created Successfully";
                } else {
                    // Handle insert failure
                    $_SESSION['errorMessage'] = "Error creating notice: " . mysqli_error($conn);
                }
            } else {
                $_SESSION['errorMessage'] = "Sorry, there was an error uploading your PDF file.";
            }
        } else {
            $_SESSION['errorMessage'] = "Sorry, there was an error uploading your image file.";
        }
    } else {
        header("Location: notice-add.php");
        exit();
    }
    header("Location: notice-list.php");
    exit();
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Add New Notice</h1>
            <a href="notice-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="title">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="date">Date <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="date" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="image">Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control-file dropify" accept="image/*" name="image" placeholder="Image">
                </div>
                <div class="form-group col-md-6">
                    <label for="pdf">PDF <span class="text-danger">*</span></label>
                    <input type="file" class="form-control-file" accept=".pdf" name="pdf" placeholder="PDF" required>
                </div>

                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <label for="alt_text">Alt Text</label>
                        <input type="text" class="form-control" id="alt_text" name="alt_tag" value="" placeholder="alt Text">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="shortDescription">Alt Description</label>
                        <textarea id="shortDescription" name="alt_description" placeholder="Description" class="form-control" cols="30" rows="10"></textarea>
                    </div>
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