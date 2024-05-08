<?php
$title = "Certificates Details";
ob_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qry = "SELECT * FROM certificates WHERE id=$id";
    $result = $conn->query($qry);
    $row = $result->fetch_assoc();
}else{
    $errorMessage = 'Select team member';
    echo "<script> window.location.href='core-team.php' </script>";
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1>Certificates</h1>
            <a href="certificates.php" class="btn btn-sm btn-info">View List</a>
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
                    <td> <img style="width: 100%; height:500px" src="<?php echo $newImagePath ?>" alt=""> </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';

?>