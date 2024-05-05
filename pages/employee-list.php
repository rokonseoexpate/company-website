<?php
$title = "Employee List";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Function to delete image file
function deleteImage($imagePath) {
    if ($imagePath && file_exists($imagePath)) {
        unlink($imagePath); // Delete the file
    }
}

// Handle delete operation
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Fetch image path of the employee to be deleted
    $fetch_query = "SELECT image FROM employees WHERE id = $delete_id";
    $fetch_result = mysqli_query($conn, $fetch_query);
    $image_row = mysqli_fetch_assoc($fetch_result);
    $image_path = $image_row ? $image_row['image'] : null;

    // Delete the employee record from the database
    $delete_query = "DELETE FROM employees WHERE id = $delete_id";


    if (mysqli_query($conn, $delete_query)) {
        // If deletion from database is successful, delete the image file
        deleteImage($image_path);
        $successMessage = "Employee deleted successfully.";
        echo $successMessage;
    } else {
        $successMessage = "Error: Unable to delete employee.";
    }
}

// Fetch employee data from the database
$query = "SELECT employees.*, branches.name AS branch_name FROM employees LEFT JOIN branches ON employees.branch_id = branches.id";
$result = mysqli_query($conn, $query);

?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Employee List</h1>
            <a href="employee-add.php" class="btn btn-sm btn-info">Add New</a>
        </div>
        <table id="example1" class="table table-striped table-bordered">
            <thead>
            <tr class="text-center">
                <th>#</th>
                <th>Branch</th>
                <th>Name</th>
                <th>Designation</th>
                <th>EIN No</th>
                <th>Team No</th>
                <th>Image</th>
                <th class="text-right px-4">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $count = 1;
            while ($row = mysqli_fetch_assoc($result)) :
                ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['branch_name']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['designation']; ?></td>
                    <td><?php echo $row['ein_no']; ?></td>
                    <td><?php echo $row['team_no']; ?></td>
                    <td>
                        <?php if ($row['image'] && file_exists($row['image'])) : ?>
                            <img src="<?php echo $row['image']; ?>" class="img-fluid w-25" alt="">
                        <?php else : ?>
                            <span>No Image</span>
                        <?php endif; ?>
                    </td>
                    <td class="text-right">
                        <a href="employee-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                        <a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</a>
                    </td>
                </tr>
                <?php
                $count++;
            endwhile;
            ?>
            </tbody>
        </table>
    </div>

</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
