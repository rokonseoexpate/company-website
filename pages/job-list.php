<?php
$title = "Jobs list";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Delete functionality
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql_delete = "DELETE FROM jobs WHERE id = ?";
    $stmt = $conn->prepare($sql_delete);
    $stmt->bind_param("i", $delete_id);

    if ($stmt->execute()) {
        $_SESSION['successMessage'] = "Record deleted successfully!";

    } else {
        $_SESSION['errorMessage']  = "Error deleting record: " . $stmt->error;
    }
    header("Location: $_SERVER[PHP_SELF]");
    exit();
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <div class="card-header">
                <h1><?php echo $title; ?></h1>
            </div>
            <div>
                <a href="job-add.php" class="btn btn-primary">+</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Job Title</th>
                        <th>Job Type</th>
                        <th>Vacancies</th>
                        <th>Deadline</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $qry = "SELECT * FROM jobs ORDER BY id DESC";
                    $result = $conn->query($qry);

                    if ($result) {
                        $i = 1;
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['job_type']; ?></td>
                                <td><?php echo $row['vacancies']; ?></td>
                                <td><?php echo $row['deadline']; ?></td>
                                <td class="align-middle">
                                    <div class="d-inline-flex justify-content-center">
                                        <a href="job-edit.php?id=<?php echo $row['id']; ?>">
                                            <button class="btn btn-sm btn-info mr-1"> <i class="fa-solid fa-pen-to-square"></i></button></a>
                                        <a href="?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">
                                            <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button></a>
                                    </div>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "Error: " . $conn->error;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>