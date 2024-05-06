<?php
$title = "Edit History Journey";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $journey_id = $_POST['journey_id'];
    $year = $_POST['year'];
    $details = $_POST['details'];

    // Prepare the update query
    $update_query = "UPDATE history_journeys SET year='$year', details='$details' WHERE id='$journey_id'";

    // Execute the update query
    if (mysqli_query($conn, $update_query)) {
        // Update successful
        $successMessage = "History Journey updated successfully!";
        header("Location: history-journey-list.php");
    } else {
        // Update failed
        $errorMessage = "Error updating History Journey: " . mysqli_error($conn);
    }
}

// Check if journey ID is provided in the URL
if(isset($_GET['id'])) {
    $journey_id = $_GET['id'];

    // Fetch existing journey details from the database
    $fetch_query = "SELECT * FROM history_journeys WHERE id='$journey_id'";
    $result = mysqli_query($conn, $fetch_query);
    $journey = mysqli_fetch_assoc($result);
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1><?php echo $title;?></h1>
            <a href="history-journey-list.php" class="btn btn-primary">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="journey_id" value="<?php echo $journey['id']; ?>">
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="title">Year</label>
                    <input type="text" class="form-control" id="title" name="year" value="<?php echo $journey['year']; ?>" placeholder="Title">
                </div>

                <div class="form-group col-md-12">
                    <label for="job_details">Details</label>
                    <textarea id="summernote" name="details" class="form-control" cols="30" rows="10"><?php echo $journey['details']; ?></textarea>
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
