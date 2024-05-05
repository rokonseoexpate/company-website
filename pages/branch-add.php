<?php
$title = "Create Branch";
ob_start();
require_once '../config/dbconnect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $map = $_POST['map'];

    // Upload image file
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    // Insert data into database
    $db = new DB_con();
    $result = $db->branches($name, $target_file, $map);

    if ($result) {
        // If insertion successful, show success message toast
        $successMessage = "Successfully inserted record!";
    } else {
        // If insertion failed, show error message toast
        $errorMessage = "Not Inserted";
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



                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="image" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="map">Map</label>
                        <textarea name="map" placeholder="Map" class="form-control" id="" cols="30" rows="10" required></textarea>
                    </div>
                </div>

                    <button type="submit" class="btn btn-primary my-3" name="submit">Create</button>
                </div>
            </form>

    </div>
    </div>

</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';

?>