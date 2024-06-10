<?php
$title = "Update Department";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!$_SESSION['username']) {
    header("Location: login.php");
}
// Check if department ID is provided for editing
$department_id = isset($_GET['id']) ? $_GET['id'] : null;
$edit_mode = !empty($department_id);

// Initialize variables
$name = '';
$image_path = '';
$alt_tag = '';
$alt_description = '';

// If in edit mode, retrieve department details
if ($edit_mode) {
    $select_query = "SELECT * FROM departments WHERE id = ?";
    $stmt = $conn->prepare($select_query);
    $stmt->bind_param("i", $department_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $image_path = $row['image'];
        $alt_tag = $row['alt_tag'];
        $alt_description = $row['alt_description'];
    } else {
        // Department not found, redirect to department list
        header("Location: department-list.php");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $alt_tag = $_POST['alt_tag'];
    $alt_description = $_POST['alt_description'];
    $errorMessage = '';
    if (empty($name)) {
        $errorMessage =  'Name field is required.';
    }

    if (empty($errorMessage)) {
        // Check if a new image is uploaded
        if ($_FILES["image"]["size"] > 0) {
            // Sanitize the file name
            $image_name = $_FILES["image"]["name"];
            $image_name = preg_replace("/[^\w\-\.]/", "-", $image_name);
            $image_name = preg_replace("/\s+/", "-", $image_name);

            // Upload new image file
            $target_dir = "../uploads/";
            $target_file = $target_dir . $image_name;
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            $image_path = $target_file;
        } else {
            // If no new image uploaded, retain existing image path
            $image_path = $row['image']; // Assuming $row is accessible here
        }

        // Prepare and bind SQL statement
        if ($edit_mode) {
            $update_query = "UPDATE departments SET name = ?, image = ?, alt_tag=?, alt_description=? WHERE id = ?";
            $stmt = $conn->prepare($update_query);
            $stmt->bind_param("ssssi", $name, $image_path, $alt_tag, $alt_description, $department_id);
        } else {
            $insert_query = "INSERT INTO departments (name, image, alt_tag, alt_description) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($insert_query);
            $stmt->bind_param("ssss", $name, $image_path, $alt_tag, $alt_description);
        }
        if ($stmt->execute()) {
            $_SESSION['successMessage'] = "Record Updated successfully!";
        } else {
            // Handle insert/update failure
            $_SESSION['errorMessage'] =   "Error updating department: " . $stmt->error;;
        }
        // Close statement
        $stmt->close();
    }

    header("Location: department-list.php");
    exit();

}
?>


<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1><?php echo $edit_mode ? "Edit Department" : "Add New Department"; ?></h1>
            <a href="department-list.php" class="btn btn-primary">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Department Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $name; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="image">Department Image</label>
                    <input type="file" class="form-control dropify" id="image" name="image" placeholder="Name">
                    <img src="<?php echo $image_path; ?>" alt="" width="200px">
                </div>

                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <label for="alt_text">Alt Text</label>
                        <input type="text" class="form-control" id="alt_text" name="alt_tag" value="<?php echo $alt_tag ?>" placeholder="alt Text">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="shortDescription">Alt Description</label>
                        <textarea id="shortDescription" name="alt_description" placeholder="Description" class="form-control" cols="30" rows="10"><?php echo $alt_description ?></textarea>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary my-3"><?php echo $edit_mode ? "Update" : "Submit"; ?></button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>