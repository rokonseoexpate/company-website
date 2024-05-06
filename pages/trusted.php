<?php
$title = "Trusted By";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch image path
    $sql_select_image = "SELECT image FROM trusted_bies WHERE id=$id ";

    $result_select_image = $conn->query($sql_select_image);
    if ($result_select_image->num_rows > 0) {
        $row = $result_select_image->fetch_assoc();
        $imagePath = $row['image'];

        // Delete image file
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete record from the database
        $sql = "DELETE FROM trusted_bies WHERE id=$id";
        
        if ($conn->query($sql) === TRUE) {
            $successMessage = "Successfully deleted record!";
        } else {
            $successMessage = "Successfully deleted record!";
        }
    } 
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h4> <strong> <?php echo $title  ?> </strong> </h4>
            <a href="trusted-create.php" class="btn btn-sm btn-info"><i class="fa-solid fa-plus"></i></a>
        </div>
        <table class="table table-striped table-bordered" id="example1">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th class="text-right px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $qry = "SELECT * FROM trusted_bies order by id desc";
                if ($result = $conn->query($qry)) {
                    while ($row = $result->fetch_assoc()) {
                        $imagePath = $row['image'];
                        $imageName = basename($imagePath);
                        $newImagePath = '../uploads/' . $imageName;
                ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <td><?php echo $row['name']; ?></td>
                            <td>
                                <img class="w-50" style="height: 50px;" src="<?php echo $newImagePath; ?>" alt="">
                            </td>

                            <td class="text-right">
                                <a href="trusted-edit.php?id=<?php echo  $row['id']; ?>" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
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