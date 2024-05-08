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
    $select_query = "SELECT * FROM history_galleries WHERE id = ?";
    $stmt = $conn->prepare($select_query);
    $stmt->bind_param("i", $image_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Check if image exists
    if (!$row) {
        echo "Image not found";
        exit();
    }

    // Process update form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $title = $_POST['title'];
        $short_title = $_POST['short_title'];
        $image_type = $_POST['image_type'];

        $image_path = $row['image']; // Default to the current image path

        if ($_FILES["image"]["size"] > 0) {
            // Upload new image file
            $target_dir = "../uploads/";
            $image_name = $_FILES["image"]["name"];
            // Remove spaces from the image name
            $image_name = str_replace(' ', '', $image_name);
            $image_path = $target_dir . $image_name;
            move_uploaded_file($_FILES["image"]["tmp_name"], $image_path);
        }

        // Update query
        $id = $_GET['id'];
        $sql = "UPDATE history_galleries SET title = ?, short_title = ?, image_type = ?";
        // Only add image column to the update query if a new image was uploaded
        if ($_FILES["image"]["size"] > 0) {
            $sql .= ", image = ?";
        }
        $sql .= " WHERE id = ?";

        $stmt = $conn->prepare($sql);
        if ($_FILES["image"]["size"] > 0) {
            $stmt->bind_param("ssssi", $title, $short_title, $image_type, $image_path, $id);
        } else {
            $stmt->bind_param("sssi", $title, $short_title, $image_type, $id);
        }

        // Execute query
        if ($stmt->execute()) {
            $successMessage = "Updated successfully!";
            // Redirect to employee list page
            header('Location: history-gallery-list.php');
            exit();
        } else {
            $errorMessage = "Error updating employee: " . $stmt->error;
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
                <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Title" class="form-control" value="<?php echo $row['title']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="short_title">Short Title</label>
                    <input type="text" name="short_title" placeholder="Short Title" class="form-control" value="<?php echo $row['short_title']; ?>">
                </div>
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
                    <img src="<?php echo $row['image']; ?>" alt="" width="250px">
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
