<?php
$title = "Create Featured Youtube";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['title'];
    $link = $_POST['link'];
    $sort_by = $_POST['sort_by'];

    // Prepare the insert query
    $insert_query = "INSERT INTO featured_youtubes (title, link, sort_by) VALUES ('$title', '$link', '$sort_by')";

    // Execute the insert query
    if (mysqli_query($conn, $insert_query)) {

        $successMessage = "Feature Youtube created successfully!";

    } else {
        // Insert failed
        $errorMessage = "Error creating job: " . mysqli_error($conn);
    }
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Add Featured Youtube link</h1>
            <a href="youtube-video-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                </div>
                <div class="form-group col-md-6">
                    <label for="priority">Priority</label>
                    <input type="number" class="form-control" id="sort_by" name="sort_by" placeholder="Priority">
                </div>

                <div class="form-group col-md-12">
                    <label for="link">Link</label>
                    <input type="text" class="form-control" id="link" name="link" placeholder="youtube Link">
                </div>

                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
