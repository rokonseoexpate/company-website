<?php
$title = "Create Branch";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $map = $_POST['map'];
    $video_link = $_POST['video_link'];
    $address = $_POST['address'];

    // Check if a new image is uploaded
    if ($_FILES["image"]["size"] > 0) {
        // Sanitize the file name
        $image_name = $_FILES["image"]["name"];
        $image_name = preg_replace("/[^\w\-\.]/", "-", $image_name); // Replace special characters with hyphens
        $image_name = preg_replace("/\s+/", "-", $image_name); // Replace spaces with hyphens

        // Upload new image file
        $target_dir = "../uploads/";
        $target_file = $target_dir . $image_name;
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image_path = $target_file;
    } else {
        $image_path = ''; // Set default image path if no image is uploaded
    }

    // Insert data into database


    $insert_query = "INSERT INTO branches (name, image, map, address, video_link) VALUES ('$name', '$image_path',' $map', '$address', '$video_link')";

    // Execute query
    if (mysqli_query($conn, $insert_query)) {
        // Insert successful
        $successMessage = "Branch created successfully!";
        // Redirect to employee list page or display success message as per your requirement
    } else {
        // Insert failed
        $errorMessage = "Error creating Branch: " . mysqli_error($conn);
    }
}

?>


<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">

            <h1><?php echo $title; ?></h1>


            <a href="branch-list.php" class="btn btn-primary">Branch List</a>

        </div>


        <form action="" method="POST" enctype="multipart/form-data" id="submit">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Branch Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Branch" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="image" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="map">Map</label>
                        <textarea name="map" placeholder="Map" class="form-control" id="" cols="5" rows="5" required></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="map">Address</label>
                        <textarea name="address" placeholder="address" class="form-control" id="" cols="5" rows="5" required></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="map">Video Link</label>
                        <textarea name="video_link" placeholder="video_link" class="form-control" id="" cols="5" rows="5" required></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary my-3" name="submit">Create</button>
            </div>
        </form>

    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';

?>