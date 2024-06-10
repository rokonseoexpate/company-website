<?php
$title = "Update Notice";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
$id = $_GET['id'];
// Fetch notice details from database
$fetch_query = "SELECT * FROM notices WHERE id = '$id'";
$result = mysqli_query($conn, $fetch_query);
$notice = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $date = $_POST['date'];


    if (empty($title)) {
        $_SESSION['errorMessage'] = "Title is required.";
    }

    if (empty($date)) {
        $_SESSION['errorMessage'] = "Date field is required.";
    }

    // Check if new image is uploaded
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
            $updateImage = ", image = '$targetFilePath'";
        } else {
            $errorMessage = "Sorry, there was an error uploading your image.";
        }
    } else {
        $updateImage = ""; // No image update
    }

    // Check if new PDF file is uploaded
    if (!empty($_FILES["files"]["name"])) {
        // Handling PDF file upload
        $pdfFileName = $_FILES["files"]["name"];
        $pdfFileName = preg_replace("/[^a-zA-Z0-9.]/", "-", $pdfFileName); // Remove special characters except for letters, numbers, and periods
        $pdfFileName = str_replace(" ", "-", $pdfFileName); // Replace spaces with hyphens
        $pdfFilePath = $targetDir . $pdfFileName;

        // Upload file to server
        if (move_uploaded_file($_FILES["files"]["tmp_name"], $pdfFilePath)) {
            $updatePdf = ", files = '$pdfFileName'";
        } else {
            $errorMessage .= "Sorry, there was an error uploading your PDF file.";
        }
    } else {
        $updatePdf = ""; // No PDF update
    }

    if ($_SESSION['errorMessage'] == null) {
        $update_query = "UPDATE notices SET title = '$title', date = '$date' $updateImage $updatePdf WHERE id = '$id'";


        if (mysqli_query($conn, $update_query)) {
            $_SESSION['successMessage'] = "Record updated successfully!";
            // Redirect or display success message as per your requirement

        } else {
            // Handle update failure
            $_SESSION['errorMessage'] = "Error updating notice: " . mysqli_error($conn);
        }
    } else {
        header("Location: notice-edit.php?id=".$notice['id']);
        exit();
    }

    header("Location: notice-list.php");
    exit();
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Update Notice</h1>
            <a href="notice-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <?php if (!empty($errorMessage)) : ?>
            <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
        <?php endif; ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $notice['id']; ?>">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="title">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $notice['title']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="date">Date <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="date" value="<?php echo $notice['date']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="image">Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control-file dropify" accept="image/*" name="image" placeholder="Image">
                    <?php if (!empty($notice['image'])) : ?>
                        <br>
                        <img src="<?php echo $notice['image']; ?>" alt="Notice Image" width="250px">
                    <?php endif; ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="pdf_file">PDF File <span class="text-danger">*</span></label>
                    <input type="file" class="form-control-file" accept=".pdf" name="files" placeholder="PDF File">
                    <?php if (!empty($notice['files'])) : ?>
                        <br>
                        <a href="<?php echo $notice['files']; ?>" download="<?php echo $notice['files']; ?>">Your Existing pdf file <?php echo $notice['files']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary my-3">Update</button>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>