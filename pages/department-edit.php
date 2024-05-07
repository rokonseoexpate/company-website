<?php
$title = "Update Department";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Check if department ID is provided
if (!isset($_GET['id'])) {
    header("Location: department-list.php"); // Redirect if ID is not provided
    exit();
}

$department_id = $_GET['id'];

// Fetch department details from the database
$query = "SELECT * FROM departments WHERE id = $department_id";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    header("Location: department-list.php"); // Redirect if department is not found
    exit();
}

$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    // Update department in departments table
    $update_query = "UPDATE departments SET name = '$name' WHERE id = $department_id";
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
            <a href="department-list.php" class="btn btn-primary">Back to List</a>
        </div>
        <form action="" method="POST">
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="name">Department Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $row['name']; ?>">
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
