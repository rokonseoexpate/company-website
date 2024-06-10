<?php
$title = "Employee Details";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!$_SESSION['username']) {
    header("Location: login.php");
}
$id = $_GET['id'];

// Fetch employee details along with branch and department details based on ID
$fetch_query = "
    SELECT 
        e.*, 
        b.name AS branch_name, 
        d.name AS department_name 
    FROM employees e
    LEFT JOIN branches b ON e.branch_id = b.id
    LEFT JOIN departments d ON e.department_id = d.id
    WHERE e.id = ?
";
$fetch_stmt = $conn->prepare($fetch_query);
$fetch_stmt->bind_param("i", $id);
$fetch_stmt->execute();
$fetch_result = $fetch_stmt->get_result();
$employee = $fetch_result->fetch_assoc();
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Employee Details</h1>
            <a href="employee-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <table class="table table-striped table-hover table-bordered">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td><?php echo $employee['name']; ?></td>
                </tr>
                <tr>
                    <th>Designation</th>
                    <td><?php echo $employee['designation']; ?></td>
                </tr>
                <tr>
                    <th>Priority</th>
                    <td><?php echo $employee['priority']; ?></td>
                </tr>
                <tr>
                    <th>EIN No</th>
                    <td><?php echo $employee['ein_no']; ?></td>
                </tr>
                <tr>
                    <th>Team No</th>
                    <td><?php echo $employee['team_no']; ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?php echo $employee['phone']; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $employee['email']; ?></td>
                </tr>
                <tr>
                    <th>Branch</th>
                    <td><?php echo $employee['branch_name']; ?></td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td><?php echo $employee['department_name']; ?></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><img src="<?php echo $employee['image']; ?>" alt="<?php echo $employee['alt_tag']; ?>"></td>
                </tr>
                <tr>
                    <th>Alt Text</th>
                    <td><?php echo $employee['alt_tag']; ?></td>
                </tr>
                <tr>
                    <th>Alt Description</th>
                    <td><?php echo $employee['alt_description']; ?></td>
                </tr>
            </tbody>
        </table>
        <a href="employee-list.php">
            <button class="btn btn-primary mt-4">Back</button>
        </a>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
