<?php
$title = "Core Team Details";
ob_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qry = "SELECT * FROM teams WHERE id=$id";
    $result = $conn->query($qry);
    $row = $result->fetch_assoc();

    $sql_select_image = "SELECT image FROM teams WHERE id=$id";
    $result_select_image = $conn->query($sql_select_image);
    $image = $result_select_image->fetch_assoc();

}else{
    $errorMessage = 'Select team member';
    echo "<script> window.location.href='core-team.php' </script>";
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1>Core Team</h1>
            <a href="core-team.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <table class="table table-striped table-bordered">
            <tbody>
                <tr>
                    <th>Title</th>
                    <td><?php echo $row['name'] ?></td>
                </tr>
                <tr>
                    <th>Priority </th>
                    <td><?php echo $row['order_by'] ?></td>
                </tr>
                <tr>
                    <th>Type  </th>
                    <td><?php echo $row['type'] ?></td>
                </tr>
                <tr>
                    <th>Designation</th>
                    <td><?php echo $row['designation'] ?></td>
                </tr>
                <tr>
                    <th>Website Link</th>
                    <td><?php echo $row['website'] ?></td>
                </tr>
                <tr>
                    <th>Facebook Link</th>
                    <td><?php echo $row['facebook'] ?></td>
                </tr>
                <tr>
                    <th>Linkedin Link</th>
                    <td><?php echo $row['linkedin'] ?></td>
                </tr>
                <tr>
                    <th>Alt Tag</th>
                    <td><?php echo $row['alt_tag'] ?></td>
                </tr>
                <tr>
                    <th>Alt Description</th>
                    <td><?php echo $row['alt_description'] ?></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td> <img width="250px;" height="200px" src="<?php echo $image['image'] ?>" alt=""> </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';

?>