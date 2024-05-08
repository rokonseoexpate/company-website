<?php
$title = "History Projects List";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="history-projects-add.php" class="btn btn-sm btn-info">Add New</a>
        </div>
        <table id="example1" class="table table-striped table-bordered">
            <thead>
            <tr class="text-center">
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th class="text-right px-4">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $count = 1;
                $qry = "SELECT * FROM history_projects ORDER BY id DESC";
                $result = mysqli_query($conn, $qry); // Use mysqli_query() to execute the query

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                <tr>
                    <td><?php echo $count++; ?></td>

                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['description']; ?></td>

                    <td>
                        <?php if ($row['image'] && file_exists($row['image'])) : ?>
                            <img src="<?php echo $row['image']; ?>" class="img-fluid w-25" alt="">
                        <?php else : ?>
                            <span>No Image</span>
                        <?php endif; ?>
                    </td>
                    <td class="text-right">
                        <a href="history-projects-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                        <a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</a>
                    </td>
                </tr>
                        <?php
                    }
                } else {
                    echo "Error: " . mysqli_error($conn); // Handle error if query execution fails
                }

            // Delete functionality
            if (isset($_GET['delete_id'])) {
                $delete_id = $_GET['delete_id'];
                $sql_delete = "DELETE FROM history_projects WHERE id = $delete_id";

                if (mysqli_query($conn, $sql_delete)) {
                    // Display success message
                    $successMessage = "Record deleted successfully!";

                    // Refresh the page after deletion
                    header("Location: $_SERVER[PHP_SELF]");
                    exit(); // Exit after redirection
                } else {
                    echo "Error deleting record: " . mysqli_error($conn);
                }
            }
            ?>
            </tbody>
        </table>
    </div>

</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
