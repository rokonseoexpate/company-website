<?php
$title = "Create History Journey";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errorMessage = '';
    // Retrieve form data
    $year = $_POST['year'];
    $details = $_POST['details'];

    if (empty($year)) {
        $errorMessage .= 'Year is required. ';
    }

    if (empty($details)) {
        $errorMessage .= "Message is required. ";
    }

    if (empty($errorMessage)) {
        // Prepare the insert query
        $insert_query = "INSERT INTO history_journeys (year, details) VALUES ('$year', '$details')";
        $success = mysqli_query($conn, $insert_query);
        // Execute the insert query
        if ($success) {
            // Insert successful
            $successMessage = "History Journeys created successfully!";
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            $errorMessage = "Error creating job: " . mysqli_error($conn);
        }
    }
}
?>


<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="history-journey-list.php" class="btn btn-primary">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="title">Year <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="year" placeholder="Title">
                </div>

                <div class="form-group col-md-12">
                    <label for="job_details">Details <span class="text-danger">*</span> </label>
                    <textarea id="summernote" name="details" class="form-control" cols="30" rows="10"></textarea>
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