<?php
session_start();
ob_start();
$title = "Department list";

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!$_SESSION['username']) {
    header("Location: login.php");
}
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql_delete = "DELETE FROM departments WHERE id = $delete_id";

    if (mysqli_query($conn, $sql_delete)) {
        $_SESSION['successMessage'] = "Record deleted successfully!";
    } else {
        $_SESSION['errorMessage'] = "Error deleting record: " . mysqli_error($conn);
    }
    header("Location: " . $_SERVER['PHP_SELF']);
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
                <a href="department-add.php" class="btn btn-primary">Create Department</a>
            </div>
        </div>


        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                $qry = "SELECT * FROM departments ORDER BY id DESC";
                $result = mysqli_query($conn, $qry);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $imagePath = $row['image'];
                        $imageName = basename($imagePath);
                        $newImagePath = '../uploads/' . $imageName;
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td class="text-center"><img style="width: 150px; height:100px" src="<?php echo  $newImagePath ?>" alt="<?php echo $row['name']; ?>"></td>
                            <td class="align-middle text-center">
                                <div class="d-inline-flex">
                                    <a href="department-show.php?id=<?php echo $row['id']; ?>">
                                        <button class="btn btn-sm btn-info mr-2"><i class="fa-solid fa-eye"></i></button>
                                    </a>
                                    <a href="department-edit.php?id=<?php echo $row['id']; ?>">
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
                    echo "Error: " . mysqli_error($conn);
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
