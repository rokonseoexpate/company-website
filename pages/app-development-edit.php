<?php
$title = "Update App Portfolio";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Fetch existing portfolio data
if (isset($_GET['id'])) {
    $portfolio_id = $_GET['id'];
    $select_query = "SELECT * FROM app_developments WHERE id = '$portfolio_id'";
    $result = mysqli_query($conn, $select_query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $images = json_decode($row['images'], true);
    } else {
        // Portfolio not found
        // Handle error or redirect
    }
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    $files = [];
    if (!empty($_FILES['images']['name'][0])) {
        $fileCount = count($_FILES['images']['name']);
        for ($i = 0; $i < $fileCount; $i++) {
            $originalFileName = $_FILES['images']['name'][$i];
            $fileNameWithoutSpaces = str_replace(' ', '-', $originalFileName); // Replace spaces with hyphens
            $fileName = time() . '-' . $fileNameWithoutSpaces;
            $fileTmpName = $_FILES['images']['tmp_name'][$i];
            $fileDestination = '../uploads/' . $fileName;
            move_uploaded_file($fileTmpName, $fileDestination);
            $files[] = $fileDestination;
        }
    }

    // Combine existing images with new ones
    if (!empty($images)) {
        $files = array_merge($images, $files);
    }

    $encodedFiles = json_encode($files);

    $update_query = "UPDATE app_developments SET name = '$name', images = '$encodedFiles' WHERE id = '$portfolio_id'";

    // Execute query
    if (mysqli_query($conn, $update_query)) {
        // Update successful
        $successMessage = "App Portfolio Updated successfully!";
    } else {
        // Update failed
        $errorMessage = "Error updating App Portfolio: " . mysqli_error($conn);
    }
}

?>


<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="app-development-list.php" class="btn btn-primary">App Portfolio List</a>
        </div>


        <form action="" method="POST" enctype="multipart/form-data" id="submit">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Branch" value="<?php echo isset($name) ? $name : ''; ?>" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="images">Images (Multiple)</label>
                        <input type="file" class="form-control" id="images" accept="image/*" name="images[]" placeholder="images" multiple>
                        <br>
                        <label for="images">Existing Photos</label>
                        <?php
                        $jsonString = $row['images'];
                        $data = json_decode($jsonString, true);
                        if ($data != null) {

                        ?>
                            <ul>
                            <?php foreach ($data as $file) { ?>
                                    <li><a target="_blank" href="<?= $file; ?>"><?= $file; ?></a></li>
                            <?php }?>
                            </ul>
                        <?php }?>
                    </div>
                </div>


            </div>
            <button type="submit" class="btn btn-primary my-3" name="submit">Update</button>
        </form>

    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';

?>
