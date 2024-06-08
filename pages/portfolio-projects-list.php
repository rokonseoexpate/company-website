<?php
$title = "Web Projects List";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Fetch web project data from the database
$query = "SELECT web_portfolios.*, web_portfolio_categories.name AS category_name FROM web_portfolios LEFT JOIN web_portfolio_categories ON web_portfolios.category_id = web_portfolio_categories.id ORDER BY id DESC ";
$result = mysqli_query($conn, $query);

// Check if delete_id is present in the URL
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Delete query
    $delete_query = "DELETE FROM web_portfolios WHERE id = $delete_id";

    if (mysqli_query($conn, $delete_query)) {
        // Deletion successful
        $_SESSION['successMessage'] = "Web project deleted successfully!";
    } else {
        // Deletion failed
        $_SESSION['errorMessage'] = "Error deleting web project: " . mysqli_error($conn);
    }
    header("Location: portfolio-projects-list.php");
    exit();

}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="portfolio-projects-add.php" class="btn btn-sm btn-info">Add New</a>
        </div>
        <?php if(isset($successMessage)) { ?>
            <div class="alert alert-success mt-3" role="alert"><?php echo $successMessage; ?></div>
        <?php } ?>
        <?php if(isset($errorMessage)) { ?>
            <div class="alert alert-danger mt-3" role="alert"><?php echo $errorMessage; ?></div>
        <?php } ?>
        <table id="example1" class="table table-striped table-bordered">
            <thead>
            <tr class="text-center">
                <th>#</th>
                <th>Category</th>
                <th>Title</th>
                <th>Link</th>
                <th>Image</th>
                <th class="text-right px-4">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $count = 1;
            while ($row = mysqli_fetch_assoc($result)) :
                ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['link']; ?></td>
                    <td>
                        <?php if ($row['image'] && file_exists($row['image'])) : ?>
                            <img src="<?php echo $row['image']; ?>" class="img-fluid w-25" alt="">
                        <?php else : ?>
                            <span>No Image</span>
                        <?php endif; ?>
                    </td>
                    <td class="text-right">
                        <a href="portfolio-projects-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                        <a href="?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this web project?')">Delete</a>
                    </td>
                </tr>
                <?php
                $count++;
            endwhile;
            ?>
            </tbody>
        </table>
    </div>

</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
