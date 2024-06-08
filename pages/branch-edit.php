<?php
$title = "Update Branch";
session_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();


// Fetch the branch details from the database based on the ID
$id = $_GET['id']; // Assuming the ID is passed via URL parameter
$sql = "SELECT * FROM branches WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $address = $_POST['address'];
    $video_link = $_POST['video_link'];
    $alt_tag = $_POST['alt_tag'];
    $alt_description = $_POST['alt_description'];

    // Check if a new image is uploaded
    if ($_FILES["image"]["size"] > 0) {
        // Upload new image file
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image_path = $target_file;
    } else {
        // No new image uploaded, retain the existing image path
        $image_path = $row['image'];
    }

    // Sanitize inputs to prevent SQL injection
    $sanitized_name = mysqli_real_escape_string($conn, $name);
    $sanitized_map = mysqli_real_escape_string($conn, $map);
    $sanitized_address = mysqli_real_escape_string($conn, $address);
    $sanitized_video_link = mysqli_real_escape_string($conn, $video_link);

    // Update query
    $id = $_GET['id'];
    $sql = "UPDATE branches SET name = '$sanitized_name', longitude = '$longitude', latitude = '$latitude', image = '$image_path', video_link = '$sanitized_video_link', address = '$sanitized_address', alt_tag='$alt_tag',  alt_description='$alt_description' WHERE id = $id";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        $_SESSION['successMessage'] = "Record Updated successfully!";
    } else {
        $_SESSION['errorMessage'] =  "Error updating record: " . mysqli_error($conn);
    }
    header('Location: branch-list.php');
    exit();
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1>Update Branch</h1>
            <a href="branch-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="name">Branch</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Branch" value="<?php echo $row['name']; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file dropify" id="image" name="image" placeholder="image">
                </div>

                <div class="form-group col-md-6">
                    <label for="image">Existing Image</label>
                    <br>
                    <img src="<?php echo $row['image']; ?>" class="img-fluid" width="200px" alt="">
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="map">Address</label>
                        <textarea name="address" placeholder="address" class="form-control" id="" cols="5" rows="5" required><?php echo $row['address']; ?></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="map">Video <span class="text-warning">( width="100%" height="315" )</span></label>
                        <textarea name="video_link" placeholder="video_link" class="form-control" id="" cols="5" rows="5" required><?php echo $row['video_link']; ?></textarea>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="map">Latitude</label>
                    <input type="text" name="latitude" value="<?php echo $row['latitude']?>"  class="form-control" placeholder="Latitude">
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="map">Longitude</label>
                        <input type="text" name="longitude" value="<?php echo $row['longitude']?>" class="form-control" placeholder="Longitude">
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <label for="alt_text">Alt Text</label>
                        <input type="text" class="form-control" id="alt_text" name="alt_tag" value="<?php echo $row['alt_tag'] ?>" placeholder="alt Text">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="shortDescription">Alt Description</label>
                        <textarea id="shortDescription" name="alt_description" placeholder="Description" class="form-control" cols="30" rows="10"><?php echo $row['alt_description'] ?></textarea>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary my-3">Update</button>
        </form>
    </div>

</div>

<?php

$content = ob_get_clean();
include '../layouts/master.php';
?>