<?php
$title = "Update Employee";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Fetch branch data for the dropdown
$branch_query = "SELECT * FROM branches";
$branch_result = mysqli_query($conn, $branch_query);

$department_query = "SELECT * FROM departments";
$department_result = mysqli_query($conn, $department_query);

$id = $_GET['id'];
$fetch_image_query = "SELECT image FROM employees WHERE id = ?";
$fetch_image_stmt = $conn->prepare($fetch_image_query);
$fetch_image_stmt->bind_param("i", $id);
$fetch_image_stmt->execute();
$fetch_image_result = $fetch_image_stmt->get_result();
$row = $fetch_image_result->fetch_assoc();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $branch_id = $_POST['branch'];
    $priority = $_POST['priority'];
    $ein_no = $_POST['ein_no'];
    $team_no = $_POST['team_no'];
    $department_id = $_POST['department_id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $alt_tag = $_POST['alt_tag'];
    $alt_description = $_POST['alt_description'];
    $dep_priority = $_POST['dep_priority'];

    // Check for required fields
    $errorMessage = '';
    if (empty($name)) {
        $errorMessage .= 'Name field is required.<br>';
    }
    if (empty($designation)) {
        $errorMessage .= 'Designation field is required.<br>';
    }
    if (empty($branch_id)) {
        $errorMessage .= 'Branch field is required.<br>';
    }
    if (empty($department_id)) {
        $errorMessage .= 'Department field is required.<br>';
    }
    if (empty($ein_no)) {
        $errorMessage .= 'EIN no field is required.<br>';
    }
    if (empty($team_no)) {
        $errorMessage .= 'Team no field is required.<br>';
    }

    // Check if a new image is uploaded
    $image_path = null;
    if ($_FILES["image"]["size"] > 0) {
        if ($row['image']) {
            unlink($row['image']); // Delete old image file
        }

        // Upload new image file
        $target_dir = "../uploads/";
        $image_name = $_FILES["image"]["name"];
        $image_name = str_replace(' ', '-', $image_name); // Remove spaces from the image name
        $image_path = $target_dir . $image_name;
        move_uploaded_file($_FILES["image"]["tmp_name"], $image_path);
    }

    // Sanitize inputs to prevent SQL injection
    $sanitized_name = mysqli_real_escape_string($conn, $name);
    $sanitized_designation = mysqli_real_escape_string($conn, $designation);
    $sanitized_ein_no = mysqli_real_escape_string($conn, $ein_no);
    $sanitized_team_no = mysqli_real_escape_string($conn, $team_no);
    $sanitized_email = mysqli_real_escape_string($conn, $email);
    $sanitized_phone = mysqli_real_escape_string($conn, $phone);
    $sanitized_alt_tag = mysqli_real_escape_string($conn, $alt_tag);
    $sanitized_alt_description = mysqli_real_escape_string($conn, $alt_description);

    // Use prepared statements to prevent SQL injection and handle empty fields
    $sql = "UPDATE employees SET name = ?, designation = ?, email = ?, phone = ?, branch_id = ?, priority = ?, department_id = ?, dep_priority = ?, ein_no = ?, team_no = ?, alt_description = ?, alt_tag = ?";
    if ($image_path) {
        $sql .= ", image = ?";
    }
    $sql .= " WHERE id = ?";

    $stmt = $conn->prepare($sql);
    if ($image_path) {
        $stmt->bind_param("ssssiiissssssi", $sanitized_name, $sanitized_designation, $sanitized_email, $sanitized_phone, $branch_id, $priority, $department_id, $dep_priority, $sanitized_ein_no, $sanitized_team_no, $sanitized_alt_description, $sanitized_alt_tag, $image_path, $id);
    } else {
        $stmt->bind_param("ssssiiisssssi", $sanitized_name, $sanitized_designation, $sanitized_email, $sanitized_phone, $branch_id, $priority, $department_id, $dep_priority, $sanitized_ein_no, $sanitized_team_no, $sanitized_alt_description, $sanitized_alt_tag, $id);
    }

    // Execute query
    if ($stmt->execute()) {
        $_SESSION['successMessage'] = "Employee updated successfully!";
    } else {
        $_SESSION['errorMessage'] = "Error updating employee: " . $stmt->error;
    }
    header('Location: employee-list.php');
    exit();
}

// Fetch employee details based on ID
$fetch_query = "SELECT * FROM employees WHERE id = ?";
$fetch_stmt = $conn->prepare($fetch_query);
$fetch_stmt->bind_param("i", $id);
$fetch_stmt->execute();
$fetch_result = $fetch_stmt->get_result();
$row = $fetch_result->fetch_assoc();

?>


<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center ">
            <h1>Update Employee</h1>
            <a href="employee-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">

                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $row['name']; ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" value="<?php echo $row['designation']; ?>" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="branch">Branch</label>
                    <select id="branch_id" class="form-control" name="branch" required>
                        <option value="">Choose...</option>
                        <?php while ($branch_row = mysqli_fetch_assoc($branch_result)) : ?>
                            <option value="<?php echo $branch_row['id']; ?>" <?php echo ($branch_row['id'] == $row['branch_id']) ? 'selected' : ''; ?>> <?php echo $branch_row['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="priority">Priority <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="priority" name="priority" placeholder="Priority" value="<?php echo $row['priority']; ?>">
                </div>


                <div class="form-group col-md-6">
                    <label for="department_id"> Department </label>
                    <select id="department_id" class="form-control" name="department_id" required>
                        <option value="">Choose...</option>
                        <?php while ($department_row = mysqli_fetch_assoc($department_result)) : ?>
                            <option value="<?php echo $department_row['id']; ?>" <?php echo ($department_row['id'] == $row['department_id']) ? 'selected' : ''; ?>><?php echo $department_row['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="dep_priority">Department Priority <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="dep_priority" name="dep_priority" placeholder="Department Priority" value="<?php echo $row['dep_priority']; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="ein">EIN No</label>
                    <input type="number" class="form-control" id="ein_no" name="ein_no" placeholder="Ein No" value="<?php echo $row['ein_no']; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="team">Team No</label>
                    <input type="text" class="form-control" id="team_no" name="team_no" placeholder="Team No" value="<?php echo $row['team_no']; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="phone">Phone <small class="text-primary">(optional)</small></label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="phone" value="<?php echo $row['phone']; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="team">email <small class="text-primary">(optional)</small></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?php echo $row['email']; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file dropify" accept="image/*" name="image" placeholder="image">
                </div>
                <div class="form-group col-md-6">
                    <label for="image">Existing Image</label>
                    <br>
                    <img src="<?php echo $row['image']; ?>" alt="" class="img-fluid w-25">
                </div>

                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <label for="alt_text">Alt Text</label>
                        <input type="text" class="form-control" id="alt_text" name="alt_tag" value="<?php echo $row['alt_tag'] ?>" placeholder="alt Text">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="shortDescription">Alt Description</label>
                        <textarea id="shortDescription" name="alt_description" placeholder="Description" class="form-control" cols="30" rows="10"><?php echo $row['alt_description'] ?></textarea>
                    </div>
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