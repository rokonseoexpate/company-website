<?php
// Include database connection and configuration
require_once '../config/dbconnect.php';
session_start();
$db = new DB_con();
$conn = $db->get_connection();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $title = $_POST['title'];
    $link = $_POST['link'];
    $sort_by = $_POST['sort_by'];

    // Prepare the update query
    $update_query = "UPDATE featured_youtubes SET title='$title', link='$link', sort_by='$sort_by' WHERE id='$id'";

    // Execute the update query
    if (mysqli_query($conn, $update_query)) {

        $_SESSION['successMessage'] = "Featured Youtube updated successfully!";
    } else {
        $_SESSION['errorMessage'] = "Error updating featured Youtube: " . mysqli_error($conn);
    }
    // Refresh the page after deletion
    header("Location: youtube-video-list.php");
    exit(); // Exit after redirection
}

// Retrieve existing data if ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Retrieve existing data from database
    $select_query = "SELECT * FROM featured_youtubes WHERE id='$id'";
    $result = mysqli_query($conn, $select_query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $link = $row['link'];
        $sort_by = $row['sort_by'];
    } else {
        // If no record found with provided ID
        $errorMessage = "No featured Youtube found with the provided ID.";
    }
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Edit Featured Youtube link</h1>
            <a href="youtube-video-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required placeholder="Title" value="<?php echo isset($title) ? $title : ''; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="sort_by">Priority</label>
                    <input type="number" class="form-control" id="sort_by" name="sort_by" required placeholder="Priority" value="<?php echo isset($sort_by) ? $sort_by : ''; ?>">
                </div>

                <div class="form-group col-md-12">
                    <label for="link">Link</label>
                    <input type="text" class="form-control" id="link" name="link" required placeholder="Youtube Link" value="<?php echo isset($link) ? $link : ''; ?>">
                </div>

                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary my-3">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
