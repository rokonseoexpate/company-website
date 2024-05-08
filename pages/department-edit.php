<?php
$title = "Update Department";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Check if department ID is provided for editing
$department_id = isset($_GET['id']) ? $_GET['id'] : null;
$edit_mode = !empty($department_id);

// Initialize variables
$name = '';
$image_path = '';

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
    } else {
        // Department not found, redirect to department list
        header("Location: department-list.php");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

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
        if ($edit_mode) {
            $image_path = $row['image'];
        } else {
            $image_path = ''; // Set default image path if no image is uploaded
        }
    }

    // Prepare and bind SQL statement
    if ($edit_mode) {
        $update_query = "UPDATE departments SET name = ?, image = ? WHERE id = ?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("ssi", $name, $image_path, $department_id);
    } else {
        $insert_query = "INSERT INTO departments (name, image) VALUES (?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("ss", $name, $image_path);
    }

    if ($stmt->execute()) {
        // Redirect or display success message as per your requirement
        header("Location: department-list.php");
        exit();
    } else {
        // Handle insert/update failure
        $errorMessage = $edit_mode ? "Error updating department: " : "Error creating department: ";
        $errorMessage .= $stmt->error;
    }

    // Close statement
    $stmt->close();
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