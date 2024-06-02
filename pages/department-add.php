<?php
$title = "Create Department";
session_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $alt_tag = $_POST['alt_tag'];
    $alt_description = $_POST['alt_description'];

    $errorMessage = '';
    // Validation: Check if name is empty
    if (empty($name)) {
        $errorMessage = 'Name Field is required';
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
            $image_path = ''; // Set default image path if no image is uploaded
        }

        // Prepare and bind SQL statement
        $insert_query = "INSERT INTO departments (name, image, alt_tag, alt_description) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("ssss", $name, $image_path, $alt_tag, $alt_description);

        if ($stmt->execute()) {
            // Redirect or display success message as per your requirement
            $_SESSION['successMessage'] = "Record Created successfully!";
        } else {
            // Handle insert failure
            $errorMessage = "Error creating department: " . $stmt->error;
        }

        header("Location: department-list.php");
        exit();


    }
}

// Close statement
if (isset($stmt)) {
    $stmt->close();
}
?>


<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Add New Department</h1>
            <a href="department-list.php" class="btn btn-primary">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Department Name  <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Department Image</label>
                    <input type="file" class="form-control dropify" id="image" name="image" placeholder="Name">
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