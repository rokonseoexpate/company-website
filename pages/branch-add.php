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
    $alt_tag = $_POST['alt_tag'];
    $alt_description = $_POST['alt_description'];

    // Check if a new image is uploaded
    if ($_FILES["image"]["size"] > 0) {
        $image_name = $_FILES["image"]["name"];
        $image_name = preg_replace("/[^\w\-\.]/", "-", $image_name ); 
        $image_name = preg_replace("/\s+/", "-", $image_name );
        $target_dir = "../uploads/";
        $target_file = $target_dir . $image_name;

        // Upload new image file
        move_uploaded_file($_FILES["image"]["tmp_name"], $image_name);
        $image_path = $image_name;
    } else {
        $image_path = ''; // Set default image path if no image is uploaded
    }

    // Insert data into database
    $insert_query = "INSERT INTO branches (name, image, map, address, video_link,alt_tag, alt_description ) VALUES ('$name', '$image_path',' $map', '$address', '$video_link', '$alt_tag', '$alt_description')";

    // Execute query
    if (mysqli_query($conn, $insert_query)) { 
        $successMessage = "Branch created successfully!";
        header("Location: branch-list.php");
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
                        <label for="name">Branch Name <span class="text-danger">* </span> </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Branch" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image">Image <span class="text-danger">* </span></label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="image" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="map">Map  <span class="text-warning">( width="400" height="300" )</span></label>
                        <textarea name="map" placeholder="Map" class="form-control" id="" cols="5" rows="5" ></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="map">Address <span class="text-danger">* </span></label>
                        <textarea name="address" placeholder="address" class="form-control" id="" cols="5" rows="5" ></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="map">Video Link  <span class="text-warning">( width="100%" height="315" )</span></label>
                        <textarea name="video_link" placeholder="video_link" class="form-control" id="" cols="5" rows="5" ></textarea>
                    </div>
                </div>
                
                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <label for="alt_text">Alt Text</label>
                        <input type="text" class="form-control" id="alt_text" name="alt_tag" value="" placeholder="alt Text">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="shortDescription">Alt Description</label>
                        <textarea id="shortDescription" name="alt_description" placeholder="Description" class="form-control" cols="30" rows="10"></textarea>
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