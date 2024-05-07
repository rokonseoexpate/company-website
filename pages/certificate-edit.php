<?php
$title = "Update Certificates";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM certificates WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $imagePath = $row['image'];
    $imageName = basename($imagePath);
    $newImagePath = '../uploads/' . $imageName;
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    if ($_FILES['image']['name'] != '') {
        $id = $_GET['id'];
        $sql = "SELECT * FROM certificates WHERE id=$id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $imagePath = $row['image'];
        $imageName = basename($imagePath);
        $newImagePath = '../uploads/' . $imageName;

        if (file_exists($imagePath)) {
            unlink($newImagePath);
        }

        $photo = $_FILES['image']['name'];
        $extension = pathinfo($photo, PATHINFO_EXTENSION);
        $path = '../uploads/' . random_int(10000, 99999) . '.' . $extension;

        move_uploaded_file($_FILES['image']['tmp_name'], $path);
    } else {
        $path = $imagePath;
    }

    // Update record in the database
    $sql = "UPDATE certificates SET title='$title', description='$description', image='$path' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Redirect to the list page after updating
    header("Location: certificates.php");
    exit();
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="certificates.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST" enctype="multipart/form-data" id="submit">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title'] ?>" placeholder="title">
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
                        <img class="w-100" src="<?php echo $newImagePath ?>" alt="">

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" placeholder="Description" class="form-control" id="description" cols="30" rows="10"><?php echo $row['description'] ?></textarea>
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