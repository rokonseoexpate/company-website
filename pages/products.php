<?php
$title = "Products";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $blogImage = "SELECT image FROM products WHERE id = $id";
    $result_select_image = $conn->query($blogImage);

    if (!empty($result_select_image)) {
        $row = $result_select_image->fetch_assoc();
        $imagePath = $row['image'];

        if ($imagePath && file_exists($imagePath)) {
            unlink($imagePath);
        }

        $deleteQuery = "DELETE FROM products WHERE id = $id";

        if ($conn->query($deleteQuery) === TRUE) {
            $_SESSION['successMessage'] = "Successfully deleted record!";
        } else {
            $_SESSION['errorMessage'] = "Error " . $conn->error;
        }
    }
    header('location:products.php');
    exit();
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center py-2">
            <h5><strong><?php echo $title ?></strong></h5>
            <a href="product-add.php" class="btn btn-sm btn-info"><i class="fa-solid fa-plus"></i></a>
        </div>
        <table class="table table-striped table-bordered" id="example1">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Title</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Short Description</th>
                    <th>Image</th>
                    <th class="text-right px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $qry = "SELECT * FROM products ORDER BY id DESC";

                if ($result = $conn->query($qry)) {
                    while ($row = $result->fetch_assoc()) {
                        $imagePath = $row['image'];
                        $imageName = $imagePath ? basename($imagePath) : 'no_image.png'; // Provide a default image name if $imagePath is null
                        $newImagePath = '../uploads/' . $imageName;
                ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['priority']; ?></td>
                            <td><?php echo $row['status'] == 1 ? 'Active' : 'Inactive'; ?></td>
                            <td><?php echo substr($row['short_description'], 1, 50); ?></td>
                            <td>
                                <img class="w-50" style="height: 50px;" src="<?php echo $newImagePath; ?>" alt="">
                            </td>
                            <td class="text-right">
                                <a href="product-details.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i></a>
                                <a href="product-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                <?php
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
