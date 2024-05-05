<?php
$title = "Our Office";
ob_start();
require_once '../config/dbconnect.php';

$db = new DB_con();
$conn = $db->get_connection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM our_offices WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully');</script>";
        echo "<script>window.location.href='office.php';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . $conn->error . "');</script>";
    }
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1>Our Office</h1>
            <a href="office-add.php" class="btn btn-sm btn-info"><i class="fa-solid fa-plus"></i></a>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th class="text-right px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $qry = "SELECT * FROM our_offices ORDER BY id DESC";
                if ($result = $conn->query($qry)) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['address']; ?></td>

                            <td class="text-right">
                                <a href="office-edit.php?id=<?php echo  $row['id']; ?>" class="btn btn-sm btn-info">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="?id=<?php echo  $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa-solid fa-trash"></i>
                                </a>
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