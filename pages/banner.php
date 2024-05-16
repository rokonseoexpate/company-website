<?php
$title = "Blogs";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $blogImage = "SELECT image FROM banners WHERE id = $id";
    $result_select_image = $conn->query($blogImage);

    if (!empty($result_select_image)) {
        $row = $result_select_image->fetch_assoc();
        $imagePath = $row['image'];

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $deleteQuery = "DELETE FROM banners WHERE id = $id";

        if ($conn->query($deleteQuery) === TRUE) {
            $successMessage = "Successfully deleted record!";
        } else {
            echo "<script>alert('Error deleting record: " . $conn->error . "');</script>";
        }
    }
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h5> <strong><?php echo $title ?></strong> </h5>
            <a href="banner-add.php" class="btn btn-sm btn-info"><i class="fa-solid fa-plus"></i></a>
        </div>
        <table class="table table-striped table-bordered" id="example1">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Page</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th class="text-right px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                // $qry = "SELECT * FROM blogs order by id desc";
                $qry = "SELECT *
                        FROM banners 
                        ORDER BY banners.id DESC";

                if ($result = $conn->query($qry)) {
                    while ($row = $result->fetch_assoc()) {
                        $imagePath = $row['image'];
                        $imageName = basename($imagePath);
                        $newImagePath = '../uploads/' . $imageName;
                ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <td><?php echo $row['page']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td>
                                <img class="w-50" style="height: 50px;" src="<?php echo $newImagePath; ?>" alt="">
                            </td>

                            <td class="text-right">
                                
                                <a href="banner-edit.php?id=<?php echo  $row['id']; ?>" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
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