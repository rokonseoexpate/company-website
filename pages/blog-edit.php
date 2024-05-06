<?php
$title = "Update Blog";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM blogs WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}



if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($title)));
    $slug = trim($slug, '-') . random_int(11111, 99999);
    $short_description = $_POST['short_description'];
    $description = $_POST['short_description'];


    if ($_FILES['image']['name'] != '') {
        $id = $_GET['id'];
        $sql = "SELECT * FROM blogs WHERE id=$id";
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
        $path = '../uploads/' . strtolower(str_replace(' ', '-', $title)) .'-' . random_int(10000, 99999) . '.' . $extension;

        move_uploaded_file($_FILES['image']['tmp_name'], $path);
    } else {
        $path =  $row['image'];
    }

    // Update record in the database
    $sql = "UPDATE blogs SET title='$title', description='$description', slug='$slug', short_description='$short_description' , image='$path' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $successMessage = "Successfully updated record!";;
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Redirect to the list page after updating
    header("Location: blogs.php");
    exit();
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h5> <strong> <?php echo $title; ?></strong> </h5>
            <a href="blogs.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST" enctype="multipart/form-data" id="submit">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title'] ?>" placeholder="title">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Short Description</label>
                        <textarea name="short_description" placeholder="Description" class="form-control" id="shortDescription" cols="30" rows="10"><?php echo $row['short_description'] ?></textarea>
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
                        <label for="image">Image</label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="image">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group" style="height:200px; width:200px; object-fit:cover">
                        <label for="image">Exiting Image</label>
                        <img class="w-100 h-100" src="<?php echo $row['image'] ?>" alt="">
                    </div>
                </div>

                <div class="col-lg-12 mt-3">
                    <button type="submit" class="btn btn-primary my-3" name="submit">Update</button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();

include '../layouts/master.php';
?>