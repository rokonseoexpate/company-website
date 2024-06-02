<?php
$title = "History Journey list";
session_start();
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
                <a href="history-journey-add.php" class="btn btn-primary">Create Year History Journey </a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Year</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $qry = "SELECT * FROM history_journeys ORDER BY id DESC";
                    $result = mysqli_query($conn, $qry); // Use mysqli_query() to execute the query

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['year']; ?></td>
                                <td><?php echo $row['details']; ?></td>
                                <td class="align-middle">
                                    <div class="d-inline-flex justify-content-center">
                                        <a href="history-journey-edit.php?id=<?php echo $row['id']; ?>">
                                            <button class="btn btn-sm btn-info mr-2"><i class="fa-solid fa-pen-to-square"></i></button>
                                        </a>
                                        <a href="?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">
                                            <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                        </a>
                                    </div>

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
                        $sql_delete = "DELETE FROM history_journeys WHERE id = $delete_id";

                        if (mysqli_query($conn, $sql_delete)) {
                            // Display success message
                            $_SESSION['successMessage'] = "Record deleted successfully!";

                        } else {
                            $_SESSION['errorMessage'] =  "Error deleting record: " . mysqli_error($conn);
                        }
                        // Refresh the page after deletion
                        header("Location: $_SERVER[PHP_SELF]");
                        exit(); // Exit after redirection
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