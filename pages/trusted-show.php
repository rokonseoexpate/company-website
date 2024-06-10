<?php
$title = "Trusted by details";
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
    $sql = "SELECT * FROM trusted_bies WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $imagePath = $row['image'];
    $imageName = basename($imagePath);
    $newImagePath = '../uploads/' . $imageName;
}


?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="trusted.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <table class="table table-striped table-hover table-bordered">
            <tbody>
                <tr>
                    <th>Name</th>
                    <th><?php echo $row['name'] ?></th>
                </tr>
                <tr>
                    <th>Priority </th>
                    <th><?php echo $row['orderBy'] ?></th>
                </tr>
                <tr>
                    <th>Image </th>
                    <th> <img src="<?php echo $newImagePath ?>" alt=""> </th>
                </tr>
                <tr>
                    <th>Alt Text </th>
                    <th> <?php echo $row['alt_tag'] ?></th>
                </tr>
                <tr>
                    <th>Alt Text </th>
                    <th> <?php echo $row['alt_description'] ?></th>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<?php
$content = ob_get_clean();

include '../layouts/master.php';
?>