<?php
session_start();
$title = "Branch list";
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
                <a href="branch-add.php" class="btn btn-primary">Create Branch</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $qry = "SELECT * FROM branches ORDER BY id DESC";
                    $result = mysqli_query($conn, $qry);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td width="150px"><img src="<?php echo $row['image']; ?>" alt="" class="img-fluid w-25"></td>
                                <td><?php echo $row['address']; ?></td>
                                <td class="align-middle">
                                    <div class="d-inline-flex">
                                        <a href="branch-show.php?id=<?php echo $row['id']; ?>">
                                            <button class="btn btn-sm btn-info mr-2"><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                        <a href="branch-edit.php?id=<?php echo $row['id']; ?>">
                                            <button class="btn btn-sm btn-info mr-2"><i class="fa-solid fa-pen-to-square"></i>
                                            </button>
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
                        $sql_delete = "DELETE FROM branches WHERE id = $delete_id";

                        if (mysqli_query($conn, $sql_delete)) {
                            // Set success message in session
                            $_SESSION['successMessage'] = "Record deleted successfully!";
                        } else {
                            // Set error message in session
                            $_SESSION['errorMessage'] = "Error deleting record: " . mysqli_error($conn);
                        }

                        // Redirect to the same page to show the message
                        header("Location: $_SERVER[PHP_SELF]");
                        exit();
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