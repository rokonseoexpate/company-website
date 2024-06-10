<?php
$title = "Award Details";
ob_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qry = "SELECT * FROM awards WHERE id=$id";
    $result = $conn->query($qry);
    $row = $result->fetch_assoc();

    $imagePath = $row['image'];
    $imageName = basename($imagePath);
    $newImagePath = '../uploads/' . $imageName;
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h5> <strong><?php echo $title ?></strong>  </h5>
            <a href="award.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <table class="table table-striped table-bordered">

            <tbody>
                <tr>
                    <th>Title</th>
                    <td><?php echo $row['title'] ?></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><?php echo $row['description'] ?></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td> <img style="width: 579px; height:400px" src="<?php echo $newImagePath ?>" alt=""> </td>
                </tr>
                <tr>
                    <th>Alt Text</th>
                    <td> <?php echo $row['alt_tag'] ?> </td>
                </tr>
                <tr>
                    <th>Alt Description</th>
                    <td> <?php echo $row['alt_description'] ?></td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td><?php echo date('d M Y', strtotime($row['created_at'])) ?> </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';

?>