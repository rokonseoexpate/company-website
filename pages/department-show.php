<?php
$title = "Department Details";
session_start();
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
?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Department Details</h1>
                <a href="department-list.php" class="btn btn-sm btn-info">View List</a>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <tbody>
                    <tr>
                        <th>Department Name</th>
                        <td><?php echo $name; ?></td>
                    </tr>
                    <tr>
                        <th>Department Image</th>
                        <td> <img src="<?php echo $image_path; ?>" alt="" width="200px"></td>
                    </tr>
                    <tr>
                        <th>Alt Text</th>
                        <td><?php echo $alt_tag ?></td>
                    </tr>
                    <tr>
                        <th>Alt Text</th>
                        <td><?php echo $alt_tag ?></td>
                    </tr>
                    <tr>
                        <th>Alt Description</th>
                        <td><?php echo $alt_description ?></td>
                    </tr>
                </tbody>
            </table>
            <a href="department-list.php">
                <button class="btn btn-primary mt-4"> Back</button>
            </a>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>