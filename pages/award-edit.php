<?php
$title = "Update Award";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM awards WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $imagePath = $row['image'];
    $imageName = basename($imagePath);
    $newImagePath = '../uploads/' . $imageName;
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $alt_tag    = $_POST['alt_tag'];
    $alt_description    = $_POST['alt_description'];

    $errorMessage = '';
    if (empty($title)) {
        $errorMessage = 'Title is required';
    }

    if ($_FILES['image']['name'] != '') {
        $id = $_GET['id'];
        $sql = "SELECT * FROM awards WHERE id=$id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $imagePath = $row['image'];
        $imageName = basename($imagePath);
        $newImagePath = '../uploads/' . $imageName;

        if (file_exists($newImagePath)) {
            unlink($newImagePath);
        }

        $photo = $_FILES['image']['name'];
        $extension = pathinfo($photo, PATHINFO_EXTENSION);
        $path = '../uploads/' . strtolower(str_replace(' ', '-', $title)) . '-' . random_int(10000, 99999) . '.' . $extension;

        move_uploaded_file($_FILES['image']['tmp_name'], $path);
    } else {
        $path = $imagePath;
    }

    if (empty($errorMessage)) {
        // Update record in the database
        $sql = "UPDATE awards SET title='$title', description='$description', image='$path', alt_tag='$alt_tag', alt_description='$alt_description' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['successMessage'] = "Record updated successfully";
        } else {
            $_SESSION['errorMessage'] =  "Error updating record: " . $conn->error;
        }
        header("Location: award.php");
        exit();
    }

}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h5> <strong> <?php echo $title; ?></strong> </h5>
            <a href="certificates.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST" enctype="multipart/form-data" id="submit">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title'] ?>" placeholder="title" required>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image">Exiting Image</label>
                        <br>
                        <img class="w-25" src="<?php echo $newImagePath ?>" alt="">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" placeholder="Description" class="form-control" id="summernote" cols="30" rows="10"><?php echo $row['description'] ?></textarea>
                    </div>
                </div>

                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="alt_text">Alt Text</label>
                        <input type="text" class="form-control" id="alt_text" name="alt_tag" value="<?php echo $row['alt_tag']?>" placeholder="alt Text">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="shortDescription">Alt Description</label>
                        <textarea id="shortDescription" name="alt_description" placeholder="Description" class="form-control"  cols="30" rows="10"><?php echo $row['alt_description']?></textarea>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary my-3" name="submit">Update</button>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();

include '../layouts/master.php';
?>