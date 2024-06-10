<?php
$title = "Core Team";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
// Show team information
$qry = "SELECT * FROM teams ORDER BY id DESC";
$result = $conn->query($qry);


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch image path
    $sql_select_image = "SELECT image FROM teams WHERE id=$id";
    $result_select_image = $conn->query($sql_select_image);

    if ($result_select_image) {

        if ($result_select_image->num_rows > 0) {
            $row = $result_select_image->fetch_assoc();
            $imagePath = $row['image'];

            // Delete image file
            if (file_exists($imagePath)) {
                if (!unlink($imagePath)) {
                    $_SESSION['errorMessage'] = "Error deleting image file!";
                }
            } else {
                $_SESSION['errorMessage'] = "Image file not found!";
            }

            // Delete record from database
            $sql = "DELETE FROM teams WHERE id=$id";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['successMessage'] = "Successfully deleted record!";
            } else {
                $_SESSION['errorMessage'] = "Error deleting record from database: " . $conn->error;
            }
        } else {
            $_SESSION['errorMessage'] = "Record with ID=$id not found!";
        }
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>



<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h4> <strong> <?php echo $title  ?> </strong> </h4>
            <a href="core-team-create.php" class="btn btn-sm btn-info"><i class="fa-solid fa-plus"></i></a>
        </div>
        <table class="table table-striped table-bordered" id="example1">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Image</th>
                    <th>Order By</th>
                    <th class="text-right px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($result as $row) {
                ?>
                    <tr>
                        <th><?php echo $i++ ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['designation']; ?></td>
                        <td>
                            <img class="w-50" style="height: 50px;" src="<?php echo $row['image']; ?>" alt="">
                        </td>
                        <td> <?php echo $row['order_by'] ?> </td>

                        <td class="text-right">
                            <a href="core-team-details.php?id=<?php echo $row['id']; ?>">
                                <button class="btn btn-sm btn-info mr-1"><i class="fa-solid fa-eye"></i></button>
                            </a>
                            <a href="core-team-edit.php?id=<?php echo  $row['id']; ?>" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="?id=<?php echo  $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
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