<?php
$title = "Image Details";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!$_SESSION['username']) {
    header("Location: login.php");
}
// Check if image ID is provided via GET request
if (isset($_GET['id'])) {
    $image_id = $_GET['id'];

    // Fetch image details from database
    $select_query = "SELECT * FROM history_galleries WHERE id = ?";
    $stmt = $conn->prepare($select_query);
    $stmt->bind_param("i", $image_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
} else {
    echo 'Data not found';
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Image Details</h1>
            <a href="history-gallery-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <table class="table table-striped table-bordered table-hover">
            <tbody>
                <tr>
                    <th>Title</th>
                    <td><?php echo $row['title']; ?></td>
                </tr>
                <tr>
                    <th>Short Title</th>
                    <td><?php echo $row['short_title']; ?></td>
                </tr>
                <tr>
                    <th>Image Type</th>
                    <td>
                        <?php
                        switch ($row['image_type']) {
                            case 1:
                                echo 'overview_success';
                                break;
                            case 2:
                                echo 'customers_associates';
                                break;
                            case 3:
                                echo 'Highlighted';
                                break;
                            case 4:
                                echo 'Achievements';
                                break;
                            default:
                                echo 'Unknown';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><img src="<?php echo $row['image']; ?>" alt="" width="250px"></td>
                </tr>
                <tr>
                    <th>Alt Tag</th>
                    <td><?php echo $row['alt_tag']; ?></td>
                </tr>
                <tr>
                    <th>Alt Description</th>
                    <td><?php echo $row['alt_description']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
