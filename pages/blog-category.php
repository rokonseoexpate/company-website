<?php
$title = "Blogs Categories";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM blog_categories WHERE id = $id";

    if ($conn->query($deleteQuery) === TRUE) {
        $errorMessage = "Successfully deleted record!";
        header("Location: blog-category.php");
    } else {
        echo "<script>alert('Error deleting record: " . $conn->error . "');</script>";
    }
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h5> <strong><?php echo $title ?></strong> </h5>
            <a href="blog-category-add.php" class="btn btn-sm btn-info"><i class="fa-solid fa-plus"></i></a>
        </div>
        <table class="table table-striped table-bordered" id="example1">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Name</th>
                    <th class="text-center px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $qry = "SELECT * FROM blog_categories order by id desc";
                if ($result = $conn->query($qry)) {
                    // $row = $result->fetch_assoc();

                    foreach ($result as $row) {

                ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <td><?php echo $row['name']; ?></td>

                            <td class="text-center">
                                <a href="blog-category-edit.php?id=<?php echo  $row['id']; ?>" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>

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