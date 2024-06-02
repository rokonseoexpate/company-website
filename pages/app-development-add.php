<?php
$title = "Create App Portfolio";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

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
    $encodedFiles = json_encode($files);

    $insert_query = "INSERT INTO app_developments (name, images) VALUES ('$name', '$encodedFiles')";

    // Execute query
    if (mysqli_query($conn, $insert_query)) {
        // Insert successful
        $_SESSION['successMessage'] = "App Portfolio Created successfully!";

    } else {
        // Insert failed
        $_SESSION['errorMessage'] = "Error creating Branch: " . mysqli_error($conn);
    }
    header("Location: app-development-list.php");
    exit();
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
                            <input type="text" class="form-control" id="name" name="name" placeholder="App Name" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="images">Images (Multiple)</label>
                            <input type="file" class="form-control" id="images"  accept="image/*" name="images[]" placeholder="images" multiple required>
                        </div>
                    </div>


                </div>
                <button type="submit" class="btn btn-primary my-3" name="submit">Create</button>
            </form>

        </div>
    </div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';

?>