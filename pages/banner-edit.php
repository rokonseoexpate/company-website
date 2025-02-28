<?php
$title = "Update Banners";
session_start();
ob_start();
require_once '../config/dbconnect.php';

$db = new DB_con();
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
$pageError = "";
$titleError = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM banners WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['submit'])) {
    $page = $_POST['page'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $imagePath = $row['image'];
    $path = $imagePath;

    if ($_FILES['image']['name'] != '') {
        // Handle image upload
        $file = $_FILES['image']['name'];
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        $path = '../uploads/' . strtolower(str_replace(' ', '-', $title)) . '-' . random_int(10000, 99999) . '.' . $extension;
        move_uploaded_file($_FILES['image']['tmp_name'], $path);

        // Delete existing image if present
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // Update record in the database using prepared statement
    $sql = "UPDATE banners SET page=?, title=?, description=?, image=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $page, $title, $description, $path, $id);


    if ($stmt->execute()) {
        $_SESSION['successMessage']  = "Successfully updated record!";
    } else {
        $_SESSION['errorMessage'] =  "Error updating record: " . $stmt->error;
    }

    // Redirect to the list page after updating
    header("Location: banner.php");
    exit();
}

$conn->close();
?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center py-2">
            <h5><strong><?php echo $title; ?></strong></h5>
            <a href="banner.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST" enctype="multipart/form-data" id="submit">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page">Page</label>
                        <select name="page" id="page" class="form-control" required>
                            <option value="">Select Category</option>
                            <option value="certificate" <?php echo ($row['page'] == "certificate") ? 'selected' : ''; ?> >Certificate</option>
                        </select>
                        <span class="text-danger"><?php echo $pageError; ?></span>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>" placeholder="Title">
                        <span class="text-danger"><?php echo $titleError; ?></span>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" placeholder="Description" class="form-control" id="summernote" cols="30" rows="10"><?php echo $row['description']; ?></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="Image">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group" style="height:200px; width:200px; object-fit:cover">
                        <label for="image">Existing Image</label>
                        <img class="w-100 h-100" src="<?php echo $row['image']; ?>" alt="">
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
