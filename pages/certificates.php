<?php
$title = "Certificates";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch image path
    $sql_select_image = "SELECT image FROM certificates WHERE id=$id ";

    $result_select_image = $conn->query($sql_select_image);
    if ($result_select_image->num_rows > 0) {
        $row = $result_select_image->fetch_assoc();
        $imagePath = $row['image'];

        // Delete image file
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete record from the database
        $sql = "DELETE FROM certificates WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            // echo "<script>alert('Record deleted successfully');</script>";
        } else {
            // echo "<script>alert('Error deleting record: " . $conn->error . "');</script>";
        }
    } 
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1>Certificates</h1>
            <a href="certificate-add.php" class="btn btn-sm btn-info"><i class="fa-solid fa-plus"></i></a>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th class="text-right px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $qry = "SELECT * FROM certificates order by id desc";
                if ($result = $conn->query($qry)) {
                    while ($row = $result->fetch_assoc()) {
                        $imagePath = $row['image'];
                        $imageName = basename($imagePath);
                        $newImagePath = '../uploads/' . $imageName;
                ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <td><?php echo $row['title']; ?></td>
                            <td>
                                <img class="w-50" style="height: 50px;" src="<?php echo $newImagePath; ?>" alt="">
                            </td>

                            <td><?php echo substr($row['description'], 1, 50); ?></td>

                            <td class="text-right">
                                <a href="certificate-details.php?id=<?php echo  $row['id']; ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i></a>
                                <a href="certificate-edit.php?id=<?php echo  $row['id']; ?>" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="?id=<?php echo  $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa-solid fa-trash"></i></a>
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