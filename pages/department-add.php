<?php
$title = "Create Department";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $employee_ids = $_POST['employee_id'];

    // Encode the array of employee IDs into JSON format
    $employee_ids_json = json_encode($employee_ids);

    // Insert department into departments table
    $insert_query = "INSERT INTO departments (name, employee_id) VALUES ('$name', '$employee_ids_json')";
    if (mysqli_query($conn, $insert_query)) {
        // Redirect or display success message as per your requirement
        header("Location: department-list.php");
        exit();
    } else {
        // Handle insert failure
        $errorMessage = "Error creating department: " . mysqli_error($conn);
    }
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
                    <label for="name">Department Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label>Choose Employee (Multiple)</label>
                    <select class="select2" name="employee_id[]" multiple="multiple" data-placeholder="Select Employees" style="width: 100%;">
                        <?php
                        $employee_query = "SELECT id, name FROM employees";
                        $employee_result = mysqli_query($conn, $employee_query);
                        while ($employee_row = mysqli_fetch_assoc($employee_result)) {
                            echo "<option value='{$employee_row['id']}'>{$employee_row['name']}</option>";
                        }
                        ?>
                    </select>
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
