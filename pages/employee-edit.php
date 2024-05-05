<?php
$title = "Update Employee";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Fetch branch data for the dropdown
$branch_query = "SELECT * FROM branches";
$branch_result = mysqli_query($conn, $branch_query);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $branch_id = $_POST['branch'];
    $ein_no = $_POST['ein_no'];
    $team_no = $_POST['team_no'];

    // Check if a new image is uploaded
    $image_path = null;
    if ($_FILES["image"]["size"] > 0) {
        // Upload new image file
        $target_dir = "../uploads/";
        $image_name = $_FILES["image"]["name"];
        // Remove spaces from the image name
        $image_name = str_replace(' ', '', $image_name);
        $image_path = $target_dir . $image_name;
        move_uploaded_file($_FILES["image"]["tmp_name"], $image_path);
    }

    // Sanitize inputs to prevent SQL injection
    $sanitized_name = mysqli_real_escape_string($conn, $name);
    $sanitized_designation = mysqli_real_escape_string($conn, $designation);
    $sanitized_ein_no = mysqli_real_escape_string($conn, $ein_no);
    $sanitized_team_no = mysqli_real_escape_string($conn, $team_no);

    // Update query
    $id = $_GET['id'];
    $sql = "UPDATE employees SET name = '$sanitized_name', designation = '$sanitized_designation', branch_id = $branch_id, ein_no = '$sanitized_ein_no', team_no = '$sanitized_team_no'";
    if ($image_path) {
        $sql .= ", image = '$image_path'";
    }
    $sql .= " WHERE id = $id";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        $successMessage = "Employee updated successfully!";
        // Redirect to employee list page
        header('Location: employee-list.php');
        exit();
    } else {
        $errorMessage = "Error updating employee: " . mysqli_error($conn);
    }
}

// Fetch employee details based on ID
$id = $_GET['id'];
$fetch_query = "SELECT * FROM employees WHERE id = $id";
$fetch_result = mysqli_query($conn, $fetch_query);
$row = mysqli_fetch_assoc($fetch_result);

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
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $row['name']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" value="<?php echo $row['designation']; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="branch">Branch</label>
                    <select id="branch_id" class="form-control" name="branch">
                        <option value="">Choose...</option>
                        <?php while ($branch_row = mysqli_fetch_assoc($branch_result)) : ?>
                            <option value="<?php echo $branch_row['id']; ?>" <?php echo ($branch_row['id'] == $row['branch_id']) ? 'selected' : ''; ?> > <?php echo $branch_row['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="ein">EIN No</label>
                    <input type="number" class="form-control" id="ein_no" name="ein_no" placeholder="Ein No" value="<?php echo $row['ein_no']; ?>">
                </div>

                <div class="form-group col-md-2">
                    <label for="team">Team No</label>
                    <input type="text" class="form-control" id="team_no" name="team_no" placeholder="Team No" value="<?php echo $row['team_no']; ?>">
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

                    <button type="submit" class="btn btn-primary my-3">Update</button>

            </div>

        </form>
    </div>

</div>
<?php

$content = ob_get_clean();
include '../layouts/master.php';
?>
