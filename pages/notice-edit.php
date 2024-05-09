<?php
$title = "Update Notice";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $date = $_POST['date'];

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
            // Update notice in notices table with new image
            $update_query = "UPDATE notices SET title = '$title', date = '$date', image = '$targetFilePath' WHERE id = '$id'";
            if (mysqli_query($conn, $update_query)) {
                // Redirect or display success message as per your requirement
                $successMessage = "Notice Updated Successfully";
                header("Location: notice-list.php");
                exit();
            } else {
                // Handle update failure
                $errorMessage = "Error updating notice: " . mysqli_error($conn);
            }
        } else {
            $errorMessage = "Sorry, there was an error uploading your file.";
        }
    }

    // Check if new PDF file is uploaded
    if (!empty($_FILES["files"]["name"])) {
        // Handling PDF file upload
        $targetDir = "../uploads/"; // Specify the directory where you want to store uploaded files
        $pdfFileName = $_FILES["files"]["name"];
        $pdfFilePath = $targetDir . $pdfFileName;

        // Upload file to server
        if (move_uploaded_file($_FILES["files"]["tmp_name"], $pdfFilePath)) {
            // Update notice in notices table with new PDF file name
            $updatePdf_query = "UPDATE notices SET files = '$pdfFileName' WHERE id = '$id'";
            if (mysqli_query($conn, $updatePdf_query)) {
                // Redirect or display success message as per your requirement
                $successMessage = "Notice Updated Successfully";
                header("Location: notice-list.php");
                exit();
            } else {
                // Handle update failure
                $errorMessage .= "<br>Error updating PDF file: " . mysqli_error($conn);
            }
        } else {
            $errorMessage .= "<br>Sorry, there was an error uploading your PDF file.";
        }
    }
} else {
    // Display form for updating notice
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // Fetch notice details from database
        $fetch_query = "SELECT * FROM notices WHERE id = '$id'";
        $result = mysqli_query($conn, $fetch_query);
        $notice = mysqli_fetch_assoc($result);
    } else {
        // Redirect back to the list if ID is not provided
        header("Location: notice-list.php");
        exit();
    }
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Update Notice</h1>
            <a href="notice-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $notice['id']; ?>">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $notice['title']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="date" value="<?php echo $notice['date']; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file dropify" accept="image/*" name="image" placeholder="Image">
                </div>
                <div class="form-group col-md-6">
                    <label for="image">Existing Image</label>
                    <br>
                    <img src="<?php echo $notice['image']; ?>" alt="Notice Image" width="250px">
                </div>
                <div class="form-group col-md-6">
                    <label for="pdf_file">PDF File</label>
                    <input type="file" class="form-control-file" accept=".pdf" name="files" placeholder="PDF File">
                    <br>
                    <a href="<?php echo $notice['files']; ?>" download="<?php echo $notice['files']; ?>">Your Existing pdf file <?php echo $notice['files']; ?></a>
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
