<?php
$title = "Edit Department";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Fetch department data based on the provided ID
if (isset($_GET['id'])) {
    $department_id = $_GET['id'];
    $fetch_query = "SELECT * FROM departments WHERE id = $department_id";
    $fetch_result = mysqli_query($conn, $fetch_query);
    $department_row = mysqli_fetch_assoc($fetch_result);

    // Fetch all employees for the select dropdown
    $employee_query = "SELECT id, name FROM employees";
    $employee_result = mysqli_query($conn, $employee_query);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $department_id = $_POST['department_id'];
    $name = $_POST['name'];
    $employee_ids = $_POST['employee_id'];

    // Encode the array of employee IDs into JSON format
    $employee_ids_json = json_encode($employee_ids);

    // Update department in the departments table
    $update_query = "UPDATE departments SET name = '$name', employee_id = '$employee_ids_json' WHERE id = $department_id";
    if (mysqli_query($conn, $update_query)) {
        // Redirect or display success message as per your requirement
        header("Location: department-list.php");
        exit();
    } else {
        // Handle update failure
        $errorMessage = "Error updating department: " . mysqli_error($conn);
    }
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Edit Department</h1>
            <a href="department-list.php" class="btn btn-primary">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <input type="hidden" name="department_id" value="<?php echo $department_row['id']; ?>">
                <div class="form-group col-md-6">
                    <label for="name">Department Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $department_row['name']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label>Choose Employee (Multiple)</label>
                    <select class="select2" name="employee_id[]" multiple="multiple" data-placeholder="Select Employees" style="width: 100%;">
                        <?php
                        while ($employee_row = mysqli_fetch_assoc($employee_result)) {
                            $selected = in_array($employee_row['id'], json_decode($department_row['employee_id'])) ? "selected" : "";
                            echo "<option value='{$employee_row['id']}' $selected>{$employee_row['name']}</option>";
                        }
                        ?>
                    </select>
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
