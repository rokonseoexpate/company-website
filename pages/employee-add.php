<?php
$title = "Create Employee";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Fetch branches from the database
$branch_query = "SELECT * FROM branches";
$branch_result = mysqli_query($conn, $branch_query);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $branch_id = $_POST['branch'];
    $ein_no = $_POST['ein_no'];
    $team_no = $_POST['team_no'];

    // Check if a new image is uploaded
    if ($_FILES["image"]["size"] > 0) {
        // Sanitize the file name
        $image_name = $_FILES["image"]["name"];
        $image_name = preg_replace("/[^\w\-\.]/", "-", $image_name); // Replace special characters with hyphens
        $image_name = preg_replace("/\s+/", "-", $image_name); // Replace spaces with hyphens

        // Upload new image file
        $target_dir = "../uploads/";
        $target_file = $target_dir . $image_name;
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image_path = $target_file;
    } else {
        $image_path = ''; // Set default image path if no image is uploaded
    }

    // Sanitize inputs to prevent SQL injection
    $sanitized_name = mysqli_real_escape_string($conn, $name);
    $sanitized_designation = mysqli_real_escape_string($conn, $designation);
    $sanitized_branch_id = mysqli_real_escape_string($conn, $branch_id);
    $sanitized_ein_no = mysqli_real_escape_string($conn, $ein_no);
    $sanitized_team_no = mysqli_real_escape_string($conn, $team_no);
    $sanitized_image_path = mysqli_real_escape_string($conn, $image_path);

    // Insert query
    $insert_query = "INSERT INTO employees (name, designation, branch_id, ein_no, team_no, image) VALUES ('$sanitized_name', '$sanitized_designation', '$sanitized_branch_id', '$sanitized_ein_no', '$sanitized_team_no', '$sanitized_image_path')";

    // Execute query
    if (mysqli_query($conn, $insert_query)) {
        // Insert successful
        $successMessage = "Employee created successfully!";
        // Redirect to employee list page or display success message as per your requirement
    } else {
        // Insert failed
        $errorMessage = "Error creating employee: " . mysqli_error($conn);
    }
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Add New Employee</h1>
            <a href="employee-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">

                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="branch">Branch</label>
                        <select id="branch_id" class="form-control" name="branch">
                            <option value="">Choose...</option>
                            <?php while ($branch_row = mysqli_fetch_assoc($branch_result)) : ?>
                                <option value="<?php echo $branch_row['id']; ?>"><?php echo $branch_row['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ein">EIN No</label>
                        <input type="number" class="form-control" id="ein_no" name="ein_no" placeholder="Ein No">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="team">Team No</label>
                        <input type="text" class="form-control" id="team_no" name="team_no" placeholder="Team No">
                    </div>

                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file dropify" accept="image/*" name="image" placeholder="image">
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
