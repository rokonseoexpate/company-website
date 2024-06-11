<?php
$title = "Blog Details";
ob_start();
session_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // $qry = "SELECT * FROM blogs WHERE id=$id";
    $qry = "SELECT blogs.*, blog_categories.name as category_name
                        FROM blogs 
                        LEFT JOIN blog_categories ON blogs.blog_category_id = blog_categories.id
                        ORDER BY blogs.id DESC";
    $result = $conn->query($qry);
    $row = $result->fetch_assoc();
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h5> <strong><?php echo $title ?></strong> </h5>
            <a href="blogs.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <table class="table table-striped table-bordered">

            <tbody>
                <tr>
                    <th>Blog Category Name</th>
                    <td><?php echo $row['category_name'] ?></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><?php echo $row['title'] ?></td>
                </tr>
                <tr>
                    <th>Short Description</th>
                    <td><?php echo $row['short_description'] ?></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><?php echo $row['description'] ?></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td> <img class="w-100" style="height: 500px" src="<?php echo $row['image'] ?>" alt=""> </td>
                </tr>
                <tr>
                    <th>Alt Text</th>
                    <td><?php echo $row['alt_tag'] ?></td>
                </tr>

                <tr>
                    <th>Alt Description</th>
                    <td><?php echo $row['alt_description'] ?></td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';

?>