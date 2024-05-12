<?php
$title = "Update Job";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Check if job ID is provided in the URL
if (isset($_GET['id'])) {
    $job_id = $_GET['id'];

    // Fetch job data from the database based on the provided ID
    $fetch_query = "SELECT * FROM jobs WHERE id = $job_id";
    $fetch_result = mysqli_query($conn, $fetch_query);
    $job_data = mysqli_fetch_assoc($fetch_result);

    if (!$job_data) {
        // Redirect or display error message if job not found
        header("Location: job-list.php");
        exit();
    }
} else {
    // Redirect or display error message if job ID is not provided
    header("Location: job-list.php");
    exit();
}

// Handle form submission for updating job
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['title'];
    $job_type = $_POST['job_type'];
    $vacancies = $_POST['vacancies'];
    $deadline = $_POST['deadline'];
    $apply_link = $_POST['apply_link'];
    $job_details = $_POST['job_details'];

    // Prepare update query
    $update_query = "UPDATE jobs SET title = '$title', job_type = '$job_type', vacancies = '$vacancies', deadline = '$deadline', apply_link = '$apply_link', job_details = '$job_details' WHERE id = $job_id";

    // Execute update query
    if (mysqli_query($conn, $update_query)) {
        // Update successful
        $successMessage = "Job updated successfully!";
        header("Location: job-list.php");
    } else {
        // Update failed
        $errorMessage = "Error updating job: " . mysqli_error($conn);
    }
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Update Job</h1>
            <a href="job-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="title">Title  <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $job_data['title']; ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="job_type">Job Type  <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="job_type" name="job_type" placeholder="Job Type" value="<?php echo $job_data['job_type']; ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="vacancies">Vacancies  <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="vacancies" name="vacancies" placeholder="Vacancies" value="<?php echo $job_data['vacancies']; ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="deadline">Deadline  <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="deadline" name="deadline" placeholder="Deadline" value="<?php echo $job_data['deadline']; ?>" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="apply_link">Apply Link  <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="apply_link" name="apply_link" placeholder="Apply Link" value="<?php echo $job_data['apply_link']; ?>" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="job_details">Job Details</label>
                    <textarea id="summernote" name="job_details" class="form-control" cols="30" rows="10"><?php echo $job_data['job_details']; ?></textarea>
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
