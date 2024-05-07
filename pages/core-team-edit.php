<?php
$title = "Update Team Member";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM teams WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $name = $row['name'];
    $orderBy = $row['order_by'];
    $type = $row['type'];
    $designation = $row['designation'];
    $website = $row['website'];
    $facebook = $row['facebook'];
    $linkedin = $row['linkedin'];
    $imagePath = $row['image'];
    $imageName = basename($imagePath);
    $newImagePath = '../uploads/' . $imageName;
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $orderBy = $_POST['orderBy'];
    $type = $_POST['type'];
    $designation = $_POST['designation'];
    $website = $_POST['website'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];

    $path = $imagePath; // By default, keep the old image path

    if ($_FILES['image']['name'] != '') {
        // If a new image is uploaded
        $photo = $_FILES['image']['name'];
        $extension = pathinfo($photo, PATHINFO_EXTENSION);
        $path = '../uploads/' . random_int(10000, 99999) . '.' . $extension;

        // Move the uploaded image to the new location
        if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            // If the move is successful, unlink the old image
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        } else {
            echo "Failed to upload image!";
            exit;
        }
    }

    // Update record in the database
    $sql = "UPDATE teams SET name='$name', order_by='$orderBy', type='$type', designation='$designation', website='$website', facebook='$facebook', linkedin='$linkedin', image='$path' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Redirect to the list page after updating
    header("Location: core-team.php");
    exit();
}

?>


<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h4> <strong> <?php echo $title; ?></strong></h4>
            <a href="core-team.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form id="submitFrom" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $name ?>">
                        <div id="nameError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="orderBy">Priority <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="orderBy" name="orderBy" placeholder="Priority" value="<?php echo $orderBy ?>">
                        <div id="orderByError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="type">Type <span class="text-danger">*</span></label>
                        <select name="type" id="type" class="form-control">
                            <option value="">Select Type</option>
                            <option value="core_team" <?php echo $type == 'core_type' ? 'selected' : '' ?>>Core Team</option>
                            <option value="advisor" <?php echo $type == 'advisor' ? 'selected' : '' ?>>Advisor</option>
                        </select>
                        <div id="typeError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="designation">Designation <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" value="<?php echo $designation ?>">
                        <div id="designationError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="website">Website Link</label>
                        <input type="text" class="form-control" id="website" name="website" placeholder="Website Link" value="<?php echo $website ?>">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="facebook">Facebook Link</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook Link" value="<?php echo $facebook ?>">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="linkedin">Linkedin Link</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Linkedin Link" value="<?php echo $linkedin ?>">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Image <span class="text-danger">*</span></label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="Image">
                        <div id="imageError" class="error text-danger"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img style="width:350px; height:250px; border: 1px solid black; border-radius: 3px;" src="<?php echo $newImagePath ?>" alt="">
                </div>
                <div class="col-lg-12">
                    <button type="submit" id="submit" name="submit" class="btn btn-primary my-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();

include '../layouts/master.php';
?>
