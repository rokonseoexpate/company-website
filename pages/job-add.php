<?php
$title = "Create Employee";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['title'];
    $job_type = $_POST['job_type'];
    $vacancies = $_POST['vacancies'];
    $deadline = $_POST['deadline'];
    $apply_link = $_POST['apply_link'];
    $job_details = $_POST['job_details'];

    if (empty($title)) {
        $_SESSION['errorMessage'] .= "Name field is required. </br>";
    }

    if (empty($job_type)) {
        $_SESSION['errorMessage'] .= "Job type field is required.  </br>";
    }

    if (empty($vacancies)) {
        $_SESSION['errorMessage'] .= "Vacancies field is required.  </br>";
    }

    if (empty($deadline)) {
        $_SESSION['errorMessage'] .= "Deadline field is required.  </br>";
    }

    if (empty($apply_link)) {
        $_SESSION['errorMessage'] .= "Apply link field is required.  </br>";
    }

    if ($_SESSION['errorMessage'] == null) {
        // Prepare the insert query
        $insert_query = "INSERT INTO jobs (title, job_type, vacancies, deadline, apply_link, job_details) VALUES ('$title', '$job_type', '$vacancies', '$deadline', '$apply_link', '$job_details')";

        // Execute the insert query
        if (mysqli_query($conn, $insert_query)) {
            // Insert successful
            $_SESSION['successMessage'] = "Job created successfully!";
            // Redirect to the page or display success message as per your requirement
        } else {
            // Insert failed
            $_SESSION['errorMessage'] = "Error creating job: " . mysqli_error($conn);
        }
    }else{
        header('location:job-add.php');
        exit();
    }

    header('location:job-list.php');
    exit();
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Add New Job</h1>
            <a href="job-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="title">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="job_type">Job Type <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="job_type" name="job_type" placeholder="Job Type" aria-="" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="vacancies">Vacancies  <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="vacancies" name="vacancies" placeholder="Vacancies" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="deadline">Deadline  <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="deadline" name="deadline" placeholder="Deadline" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="apply_link">Apply Link  <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="apply_link" name="apply_link" placeholder="Apply Link" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="job_details">Job Details</label>
                    <textarea id="summernote" name="job_details" class="form-control" cols="30" rows="10"></textarea>
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