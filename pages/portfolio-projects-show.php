<?php
$title = "Web Portfolio Details";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Fetch branches from the database
$branch_query = "SELECT * FROM web_portfolio_categories";
$branch_result = mysqli_query($conn, $branch_query);

// Check if the project ID is provided in the URL
if (isset($_GET['id'])) {
    $project_id = $_GET['id'];

    // Fetch project details from the database along with category name
    $fetch_query = "
        SELECT wp.*, wpc.name AS category_name 
        FROM web_portfolios wp
        LEFT JOIN web_portfolio_categories wpc ON wp.category_id = wpc.id
        WHERE wp.id = ?
    ";
    $fetch_stmt = $conn->prepare($fetch_query);
    $fetch_stmt->bind_param("i", $project_id);
    $fetch_stmt->execute();
    $fetch_result = $fetch_stmt->get_result();
    $project_row = $fetch_result->fetch_assoc();
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Show Web Portfolio</h1>
            <a href="portfolio-projects-list.php" class="btn btn-info">View List</a>
        </div>
        <table class="table table-striped table-hover table-bordered">
            <tbody>
                <tr>
                    <th>Title</th>
                    <td><?php echo htmlspecialchars($project_row['title']); ?></td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td><?php echo htmlspecialchars($project_row['category_name']); ?></td>
                </tr>
                <tr>
                    <th>Link</th>
                    <td><?php echo htmlspecialchars($project_row['link']); ?></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        <?php if (!empty($project_row['image'])): ?>
                            <img src="<?php echo htmlspecialchars($project_row['image']); ?>" alt="Project Image" style="max-width: 100px; max-height: 100px;">
                        <?php else: ?>
                            No image available
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>Alt Tag</th>
                    <td><?php echo htmlspecialchars($project_row['alt_tag']); ?></td>
                </tr>
                <tr>
                    <th>Alt Description</th>
                    <td><?php echo htmlspecialchars($project_row['alt_description']); ?></td>
                </tr>
            </tbody>
        </table>
        <a href="portfolio-projects-list.php">
            <button class="btn btn-primary my-4">Back</button>
        </a>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
