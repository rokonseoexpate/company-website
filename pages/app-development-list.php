<?php
$title = "App Portfolio list";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <div class="card-header">
                <h1><?php echo $title; ?></h1>
            </div>
            <div>
                <a href="app-development-add.php" class="btn btn-primary">Create App Portfolio</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                $qry = "SELECT * FROM app_developments";
                $result = mysqli_query($conn, $qry); // Use mysqli_query() to execute the query

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['name']; ?></td>


                            <td class="text-right">
                                <a href="app-development-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                                <a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
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
                    $sql_delete = "DELETE FROM app_developments WHERE id = $delete_id";

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
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
