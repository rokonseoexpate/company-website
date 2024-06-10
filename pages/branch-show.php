<?php
$title = "Branch Details";
session_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

// Fetch the branch details from the database based on the ID
$id = $_GET['id']; // Assuming the ID is passed via URL parameter
$sql = "SELECT * FROM branches WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Branch Details</h1>
                <a href="branch-list.php" class="btn btn-sm btn-info">View List</a>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <tbody>
                    <tr>
                        <th>Branch Name</th>
                        <td><?php echo $row['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Branch Image</th>
                        <td> <img src="<?php echo $row['image']; ?>" alt="" width="200px"></td>
                    </tr>
                    <tr>
                        <th>Map</th>
                        <td>
                            <iframe src="<?php echo $row['map']; ?>" frameborder="0" width="400px" height="200px"></iframe>
                        </td>
                    </tr>
                    <tr>
                        <th>Youtube</th>
                        <td> <iframe src="<?php echo $row['video_link']; ?>" frameborder="0"></iframe> </td>
                    </tr>
                    <tr>
                        <th>Branch Address</th>
                        <td> <?php echo $row['address']; ?></td>
                    </tr>
                    <tr>
                        <th>Alt Tag</th>
                        <td><?php echo $row['alt_tag'] ?></td>
                    </tr>
                    <tr>
                        <th>Alt Description</th>
                        <td><?php echo $row['alt_description'] ?></td>
                    </tr>
                </tbody>
            </table>
            <a href="branch-list.php">
                <button class="btn btn-primary mt-4"> Back</button>
            </a>
        </div>
    </div>

</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>